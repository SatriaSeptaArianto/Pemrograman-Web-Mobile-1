<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
  </head>
  
  <body>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Merk</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'koneksi.php';
                $no = 0;
                $view = $koneksi -> query("SELECT * FROM `merk` ");
                while($row=$view->fetch_array()){
                $no++;
              ?> 
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $row['nama']; ?></td>            
                <td><?php echo $row['merk_pilihan']; ?></td>                     
              </tr>						
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>