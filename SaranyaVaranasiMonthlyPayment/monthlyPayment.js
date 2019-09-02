var $ = function (id) 
{
    return document.getElementById(id);
};

var calculateMonthlyPayment = function()
{
 var floatInitialLoan = parseFloat($("initial_loan").value);
var intMonths = parseInt($("months").value);
var floatInterest = parseFloat($("interest").value);
var floatMonthlyPayment = parseInt($("monthly_payment").value);
//breaking up the equation with the following 2 variables to make it easier to see
var floatMonthlyInterest;
var floatExponentPart;



	


/*floatMonthlyPayment = floatInitialLoan * (floatMonthlyInterest/(1-(math.pow((1+floatMonthlyInterest),intMonths))));
*/

floatMonthlyInterest = (floatInterest/100)/12;


floatExponentPart = Math.pow((1 + floatMonthlyInterest),-intMonths);

floatMonthlyPayment = floatInitialLoan * (floatMonthlyInterest / (1 - floatExponentPart));

if (floatMonthlyPayment<0 || isNaN(floatMonthlyPayment))
{
 $("monthly_payment").value = "Please enter valid numbers and try again.";
}
else {
 $("monthly_payment").value = "$" + floatMonthlyPayment.toFixed(2) + " per month";
}

    
    
};


