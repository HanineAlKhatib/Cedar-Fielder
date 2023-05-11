document.addEventListener("DOMContentLoaded", function () {
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
