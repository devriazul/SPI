<?php


//mysql connection

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
$name= $_POST['name'];
$email = $_POST['email'];
        

$query="INSERT INTO `spi`.`contract` (`topic`,`name`,`email`)
                    VALUES ('$topic','$name','$email')";
            $result = mysql_query($query,$db);

echo "Value inserted successfully.</br></br>";


echo "Click <a href=default.htm>here</a> to go back to admin home page";
?>
