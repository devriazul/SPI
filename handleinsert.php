<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//include('LIB.php');
//include('config.php');

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = mysql_connect($host, $user, $pass);
        if(!$db)
        {
            die('Database could not connect:'.mysql_error());
        }
        mysql_select_db("spi",$db);
//write your code from here

$topic = $_POST['topic'];
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

        

$query="INSERT INTO `spi`.`contract` (`topic`,`name`,`email`,`comment`)
                    VALUES ('$topic','$name','$email','$comment')";
            $result = mysql_query($query,$db);

echo "Value inserted successfully.</br></br>";


echo "Click <a href=index.htm>here</a> to go back to admin home page";
?>
