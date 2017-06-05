<?php  
	
	$a = new stdClass();
	$a->href = 'index';
	$a->text = 'Főoldal';
	$a->class = 'selected';
	$a = html::a($a);

	$items[] = $a;

		$a = new stdClass();
	$a->href = 'products';
	$a->text = 'Termékek';
	$a->class = '';
	$a = html::a($a);

	$items[] = $a;

	//FELSŐ NAVIGÁCIÓ
	$nav = new stdClass();
	$nav->class = "navigation";
	$nav->id = "topnav";
	$navigation = html::nav($nav,$items);
	echo $navigation;
 ?>
