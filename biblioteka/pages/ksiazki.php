<?php
$query = 'SELECT * from ksiazki;';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<h1>Tabela książki</h1><table><tr><th>Sygnatura </th><th>Tytuł</th><th>Nazwisko</th><th>Imie</th><th>Wydawnictwo</th><th>Miejsce_wyd</th><th>Rok_wyd</th><th>Objetosc_ks	</th><th>Cena</th><th>Id_dzial</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Sygnatura'] . '</td><td>'
            . $row['Tytul'].'</td>' . '<td>'
            . $row['Nazwisko'] . '</td><td>'
            . $row['Imie'] . '</td><td>'
            . $row['Wydawnictwo'] . '</td><td>'
            . $row['Miejsce_wyd'] . '</td><td>'
            . $row['Rok_wyd'] . '</td><td>'
            . $row['Objetosc_ks'] . '</td><td>'
            . $row['Cena'] . '</td><td>'
            . $row['Id_dzial'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}
?>
