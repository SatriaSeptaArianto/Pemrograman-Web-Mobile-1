<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
            crossorigin="anonymous">
    </head>
    <body>
        <h1>
            Pemilihan Umum Presma
        </h1>
        <form method="post">
            <label for="pilihan">Pilihan : </label>
            <select name="pilihan">
            <option value="1">1. Abigael</option>
            <option value="2">2. Fauzan</option>
            <option value="3">3. Kevin</option>
            <option value="4">4. Arifin</option>
            <option value="5">5. Michelle</option>
            </select><br><br>
        <label for="id_pemilih">NIM(6 Angka) : </label>
        <input type="number" name="id_pemilih"/>
        <button name="kirim" type="submit" >Submit</button>
        <form>
        <?php 
            require './koneksi.php';
            if (isset($_POST["kirim"])) {
                // menangkap data yang di kirim dari form
                $pilihan = $_POST['pilihan'];
                $id_pemilih = $_POST['id_pemilih'];

                $data1 = mysqli_query($koneksi,"select * from suara where id_pemilih='$id_pemilih'");

                // menghitung jumlah data yang ditemukan
                $cek = mysqli_num_rows($data1);
                if($cek <= 0){

                    $data =mysqli_query($koneksi,
                            "INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`, `waktu`) 
                             VALUES ('', '$id_pemilih', '$pilihan', CURRENT_TIME())");

                    if ($data) {
        ?>
                        <script language="javascript">
                            alert("Data Berhasil Ditambah");
                        </script>
        <?php
                    }
                }else if ($cek >= 0){
        ?>
            <script language="javascript">
                alert("NIM sudah ada");
            </script>
        <?php  
                }
            }
        ?> 	
    </body>
</html>