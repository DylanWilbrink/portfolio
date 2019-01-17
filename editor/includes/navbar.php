<div class="inactief">
    <?php
    include_once('connection.php');
    $connect = new connection();

    $randomquery = $connect->connect()->prepare('SELECT * FROM projects ORDER BY RAND() LIMIT 1');
    $randomquery->execute();
    $randomresults = $randomquery->fetchAll();

    foreach ($randomresults as $result) { ?>
        <img src="http://www.pdvhacks.com/Aventus/upload/<?php echo $result['project_imagename'] ?>" height="50%" alt="<?php echo $result['project_imagename'] ?>">
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

