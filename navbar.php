<?php
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = '';
}
?>

<nav class="navbar navbar-expand topbar mb-4">
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $username ?></span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <form action="logout.php" method="post">
                    <button class="btn ml-3" type="submit" name="logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
