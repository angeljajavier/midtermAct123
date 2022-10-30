<?php
	$arrSoda = array('Coke' => 15,'Sprite' => 20,'Royal' => 20,'Pepsi' => 15, 'Mountain Dew' => 20, );
	$arrSizes = array('Regular' => 'Regular', 'Up-Size (add &#8369; 5)' => 'Up-Size', 'Jumbo (add &#8369; 10)' => 'Jumbo');
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vendo Machine</title>
</head>
<body>

	<h2>Vendo Machine</h2>
	<form method="post">
		<fieldset style="width: 35%">
			<legend><b>Products:</b></legend>

<!-- print using array and foreach method -->
			<?php 

				if (isset($arrSoda)) {

					foreach ($arrSoda as $keySoda => $keyValue) {
						echo "<input type='checkbox' name='chkSodaVendo[".$keySoda."]' value='".$keyValue."' id = 'chkSodaVendo[".$keySoda."]'><label for = 'chkSodaVendo[".$keySoda."]'>".$keySoda." - &#8369; ".$keyValue." </label><br>\n";
					}
				}
			  ?>
		</fieldset>

		<fieldset style="width: 35%">

<!--SIZES-->
			<legend><b>Options:</b></legend>
			<label>Size</label>
			<select name="option">

			<?php
				if (isset($arrSizes)) {
					foreach ($arrSizes as $Sizekey => $Sizevalue) {
						echo "<option value='".$Sizevalue."'>".$Sizekey."</option>"; 
					}
				} 
			  ?>
			</select>
<!--QUANTITY-->
			<label>Quantity</label>
			<input type="number" name="sodaCount" min="0" value="0">
			<button type="submit" name="checkbtn">Check Out</button>

		</fieldset>
		<hr>



		<?php
			if (isset($_POST['checkbtn'])) :
				if (isset($_POST['sodaCount']) && isset($_POST['chkSodaVendo'])) {
					$SelectSoda = $_POST['chkSodaVendo'];
					$option = $_POST['option'];
					$sodaCount = $_POST['sodaCount'];
					
//PRINT piece IF SELECTED QUANTITY IS 1 - pieces IF QUANT. 2 ++
					if ($sodaCount == 1 ) {
						$singularPluralvar = " piece ";
					}else{
						$singularPluralvar = " pieces ";
					}
//IF SELECTED SIZE IS --
					if ($option == 'Regular') {
						$addOn = 0;
					}elseif ($option == 'Up-Size') {
						$addOn = 5;
					}elseif ($option == 'Jumbo') {
						$addOn = 10;
					}
					echo "<h3>Purchased Summary: </h3>";
//reference: basic_action_forms_demo.php
					foreach ($SelectSoda as $keySelect => $Selectvalue) {
						echo "<div><ul><li>".$sodaCount." ".$singularPluralvar."of ".$option." ".$keySelect." amounting to &#8369; ".$total = intval($Selectvalue) * intval($sodaCount) + ($addOn * intval($sodaCount)) ."</li></ul></div>";
					}
					$sum = (array_sum($SelectSoda)+$addOn*$sodaCount)*$sodaCount;
					echo "<b>Total Number of Items:</b> ". $totalquantity = ($sodaCount * sizeof($SelectSoda))  ;
					echo "<br><b>Total Amount:</b> " . $sum; 
				}
				else{
					echo "<b>No Selected Product. Try Again</b>";
				}
			
		  ?>
		<?php endif; ?>
	</form>


	
	<!--
			<input type="checkbox" name="chkCoke" id="chkCoke[]" value="Coke"> <label for="chkCoke">Coke - &#8369;15</label><br>
			<input type="checkbox" name="chkSprite" id="chkSprite[]" value="Sprite"> <label for="chkSprite">Sprite - ₱20</label><br>
			<input type="checkbox" name="chkRoyal" id="chkRoyal[]" value="Royal"> <label for="chkRoyal">Royal - ₱20</label><br>
			<input type="checkbox" name="chkPepsi" id="chkPepsi[]" value="Pepsi"> <label for="chkPepsi">Pepsi - ₱20</label><br>
			<input type="checkbox" name="chkMountain Dew" id="chkMountain Dew[]" value="Mountain Dew"> <label for="chkMountain Dew">Mountain Dew - ₱20</label><br>
			

		</select>

		</fieldset>

		<fieldset>
			<legend>Options:</legend>

			<select name="drpSize"> 
			<label for="drpSize">Size:</label>
			<option value="Regular">Regular</option>
			<option value="Up-Size">Up-Size (add ₱5)</option>
			<option value="Jumbo">Jumbo (add ₱10)</option>
			

			<label for="txtNumber">Quantity:</label>
			<input type="number" name="txtNumber" id="txtNumber"><br>

		</fieldset>

		<hr>

		<button type="button">Check Out</button>


-->

</body>
</html>