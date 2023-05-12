const imageInput = document.getElementById("image");
const imagePreview = document.getElementById("image-preview");

// Add event listener to show image preview
imageInput.addEventListener("change", showImagePreview);

function showImagePreview() {
  const file = imageInput.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      imagePreview.src = e.target.result;
      imagePreview.style.display = "block";
    };
    reader.readAsDataURL(file);
  } else {
    imagePreview.src = "#";
    imagePreview.style.display = "none";
  }
}

document
  .getElementById("post-field-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Get the form data
    const form = event.target;
    const formData = new FormData(form);


    $.ajax({
      method: "POST",
      url: "/cedar-fielder/Backend/post_field.php", // Replace with your API endpoint
      data: formData,
      processData: false,
      contentType: false,
    })
      .done(function (response) {
        if (response.success) {
          alert(response.message);
          window.location.href = "/cedar-fielder/profile.php";
        } else {
          alert(response.message);
        }
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Error:", textStatus, errorThrown);
        alert(
          "An error occurred while processing your request. Please try again."
        );
      });
  });
