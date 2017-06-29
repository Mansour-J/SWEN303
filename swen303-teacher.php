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

<body class="page-sub-page page-course-detail">
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
        <li class="active">SWEN 303</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1>SWEN 303-User Interface Design  </h1></header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2">
                <figure class="course-image">
                    <div class="image-wrapper"><img src="assets/img/course-detail-img.jpg"></div>
                </figure>
                <header><h3><a href="edit-course-info.php">Edit Course Info</a></h3></header>
                <header><h3><a href="marks-edit.php">Mark Assignments</a></h3></header>
                <header><h3><a href="add-assignments.php">Add Assignments</a></h3></header>
                <header><h3><a href="add-lecture-notes.php">Add Lecture Notes</a></h3></header>
                
            </div><!-- end Course Image -->
            
            <!--MAIN Content-->
            <div class="col-md-10">
                <div id="page-main">
                    <section id="course-detail">
                        <article class="course-detail">
                            <section id="course-header">
                                <header>
                                    <h2 class="course-date">Saturday March 27, 2015</h2>
                                    <div class="course-category">Category:<a href="#">Software Engineering</a></div>
                                </header>
                                <hr>
                                <div class="course-count-down" id="course-count-down">
                                        
                            
                            
                     
                                </div><!-- /.course-count-down -->
                                <hr>
                                <figure id="course-summary">
                                    <span class="course-summary" id="course-length"><i class="fa fa-calendar-o"></i>7 weeks</span>
                                    <span class="course-summary" id="course-time-amount"><i class="fa fa-folder-o"></i>4-6 hours of work / week</span>
                                    <span class="course-summary" id="course-course-time"><i class="fa fa-clock-o"></i>6:00pm – 8:00pm</span>
                                </figure><!-- /#course-summary -->
                            </section><!-- /#course-header -->
                  


                            <section id="course-brief">
                                <header><h2>Course Info</h2></header>
                             
                            This course addresses the design and engineering of user interfaces. It presents principles and guidelines for design and covers a range of design processes. It presents techniques for testing user interfaces, and considers a variety of user interface styles and interface devices.
                         Students who pass this course should be able to:
Understand principles of usability engineering;
Design a user interface following accepted principles and guidelines;
Evaluate a user interface design, and interpret the results to improve the design.
Integrate user interface design techniques into the general software engineering life cycle.
                         
                            </section><!-- /#course-brief -->

                              <section id="course-brief">
                                <header><h2>Submission</h2></header>
                                
                             <p>   
                             Assignments will be handed out in lectures. You will find all necessary information about assignments and files needed at Assignments course page. Assignments should be submitted electronically. In principle, all assignmnets will be assessed and returned within 2 weeks after the submission dues date.
                               </p>
                            
                            </section><!-- /#course-brief -->
                            <section id="course-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs course-detail-tabs">
                                    <li class="active"><a href="#tab-schedule" data-toggle="tab">Schedule</a></li>
                                    <li><a href="#tab-video" data-toggle="tab">Video</a></li>
                                    <li><a href="#tab-speakers" data-toggle="tab">Speakers</a></li>
                                    <li><a href="#tab-gallery" data-toggle="tab">Gallery</a></li>
                                    <li><a href="#tab-faq" data-toggle="tab">FAQ</a></li>
                                </ul><!-- /.course-detail-tabs -->

                                <!-- Tab panes -->
                                <div class="tab-content course-tab-content">
                                    <div class="tab-pane fade in active" id="tab-schedule">
                                        <section class="course-schedule">
                                            <article class="course-schedule-block">
                                                <header><h4>Week 1:</h4></header>
                                                <ul class="schedule-list">
                                                    <li>
                                                        <h5>Day 1:</h5>
                                                        <p class="description">
                                                         Apply design by Contract to build high integrity code (BE graduate attributes 3(a), 3(c)).
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h5>Day 2:</h5>
                                                        <p class="description">
                                                          Review and enhance requirements and be able to trace requirements throughout the design process (BE graduate attributes 3(f), 3(d)).
                                                        </p>
                                                    </li>
                                                </ul>
                                            </article><!-- /.course-schedule-block -->
                                            <article class="course-schedule-block">
                                                <header><h4>Week 2:</h4></header>
                                                <ul class="schedule-list">
                                                    <li>
                                                        <h5>Day 1:</h5>
                                                        <p class="description">
                                                          Understand relation between testing and verification and manage their relative costs and benefits (BE graduate attributes 3(a), 3(d), 3(f)).
                                                        </p>
                                                    </li>
                                                </ul>
                                            </article><!-- /.course-schedule-block -->
                                            <article class="course-schedule-block">
                                                <header><h4>Week 3:</h4></header>
                                                <ul class="schedule-list">
                                                    <li>
                                                        <h5>08:00 am:</h5>
                                                        <p class="description">
                                                            Write SPARK Ada programs and either prove properties or test the code to A high degree of code coverage.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h5>11:00 am:</h5>
                                                        <p class="description">
                                                          Understand the Object Oriented Model used by Ada.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </article><!-- /.course-schedule-block -->
                                        </section><!-- /#tab-schedule -->
                                    </div>
                                    <div class="tab-pane fade" id="tab-video"><iframe src="http://player.vimeo.com/video/64373696" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                          
                                    <div class="tab-pane fade" id="tab-gallery">
                                        <ul class="gallery-list">
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-01.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-02.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-03.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-04.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-05.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-06.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-07.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-08.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-09.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-10.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-11.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-12.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-13.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-14.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                
                                </div><!-- /Tab panes -->
                            </section><!-- /#course-tabs -->

                           

                            <section id="invited-persons">
                                <header><h2>Invited Persons</h2></header>
                                <div class="author-block">
                                    <a href="staff-detail.php"><figure class="author-picture"><img src="assets/img/student-testimonial.jpg" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="staff-detail.php"><header>Claire Doe</header></a>
                                            <figure>Marketing Specialist</figure>
                                            <p>
                                               You must be a competent programmer and confident in your ability to pick up a new language. Detailed mathematics is not required but you need the ability to think rigorously about abstract ideas including specifications . You must be able to express your understanding of the programs requirements in First Order Logic and you need a good grasp of the the relation between specification and code.
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                                <div class="author-block">
                                    <a href="staff-detail.php"><figure class="author-picture"><img src="assets/img/discussion-author-02.jpg" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="staff-detail.php"><header>Rachel Britain</header></a>
                                            <figure>Data Architect</figure>
                                            <p>
                                              In this course you will learn how to write SPARK Ada programs. This will require you adopt a quite different mindset from that used writing Java or C programs. The construction of the specification may take more code and more effort that coding the solution.
In order to achieve this you should complete all the exercises - even those that are not marked.﻿
                                            </p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                            </section><!-- /#invited-persons -->

                          

                            <section id="map">
                                <header><h2>Place on Map</h2></header>
                                <div class="map-wrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.389928525137!2d-0.11316612883517647!3d51.52440760342934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b48959f07e1%3A0xb6b70e6a76950525!2s5+Phoenix+Pl!5e0!3m2!1ssk!2s!4v1395674632609" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </section><!-- /#map -->

                            <hr>

                            <section id="join-to-course" class="center">
                                <a href="register-sign-in.html" class="btn">Join Course</a>
                            </section><!-- /#join-to-course -->
                        </article><!-- /.course-detail -->
                    </section><!-- /.course-detail -->
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
<script type="text/javascript" src="assets/js/countdown.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>