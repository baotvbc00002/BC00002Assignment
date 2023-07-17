<?php
    if(isset($_POST['registrationBtn'])){
        require_once "admin/DatabaseConnect.php";
        
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];

        $sql = "INSERT INTO user(user_fullname, user_email, user_password, user_address, user_phonenumber)
                VALUES('$fullname', '$email', md5('$password'), '$address', '$phonenumber')";
        $result = $conn -> query($sql);

        if($result){
            header("Location: index.php");
        }
    }
?>