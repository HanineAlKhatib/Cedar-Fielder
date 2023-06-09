$(document).ready(function () {
  $("#rent-form").submit(function (event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get the min_rent_hours from the data attribute
    const minRentHours = $(this).data("min-rent-hours");
    const fieldId = $(this).attr("field-id");

    // Get the form data
    var formData = $(this).serialize();

    // Append the min_rent_hours and field_id to the form data
    formData += "&min-rent-hours=" + minRentHours;
    formData += "&field_id=" + fieldId;
    console.log(fieldId);
    // Make an AJAX request
    $.ajax({
      type: "POST",
      url: "/cedar-fielder/Backend/reservation.php",
      data: formData,
      success: function (response) {
        if (response.success) {
          alert(response.message);
        window.location('/cedar-fielder/index.php')
        } else {
          alert(response.message);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        // Handle the error response
        console.error("Error:", textStatus, errorThrown);
        alert(
          "An error occurred while processing your request. Please try again."
        );
      },
    });
  });
});
