<?php echo '
<!-- Navbar -->
<header class="no-pad no-pad-bot no-padding z-depth-5">
<div class="navbar-fixed">
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo">Michael Louie</a>            
            <ul class="right hide-on-med-and-down">
                <li><a href="about.php">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="resume.php">Résumé</a></li>
                <li><a class="waves-effect waves-light" href="#modal1">Contact</a></li>
            </ul>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    
</div>
</header>
<ul class="side-nav blue darken-4 z-depth-5" id="mobile-demo">
    <li>
        <div class="userView">
            <div class="background">
                <img src="../resources/img/side-bar-badge-background.jpg">
            </div>
            <a href=""><img class="circle" src="../resources/img/orig-me-look.jpg"></a>
            <a href=""><span class="white-text name">Michael Louie</span></a>
            <a href=""><span class="white-text email">michael.louie10@gmail.com</span></a>
        </div>
    </li>
    <li><a href="about.php" class="white-text waves-effect">
        <i class="material-icons white-text">info_outline</i>About</a></li>
    <li><a href="portfolio.php" class="white-text waves-effect">
        <i class="material-icons white-text">dashboard</i>Portfolio</a></li>
    <li><a href="resume.php" class="white-text waves-effect">
        <i class="material-icons white-text">description</i>Résumé</a></li>
    <li><a class="waves-effect waves-light white-text waves-effect" href="#modal1" >
        <i class="material-icons white-text">perm_phone_msg</i>Contact</a></li>
</ul>

<!-- .Navbar -->
'; ?>