<?php
$query = "SELECT pracownicy.Id_pracownika, pracownicy.Nazwisko, pracownicy.Imie, stanowiska.Nazwa, pracownicy.Miasto, pracownicy.Data_zatrudnienia, pracownicy.wynagrodzenie FROM pracownicy INNER JOIN stanowiska on pracownicy.Id_stanowisko=stanowiska.Id_stanowisko;";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<h1>Tabela pracownicy</h1><table><tr><th>Id_pracownika  </th><th>Nazwisko</th><th>Imie</th><th>Nazwa stanowiska</th><th>Miasto</th><th>Data_zatrudnienia</th><th>wynagrodzenie</th><tr></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>'
            . $row['Nazwisko'].'</td>' . '<td>'
            . $row['Imie'] . '</td><td>'
            . $row['Nazwa'] . '</td><td>'
            . $row['Miasto'] . '</td><td>'
            . $row['Data_zatrudnienia'] . '</td><td>'
            . $row['wynagrodzenie'] . '</td></tr>';
    }
    echo '</table>';
}
else {
    echo 'brak danych';
}
?>
