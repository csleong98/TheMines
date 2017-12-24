var teamName = document.signup.teamName.value ;
var email = document.signup.email.value;
var name1 = document.signup.name1.value;
var name2 = document.signup.name2.value;
var passport1 = document.signup.passport1.value;
var passport2 = document.signup.passport2.value;
var phone1 = document.signup.phone1.value;
var phone2 = document.signup.phone2.value;
var submitButton = document.getElementById("submitBtn").value;

function validate(){
  if(document.signup.teamName.value == "")
  {
      alert("Please enter team name");
      document.signup.teamName.focus();
      return false;
  }

  if(document.signup.email.value == "") {
      alert("Please enter your email");
      document.signup.email.focus();
      return false;
  }

  if(document.signup.name1.value == "") {
      alert("Please enter Player 1's name");
      document.signup.name1.focus();
      return false;
  }

  if(document.signup.passport1.value == "") {
      alert("Please enter Player 1's passport");
      document.signup.passport1.focus();
      return false;
  }

  if (document.signup.phone1.value == "") {
      alert("Please enter Player 1's phone number");
      document.signup.phone1.focus();
      return false;
  }

  if(document.signup.name2.value == "") {
      alert("Please enter Player 2's name");
      document.signup.name2.focus();
      return false;
  }

  if(document.signup.passport2.value == "") {
      alert("Please enter Player 2's passport");
      document.signup.passport2.focus();
      return false;
  }

  if (document.signup.phone2.value == "") {
      alert("Please enter Player 2's phone number");
      document.signup.phone2.focus();
      return false;
  }
  
  if (!signup.checkbox.checked) {
      alert("You must agree to the Terms & Conditions.");
      signup.checkbox.focus();
      return false;
  }
}

function submitClick(){

	var firebaseRef = firebase.database().ref();
	
	firebaseRef.push({
  team_name: teamName,
  main_email: email,
  member1: name1,
  member2: name2,
  pass1: passport1,
  pass2: passport2,
  phone_num1: phone1,
  phone_num2: phone2
 });
}