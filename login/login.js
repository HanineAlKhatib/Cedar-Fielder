const form = document.getElementById("login-form");
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
    { username: "hanine", password: "hanine" },
  ];

  const user = users.find(function (user) {
    return user.username === username && user.password === password;
  });

  if (!username || !password) {
    alert("Please enter your username and password.");
    return;
  }

  if (user) {
    window.location.href = "../homepage/homepage.html";
  } else {
    alert("Invalid username or password!");
  }
});
