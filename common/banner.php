<div class="main-banner">
    <ul id="slides">
        <li class="slide showing">
            <a href="#">
                <img src="/images/banner/1.png" alt="">
            </a>
        </li>
        <li class="slide">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/a60EN2zzdyc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </li>
        <?php for ($i=3; $i < 5; $i++) { ?>
            <li class="slide">
                <a href="#">
                    <img src="/images/banner/<?= $i?>.png" alt="">
                </a>
            </li>
        <?php } ?>
    </ul>

    <div class="banner-controls">
        <button class="controls" id="previous"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve"><path fill="#fff" d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12
            C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084
            c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864
            l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"/>
        </svg></button>
        <button class="controls" id="pause"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 45.975 45.975" style="enable-background:new 0 0 45.975 45.975;" xml:space="preserve"><path fill="#fff" d="M13.987,0c-2.762,0-5,2.239-5,5v35.975c0,2.763,2.238,5,5,5s5-2.238,5-5V5C18.987,2.238,16.75,0,13.987,0z"/><path fill="#fff" d="M31.987,0c-2.762,0-5,2.239-5,5v35.975c0,2.762,2.238,5,5,5s5-2.238,5-5V5C36.987,2.239,34.749,0,31.987,0z"/>
        </svg></button>
        <button class="controls" id="next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve">
            <path fill="#fff" d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
            c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
            c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
            c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/>
        </svg></button>
    </div>
</div>

<script type="text/javascript">
var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,50000);
var playing = false;
var pauseButton = document.getElementById('pause');

function pauseSlideshow() {
    pauseButton.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 494.148 494.148" style="enable-background:new 0 0 494.148 494.148;" xml:space="preserve"><path fill="#fff" d="M405.284,201.188L130.804,13.28C118.128,4.596,105.356,0,94.74,0C74.216,0,61.52,16.472,61.52,44.044v406.124 c0,27.54,12.68,43.98,33.156,43.98c10.632,0,23.2-4.6,35.904-13.308l274.608-187.904c17.66-12.104,27.44-28.392,27.44-45.884 C432.632,229.572,422.964,213.288,405.284,201.188z"/></svg>';
    playing = false;
    clearInterval(slideInterval);
}

function playSlideshow() {
    pauseButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 45.975 45.975" style="enable-background:new 0 0 45.975 45.975;" xml:space="preserve"><path fill="#fff" d="M13.987,0c-2.762,0-5,2.239-5,5v35.975c0,2.763,2.238,5,5,5s5-2.238,5-5V5C18.987,2.238,16.75,0,13.987,0z"/><path fill="#fff" d="M31.987,0c-2.762,0-5,2.239-5,5v35.975c0,2.762,2.238,5,5,5s5-2.238,5-5V5C36.987,2.239,34.749,0,31.987,0z"/></svg>';
    playing = false;
    slideInterval = setInterval(nextSlide,50000);
}

pauseButton.onclick = function() {
    if(playing) {
    pauseSlideshow();
  } else {
    playSlideshow();
  }
};


function nextSlide() {
    goToSlide(currentSlide+1);
}

function previousSlide() {
    goToSlide(currentSlide-1);
}

function goToSlide(n) {
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide showing';
}

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function() {
    pauseSlideshow();
    nextSlide();
};
previous.onclick = function() {
    pauseSlideshow();
    previousSlide();
};

</script>
