
<?php

//load.php
require_once('server.php');

$connect = new PDO('mysql:host=localhost;dbname=zbnhvnthwb', 'zbnhvnthwb', 'mZYdSat7WH');

$data = array();

$id = $_SESSION['id'];

//$query = "SELECT * FROM chart ORDER BY idchart";
$query = "SELECT * FROM chart WHERE `patientId`=$id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["idchart"],
  'title'   => $row["title"],
  'start'   => $row["startTime"],
  'end'   => $row["EndTime"]
 );
}

echo json_encode($data);

?>