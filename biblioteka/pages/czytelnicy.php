<?php
$query = 'SELECT * from czytelnicy;';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['sebix']="smieszek";
    echo '<h1>Tabela czytelnicy</h1><table><tr><th>Nr_czytelnika</th><th>Nazwisko</th><th>Imię</th><th>Data_ur</th><th>Ulica</th><th>Kod</th><th>Miasto</th><th>Data_zapisania</th><th>Data_skreslenia</th><th>Nr_legitymacji</th><th>Funkcja</th><th>Płeć</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $plec = $row['Plec'] == 'M' ? 'Mężczyzna' : 'Kobieta';
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>' . $row['Nazwisko'] . '</td><td>' .
            $row['Imie'] . '</td><td>'
            . $row['Data_ur'] . '</td><td>'
            . $row['Ulica'] . '</td><td>'
            . substr($row['Kod'], 0, 2) . '-' . substr($row['Kod'], 2, 3) . '</td><td>'
            . $row['Miasto'] . '</td><td>'
            . $row['Data_zapisania'] . '</td><td>'
            . $row['Data_skreslenia'] . '</td><td>'
            . $row['Nr_legitymacji'] . '</td><td>'
            . $row['Funkcja'] . '</td><td>'
            . $PLEC = $row['Plec'] == 'M' ? 'Mężczyzna' : 'Kobieta' . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>