<?php
/**
 * Created by PhpStorm.
 * User: ashot
 * Date: 6/2/18
 * Time: 4:49 PM
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <title>Ashot Gharakeshishyan</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ashot,Gharakeshishyan,HTML,CSS,JavaScript,PHP,NodeJS,MySql,ashotgharakeshishyan">
    <meta name="description" content="Portfolio Ashot Gharakeshishyan">
    <meta name="author" content="Ashot Gharakeshishyan">
    <link rel="shortcut icon" href="a.g.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet'
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">

    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>

</head>

<body>
<!-- ******HEADER****** -->
<header class="header">
    <div class="container">
        <img class="profile-image img-responsive pull-left" src="assets/images/profile.png"
             style="height: 200px ;width:200px" alt="Ashot photo"/>
        <div class="profile-content pull-left">
            <h1 class="name">Ashot Gharakeshishyan</h1>
            <h2 class="desc">Web App Developer</h2>
            <ul class="social list-inline">
                <li><a href="https://twitter.com/ashotgharakesh1"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/114320152224905901347"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/in/ashot-gharakeshishyan-9502b9129/"><i
                            class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/Ashot1995"><i class="fa fa-github-alt"></i></a></li>
                <li class="last-item"><a href="https://web.facebook.com/ashot.gharakeshishyan"><i
                            class="fa fa-facebook-square"></i></a></li>
            </ul>
        </div>
        <button class="btn btn-cta-primary pull-right" id="contact"><i class="fa fa-paper-plane"></i> Contact Me
        </button>
    </div>
</header>

<form id="send"
      style="position:absolute;z-index: 15; display:none;margin-top: -4%;flex-direction: column;width: 40%;margin-left: 54%;border: 1px solid rgba(100,200,100,0.2)">
    <img src="close.png" id="close" alt="close" style="height: 20px ;width: 20px ; position: absolute ;    margin-left: 98%;
    margin-top: -2%; ">
    <input type="text" name="name" placeholder="Your Name *" id="name" class="form-control"
           style="border-bottom: 1px solid blue" required>
    <input type="email" name="email" placeholder="Your E-mail Address *" id="mail" class="form-control"
           style="border-bottom: 1px solid blue" required>
    <textarea name="comment" rows="7" placeholder=" Message *" id="content" class="form-control"
              style="border-bottom: 1px solid blue ;max-width: 100%;min-width: 100%;" maxlength="2000"
              required></textarea>
    <input type="submit" id="submit" class="clearfix btn btn-info" value="Send">

</form>


<div class="container sections-wrapper">
    <div class="row">
        <div class="primary col-md-8 col-sm-12 col-xs-12">
            <section class="about section">
                <div class="section-inner">
                    <h2 class="heading">About Me</h2>
                    <div class="content">
                        <p>Hi, My name is Ashot Gharakeshishyan. I believe my strong points are my Creativeness and
                            Punctuality. My #1 goal will always be to meet your needs and deadline. When working on a
                            new project, I like to speak with the client, so that I can have a clear understanding of
                            his/her needs and ...
                            I specialize in HTML, CSS,SASS, JavaScript, Jquery, NodeJs, PHP , MySQL.</p>

                    </div>
                </div>
            </section>

            <section class="latest section">
                <div class="section-inner">
                    <h2 class="heading">Latest Projects</h2>
                    <div class="content">

                        <div class="item featured text-center">
                            <h3 class="title">CV form</h3>
                            <p class="summary"></p>
                            <div class="featured-image">
                                <!--                                <a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/"-->
                                <!--                                   target="_blank">-->
                                <img class="img-responsive project-image"
                                     src="assets/images/projects/project-featured.png" alt="project name"/>
                                <!--                                </a>-->
                                <div class="ribbon">
                                    <div class="text">New</div>
                                </div>
                            </div>

                            <div class="desc text-left">
                                <p>I'm creating a web page through which people will
                                    be able to leave their CV and get the job done</p>
                            </div>

                        </div>
                        <hr class="divider"/>
                        <div class="item row">
                            <a class="col-md-4 col-sm-4 col-xs-12"
                               href="https://github.com/Ashot1995/Cruise"
                               target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-5.png"
                                     alt="project name"/>
                            </a>
                            <div class="desc col-md-8 col-sm-8 col-xs-12">
                                <h3 class="title"><a
                                        href="https://github.com/Ashot1995/Cruise"
                                        target="_blank">Cruise</a></h3>
                                <p>PSD to HTML.
                                    Responsive Template.</p>
                                <p><a class="more-link" href="https://github.com/Ashot1995/Cruise" target="_blank"><i
                                            class="fa fa-external-link"></i> View code</a></p>
                            </div><!--//desc-->
                        </div><!--//item-->

                        <!--yandex translate-->
                        <hr class="divider"/>
                        <div class="item row">
                            <a class="col-md-4 col-sm-4 col-xs-12"
                               href="https://github.com/Ashot1995/Yandex-translate"
                               target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-4.png"
                                     alt="project name"/>
                            </a>
                            <div class="desc col-md-8 col-sm-8 col-xs-12">
                                <h3 class="title"><a
                                        href="https://github.com/Ashot1995/Yandex-translate"
                                        target="_blank">Yandex translate</a></h3>
                                <p>Yandex translate created in languages javascript ,Jquery and Ajax </p>
                                <p><a class="more-link" href="https://github.com/Ashot1995/Yandex-translate"
                                      target="_blank"><i
                                            class="fa fa-external-link"></i> View code</a></p>
                            </div><!--//desc-->
                        </div><!--//item-->

                        <!--chat nodejs-->
                        <hr class="divider"/>
                        <div class="item row">
                            <a class="col-md-4 col-sm-4 col-xs-12"
                               href="https://github.com/Ashot1995/Chat-NodeJS"
                               target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/chat.png"
                                     alt="project name"/>
                            </a>
                            <div class="desc col-md-8 col-sm-8 col-xs-12">
                                <h3 class="title"><a
                                        href="https://github.com/Ashot1995/Chat-NodeJS"
                                        target="_blank">Chat</a></h3>
                                <p>Chat created in Nodejs Socket.IO</p>
                                <p><a class="more-link" href="https://github.com/Ashot1995/Chat-NodeJS" target="_blank"><i
                                            class="fa fa-external-link"></i> View code</a></p>
                            </div><!--//desc-->
                        </div><!--//item-->


                    </div><!--//content-->
                </div><!--//section-inner-->
            </section><!--//section-->

        </div><!--//primary-->
        <div class="secondary col-md-4 col-sm-12 col-xs-12">
            <aside class="info aside section">
                <div class="section-inner">
                    <h2 class="heading sr-only">Basic Information</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>
                                <a href="https://www.google.com/maps/dir/%D0%90%D1%80%D0%B0%D0%BF%D0%B8,+%D0%90%D1%80%D0%BC%D0%B5%D0%BD%D0%B8%D1%8F/%D0%90%D1%80%D0%B0%D0%BF%D0%B8/@40.7832734,43.7343109,12z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x4041fc22f42fa4eb:0xf6b1b36ea1d0f734!2m2!1d43.8045228!2d40.7832947!1m5!1m1!1s0x4041fc22f42fa4eb:0xf6b1b36ea1d0f734!2m2!1d43.8045228!2d40.7832947">Gyumri,Armenia</a>
                            </li>
                            <li><i class="fa fa-phone"></i><span class="sr-only">Phone number:</span>+(374)(98) 01 62 77
                            </li>
                            <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a
                                    href="https://mail.google.com/mail/u/0/#inbox?compose=new">ashotgharakeshishyan@gmail.com</a>
                            </li>
                            <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://ashotgharakeshishyan.ga</a>
                            </li>
                        </ul>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//aside-->

            <aside class="skills aside section">
                <div class="section-inner">
                    <h2 class="heading">Skills</h2>
                    <div class="content">
                        <p class="intro">

                        <div class="skillset">

                            <div class="item">
                                <h3 class="level-title">PHP<span class="level-label" data-toggle="tooltip"
                                                                 data-placement="left" data-animation="true"
                                                                 title="You can use the tooltip to add more info...">90%</span>
                                </h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="91%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="level-title">Mysql<span class="level-label">85%</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="85%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="level-title">Javascript &amp; jQuery<span class="level-label">90%</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="90%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="level-title">NodeJS<span class="level-label">40%</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="40%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="level-title">HTML5, CSS3, SASS<span class="level-label">90%</span>
                                </h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="90%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->


                            <div class="item">
                                <h3 class="level-title">Git<span class="level-label">75%</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="75%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="level-title">Linux<span class="level-label">75%</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="75%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <!--<p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p> -->
                        </div>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->


            <aside class="education aside section">
                <div class="section-inner">
                    <h2 class="heading">Education</h2>
                    <div class="content">
                        <div class="item">
                            <h3 class="title"><i class="fa fa-graduation-cap"></i> Gyumri Information Technologies
                                Center</h3>
                            <h4 class="university">Web Developer<span class="year">(2017-2018)</span></h4>
                        </div><!--//item-->
                        <div class="item">
                            <h3 class="title"><i class="fa fa-graduation-cap"></i> WeDoApps</h3>
                            <h4 class="university">Backend web developer<span class="year">(2017-2018)</span></h4>
                        </div><!--//item-->
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->

            <aside class="languages aside section">
                <div class="section-inner">
                    <h2 class="heading">Languages</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li class="item">
                                <span class="title"><strong>Armenian:</strong></span>
                                <span class="level"> <br class="visible-xs"/><i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i></span>
                            </li><!--//item-->
                            <li class="item">
                                <span class="title"><strong>Russian:</strong></span>
                                <span class="level"> <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i
                                        class="fa fa-star-half"></i></span>
                            </li><!--//item-->
                            <li class="item">
                                <span class="title"><strong>English:</strong></span>
                                <span class="level"> <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star-half"></i></span>
                            </li><!--//item-->
                        </ul>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->

            <aside class="list music aside section">
                <div class="section-inner">
                    <h2 class="heading">Favourite coding music</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-headphones"></i> <a href="https://www.youtube.com/watch?v=1KbauuM9EhY">River
                                    Flows In You</a></li>
                            <li><i class="fa fa-headphones"></i> <a href="https://www.youtube.com/watch?v=AeA3AL4jcIQ">Best
                                    music
                                </a></li>
                            <li><i class="fa fa-headphones"></i> <a href="https://www.youtube.com/watch?v=YcTCIMKeiNQ">Bass
                                    music</a></li>
                            <li><i class="fa fa-headphones"></i> <a href="https://www.youtube.com/watch?v=xdmktWgZPn8">Ash
                                    - Mosaïque</a></li>
                        </ul>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->


        </div><!--//secondary-->
    </div><!--//row-->
</div><!--//masonry-->

<!-- ******FOOTER****** -->
<footer class="footer">
    <div class="container text-center">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
        <small class="copyright"><img src="a.g.png" style="height: 20px;width: 20px" alt="A.G"></i> by <a
                href="http://ashotgharakeshishyan.ga" target="_blank">Ashot Gharakeshishyan</a></small>
    </div><!--//container-->
</footer><!--//footer-->

<!-- Javascript -->
<script>
    $("#contact").on("click", function () {
        $("#send").css("display", "flex")
        $("#close").css('cursor', 'pointer');

        $("#close").click(function () {
            $("#send").css("display", "none")
        })
    })

    $("#submit").on("click", function () {

        var name = $("#name").val();
        var mail = $("#mail").val();
        var description = $("#content").val();
        if (name != "" && mail != "" && description != "") {
            $.ajax({
                url: "assets/sendMail/send.php",
                type: "post",
                // dataType:"JSON",
                data: {
                    'description': description,
                    'mail': mail,
                    'name': name
                },
                success: function () {
                    alert("Your message sent")
                }
            });
        } else {
            $("#name").css("border", "1px solid red");
            $("#mail").css("border", "1px solid red");
            $("#content").css("border", "1px solid red");
        }


    })

</script>
<script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script>
<!-- github calendar plugin -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
<!--<script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>-->
<!-- github activity plugin -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
<!--<script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>-->
<!-- custom js -->
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>

