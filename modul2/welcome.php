<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;

        if($user>7){
            echo "Username tidak boleh lebih dari 7 karakter<br>";
            $x = true;
        }
        if($pass<10){
            echo "Password tidak boleh kurang dari 10 karakter<br>";
            $x = true;
        }

        if (!preg_match("/[A-Z]/", $password) ) {
            echo "Password harus menyertakan huruf kapital<br> ";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "Password harus menyertakan huruf kecil<br>";    
            $x = true;
        }
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "Password harus menyertakan karakter khusus<br>";
            $x = true;
        }
        if (!preg_match("/[0-9]/", $password)) {
            echo "Password harus menyertakan angka<br>";
            $x = true;
        }

        if( $x == false ){
            echo "Login Berhasil<br> ";
            echo "Selamat Datang ", $_POST["username"];
        }
    }
?>