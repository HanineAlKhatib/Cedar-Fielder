$(document).ready(function() {
  const phoneNumberElement = document.getElementById('phone-number');
  const editCredentialsButton = document.getElementById('edit-credentials');

  editCredentialsButton.addEventListener('click', function() {
    const newPhoneNumber = phoneNumberElement.textContent.trim();
    const userId = getCookie('user_id');

    // Perform AJAX request to update the phone number
    $.ajax({
      type: 'POST',
      url: '/cedar-fielder/Backend/change_phone_number.php',
      data: {
        userId: userId,
        phoneNumber: newPhoneNumber
      },
      success: function(response) {
        if (response.success) {
          // Update the phone number on the page
          phoneNumberElement.textContent = newPhoneNumber;
          alert('Phone number updated successfully!');
        } else {
          alert(response.message);
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
        alert('An error occurred while processing your request. Please try again.');
      }
    });
  });

  // Function to retrieve cookie value by name
  function getCookie(name) {
    const cookieValue = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)');
    return cookieValue ? cookieValue.pop() : '';
  }
});
