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

    <title>Victoria - Educational, Blog Post and University Template</title>

</head>

<body class="page-sub-page page-Blog Post-detail">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<?php include 'header.php';?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="courses.php">Courses Homepages</a></li>
        <li><a href="swen303-student.php">SWEN303 Home</a></li>
        <li><a href="submissionpage.php">Submission</a></li>
        <li class="active">Submit Assignment1</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <div><header><h1>SWEN303 - Assignment 1</h1></header>
            <h4>Usability Evaluation</h4>
            </div>
            <div class="col-md-6">
            <table class="table table-hover course-list-table tablesorter">
                <thead><tr><th><h3><b>Assessment Info</b></h3></th></tr></thead>
                <tr><td><h4>Please submit your assignment in PDF format.</h4></td></tr>
            </table>
            </div>
            <div class="col-md-6">
            <table class="table table-hover course-list-table tablesorter">
                <thead><tr><th><h3><b>Submission Status</b></h3> </th><th><button type="submit" class="btn pull-right">Complete submission</button></th></tr></thead>
                <tr><td><h4>Completed on 02/04/2017 22:26:29 </h4></td><td></td></tr>
            </table>
            </div>
            <div class="col-md-12">
            <table class="table table-hover course-list-table tablesorter">
                <thead><tr><th>
                    <h3><b>Submitted files</b><span id="js_upload" class="btn btn-primary fileinput-button pull-right" style="margin-left: 20px; margin-top: -8px; display: block;">
                <span class="glyphicon glyphicon-plus"></span>
                <span>Add files...</span>
                </span></h3> 
                </th></tr></thead>
                <tr><td>
                    <table class="table table-hover course-list-table tablesorter">
                        <thead>
                        <tr>
                            <th><h4><b>file name</b></h4></th>
                            <th><h4><b>size</b></h4></th>
                            <th><h4><b>Submission Date</b></h4></th>
                            <th><h4><b>Delete</b></h4></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>SWEN303_Assingment_1.pdf <a href="#" title="download"><span class="glyphicon glyphicon-download"></span></a></th>
                            <td>1.1 MB </th>
                            <td>02/04/2017 22:26:18</th>
                            <td><button type="submit" class="btn btn-danger btn-xs delete_buttons" onclick="return confirm('Are you sure you want to delete this file?');">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button></th>
                        </tr>
                        </tbody>
                    </table>
                </td></tr>
              </table>
              </div>
        </div>
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

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
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>