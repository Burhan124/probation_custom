
<?php





/****************** String Rev *******************/



/*
function len($lenght); {
	$x= strlen($lenght)
	return $i;
}*/


/*function rev($string){

	$reverse ='';
	$counter =0;

	while (!empty($string[$counter])) {
		$reverse = $string[$counter] . $reverse;

		$counter++;
	}
	 return $reverse;
}

echo rev("burhan");*/

//ub


/****************** String Rev *******************/


// PHP Code to sort an array without using array sorting function

 
/*// take an array with some elements
$array = array(9, 2, 18, 34, 3, 10, 15);
// get the size of array
$count = count($array);
echo "<pre>";
// Print array elements before sorting
print_r($array);
for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "Sorted Array:" . "<br/>";
// Print array elements after sorting
print_r($array);*/


/*$array=array('3','2','1','5','4');

					//5
for($j = 0; $j < count($array); $j ++) {
						//5-1=4
    for($i = 0; $i < count($array)-1; $i ++){

    		// 	5			4
        if($array[$i] > $array[$i+1]) {
        				// 4
            $temp = $array[$i+1];

            	// $array[3]    =   4
            $array[$i+1]=$array[$i];

            $array[$i]=$temp;




        }

    }
}
// $array[0] =2
// $array[1] =1
// $array[3] =4

echo "Sorted Array is:";
echo "<br />";
print_r($array);*/

/******PHP Functions - Returning values With Loop********/
/*$x = 10;
$y = 1;

function sum (int $x ,  int $y) {
 global $x;
 global $y;
 $z = $x*$y;
return $z;
}

while ($y <= 10 , $y++) {
	echo "$x. = . $y" .:.  $z ."<br>";
}*/

/******PHP Functions - Returning values With Loop********/

/************PHP Functions - Returning values************/

/*function sum(int $x , int $y) {
	$z = $x*$y;
	return $z;
}

echo "10 * 1 ="  . sum(10,1) . "<br>";
echo "10 * 2 ="  . sum(10,2) . "<br>";
echo "10 * 3 ="  . sum(10,3) . "<br>";
echo "10 * 4 ="  . sum(10,4) . "<br>";
echo "10 * 5 ="  . sum(10,5) . "<br>";
echo "10 * 6 ="  . sum(10,6) . "<br>";
echo "10 * 7 ="  . sum(10,7) . "<br>";
echo "10 * 8 ="  . sum(10,8) . "<br>";
echo "10 * 9 ="  . sum(10,9) . "<br>";
echo "10 * 10 ="  . sum(10,10) . "<br>";*/


/************PHP Functions - Returning values************/

/******************By Default Assign Value*****************/

/*function height (int $minheight = 50 ) {
 echo "The Height is : $minheight .</br>";
}

height(20);
height();
height(30);
height(0);*/


/******************By Default Assign Value*****************/
// $_GET  
// $_POST
// $_REQUEST
/*
first name
last name
age number
gender dropdown
message textarea
*/

// $_GET
// $_POST
// $_SERVER
// $_REQUEST
// echo "<pre>";
// var_dump();
// exit();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 $first_name =  validate_fields($_POST["f_name"]);
	$last_name =  validate_fields($_POST["last_name"]);
	$age =  validate_fields($_POST["age"]);
	$gender =  validate_fields($_POST["gender"]);
	$text_area =  validate_fields($_POST["information"]);
	$radio_btn =  validate_fields($_POST["name_radio"]);
	$check_btn =  validate_fields($_POST["name_check"]);
		if (empty($first_name)) {
		$first_name_erroe = "This filed is required";
	}
		if (empty($last_name)) {
		$last_name_erroe = "This filed is required";
	}
			if (empty($age)) {
		$age_erroe = "This filed is required";
	}
			if (empty($gender)) {
		$gende_erroe = "This filed is required";
	}
			if (empty($text_area)) {
		$text_area_erroe = "This filed is required";
	}
				if (empty($radio_btn)) {
		$radio_area_erroe = "This filed is required";
	}

}



function validate_fields($validation) {
	$validation = trim($validation);
	$validation = htmlspecialchars($validation);
	return $validation;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>

form.form {
    margin: auto !important;
    display: table !important;
    text-align: center;
}

form.form input[type="text"], form.form input[type="number"],  form.form select, form.form textarea {
    margin-bottom: 5% !important;
}

form.form input[type="text"], form.form input[type="number"], form.form select, form.form textarea {
    border: 2px solid #000;
    padding: 10px 5px;
}



</style>

</head>
<body>
<form method="post" class="form">
    <p class="h4 mb-4">Sign in</p></br>

    <input type="text" name="f_name" value="<?php echo $first_name;?>"  placeholder="Name"></br>
   	<p> <?php echo $first_name_erroe;  ?></p></br>

    <input type="text" name="last_name" value="<?php echo $last_name;?>" placeholder="Last Name"></br>
   	<p> <?php echo $last_name_erroe;  ?></p></br>
   
    <input type="number" name="age" value="<?php echo $age;?>" placeholder="Age"></br>
   	<p> <?php echo $age_erroe;  ?></p></br>
   
    <select name="gender"> 
    	<option <?php if (isset($gender) && $gender=="Gender") echo ' selected';?>>Gender</option>
    	<option <?php if (isset($gender) && $gender=="MALE") echo ' selected';?>>MALE</option>
    	<option <?php if (isset($gender) && $gender=="FEMALE") echo ' selected';?>>FEMALE</option>    	    	
    </select></br>
   <p> <?php echo $gende_erroe;  ?></p></br>
	
	<textarea  rows="5" cols="50" name="information"><?php echo $text_area;?></textarea></br>

		<!-----Radio Button------>
	<label> Name
		<input type="radio" name="name_radio" <?php if (isset($radio_btn) && $radio_btn=="name_radio") echo ' checked';?> value="name_radio">
	</label></br>
	
	<label> Name
		<input type="radio" name="name_radio" <?php if (isset($radio_btn) && $radio_btn=="name_radio_one") echo ' checked';?> value="name_radio_one">
	</label></br>
	
	<label> Name
		<input type="radio" name="name_radio" <?php if (isset($radio_btn) && $radio_btn=="name_radio_two") echo ' checked';?> value="name_radio_two">
	</label></br>
	
	<p> <?php echo $radio_area_erroe;?></p></br>
		<!-----Radio Button------>

		<!-----Check Button------>

	<label> Name
		<input type="checkbox" name="name_check_one" <?php if(isset($_POST['name_check_one'])) echo "checked='checked'"; ?>>
	</label></br>

	<label> Name
		<input type="checkbox" name="name_check_two" <?php if(isset($_POST['name_check_two'])) echo "checked='checked'"; ?>>
	</label></br>

	<label> Name
			<input type="checkbox" name="name_check_three" <?php if(isset($_POST['name_check_three'])) echo "checked='checked'"; ?>>
	</label></br>
		   
		<!-----Check Button------>
	<input type="submit" name="submit_btn">

</form>
</body>
</html>