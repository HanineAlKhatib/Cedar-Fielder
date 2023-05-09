const form = document.getElementById("post-field-form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  // Get form data
  const location = document.getElementById("location").value;
  const description = document.getElementById("description").value;
  const sportTypes = document.getElementById("sport-types").value;
  const size = document.getElementById("size").value;
  const indoorOutdoor = document.getElementById("indoor-outdoor").value;
  const picture = document.getElementById("picture").value;
  const price = document.getElementById("price").value;
  const priceType = document.getElementById("price-type").value;
  const status = document.getElementById("status").value;

  // Validate form data
  if (
    !location ||
    !description ||
    !sportTypes ||
    !size ||
    !indoorOutdoor ||
    !picture ||
    !price ||
    !priceType ||
    !status
  ) {
    alert("Please fill out all fields.");
    return;
  }

  // Submit form data
  alert("Field posted successfully!");
  window.location.href = "homepage.html";
});
