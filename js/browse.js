document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const fieldList = document.getElementById('lately-posted-fields');

    searchForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        const searchValue = searchInput.value.trim();

        if (searchValue !== '') {
            // Perform AJAX request to fetch search results
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './search.php?search=' + encodeURIComponent(searchValue), true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Request successful, update field list with new search results
                        fieldList.innerHTML = xhr.responseText;
                    } else {
                        // Request failed, handle error
                        console.error('Error:', xhr.status);
                    }
                }
            };

            xhr.send();
        }
    });
});