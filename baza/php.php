<?php

$servername = "localhost";
$username = "biblioteka";
$password = "";
$database="biblioteka";


$mysqliConnection = mysqli_connect($servername, $username, $password);
if(!$mysqliConnection){
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd:").mysqli_connect_error();
}
echo"Połaczono z bazą danych.<br>";
mysqli_close($mysqliConnection);


$mysqliConnection = new mysqli($servername, $username, $password);
if($mysqliConnection->connect_error){
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ".$mysqliConnection->connect_error);
}
echo"Połaczono z bazą danych.<br>";
$mysqliConnection->close();


try{
    $pdoConnection = new PDO("mysql:host=$servername;dbname=".$database,$username,$password);
    $pdoConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Połączono z bazą danych.<br>";
    $pdoConnection = null;
}
catch (PDOException $e){
    echo "Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd:" . $e->getMessage();
}
?>

