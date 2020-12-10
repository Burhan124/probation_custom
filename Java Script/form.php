<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p>Click the button to demonstrate the prompt box.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<!-- <p id="demo">Pera Pera</p>
<button type="button" onclick="myfunction()">Do it!</button> -->

<!-- <p id="demo"></p> -->

<!-- <p id="demo" style="display: none">ABCD</p>

<button type="button" onclick="document.getElementById('demo').style.display='block'">Click</button> -->

<!-- <p id="demo">ABCD</p>

<button type="button" onclick="document.getElementById('demo').style.display='none'">Click Me</button> -->

<!-- <h2 id="demo">ABCDEFG</h2>
<button type="button" onclick="document.getElementById('demo').style.fontSize='50px'">Click ME!</button>
 -->

<!-- 
<h2 id="demo">ABCD</h2>

<button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JAVA"'>CLICK ME</button>
 -->

</body>
<footer>

<script>

function myFunction() {
var person = prompt("Please enter your name", "");
var day = new Date();
var hr = day.getHours();
var print;

  if (person == 0) {
      document.getElementById("demo").innerHTML =
 "Enter Name";
  }

  else if (hr >= 5 && hr < 12) {
  	prtint = "Good Morning " + person + "! How are you today?";  
}
  else if (hr >= 12 && hr < 19) {
  	prtint = "Good Eveing " + person + "! How are you today?";  
}
  else if (hr >= 19 && hr < 23.99) {
  	prtint = "Good Night " + person + "! How are you today?";  
}

  else {
 	/*prtint = "Hello " + person + "! How are you today?";*/
}
	
	document.getElementById("demo").innerHTML = prtint;
}

//Function TO change The Elemnt Text	
/*function myfunction() {
	document.getElementById('demo').innerHTML = "Para Change"
}*/

// Print With Console.log And Concatinate Start
// how to name variables
// firstName
// FirstName
/*var first_name = "Burhan";
var last_name = "Tariq";
var phone_number = "123456789"
var address = "abcdefghigkl"
var email = "burhan.Tariq@salsoft.net";


console.log(`	
	First Name is: ${first_name},
	Last Name is :   ${last_name}, 
 	Phone Number is :  ${phone_number}, 
 	Email is :  ${email}`);*/

/*First Name is : Burhan
Last Name is : Tariq
Full name is : Burhan Tariq
Email is : 
*/

// Print With Console.log And Concatinate Start

</script>	


</footer>
</html>