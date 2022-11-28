<?php
$query = 'SELECT * from wypozyczenia;';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<h1>Tabela pracownicy</h1><table><tr><th>Nr_transakcji  </th><th>Sygnatura</th><th>Id_pracownika</th><th>Nr_czytelnika  </th><th>Data_wypozyczenia</th><th>Data_zwrotu</th><tr></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_transakcji'] . '</td><td>'
            . $row['Sygnatura'].'</td>' . '<td>'
            . $row['Id_pracownika'] . '</td><td>'
            . $row['Nr_czytelnika'] . '</td><td>'
            . $row['Data_wypozyczenia'] . '</td><td>'
            . $row['Data_zwrotu'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}
?>
