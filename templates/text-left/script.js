var slideIndex = 1;


var interval = setInterval(function() {
    slideIndex++;
    showSlide(slideIndex);
}, 4000);


window.onload = function() {
    showSlide(slideIndex);
};

window.nextButton = function() {
    slideIndex++;
    showSlide(slideIndex);
}

window.selectSlide = function(n) {
    slideIndex = n;
    showSlide(slideIndex);
}
diactiveNavigation = function() {
    let navNods = document.querySelectorAll('a.slider-control-link');
    navNods.forEach(nod => {
        nod.classList.remove('active')
    })
}
activeActulNav = function(n) {
    let navLink = document.querySelector('a[data-nav="' + n + '"]');
    navLink.classList.add('active');
}
showSlide = function(n) {
    let slideNods = document.querySelectorAll('div.slide-conteiner');
    //console.log(slideNods.length);

    if (n > slideNods.length) {
        slideIndex = 1;
        n = 1;
    }

    slideNods.forEach(slide => {
        //console.log(slide);
        slide.style.display = 'none';
    });
    diactiveNavigation();
    let activeSlide = document.querySelector('div[data-slide-numb="' + n + '"]');
    activeSlide.style.display = 'flex';
    activeActulNav(n);
}