$(document).ready(function() {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const fieldList = document.getElementById('lately-posted-fields');
    const browseTitle = document.getElementById('title');
    searchForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        const searchValue = searchInput.value.trim();

        if (searchValue !== '') {
            // Perform AJAX request to fetch search results
            $.ajax({
                type: 'GET',
                url: '/cedar-fielder/Backend/search.php',
                data: {
                    search: searchValue
                },
                success: function(response) {
                    fieldList.innerHTML = response;
                    browseTitle.textContent = 'Browse for "' + searchValue + '"';
                
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error:', textStatus, errorThrown);
                    alert('An error occurred while processing your request. Please try again.');
                }
            });
        }
    });
});
