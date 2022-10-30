<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>
    <form  method = get>


    <label for="pictureSize">Select Photo Size:</label>
    <input type="range" id="pictureSize" name="pictureSize"  min="10" max="100" step="10" value="$processSize"><br>


    <label for="borderColor">Select Boarder Color:</label>
    <input type="color" name="borderColor" id="borderColor"><br>
    <input type="submit" name="Process"><br>


    <?php
    if(isset($_GET['Process'])){
        $processSize = 60;
        $processSize = $_GET['pictureSize'];
        $border = $_GET['borderColor'];

    }
    ?>

	<div>
	  
	  		<img src="img/freddie.jpg" style="width: <?php echo $processSize . '%'; ?>;border-color: <?php echo $border; ?>;border-width: 5px; border-style: solid;">
	</div>

	</form>





</body>
</html>