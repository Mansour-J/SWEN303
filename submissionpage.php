<!DOCTYPE html>

<html lang="en-US">
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

<body class="page-sub-page page-course-listing">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<?php include 'header.php';?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="courses.php">Course Homepages</a></li>
        <li><a href="swen303-student.php">SWEN303 Home</a></li>
        <li class="active">Submission</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-12">
                <div id="page-main">
                    <section class="course-listing" id="courses">
                        <header><h1>SWEN 303 Assessment Submission</h1></header>
                       
                        <section id="course-list">
                            <div class="table-responsive">
                                <table class="table table-hover course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Assessment</th>
                                        <th>Description</th>
                                        <th class="starts">Due Date</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th><a href="submit-assignment.php">Assignment 1</a></th>
                                        <th>Usability Evaluation</th>
                                        <th>03/04/2017 10:00:00 (Past due date)</th>
                                        <th>Completed on 02/04/2017 22:26:29</th>
                                        <th><button type="submit" class="btn pull-right" onclick="window.location.href='/submit-assignment.php'">Submission</button></th>
                                    </tr>
                                    <tr>
                                        <th><a href="submit-assignment.php">Assignment 2</a></th>
                                        <th>User Modelling (Personas & Scenarios)</th>
                                        <th>22/05/2017 10:00:00 (Past due date)</th>
                                        <th>Completed on 21/05/2017 23:36:35</th>
                                        <th><button type="submit" class="btn pull-right" onclick="window.location.href='/submit-assignment.php'">Submission</button></th>
                                    </tr>
                                    <tr>
                                        <th><a href="submit-assignment.php">Project</a></th>
                                        <th>User Interface Final Group Design Project</th>
                                        <th>03/07/2017 10:00:00</th>
                                        <th></th>
                                        <th><button type="submit" class="btn pull-right" onclick="window.location.href='/submit-assignment.php'">Submission</button></th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </section><!-- /.course-listing -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

        
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<!-- Footer -->
<?php include 'footer.php';?>
<!-- end Footer -->
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
<script type="text/javascript" src="assets/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>