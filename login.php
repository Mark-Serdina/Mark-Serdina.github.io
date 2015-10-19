<?php
/*
$firstName = mysql_real_escape_string($_POST['username']);
$password = md5(mysql_real_escape_string($_POST['password']));

if(!empty($firstName) && !empty($password))
{
    $db = new PDO('SSID', 'mserdina', 'prouser23');
    try {
        $stmt = $db->query("SELECT COUNT(*) FROM users WHERE username='$username' and password='$password'");
        if(intval($stmt->fetchColumn()) === 1)
        {
            echo 'true';
        }
        else
        {
            echo 'false';
        }
    } catch(PDOException $ex) {
        echo "An error has occured!";
    }
}
/*
?>