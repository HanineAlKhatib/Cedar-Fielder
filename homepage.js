document.addEventListener("DOMContentLoaded", function () {
  // Sample data, replace with real data from your API
  const latelyPostedFields = [
    { name: "Field A", location: "City A" },
    { name: "Field B", location: "City B" },
    { name: "Field C", location: "City C" },
  ];

  const mostRentedFields = [
    { name: "Field X", location: "City X", timesRented: 50 },
    { name: "Field Y", location: "City Y", timesRented: 42 },
    { name: "Field Z", location: "City Z", timesRented: 35 },
  ];

  function createFieldElement(field, isMostRented = false) {
    const fieldDiv = document.createElement("div");
    const fieldName = document.createElement("h3");
    fieldName.textContent = field.name;
    fieldDiv.appendChild(fieldName);

    const fieldLocation = document.createElement("p");
    fieldLocation.textContent = field.location;
    fieldDiv.appendChild(fieldLocation);

    if (isMostRented) {
      const fieldTimesRented = document.createElement("p");
      fieldTimesRented.textContent = `Times rented: ${field.timesRented}`;
      fieldDiv.appendChild(fieldTimesRented);
    }

    return fieldDiv;
  }

  function displayFields(fields, containerId, isMostRented = false) {
    const container = document.getElementById(containerId);
    fields.forEach((field) => {
      const fieldDiv = createFieldElement(field, isMostRented);
      container.appendChild(fieldDiv);
    });
  }

  displayFields(latelyPostedFields, "lately-posted-fields");
  displayFields(mostRentedFields, "most-rented-fields", true);
});
