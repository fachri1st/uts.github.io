<?php 
    session_start();

    require 'dbconnection.php';

    if(isset($_POST['login'])){
        $username_unsafe = $_POST['username'];
        $password_unsafe = $_POST['password'];

        $username = mysqli_real_escape_string($conn, $username_unsafe);
        $password = mysqli_real_escape_string($conn, $password_unsafe);

        $query = mysqli_query($conn, "SELECT * FROM usertbl WHERE username='$username' AND password='$password'")
        or die(mysqli_error($conn));

        $row = mysqli_fetch_array($query);

        $name = $row['username'];
        $counter = mysqli_num_rows($query);
        $id = $row['id'];

        if($counter == 0) {
            echo "
                <script type = 'text/javascript'> alert('Username atau Password tidak ditemukan');
                document.location = 'log-in.php'</script>
            ";
        }else{
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $name;
            
            echo "
                <script type = 'text/javascript'>
                document.location = 'home.php'</script>
            ";
        }
    }
?>