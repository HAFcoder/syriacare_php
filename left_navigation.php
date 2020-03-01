<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">Hi <?php echo $_SESSION['user_name'] ?>!</li>
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Donator</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="table.html">List Donator</a></li>
                            <li><i class="fa fa-circle"></i><a href="table.html">Add Donator</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-calendar"></i>Event</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="table.html">List Event</a></li>
                            <li><i class="fa fa-circle"></i><a href="table.html">Create Event</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Staff</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="table.html">List Staff</a></li>
                            <li><i class="fa fa-circle"></i><a href="table.html">Add Staff</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>