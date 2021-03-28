<?php
        $names= ["samuel park", "karen", "aiden", "kim jo jo","trace"];
        function vokal($kalimat) {
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');
            $count = ($a+$i+$u+$e+$o);

            return $count;
        }

        function konsonan($kalimat) {
            $jumlah = strlen($kalimat) - substr_count($kalimat, ' ');
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');            
            $count = $jumlah - ($a+$i+$u+$e+$o);          
        
            return $count;
        }

        function hitunghuruf($kalimat){
            return strlen($kalimat) -   ;
        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul 1</title>
</head>
<body>
      <table border="1" cellpadding="7" cellspacing="1">
          <thead style="font-family: 'Open Sans', sans-serif; color:crimson; font-size: 20px;">
            <tr>
              <th>Nama</th>
              <th>Jumlah Kata</th>
              <th>Jumlah Huruf</th>
              <th>Kebalikan Nama</th>
              <th>Vokal</th>
              <th>Konsonan</th>
            </tr>
          </thead>
 
            <?php foreach ($names as $name) :  ?>
                <tbody style="font-family: 'Open Sans', sans-serif; color:blue; 
                            font-size: 14px; text-align:center">
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?php echo str_word_count($name)."<br>"; ?></td>
                        <td><?php echo hitunghuruf($name)."<br>"; ?></td>
                        <td><?php echo strrev($name)."<br>"; ?></td>
                        <td><?= vokal($name);  ?></td>
                        <td><?= konsonan($name);  ?></td>
                    </tr>
                </tbody>    
            <?php endforeach; ?>

      </table>
      
</body>
</html>