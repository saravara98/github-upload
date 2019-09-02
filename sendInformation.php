<?php
require_once'echoHTML.php';

echoHead("monthlyPayment.css");
echoHeader("Monthly Payment Calculator");

echo'

<!DOCTYPE html>
<html>
<form id="payment_calc" name="payment_calc" onsubmit="monthlyPayment.php" method="POST">
				<label for="first_name">First Name:</label>
				<input type="text" id="first_name" name="first_name">
				<br>

				<label for="initial_loan">Initial Loan Amount:</label>
				<input type="integer" id="initial_loan" placeholder="Enter at least 0." name="initial_loan" min=0 required>                                                                                                                                                                        
				<br>

				<label for="months">Loan Period:</label>
				<input type="integer" id="months" name="months" placeholder="Enter at least 0." min=0 required> month(s)
				<br>
				
				<label for="interest">Annual Interest Rate:</label>
				<input type="integer" id="interest" placeholder="Enter a percentage from 0 to 100." min="0" max="100" required>%
				<br>
				
				<input type="submit" id="calculate" name="calculate" onclick="calculateMonthlyPayment()" value="Calculate!">
				<br>		
			</form> 
			
</html>
';

echoFooter()
?> 