<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
					
					<li class="dropdown messages-dropdown">
                      <a href="showclients.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i> Clients<b class="caret"></b></a>
                        <ul class="dropdown-menu">
							<li class="message-preview">
                                <a href="addclients.php">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Add</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="showclients.php">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Modify/Delete</span>
                                </a>
                            </li>
						</ul>
                    </li>
					<li class="dropdown messages-dropdown">
                      <a href="showdata.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i> Data Show<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="message-preview">
                                <a href="adddata.php">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Add</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="showdata.php">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Show</span>
                                </a>
                            </li>
						</ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> My Account<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <!--- <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Edit Info</a></li>
						    <li><a href="register.html"><i class="fa fa-font"></i> Register</a></li>
					 
                            <li class="divider"></li>--->
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
