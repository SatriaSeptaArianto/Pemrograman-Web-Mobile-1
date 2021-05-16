<?php
   require 'functionemployee.php';
   $employs = query("SELECT * FROM employee INNER JOIN department ON employee.id_department=department.id");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Modul 3</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
             
          <a href="employee_tambah.php">
            <div class="div btn btn-primary mb-4">
              Tambah Data
            </div>
          </a>
              
          <a href="department.php">
            <div class="div btn btn-primary mb-4">
              Ke Halaman Department
            </div>
          </a>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">ID</th>
                <th scope="col">Department</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $i=1; ?>
                <?php foreach($employs as $employee) : ?>
                <td><?php echo $i; ?></td>     
                <td><?= $employee["nama"]; ?></td>
                <td><?= $employee["id_employee"]; ?></td>
                <td><?= $employee["nama_department"]; ?></td>
                <td>
             	    <a href="employee_ubah.php?id=<?php echo $employee["id_employee"]; ?>">ubah</a> | 
                  <a href="employee_hapus.php?id=<?php echo $employee["id_employee"]; ?>" onclick="return confirm('Yakin?');">hapus</a>
                </td>
              </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>