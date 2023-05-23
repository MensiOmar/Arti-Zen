function validateForm() {
  var nameInput = document.getElementById("name");
  var emailInput = document.getElementById("email");
  var messageInput = document.getElementById("message");

  var nameError = document.getElementById("nameError");
  var emailError = document.getElementById("emailError");
  var messageError = document.getElementById("messageError");

  // Clear previous error messages
  nameError.textContent = "";
  emailError.textContent = "";
  messageError.textContent = "";

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

  if (messageInput.value.trim() === "") {
    messageError.textContent = "Please enter your message!";
    messageInput.focus();
    return false;
  }

  return true;
}

