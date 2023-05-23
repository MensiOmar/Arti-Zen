function validateForm() {
  var nameInput = document.forms["myForm"]["name"];
  var emailInput = document.forms["myForm"]["email"];
  var phoneNumberInput = document.forms["myForm"]["phoneNumber"];
  var adressInput = document.forms["myForm"]["adress"];
  var noteInput = document.forms["myForm"]["message"];

  var nameError = document.getElementById("nameError");
  var emailError = document.getElementById("emailError");
  var phoneNumberError = document.getElementById("phoneNumberError");
  var adressError = document.getElementById("adressError");
  var noteError = document.getElementById("noteError");

  // Clear previous error messages
  nameError.textContent = "";
  emailError.textContent = "";
  phoneNumberError.textContent = "";

  if (nameInput.value.trim() === "") {
    nameError.textContent = "Please provide your name!";
    nameInput.focus();
    return false;
  }

  if (emailInput.value.trim() === "") {
    emailError.textContent = "Please provide your email!";
    emailInput.focus();
    return false;
  }

  if (phoneNumberInput.value.length !== 8) {
    phoneNumberError.textContent = "Phone number not valid!";
    phoneNumberInput.focus();
    return false;
  }
    if (adressInput.value.trim() === "") {
    adressError.textContent = "Please provide your name!";
    adressInput.focus();
    return false;
  }
    if (noteInput.value.trim() === "") {
    noteError.textContent = "Please provide your name!";
    noteInput.focus();
    return false;
  }

  return true;
}