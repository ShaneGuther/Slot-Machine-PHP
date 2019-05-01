<?php
$name = $_POST['name'];
$bet = $_POST['bet'];
$credit = $_POST['credit'];
$slotOne = mt_rand(1, 7);
$slotTwo = mt_rand(1, 7);
$slotThree = mt_rand(1, 7);

echo'
<head>
	<meta charset="UTF-8"/>
	<title>Virtual Slot Machine</title>
</head>
<link rel="stylesheet" href="guthers_A5inclass.css">
	<body id="container">
		<h1>Virtual Slot Machine</h1>
		<h2>Welcome '.$name.' </h2>
		<br>';

switch($slotOne){
	case 1:
		echo '<img src="orange.png">';
	break;
	case 2:
		echo '<img src="grapes.png">';
	break;
	case 3:
		echo '<img src="watermelon.png">';
	break;
	case 4:
		echo '<img src="cherry.png">';
	break;
	case 5:
		echo '<img src="lemon.png">';
	break;
	case 6:
		echo '<img src="pear.png">';
	break;
	case 7:
		echo '<img src="apple.png">';
	break;
}
switch($slotTwo){
	case 1:
		echo '<img src="orange.png">';
	break;
	case 2:
		echo '<img src="grapes.png">';
	break;
	case 3:
		echo '<img src="watermelon.png">';
	break;
	case 4:
		echo '<img src="cherry.png">';
	break;
	case 5:
		echo '<img src="lemon.png">';
	break;
	case 6:
		echo '<img src="pear.png">';
	break;
	case 7:
		echo '<img src="apple.png">';
	break;
}
switch($slotThree){
	case 1:
		echo '<img src="orange.png">';
	break;
	case 2:
		echo '<img src="grapes.png">';
	break;
	case 3:
		echo '<img src="watermelon.png">';
	break;
	case 4:
		echo '<img src="cherry.png">';
	break;
	case 5:
		echo '<img src="lemon.png">';
	break;
	case 6:
		echo '<img src="pear.png">';
	break;
	case 7:
		echo '<img src="apple.png">';
	break;
}
if($slotOne == $slotTwo && $slotOne == $slotThree)
	$credit += $bet*10;	
elseif($slotOne == $slotTwo && $slotOne != $slotThree)
	$credit += $bet*2;
elseif($slotOne != $slotTwo && $slotOne == $slotTwo)
	$credit += $bet*2;
elseif($slotOne == $slotThree && $slotOne != $slotTwo)
	$credit += $bet*2;
elseif($slotTwo == $slotThree && $slotTwo != $slotOne)
	$credit += $bet*2;
elseif($slotTwo != $slotThree && $slotTwo == $slotOne)
	$credit += $bet*2;
else{
	$credit -= $bet;
}
echo '</br>
<form id="theForm" action="guthers_A5inclass.php" method="POST" >
			Bet
			<input type="number" max="'.$credit.'" min="1" name="bet" autofocus>
			Credit
			<input type="number" name="credit" value="'.$credit.'" readonly>
			<br>
			<input type="submit" name="submit" value="SPIN">
		</form>
	</body>
	<html>';
	?>