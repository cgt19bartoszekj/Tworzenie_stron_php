<?php
$query = 'SELECT * from dzialy;';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<h1>Tabela działy</h1><table><tr><th>id_dzial</th><th>Nazwa</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_dzial'] . '</td><td>' . $row['Nazwa'].'</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}
?>


