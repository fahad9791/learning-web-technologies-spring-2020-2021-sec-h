<?php
	$vat = 15;
	$amount = 200;
	$E_vat = ($amount / 100) * $vat;
	$total_price = $amount + $E_vat;
	echo "The total price(including VAT) : " . $total_price ;
?>