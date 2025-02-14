<?php
include_once 'dbcon.php';
$db = new Conn();
$db->getConnection();
session_start();

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "select * from users where (email='$email' or UserName='$email') and password='$pass'";
    $num_row = $db->getRows($query);
    if ($num_row > 0) {

        $query = "select * from users where (email='$email' or UserName='$email') and password='$pass'";
        $row = $db->SelectQuery($query);
        $id = $row['UserId'];
        $UserName=$row['UserName'];
        $_SESSION['Id'] = $id;
        $_SESSION['Name']=$UserName;
		$_SESSION['Email'] = $email;
		$_SESSION['Password']=$pass;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + ((60 * 60) * 10);//10 hours
        echo "success";
        exit();
    } else {
        echo "Invalid email or password";
    }

