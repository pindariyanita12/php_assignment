<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Area Converter</title>
</head>
<body>
    

	<div class="converter-body" style="width: 500px;
	margin-left: auto;
    margin-right: auto;">
		
		<h1 class="converter-title">Area Converter</h1>
		<form action="">
		<LABEl>From:</LABEl>
		<input type="text" placeholder="Input" id="input">
		<select  id="inputType">
			<option value="meter square">Meter Sqaure</option>
			<option value="kilometer square">Kilometer Square</option>
			<option value="Centimeter square">Centimeter Square</option>
            <option value="milimeter square">Milimeter Square</option>
            <option value="foot square">Foot Square</option>
			
		</select>
		<br>
		<LABEL>To:</LABEL>
		<input type="text" placeholder="Result" id="result">
		<select  id="resultType">
			<option value="meter square">Meter Square</option>
			<option value="kilometer square">Kilometer Square</option>
			<option value="Centimeter square">Centimeter Square</option>
            <option value="milimeter square">Milimeter Square</option>
            <option value="foot square">Foot Square</option>
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


// now compare the input and resultType value and add formula

	if(option_from === "meter square" && option_to==="kilometer square"){
		
		result.value = Number(input.value) * 0.0000010;
	}else if(option_from === "meter square" && option_to==="Centimeter square"){

		
		result.value = Number(input.value) * 10000;

	}else if(option_from === "meter square" && option_to==="meter square"){
		
		result.value = input.value
	}
    else if(option_from === "meter square" && option_to==="milimeter square"){
		
		result.value = Number(input.value)*1000000;
	}
    else if(option_from === "meter square" && option_to==="foot square"){
		
		result.value = Number(input.value)*10.76391041671;
	}
    

	if(option_from === "kilometer square" && option_to==="meter square"){
		
		result.value = Number(input.value) * 1000000;
	}else if(option_from === "kilometer square" && option_to==="Centimeter square"){
		
		result.value = Number(input.value) * 10000000000;
	}else if(option_from === "kilometer square" && option_to==="kilometer square"){
		
		result.value = input.value;
	}
    else if(option_from === "kilometer square" && option_to==="milimeter square"){
		
		result.value = Number(input.value)*1000000000000;
	}

    else if(option_from === "kilometer square" && option_to==="foot square"){
	
		result.value = Number(input.value)*10763910.41671;
	}


	if(option_from === "Centimeter square" && option_to==="kilometer square"){
	
		result.value = Number(input.value) * 0.00001;
	}else if(option_from === "Centimeter square" && option_to==="meter square"){
	
		result.value = Number(input.value) * 0.01;
	}else if(option_from === "Centimeter square" && option_to==="Centimeter square"){

		result.value = input.value;  
	}else if(option_from === "Centimeter square" && option_to==="milimeter square"){
		
		result.value = Number(input.value) * 100;
	}
    else if(option_from === "Centimeter square" && option_to==="foot square"){

		result.value = Number(input.value)*0.001076391041671;
	}

    if(option_from === "milimeter square" && option_to==="kilometer square"){
		
		result.value = Number(input.value) * 0.000001;
	}else if(option_from === "milimeter square" && option_to==="meter square"){
		
		result.value = Number(input.value) * 0.001;
	}else if(option_from === "milimeter square" && option_to==="Centimeter square"){
		
		result.value = Number(input.value)*0.01;    
	}else if(option_from === "milimeter square" && option_to==="milimeter square"){
		
		result.value = input.value;
	}
    else if(option_from === "milimeter square" && option_to==="foot square"){
		
		result.value = Number(input.value)*0.00001076391041671;
	}

	if(option_from === "foot square" && option_to==="kilometer square"){
		
		result.value = Number(input.value) * 0.00000009290304;
	}else if(option_from === "foot square" && option_to==="meter square"){
		
		result.value = Number(input.value) * 0.09290304;
	}else if(option_from === "foot square" && option_to==="Centimeter square"){
		
		result.value = Number(input.value)*929.0304;    
	}else if(option_from === "foot square" && option_to==="milimeter square"){
		
		result.value = Number(input.value)*92903.04;
	}
    else if(option_from === "foot square" && option_to==="foot square"){
		
		result.value = input.value;
	}

}

</script>
</body>
</html>