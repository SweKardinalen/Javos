<?php

// databas info
$db_host = 'wwwlab.iit.his.se';
$db_user = 'sqllab';
$db_pass = 'Tomten2009';
$db_name = 'JavosDatabas';

if (!isset($_GET['id']))
{
    echo 'Ingen id var given...';
    exit;
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error)
{
    die('Kopplings Error (' . $con->connect_errno . ') ' . $con->connect_error);
}

$sql = "DELETE FROM sparrecension WHERE id = ?";
if (!$result = $con->prepare($sql))
{
    die('Query misslyckades: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['id']))
{
    die('Bindande parametrar misslyckades: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Exekvering misslyckades: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
    echo "Spårrecensionen har tagits bort.";
    echo '<a href="admin.php">Tillbaka</a>';
}
else
{
    echo "Kunde inte ta bort recensionen, prova igen.";
}
$result->close();
$con->close();
?>