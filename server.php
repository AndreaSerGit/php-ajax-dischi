<?php
  include __DIR__ . "/db.php";

  echo $_GET["genere"];
  $CdSelezionati = [];

   foreach ($CDs as $Cd) {
     if($Cd['genre'] == $_GET["genere"]) {
         $CdSelezionati[] = $Cd;
     }
   };


   header("Content-type: application/json");

   echo json_encode($CDs);


?>
