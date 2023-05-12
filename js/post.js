
  const openHoursInput = document.getElementById("openHours");
  const closeHoursInput = document.getElementById("closeHours");

  // Add event listener to check closing hours validity
  openHoursInput.addEventListener("input", validateClosingHours);

  function validateClosingHours() {
    const openHours = openHoursInput.value;
    const closeHours = closeHoursInput.value;
    console.log(openHours);
    console.log(closeHours);
    if (closeHours < openHours) {
      closeHoursInput.setCustomValidity("Closing hours cannot be before opening hours.");
    } else {
      closeHoursInput.setCustomValidity("");
    }
  }

  const imageInput = document.getElementById("image");
  const imagePreview = document.getElementById("image-preview");

  // Add event listener to show image preview
  imageInput.addEventListener("change", showImagePreview);

  function showImagePreview() {
    const file = imageInput.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        imagePreview.src = e.target.result;
        imagePreview.style.display = "block";
      };
      reader.readAsDataURL(file);
    } else {
      imagePreview.src = "#";
      imagePreview.style.display = "none";
    }
  }



document.getElementById("post-field-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the form from submitting normally

  // Get the form data
  const form = event.target;
  const formData = new FormData(form);

  // Make an AJAX request
  $.ajax({
    method: 'POST',
    url: '/cedar-fielder/Backend/post_field.php', // Replace with your API endpoint
    data: formData,
    processData: false,
    contentType: false
  }).done(function(response) {
    if (response.success) {
      // Field posted successfully, perform any necessary actions (e.g., show success message, redirect, etc.)
      alert(response.message);
    } else {
      // Field posting failed, handle the error (e.g., display error message)
      alert(response.message);
    }
  }).fail(function(jqXHR, textStatus, errorThrown) {
    console.error('Error:', textStatus, errorThrown);
    alert('An error occurred while processing your request. Please try again.');
  });
});
