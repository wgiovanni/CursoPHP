<?php
$color = 'gris';

/*if($color == 'black'){
	echo 'Color is Black';
} elseif ($color == 'white') {
	echo 'Color is White';
} else {
	echo 'Color...';
}*/
switch ($color) {
	case 'blue':
		echo 'Color is Blue';
		break;

	case 'red':
		echo 'Color is Red';

	default:
		echo 'Other';
		break;
}

?>