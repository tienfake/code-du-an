<div class="row">
    <div class="row header formtittle">
        <h1>Biểu đồ</h1>
    </div>
    <div class="row formcontent">

        <script src="https://www.gstatic.com/charts/loader.js"></script>

        <body>
            <div id="myChart" style="width:100%; max-width:600px; height:500px;">
            </div>

            <script>
                google.charts.load('current', { 'packages': ['corechart'] });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    // Set Data
                    const data = google.visualization.arrayToDataTable([
                        ['Danh mục',' Số lượng sanr phẩm'],
                        <?php
                        $tongdm = count($listthongke);
                        $i=1;
                            foreach($listthongke as $tk){
                                extract($tk);
                                if($i==$tongdm) $dauphay=""; else $dauphay=",";
                                echo "['".$tk['tendanhmuc']."',".$tk['countsp']."]".$dauphay;
                                $i+=1;
                            }
                        ?>
                    ]);

                    // Set Options
                    const options = {
                        title: 'Thống kê'
                    };

                    // Draw
                    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data, options);

                }
            </script>
    </div>
</div>