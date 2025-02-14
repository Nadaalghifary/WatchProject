<?php
include_once 'dbcon.php';
$db = new Conn();
$db->getConnection();
session_start();

$name = $_POST['UserName'];
$email = $_POST['email'];
$pass = $_POST['password'];

$query = "select * from users where email='$email' or UserName='$name'";
$num_row = $db->getRows($query);
if ($num_row > 0) {
    echo "the email or name already exists";
} else {
    $query = "insert into users(UserName,Email,PassWord)values('$name','$email','$pass')";
    $result = $db->insert($query);
    if ($result) {
        $query = "select * from users where email='$email'";
        $row = $db->SelectQuery($query);
        $id = $row['UserId'];
        $_SESSION['Id'] = $id;
        $_SESSION['Name'] = $name;
		$_SESSION['Email'] = $email;
		$_SESSION['Password']=$pass;
        $_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 10 hours from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + ((60 * 60)*10);
        echo "success";
        exit();
    }
}
