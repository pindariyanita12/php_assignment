<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Length Converter</title>
</head>
<body>
    

	<div class="converter-body" style="width: 500px; margin-left: auto; margin-right: auto;">
		
		<h1 class="converter-title">Lenght Converter</h1>
		<form action="">
		<LABEl>From:</LABEl>
		<input type="text" placeholder="Input" id="input">
		<select  id="inputType">
			<option value="meter">Meter</option>
			<option value="kilometer">Kilometer</option>
			<option value="Centimeter">Centimeter</option>
            <option value="milimeter">Milimeter</option>
            <option value="foot">Foot</option>
			
		</select>
		<br>
		<LABEL>To:</LABEL>
		<input type="text" placeholder="Result" id="result">
		<select  id="resultType">
			<option value="meter">Meter</option>
			<option value="kilometer">Kilometer</option>
			<option value="Centimeter">Centimeter</option>
            <option value="milimeter">Milimeter</option>
            <option value="foot">Foot</option>
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

	if(option_from === "meter" && option_to==="kilometer"){
	
		result.value = Number(input.value) * 0.001;
	}else if(option_from === "meter" && option_to==="Centimeter"){

	
		result.value = Number(input.value) * 100;

	}else if(option_from === "meter" && option_to==="meter"){
		
		result.value = input.value
	}
    else if(option_from === "meter" && option_to==="milimeter"){
		
		result.value = Number(input.value)*1000;
	}
    else if(option_from === "meter" && option_to==="foot"){
	
		result.value = Number(input.value)*3.28084;
	}
    

	if(option_from === "kilometer" && option_to==="meter"){
		
		result.value = Number(input.value) * 1000;
	}else if(option_from === "kilometer" && option_to==="Centimeter"){
	 
		result.value = Number(input.value) * 100000;
	}else if(option_from === "kilometer" && option_to==="kilometer"){
		
		result.value = input.value
	}
    else if(option_from === "kilometer" && option_to==="milimeter"){
		
		result.value = Number(input.value)*1000000;
	}

    else if(option_from === "kilometer" && option_to==="foot"){
		
		result.value = Number(input.value)*3280.84
	}


	if(option_from === "Centimeter" && option_to==="kilometer"){
	
		result.value = Number(input.value) * 0.00001;
	}else if(option_from === "Centimeter" && option_to==="meter"){
	 
		result.value = Number(input.value) * 0.01;
	}else if(option_from === "Centimeter" && option_to==="Centimeter"){
	
		result.value = input.value    
	}else if(option_from === "Centimeter" && option_to==="milimeter"){
		
		result.value = Number(input.value) * 10;
	}
    else if(option_from === "Centimeter" && option_to==="foot"){
		
		result.value = Number(input.value)*0.03280841666667;
	}

    if(option_from === "milimeter" && option_to==="kilometer"){
		
		result.value = Number(input.value) * 0.000001;
	}else if(option_from === "milimeter" && option_to==="meter"){
		
		result.value = Number(input.value) * 0.001;
	}else if(option_from === "milimeter" && option_to==="Centimeter"){
		
		result.value = Number(input.value)*0.1;    
	}else if(option_from === "milimeter" && option_to==="milimeter"){
		
		result.value = input.value;
	}
    else if(option_from === "milimeter" && option_to==="foot"){
		
		result.value = Number(input.value)*0.003280841666667;
	}

	if(option_from === "foot" && option_to==="kilometer"){
		
		result.value = Number(input.value) * 0.0003048;
	}else if(option_from === "foot" && option_to==="meter"){
		
		result.value = Number(input.value) * 0.3048;
	}else if(option_from === "foot" && option_to==="Centimeter"){
		
		result.value = Number(input.value)*30.48;    
	}else if(option_from === "foot" && option_to==="milimeter"){
		
		result.value = Number(input.value)*304.8;
	}
    else if(option_from === "foot" && option_to==="foot"){
		
		result.value = input.value;
	}

}

</script>
</body>
</html>