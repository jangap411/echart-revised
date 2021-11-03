<?php

//delete.php

// 'mysql:host=localhost;dbname=zbnhvnthwb', 'zbnhvnthwb', 'mZYdSat7WH' 

if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=localhost;dbname=zbnhvnthwb', 'zbnhvnthwb', 'mZYdSat7WH');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
