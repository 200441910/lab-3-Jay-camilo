<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>shows the programs</h1>
<?php
$servername = "172.31.22.43";
$username ="Jay200441910";
$password = "KeoxppFo0r";
$networkName = $_POST['networkName'];

$db = new PDO("mysql:host=$servername; dbname=Jay200441910", $username, $password);

$sql = "SELECT * FROM shows where networkName = :networkName";
$cmd = $db->prepare($sql);
$cmd->bindParam(':networkName', $networkName, PDO::PARAM_STR, 50);
$cmd->execute();
$shows = $cmd->fetchAll();


echo '<table border="1"><thead><th>Show Name</th><th>Year</th><th>Network</th></thead>';

foreach ($shows as $value) {
    echo '<tr> <td>' . $value['showName'] . '</td>
        <td>' . $value['firstYear'] . '</td>
        <td>' . $value['networkName'] . '</td>
        </tr>';
}
?>
</body>
</html>
