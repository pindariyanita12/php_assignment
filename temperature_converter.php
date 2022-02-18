<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Temperature Converter</title>
</head>
<body>
    

	<div class="converter-body" style="width: 500px;
	margin-left: auto;
    margin-right: auto;">
		
		<h1 class="converter-title">Temperature Converter</h1>
		<form action="">
		<LABEl>From:</LABEl>
		<input type="text" placeholder="Input" id="input">
		<select  id="inputType">
			<option value="celsius">Celsius</option>
			<option value="fahrenheit">Fahrenheit</option>
		
			
		</select>
		<br>
		<LABEL>To:</LABEL>
		<input type="text" placeholder="Result" id="result">
		<select  id="resultType">
			<option value="celsius">Celsius</option>
			<option value="fahrenheit">Fahrenheit</option>
		</select>
		<br>
		<br>
		<a href="index.php">Return to menu</a>
		</form>

	</div>



<script>
var input = document.getElementById('input');
var result = document.getElementById('result');
var inputType = document.getElementById('inputType');
var resultType = document.getElementById('resultType');
var option_from,option_to;

// now add listener
input.addEventListener("keyup",myResult);
inputType.addEventListener("change",myResult);
resultType.addEventListener("change",myResult);

// taking initial value
option_from = inputType.value;
option_to   = resultType.value;


function myResult(){
// when we change the input and output type vale we need to update the option_from and option_to

	option_from = inputType.value;
	option_to = resultType.value;
	if(option_from === "celsius" && option_to==="celsius"){
		
		result.value = input.value;
	}
	else if(option_from === "celsius" && option_to==="fahrenheit") {
		if((input.value)!="")
        result.value = (Number(input.value) * 1.8)+32;
		else{
			result.value=null;
		}

	}

	else if(option_from === "fahrenheit" && option_to==="celsius"){
		if((input.value)!="")
		result.value = (Number(input.value) -32)*5/9;
		else{
			result.value=null;
		}
	}
	else if(option_from === "fahrenheit" && option_to==="fahrenheit"){
	 
		result.value = input.value;
	}
}
</script>
</body>
</html>