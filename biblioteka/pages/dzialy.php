<?php
$query = 'SELECT * from dzialy;';
$result = mysqli_query($conn, $query);
$dzialy = array();


if (mysqli_num_rows($result) > 0) {
    echo '<h1>Tabela działy</h1><table><tr><th>id_dzial</th><th>Nazwa</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $dzialy[]=$row;
        echo '<tr><td>' . $row['Id_dzial'] . '</td><td>' . $row['Nazwa'].'</td></tr>';
    }
    setcookie("dzialy", json_encode($dzialy), 86400+time(), "kuba.pl");
    echo '</table>';
}
else {
    echo 'brak danych';
}
?>


