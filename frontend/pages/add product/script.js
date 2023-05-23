function validateForm() {
  var crafterNameInput = document.getElementById("crafterName");
  var productNameInput = document.getElementById("productName");
  var materialInput = document.getElementById("material");
  var priceInput = document.getElementById("price");
  var emailInput = document.getElementById("email");
  var phoneNumberInput = document.getElementById("phoneNumber");
  var addressInput = document.getElementById("address");
  var descriptionInput = document.getElementById("description");

  var crafterNameError = document.getElementById("crafterNameError");
  var productNameError = document.getElementById("productNameError");
  var materialError = document.getElementById("materialError");
  var priceError = document.getElementById("priceError");
  var emailError = document.getElementById("emailError");
  var phoneNumberError = document.getElementById("phoneNumberError");
  var addressError = document.getElementById("addressError");
  var descriptionError = document.getElementById("descriptionError");

  // Clear previous error messages
  crafterNameError.textContent = "";
  productNameError.textContent = "";
  materialError.textContent = "";
  priceError.textContent = "";
  emailError.textContent = "";
  phoneNumberError.textContent = "";
  addressError.textContent = "";
  descriptionError.textContent = "";

  if (crafterNameInput.value.trim() === "") {
    crafterNameError.textContent = "Please provide the crafter's name!";
    crafterNameInput.focus();
    return false;
  }

  if (productNameInput.value.trim() === "") {
    productNameError.textContent = "Please provide the product name!";
    productNameInput.focus();
    return false;
  }

  if (materialInput.value.trim() === "") {
    materialError.textContent = "Please provide the material!";
    materialInput.focus();
    return false;
  }

  if (priceInput.value.trim() === "") {
    priceError.textContent = "Please provide the price!";
    priceInput.focus();
    return false;
  }
  var pricePattern = /^\d+(\.\d{1,2})?$/;
  if (!pricePattern.test(priceInput.value.trim())) {
    priceError.textContent = "Please enter a valid price (e.g., 10 or 10.99)!";
    priceInput.focus();
    return false;
  }
  if (emailInput.value.trim() === "") {
    emailError.textContent = "Please provide your email!";
    emailInput.focus();
    return false;
  }


    if (phoneNumberInput.value.length !== 8 ){
    phoneNumberError.textContent = "Phone number not valid!";
    phoneNumberInput.focus();
    return false;
  }

  if (addressInput.value.trim() === "") {
    addressError.textContent = "Please provide your address!";
    addressInput.focus();
    return false;
  }

  if (descriptionInput.value.trim() === "") {
    descriptionError.textContent = "Please provide a description!";
    descriptionInput.focus();
    return false;
  }

  return true;
}
