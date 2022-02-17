<?php

require('functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_temperature($from_value, $from_unit, $to_unit);
}



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Temperature</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Temperature</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
          <option value="celsius"<?php if($from_unit == 'celsius') { echo "selected"; } ?>>Celsius</option>
            <option value="fahrenheit"<?php if($from_unit == 'fahrenheit') { echo "selected"; } ?>>Fahrenheit</option>
            <option value="kelvin"<?php if($from_unit == 'kelvin') { echo "selected"; } ?>>Kelvin</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
          <option value="celsius"<?php if($to_unit == 'celsius') { echo "selected"; } ?>>Celsius</option>
            <option value="fahrenheit"<?php if($to_unit == 'fahrenheit') { echo "selected"; } ?>>Fahrenheit</option>
            <option value="kelvin"<?php if($to_unit == 'kelvin') { echo "selected"; } ?>>Kelvin</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>