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
