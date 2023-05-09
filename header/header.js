document.addEventListener("DOMContentLoaded", function () {
  const signoutBtn = document.querySelector(".signout-btn");
  const profileBtn = document.querySelector(".profile-btn");

  // Simulate user login status
  const isLoggedIn = false;

  if (isLoggedIn) {
    signoutBtn.style.display = "block";
    profileBtn.style.display = "block";
  } else {
    signoutBtn.style.display = "none";
    profileBtn.style.display = "none";
  }
});
