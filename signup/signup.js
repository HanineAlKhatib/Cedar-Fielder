console.log("signup.js loaded");
const form = document.querySelector("form");

form.addEventListener("submit", (event) => {
  event.preventDefault(); // prevent form submission

  const name = document.getElementById("name").value;
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const dateOfBirth = document.getElementById("dateOfBirth").value;
  const phoneNumber = document.getElementById("phoneNumber").value;

  // Define a regular expression to check the password
  // const passwordRegex = /^(?=.*\d)(?=.*[!@#$%^&*.-])(?=.*[A-Z]).{8,}$/;
  // if (!passwordRegex.test(password)) {
  //   alert(
  //     "Password should contain at least 8 characters including one digit, one uppercase letter, and one special character."
  //   );
  //   return;
  // }

  // Send form data using AJAX
  $.ajax({
    type: "POST",
    url: "../Backend/signup.php",
    data: {
      name: name,
      username: username,
      password: password,
      dateOfBirth: dateOfBirth,
      phoneNumber: phoneNumber,
     
    },
    success: function(response) {
      if (response.success) {
         
          window.location.href = '/cedar-fielder/index.php';
        
      } else {
          alert(response.message);
          $('.error').remove();
          alert(response.message)
      }
  },
    error: function(jqXHR, textStatus, errorThrown) {
      // Handle error
      console.log(textStatus, errorThrown);
      alert("An error occurred while processing your request. Please try again.");
    }
  });
});
