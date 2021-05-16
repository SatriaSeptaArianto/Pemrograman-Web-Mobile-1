<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
    <script language='JavaScript'>
            var txt=" Pemilihan Umum Presma ";
            var speed=300;
            var refresh=null;
            function action() { document.title=txt;
            txt=txt.substring(1,txt.length)+txt.charAt(0);
            refresh=setTimeout("action()",speed);}action();
    </script>
  </head>
  
  <body>
    <section>
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #00CED1" >
            <div class="container">
                <a class="navbar-brand" href="index.php">PEMILU</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?halaman=suara">Pemilihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?halaman=chart">Chart</a>
                    </li>

                    </ul>
                </div>
            </nav>
          </div>
        </div>
      </div>
    </section>

  <?php
    if (isset($_GET['halaman'])){
      if ($_GET['halaman']=="suara"){
        include 'suara.php'; 
      }
      elseif ($_GET['halaman']=="chart"){
        include 'chart.php'; 
      }
    }
  ?>
  
  </body>
</html>