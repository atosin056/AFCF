var loader = document.getElementById('loader');
setTimeout(function() {
    loader.style.display = 'none';
}, 1000);
var slideIndex = 0;
  var slides = document.getElementsByClassName("content-slide");

  function showSlides() {
    var i;
    // Hide all slides
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    // Increment slide index and loop if necessary
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    // Display current slide
    slides[slideIndex - 1].style.display = "block";  
    // Change slide every 5 seconds
    setTimeout(showSlides, 5000); // Change slide every 5 seconds
  }

  // Function to navigate to previous or next slide
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Initial call to start slideshow
  showSlides();
  
  function toggleFAQ(element) {

                var answer = element.querySelector('.faq-answer');

                if (answer.style.display === "none") {

                    answer.style.display = "block";

                }

                else {

                    answer.style.display = "none";

                }

            }