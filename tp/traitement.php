<?php

include_once('../rib/rib.class.php');

$verif = new RIBValidator ($_POST["bankcode"],$_POST["agencycode"],$_POST["accountnumber"],$_POST["ribkey"]);
var_dump($verif);


if ($verif->isValid()){
    header("Location: index.php?success");
}
  else
  {
      header ("Location: index.php?erreur");
  };
