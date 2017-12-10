<?php

// Your database info
$db_host = 'wwwlab.iit.his.se';
$db_user = 'sqllab';
$db_pass = 'Tomten2009';
$db_name = 'JavosDatabas';

if (!isset($_GET['valla_id']))
{
    echo 'Ingen valla_id var given...';
    exit;
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error)
{
    die('Kopplings Error (' . $con->connect_errno . ') ' . $con->connect_error);
}

$sql = "DELETE FROM valla_tips WHERE valla_id = ?";
if (!$result = $con->prepare($sql))
{
    die('Query misslyckades: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['valla_id']))
{
    die('Bindande parameter misslyckades: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Exekvering misslyckades: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
    echo "Valla Tips har tagits bort.";
    echo '<a href="admin_vallatips.php">Tillbaka</a>';
}
else
{
    echo "Kunde inte ta bort valla tips, prova igen.";
}
$result->close();
$con->close();
?>