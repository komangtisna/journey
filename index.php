<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Komang Tisna - ikomangtisna@gmail.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/dist/css/app.css" />
</head>
<body>
    <section class="section-top position-relative">
        <div class="main-header p-4 position-absolute w-100 wow fadeInDown" data-wow-duration="1.5s">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="" class="text-uppercase m-0 main-logo"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> journey</a>
                </div>
                <div class="col-md-9">
                    <ul class="main-menu d-flex flex-row flex-wrap justify-content-end">
                        <li><a href="" class="text-uppercase"><span>home</span></a></li>
                        <li><a href="" class="text-uppercase"><span>about us</span></a></li>
                        <li><a href="" class="text-uppercase"><span>our work</span></a></li>
                        <li><a href="" class="text-uppercase"><span>latest news</span></a></li>
                        <li><a href="" class="text-uppercase active"><span>say hello</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-header height-100vh d-flex align-items-center">
            <div class="container px-7">
                <div class="des-in-bg wow fadeIn" data-wow-duration="5s" data-wow-delay="1s">
                    <h1 class="text-uppercase big-title verylightgray">plan the journey a head</h1>
                    <a href="" class="d-inline-block btn-lightblue text-uppercase mt-5">view projects</a>
                </div>
            </div>
        </div>
        <div class="container position-relative px-7">
            <div class="to-bot-arrow position-absolute" onclick="scroll_to()"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
        </div>
    </section>

    <section class="section-body bg-gray">
       <div id="scroll_to_me" class="container px-7">
            <div class="des-in-bg">
                <h1 class="text-uppercase big-title darkgray wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">make this happen</h1>
            </div>
            <div class="box-des wow fadeInRight" data-wow-duration="2s" data-wow-delay="2s">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum varius ornare. Curabitur dictum metus nisl, id pellentesque odio porttitor sit amet. Aenean sit amet neque sed lectus lacinia ultricies. Proin turpis metus, dictum in nibh vel, placerat congue massa. Nam tristique lobortis justo.</p>

                <p>Maecenas finibus quam placerat, aliquet est at, cursus tellus. Nullam fringilla at justo id mollis. Aenean vitae vestibulum lacus. Nullam sed neque euismod, maximus enim eu, aliquam nunc. Maecenas elementum placerat neque, ac pulvinar odio lobortis a. Vestibulum posuere, ligula vel egestas ornare, justo ante.</p>
                
                <p>Integer in dui ornare, condimentum ante sed, viverra urna. Morbi a nisl enim. Cras vulputate erat eget ante rhoncus, non vestibulum libero ornare. Donec sed leo sed leo fringilla auctor. Nam semper vitae risus in molestie..</p>
            </div>
        </div>
        <div class="position-relative section-carousel wow fadeInUp" data-wow-duration="3s" data-wow-delay="2s">
            <div class="container box-carousel position-absolute">
                <div class="bg-carousel mx-auto"></div>
            </div>
            <div class="carousel-slider">
                <?php
                for ($i=1; $i <= 9 ; $i++) { 
                    ?>
                    <div class="item">
                        <img src="assets/dist/images/slide<?php echo $i; ?>.jpg" alt="Komang Tisna - Test Frontend" class="img-fluid">
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="pt-5"></div>
        <div class="big-box bluelight wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
           <div class="container px-7">
                <div class="socmed-content">
                    <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    <div class="des">
                        <p>Yes. It's very true. We're going back to using MacPaint as of today. Don't try and stop us!</p>
                        <a href="" target="_blank" class="btn-follow text-uppercase d-inline-block wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">follow us</a>
                    </div>
                </div>
           </div>
        </div>
        <div class="section-blog wow fadeInUp" data-wow-duration="3s" data-wow-delay="1.5s">
            <div class="container px-7">
                <div class="row mx-min8">
                    <?php
                    for ($i=1; $i <= 3 ; $i++) { 
                        if ($i == 1) {
                            $date = "29th October 2017";
                            $title = "Lorem ipsum dolor sit amet consectetur adipiscing elit auctor";
                        } elseif ($i == 2) {
                            $date = "21st October 2017";
                            $title = " Vestibulum posuere ligula vel egestas ornare consectetur fringilla";
                        } else {
                            $date = "18th October 2017";
                            $title = "Donec sed leo sed leo fringilla auctor nam vestibulum semper";
                        }
                        ?>
                        <div class="col-md-4 px-8px">
                            <div class="overflow-hidden">
                                <a href="" class="d-block position-relative">
                                    <img src="assets/dist/images/blog<?php echo $i;?>.jpeg" alt="" class="img-fluid">
                                    <div class="overlay position-absolute"></div>
                                </a>
                            </div>
                            <p class="text-center small-font-bold"><?php echo $date; ?></p>
                            <h2 class="head-title text-center"><a href="" class="d-block"><?php echo $title; ?></a></h2>
                            <p class="des text-center">Maecenas finibus quam placerat, aliquet est at, cursus tellus. Nullam fringilla at justo id mollis. Aenean vitae vestibulum lacus. Nullam sed neque euismod, maximus enim eu, aliquam nunc.</p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container px-7 wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
            <div class="top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="overview">
                            <a href="" class="text-uppercase m-0 main-logo"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> journey</a>
                            <p class="mt-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum varius ornare. Curabitur dictum metus nisl, id pellentesque odio porttitor sit amet. Aenean sit amet neque sed lectus lacinia ultricies.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title text-uppercase mb-0">navigate</h3>
                                    <ul class="mt-4">
                                        <li><a href="">About</a></li>
                                        <li><a href="">Blog</a></li>
                                        <li><a href="">Term of Use</a></li>
                                        <li><a href="">FAQ</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="title text-uppercase  mb-0">follow us</h3>
                                    <ul class="mt-4">
                                        <li><a href="">Facebook</a></li>
                                        <li><a href="">Twitter</a></li>
                                        <li><a href="">Instagram</a></li>
                                        <li><a href="">Youtube</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright overview mb-0">Copyright &copy; <?php echo date('Y'); ?> The Company. All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="position-relative">
                                <input type="email" class="form-control newsletter" placeholder="Enter your email address">
                                <button type="submit" class="icon-input position-absolute d-flex justify-content-end">
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/dist/js/app.js"></script>
</body>
</html>