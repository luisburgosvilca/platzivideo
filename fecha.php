<?php
$fechaCorte = "2021-07-23";
$lp = date("Y-m-d",strtotime($fechaCorte."- 7 days")); 
$tp = date("Y-m-d",strtotime($fechaCorte."- 6 days"));

echo "LP: ".$lp."<br>";
echo "TP: ".$tp;

?>