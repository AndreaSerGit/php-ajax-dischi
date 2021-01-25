<?php
  include __DIR__ . "/db.php";

  // echo $_GET["genere"];
  // $CdSelzezionati = [];
  //
  //  foreach ($CDs as $Cd) {
  //    if($Cd['genre'] == $_GET["genere"]) {
  //        array_push($CdSelezionati, $Cd);
  //    }
  //  };
  //
  //  echo var_dump($CdSelzezionati);

   header("Content-type: application/json");

   echo json_encode($CDs);


?>
