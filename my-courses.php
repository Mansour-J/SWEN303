<!DOCTYPE html>

<html lang="en-US" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Victoria University of Wellington">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Victoria - Educational, Course and University Template</title>

</head>

<body class="page-sub-page page-my-account">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<?php include 'header.php';?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">My Courses</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1>My Courses</h1></header>
        <div class="row">
            <div class="col-md-12">
                <section id="my-account">
                        <div class="tab-pane" id="tab-my-courses">
                            <section id="course-list">
                                <table class="table table-hover table-responsive course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th class="starts">Starts</th>
                                        <th class="status">Status</th>
                                        <th>Time</th>
                                        <th>Days</th>
                                        <th>Where</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="status-not-started">
                                        <th class="course-title"><a href="swen303.php">User Interface Design</a></th>
                                        <th>SWEN303</th>
                                        <th>01-03-2014</th>
                                        <th class="status"><i class="fa fa-calendar-o"></i>Not started yet</th>
                                        <th>9:00 am - 9:50 am</th>
                                        <th>MWF</th>
                                        <th>E120</th>
                                    </tr>
                                    <tr class="status-not-started">
                                        <th class="course-title"><a href="#">Advanced Database</a></th>
                                        <th>SWEN432</th>
                                        <th>03-03-2014</th>
                                        <th class="status"><i class="fa fa-calendar-o"></i>Not started yet</th>
                                        <th>9:00 am - 9:50 am</th>
                                        <th>MWF</th>
                                        <th>E120</th>
                                    </tr>
                                    <tr class="status-in-progress">
                                        <th class="course-title"><a href="#">Web Design</a></th>
                                        <th>SWEN434</th>
                                        <th>06-03-2014</th>
                                        <th class="status"><i class="fa fa-clock-o"></i>In progress</th>
                                        <th>10:00 am - 10:50 am</th>
                                        <th>TuF</th>
                                        <th>E220</th>
                                    </tr>
                                    <tr class="status-in-progress">
                                        <th class="course-title"><a href="#">Web Programming</a></th>
                                        <th>SWEN433</th>
                                        <th>21-03-2014</th>
                                        <th class="status"><i class="fa fa-clock-o"></i>In progress</th>
                                        <th>12:10 am - 13:00 am</th>
                                        <th>MWF</th>
                                        <th>A120</th>
                                    </tr>
                                    <tr class="status-completed">
                                        <th class="course-title"><a href="#">Web Design</a></th>
                                        <th>SWEN437</th>
                                        <th>06-04-2014</th>
                                        <th class="status"><i class="fa fa-check"></i>Completed</th>
                                        <th>9:00 am - 9:50 am</th>
                                        <th>MWF</th>
                                        <th>E120</th>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="center">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </div>
                            </section><!-- /#course-list -->
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </section>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

</div>
<!-- end Wrapper -->

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/selectize.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="assets/js/countdown.js"></script>
<script type="text/javascript" src="assets/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>