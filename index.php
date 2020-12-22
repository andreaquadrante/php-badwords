<?php

$badword = $_GET["badword"];

$caption = "$badword a Palermo è una delle espressioni dialettali più usate. Un termine che in sole due sillabe si pone come sintesi di un non nulla, un qualcosa d'indefinito, che non conosce genere o classe sociale. Un'offesa che colpisce in maniera diretta e che a volte, rimane impressa sui muri.";

var_dump($caption);

$caption = str_replace($badword, '***', $caption);

?>

<p><?php echo $caption ?></p>