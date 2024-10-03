<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../user-page/user.css">
    <link rel="stylesheet" href="../charm-menu/charm-menu.css">
    <link rel="stylesheet" href="../css-files/Ico-Moon/Charm-Menu-Icons.css">
    <link rel="stylesheet" href="../fontawesome/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <title>infinite-info</title>
</head>


<header>
    <div class="nav-card">
        <nav class="nav1">
            <button class="user-nav" id="trigger-btn">Login</button>

            <div class="search-nav">
                <span class="search-box">
                    <i class="fa fa-search"></i>
                    <input type="text" class="search-text-box" id="search-text-box"
                        placeholder="Search What You Exactly Want....">
                    <button class="go-btn" type="submit">GO</button>
                </span>
            </div>

            <div class="logo-area">
                <img src="../css-files/logo/logo.png" alt="infinite-info" class="logo">
                <span class="logo-text-box">
                    <h1>infinite<br>info</h1>
                </span>
            </div>

            <button class="menu-btn1">
                <i class="fa fa-th-large"></i>
                <h1>Menu</h1>
            </button>
            <button class="night-mode-btn">
                <i class="fas fa-adjust"></i>
            </button>

        </nav>

        <nav class="nav2">
            <div class="logo-area-2">
                <img src="../css-files/logo/logo.png" alt="infinite-info" class="logo-2">
                <span class="logo-text-box-2">
                    <h1>infinite<br>info</h1>
                </span>
            </div>
            <div class="navlist">
                <ul class="menu">
                    <li class="main-menu"><a href="">Home</a></li>
                    <li class="main-menu"><a href="">Explore</a><i class="fas fa-chevron-down" id="explore-chev"></i>
                    </li>
                    <li class="main-menu"><a href="">Services</a><i class="fas fa-chevron-down" id="service-chev"></i>
                    </li>
                    <li class="main-menu"><a href="">Blog</a></li>
                    <li class="main-menu"><a href="">Help</a><i class="fas fa-chevron-down" id="help-chev"></i>
                    </li>
                    <li class="main-menu"><a href="">About</a></li>
                </ul>
            </div>
            <button class="menu-btn2"><i class="fa fa-th-large"></i></button>
            <button class="more-option" id="charm-trigger"><i class="fas fa-ellipsis-h"></i></button>
        </nav>
    </div>
</header>

<body>

    <div id="preloader"></div>

    <section class="content-box1">
        <div class="tagline">

                <video src="../css-files/Video-Clips/sunset.mp4" type="video/mp4" loop autoplay muted
                    class="tagline-video"></video>

            <div class="caption-box">

                <div class="caption-title">
                    <span class="web-headline">
                        <h1><span class="white-text">Let's Think</span><br>

                            Just Beyond The

                            <span class="black-text">Imagination......</span>
                        </h1>

                    </span>
                </div>

                <div class="headline-detail">
                    <p>Daydreams are fertile ground for the imagination to soar. As you sit
                        absorbed in a problem, notice when you get lost in a day dream. What were you just thinking
                        of ?
                        Your unconscious is a rich source of images, ideas and experiences that lead to new
                        connections,
                        and fresh thinking.</p>
                </div>

                <div class="btn-div">
                    <button class="more-btn"><a href="../landing-pages/landing-page.php" class="more-links">Here We Go <i
                                class="fas fa-chevron-right"></i></a></button>
                </div>
            </div>

            <div class="utility-wrapper">

                <div class="utility-box">
                    <div class="utility" id="info-utility"><i class="fas fa-info utility-icons"></i></div>
                    <div class="utility" id="sales-utility"><i class="fas fa-shopping-cart utility-icons"></i></div>
                    <div class="utility" id="services-utility"><i class="fas fa-user-cog utility-icons"></i></div>
                    <div class="utility" id="inkspaces-utility"><i class="fas fa-blog utility-icons"></i></div>
                </div>

                <div class="utility-text">
                    <ul class="utility-text-ul">
                        <li class="utility-text-li" id="infos-li">Infos</li>
                        <li class="utility-text-li">&#124;</li>
                        <li class="utility-text-li" id="sales-li">Sales</li>
                        <li class="utility-text-li">&#124;</li>
                        <li class="utility-text-li" id="services-li">Services</li>
                        <li class="utility-text-li">&#124;</li>
                        <li class="utility-text-li" id="inkspaces-li">Inkspaces</li>
                    </ul>
                </div>

            </div>

        </div>
        </div>




    </section>

    <section class="content-box2">

        <div class="article-img-box">
            <img src="../css-files/Universal-Images/Creative-Person.jpg" alt="">
        </div>

        <div class="article-clipbet-box">

            <img src="../css-files/Universal-Images/Clibet-Round-Girl.jpg" alt="" class="clipbet">
            <img src="../css-files/Universal-Images/Video-Play-Icon.png" alt="" class="play-btn"
                onclick="playVideo('../css-files/Video-Clips/Round-Girl.mp4')">

        </div>

        <div class="video-player">
            <video src="" type="video/mp4" controls autoplay id="my-video"></video>
        </div>

        <div class="article-text-box">

            <div class="article-title">
                <h1> <i class="fas fa-quote-left"></i> A place made just for you <br> show the power of your
                    subconscious mind <i class="fas fa-quote-right"></i> </h1>
            </div>

            <div class="article-caption">
                <p>Matching what your brain predicts to what actually happens gives you a jump start on how to react.
                    It’s also a lot less efficient at remembering connections between ideas or concepts. These are both
                    good things when it comes to creative work, since this kind of work requires us to make new
                    connections, be open to new ideas and think in new ways. We provide a majestic platform where you
                    can
                    share your ideas and get to boost your creativity.</p>
            </div>

        </div>

    </section>


    <section class="content-box3">

        <div class="article-text-box2">
            <div class="article-title-2">
                <h1>Getting every <span>information</span> right at your fingertips
                    !!! It's Time to know the world better</h1>
            </div>
            <div class="article-caption-2">
                <p>Technologies can be powerful tools for neural development but they're only tools. Like screwdrivers
                    or space shuttles, high-tech hardware and software are most useful when used for clearly defined
                    purposes. Knowledge is like glue that sticks information as well as learning together. By keeping
                    this in mind, this site had been designed to get interaction with a millions of information and
                    facts which can be very helpful in our daily lifestyle.</p>
            </div>
        </div>

        <div class="article-img2-holder">

            <div class="article-ques-mark">
                <i class="fas fa-question"></i>
            </div>

            <div class="article-img-box-2">

                <div class="collage" id="collage-block-1">
                    <img src="../css-files/Universal-Images/world.jpg" alt="" class="collage-img" id="coll-img1">
                </div>

                <div class="collage" id="collage-block-2">
                    <img src="../css-files/Universal-Images/Beauty.jpg" alt="" class="collage-img" id="coll-img2">
                </div>

                <div class="collage" id="collage-block-3">
                    <img src="../css-files/Universal-Images/Food.jpg" alt="" class="collage-img" id="coll-img3">
                </div>

                <div class="collage" id="collage-block-4">
                    <img src="../css-files/Universal-Images/Lifestyle.jpg" alt="" class="collage-img" id="coll-img4">
                </div>

            </div>

        </div>

    </section>

    <section class="content-box4">

        <div class="article-img-box-3">
            <img src="../css-files/Universal-Images/Services.gif" alt="">
        </div>

        <div class="article-text-box3">

            <div class="article-title-3">
                <h1>Services that never let you stop</h1>
                <p>Enjoy the Seamless Experience in a single click</p>
            </div>

            <div class="article-caption-3">
                <p>Our first priority is to serve our services to most valuable customers.
                    No need to worry about the perfect timings and a pleasant attitude. Because we care for your
                    priceless hours, From the stack of knowledgeable and resourceful resources, we also provide each and
                    every details of the services that you opt. We are consistently looking forward a step further to
                    exceed our services rather than just meet your expectations.</p>

                <ul>
                    <li><i class="fas fa-star service-icons"></i>Picking Customer's Top Preferences</li>
                    <li><i class="fas fa-clock service-icons"></i>Solid Procedures within a limited time frame</li>
                    <li><i class="fas fa-chart-line service-icons"></i>Performance Analysis to improve us Better</li>
                </ul>
            </div>

        </div>

    </section>


    <section class="content-box5">

        <div class="article-text-box4">

            <div class="article-title-4">
                <h1>Now shop what you love from the various leading stores</h1>
            </div>
            <div class="article-caption-4">
                <p>Everyone wants to get a change in their daily lifestyle and nothing could be better than shopping
                    that makes these things possible. Having those needs met allows us to reach goals and have unique
                    experiences, which is in turn another kind of satisfaction. Sometimes going to the supermarkets or
                    stores can be too frustrating especially if there is any sale or less products in stocks. Infrequent
                    Weather can also act as a weed among the roses whenever you are ready to shop. Now, you don't need
                    to go somewhere when there is a store at your home. Yes, we give you the same shopping experience
                    and that too at great and reasonable prices. Because we understand your needs.</p>
            </div>

        </div>

        <div class="article-img-box-4">
            <img src="../css-files/Universal-Images/Shopping-Girl.png" alt="">
        </div>

    </section>

    <section class="content-box6">
        <div class="article-img-box-5">
            <img src="../css-files/Universal-Images/Sell-Products.png" alt="">
        </div>

        <div class="article-text-box5">

            <div class="article-title-5">
                <h1>Sell anything at the best value for money - old, refurbished & brand new,<br><span>" ab sab bikega
                        wo bhi uchit mulyon pe "</span></h1>
            </div>
            <div class="article-caption-5">
                <p>Build, Run, and Grow a better online business that’s up and running in less time, with less cost.
                    Sell your old belongings or newer ones at the best price which not only helps to grow your business
                    but also make it easy to learn the right strategies of different sellers by comparing their rates
                    and discounts. We assure you, our effort is to make your business much more better. Be with us &
                    Grow more.....unless you reach at the Top.</p>
            </div>

        </div>

    </section>

    <div class="footer">

        <div class="footer-head">
            <p> <span>&copy;</span> Copyright 2020 - 2021 -infinite info. All Rights Reserved.
            </p>
        </div>

        <div class="footer-title">
            <p>infinite info is a public information management website that provides genuine contents to the users as
                subjected to it niether be taken from some other third party site. Any disputes comes under the
                juridiction of Consumer Rights Act & Forum Court <br> Made with the <i class="fas fa-heart"></i> of
                India</p>
        </div>

    </div>


    <!-- Code For User Login page -->

    <div class="modal-wrapper">
        <div class="modal-container">
            <button class="close-btn">&times;</button>

            <div class="form">
                <div class="back-panel">
                    <div class="back-panel-left">
                        <h1>Don't have an account ??</h1>
                        <p>Create it now to dive into the depth of infos and enjoying valuable services !!!</p>
                        <button class="form-btn" id="show-signup-form-btn">Sign up</button>
                    </div>
                    <div class="back-panel-right">
                        <h1>Are you already with us ??</h1>
                        <p>Don't be so late, Sign in to keep getting benefits !!!</p>
                        <button class="form-btn" id="show-signin-form-btn">Sign in</button>
                    </div>
                </div>

                <div class="front-panel">
                    <div class="sign-in-panel">
                        <div class="sign-in-title">
                            Sign In
                        </div>

                        <div class="social-container">
                            <img src="../css-files/Universal-Images/Login-Icons/Google-icon.png" alt="Google"
                                class="social-img">
                            <img src="../css-files/Universal-Images/Login-Icons/Fb-Icon.png" alt="Facebook"
                                class="social-img">
                            <img src="../css-files/Universal-Images/Login-Icons/Insta-Icon.png" alt="Instagram"
                                class="social-img">
                            <img src="../css-files/Universal-Images/Login-Icons/Linkedin-Icon.png" alt="Linkedin"
                                class="social-img">
                        </div>

                        <span class="user-alert">or use your account</span>

                        <div class="sign-in-form-element input-container">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" placeholder="Email" class="input-box">
                        </div>

                        <div class="sign-in-form-element input-container">
                            <i class="fas fa-key input-icon"></i>
                            <input type="password" placeholder="Password" class="input-box">
                        </div>

                        <div class="sign-in-form-element">
                            <button class="sign-in-btn">Sign In</button>
                        </div>

                        <div class="sign-in-form-element">
                            <a href="#" class="forgot-link">Forgot your password ??</a>
                        </div>
                    </div>

                    <div class="sign-up-panel">
                        <div class="signup-title">
                            Sign Up
                        </div>

                        <div class="social-container">
                            <img src="../css-files/Universal-Images/Login-Icons/Google-Icon.png" alt="Google"
                                class="social-img">
                            <img src="../css-files/Universal-Images/Login-Icons/Fb-Icon.png" alt="Facebook"
                                class="social-img">
                            <img src="../css-files/Universal-Images/Login-Icons/Insta-Icon.png" alt="Instagram"
                                class="social-img">
                            <img src="../css-files/Universal-Images/Login-Icons/Linkedin-Icon.png" alt="Linkedin"
                                class="social-img">
                        </div>

                        <span class="signup-user-alert">or create a new one</span>

                        <form action="../user-page/handleSignup.php" method="post">
                            <div class="input-container signup-form-element">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" placeholder="Full Name" class="input-box" id="fullname"
                                    name="fullname">
                            </div>

                            <div class="input-container signup-form-element">
                                <i class="fas fa-tag input-icon"></i>
                                <input type="text" placeholder="Username" class="input-box" id="username"
                                    name="username">
                            </div>
                            <div class="input-container signup-form-element">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" placeholder="Email" class="input-box" id="signup_email"
                                    name="signup_email">
                            </div>

                            <div class="input-container signup-form-element">
                                <i class="fas fa-phone-alt input-icon"></i>
                                <input type="number" placeholder="Phone Number" class="input-box" id="phoneNo"
                                    name="phoneNo">
                            </div>

                            <div class="input-container signup-form-element">
                                <i class="fas fa-key input-icon"></i>
                                <input type="password" placeholder="Password" class="input-box" id="signup_password"
                                    name="signup_password">
                            </div>

                            <div class="input-container signup-form-element">
                                <i class="fas fa-check input-icon"></i>
                                <input type="text" placeholder="Confirm Password" class="input-box"
                                    id="signup_cnfPassword" name="signup_cnfPassword">
                            </div>

                            <div class="input-container signup-form-element t-and-c-container">
                                <input type="checkbox" id="t-and-c" value="tc_true">
                                <label for="t-and-c" class="t-and-c-label">I accept the <a href="#">Terms of Use</a> &
                                    <a href="#">Privacy Policy</a>
                                </label>
                            </div>

                            <div class="signup-form-element">
                                <button class="create-account-btn">Create Account</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End of Code for User Login page -->



    <!-- Code For Charm-Menu -->
    <div class="outlined-box">
        <ul>
            <li>
                <span class="icon-Chat-Bot list-icon-decor"></span>
                <p id="virtual-menu">Virtual Assistant</p>
            </li>
            <li id="lang-mod-btn">
                <span class="icon-Language-Icon list-icon-decor"></span>
                <p id="lang-menu">Language</p>
            </li>
            <li id="utility-mod-btn">
                <span class="icon-Utility list-icon-decor"></span>
                <p id="util-menu">Utilities</p>
            </li>
            <li id="country-mod-btn">
                <span class="icon-World-Icon list-icon-decor"></span>
                <p id="count-menu">Country</p>
            </li>
            <li>
                <span class="icon-Feedback-Icon list-icon-decor"></span>
                <p id="feed-menu">Feedback</p>
            </li>
            <li>
                <span class="icon-Miscellanous list-icon-decor"></span>
                <p id="misc-menu">Miscellaneous</p>
            </li>
        </ul>
    </div>

    <div class="lang-container">
        <ul class="lang-list">

            <li class="lang-options" id="eng-opt">
                <span class="icon-English-Font lang-icon-decor"></span>
                <p>English</p>
            </li>
            <li class="lang-options" id="frn-opt">
                <span class="icon-French-Font lang-icon-decor"></span>
                <p>French</p>
            </li>
            <li class="lang-options" id="ger-opt">
                <span class="icon-German-Font lang-icon-decor"></span>
                <p>German</p>
            </li>
            <li class="lang-options" id="hin-opt">
                <span class="icon-Hindi-Font lang-icon-decor"></span>
                <p>Hindi</p>
            </li>
            <li class="lang-options" id="jpn-opt">
                <span class="icon-Japanese-Font lang-icon-decor"></span>
                <p>Japanese</p>
            </li>
            <li class="lang-options" id="tml-opt">
                <span class="icon-Tamil-Font lang-icon-decor"></span>
                <p>Tamil</p>
            </li>

        </ul>
    </div>


    <div class="charm-mod-overlay" id="util-mod-overlay">

        <div class="util-mod" id="util-mod">
            <div class="util-header">
                <span class="util-title">
                    <h1>Utilities</h1>
                </span>
                <button class="charm-mod-cls-btn cls-OT-1" id="util-mod-cls-btn">&times;</button>
            </div>

            <a href="#1" class="util-link">
                <div class="util-box">
                    <div class="util-icon" style="--i:#4eb7ff">
                        <span class="icon-Chat-Bot util-icon-decor"></span>
                    </div>
                    <div class="util-content">
                        <h2>PDF Converter</h2>
                    </div>
                </div>
            </a>

            <a href="#2" class="util-link">
                <div class="util-box">
                    <div class="util-icon" style="--i:#fd6494">
                        <span class="icon-Language-Icon util-icon-decor"></span>
                    </div>
                    <div class="util-content">
                        <h2>Design</h2>
                    </div>
                </div>
            </a>

            <a href="#3" class="util-link">
                <div class="util-box">
                    <div class="util-icon" style="--i:#43f390">
                        <span class="icon-Utility util-icon-decor"></span>
                    </div>
                    <div class="util-content">
                        <h2>Design</h2>
                    </div>
                </div>
            </a>

            <a href="#4" class="util-link">
                <div class="util-box">
                    <div class="util-icon" style="--i:#ffb508">
                        <span class="icon-World-Icon util-icon-decor"></span>
                    </div>
                    <div class="util-content">
                        <h2>Design</h2>
                    </div>
                </div>
            </a>

            <a href="#5" class="util-link">
                <div class="util-box">
                    <div class="util-icon" style="--i:#37ba82">
                        <span class="icon-Feedback-Icon util-icon-decor"></span>
                    </div>
                    <div class="util-content">
                        <h2>Design</h2>
                    </div>
                </div>
            </a>

            <a href="#6" class="util-link">
                <div class="util-box">
                    <div class="util-icon" style="--i:#cd57ff">
                        <span class="icon-Miscellanous util-icon-decor"></span>
                    </div>
                    <div class="util-content">
                        <h2>Design</h2>
                    </div>
                </div>
            </a>

        </div>

    </div>




    <div class="charm-mod" id="country-mod">

        <div class="charm-mod-header">

            <div class="charm-mod-titile">
                <p>List of Countries</p>
            </div>
            <div class="mod-search-bar">
                <input type="text" class="mod-text-box" id="mod-text-box" placeholder="Search Your Country">
                <button class="mod-search-btn">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <button class="charm-mod-cls-btn" id="count-mod-cls-btn">&times;</button>

        </div>

        <div class="charm-mod-body">

            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-Afghan"></span>
                <span class="cont-name">Afghanistan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-alban"></span>
                <span class="cont-name">Albania</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-alger"></span>
                <span class="cont-name">Algeria</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-andor"></span>
                <span class="cont-name">Andorra</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-angol"></span>
                <span class="cont-name">Angola</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-antig"></span>
                <span class="cont-name">Antigua and Barbuda</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-argen"></span>
                <span class="cont-name">Argentina</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-armen"></span>
                <span class="cont-name">Armenia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-aus"></span>
                <span class="cont-name">Australia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-astri"></span>
                <span class="cont-name">Austria</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-azer"></span>
                <span class="cont-name">Azerbaijan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-baham"></span>
                <span class="cont-name">Bahamas</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bahr"></span>
                <span class="cont-name">Bahrain</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bangal"></span>
                <span class="cont-name">Bangladesh</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-barba"></span>
                <span class="cont-name">Barbados</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bela"></span>
                <span class="cont-name">Belarus</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-belgi"></span>
                <span class="cont-name">Belgium</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-beli"></span>
                <span class="cont-name">Belize</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ben"></span>
                <span class="cont-name">Benin</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bhu"></span>
                <span class="cont-name">Bhutan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bolv"></span>
                <span class="cont-name">Bolivia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bos"></span>
                <span class="cont-name">Bosnia and Herzegovina</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bots"></span>
                <span class="cont-name">Botswana</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-braz"></span>
                <span class="cont-name">Brazil</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-brun"></span>
                <span class="cont-name">Brunei</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-bulg"></span>
                <span class="cont-name">Bulgaria</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-burk"></span>
                <span class="cont-name">Burkina Faso</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-burk"></span>
                <span class="cont-name">Burundi</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-cote-di"></span>
                <span class="cont-name">Côte d'Ivoire</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-cabo"></span>
                <span class="cont-name">Cabo Verde</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-cambo"></span>
                <span class="cont-name">Cambodia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-camoo"></span>
                <span class="cont-name">Cameroon</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-cand"></span>
                <span class="cont-name">Canada</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-cen-af"></span>
                <span class="cont-name">Central African Republic</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-chad"></span>
                <span class="cont-name">Chad</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-chil"></span>
                <span class="cont-name">Chile</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-chin"></span>
                <span class="cont-name">China</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-col"></span>
                <span class="cont-name">Colombia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-como"></span>
                <span class="cont-name">Comoros</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-congo"></span>
                <span class="cont-name">Congo (Congo-Brazzaville)</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ct-rica"></span>
                <span class="cont-name">Costa Rica</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-crot"></span>
                <span class="cont-name">Croatia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-cuba"></span>
                <span class="cont-name">Cuba</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-cyp"></span>
                <span class="cont-name">Cyprus</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-czec"></span>
                <span class="cont-name">Czechia (Czech Republic)</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-demo-rcongo"></span>
                <span class="cont-name">Democratic Republic of the Congo</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-den"></span>
                <span class="cont-name">Denmark</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-dji"></span>
                <span class="cont-name">Djibouti</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-domin"></span>
                <span class="cont-name">Dominica</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-domin-r"></span>
                <span class="cont-name">Dominican Republic</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ecu"></span>
                <span class="cont-name">Ecuador</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-egy"></span>
                <span class="cont-name">Egypt</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-el-sal"></span>
                <span class="cont-name">El Salvador</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-eq-gui"></span>
                <span class="cont-name">Equatorial Guinea</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-erit"></span>
                <span class="cont-name">Eritrea</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-esto"></span>
                <span class="cont-name">Estonia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-eswa"></span>
                <span class="cont-name">Eswatini (fmr. "Swaziland")</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ethi"></span>
                <span class="cont-name">Ethiopia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-fiji"></span>
                <span class="cont-name">Fiji</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-fin"></span>
                <span class="cont-name">Finland</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-frnc"></span>
                <span class="cont-name">France</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-gbn"></span>
                <span class="cont-name">Gabon</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-gmbi"></span>
                <span class="cont-name">Gambia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-geor"></span>
                <span class="cont-name">Georgia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-germ"></span>
                <span class="cont-name">Germany</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ghna"></span>
                <span class="cont-name">Ghana</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-gree"></span>
                <span class="cont-name">Greece</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-grnd"></span>
                <span class="cont-name">Grenada</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-gtmla"></span>
                <span class="cont-name">Guatemala</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-guin"></span>
                <span class="cont-name">Guinea</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-guin-biss"></span>
                <span class="cont-name">Guinea-Bissau</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-guy"></span>
                <span class="cont-name">Guyana</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-haiti"></span>
                <span class="cont-name">Haiti</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-v-city"></span>
                <span class="cont-name">Holy See (Vatican City)</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-hond"></span>
                <span class="cont-name">Honduras</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-hung"></span>
                <span class="cont-name">Hungary</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ice"></span>
                <span class="cont-name">Iceland</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ind"></span>
                <span class="cont-name">India</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-indo"></span>
                <span class="cont-name">Indonesia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-iran"></span>
                <span class="cont-name">Iran</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-iraq"></span>
                <span class="cont-name">Iraq</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ire"></span>
                <span class="cont-name">Ireland</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-isl"></span>
                <span class="cont-name">Israel</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-itly"></span>
                <span class="cont-name">Italy</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-jmca"></span>
                <span class="cont-name">Jamaica</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-jpn"></span>
                <span class="cont-name">Japan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-jrdn"></span>
                <span class="cont-name">Jordan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-kaz"></span>
                <span class="cont-name">Kazakhstan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ken"></span>
                <span class="cont-name">Kenya</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-kiri"></span>
                <span class="cont-name">Kiribati</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-kwt"></span>
                <span class="cont-name">Kuwait</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-krg"></span>
                <span class="cont-name">Kyrgyzstan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-lao"></span>
                <span class="cont-name">Laos</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ltvi"></span>
                <span class="cont-name">Latvia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-lebn"></span>
                <span class="cont-name">Lebanon</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-liber"></span>
                <span class="cont-name">Liberia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-lib"></span>
                <span class="cont-name">Libya</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-leso"></span>
                <span class="cont-name">Lesotho</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-lstn"></span>
                <span class="cont-name">Liechtenstein</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ltna"></span>
                <span class="cont-name">Lithuania</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-lxmb"></span>
                <span class="cont-name">Luxembourg</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mada"></span>
                <span class="cont-name">Madagascar</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mlwi"></span>
                <span class="cont-name">Malawi</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mlys"></span>
                <span class="cont-name">Malaysia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mald"></span>
                <span class="cont-name">Maldives</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-malt"></span>
                <span class="cont-name">Malta</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mali"></span>
                <span class="cont-name">Mali</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mars"></span>
                <span class="cont-name">Marshall Islands</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mtnia"></span>
                <span class="cont-name">Mauritania</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mauri"></span>
                <span class="cont-name">Mauritius</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mexi"></span>
                <span class="cont-name">Mexico</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mcsia"></span>
                <span class="cont-name">Micronesia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mold"></span>
                <span class="cont-name">Moldova</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mona"></span>
                <span class="cont-name">Monaco</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mongo"></span>
                <span class="cont-name">Mongolia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-monte"></span>
                <span class="cont-name">Montenegro</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-moroc"></span>
                <span class="cont-name">Morocco</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-mozam"></span>
                <span class="cont-name">Mozambique</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-myan"></span>
                <span class="cont-name">Myanmar</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-namb"></span>
                <span class="cont-name">Namibia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-naur"></span>
                <span class="cont-name">Nauru</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-npl"></span>
                <span class="cont-name">Nepal</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-nland"></span>
                <span class="cont-name">Netherlands</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-newzi"></span>
                <span class="cont-name">New Zealand</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-nicar"></span>
                <span class="cont-name">Nicaragua</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-niger"></span>
                <span class="cont-name">Niger</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-nigeri"></span>
                <span class="cont-name">Nigeria</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-n-kor"></span>
                <span class="cont-name">North Korea</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-n-mce"></span>
                <span class="cont-name">North Macedonia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-nor"></span>
                <span class="cont-name">Norway</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-om"></span>
                <span class="cont-name">Oman</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-pak"></span>
                <span class="cont-name">Pakistan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-pal"></span>
                <span class="cont-name">Palau</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-pal-st"></span>
                <span class="cont-name">Palestine State</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-pnma"></span>
                <span class="cont-name">Panama</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-pappu"></span>
                <span class="cont-name">Papua New Guinea</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-para"></span>
                <span class="cont-name">Paraguay</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-peru"></span>
                <span class="cont-name">Peru</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-philip"></span>
                <span class="cont-name">Philippines</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-pol"></span>
                <span class="cont-name">Poland</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-port"></span>
                <span class="cont-name">Portugal</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-qtr"></span>
                <span class="cont-name">Qatar</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-rom"></span>
                <span class="cont-name">Romania</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-russ"></span>
                <span class="cont-name">Russia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-rwnda"></span>
                <span class="cont-name">Rwanda</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-st-ktnvy"></span>
                <span class="cont-name">Saint Kitts and Nevis</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-st-luci"></span>
                <span class="cont-name">Saint Lucia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-st-vin"></span>
                <span class="cont-name">Saint Vincent and the Grenadines</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-samo"></span>
                <span class="cont-name">Samoa</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-sanmari "></span>
                <span class="cont-name">San Marino</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-sao"></span>
                <span class="cont-name">Sao Tome and Princip</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-saudi"></span>
                <span class="cont-name">Saudi Arabia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-sngl"></span>
                <span class="cont-name">Senegal</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-serb"></span>
                <span class="cont-name">Serbia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-sey"></span>
                <span class="cont-name">Seychelles</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-sleo"></span>
                <span class="cont-name">Sierra Leone</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-singa"></span>
                <span class="cont-name">Singapore</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-slova"></span>
                <span class="cont-name">Slovakia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-slove"></span>
                <span class="cont-name">Slovenia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-solm"></span>
                <span class="cont-name">Solomon Islands</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-somi"></span>
                <span class="cont-name">Somalia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-s-afr"></span>
                <span class="cont-name">South Africa</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-s-kor"></span>
                <span class="cont-name">South Korea</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-s-sud"></span>
                <span class="cont-name">South Sudan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-spn"></span>
                <span class="cont-name">Spain</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-sri"></span>
                <span class="cont-name">Sri Lanka</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-sud"></span>
                <span class="cont-name">Sudan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-suri"></span>
                <span class="cont-name">Suriname</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-swden"></span>
                <span class="cont-name">Sweden</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-switz"></span>
                <span class="cont-name">Switzerland</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-syri"></span>
                <span class="cont-name">Syria</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-taji"></span>
                <span class="cont-name">Tajikistan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-tanz"></span>
                <span class="cont-name">Tanzania</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-thai"></span>
                <span class="cont-name">Thailand</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-timo"></span>
                <span class="cont-name">Timor-Leste</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-togo"></span>
                <span class="cont-name">Togo</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-tong"></span>
                <span class="cont-name">Tonga</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-trini"></span>
                <span class="cont-name">Trinidad and Tobago</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-tnsia"></span>
                <span class="cont-name">Tunisia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-turk"></span>
                <span class="cont-name">Turkey</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-turstan"></span>
                <span class="cont-name">Turkmenistan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-tuvlu"></span>
                <span class="cont-name">Tuvalu</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ugnd"></span>
                <span class="cont-name">Uganda</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-ukrn"></span>
                <span class="cont-name">Ukraine</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-uae"></span>
                <span class="cont-name">United Arab Emirates</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-uk"></span>
                <span class="cont-name">United Kingdom</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-us"></span>
                <span class="cont-name">United States of America</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-urug"></span>
                <span class="cont-name">Uruguay</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-uzeb"></span>
                <span class="cont-name">Uzbekistan</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-vntu"></span>
                <span class="cont-name">Vanuatu</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-vzula"></span>
                <span class="cont-name">Venezuela</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-viet"></span>
                <span class="cont-name">Vietnam</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-yem"></span>
                <span class="cont-name">Yemen</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-zmbi"></span>
                <span class="cont-name">Zambia</span>
            </a>
            <a href="" class="flag-container">
                <span class="flag-frame" id="fl-zimbwe"></span>
                <span class="cont-name">Zimbabwe</span>
            </a>

        </div>

    </div>



    <div class="charm-mod-overlay" id="country-mod-overlay"></div>

    <!-- End of Code for Charm Menu -->




    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="../user-page/user.js"></script>
    <script type="text/javascript" src="../charm-menu/charm-menu.js"></script>
</body>