var quoteElement = document.getElementById("quote");
var quoteText = "Crafting your life with simplicity";
var typingSpeed = 75; // Adjust typing speed (in milliseconds)

var charIndex = 0;
var quoteInterval;

function typeQuote() {
  quoteElement.textContent = quoteText.slice(0, charIndex);
  charIndex++;

  if (charIndex > quoteText.length) {
    clearInterval(quoteInterval);
  }
}

quoteInterval = setInterval(typeQuote, typingSpeed);
