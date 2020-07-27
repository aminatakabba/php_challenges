<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;
  // echo "\n".$riel;
  // echo "\n".$kyat;
  // echo "\n".$krones;
  // echo "\n".$lek;
  $riel_usd = 0.00026;
  $kyat_usd = 0.00066;
  $krones_usd = 0.11;
  $lek_usd = 0.0090;

  $usd_riel = $riel * $kyat_usd;
  $usd_kyat = $kyat * $kyat_usd;
  $usd_krones = $krones * $krones_usd;
  $usd_lek = $lek * $lek_usd;

  $final_amount = $usd_riel + $usd_kyat + $usd_krones + $usd_lek - 1;
  echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";




