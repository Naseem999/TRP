  <html>

  <head>
      <?php
        include_once 'partial/head.php';
        date_default_timezone_set('Asia/Kolkata');
        $currentdate = date('Y-m-d');
        ?>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
          google.charts.load('current', {
              'packages': ['corechart']
          });
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
              var data = google.visualization.arrayToDataTable([
                  ['Date', 'Registered Patients'],
                  <?php
                    $patient_today = 0;
                    $sql = "SELECT * FROM patient";
                    $result = mysqli_query($con, $sql);

                    $num_date=1;
                    

                    // if (mysqli_num_rows($result) > 0) {
                    //     while ($row = mysqli_fetch_assoc($result)) {
                    //         if()
                    //     }
                    // }
                    ?>['2004', 1000, ],
                  ['2005', 1170, ],
                  ['2006', 660, ],
                  ['2007', 1030, ]
              ]);

              var options = {
                  title: 'Registered Patients',
                  curveType: 'function',
                  legend: {
                      position: 'bottom'
                  }
              };

              var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

              chart.draw(data, options);
          }
      </script>
  </head>

  <body>

      <div class="row" style="margin: 1vh;">
          <div class="col-xl-12 col-md-12 mb-4">

              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                  </div>
                  <div class="card-body">
                      <div id="curve_chart" style="width: 100%; height: 80vh"></div>

                  </div>
              </div>
          </div>
      </div>

      <?php
        include_once 'partial/scripts.php';
        ?>
  </body>

  </html>