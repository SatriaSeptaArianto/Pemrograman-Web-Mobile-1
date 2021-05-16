<?php 
    require 'functionemployee.php';

    // ambil data di URL
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan ID
    $employee = query("SELECT * FROM employee 
                       INNER JOIN department 
                        ON employee.id_department=department.id 
                        WHERE employee.id_employee = $id")[0];
    $departs = query("SELECT * FROM department");

    // cek tombol submit sdh ditekan atau belum
    if(isset($_POST["submit"])) {
	    // cek apakah data berhasil di ubah atau tidak
	    if (ubah($_POST) > 0){
		    echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'employee.php';
				</script>
		    ";
    	} else {
	    	echo "
        		<script>
					alert('data gagal diubah!');
					document.location.href = 'employee.php';
				</script>
		    ";
	    }
    }	
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
            <div class="col">
                <h1>Ubah Data Employee</h1>
                    <a href="employee.php">
                        <div class="div btn btn-primary mb-4">
                            Kembali
                        </div>
                    </a>
              
                <form action="" method="post">   
                    <ul>       
                        <li>
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama" id="nama" required value="<?php echo $employee["nama"]; ?>">
                        </li>

                        <li>
                            <label for="nama">ID : </label>
                            <input type="text" name="id_employee" id="id_employee" required value="<?php echo $employee["id_employee"]; ?>">
                        </li>

                        <li  class="mb-2">
                            <div class="form-group">
                                <label for="id_department ">id_department</label>
                                <select name="id_department" class="form-control" id="id_department ">
                                    <option  value="<?php echo $employee["id_department"]; ?>" selected><?php echo $employee["nama_department"]; ?></option>
                                    <?php foreach($departs as $depart) : ?>
                                        <option value="<?= $depart["id"] ?>"><?= $depart["nama_department"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>

                        <li class="mt-2">
                            <button type="submit" name="submit">Tambah Data!</button>
                        </li>
                            
                    </ul>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>