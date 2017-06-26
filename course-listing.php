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
        <li><a href="#">Home</a></li>
        <li class="active">Courses</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section class="course-listing" id="courses">
                        <header><h1>Courses</h1></header>
                        <section id="course-search">
                            <div class="course-search-box">
                                <header><span class="fa fa-search"></span><h2>Find Course for You</h2></header>
                                <form id="course-search-form" role="form" class="form-inline">
                                    <div class="form-group">
                                        <label for="course-type">Course Type</label>
                                        <select name="course-type" id="course-type">
                                            <option value="">Graphic Design and 3D</option>
                                            <option value="2">History and Psychology</option>
                                            <option value="3">Marketing</option>
                                            <option value="4">Science</option>
                                        </select>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="study-level">Course Type</label>
                                        <select name="study-level" id="study-level">
                                            <option value="">Study Level</option>
                                            <option value="2">Beginner</option>
                                            <option value="3">Advanced</option>
                                            <option value="4">Intermediate</option>
                                            <option value="5">Professional</option>
                                        </select>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="full-text">Full Text</label>
                                        <input name="full-text" id="full-text" placeholder="Enter Keyword" type="text">
                                    </div><!-- /.form-group -->
                                </form><!-- /#<!-- /.form-group -->
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Webinar
                                    </label>
                                </div>
                                <button type="submit" class="btn pull-right">Search</button>
                            </div><!-- /.course-search-box -->
                        </section><!-- /#course-search -->
                        <section id="course-list">
                            <div class="table-responsive">
                                <table class="table table-hover course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Type</th>
                                        <th class="starts">Starts</th>
                                        <th class="length">Length</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">	Introduction to Computer Graphics</a></th>
                                        <th class="course-category"><a href="#">Graphic Design and 3D</a></th>
                                        <th>01-03-2014</th>
                                        <th>3 months</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">Computer Graphics</a></th>
                                        <th class="course-category"><a href="#">Marketing</a></th>
                                        <th>03-03-2014</th>
                                        <th>2 lessons</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">	Project in Computer Graphics Programming</a></th>
                                        <th class="course-category"><a href="#">Marketing</a></th>
                                        <th>06-03-2014</th>
                                        <th>1 month</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">Computer Graphics Rendering</a></th>
                                        <th class="course-category"><a href="#">Science</a></th>
                                        <th>21-03-2014</th>
                                        <th>3 weeks</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">	Three-Dimensional Modelling for Computer Graphics</a></th>
                                        <th class="course-category"><a href="#">History and Psychology</a></th>
                                        <th>06-04-2014</th>
                                        <th>1 lesson</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">	Directed Individual Study</a></th>
                                        <th class="course-category"><a href="#">Marketing</a></th>
                                        <th>03-03-2014</th>
                                        <th>2 lessons</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">Computer Graphics Project</a></th>
                                        <th class="course-category"><a href="#">Marketing</a></th>
                                        <th>06-03-2014</th>
                                        <th>1 month</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">Introduction to Computer Program Design</a></th>
                                        <th class="course-category"><a href="#">Science</a></th>
                                        <th>21-03-2014</th>
                                        <th>3 weeks</th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">Introduction to Data Structures and Algorithms</a></th>
                                        <th class="course-category"><a href="#">History and Psychology</a></th>
                                        <th>06-04-2014</th>
                                        <th>1 lesson</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </section><!-- /.course-listing -->
                    <div class="center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Related News</h2>
                        </header>
                        <div class="section-content">
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <header><a href="#">U-M School of Public Health, Detroit partners aim to improve air quality in the city</a></header>
                            </article><!-- /article -->
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <header><a href="#">At 50, Center for the Education of Women celebrates a wider mission</a></header>
                            </article><!-- /article -->
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <header><a href="#">Three U-Michigan scientists receive Sloan fellowships</a></header>
                            </article><!-- /article -->
                        </div><!-- /.section-content -->
                        <a href="#" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                    <aside id="archive">
                        <header>
                            <h2>Course Archive</h2>
                            <ul class="list-links">
                                <li><a href="#">February 2014</a></li>
                                <li><a href="#">January 2014</a></li>
                                <li><a href="#">November 2013</a></li>
                                <li><a href="#">October 2013</a></li>
                                <li><a href="#">August 2013</a></li>
                                <li><a href="#">July 2013</a></li>
                                <li><a href="#">June 2013</a></li>
                                <li><a href="#">May 2013</a></li>
                            </ul>
                        </header>
                    </aside><!-- /archive -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
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