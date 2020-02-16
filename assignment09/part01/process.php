<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $BMI = BMI_Value($weight, $height);
    $label = label_Value($BMI);

    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php
    
    function BMI_Value ($weight, $height) {
        $bmi = ($weight/($height*$height)) * 703;
        return $bmi; 
    }
    
    function label_Value ($BMI_Value) {
        $label = "";
        if($BMI_Value < 18 ){
            $label = "underweight";
        } else if ($BMI_Value > 30){
            $label = "obese";
        } else {
            $label = "normal";
        }
        return $label;        
    }

?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is <?php echo $BMI ?>, which is considered <?php echo $label ?>.</p>
</body>