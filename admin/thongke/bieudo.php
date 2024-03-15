
<div class="row">
    <div
    id="myChart" style="width:100%; max-width: 600px; height:500px;">
    </div>
    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    const data = google.visualization.arrayToDataTable([ 
        ['Danh mục', 'số lượng'],
        <?php
            $tongdm=count($listbieudo);
            $i=1;
            foreach($listbieudo as $bieudo){
            extract ($bieudo);
            if($i==$tongdm) $dauphay=""; else $dauphay=",";
            echo "['".$bieudo['tendm']."', ".$bieudo['countsp']."]".$dauphay; 
            $i+-1;
            }
        ?>
    ]);
    const options = {
        title:'Biểu đồ thống kê'
    };

    const chart = new google.visualization.PieChart(document.getElementById('myChart')); 
    chart.draw(data, options);
    }
    </script>
</div>