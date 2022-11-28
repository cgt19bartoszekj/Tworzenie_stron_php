<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "biblioteka";
$password = "";
$database = "biblioteka";


$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd:") . mysqli_connect_error();
}
$query = 'SELECT Nr_czytelnika, Imie, Nazwisko FROM czytelnicy';
$result = mysqli_query($conn, $query);

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
    echo "<hr>";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Wyniki zapytania w akapitach</h1>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>Numer: " . $row['Nr_czytelnika'] . ", ";
        echo "Imię i nazwisko: " . $row['Imie'] . " " . $row['Nazwisko'] . "</p>";
    }
    echo "<hr>";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

    echo "<h1>Wyniki zapytania w liście nieuporządkowanej</h1>";
    echo "<ul>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>Numer: " . $row['Nr_czytelnika'] . ", ";
        echo "Imię i nazwisko: " . $row['Imie'] . " " . $row['Nazwisko'] . "</li>";
    }
    echo "</ul><hr>";
} else {
    echo 'brak danych';
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

    echo "<h1>Wyniki zapytania w tabeli z dwoma kolumnami:</h1>";
    echo "<table><tr><th>Numer czytelnika</th><th>Imię i nazwisko</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['Nr_czytelnika'] . "</td>";
        echo "<td>" . $row['Imie'] . " " . $row['Nazwisko'] . "</td></tr>";
    }
    echo "</table><hr>";
} else {
    echo 'brak danych';
}
$query = 'SELECT Tytul, Imie, Nazwisko from ksiazki;';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Wyświetl tytuły książek i ich autorów z tabeli 'ksiazki' według wzoru</h1>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>Książka <i>".$row['Tytul']."</i> została napisana przez <b>".$row['Imie']." ".$row['Nazwisko'].".</b></p>";
    }
    echo "<hr>";
} else {
    echo 'brak danych';
}
$query = 'SELECT Imie, Nazwisko, Data_zatrudnienia from pracownicy;';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $miesiace = array(1=>'stycznia', 2=>'lutego', 3=>'marca', 4=>'kwietnia', 5=>'maja', 6=>'czerwca', 7=>'lipca', 8=>'sierpnia', 9=>'wrzesnia', 10=>'pazdziernika', 11=>'listopada', 12=>'grudnia');

    echo "<h1>Wyświetl dane pracowników: imię, nazwisko oraz datę zatrudnienia (w formacie dzień, nazwa miesiąca, rok) w trzech kolumnach tabeli</h1>";
    echo "<table><tr><th>Imię</th><th>Nazwisko</th><th>Data zatrudnienia</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $d = strtotime($row['Data_zatrudnienia']);
    echo "<tr><td>".$row['Imie']."</td><td>".$row['Nazwisko']."</td><td>".date('j',$d)." ".$miesiace[date('n',$d)]." ".date('Y',$d)." (data w bazie: ".$row['Data_zatrudnienia'].")</td></tr>";
    }
    echo "</table><hr>";
} else {
    echo 'brak danych';
}
mysqli_close($conn);
?>

</body>
</html>