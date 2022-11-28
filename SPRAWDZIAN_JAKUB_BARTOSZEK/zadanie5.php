<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$login = $haslo = $radio = "";
$loginError = $hasloError = $radioError = "";
$checked = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Login"]))
        $loginError = "Login jest wymagany";
    else $login =$_POST["Login"];
    if (empty($_POST["Haslo"]))
        $hasloError = "Haslo jest wymagane";
    else $haslo = $_POST["Haslo"];
    if (empty($_POST["radio"]))
        $radioError = "Wymagane wybranie opcji";
    else $radio = $_POST["radio"];
}
?>
<form method="post" action="zadanie5.php">
    <label for="login">
        Login:<span style="color:red">*<?= $loginError ?></span><br><input type="text" name="Login" id="Login" value="<?=$login?>">
    </label><br>
    <label for="haslo">
        Hasło:<span style="color:red">*<?= $hasloError ?></span><br><input type="text" name="Haslo" id="Haslo" value="<?=$haslo?>">
    </label><br>
    <span style="color:red">*<?= $radioError ?></span><br>
    <label for="urzytkownik">
        Urzytkownik:<input type="radio" id="urzytkownik" name="opcja" value="urzytkownik">
    </label><br>
    <label for="autor">
        Autor:<input <input type="radio" name="opcja" id="autor" value="autor">
    </label><br>
    <label for="redaktor">
        Redaktor:<input <input type="radio" name="opcja" id="redaktor" value="redaktor">
    </label><br>
    <label for="administrator">
        Administrator:<input type="radio" name="opcja" id="administrator" value="administrator">
    </label><br><br>
    <button type="submit">Zaloguj</button>
</form>
</body>
</html>