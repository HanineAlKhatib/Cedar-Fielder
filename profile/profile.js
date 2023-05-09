document.addEventListener("DOMContentLoaded", function () {
  const profilePicture = document.getElementById("profile-picture");
  const uploadProfilePicture = document.getElementById(
    "upload-profile-picture"
  );

  profilePicture.addEventListener("click", function () {
    uploadProfilePicture.click();
  });

  uploadProfilePicture.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        profilePicture.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });

  // Add sample data for user's posted, saved, and rented fields
  const myPostedFields = [
    { name: "My Field A", location: "City A" },
    { name: "My Field B", location: "City B" },
  ];

  const savedFields = [
    { name: "Saved Field A", location: "City A" },
    { name: "Saved FieldB", location: "City B" },
  ];

  const rentedFields = [
    { name: "Rented Field A", location: "City A" },
    { name: "Rented Field B", location: "City B" },
  ];

  function createFieldElement(field) {
    const fieldDiv = document.createElement("div");
    fieldDiv.classList.add("field-card");

    const fieldName = document.createElement("h3");
    fieldName.textContent = field.name;
    fieldDiv.appendChild(fieldName);

    const fieldLocsation = document.createElement("p");
    fieldLocation.textContent = field.location;
    fieldDiv.appendChild(fieldLocation);

    return fieldDiv;
  }

  function displayFields(fields, containerId) {
    const container = document.getElementById(containerId);
    fields.forEach((field) => {
      const fieldDiv = createFieldElement(field);
      container.appendChild(fieldDiv);
    });
  }

  displayFields(myPostedFields, "my-posted-fields");
  displayFields(savedFields, "saved-fields");
  displayFields(rentedFields, "rented-fields");

  // Redirect to history of rents page
  const historyButton = document.createElement("button");
  historyButton.textContent = "History of Rents";
  historyButton.addEventListener("click", function () {
    window.location.href = "history_of_rents.html"; // Replace with the correct URL
  });
  document.getElementById("user-fields").appendChild(historyButton);
});
