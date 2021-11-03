<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=zbnhvnthwb', 'zbnhvnthwb', 'mZYdSat7WH');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO chart 
 (title, startTime, EndTime,patientId) 
 VALUES (:title, :startTime, :EndTime, :patientId)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':startTime' => $_POST['start'],
   ':EndTime' => $_POST['end'],
   ':patientId' => $_POST['pid']
  )
 );
}


?>
