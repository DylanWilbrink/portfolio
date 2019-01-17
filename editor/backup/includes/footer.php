    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Bootstrap tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script src="http://jaimy.holidayrentcenter.com/js/mdb.min.js"></script>
    <!-- Slider homepage JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.js"></script>
    <script>
        var swiper = new Swiper('.sliderprojecten', {
            speed: 1000,
            slidesPerView: 3,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            spaceBetween: 24,
            loop: true,
            // effect: 'fade',
            coverflowEffect: {
                rotate: 50,
                slideShadows: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                }
            },
        });
    </script>
    <script>
        function idleTimer() {
            var t = setTimeout(inactiveUser, 30000);

            window.onmousemove = activeUser; // catches mouse movements2
            window.onmousedown = activeUser; // catches mouse movements
            window.onclick = activeUser;     // catches mouse clicks
            window.onscroll = activeUser;    // catches scrolling
            window.onkeypress = activeUser;  //catches keyboard actions

            function activeUser() {
                clearTimeout(t);
                t = setTimeout(inactiveUser, 30000); // 30 seconden
                $(".inactief").css("display", "none");

            }

            function inactiveUser() {
                $(".inactief").css("display", "block");
            }
        }

        idleTimer();
    </script>
</html>
