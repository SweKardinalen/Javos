<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<?php

// Your database info
$db_host = 'wwwlab.iit.his.se';
$db_user = 'sqllab';
$db_pass = 'Tomten2009';
$db_name = 'tavling';

if (!isset($_GET['id']))
{
    echo 'Ingen tävling var given...';
    exit;
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error)
{
    die('Kopplings Error (' . $con->connect_errno . ') ' . $con->connect_error);
}

$sql = "DELETE FROM tavlingkalender WHERE id = ?";
if (!$result = $con->prepare($sql))
{
    die('Query misslyckades: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['id']))
{
    die('Bindande parameter misslyckades: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Exekvering misslyckades: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
    echo "Tävling har tagits bort.";
    echo '<a href="admin_tavling.php">Tillbaka</a>';
}
else
{
    echo "Kunde inte ta bort tävling, prova igen.";
}
$result->close();
$con->close();
?>
</html>