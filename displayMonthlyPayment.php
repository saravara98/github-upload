<?php
    require_once 'echoHTML.php';
    
    echoHead("monthlyPayment.css");
    echoHeader("Monthly Payment Calculator");
    
     function test_input($data) //"cleaning up" the data
    {
        $data = trim($data) //removes white space
        $data = stripslashes($data)
        $data= htmlspecialchars($data)
        
    }
    // get the data from the form
    $initial_loan = test_input($_POST['initial_loan']); //see testinput function above that "cleans up" the data. 
    if ($intial_loan <0 || is_nan($initial_loan))
    {
        echo "Initial loan must be above $0";
        exit(1);
    }
    $months = test_input($_POST['months']);
    if($months<0)
    {
        echo "Number of months must be positive.";
        exit(1);
    }
    $interest = test_input($_POST['interest']);
    if ($interest < 0 || $interest>100)
    {
        echo "Interest rate must be between 0 and 100."
        exit(1);
    }
	
	//calculate the monthly payment
	//breaking up the equation with some of the following variables to make it easier to see
	//floatMonthlyPayment = floatInitialLoan * (floatMonthlyInterest/(1-(math.pow((1+floatMonthlyInterest),intMonths))));
	
$MonthlyInterest = ($interest/100)/12;


$Exponent = pow((1 + $MonthlyInterest),-$months);

$MonthlyPayment = $initial_loan * ($MonthlyInterest / (1 - $Exponent));

    // apply currency formatting to the dollar and percent amounts
    $MonthlyPayment = "$".number_format($MonthlyPayment, 2); // in php the dot is used to concatenate instead of +. number format will automatically format it as a number
    $interest= $interest."%"; 
    $initial_loan = "$".number_format($initial_loan, 2);           
    
//below we echo HTML with the results of our calculations
 ?>


<!DOCTYPE html> 
<html>
<body>
   
    <link rel="stylesheet" type="text/css" href="monthlyPayment.css"
    <main>

        <label>Initial Loan:</label>
        <span><?php echo $initial_loan; ?></span><br>  

        <label>Number of Months:</label>
        <span><?php echo $months; ?></span><br>

        <label>Interest Rate:</label>
        <span><?php echo $interest; ?></span><br>

        <label>Your Monthly Payment:</label>
        <textarea disabled><?php echo $MonthlyPayment; ?></textarea><br>
    </main>
</body>
</html>

<?php

echoFooter();

?>