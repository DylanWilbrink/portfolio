
<div class="inactief">
    U bent inactief.
</div>

<nav class="mb-1 navbar navbar-expand-lg navbar-light fontaventus white lighten-1 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="http://localhost/portfolio">
            <img class="nav-brand-img" src="http://localhost/portfolio/logo.png" alt="mdb logo">
        </a>
        <button class="navbar-toggler collapsed custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-5" aria-controls="navbarSupportedContent-5" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-reorder" aria-hidden="true" style="color: white"></i>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent-5">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/portfolio">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="http://localhost/portfolio/project">Projecten</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<script type="text/javascript">
    function idleTimer() {
        var t = setTimeout(inactiveUser, 30000);

        window.onmousemove = activeUser; // catches mouse movements
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

<style>
    .inactief{
        position: fixed;
        display: none;
        transition: all 2s;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100vh;
        z-index: 1040;
        background: rgba(0,0,0,0.9);
        text-align: center;
        color: white;
        padding-top: 50vh;
        font-family: the_mix_bold;
        font-size: 36px;
    }
    .av-box:hover{
        background-color: #ffffff;
        color: #7464ac;
    }
</style>