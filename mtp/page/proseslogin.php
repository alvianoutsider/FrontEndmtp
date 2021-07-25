<?php
session_start();

include "../konek.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)){
        header("Location: login.php?error=Username is required");
        exit();
    }
    elseif(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row ['password'] === $password){
                $_SESSION['username'] = $row ['username'];
                $_SESSION['id'] = $row ['id'];
                header("Location: ../dashboard.php");
                exit();
            }
            else{
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
        }
    }
}
else {
    header("Location: login.php?error");
    exit();
}