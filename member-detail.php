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

<body class="page-sub-page page-member-detail">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<?php include 'header.php';?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Members</a></li>
        <li class="active">Member Detail</li>
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
                    <section id="members">
                        <header><h1>Member Detail</h1></header>
                        <div class="author-block member-detail">
                            <figure class="author-picture"><img src="assets/img/member-detail.jpg" alt=""></figure>
                            <article class="paragraph-wrapper">
                                <div class="inner">
                                    <header><h2>Claire Doe</h2></header>
                                    <figure>Marketing Specialist</figure>
                                    <hr>
                                    <p class="quote">
                                       Senior Lecturer School of Engineering and Computer Science
                                    </p>
                                    <hr>
                                    <div class="contact">
                                        <strong>Contact Member</strong>
                                        <div class="icons">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                                        </div><!-- /.icons -->
                                    </div>
                                    <h3>Biography</h3>
                                    <p>
                                      Responsibilities

I am the Head of School for the School of Engineering and Computer Science. I am also the permanent academic responsible for the Human-Computer Interaction group.
Research Interests

My research interests lie in
information visualisation
natural user interfaces (specifically touch-interfaces, gesture-interfaces and Kinect/Move-style interfaces)
I am a member of the human-computer interaction research group, and I am currently supervising a range of thesis and honours students.
Publications

For a list of my recent publications, please see the Publications Database.
Biography

I completed my bachelor, masters and doctoral degrees at Victoria University of Wellington. My MSc and PhD theses were in the field of software reuse.

                                    </p>
                                    <h3>Member's Courses</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover course-list-table tablesorter">
                                            <thead>
                                            <tr>
                                                <th>Course Name</th>
                                                <th class="starts">Starts</th>
                                                <th class="length">Length</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th class="course-title"><a href="course-detail-v1.html">Computer Game Development</a></th>
                                                <th>01-03-2014</th>
                                                <th>3 months</th>
                                            </tr>
                                            <tr>
                                                <th class="course-title"><a href="course-detail-v1.html">Control Systems Engineering	</a></th>
                                                <th>03-03-2014</th>
                                                <th>2 lessons</th>
                                            </tr>
                                            <tr>
                                                <th class="course-title"><a href="course-detail-v1.html">Advanced Control Systems Engineering	</a></th>
                                                <th>06-03-2014</th>
                                                <th>1 month</th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </article>
                        </div><!-- /.author -->
                    </section>
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
                    <aside id="newsletter">
                        <header>
                            <h2>Newsletter</h2>
                            <div class="section-content">
                                <div class="newsletter">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your e-mail">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-angle-right"></i></button>
                                    </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.newsletter -->
                                <p class="opacity-50">The class representative provides a useful way to communicate feedback to the teaching staff during the course. They also work with the VUWSA Education Office on any academic issues that arise in their course. Reps are elected by students by the third week of classes every trimester. Being a rep requires a weekly commitment.
                                </p>
                            </div><!-- /.section-content -->
                        </header>
                    </aside><!-- /.newsletter -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<!-- Footer -->
<?php include 'header.php';?>
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
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>