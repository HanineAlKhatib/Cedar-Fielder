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

  // Display field information in the DOM
  function createFieldElement(field, isMostRented = false) {
    const fieldDiv = document.createElement("div");
    fieldDiv.classList.add("field");

    const fieldImg = document.createElement("img");
    fieldImg.src = "https://via.placeholder.com/250x200.png?text=Field+Image";
    fieldImg.alt = "Field Image";
    fieldDiv.appendChild(fieldImg);

    const fieldInfo = document.createElement("div");
    fieldInfo.classList.add("field-info");
    fieldDiv.appendChild(fieldInfo);

    const fieldName = document.createElement("h3");
    fieldName.textContent = field.name;
    fieldInfo.appendChild(fieldName);

    const fieldLocation = document.createElement("p");
    fieldLocation.textContent = field.location;
    fieldInfo.appendChild(fieldLocation);

    if (isMostRented) {
      const fieldTimesRented = document.createElement("p");
      fieldTimesRented.textContent = `Times Rented: ${field.timesRented}`;
      fieldInfo.appendChild(fieldTimesRented);
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

  // Slider functionality
  const sliderItems = document.querySelectorAll(".slider-item");
  const sliderNavItems = document.querySelectorAll(".slider-nav-item");

  let currentIndex = 0;

  function showSlide(index) {
    if (index < 0 || index >= sliderItems.length) {
      return;
    }

    sliderItems[currentIndex].classList.remove("active");
    sliderNavItems[currentIndex].classList.remove("active");

    currentIndex = index;

    sliderItems[currentIndex].classList.add("active");
    sliderNavItems[currentIndex].classList.add("active");
  }

  function nextSlide() {
    const nextIndex = (currentIndex + 1) % sliderItems.length;
    showSlide(nextIndex);
  }

  function previousSlide() {
    const prevIndex =
      (currentIndex - 1 + sliderItems.length) % sliderItems.length;
    showSlide(prevIndex);
  }

  function handleNavItemClick(index) {
    return function () {
      showSlide(index);
    };
  }

  // Attach click event listeners to slider navigation items
  sliderNavItems.forEach((item, index) => {
    item.addEventListener("click", handleNavItemClick(index));
  });

  // Automatically switch to the next slide every 5 seconds
  setInterval(nextSlide, 5000);
});
s