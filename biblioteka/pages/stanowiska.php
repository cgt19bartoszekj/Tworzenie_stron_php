<?php
$query = 'SELECT * from stanowiska;';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<h1>Tabela książki</h1><table><tr><th>Id_stanowisko</th><th>Nazwa</th><th></th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_stanowisko'] . '</td><td>'
            . $row['Nazwa'] . '</td><td><a href="?page=stanowiska_formularz&stanowisko='.$row['Id_stanowisko'].'">edycja</a></td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}
?>
