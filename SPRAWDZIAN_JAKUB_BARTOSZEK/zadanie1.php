<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td{
            border: 1px solid sandybrown;
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
<?php
echo "<tr>";
$dni_tyg = array('Poniedziałek','Wtorek', 'Środa', 'Czwartek', 'Piatek', 'Sobota', 'Niedziela');
$styl ="";
foreach($dni_tyg as $dzien){
    echo "<td ".$styl.">".substr($dzien, 0, 3)."</td></tr>";
    if($dzien == 'Czwartek'){
        $styl = "style='background-color: brown'";
    }
    else{
        $styl = "";
    }
}
?>
</table>
</body>
</html>