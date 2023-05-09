document.addEventListener("DOMContentLoaded", function () {
  const signoutBtn = document.querySelector(".signout-btn");
  const browseFieldsBtn = document.querySelector(".browse-fields-btn");
  const profileBtn = document.querySelector(".profile-btn");

  // Simulate user login status
  const isLoggedIn = false;

  if (isLoggedIn) {
    signoutBtn.style.display = "block";
    browseFieldsBtn.style.display = "block";
    profileBtn.style.display = "block";
  } else {
    signoutBtn.style.display = "none";
    browseFieldsBtn.style.display = "none";
    profileBtn.style.display = "none";
  }
});
