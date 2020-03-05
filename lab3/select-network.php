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
<h1>jay & camilo Lab3</h1>
<form method="post" action="shows.php">

    <?php

    $networkId = null;
    $networkName = null;

    // ckech if there
    if (!empty($_GET['networkId'])){
        $networkId = $_GET['networkId'];
    }

    $servername = "172.31.22.43";
    $username ="Jay200441910";
    $password = "KeoxppFo0r";

    $db = new PDO("mysql:host=$servername; dbname=Jay200441910", $username, $password);

    //set up SQL command to delete the selected record
    //$sql = "SELECT * FROM networks WHERE networkid = $networkId";

    $sql = $db->query("SELECT * FROM Jay200441910.networks"); // Run your query

    echo '<select name="networkName">'; // Open your drop down box

    // Loop through the query results, outputing the options one by one
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="'.$row['networkName'].'">'.$row['networkName'].'</option>';
    }

    echo '</select>';// Close your drop down box


    //disconnect
    $db = null;
    ?>
    <button class="getbutton">Get Shows</button>
    <!--<select>
        <option value="1">jay
        </option>
        <option value="2">Camilo
        </option>
    </select>-->
</form>
</body>
</html>