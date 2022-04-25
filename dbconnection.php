<?php 
    $conn = mysqli_connect("localhost", "root", "", "dbuts");

    if(mysqli_connect_errno()){
        echo "<script>
            alert('Koneksi ke database gagal');
        </script>" . mysqli_connect_error();
    }


    function register($data){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $data['nama']);
        $email = strtolower(stripslashes($data['email']));
        $username = strtolower(stripslashes($data['username']));
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);

        mysqli_query($conn, "INSERT INTO usertbl VALUES('', '$nama', '$email', '$username', '$password')");
        return mysqli_affected_rows($conn);

    }
?>