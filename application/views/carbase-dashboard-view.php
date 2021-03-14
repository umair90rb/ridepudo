<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pr-0 pl-0">
  <div class="container-fluid admn-dbrd-main">
    <div class="row mt-30">
      <div class="col-lg-4 col-md-4 col-12 mb-20 pt-30 admn-dbrd-card-main">
        <a href="#">
          <div class="card bg-mainclr">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <i class="fas fa-user-alt fa-5x clr-dark-o"></i>
                </div>
                <div class="col-8 text-right clr-light">
                  <h5 class="font-weight-bold">Total Rides</h5>
                  <h4 class="font-weight-bold">20</h4>
                </div>
              </div>
              
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mb-20 pt-30 admn-dbrd-card-main">
        <a href="#">
          <div class="card bg-mainclr">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <i class="fas fa-users fa-5x clr-dark-o"></i>
                </div>
                <div class="col-8 text-right clr-light">
                  <h5 class="font-weight-bold">Total Users</h5>
                  <h4 class="font-weight-bold"><?php echo $info['users']; ?></h4>
                </div>
              </div>
              
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-4 col-md-4 col-12 mb-20 pt-30 admn-dbrd-card-main">
        <a href="#">
          <div class="card bg-mainclr">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <i class="fas fa-car fa-5x clr-dark-o"></i>
                </div>
                <div class="col-8 text-right clr-light">
                  <h5 class="font-weight-bold">Total Drivers</h5>
                  <h4 class="font-weight-bold"><?php echo $info['drivers']; ?></h4>
                </div>
              </div>
              
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid  pt-30">
    <div class="row">
      <div class="col-lg-8 col-12">
        <div id="chart_div" style="width: 100%; height: 400px"></div>
      </div>
      <div class="col-lg-4 col-12 pt-50">
        <div id="ca" class="calendar calendar-d"></div>
      </div>
    </div>
  </div>
</main>

<script src="<?php echo base_url(); ?>rp_assets/js/calendar.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart', 'line']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'X');
            data.addColumn('number', 'Dogs');

            data.addRows([
              [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
              [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
              [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
              [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
              [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
              [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
              [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
              [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
              [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
              [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
              [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
              [66, 70], [67, 72], [68, 75], [69, 80]
            ]);

            var options = {
              hAxis: {
                title: 'Time'
              },
              vAxis: {
                title: 'Popularity'
              },
              colors: ['#b561e3']
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
          }
    </script>
    <script>
    $('#ca').calendar({
        // view: 'month',
        width: 240,
        height: 240,
        // startWeek: 0,
        // selectedRang: [new Date(), null],
        data: [
    {
      date: '2020/10/30',
      value: 'Dushahra'
    },
    {
      date: '2020/12/25',
      value: 'Merry Christmas'
    },
    {
      date: '2020/01/01',
      value: 'Happy New Year'
    }
  ],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });

    $('#dd').calendar({
        trigger: '#dt',
        // offset: [0, 1],
        zIndex: 999,
        onSelected: function (view, date, data) {
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) {
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });
</script>
<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover({
      html: true,
      sanitize: false
    });
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>
