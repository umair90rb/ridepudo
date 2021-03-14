<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Pudo | Carbase Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>rp_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome core CSS -->
    <link href="<?php echo base_url(); ?>fonts/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>rp_assets/css/admin-style/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>rp_assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>rp_assets/css/admin-style/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/calendar.css">

  
    <style type="text/css">
      a {
          text-decoration: none;
      }
      ul, ol, li {
          list-style: none;
          padding: 0;
          margin: 0;
      }
      #demo {
          width: 300px;
          margin: 150px auto;
      }
      p {
          margin: 0;
      }
      #dt {
          margin: 30px auto;
          height: 28px;
          width: 200px;
          padding: 0 6px;
          border: 1px solid #ccc;
          outline: none;
      }
      #pleaseWaitDialog{
        z-index: 1051 !important;
      }
      .dt-buttons{
        display: inline !important;
      }
    </style>
    <!-- Jqurey library -->
    <script src="<?php echo base_url(); ?>rp_assets/js/jquery.min.js"></script>

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        
        <?php $this->load->view('carbase-sidebar-view'); ?>

        <?php $this->load->view($module); ?>

        
      </div>
    </div>
    <script src="<?php echo base_url(); ?>rp_assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
  var base_url = '<?php echo base_url(); ?>';
</script>
  </body>
</html>
