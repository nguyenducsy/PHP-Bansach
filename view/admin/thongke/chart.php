<!DOCTYPE html>
<html lang="en-US">
<body>


      <div id="piechart"></div>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
      // Load google charts
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      // Draw the chart and set the chart values
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Loại', 'Số lượng'],
        <?php
            foreach ($thongke as $tk){
            echo "['$tk[Tenloai]', $tk[Tong_loai_sanpham]],";
            }
            ?>
      ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'Thống kê hàng hóa', 'width':1500, 'height':700};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
      </script>

</body>
</html>
