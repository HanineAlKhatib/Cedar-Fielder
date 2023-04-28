document.addEventListener("DOMContentLoaded", function () {
  const loginBtn = document.querySelector(".login-btn");
  const signupBtn = document.querySelector(".signup-btn");
  const signoutBtn = document.querySelector(".signout-btn");
  const browseFieldsBtn = document.querySelector(".browse-fields-btn");
  const profileBtn = document.querySelector(".profile-btn");

  // Simulate user login status
  const isLoggedIn = false;

  // Check if the user is on the homepage
  const isHomepage = document.querySelector("body.homepage") !== null;

  if (isLoggedIn) {
    loginBtn.style.display = "none";
    signupBtn.style.display = "none";
    signoutBtn.style.display = "block";
    browseFieldsBtn.style.display = "block";
    profileBtn.style.display = "block";
  } else if (isHomepage) {
    loginBtn.style.display = "block";
    signupBtn.style.display = "block";
    signoutBtn.style.display = "none";
    browseFieldsBtn.style.display = "none";
    profileBtn.style.display = "none";
  } else {
    loginBtn.style.display = "none";
    signupBtn.style.display = "none";
    signoutBtn.style.display = "none";
    browseFieldsBtn.style.display = "none";
    profileBtn.style.display = "none";
  }
});
