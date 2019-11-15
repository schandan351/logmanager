<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand" href="/">LOGMANAGER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            
            <?php session_start();?>
            <?php if(!isset($_SESSION['email'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="/register-form">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login-form">Login</a>
                </li>
            <?php endif;?>

            
            <?php session_start();?>
            <?php  if(isset($_SESSION['email'])):?>
                    <li class="nav-item ">
                        <a class="nav-link" href="/">New log</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logs">Logs</a>
                     </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome <?php echo($_SESSION['firstname']);?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            <?php endif; ?>
          
        </ul>
    </div>
</nav>