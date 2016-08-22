<!DOCTYPE html>
<html>
<head>
    <title>::Full Stack tutorials::</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--JavaScript-->
    <script src="js/basic.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/angular.min.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="css/main.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container">
        <br />
        <br />
        <br />
        <!--Menu-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="slider_area">
                    <div class="menuarea">
                        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- For Text Logo -->
                                    <a class="navbar-brand logo" href="#"><span>FullStack</span>Tutorials</a>
                                    <!-- For Img Logo -->
                                    <!--  <a class="navbar-brand logo" href="#"><img src="img/logo.png" alt="logo"></a> -->
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right custom_nav mobnav" id="top-menu">
                                        <li class="active"><a href="#headerArea">HOME</a></li>
                                        <li><a href="#createSection">Create</a></li>
                                        <li><a href="#retriveSection">Retrieve</a></li>
                                        <li><a href="#updateSection">Update</a></li>
                                        <li><a href="#deleteSection">Delete</a></li>
                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div>
                        </div>
                    </div>
                </div><!-- End slider_area -->
            </div> <!-- End <div class="col-lg-12 col-md-12 col-sm-12"> -->
        </div><!-- End <div class="row"> -->
        <!--Content-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="jumbotron">
                    <h1>FullStack Tutorial</h1>
                    <p>Bootstrap,Angular, JavaScript, PHP and MySQL</p>
                </div>
            </div>

            <div class="col-lg-10 col-md-10 col-sm-12">
                <h2>Employee list</h2>
                <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>
                <table class="table table-striped table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Firs tname</th>
                            <th>Last name</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>August 18 1981</td>
                            <td>35</td>
                            <td>anna.p@augmentis.biz</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pakorn</td>
                            <td>Chanlim</td>
                            <td>August 19 1982</td>
                            <td>34</td>
                            <td>pakorn.c@augmentis.biz</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="pager pagination pull-right">
                    <li class="previous"><a href="#">Previous</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div> <!--End <div class="container"> -->

    <br />

    <!-- START Create SECTION -->
    <div class="container">
	     <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
        <h2>Create Employee</h2>
        <div class="panel panel-default">
            <div class="panel-heading">New Employee Infomation</div>
            <div class="panel-body">
                <section id="createSection">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="firstName">Fist Name:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                                        </div>
                                        <label class="control-label col-sm-2" for="lastName">Last Name:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="dateOfBirth">Date of Birth:</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="dateOfBirth" placeholder="Enter Date Of Birth">
                                        </div>
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-4">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
            </div>
        </div>
    </div>



</body>
</html>
