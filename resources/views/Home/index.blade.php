
<?php
	$HomeProducts = session()->get('HomeProducts');
	$Category = session()->get('Category');
	$user=session()->get('user');
	// $product_title = session()->get('product_title');

	$smart_phone = session()->get('smart_phone');
	$laptop = session()->get('laptop');
	$desktop = session()->get('desktop');
	$apple = session()->get('apple');
	$tv = session()->get('tv');
	$Clothing = session()->get('Clothing');

?>


@extends(($user==null) ? 'Layouts.Visitor.sezan' :
		 (($user->user_type_id==2) ? 'Layouts.User.sezan' : 'Layouts.Admin.sezan'))
