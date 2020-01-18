<?php 

function verify($array){
	$let_array = count($array);
	$b = true;
	for ($i=0; $i < $let_array; $i++) { 
		if($array[$i] % 2 != 0){
			return $b  = false;
		}
	}

	return $b;
}



if(isset($_POST['captcha-submit'])){
	if(isset($_POST['captcha'])){
		$numbers = $_POST['captcha'];
		$verify = verify($numbers);

		if($verify == false){
			echo '<h1 style="color:red;text-align:center;width:100%;position:absolute;left:0px;top:100px;">Invalid Selection; Try Again</h1>';
		}else{
			echo '<h1 style="color:lightseagreen;text-align:center;width:100%;position:absolute;left:0px;top:100px;">Verification Success. Thank You for Varification</h1>';
		}



	}else{
		echo '<h1 style="color:red;text-align:center;width:100%;position:absolute;left:0px;top:100px;">Please Select Minimum One Even number</h1>';
	}

	
}



for ($i=0; $i < 9; $i++) { 
	$numbers[] = mt_rand(1,9);
}












 ?>


 <style type="text/css">
 	@font-face{
		src: url(captcha.TTF);
		font-family: 'captcha';
	}

	*{margin: 0;padding: 0;box-sizing: border-box;font-family: sans-serif;}

	
	body{
		position:relative;

	}
	.chess{
		display: block;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap;
		min-width: 100vw;
		min-height: 100vh;

	}
	.square{
		box-sizing: border-box;
		width: 50px;
		display: inline-block!important;
		font-family: captcha!important;
		height: 50px;
		border:2px solid #232222;
		margin: 0;padding: 0;
		font-family: sans-serif;
		font-size: 35px;
		cursor: pointer;
		position:relative;
		
	}
	.square input{
		visibility: hidden;
		display: inline;
		position: absolute;
	} 
	.square label span{font-family: captcha!important;}
	.square label {
		
		pointer-events: none;
		position:absolute;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 100%;
		transition: 0.5s;
		left:0;
	}
	.square input:checked ~ label{
		background-color: lightseagreen;
		color:white;
	}

	.btn{
		padding: 10px ;
		border:2px solid lightseagreen;
		display: block;
		width: 100%;
		font-size: 20px;
		cursor: pointer;
		transition: 0.5s;
		border-radius: 30px;
		background-color: white;

	}
	.btn:hover{
		color:white;
		background-color: lightseagreen;

	}
	
</style>

<div class="chess">


<form method="post">
<center>	
	<label for=""><h1>Welcome to Human Verification</h1>
		<h4>Please select Even Numbers</h4></label>
		<br>
 <label  class="square">
 	<input  type="checkbox" name="captcha[]" value='<?php echo $numbers[0] ?>'>
 	<label  ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[0] ?></span></label>
 </label>
 <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[1] ?>'>
 	<label ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[1] ?></span></label>
 </label>
 <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[2] ?>'>
 	<label  ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[2] ?></span></label>
 </label>


 <br>


  <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[3] ?>'>
 	<label ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[3] ?></span></label>
 </label>
 <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[4] ?>'>
 	<label  ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[4] ?></span></label>
 </label>
 <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[5] ?>'>
 	<label  ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[5] ?></span></label>
 </label>


 <br>


  <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[6] ?>'>
 	<label  ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[6] ?></span></label>
 </label>
 <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[7] ?>'>
 	<label  ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[7] ?></span></label>
 </label>
 <label class="square">
 	<input type="checkbox" name="captcha[]" value='<?php echo $numbers[8] ?>'>
 	<label  ><span style='transform: rotate(<?php echo mt_rand(-20,90).'deg' ?>);'><?php echo $numbers[8] ?></span></label>
 </label>


<br><br>

<button class="btn" name="captcha-submit" type="submit">Submit Now</button>
</center>	
</form>
</div>
