<!DOCTYPE Html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=350, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Landing Page</title>
        <!-- <?php wp_head(); ?> -->
    </head>
<body>

<!-- CONNECT BETTER -->

<header>
    <div class="container">
        <div class="header-top">
            <div class="logo">
            	<?php the_custom_logo( $blog_id ); ?>
                <!-- <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="" > -->
                <div class="logo_title">
                    THE<span>GEM</span>
                </div>
            </div>
 
            <label for="toggle-1" class="toggle-menu">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </label>
            <input type="checkbox" id="toggle-1">

            <nav>
               <ul>
                     <li><a href="#">home</a></li>
                     <li><a href="#">pages</a></li>
                     <li><a href="#">blog</a></li>
                     <li><a href="#">portfolios</a></li>
                     <li><a href="#">shop</a></li>
                     <li><a href="#">features</a></li>
                     <li><a href="#">elements</a></li>
                     <li><a href="#"><img src="<?php bloginfo('template_url') ?>/img/flag.png" alt=""></a></li>
                     <li><a href="#"><img src="<?php bloginfo('template_url') ?>/img/seek.png" alt=""></a></li>
                     <li><a href="#"><img src="<?php bloginfo('template_url') ?>/img/bag.png"  alt=""></a></li>
                     <li><a href="#"><img src="<?php bloginfo('template_url') ?>/img/_2.png"   alt=""></a></li>
              </ul>
            </nav>
        </div>  
        <h1>CONNECT BETTER.<br>
            FASTER.<br>
            SECURER.
        </h1>
    </div>
    <div class="arrow_wrap">
            <div><img src="<?php bloginfo('template_url') ?>/img/arrow_left.png"></div>
            <div><img src="<?php bloginfo('template_url') ?>/img/arrow_right.png"></div>
    </div>
    <div class="the_world p__ container">
            the world's leading cross-platform <br>
            secure messaging system
            <p><button class="button1 button">get started</button>
            </p>
            <div style="border-top: solid transparent"></div>
    </div>
</header>

<!-- CORE FEATURES -->

<section class="core_features">
        <h1 class="h1__">core features</h1>
        <!-- колонки -->
        <div class="core_wrap container">
            <!-- левая колонка-->
            <div>
                <!-- строка 1-->
                <div class="row">
                    <div>
                        <h1>NEVER MISS YOUR FRIENDS REPLY</h1>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit, sed do eiusmod tempor <br>
                            incididunt ut labore et dolore magna aliqua. 
                        </div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon1.png">
                    </div>
                </div>
                 <!-- строка 2-->
                <div class="row">
                    <div>
                        <h1>BUILD AMAZING GROUPS</h1>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit, sed do eiusmod tempor <br>
                            incididunt ut labore et dolore magna aliqua. 
                        </div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon2.png">
                    </div>
                </div>
                 <!-- строка 3-->
                <div class="row">
                    <div>
                        <h1>SHARE RICH MEDIA</h1>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit, sed do eiusmod tempor <br>
                            incididunt ut labore et dolore magna aliqua. 
                        </div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon3.png">
                    </div>
                </div>
            </div>
            <!-- средняя колонка - телефон-->
            <div class="phone">
                <div></div>  
            </div>
            <!-- правая колонка -->
            <div>
                <!-- строка 1 -->
                <div class="row">
                    <div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon4.png">
                    </div>
                    <div>
                        <h1>USE ON ANY DEVICE</h1>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit, sed do eiusmod tempor <br>
                            incididunt ut labore et dolore magna aliqua. 
                        </div>
                    </div>
                
                </div>
                <!-- строка 2 -->
                <div class="row">
                    <div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon5.png">
                    </div>
                    <div>
                        <h1>KEEP YOUR HISTORY SAFE</h1>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit, sed do eiusmod tempor <br>
                            incididunt ut labore et dolore magna aliqua. 
                        </div>
                    </div>
                
                </div>
                <!-- строка 3 -->
                <div class="row">
                    <div>
                        <img src="<?php bloginfo('template_url') ?>/img/icon6.png">
                    </div>
                    <div>
                        <h1>FAST HISTORY EXECUTION</h1>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur <br>
                            adipisicing elit, sed do eiusmod tempor <br>
                            incididunt ut labore et dolore magna aliqua. 
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    
    <!-- EXTRA FEATURES -->
    
    <section class="extra-features">
        <h1 class="h1__">extra features</h1>
        <h2 class="p__">More Features Will Help You to Expirience More</h2>
        <div class="extra_wrap container">
            <div>
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/phone.png" alt="">
                </div>
                <h2>listen music</h2>
                <p>
                    Lorem ipsum dolor sit ametcon<br>
                    sectetur adipisicing elit, sed<br>
                    doiusmod tempor incidi
                </p>
            </div>
            <div>
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/diagram.png" alt="">
                </div>
                <h2>puls of life</h2>
                <p>
                    Lorem ipsum dolor sit ametcon<br>
                    sectetur adipisicing elit, sed<br>
                    doiusmod tempor incidi
                </p>
            </div>
            <div>
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/star.png" alt="">
                </div>
                <h2>favorite topics</h2>
                <p>
                    Lorem ipsum dolor sit ametcon<br>
                    sectetur adipisicing elit, sed<br>
                    doiusmod tempor incidi
                </p>
            </div>
            <div>
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/watch.png" alt="">
                </div>
                <h2>to-do tasks</h2>
                <p>
                    Lorem ipsum dolor sit ametcon<br>
                    sectetur adipisicing elit, sed<br>
                    doiusmod tempor incidi
                </p>
            </div>
        </div>
        <div class="rectangles_wrap container">
            <img class="rectangle" src="<?php bloginfo('template_url') ?>/img/rectangle.png" alt="">
        </div>
    </section>
    
    <!-- WE ARE PROUD TO SHOW NUMBERS -->
    <section class="proud">
        <h1 class="h1__">We are proud to show numbers</h1>
        <div class="proud_wrap container">
             <div>
                 <img src="<?php bloginfo('template_url') ?>/img/books.png" alt="">
                 <h1>1856</h1>
                 <p>Lines of code</p>
             </div>
             <div>
                <img src="<?php bloginfo('template_url') ?>/img/heart.png" alt="">
                <h1>3120</h1>
                <p>Social sharing</p>
             </div>
             <div>
                <img src="<?php bloginfo('template_url') ?>/img/arrow_down.png" alt="">
                <h1>25379</h1>
                <p>App Downloads</p>
             </div>
             <div>
                <img src="<?php bloginfo('template_url') ?>/img/star.png" alt="">
                <h1>1856</h1>
                <p>Positive Ratings</p>
             </div>
        </div>
    </section>
    
    <!-- New messaging made for people -->
    
    <section class="new">
        <div class="new-wrap container">
            <img src="<?php bloginfo('template_url') ?>/img/mockup.png" alt="">
            <h1 class="h1__">
                New messaging made<br>
                for people
            </h1>
            <p class="p__">
                Amazing App to Synchronize Your Life <br>
                With Best Friends. Be mobile. Be popular.
            </p>
            <input type="text" name="search">
            <button>Discover the app</button>
        </div>
    </section>
    
    
    <!-- USER ORIENTED INTERFACE -->
    <section class="user">
        <h1 class="h1__">USER ORIENTED INTERFACE</h1>
        <p class="p__">An intuitive messaging at your fingertips</p>
        <div class="user_wrap">
            <div class="screen color1"></div>
            <div class="screen color2"></div>
            <div class="screen color3r"></div>
            <div class="phone"><div></div> </div>
            <div class="screen color3l"></div>
            <div class="screen color2"></div>
            <div class="screen color1"></div>
        </div>
        <h2>discover right now</h2>
        <p class="c"><button class="button2 button">download app</button></p>    
    </section>
    
    <!-- NEW WORLD -->
    <section class="new-world">
        <h1 class="h1__">a new world of messaging</h1>
        <p class="p__">verything You Need to Easily Reach Your Friends in<br>
            One Application on Any Device</p>
            <div class="new-world-wrap container">
                <div><img src="<?php bloginfo('template_url') ?>/img/MacBook.png" alt=""></div>
            </div>   
    </section>
    
    <!-- GET SOCIAL -->
    <section class="social">
        <h1 class="h1__">get social</h1>
        <p class="p__">We believe we are building a great product for you to use and share <br> 
            with whom is important to you</p>
            <p class="c"><img src="<?php bloginfo('template_url') ?>/img/social.png" alt=""></p>
    </section>
    
    <!-- JENIFER BURNS-->
    <section class="jenifer">
    <div>
        <img src="<?php bloginfo('template_url') ?>/img/left.png" alt="">
    </div>
    <div class="jenifer_center">   
        <p class="c"><img src="<?php bloginfo('template_url') ?>/img/circle.png" alt=""></p>    
        <div>
            <h2><span>j</span>enifer burn<span>s</span></h2>
            <p>Creative Heads Inc.</p>
        </div>
        <div class="jenifer_text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br>
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        </div>
        <p class="c"><img src="<?php bloginfo('template_url') ?>/img/kovychki.png" alt=""></p>    
    </div>
    <div>
        <img src="<?php bloginfo('template_url') ?>/img/right.png" alt="">
    </div>
    </section>
    
    <!-- Choose your best plan -->
    <section class="choose">
        <h1 class="h1__">Choose your best plan</h1>
        <p class="p__">We think TheGEM messager should be available to anyone<br>
            so our pricing is simple and honest</p>
    
        <div class="choose container">

            <div class="choose-wrap1">
                <div class="line1">starter</div>
                <div class="line2 color_1">free</div>
                <div class="line3">Photo sharing school</div>
                <div class="line4"> Drop out ramen hustle</div>
                <div class="line5"><s>Coworking viral landing</s></div>
                <div class="line6"><s>Crush revenue traction</s></div>
                <div class="line7"><s>User base minimum viable</s></div>
                <div class="line8">
                    <s><br>Lorem ipsum dolor</s><br>
                    <button class="button3 color_1 button"><span>&#9658;</span>
                     buy</button>
                </div>
            </div>
            <div class="choose-wrap2">
                <div class="line1">advanced</div>
                <div class="line2 color_2">
                    <div>$9<br>
                        <span>per mounth</span>
                    </div>
                </div>
                <div class="line3">Photo sharing school</div>
                <div class="line4"> Drop out ramen hustle</div>
                <div class="line5">Coworking viral landing</div>
                <div class="line6"><s>Crush revenue traction</s></div>
                <div class="line7">User base minimum viable</div>
                <div class="line8">
                    <s><br>Lorem ipsum dolor</s><br>
                    <button class="button3 color_2 button"><span>&#9658;</span>
                     buy</button>
                </div>
            </div>
            <div class="choose-wrap3">
                <div class="line1">
                    <img src="<?php bloginfo('template_url') ?>/img/new.png" alt="">
                    <div>ultimate<br>
                        <span>best price/quantity plan *</span>
                    </div>
                </div>
                <div class="line2 color_3">
                    <div>$19<br>
                        <span>per mounth</span>
                    </div>        
                </div>
                <div class="line3">Photo sharing school</div>
                <div class="line4"> Drop out ramen hustle</div>
                <div class="line5">Coworking viral landing</div>
                <div class="line6">Crush revenue traction</div>
                <div class="line7"><s>User base minimum viable</s></div>
                <div class="line8">
                    <s><br>Lorem ipsum dolor</s><br>
                    <button class="button3 color_3 button"><span>&#9658;</span>
                     buy</button>
                </div>
            </div>
            <div class="choose-wrap4">
                <div class="line1">diamond</div>
                    <div class="line2 color_4">
                        <div>$29<br>
                            <span>per mounth</span>
                        </div>    
                </div>
                <div class="line3">Photo sharing school</div>
                <div class="line4"> Drop out ramen hustle</div>
                <div class="line5">Coworking viral landing</div>
                <div class="line6"><s>Crush revenue traction</s></div>
                <div class="line7">User base minimum viable</div>
                <div class="line8">
                    <s><br>Lorem ipsum dolor</s><br>
                    <button class="button3 color_4 button"><span>&#9658;</span>
                     buy</button>
                </div>
            </div>    
        </div>     
    </section> 
    
    <!-- DOWNLOAD AND BE SOCIAL -->
    
    <section class="download">
        <h1 class="h1__">download and be social</h1>
        <p class="p__">Download the App Free for Android and iOS.</p>
        <p class="p___">
            <img src="<?php bloginfo('template_url') ?>/img/play market.png" alt="">
            <img src="<?php bloginfo('template_url') ?>/img/AppStoreButton.png" alt="">
        </p>
    </section>  
    
    <!--  Frequently Asked Questions -->
      
    <section class="faq container">
        <h1 class="h1__">Frequently Asked Questions</h1>
        <p class="p__ _p"> You can find all aswers here if you need them</pre>
        <h3 >How can I share a files?<img src="<?php bloginfo('template_url') ?>/img/minus.png" alt=""></h3>
        <p class="p___">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.
        </p>
        <h3>how is my login secured?<img src="<?php bloginfo('template_url') ?>/img/plus.png" alt=""></h3>
        <h3>how i can find my friends?<img src="<?php bloginfo('template_url') ?>/img/plus.png" alt=""></h3>
        <h3>how i can listen music?<img src="<?php bloginfo('template_url') ?>/img/plus.png" alt=""></h3>
    </section>
    
    <!-- footer -->
    
    <footer>
        <div class="footer_wrap container">
            <div>  
                <div class="logo_title">
                    <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="" >THE<span>GEM</span>
                </div>
                <p>
                    Lorem Ipsum. Proin gravida nibh vel velit auctor 
                    aliquet. Aenean sollicitudin, lorem quis bibendum 
                    auctor, nisi elit consequat ipsum,  nec sagittis id
                    elit. Duis sed odio sit amet nibh
                </p>
            </div>
            <div class="recent">
                <span class="footer_span">REGENT POSTS</span>&#8194;
                <img src="<?php bloginfo('template_url') ?>/img/Rectangle26.png">
                <div class="recent_wrap">
                    <div ><img src="<?php bloginfo('template_url') ?>/img/Ellipse4.png" alt=""></div>
                    <div>
                        Proin gravida nibh vel velit
                        auctor aliquet aenean... <br>
                        27 Dec 2015 <span><img src="<?php bloginfo('template_url') ?>/img/cloud.png" alt="">&nbsp;14</span>
                    </div>
                </div>
                <div class="recent_wrap">
                    <div><img src="<?php bloginfo('template_url') ?>/img/Ellipse4.png" alt=""></div>
                    <div>
                        Proin gravida nibh vel velit
                        auctor aliquet aenean... <br>
                        27 Dec 2015 <span><img src="<?php bloginfo('template_url') ?>/img/cloud.png" alt="">&nbsp;0</span>
                    </div>
                </div>
            </div>
            <div class="our_clients"> 
                <span class="footer_span">OUR CLIENTS</span>&#8194;
                <img src="<?php bloginfo('template_url') ?>/img/Rectangle26.png">
                <div class="our_clients_wrap">
                    <div><img src="<?php bloginfo('template_url') ?>/img/VectorSmartObject1.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url') ?>/img/VectorSmartObject2.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url') ?>/img/VectorSmartObject3.png" alt=""></div>
                </div>  
                <div class="our_clients_wrap">  
                    <div><img src="<?php bloginfo('template_url') ?>/img/VectorSmartObject4.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url') ?>/img/VectorSmartObject5.png" alt=""></div>
                    <div><img src="<?php bloginfo('template_url') ?>/img/VectorSmartObject6.png" alt=""></div>
                </div>
            </div>
            <div class="newsletter">
                <span class="footer_span">NEWSLETTER</span>&#8194;
                <img src="<?php bloginfo('template_url') ?>/img/Rectangle26.png">
                <p>Subscribe to our MailChimp newsletter<br>
                     and stay up to date with all events<br>
                     coming straight in your mailbox:
                </p>
                <input type="text" name="search" value="Your email adress">
                <img class="red" src="<?php bloginfo('template_url') ?>/img/Rectangle_red.png" alt="">
                 <p>*personal information will be encrypted</p> 
            </div>
        </div>
        <div class="up">
            <img src="<?php bloginfo('template_url') ?>/img/up.png" alt="">
        </div>
        <div class="footer_plus">
            <div class="footer_plus_wrap container">
                <div>&#169;Copyright 2015</div>
                <div>   
                    <a href="#">Agency</a>
                    <a href="#">Services</a>
                    <a href="#">Our Works</a>
                    <a href="#">Contact Us</a>
                </div>
                <div>
                    <img src="<?php bloginfo('template_url') ?>/img/social_b_w.png" alt="">
                </div>
            </div>    
        </div>
    </footer>
    </body>
    </html>
