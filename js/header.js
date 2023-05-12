$(document).ready(function() {
    const profileButton = document.getElementById('prf');
    const signoutButton = document.getElementById('signOut');
    const homeButton = document.getElementById('home');
    const browseButton = document.getElementById('browse');

    profileButton.addEventListener('click', function() {
        window.location.href = 'profile.php';
    });

    signoutButton.addEventListener('click', function() {
        window.location.href = 'login.php';
    });
    homeButton.addEventListener('click', function() {
        window.location.href = 'index.php';
    });
    browseButton.addEventListener('click', function() {
        window.location.href = 'browse.php';
    });
});