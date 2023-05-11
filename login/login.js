$(document).ready(function() {
  $('#login-form').submit(function(e) {
      e.preventDefault();
      var username = $('input[name="username"]').val();
      var password = $('input[name="password"]').val();

      if (username === '' || password === '') {
          alert('Please enter your username and password.');
      } else {
          // Submit form to server
          $.ajax({
              type: 'POST',
              url: '/cedar-fielder/Backend/login_credentials.php',
              data: {
                  username: username,
                  password: password
              },
              success: function(response) {
                  if (response.success) {
                      window.location.href = '/cedar-fielder/index.php';
                  } else {
                      alert(response.message);
                      $('.error').remove();
                      $('form').append('<p style="color:red">' + response.message + '</p>');
                  }
              },
              error: function() {
                  alert('There was an error processing your request.');
              }
          });
      }
  });
});
