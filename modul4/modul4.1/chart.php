<html>
    <head>
        <style>
            #container {
                height: 400px;
            }
            .highcharts-figure, .highcharts-data-table table {
                min-width: 310px;
                max-width: 800px;
                margin: 1em auto;
            }
            #datatable {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #EBEBEB;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }
            #datatable caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }
            #datatable th {
                font-weight: 600;
                padding: 0.5em;
            }
            #datatable td, #datatable th, #datatable caption {
                padding: 0.5em;
            }
            #datatable thead tr, #datatable tr:nth-child(even) {
                background: #f8f8f8;
            }
            #datatable tr:hover {
                background: #f1f7ff;
            }
        </style>
    </head>
    <body>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <figure class="highcharts-figure">
            <div id="container"></div>
                <p class="highcharts-description">
                    Ini adalah tabel dari survei merk laptop pilihan beberapa masyarakat
                </p>
                <table id="datatable"> 
                    <thead>
                        <tr>
                            <th>Merk</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'koneksi.php';
                            $view = $koneksi -> query("SELECT merk_pilihan,COUNT(*) as hasil FROM merk 
                                                       GROUP by merk_pilihan");
                            while($row=$view->fetch_array()){
                        ?> 
                        <tr>
                            <td><?php echo $row['merk_pilihan']; ?></td>  
                            <td><?php echo $row['hasil']; ?></td>                                                      
                        </tr>						
                        <?php }?>
                    </tbody>
                </table>
        </figure>
        <script>
            Highcharts.chart('container', {
                data: {
                    table: 'datatable'
                },
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Survei Merk Laptop Pilihan'
                },
                yAxis: {
                    allowDecimals: false,
                    title: {
                        text: 'Jumlah'
                    }
                },
                tooltip: {
                    formatter: function () {
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.point.y + ' ' + this.point.name.toLowerCase();
                    }
                }
            });
        </script>
    </body>
</html>