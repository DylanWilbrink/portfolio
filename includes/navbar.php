<div class="inactief">
    <?php
    include_once('connection.php');
    $connect = new connection();

    $randomquery = $connect->connect()->prepare('SELECT * FROM projects ORDER BY RAND() LIMIT 1');
    $randomquery->execute();
    $randomresults = $randomquery->fetchAll();

    foreach ($randomresults as $result) { ?>
        <img src="<?php echo $result['project_imagename'] ?>" alt="<?php echo $result['project_imagename'] ?>">
        <h1><?php echo $result['project_name']; ?></h1>
        <p><?php echo $result['project_description'] ?></p>
    <?php } ?>
</div>

<nav class="mb-1 navbar navbar-expand-lg navbar-light fontaventus white lighten-1 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="http://jaimy.holidayrentcenter.com">
            <img class="nav-brand-img" src="http://jaimy.holidayrentcenter.com/logo.png" alt="mdb logo">
        </a>
        <button class="navbar-toggler collapsed custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent-5" aria-controls="navbarSupportedContent-5" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fa fa-reorder" aria-hidden="true" style="color: white"></i>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent-5">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://jaimy.holidayrentcenter.com/">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="http://jaimy.holidayrentcenter.com/project">Projecten</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    function idleTimer() {
        var t = setTimeout(inactiveUser, 30000);

        window.onmousemove = activeUser; // catches mouse movements2
        window.onmousedown = activeUser; // catches mouse movements
        window.onclick = activeUser;     // catches mouse clicks
        window.onscroll = activeUser;    // catches scrolling
        window.onkeypress = activeUser;  //catches keyboard actions

        function getData(){
            $.ajax({
                type: 'POST',
                url: 'http://jaimy.holidayrentcenter.com/includes/randomquery.php',
                success: function(data){
                    $('#output').html(data);
                }
            });
        }

        function activeUser() {
            getData();
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