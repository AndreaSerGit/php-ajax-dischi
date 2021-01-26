<?php
  include __DIR__ . "/db.php";

  header("Content-type: application/json");

   $genre = $_GET["genre"];

   if(empty($genre)) {
     $CdSelezionati = $CDs;
   } else {
     $CdSelezionati = [];

     foreach ($CDs as $Cd) {
       if($Cd["genre"] == $genre) {
         $CdSelezionati[] = $Cd;
       }
     }
   }
  echo json_encode($CdSelezionati);




?>
