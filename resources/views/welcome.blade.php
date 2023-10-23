<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- use asset -->
    <link rel="stylesheet" href="{{asset('template/dist/css/main.css')}}">

    <!-- Your page title -->
    <title>Aleph Ministries</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" type="image/png">

</head>

<body class="regular-homepage">

    <!-- =================== SITE HEADER BEGINS ============================= -->

    @include("components.header")
    <!-- =================== SITE HEADER ENDS ============================= -->



    <!-- =================== MAIN SECTION BEGINS ============================= -->

    <main>

        <!-- HERO SECTION STARTS -->
        <section class="hero hero--regular full-width display-flex justify-align-center">

            <div class="hero__content full-width text-center-sm">

                <div class="container">

                    <div class="heading mar-b-sm-2">
                        <span class="section-intro mar-b-sm-2">Jesus is Lord</span>
                        <h1 class="color-off-white">Welcome to Aleph Ministries. <br>We hope you enjoy your visit
                            and
                            worship with us</h1>
                    </div>

                    <div class="hero__cta"><a href="#" class="button button--primary button--fill">Learn more</a></div>

                </div><!-- .container ends -->

            </div><!-- .hero__content ends -->

        </section><!-- .hero ends -->
        <!-- HERO SECTION ENDS -->


        <!-- UPCOMING EVENTS SECTION STARTS -->
        <section class="upcoming-events">

            <div class="upcoming-events__content">

                <div class="row no-gutter">

                    <div class="flex-md-6 flex-lg-3">

                        <div class="upcoming-intro background-secondary">

                            <div class="section-heading">
                                <span class="section-intro">Events</span>
                                <h2>Our upcoming events</h2>
                            </div><!-- .section-heading ends -->

                            <a href="events-layout.html" class="button button--primary button--fill">View all events</a>

                        </div><!-- .upcoming-intro ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3">

                        <div class="card events">

                            <div class="card__body">

                                <div class="label uppercase">Free</div>

                                <div class="event__details mar-t-sm-2 mar-b-sm-2">

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-calendar-line"></i></span>
                                        <span class="text">02/28/2020</span>
                                    </div><!-- .icon-text ends -->

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-time-line"></i></span>
                                        <span class="text">11:45 AM - 12:45PM</span>
                                    </div><!-- .icon-text ends -->

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-map-pin-line"></i></span>
                                        <span class="text">Kawempe Bombo Rd near Opportunity Bank</span>
                                    </div><!-- .icon-text ends -->

                                </div><!-- .event__details ends -->

                                <h3 class="event__tile">Prayer gathering</h3>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="events-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3">

                        <div class="card events">

                            <div class="card__body">

                                <div class="label uppercase">Free</div>

                                <div class="event__details mar-t-sm-2 mar-b-sm-2">

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-calendar-line"></i></span>
                                        <span class="text">04/28/2020</span>
                                    </div><!-- .icon-text ends -->

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-time-line"></i></span>
                                        <span class="text">11:45 AM - 12:45PM</span>
                                    </div><!-- .icon-text ends -->

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-map-pin-line"></i></span>
                                        <span class="text">Kawempe Bombo Rd near Opportunity Bank</span>
                                    </div><!-- .icon-text ends -->

                                </div><!-- .event__details ends -->

                                <h3 class="event__tile">Sunday School</h3>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="events-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3">

                        <div class="card events">

                            <div class="card__body">

                                <div class="label uppercase">Free</div>

                                <div class="event__details mar-t-sm-2 mar-b-sm-2">

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-calendar-line"></i></span>
                                        <span class="text">06/28/2020</span>
                                    </div><!-- .icon-text ends -->

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-time-line"></i></span>
                                        <span class="text">11:45 AM - 12:45PM</span>
                                    </div><!-- .icon-text ends -->

                                    <div class="icon-text">
                                        <span class="icon"><i class="ri-map-pin-line"></i></span>
                                        <span class="text">Kawempe Bombo Rd near Opportunity Bank</span>
                                    </div><!-- .icon-text ends -->

                                </div><!-- .event__details ends -->

                                <h3 class="event__tile">Fund Raising</h3>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="events-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                </div><!-- .row ends -->

            </div><!-- .upcoming-events__content ends -->

        </section><!-- .upcoming-events ends -->
        <!-- UPCOMING EVENTS SECTION ENDS -->


        <!-- WELCOME SECTION STARTS -->
        <section class="welcome text-center-sm default-section-spacing">

            <div class="welcome__content">

                <div class="container">

                    <div class="section-heading">
                        <span class="section-intro">Welcome</span>
                        <h2>A warm welcome from us</h2>
                    </div><!-- .section-heading ends -->

                    <p> We are delighted to extend our warmest greetings to you. Whether you are a first-time visitor or
                        a longtime member of our congregation, we consider you part of our church family.

                        At Aleph Ministries, we are more than just a community of believers; we are a fellowship that
                        values love, faith, and unity. Our doors are always open to those seeking spiritual growth,
                        connection, and a place to call home.

                        As you explore our website, you'll discover the various programs, services, and events that make
                        our church a vibrant and welcoming place. We offer worship services, community outreach,
                        inspiring sermons, and opportunities for personal and collective growth.


                        .</p>

                    <div class="welcome__image">
                        <img src="{{asset('template/aleph_images/tonny_three-removebg-preview.png')}}"
                            alt="Aleph Ministries">
                    </div>

                </div><!-- .container ends -->

            </div><!-- .welcome__content ends -->

        </section><!-- .welcome ends -->
        <!-- WELCOME SECTION ENDS -->


        <!-- RECENT SERMONS SECTION STARTS -->
        <section class="recent-sermon default-section-spacing background-off-white">

            <div class="recent-sermon__content">

                <div class="container">

                    <div class="row mar-b-sm-4">

                        <div class="flex-md-8 flex-lg-9">
                            <div class="section-heading mar-b-sm-0">
                                <span class="section-intro">Sermons</span>
                                <h2>Recent sermons</h2>
                            </div><!-- .section-heading ends -->
                        </div><!-- .flex-* ends -->

                        <div class="flex-md-4 flex-lg-3 text-right-md">
                            <a href="sermons-layout.html" class="button button--primary button--fill">View all
                                sermons</a>
                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                    <div class="row">

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card sermon">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_three.jpeg')}}" alt="Church building"
                                        class="card__image">

                                    <div class="card__details">

                                        <div class="label uppercase"><i class="ri-headphone-line"></i></div>

                                        <div class="avatar-name mar-t-sm-2">
                                            <div class="avatar avatar--small">
                                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                                            </div>
                                            <div class="name">Pastor Mutebi Tonny</div>
                                        </div><!-- .avatar-name -->

                                        <div class="sermon__details mar-t-sm-2">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-calendar-line"></i></span>
                                                <span class="text">02/28/2020</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-eye-line"></i></span>
                                                <span class="text">232</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-time-line"></i></span>
                                                <span class="text">33:45</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .sermon__details ends -->

                                    </div><!-- .card__details ends -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="sermon__tile mar-b-sm-2">The church before vs. church now</h3>
                                    <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Deserunt impedit
                                        cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                        repudiandae! Laborum
                                        reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                        voluptates dolores,
                                        earum sequi...</p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="sermons-single.html" class="button button--primary button--fill">Listen
                                            now</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card sermon">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_five.jpeg')}}"
                                        alt="A man sitting down" class="card__image">

                                    <div class="card__details">

                                        <div class="label uppercase"><i class="ri-file-list-line"></i></div>

                                        <div class="avatar-name mar-t-sm-2">
                                            <div class="avatar avatar--small">
                                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                                            </div>
                                            <div class="name">Pastor Tonny Mutebi</div>
                                        </div><!-- .avatar-name -->

                                        <div class="sermon__details mar-t-sm-2">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-calendar-line"></i></span>
                                                <span class="text">02/28/2020</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-eye-line"></i></span>
                                                <span class="text">232</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-time-line"></i></span>
                                                <span class="text">10:45 of reading</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .sermon__details ends -->

                                    </div><!-- .card__details ends -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="sermon__tile mar-b-sm-2">The suffering &amp; sacrifice of Christ</h3>
                                    <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Deserunt impedit
                                        cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                        repudiandae! Laborum
                                        reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                        voluptates dolores,
                                        earum sequi...</p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="sermons-single.html" class="button button--primary button--fill">Read
                                            more</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-12 flex-lg-4 mar-t-md-2 mar-t-lg-0">

                            <div class="card sermon">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_four.jpeg')}}"
                                        alt="A woman holding Bible" class="card__image">

                                    <div class="card__details">

                                        <div class="label uppercase"><i class="ri-video-line"></i></div>

                                        <div class="avatar-name mar-t-sm-2">
                                            <div class="avatar avatar--small">
                                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                                            </div>
                                            <div class="name">Pastor Tonny Mutebi</div>
                                        </div><!-- .avatar-name -->

                                        <div class="sermon__details mar-t-sm-2">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-calendar-line"></i></span>
                                                <span class="text">02/28/2020</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-eye-line"></i></span>
                                                <span class="text">232</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-time-line"></i></span>
                                                <span class="text">43:15</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .sermon__details ends -->

                                    </div><!-- .card__details -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="sermon__tile mar-b-sm-2">It is important to put kingdom over culture</h3>
                                    <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Deserunt impedit
                                        cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                        repudiandae! Laborum
                                        reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                        voluptates dolores,
                                        earum sequi...</p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="sermons-single.html" class="button button--primary button--fill">Watch
                                            now</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->

            </div><!-- .recent-sermon__content ends -->

        </section><!-- .recent-sermon ends -->
        <!-- RECENT SERMONS SECTION ENDS -->


        <!-- TESTIMONIAL SECTION STARTS -->
        <section class="testimonial default-section-spacing text-center-sm">

            <div class="container">

                <div class="section-heading">
                    <span class="section-intro">Testimonial</span>
                    <h2>It is all smile at Aleph Ministries</h2>
                </div><!-- .section-heading ends -->

                <!-- Carousel using Owl carousel plugin (See the main.js file) -->
                <div id="testimonial-carousel" class="testimonial__carousel owl-carousel">

                    <div class="testimonial__element">

                        <div class="testimonial__picture">

                            <div class="avatar avatar--large">
                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                            </div>

                        </div><!-- .testimonial__picture ends -->

                        <div class="testimonial__text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio temporibus vitae
                                architecto at
                                harum hic autem facilis veniam. Adipisci, quibusdam. Tempore quasi eum incidunt
                                asperiores illo
                                consequatur perspiciatis, laboriosam ipsam, doloribus enim repellendus quo dolorum.</p>
                        </div><!-- .testimonial__ptext ends -->

                        <div class="testimonial__author bold leading">Pastor Mutebi Tonny</div>
                        <!-- .testimonial__author ends -->

                    </div><!-- .testimonial__element ends -->

                    <div class="testimonial__element">

                        <div class="testimonial__picture">

                            <div class="avatar avatar--large">
                                <img src="{{asset('template/aleph_images/tonny_five.jpeg')}}" alt="">
                            </div>

                        </div><!-- .testimonial__picture ends -->

                        <div class="testimonial__text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio temporibus vitae
                                architecto at
                                harum hic autem facilis veniam. Adipisci, quibusdam. Tempore quasi eum incidunt
                                asperiores illo
                                consequatur perspiciatis, laboriosam ipsam, doloribus enim repellendus quo dolorum.</p>
                        </div><!-- .testimonial__ptext ends -->

                        <div class="testimonial__author bold leading">Miss Namusoke Allen</div>
                        <!-- .testimonial__author ends -->

                    </div><!-- .testimonial__element ends -->

                    <div class="testimonial__element">

                        <div class="testimonial__picture">

                            <div class="avatar avatar--large">
                                <img src="{{asset('template/aleph_images/tonny_two.jpeg')}}" alt="">
                            </div>

                        </div><!-- .testimonial__picture ends -->

                        <div class="testimonial__text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio temporibus vitae
                                architecto at
                                harum hic autem facilis veniam. Adipisci, quibusdam. Tempore quasi eum incidunt
                                asperiores illo
                                consequatur perspiciatis, laboriosam ipsam, doloribus enim repellendus quo dolorum.</p>
                        </div><!-- .testimonial__ptext ends -->

                        <div class="testimonial__author bold leading">Sherika H. Hyuas</div>
                        <!-- .testimonial__author ends -->

                    </div><!-- .testimonial__element ends -->

                </div><!-- #testimonial-carousel ends -->

            </div><!-- .container ends -->

        </section><!-- .testimonial ends -->
        <!-- TESTIMONIAL SECTION ENDS -->


        <!-- SEPARATOR STARTS -->
        <div class="separator background-primary"></div>
        <!-- SEPARATOR ENDS -->


        <!-- MINISTRIES SECTION STARTS -->
        <section class="ministries default-section-spacing">

            <div class="ministries__content">

                <div class="container">

                    <div class="row mar-b-sm-4">

                        <div class="flex-md-8 flex-lg-9">
                            <div class="section-heading mar-b-sm-0">
                                <span class="section-intro">Ministries</span>
                                <h2>Some of our ministries</h2>
                            </div><!-- .section-heading ends -->
                        </div><!-- .flex-* ends -->

                        <div class="flex-md-4 flex-lg-3 text-right-md">
                            <a href="ministries-layout.html" class="button button--primary button--fill">View all
                                ministries</a>
                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                    <div class="row">

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card ministry">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_four.jpeg')}}" alt=""
                                        class="card__image">

                                    <div class="card__details">

                                        <div class="ministry__details">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-group-line"></i></span>
                                                <span class="text color-off-white">25 brothers</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .ministry__details ends -->

                                    </div><!-- .card__details ends -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="ministry__tile mar-b-sm-2">Men's ministry</h3>
                                    <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Deserunt impedit
                                        cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                        repudiandae! Laborum
                                        reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                        voluptates dolores,
                                        earum sequi...</p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="ministries-single.html"
                                            class="button button--primary button--fill">Learn more</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card ministry">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_three.jpeg')}}" alt=""
                                        class="card__image">

                                    <div class="card__details">

                                        <div class="ministry__details">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-group-line"></i></span>
                                                <span class="text color-off-white">12 podcasters</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .ministry__details ends -->

                                    </div><!-- .card__details ends -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="ministry__tile mar-b-sm-2">Podcast ministry</h3>
                                    <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Deserunt impedit
                                        cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                        repudiandae! Laborum
                                        reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                        voluptates dolores,
                                        earum sequi...</p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="ministries-single.html"
                                            class="button button--primary button--fill">Learn more</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-12 flex-lg-4 mar-t-md-2 mar-t-lg-0">

                            <div class="card ministry">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_two.jpeg')}}" alt=""
                                        class="card__image">

                                    <div class="card__details">

                                        <div class="ministry__details">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-group-line"></i></span>
                                                <span class="text color-off-white">15 sisters</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .ministry__details ends -->

                                    </div><!-- .card__details ends -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="ministry__tile mar-b-sm-2">Women's choir ministry</h3>
                                    <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Deserunt impedit
                                        cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                        repudiandae! Laborum
                                        reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                        voluptates dolores,
                                        earum sequi...</p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="ministries-single.html"
                                            class="button button--primary button--fill">Learn more</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->

            </div><!-- .ministries__content ends -->

        </section><!-- .ministries ends -->
        <!-- MINISTRIES SECTION ENDS -->


        <!-- PODCAST CTA SECTION STARTS -->
        <section class="podcast-cta pad-t-sm-6 pad-t-lg-8 pad-b-sm-6 pad-b-lg-8">

            <div class="container">

                <div class="row text-center-sm text-left-lg align-items-center">

                    <div class="flex-lg-9">
                        <h2 class="color-off-white">Listen to God's Word on the go from your phone or anywhere with our
                            weekly
                            podcast</h2>
                    </div>
                    <div class="flex-lg-3 text-right-lg">
                        <a href="#" class="button button--outline button--off-white">View our podcast</a>
                    </div>

                </div><!-- .row ends -->

            </div><!-- .container ends -->

        </section><!-- .podcast-cta ends -->
        <!-- PODCAST CTA SECTION ENDS -->


        <!-- CAUSES SECTION STARTS -->
        <section class="causes default-section-spacing">

            <div class="causes__content">

                <div class="container">

                    <div class="row mar-b-sm-4">

                        <div class="flex-md-8 flex-lg-9">
                            <div class="section-heading mar-b-sm-0">
                                <span class="section-intro">Causes</span>
                                <h2>Support our causes</h2>
                            </div><!-- .section-heading ends -->
                        </div><!-- .flex-* ends -->

                        <div class="flex-md-4 flex-lg-3 text-right-md">
                            <a href="causes-layout.html" class="button button--primary button--fill">View more
                                causes</a>
                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                    <div class="row">

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card cause">

                                <div class="card__header no-overlay">

                                    <img src="{{asset('template/aleph_images/children_one.jpeg')}}" alt=""
                                        class="card__image">

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="cause__tile mar-b-sm-2">Education for children</h3>

                                    <div class="progress">

                                        <div class="progress__context mar-b-sm-06">
                                            <span class="current"></span>
                                            <span class="end"></span>
                                        </div><!-- .progress__context ends -->

                                        <div class="progress__bar" data-current="9020" data-end="12000">
                                            <div class="fill"></div>
                                        </div><!-- .progress__bar ends -->

                                    </div><!-- .progress ends -->

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="causes-single.html" class="button button--primary button--fill">Donate
                                            now</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card cause">

                                <div class="card__header no-overlay">

                                    <img src="{{asset('template/aleph_images/food_two.jpeg')}}" alt=""
                                        class="card__image">

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="cause__tile mar-b-sm-2">Church Events &amp; and Functions </h3>

                                    <div class="progress">

                                        <div class="progress__context mar-b-sm-06">
                                            <span class="current"></span>
                                            <span class="end"></span>
                                        </div><!-- .progress__context ends -->

                                        <div class="progress__bar" data-current="52058" data-end="135000">
                                            <div class="fill"></div>
                                        </div><!-- .progress__bar ends -->

                                    </div><!-- .progress ends -->

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="causes-single.html" class="button button--primary button--fill">Donate
                                            now</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-12 flex-lg-4 mar-t-md-2 mar-t-lg-0">

                            <div class="card cause">

                                <div class="card__header no-overlay">

                                    <img src="{{asset('template/aleph_images/food_8.jpeg')}}" alt=""
                                        class="card__image">

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="cause__tile mar-b-sm-2">Shelters for the homeless</h3>

                                    <div class="progress">

                                        <div class="progress__context mar-b-sm-06">
                                            <span class="current"></span>
                                            <span class="end"></span>
                                        </div><!-- .progress__context ends -->

                                        <div class="progress__bar" data-current="32058" data-end="105000">
                                            <div class="fill"></div>
                                        </div><!-- .progress__bar ends -->

                                    </div><!-- .progress ends -->

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="causes-single.html" class="button button--primary button--fill">Donate
                                            now</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->

            </div><!-- .causes__content ends -->

        </section><!-- .causes ends -->
        <!-- CAUSES SECTION ENDS -->


        <!-- BIG SECTION THAT HOLDS BOTH OUR STAFFS AND BLOG SECTION STARTS -->
        <div class="combine-section">

            <section class="staffs default-section-spacing text-center-sm">

                <div class="staffs__content">

                    <div class="container">

                        <div class="section-heading">
                            <span class="section-intro">Staffs</span>
                            <h2>Our leaders</h2>
                        </div><!-- .section-heading ends -->

                        <div class="row">

                            <div class="flex-md-6 flex-lg-4">

                                <div class="card staff">

                                    <div class="card__header no-overlay">

                                        <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt=""
                                            class="card__image">

                                    </div><!-- .card__header ends -->

                                    <div class="card__body">

                                        <h3 class="cause__tile mar-b-sm-2">Pastor Tonny M.</h3>

                                        <p>Senior pastor</p>

                                    </div><!-- .card__body ends -->

                                    <div class="card__footer justify-align-center">

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-facebook-line"></i></a>
                                        </div><!-- .card__share ends -->

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-linkedin-line"></i></a>
                                        </div><!-- .card__share ends -->

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-twitter-line"></i></a>
                                        </div><!-- .card__share ends -->

                                    </div><!-- .card__footer ends -->

                                </div><!-- .card ends -->

                            </div><!-- .flex-* ends -->

                            <div class="flex-md-6 flex-lg-4">

                                <div class="card staff">

                                    <div class="card__header no-overlay">

                                        <img src="{{asset('template/aleph_images/tonny_two.jpeg')}}" alt=""
                                            class="card__image">

                                    </div><!-- .card__header ends -->

                                    <div class="card__body">

                                        <h3 class="cause__tile mar-b-sm-2">Sherika M. Diaz</h3>

                                        <p>Women's choir leader</p>

                                    </div><!-- .card__body ends -->

                                    <div class="card__footer justify-align-center">

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-facebook-line"></i></a>
                                        </div><!-- .card__share ends -->

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-linkedin-line"></i></a>
                                        </div><!-- .card__share ends -->

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-twitter-line"></i></a>
                                        </div><!-- .card__share ends -->

                                    </div><!-- .card__footer ends -->

                                </div><!-- .card ends -->

                            </div><!-- .flex-* ends -->

                            <div class="flex-md-12 flex-lg-4 mar-t-md-2 mar-t-lg-0">

                                <div class="card staff">

                                    <div class="card__header no-overlay">

                                        <img src="{{asset('template/aleph_images/tonny_three.jpeg')}}" alt=""
                                            class="card__image">

                                    </div><!-- .card__header ends -->

                                    <div class="card__body">

                                        <h3 class="cause__tile mar-b-sm-2">Walter L. Barrow</h3>

                                        <p>Pastor assistant</p>

                                    </div><!-- .card__body ends -->

                                    <div class="card__footer justify-align-center">

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-facebook-line"></i></a>
                                        </div><!-- .card__share ends -->

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-linkedin-line"></i></a>
                                        </div><!-- .card__share ends -->

                                        <div class="card__share">
                                            <a href=""
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-twitter-line"></i></a>
                                        </div><!-- .card__share ends -->

                                    </div><!-- .card__footer ends -->

                                </div><!-- .card ends -->

                            </div><!-- .flex-* ends -->

                        </div><!-- .row ends -->

                    </div><!-- .container ends -->

                </div><!-- .staffs__content ends -->

            </section><!-- .staffs ends -->

            <div class="decorative-bg"></div>

            <section class="blog default-section-spacing">

                <div class="blog__content">

                    <div class="container">

                        <div class="row mar-b-sm-4">

                            <div class="flex-md-8 flex-lg-9">
                                <div class="section-heading mar-b-sm-0">
                                    <span class="section-intro color-off-white">Blog</span>
                                    <h2 class="color-off-white">Latest articles</h2>
                                </div><!-- .section-heading ends -->
                            </div><!-- .flex-* ends -->

                            <div class="flex-md-4 flex-lg-3 text-right-md">
                                <a href="blog-layout.html" class="button button--off-white button--outline">View more
                                    articles</a>
                            </div><!-- .flex-* ends -->

                        </div><!-- .row ends -->

                        <div class="row">

                            <div class="flex-md-6 flex-lg-4">

                                <div class="card blog">

                                    <div class="card__header">

                                        <img src="{{asset('template/aleph_images/tonny_three.jpeg')}}" alt=""
                                            class="card__image">

                                        <div class="card__details">

                                            <div class="avatar-name">
                                                <div class="avatar avatar--small">
                                                    <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                                                </div>
                                                <div class="name">Marissa Jackson</div>
                                            </div><!-- .avatar-name -->

                                            <div class="blog__details color-off-white mar-t-sm-2">

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-calendar-line"></i></span>
                                                    <span class="text">02/28/2020</span>
                                                </div><!-- .icon-text ends -->

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-folder-2-line"></i></span>
                                                    <span class="text">Faith &amp; Kingdom</span>
                                                </div><!-- .icon-text ends -->

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-message-line"></i></span>
                                                    <span class="text">22</span>
                                                </div><!-- .icon-text ends -->

                                            </div><!-- .blog__details ends -->

                                        </div><!-- .card__details ends -->

                                    </div><!-- .card__header ends -->

                                    <div class="card__body">

                                        <h3 class="blog__tile mar-b-sm-2">Faith without work is dead</h3>
                                        <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Deserunt impedit
                                            cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed?
                                            Modi, repudiandae!
                                            Laborum
                                            reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti
                                            harum voluptates
                                            dolores,
                                            earum sequi...</p>

                                    </div><!-- .card__body ends -->

                                    <div class="card__footer">

                                        <div class="card__cta">
                                            <a href="blog-single.html" class="button button--primary button--fill">Read
                                                more</a>
                                        </div><!-- .card__cta ends -->

                                        <div class="card__share text-right-sm">
                                            <button
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-share-line"></i></button>
                                        </div><!-- .card__share ends -->

                                    </div><!-- .card__footer ends -->

                                </div><!-- .card ends -->

                            </div><!-- .flex-* ends -->

                            <div class="flex-md-6 flex-lg-4">

                                <div class="card blog">

                                    <div class="card__header">

                                        <img src="{{asset('template/aleph_images/tonny_four.jpeg')}}" alt=""
                                            class="card__image">

                                        <div class="card__details">

                                            <div class="avatar-name">
                                                <div class="avatar avatar--small">
                                                    <img src="{{asset('template/aleph_images/tonny_two.jpeg')}}" alt="">
                                                </div>
                                                <div class="name">Marissa Jackson</div>
                                            </div><!-- .avatar-name -->

                                            <div class="blog__details color-off-white mar-t-sm-2">

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-calendar-line"></i></span>
                                                    <span class="text">02/28/2020</span>
                                                </div><!-- .icon-text ends -->

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-folder-2-line"></i></span>
                                                    <span class="text">Faith &amp; Kingdom</span>
                                                </div><!-- .icon-text ends -->

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-message-line"></i></span>
                                                    <span class="text">22</span>
                                                </div><!-- .icon-text ends -->

                                            </div><!-- .blog__details ends -->

                                        </div><!-- .card__details ends -->

                                    </div><!-- .card__header ends -->

                                    <div class="card__body">

                                        <h3 class="blog__tile mar-b-sm-2">Being a Christian nowadays</h3>
                                        <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Deserunt impedit
                                            cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed?
                                            Modi, repudiandae!
                                            Laborum
                                            reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti
                                            harum voluptates
                                            dolores,
                                            earum sequi...</p>

                                    </div><!-- .card__body ends -->

                                    <div class="card__footer">

                                        <div class="card__cta">
                                            <a href="blog-single.html" class="button button--primary button--fill">Read
                                                more</a>
                                        </div><!-- .card__cta ends -->

                                        <div class="card__share text-right-sm">
                                            <button
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-share-line"></i></button>
                                        </div><!-- .card__share ends -->

                                    </div><!-- .card__footer ends -->

                                </div><!-- .card ends -->

                            </div><!-- .flex-* ends -->

                            <div class="flex-md-12 flex-lg-4 mar-t-md-2 mar-t-lg-0">

                                <div class="card blog">

                                    <div class="card__header">

                                        <img src="{{asset('template/aleph_images/tonny_four.jpeg')}}" alt=""
                                            class="card__image">

                                        <div class="card__details">

                                            <div class="avatar-name">
                                                <div class="avatar avatar--small">
                                                    <img src="{{asset('template/aleph_images/tonny_two.jpeg')}}" alt="">
                                                </div>
                                                <div class="name">Marissa Jackson</div>
                                            </div><!-- .avatar-name -->

                                            <div class="blog__details color-off-white mar-t-sm-2">

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-calendar-line"></i></span>
                                                    <span class="text">02/28/2020</span>
                                                </div><!-- .icon-text ends -->

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-folder-2-line"></i></span>
                                                    <span class="text">Faith &amp; Kingdom</span>
                                                </div><!-- .icon-text ends -->

                                                <div class="icon-text">
                                                    <span class="icon"><i class="ri-message-line"></i></span>
                                                    <span class="text">22</span>
                                                </div><!-- .icon-text ends -->

                                            </div><!-- .blog__details ends -->

                                        </div><!-- .card__details ends -->

                                    </div><!-- .card__header ends -->

                                    <div class="card__body">

                                        <h3 class="blog__tile mar-b-sm-2">How to pray effectively</h3>
                                        <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Deserunt impedit
                                            cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed?
                                            Modi, repudiandae!
                                            Laborum
                                            reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti
                                            harum voluptates
                                            dolores,
                                            earum sequi...</p>

                                    </div><!-- .card__body ends -->

                                    <div class="card__footer">

                                        <div class="card__cta">
                                            <a href="blog-single.html" class="button button--primary button--fill">Read
                                                more</a>
                                        </div><!-- .card__cta ends -->

                                        <div class="card__share text-right-sm">
                                            <button
                                                class="transparent button button--primary button--outline share-button"><i
                                                    class="ri-share-line"></i></button>
                                        </div><!-- .card__share ends -->

                                    </div><!-- .card__footer ends -->

                                </div><!-- .card ends -->

                            </div><!-- .flex-* ends -->

                        </div><!-- .row ends -->

                    </div><!-- .container ends -->

                </div><!-- .blog__content ends -->

            </section><!-- .blog ends -->

        </div><!-- .combine-section ends -->
        <!-- BIG SECTION THAT HOLDS BOTH OUR STAFFS AND BLOG SECTION ENDS -->

    </main><!-- main ends -->

    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- SCROLL BACK TO TOP BEGINS -->
    <div class="scroll-to-top"><i class="ri-arrow-up-line"></i></div>
    <!-- SCROLL BACK TO TOP ENDS -->

    <!-- =================== ALL MODALS ============================= -->

    <div id="site-search" class="modal modal--search modal--overlay text-center-sm">

        <div class="modal__content">
            <h3 class="mar-b-sm-2">Search our site</h3>

            <div class="container">

                <form class="form form--search">

                    <div class="row">

                        <div class="flex-lg-9">
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Search...">
                            </div>
                        </div><!-- .flex-* ends -->

                        <div class="flex-lg-3">
                            <button type="submit" class="button--fill button--primary button-block-lg">Search our
                                site</button>
                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </form><!-- .form ends -->

            </div><!-- .container ends -->

        </div><!-- .modal__content ends -->

    </div><!-- .modal--search ends -->

    <!-- =================== ALL MODALS END ============================= -->


    <!-- =================== SITE FOOTER BEGINS ============================= -->

    @include("components.footer")

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    @include("components.scripts")


</body>

</html>