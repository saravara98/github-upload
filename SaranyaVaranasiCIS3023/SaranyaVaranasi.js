var $ = function (id) 
{
    return document.getElementById(id);
};


	/*
     *get input string
     *convert to one case so i only have to worry about the lower case vowels
     *set intVowel=0
     *loop through my input string one letter at a time and chck to see if it is a vowel
     *if the letter is a vowel, add to the counter...make a seperate vowel counter
     *if the letter is a vowel, increment intVowel
     *if the letter isn't a vowel, skip it, keep incrementing the counter
     *output intVowel
     **/
	
function vowels()
{
	var stringEntry = prompt("Enter a phrase and we will count the vowels for you. Type *** to quit the program.");
    var intVowel = 0;
    var intCount = 0;
	if(stringEntry == "***")
	{
		alert("Goodbye!")
	} else
    {

        stringEntry = stringEntry.toLowerCase();
	
        while (intCount<stringEntry.length)
        {
        if(stringEntry.charAt(intCount)==="a"||stringEntry.charAt(intCount)==="e"||stringEntry.charAt(intCount)==="i"||
           stringEntry.charAt(intCount)==="o"||stringEntry.charAt(intCount)==="u")
            {
                intVowel++;
            }
        intCount++;
        }//while
    $("output").value= "There were " + intVowel + " vowels in your phrase!";
    }//else 
}//function

window.onload = function () 
{
    $("vowels").onclick = vowels; 
}