function validateEmail()
{
  var text = document.getElementById("email").value;

  var regex = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,6})$/;

  if(regex.test(text))
  {
    document.getElementById("validate").innerHTML="This email address is valid";
    document.getElementById("validate").style.visibility="visible";
    document.getElementById("validate").style.color="green";
  }
  else
  {
    document.getElementById("validate").innerHTML="This email address is invalid";
    document.getElementById("validate").style.visibility="visible";
    document.getElementById("validate").style.color="red";

  }

}

function validatePostalCode(){
  var text = document.getElementById("postalCode").value;

  var regex = /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/;

  if(regex.test(text))
  {
    document.getElementById("validate3").innerHTML="This postal code is valid";
    document.getElementById("validate3").style.visibility="visible";
    document.getElementById("validate3").style.color="green";
  }
  else
  {
    document.getElementById("validate3").innerHTML="This postal code is invalid";
    document.getElementById("validate3").style.visibility="visible";
    document.getElementById("validate3").style.color="red";

  }
}
function validateFirstName()
{
  var text = document.getElementById("firstname").value;

  var regex = /^[A-Za-z]$/;
  if(regex.test(text))
  {
    document.getElementById("validate4").innerHTML="This first name is valid";
    document.getElementById("validate4").style.visibility="visible";
    document.getElementById("validate4").style.color="green";
  }
  else
  {
    document.getElementById("validate4").innerHTML="This first name is invalid";
    document.getElementById("validate4").style.visibility="visible";
    document.getElementById("validate4").style.color="red";
}
}
function validateLastName()
{
  var text = document.getElementById("lastname").value;

  var regex = /^[A-Za-z]$/;
  if(regex.test(text))
  {
    document.getElementById("validate5").innerHTML="This last name is valid";
    document.getElementById("validate5").style.visibility="visible";
    document.getElementById("validate5").style.color="green";
  }
  else
  {
    document.getElementById("validate5").innerHTML="This last name is invalid";
    document.getElementById("validate5").style.visibility="visible";
    document.getElementById("validate5").style.color="red";
}
}
function passwordMatch()
{
 var newPass = document.getElementById("newPassword").value;
 var repeat = document.getElementById("re-enter").value;

 if(newPass==repeat)
 {
  document.getElementById("validate2").innerHTML="The passwords have matched successfully";
  document.getElementById("validate2").style.visibility="visible";
  document.getElementById("validate2").style.color="green";
 }
 else
 {
  document.getElementById("validate2").innerHTML="The passwords do not match. Try again";
  document.getElementById("validate2").style.visibility="visible";
  document.getElementById("validate2").style.color="red";
 }
}
