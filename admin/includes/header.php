<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://primathink.com/" >

                <h1 style="  color: white; font-size: 20px;"><strong>PrimaThink Lab</strong><br><i>Library Management System</i> </h1>
                    <!--img src="assets/img/logo1.png" style="border: 4px solid " /-->
                </a>

            </div>

            <div class="right-div" style="margin-right:70px;">
                <a href="logout.php" class="btn btn-danger pull-right" style="background-color:white;color:#d83a69;margin-top:10px;" >LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section" >
            <div class="container" style="left:0">
            <div class="row">
                
</div>
			<div class="row" style="background-color:#FBC0E4">
                <div class="col-md-11" >
                    <div class="navbar-collapse collapse " >
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">Home</a></li>
                           
                            <li>
                                <a href="#" class="dropdown-toggle " style="" id="ddlmenuItem" data-toggle="dropdown"> Types <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php" >Add Type</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">Manage Type </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Publishers <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-publications.php">Add Publishers</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-publications.php">Manage Publishers</a></li>
                                </ul>
                            </li>
 <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Add Book</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Manage Books</a></li>
									 <li role="presentation"><a role="menuitem" tabindex="-1" href="set-fine.php">Update Fine</a></li>
                                </ul>
                            </li>
                            
							
							
                           <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Issue Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Issue New Book</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">Manage Issued Books</a></li>
                                </ul>
                            </li>
							
							<li><a href="manage-requested-books.php" >Requested Books</a></li>
							<li><a href="report.php" >Report</a></li>
                            <li><a href="reg-students.php">Reg Students</a></li>
                            <li><a href="change-password.php">Change Password</a></li>
                        </ul>
                    </div>
                </div>
			 </div>
        </div>
    </section>