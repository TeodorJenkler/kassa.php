<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
if(isset($_POST['issubmit']) && $_POST['issubmit'] == 1){
$antal = $_POST['antal'];
$pris = $_POST['pris'];
?>
<h1>Kvitto</h1>
<h2><?php echo "Antal" . $antal ?></h2>
<h2><?php echo "pris" . $pris ?></h2>
<h2><?php echo "Totalt" . $antal * $pris ?></h2>
<?php
if (@antal => 4;){
?>
<h2><?php echo "Total med rabatt" . $antal * $pris - 10; ?></h2>
<?php
}
}
else {
?>
<h1>Skriv in pris och antal</h1>
<form action="kassa.php" method="post">
<input type="hidden" name="issubmit" value="1">
<h2>Antal<h2>
<p><input type="number" name="antal" placeholder="antal"></p>
<h2>Pris</h2>
<p><input type="number" name="pris" placeholder="pris"></p>
<p><input type="submit" value="skicka"></p>
<?php
}
?>
</body>
</html>
