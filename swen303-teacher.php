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
        <li><a href="courses.php">Course Homepages</a></li>
        <li class="active">SWEN432 Home</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1>SWEN 432 - Advanced Database  </h1></header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2">
                <figure class="course-image">
                    <div class="image-wrapper"><img src="assets/img/course-detail-img.jpg"></div>
                </figure>
                <header><h3><a href="edit-course-info.php">Edit Course Info</a></h3></header>
                <header><h3><a href="edit-lecture-notes.php">Edit Lecture Notes</a></h3></header>
                <header><h3><a href="edit-assignments.php">Edit Assignments</a></h3></header>
                <header><h3><a href="marks-edit.php">Mark Assignments</a></h3></header>
                
            </div><!-- end Course Image -->
            
            <!--MAIN Content-->
            <div class="col-md-10">
                <div id="page-main">
                    <section id="course-detail">
                        <article class="course-detail">
                            <section id="course-header">
                                <header>
                                    <h2 class="course-date">Course Duration: 6 March 2017 - 5 July 2017</h2>
                                    <div class="course-category">Category:<a href="#">Software Engineering</a></div>
                                </header>
                                <hr>
                                <figure id="course-summary">
                                    <span class="course-summary" id="course-length"><i class="fa fa-calendar-o"></i>7 weeks</span>
                                    <span class="course-summary" id="course-time-amount"><i class="fa fa-folder-o"></i>4-6 hours of work / week</span>
                                    <span class="course-summary" id="course-course-time"><i class="fa fa-clock-o"></i>10:00am – 11:00am</span>
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
                             Assignments will be handed out in lectures. You will find all necessary information about assignments and files needed at Assignments course page. Assignments should be submitted electronically. In principle, all assignments will be assessed and returned within 2 weeks after the submission dues date.
                               </p>
                            
                            </section><!-- /#course-brief -->
                            <section id="course-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs course-detail-tabs">
                                    <li class="active"><a href="#tab-schedule" data-toggle="tab">Schedule</a></li>
                                    <li><a href="#tab-video" data-toggle="tab">Video</a></li>
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
                                                        <h5>Day 3:</h5>
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
                                                        <h5>Day 4:</h5>
                                                        <p class="description">
                                                            Write SPARK Ada programs and either prove properties or test the code to A high degree of code coverage.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h5>Day 5:</h5>
                                                        <p class="description">
                                                          Understand the Object Oriented Model used by Ada.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </article><!-- /.course-schedule-block -->
                                        </section><!-- /#tab-schedule -->
                                    </div>
                                    
                                    <div class="tab-pane fade" id="tab-video">
                                        <section class="course-schedule">
                                            <article class="course-schedule-block">
                                                <header><h4>Lecture 1:</h4></header>
                                                <a href="https://www.youtube.com/watch?list=PLy0xM2o6SJY5JXZST_nMrCTvYUyAoKnOy&v=VkKY9KKaFFY">Introduction</a>
                                            </article>
                                            <article class="course-schedule-block">
                                                <header><h4>Lecture 2:</h4></header>
                                                <a href="https://www.youtube.com/watch?list=PLy0xM2o6SJY5JXZST_nMrCTvYUyAoKnOy&v=VkKY9KKaFFY">Usability</a>
                                            </article>
                                            <article class="course-schedule-block">
                                                <header><h4>Lecture 3:</h4></header>
                                                <a href="https://www.youtube.com/watch?list=PLy0xM2o6SJY5JXZST_nMrCTvYUyAoKnOy&v=VkKY9KKaFFY">Guidelines</a>
                                            </article>
                                            <article class="course-schedule-block">
                                                <header><h4>Lecture 4:</h4></header>
                                                <a href="https://www.youtube.com/watch?list=PLy0xM2o6SJY5JXZST_nMrCTvYUyAoKnOy&v=VkKY9KKaFFY">Heuristic Evaluation</a>
                                            </article>
                                        </section><!-- /#tab-schedule -->
                                    </div>
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
                                <header><h2>Lecturers</h2></header>
                                <div class="author-block">
                                    <a href="staff-detail.php"><figure class="author-picture"><img src="assets/img/student-testimonial.jpg" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="staff-detail.php"><header>Claire Doe</header></a>
                                            <figure>Coordinator</figure>
                                            <p>Claire.Doe@vuw.ac.nz 04 4636736</p>
                                            <p>234 Cotton, Kelburn</p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                                <div class="author-block">
                                    <a href="staff-detail.php"><figure class="author-picture"><img src="assets/img/discussion-author-02.jpg" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="staff-detail.php"><header>Rachel Britain</header></a>
                                            <figure>Lecturer</figure>
                                            <p>Rachel.Britain@vuw.ac.nz 04 4636737</p>
                                            <p>235 Cotton, Kelburn</p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
                            </section><!-- /#invited-persons -->
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