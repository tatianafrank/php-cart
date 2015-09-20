<?php

class Terminal
{	
	public $result;
	public $total;

	public function __construct()
	{
		$total = '';
		$product_string = isset($_GET["product_string"])? $_GET["product_string"]:'';
		$result = $this->scan($product_string);
	}

	public function scan($product_string)
	{
		$codes_count = array();
		foreach (count_chars($product_string, 1) as $i => $val) {
			$codes_count[strtoupper(chr($i))] = $val;
		}
		
		return $this->setPricing($codes_count);
	}

	public function setPricing($codes_count)
	{
		$discount_price = 0;
		$final_price = 0;
		$total = 0;

		foreach($codes_count as $code => $quantity)
		{
			switch ($code)
			{	
				case 'A':	
					if ($quantity >= 4)
					{
						$full_price = ($quantity % 4) * 2;
						$discount_price = ($quantity - ($quantity % 4)) * 1.75;
						$final_price = $full_price + $discount_price;
						$total += $final_price;
					}
					else 
					{
						$total += $quantity * 2;
					}
					break;

				case 'C':	
					if ($quantity >= 6)
					{
						$full_price = ($quantity % 6) * 1.25;
						$discount_price = ($quantity - ($quantity % 6)) * 1;
						$final_price = $full_price + $discount_price;
						$total += $final_price;
					}
					else
					{
						$total += $quantity * 1.25;
					}
				break;

				case 'B':
					$total += 12 * $quantity;
					break;
					
				case 'D':
					$total += 0.15 * $quantity;
					break;
			}
		}
		
		return $total;
	}
}

