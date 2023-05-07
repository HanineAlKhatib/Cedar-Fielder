console.log("signup.js loaded");
const form = document.querySelector("form");

form.addEventListener("submit", (event) => {
  event.preventDefault(); // prevent form submission

  const password = document.getElementById("password").value;
  
  // Define a regular expression to check the password
  const passwordRegex = /^(?=.*\d)(?=.*[!@#$%^&*.-])(?=.*[A-Z]).{8,}$/;
  if (passwordRegex.test(password)) {
    window.location.href = "homepage.html"; // redirect to homepage if password is valid
  } else {
    alert(
      "Password should contain at least 8 characters including one digit, one uppercase letter, and one special character."
    );
  }
});
