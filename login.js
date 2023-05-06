const form = document.getElementById("login-form");


document.getElementById('login-form').addEventListener('submit', function (event) {
  event.preventDefault();

  // Replace this with actual AJAX call for user authentication
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

if (!username || !password) {
alert('Please enter your username and password.');
return;
}
}


form.addEventListener("submit", function (event) {
  event.preventDefault();

  // Get form data
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Check user credentials against dummy database
  const users = [
    { username: "user1", password: "password1" },
    { username: "user2", password: "password2" },
    { username: "user3", password: "password3" },
  ];

  const user = users.find(function (user) {
    return user.username === username && user.password === password;
  });

  if (user) {
    alert("Login successful!");
    // Redirect to user dashboard or home page
    window.location.href = "dashboard.html";
  } else {
    alert("Invalid username or password!");
  }
});
