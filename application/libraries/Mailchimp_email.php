<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    require_once('vendor/autoload.php');
    use MailchimpMarketing\ApiClient;
    use MailchimpTransactional\ApiClient as TransactionalClient;
    
class Mailchimp_email{

	function send_set_password_mail($user_data){

        $user_email = $user_data['email'];
        $user_name = $user_data['first_name'].' '.$user_data['last_name'];
        $token = $user_data['token'];

        $api_key = '3f30c878120a597cfd6c7d0a222933fd-us2';

        $msg = $this->get_html_mail($user_data, $token);

        $message = [
            "from_email" => 'info@ridepudo.com',
            "from_name" => 'Ride Pudo',
            "subject" => 'Ride Pudo Account Password Setup',
            "html" => $msg,
            "to" => [ array("email" => $user_email,"name" => $user_name,"type" => "to") ]
        ];

        try {
            $mailchimp = new TransactionalClient();
            $mailchimp->setApiKey($api_key);

            $response = $mailchimp->messages->send(["message" => $message]);

        } catch (Error $e) {
            echo 'Error: ', $e->getMessage(), "\n";
        }

        return $response;
    }
    
	function get_html_mail($email_data, $token){

        $reset_url = base_url().'set_password?token_code='.$token.'&id='.$email_data["user_id"].'&user='.$email_data["email"];

        $html_content = '<!DOCTYPE html>
        <html>
        <head>
            <title>Setup a new password for Your Ride Pudo Account</title>
        </head>
        <body>
            <style type="text/css">
                .email-container{
                    margin-left: 5%;
                    margin-right: 5%;
                    margin-top: 30px;
                }

                @media only screen and (max-width: 576px) {
                  .email-container{
                        margin-left: 1%;
                        margin-right: 1%;
                        margin-top: 30px;
                    }

                }
            </style>
            <div class="email-container">
                <h1 style="box-sizing: border-box; color: #2F3133; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 19px; font-weight: bold; margin-top: 0;" align="left">Hi '.$email_data['first_name'].',</h1>

                <br>
                <p style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16px; line-height: 1.5em; margin-top: 0;" align="left">Setup password for your Ride Pudo account. Use the button below to setup. <strong style="box-sizing: border-box; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;">This password set link is only valid for one time.</strong></p>

                <br>

                <a href="'.$reset_url.'" class="button button--green" target="_blank" style="padding: 18px 34px;
                    font-size: 15px;
                    font-weight: 400;
                    font-style: normal;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    color: snow;
                    background-color: #a155c7;
                    box-shadow: 0 2px 0 0 #297ac4;
                    border: none;
                    text-decoration: none;
                    font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;
                    ">Set your password</a>

                <br>
                <br>

                <p style="margin-top: 30px !important; box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16px; line-height: 1.5em; margin-top: 0;" align="left">If you did not request a password set, please ignore this email.</p>
                <p style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16px; line-height: 1.5em; margin-top: 0;" align="left">Thanks.
                                                    <br ></p>

                <p class="sub" style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 12px; line-height: 1.5em; margin-top: 0;" align="left">If you’re having trouble with the button above, copy and paste the URL below into your web browser.</p>
                <p class="sub" style="box-sizing: border-box; color: #1c55ab; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 12px; line-height: 1.5em; margin-top: 0;" align="left">'.$reset_url.'</p>
            </div>

        </body>
        </html>';

        return $html_content;
    }// end of get html mail

    function send_reset_password_email($user_data,$token){

        $user_email = $user_data['email'];
        $user_name = $user_data['first_name'].' '.$user_data['last_name'];

        $api_key = 'auoBmMYbxCJZ9k_9q01Lxw';

        $msg = $this->get_html_forget_mail($user_data, $token);

        $message = [
            "from_email" => 'info@ridepudo.com',
            "from_name" => 'Ride Pudo',
            "subject" => 'Ride Pudo Account Password Reset',
            "html" => $msg,
            "to" => [ array("email" => $user_email,"name" => $user_name,"type" => "to") ]
        ];

        try {
            $mailchimp = new TransactionalClient();
            $mailchimp->setApiKey($api_key);

            $response = $mailchimp->messages->send(["message" => $message]);

        } catch (Error $e) {
            echo 'Error: ', $e->getMessage(), "\n";
        }

        return $response;
    }
    
    function get_html_forget_mail($email_data, $token){

        $reset_url = base_url().'reset_password?token_code='.$token.'&id='.$email_data["user_id"].'&user='.$email_data["email"];

        $html_content = '<!DOCTYPE html>
        <html>
        <head>
            <title>Setup a new password for Your RidePudo Account</title>
        </head>
        <body>
            <style type="text/css">
                .email-container{
                    margin-left: 5%;
                    margin-right: 5%;
                    margin-top: 30px;
                }

                @media only screen and (max-width: 576px) {
                  .email-container{
                        margin-left: 1%;
                        margin-right: 1%;
                        margin-top: 30px;
                    }

                }
            </style>
            <div class="email-container">
                <h1 style="box-sizing: border-box; color: #2F3133; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 19px; font-weight: bold; margin-top: 0;" align="left">Hi '.$email_data['first_name'].',</h1>

                <br>
                <p style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16px; line-height: 1.5em; margin-top: 0;" align="left">You recently requested to reset your password for Ride Pudo account. Use the button below to reset. <strong style="box-sizing: border-box; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;">This password reset link is only valid for one time.</strong></p>

                <br>

                <a href="'.$reset_url.'" class="button button--green" target="_blank" style="padding: 18px 34px;
                    font-size: 15px;
                    font-weight: 400;
                    font-style: normal;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    color: snow;
                    background-color: #a155c7;
                    box-shadow: 0 2px 0 0 #297ac4;
                    border: none;
                    text-decoration: none;
                    font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;
                    ">Reset your password</a>

                <br>
                <br>

                <p style="margin-top: 30px !important; box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16px; line-height: 1.5em; margin-top: 0;" align="left">If you did not request a password reset, please ignore this email.</p>
                <p style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16px; line-height: 1.5em; margin-top: 0;" align="left">Thanks.
                                                    <br ></p>

                <p class="sub" style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 12px; line-height: 1.5em; margin-top: 0;" align="left">If you’re having trouble with the button above, copy and paste the URL below into your web browser.</p>
                <p class="sub" style="box-sizing: border-box; color: #1c55ab; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 12px; line-height: 1.5em; margin-top: 0;" align="left">'.$reset_url.'</p>
            </div>

        </body>
        </html>';

        return $html_content;
    }// end of get html mail



        function send_email_verify($user_data,$resetlink){

        $user_email = $user_data['email'];
        $user_name = $user_data['first_name'].' '.$user_data['last_name'];

        $api_key = 'auoBmMYbxCJZ9k_9q01Lxw';

        $msg = $this->get_html_email_verify($user_data, $resetlink);

        $message = [
            "from_email" => 'info@ridepudo.com',
            "from_name" => 'Ride Pudo',
            "subject" => 'Verify Email',
            "html" => $msg,
            "to" => [ array("email" => $user_email,"name" => $user_name,"type" => "to") ]
        ];

        try {
            $mailchimp = new TransactionalClient();
            $mailchimp->setApiKey($api_key);

            $response = $mailchimp->messages->send(["message" => $message]);

        } catch (Error $e) {
            echo 'Error: ', $e->getMessage(), "\n";
        }

        return $response;
    }
    
    function get_html_email_verify($email_data, $resetlink){

        $reset_url = $resetlink;

        $html_content = '<!DOCTYPE html>
        <html>
        <head>
            <title>Verify Your RidePudo Account</title>
        </head>
        <body>
            <style type="text/css">
                .email-container{
                    margin-left: 5%;
                    margin-right: 5%;
                    margin-top: 30px;
                }

                @media only screen and (max-width: 576px) {
                  .email-container{
                        margin-left: 1%;
                        margin-right: 1%;
                        margin-top: 30px;
                    }

                }
            </style>
            <div class="email-container">
                <h1 style="box-sizing: border-box; color: #2F3133; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 19px; font-weight: bold; margin-top: 0;" align="left">Hi '.$email_data['first_name'].',</h1>


                <br>

                <a href="'.$reset_url.'" class="button button--green" target="_blank" style="padding: 18px 34px;
                    font-size: 15px;
                    font-weight: 400;
                    font-style: normal;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    color: snow;
                    background-color: #a155c7;
                    box-shadow: 0 2px 0 0 #297ac4;
                    border: none;
                    text-decoration: none;
                    font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;
                    ">Verify Your Email</a>

                <br>
                <br>
                <p style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 16px; line-height: 1.5em; margin-top: 0;" align="left">Thanks.
                                                    <br ></p>

                <p class="sub" style="box-sizing: border-box; color: #74787E; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 12px; line-height: 1.5em; margin-top: 0;" align="left">If you’re having trouble with the button above, copy and paste the URL below into your web browser.</p>
                <p class="sub" style="box-sizing: border-box; color: #1c55ab; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-size: 12px; line-height: 1.5em; margin-top: 0;" align="left">'.$reset_url.'</p>
            </div>

        </body>
        </html>';

        return $html_content;
    }// end of get html mail


    function send_subscribe_email($email){

        $api_key = 'auoBmMYbxCJZ9k_9q01Lxw';

        $msg = $this->template_subscribe();

        $message = [
            "from_email" => 'info@ridepudo.com',
            "from_name" => 'Ride Pudo',
            "subject" => 'Thank you for subscribing Ride Pudo',
            "html" => $msg,
            "to" => [ array("email" => $email,"type" => "to") ]
        ];

        try {
            $mailchimp = new TransactionalClient();
            $mailchimp->setApiKey($api_key);

            $response = $mailchimp->messages->send(["message" => $message]);

        } catch (Error $e) {
            echo 'Error: ', $e->getMessage(), "\n";
        }

        return $response;

    }

    function add_subscriber($email){

        //$list = $this->get_list_info();

        $list_id = '883c624760';

        $client = new MailchimpMarketing\ApiClient();
        $client->setConfig([
            'apiKey' => '3f30c878120a597cfd6c7d0a222933fd',
            'server' => 'us2',
        ]);

        $member = [
            'email_address' => $email,
            'email_type'=> 'html',
            'status' => 'subscribed'
        ];

        try {
            $response = $client->lists->addListMember($list_id,$member);
            // print_r($response);
            return true;
        } catch (Error $e) {
            echo 'Error: ', $e->getMessage(), "\n";
        }

    }

    function add_signup_user($email){

        //$list = $this->get_list_info();

        $list_id = '883c624760';

        $client = new MailchimpMarketing\ApiClient();
        $client->setConfig([
            'apiKey' => '3f30c878120a597cfd6c7d0a222933fd',
            'server' => 'us2',
        ]);

        $member = [
            'email_address' => $email,
            'email_type'=> 'html',
            'status' => 'subscribed'
        ];

        try {
            $response = $client->lists->addListMember($list_id,$member);
            // print_r($response);
            
        } catch (Error $e) {
            echo 'Error: ', $e->getMessage(), "\n";
        }
        return true;

    }

    function get_list_info(){

        $client = new MailchimpMarketing\ApiClient();
        $client->setConfig([
            'apiKey' => '3f30c878120a597cfd6c7d0a222933fd',
            'server' => 'us2',
        ]);

        $response = $client->lists->getAllLists();
        print_r($response);
    }


    public function template_subscribe(){
        return '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <!-- NAME: SELL PRODUCTS -->
        <!--[if gte mso 15]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>*|MC:SUBJECT|*</title>
        
    <style type="text/css">
        p{
            margin:10px 0;
            padding:0;
        }
        table{
            border-collapse:collapse;
        }
        h1,h2,h3,h4,h5,h6{
            display:block;
            margin:0;
            padding:0;
        }
        img,a img{
            border:0;
            height:auto;
            outline:none;
            text-decoration:none;
        }
        body,#bodyTable,#bodyCell{
            height:100%;
            margin:0;
            padding:0;
            width:100%;
        }
        .mcnPreviewText{
            display:none !important;
        }
        #outlook a{
            padding:0;
        }
        img{
            -ms-interpolation-mode:bicubic;
        }
        table{
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        .ReadMsgBody{
            width:100%;
        }
        .ExternalClass{
            width:100%;
        }
        p,a,li,td,blockquote{
            mso-line-height-rule:exactly;
        }
        a[href^=tel],a[href^=sms]{
            color:inherit;
            cursor:default;
            text-decoration:none;
        }
        p,a,li,td,body,table,blockquote{
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
        }
        .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
            line-height:100%;
        }
        a[x-apple-data-detectors]{
            color:inherit !important;
            text-decoration:none !important;
            font-size:inherit !important;
            font-family:inherit !important;
            font-weight:inherit !important;
            line-height:inherit !important;
        }
        .templateContainer{
            max-width:600px !important;
        }
        a.mcnButton{
            display:block;
        }
        .mcnImage,.mcnRetinaImage{
            vertical-align:bottom;
        }
        .mcnTextContent{
            word-break:break-word;
        }
        .mcnTextContent img{
            height:auto !important;
        }
        .mcnDividerBlock{
            table-layout:fixed !important;
        }
    /*
    @tab Page
    @section Heading 1
    @style heading 1
    */
        h1{
            /*@editable*/color:#222222;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:40px;
            /*@editable*/font-style:normal;
            /*@editable*/font-weight:bold;
            /*@editable*/line-height:150%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:center;
        }
    /*
    @tab Page
    @section Heading 2
    @style heading 2
    */
        h2{
            /*@editable*/color:#222222;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:34px;
            /*@editable*/font-style:normal;
            /*@editable*/font-weight:bold;
            /*@editable*/line-height:150%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:left;
        }
    /*
    @tab Page
    @section Heading 3
    @style heading 3
    */
        h3{
            /*@editable*/color:#444444;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:22px;
            /*@editable*/font-style:normal;
            /*@editable*/font-weight:bold;
            /*@editable*/line-height:150%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:left;
        }
    /*
    @tab Page
    @section Heading 4
    @style heading 4
    */
        h4{
            /*@editable*/color:#949494;
            /*@editable*/font-family:Georgia;
            /*@editable*/font-size:20px;
            /*@editable*/font-style:italic;
            /*@editable*/font-weight:normal;
            /*@editable*/line-height:125%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:left;
        }
    /*
    @tab Header
    @section Header Container Style
    */
        #templateHeader{
            /*@editable*/background-color:#000000;
            /*@editable*/background-image:url("https://mcusercontent.com/678d2df94148a99632857bcb6/images/115e9f14-b165-460f-a2b2-2c9742e042ed.jpg");
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:contain;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:45px;
            /*@editable*/padding-bottom:45px;
        }
    /*
    @tab Header
    @section Header Interior Style
    */
        .headerContainer{
            /*@editable*/background-color:transparent;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0;
            /*@editable*/padding-bottom:0;
        }
    /*
    @tab Header
    @section Header Text
    */
        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
            /*@editable*/color:#757575;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:16px;
            /*@editable*/line-height:150%;
            /*@editable*/text-align:left;
        }
    /*
    @tab Header
    @section Header Link
    */
        .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
            /*@editable*/color:#007C89;
            /*@editable*/font-weight:normal;
            /*@editable*/text-decoration:underline;
        }
    /*
    @tab Body
    @section Body Container Style
    */
        #templateBody{
            /*@editable*/background-color:#b760e3;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:36px;
            /*@editable*/padding-bottom:45px;
        }
    /*
    @tab Body
    @section Body Interior Style
    */
        .bodyContainer{
            /*@editable*/background-color:transparent;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0;
            /*@editable*/padding-bottom:0;
        }
    /*
    @tab Body
    @section Body Text
    */
        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
            /*@editable*/color:#757575;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:16px;
            /*@editable*/line-height:150%;
            /*@editable*/text-align:left;
        }
    /*
    @tab Body
    @section Body Link
    */
        .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
            /*@editable*/color:#007C89;
            /*@editable*/font-weight:normal;
            /*@editable*/text-decoration:underline;
        }
    /*
    @tab Footer
    @section Footer Style
    */
        #templateFooter{
            /*@editable*/background-color:#333333;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:45px;
            /*@editable*/padding-bottom:63px;
        }
    /*
    @tab Footer
    @section Footer Interior Style
    */
        .footerContainer{
            /*@editable*/background-color:transparent;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0;
            /*@editable*/padding-bottom:0;
        }
    /*
    @tab Footer
    @section Footer Text
    */
        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
            /*@editable*/color:#FFFFFF;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:12px;
            /*@editable*/line-height:150%;
            /*@editable*/text-align:center;
        }
    /*
    @tab Footer
    @section Footer Link
    */
        .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
            /*@editable*/color:#FFFFFF;
            /*@editable*/font-weight:normal;
            /*@editable*/text-decoration:underline;
        }
    @media only screen and (min-width:768px){
        .templateContainer{
            width:600px !important;
        }

}   @media only screen and (max-width: 480px){
        body,table,td,p,a,li,blockquote{
            -webkit-text-size-adjust:none !important;
        }

}   @media only screen and (max-width: 480px){
        body{
            width:100% !important;
            min-width:100% !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnRetinaImage{
            max-width:100% !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnImage{
            width:100% !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
            max-width:100% !important;
            width:100% !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnBoxedTextContentContainer{
            min-width:100% !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnImageGroupContent{
            padding:9px !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
            padding-top:9px !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
            padding-top:18px !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnImageCardBottomImageContent{
            padding-bottom:9px !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnImageGroupBlockInner{
            padding-top:0 !important;
            padding-bottom:0 !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnImageGroupBlockOuter{
            padding-top:9px !important;
            padding-bottom:9px !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnTextContent,.mcnBoxedTextContentColumn{
            padding-right:18px !important;
            padding-left:18px !important;
        }

}   @media only screen and (max-width: 480px){
        .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
            padding-right:18px !important;
            padding-bottom:0 !important;
            padding-left:18px !important;
        }

}   @media only screen and (max-width: 480px){
        .mcpreview-image-uploader{
            display:none !important;
            width:100% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Heading 1
    @tip Make the first-level headings larger in size for better readability on small screens.
    */
        h1{
            /*@editable*/font-size:30px !important;
            /*@editable*/line-height:125% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Heading 2
    @tip Make the second-level headings larger in size for better readability on small screens.
    */
        h2{
            /*@editable*/font-size:26px !important;
            /*@editable*/line-height:125% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Heading 3
    @tip Make the third-level headings larger in size for better readability on small screens.
    */
        h3{
            /*@editable*/font-size:20px !important;
            /*@editable*/line-height:150% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Heading 4
    @tip Make the fourth-level headings larger in size for better readability on small screens.
    */
        h4{
            /*@editable*/font-size:18px !important;
            /*@editable*/line-height:150% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Boxed Text
    @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
    */
        .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
            /*@editable*/font-size:14px !important;
            /*@editable*/line-height:150% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Header Text
    @tip Make the header text larger in size for better readability on small screens.
    */
        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
            /*@editable*/font-size:16px !important;
            /*@editable*/line-height:150% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Body Text
    @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
    */
        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
            /*@editable*/font-size:16px !important;
            /*@editable*/line-height:150% !important;
        }

}   @media only screen and (max-width: 480px){
    /*
    @tab Mobile Styles
    @section Footer Text
    @tip Make the footer content text larger in size for better readability on small screens.
    */
        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
            /*@editable*/font-size:14px !important;
            /*@editable*/line-height:150% !important;
        }

}</style></head>
    <body>
        <!--*|IF:MC_PREVIEW_TEXT|*-->
        <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
        <!--*|END:IF|*-->
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td align="center" valign="top" id="templateHeader" data-template-container>
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                    <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                                    <![endif]-->
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="*|BRAND:LOGO|*" width="196" style="max-width:196px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" id="templateBody" data-template-container>
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                    <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                                    <![endif]-->
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://mcusercontent.com/678d2df94148a99632857bcb6/images/ef33bbae-e641-4add-9e81-9311d4c39d3a.jpg" width="564" style="max-width:2000px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
                
                <!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <h3><strong>WELCOME TO PUDO!</strong></h3>

<p><span style="color:#FFFFFF"><font face="Calibri">Thank you for signing up with PUDO! We are a safe, clean and reliable driving service designed to get you to and from all your cosmetology appointments. Help us spread the word by telling your clients, local shops, stylists, friends, and family.</font></span><br>
&nbsp;</p>

<p><span style="color:#FFFFFF"><font face="Calibri">This is only a soft launch, but PUDO will officially be available for everyone’s use on March 10, 2021. We will keep you updated on new add-ons and promotions through our email list.</font></span><br>
&nbsp;</p>

<p><strong><span style="color:#FFFFFF">We look forward to riding with you soon!</span></strong></p>
<style type="text/css">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}
</style>
<style type="text/css">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}
</style>
<style type="text/css">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}
</style>

                        </td>
                    </tr>
                </tbody></table>
                <!--[if mso]>
                </td>
                <![endif]-->
                
                <!--[if mso]>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" id="templateFooter" data-template-container>
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                    <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                                    <![endif]-->
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">
                                    <!--[if mso]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://mobile.twitter.com/ridepudo" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" alt="Twitter" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://www.instagram.com/ridepudo/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" alt="Instagram" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://www.snapchat.com/add/ridepudo" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-snapchat-48.png" alt="Snapchat" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                    <!--[if mso]>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                <tr>
                <![endif]-->
                
                <!--[if mso]>
                <td valign="top" width="600" style="width:600px;">
                <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <em>Copyright © 2020&nbsp;</em>Pudo, LLC<em>, All rights reserved.</em><br>
<style type="text/css">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}
</style>
<style type="text/css">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}
</style>
<style type="text/css">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}
</style>

                        </td>
                    </tr>
                </tbody></table>
                <!--[if mso]>
                </td>
                <![endif]-->
                
                <!--[if mso]>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
';
    }

}