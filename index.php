<!DOCTYPE html>
<html>
<head>
  <title>php demo</title>
</head>
<body>
	<?php error_reporting(E_ALL); ini_set('display_errors', 1); ?>
	<?php require 'api.php' ?>
	<h1>Enter your list of product codes below</h1>
	<form method="get">
	  <input type="text" name="product_string" />
	  <button type="submit" name="submit">Submit</button>
	</form>

	<?php $terminal = new Terminal(); ?>
	<?php $product_string = isset($_GET["product_string"])? $_GET["product_string"]:''; ?>
	<?php $result = isset($product_string)? $terminal->scan($product_string) : ''; ?>
	<?php if ($result): ?>
		<h2> Your total is $<?php echo number_format($result,2); ?></h2>
	<?php endif; ?>

</body>
</html>