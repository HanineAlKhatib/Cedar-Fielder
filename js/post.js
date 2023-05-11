const form = document.getElementById("post-field-form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  // Get form data
  const name = document.getElementById("name").value;
  const size = document.getElementById("size").value;
  const sportTypes = document.getElementById("sport-types").value;
  const location = document.getElementById("location").value;
  const description = document.getElementById("description").value;
  const indoorOutdoor = document.getElementById("indoor-outdoor").value;
  const availability = document.getElementById("availability").value;
  const image = document.getElementById("image").value;
  const price = document.getElementById("price").value;
  const rentPeriod = document.getElementById("rent-period").value;

  // Validate form data
  if (
    !name ||
    !size ||
    !sportTypes ||
    !location ||
    !description ||
    !indoorOutdoor ||
    !availability ||
    !image ||
    !price ||
    !rentPeriod
  ) {
    alert("Please fill out all fields.");
    return;
  }

  // Submit form data
  alert("Field posted successfully!");
  window.location.href = "homepage.html";
});
