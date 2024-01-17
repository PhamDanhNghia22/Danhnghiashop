<div class="col-4 main content mx-2 p-5">
<p>Welcome to dashboard</p>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<a href="<?php echo BASE_URL?>admin/logout">Đăng xuất</a>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
        <?php
            $tongdm = count($thongkedmSP);
            $i=1;
            foreach($thongkedmSP as $thongkesp){
            if($i == $tongdm) $dauphay =""; else $dauphay=",";
                
            
        ?>
        ['<?=$thongkesp['name_cate']?>', '<?=$thongkesp['countsp']?>']<?=$dauphay?>
        <?php 
            $i+=1;
            } 
        ?>
          
        //   ['Work',     11],
        //   ['Eat',      2],
        //   ['Commute',  2],
        //   ['Watch TV', 2],
        //   ['Sleep',    7]
        ]);

        var options = {
          title: 'Thống kê danh mục sản phẩm'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>




    

