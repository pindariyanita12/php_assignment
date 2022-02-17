<?php

const LENGTH_TO_UNIT = array(
  "inches" => 0.0254,
  "feet" => 0.3048,
  "yards" => 0.9144,
  "miles" => 1609.344,
  "millimeters" => 0.001,
  "centimeters" => 0.01,
  "meters" => 1,
  "kilometers" => 1000
);
const AREA_UNIT= array(
  "square_inches" => 0.00064516,
  "square_feet" => 0.092903,
  "square_yards" => 0.8361269999970039,
  "square_miles" => 2589986.9951907191426,
  "square_millimeters" => 0.0000010,
  "square_centimeters" => 0.0001,
  "square_meters" => 1,
  "square_kilometers" => 999999.56943999987561
);



function float_to_string($float) {
    $float = (float) $float;
    $string = number_format($float, $decimals=10, '.', ',');
    $string = rtrim($string, '0');
    $string = rtrim($string, '.');
    return $string;
}

//Length

function convert_to_length_unit($value, $from_unit) {
    return $value * LENGTH_TO_UNIT[$from_unit];
}
    
function convert_from_length_unit($value, $to_unit) {
    return $value / LENGTH_TO_UNIT[$to_unit];
}
  
function convert_length($value, $from_unit, $to_unit) {
    $user_length_value = convert_to_length_unit($value, $from_unit);
    $new_value = convert_from_length_unit($user_length_value, $to_unit);
    return $new_value;
}
  
//Area

function convert_to_square_unit($value, $from_unit) {
    return $value * AREA_UNIT[$from_unit];
}
    
function convert_from_square_unit($value, $to_unit) {
    return $value / AREA_UNIT[$to_unit];
}
  
function convert_area($value, $from_unit, $to_unit) {
    $user_area_value = convert_to_square_unit($value, $from_unit);
    $new_value = convert_from_square_unit($user_area_value, $to_unit);
    return $new_value;
}


//Temperature

function convert_to_celsius($value, $from_unit) {
    switch($from_unit) {
      case 'celsius':
        return $value;
        break;
      case 'fahrenheit':
        return ($value - 32) / 1.8;
        break;
      case 'kelvin':
        return $value - 273.15;
        break;
      default:
        return "Not in list";
    }
  }
  
  function convert_from_celsius($value, $to_unit) {
    switch($to_unit) {
      case 'celsius':
        return $value;
        break;
      case 'fahrenheit':
        return ($value * 1.8) + 32;
        break;
      case 'kelvin':
        return $value + 273.15;
        break;
      default:
        return "Not in list";
    }
  }
  
  function convert_temperature($value, $from_unit, $to_unit) {
    $celsius_value = convert_to_celsius($value, $from_unit);
    $new_value = convert_from_celsius($celsius_value, $to_unit);
    return $new_value;
  }
  