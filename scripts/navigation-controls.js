$(document).ready(function(){

    var isOpen = false;

    $('#open-nav').click(function(){

        if(!isOpen){
            $('.nav-content-container').addClass('open');
            isOpen = true;
        }else{
            $('.nav-content-container').removeClass('open');
            isOpen = false;
        }

    })



});

    function openModal() {
        document.getElementById('myModal').style.display = "block";
        
    }

    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
        showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;

        var slides = document.getElementsByClassName("overlay-container");

        console.log(slides);

        var dots = document.getElementsByClassName("demo");

        if (n > slides.length) {slideIndex = 1}

        if (n < 1) {slideIndex = slides.length}

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex-1].style.display = "block";

        dots[slideIndex-1].className += " active";
    }