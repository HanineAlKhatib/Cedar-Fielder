<link rel="style" href="
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<div class="slider-container">
  <div class="slider-item active">
    <img src="./images/field.jfif" alt="Slider Image 1" />
    <div class="slider-text">
      <h2>Rent a Sports Field</h2>
      <p>Book your favorite sports field with ease and convenience.</p>
    </div>
  </div>
  <div class="slider-item">
    <img src="./images/field.jfif" alt="Slider Image 2" />
    <div class="slider-text">
      <h2>Post a Field to Rent Out</h2>
      <p>
        Get the word out about your sports field and start making money.
      </p>
    </div>
  </div>
  <div class="slider-item">
    <img src="./images/field.jfif" alt="Slider Image 3" />
    <div class="slider-text">
      <h2>Book Fields</h2>
      <p>
        Look for fields on CF and book them the time you prefer.
      </p>
    </div>
  </div>
  <div class="slider-nav">
    <button class="slider-nav-item active" onclick="changeSlide(1)"></button>
    <button class="slider-nav-item" onclick="changeSlide(2)"></button>
    <button class="slider-nav-item" onclick="changeSlide(3)"></button>
  </div>
</div>

<script>
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
    return function() {
      showSlide(index);
    };
  }

  // Attach click event listeners to slider navigation items
  sliderNavItems.forEach((item, index) => {
    item.addEventListener("click", handleNavItemClick(index));
  });

  // Automatically switch to the next slide every 5 seconds
  setInterval(nextSlide, 5000);
</script>

<style>
  .slider-container {
    position: relative;
    overflow: hidden;
    height: 500px;
  }

  .slider-item {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }

  .slider-item.active {
    opacity: 1;
  }

  .slider-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .slider-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    z-index: 1;
  }

  .slider-text h2 {
    font-size: 3rem;
    margin-bottom: 2rem;
  }

  .slider-text p {
    font-size: 1.5rem;
  }

  .slider-nav {
    position: absolute;
    bottom: 10%;
    left: 0;
    right: 0;
    margin: auto;
    display: flex;
    justify-content: center;
    z-index: 1;
  }

  .slider-nav-item {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid #fff;
    background-color: transparent;
    margin: 0 10px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }

  .slider-nav-item.active,
  .slider-nav-item:hover {
    background-color: #fff;
  }

  @media (max-width: 768px) {
    .slider-container {
      height: 300px;
    }

    .slider-item img {
      height: 100%;
    }

    .slider-text h2 {
      font-size: 2rem;
    }

    .slider-text p {
      font-size: 1.2rem;
    }
  }
</style>