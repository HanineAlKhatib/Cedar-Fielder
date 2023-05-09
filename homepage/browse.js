document
  .getElementById("search-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const searchInput = document.getElementById("search-input").value.trim();

    if (searchInput) {
      searchFields(searchInput);
    }
  });

function searchFields(query) {
  // Implement your logic for fetching fields from the database using the query
  // For example, if you are using an API, you can use the fetch() function to make an API call
  fetch(`https://your-api-url/search?query=${query}`)
    .then((response) => response.json())
    .then((data) => {
      // Process and display the fetched data
      // You can display the results in a new section or replace the existing field-list with the search results
    })
    .catch((error) => {
      console.error("Error fetching search results:", error);
    });
}
