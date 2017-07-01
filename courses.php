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
        <li class="active">Courses Homepages</li>
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
                        <header><h1>Courses Homepages</h1></header>
                        <section id="course-search">
                            <div class="course-search-box">
                                <header><span class="fa fa-search"></span><h2>Find Course for You</h2></header>
                                <form id="course-search-form" role="form" class="form-inline">
                                    <div class="form-group">
                                        <label for="course-type">Course Subject</label>
                                        <select name="course-type" id="course-type">
                                            <option value="">Course Subject</option>
                                            <option value="1">Graphic Design and 3D</option>
                                            <option value="2">Computer Science</option>
                                            <option value="3">Engineering</option>
                                            <option value="4">Software Engineering</option>
                                            <option value="5">Network Engineering</option>
                                        </select>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="study-level">Course Level</label>
                                        <select name="study-level" id="study-level">
                                            <option value="">Course Level</option>
                                            <option value="2">Undergraduate</option>
                                            <option value="3">Postgraduate</option>
                                            <option value="4">First Year</option>
                                            <option value="5">Second Year</option>
                                            <option value="4">Third Year</option>
                                            <option value="5">Fourth Year</option>
                                        </select>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="full-text">Full Text</label>
                                        <input name="full-text" id="full-text" placeholder="Enter Keyword" type="text">
                                    </div><!-- /.form-group -->
                                </form><!-- /#<!-- /.form-group -->
                                <div class="checkbox">
                                </div>
                                <button type="submit" class="btn pull-right">Search</button>
                            </div><!-- /.course-search-box -->
                        </section><!-- /#course-search -->
                        <section id="course-list">
                            <div class="table-responsive">
                                <table class="table table-hover course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Course Subject</th>
                                        <th class="starts">Starts</th>
                                        <th class="length">Trimester</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>SWEN303</th>
                                        <th class="course-title"><a href="swen303-student.php">User Interface Design</a></th>
                                        <th class="course-category">Computer Science</th>
                                        <th>01-03-2017</th>
                                        <th>Trimester 1</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN423</th>
                                        <th class="course-title"><a href="swen303-prospect-student.php">Object-Oriented </a></th>
                                        <th class="course-category">Sofeware Engineering</th>
                                        <th>18-07-2017</th>
                                        <th>Trimester 2</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN432</th>
                                        <th class="course-title"><a href="swen303-teacher.php">Advanced Database</a></th>
                                        <th class="course-category">Computer Science</a></th>
                                        <th>03-03-2017</th>
                                        <th>Trimester 1</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN433</th>
                                        <th class="course-title"><a href="my-courses.php">Computer Graphics Rendering</a></th>
                                        <th class="course-category">Computer Science</th>
                                        <th>21-03-2017</th>
                                        <th>Trimester 1</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN434</th>
                                        <th class="course-title"><a href="course-detail-v1.html">	Three-Dimensional Modelling for Computer Graphics</a></th>
                                        <th class="course-category">Graphic Design and 3D</th>
                                        <th>06-04-2017</th>
                                        <th>Trimester 1</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN435</th>
                                        <th class="course-title"><a href="course-detail-v1.html">	Directed Individual Study</a></th>
                                        <th class="course-category">Computer Science</th>
                                        <th>03-08-2017</th>
                                        <th>Trimester 2</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN436</th>
                                        <th class="course-title"><a href="course-detail-v1.html">Computer Graphics Project</a></th>
                                        <th class="course-category">Graphic Design and 3D</th>
                                        <th>06-03-2017</th>
                                        <th>1 month</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN437</th>
                                        <th class="course-title"><a href="course-detail-v1.html">Introduction to Computer Program Design</a></th>
                                        <th class="course-category">Computer Science</th>
                                        <th>21-03-2017</th>
                                        <th>3 weeks</th>
                                    </tr>
                                    <tr>
                                        <th>SWEN438</th>
                                        <th class="course-title"><a href="course-detail-v1.html">Introduction to Data Structures and Algorithms</a></th>
                                        <th class="course-category">Engineering</th>
                                        <th>06-04-2017</th>
                                        <th>1 lesson</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </section><!-- /.course-listing -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

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