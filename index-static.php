<!doctype html>
<html lang="en">
 <head>
  <title>Hastings Prototype</title>
  <meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script src="http://ny.basedigital.io/hastings/html-proto/071018/js/jquery.mousewheel.js"></script>
	<script src="http://ny.basedigital.io/hastings/proto/wp-content/themes/Hastings/js/animations.js"></script>
  
  <link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/fonts/fonts.css">
  <link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/css/style.css">

    <script>
      var stylesheet_directory = "http://ny.basedigital.io/hastings/proto/wp-content/themes/Hastings/";

      var router_var = {
        root : "ny.basedigital.io",
        init : "home",

        home : {
          id : 412,
          title : "Static Home Page Title  | Hastings Architecture",
          url : "http://ny.basedigital.io/hastings/proto",
          type : "home"
        },

        practices : {
          id : 460,
          title : "Practices | Hastings Architecture",
          url : "http://ny.basedigital.io/hastings/proto/practices/",
          type : "practices"        
        },

        portfolios : {
          id : 428,
          title : "Portfolios | Hastings Architecture",
          url : "http://ny.basedigital.io/hastings/proto/portfolios/",
          type : "portfolios"        
        },

      }

      if (router_var.init == "home") router_var.home.title = document.title;
      if (router_var.init == "portfolios") router_var.portfolios.title = document.title;
      if (router_var.init == "practices") router_var.practices.title = document.title;

      console.log("home route");
      setRoute(router_var.home, true);     
    </script>

 </head>
 <body>
 
 
    <div class="loading">
      <div class="loading-text">
        <span class="loading-text-words">H</span>
      </div>
    </div>

    <div id="main_wrapper">

        <div id="one" class="main_column">
            <div class="main_content">
                <div id="bio_test" class="individual_test"><link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/css/profile.css">


<section id="patrick-danny">

    <div> 

      <div class="profile-title">

          <div class="name">Andrew Smith</div>
          <div class="sub-name">Senior Associate, IIDA, NCIDQ, LEED AP</div>

      </div>
     
      <div class="flex">
      
          <div class="profile-margin-left"></div>

          <div class="profile-center">

              <div class="profile-container">

                  <div class="profile-img">

                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/profile-andrew.jpg" alt="">

                  </div>

                  <div class="profile-bio">

                      <div class="bio-content-p">Andrew serves as a Principal at Hastings. She joined the firm in 2003 and served critical roles in award-winning projects including the Ovation Events, Arts Magnet Middle School, Coleman Park Community Center, LifePoint Hospital Support Center and AmSurg Headquarters.</div>
                      <div class="bio-content-p">Heather believes that thoughtful listening is the most important part of her relationship with the firms’ clients. With a passion for organizational structure and a strategic approach to real estate, she thrives on understanding clients’ goals and exceeding expectations.With a passion for organizational structure and a strategic approach to.</div>
                      <div class="bio-content-p">Heather currently serves on the Board of Advisors for the University of Tennessee, College of Architecture, the Board of Directors for the McNeilly Center for Children, and the Design Advisory Council for Canada-based furniture manufacturer, Teknion. Her work has been honored with awards from both the International.</div>

                  </div>
                  
                  <div class="profile-subcontent-container flex">
                  
                      <div class="profile-subcontent-left">

                          <div class="profile-experience">

                          <div class="font-medium">Project Experience</div>

                              <a href="">Mask House, Terazzo</a><br>
                              <a href="">MTSU Science Facility</a><br>
                              <a href="">LifePoint Hospitals</a><br>
                              <a href="">Thompson Hotel</a><br>
                              <a href="">Bellevue Library</a><br>
                              <a href="">Franklin Academy</a><br>
                              <a href="">Twelve Twelv</a><br>
                              <a href="">The Bridge Building</a><br>
                              <a href="">Sony Music Nashville</a><br>
                              <a href="">Alfred Williams</a>

                          </div>

                      </div>

                      <div class="profile-subcontent-right">

                          <div class="profile-experience">

                              <div class="profile-experience-content">
                                  <div class="font-medium">Registrations</div>
                                  Registered Interior Designer in State of Tennessee National Council for Interior Design Qualification Certification
                                  Leadership in Energy and Environmental Design (LEED) Accredited Professional <br>
                              </div>
                              
                              <div class="profile-experience-content">
                                  <div class="font-medium">Education</div>
                                  University of Tennessee, Knoxville Bachelor of Science, Interior Design, 2003 <br>
                              </div>

                              <div class="profile-experience-content">
                                  <div class="font-medium">Professional & Community Involvement</div>
                                  Board of Directors, University of Tennessee College of Architecture and Design <br>
                              </div>

                          </div>

                      </div>
                  
                  </div>

              </div>

          </div>

          <div class="profile-margin-right"></div>

      </div>

    </div> 
    
    <div class="profile-footer">
        
        <div class="next-profile-btn">
            
            <p class="nxt-btn">Next Profile</p>
            
        </div>
        
    </div>
    
<!--    ========================== NEXT PROFILE =========================================-->

    <div> 

      <div class="profile-title">

          <div class="name">Regina Smithson</div>
          <div class="sub-name">Senior Associate, IIDA, NCIDQ, LEED AP</div>

      </div>
     
      <div class="flex">
      
          <div class="profile-margin-left"></div>

          <div class="profile-center">

              <div class="profile-container">

                  <div class="profile-img">

                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/bio-prev.jpg" alt="">

                  </div>

              </div>

          </div>

          <div class="profile-margin-right"></div>

      </div>

    </div>

</section></div>
                <div id="article_test" class="individual_test"><link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/css/listing.css">

<section id="listing">
   
    
    
    <div class="listing-page"> <!-- Video-->

            <div class="listing-title">

                <div class="listing-name">
                    Work place or work space?
                </div>

            </div>

            <div class="flex lg-img-container">

                <div class="img-container-left"></div>
                <div class="img-container-center">

                    <div class="img-container">

                        <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/article-video-1.jpg" alt="">

                    </div>

                </div>
                <div class="img-container-right"></div>

            </div>

            <div class="flex content-container">

                <div class="listing-left-margin"></div>

                <div class="listing-center">

                    <div class="listing-content">

                        <div class="flex">

                            <div class="content-share">

                                Share this opportunity
                                <ul class="social-media-share">
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                                </ul>

                            </div>

                            <div class="content-center">



                            </div>

                            <div class="content-content">

                                Take a look insidte oneC1TY, a vibrant new urban community in Nashville, Microsoft's new 11,000-square-foot office establishes a new home in this multi-building. <br><br>

                                <ul class="project-tags tags-listing">

                                        <li><a href=""><button class="tags-btn">Workplace</button></a></li>
                                        <li><a href=""><button class="tags-btn">Nashville</button></a></li>
                                        <li><a href=""><button class="tags-btn">LEED Silver</button></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="listing-right-margin"></div>

            </div>

            <div class="content-share-mobile">

                Share this opportunity
                <ul class="social-media-share">
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                </ul>

            </div>

            <div class="listing-footer">

            <div class="next-listing-btn">

                <p class="nxt-btn">Next Article</p>

            </div> 

    </div>    <!-- Video -->

    <div class="listing-page"> <!-- Article - Gallary -->

            <div class="listing-title">

                <div class="listing-name">
                    Work place or work space?
                </div>
                <div class="listing-sub">
                    by Dave Powell
                </div>

            </div>

            <div class="flex content-container">

                <div class="listing-left-margin"></div>

                <div class="listing-center">

                    <div class="listing-content">

                        <div class="flex">

                            <div class="content-share">

                                Share this opportunity
                                <ul class="social-media-share">
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                                </ul>

                            </div>

                            <div class="content-center">



                            </div>

                            <div class="content-content">

                               <div class="content-img-container">

                                   <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/profile-andrew.jpg" alt="">

                               </div>

                                Cited at oneC1TY, a vibrant new urban community in Nashville, Microsoft's new 11,000-square-foot office establishes a new home in this multi-building development under construction. oneC1TY will serve as a center for technology-enabled commercial, residential, research, and retail activity catering to the idea that mindful healthy living can be made easy. <br><br>

                                Microsoft Nashville is among the first to be designed from the ground up using Microsoft's Design Language for Place - Microsoft Real Estate & Facilities' framework to guide the remodeling of Microsoft's workspace around the world. Design Language for Place is intended to help designers create physical spaces in each of the company's 779 buildings that consistently embody its ethos and culture, while capturing the flavor of the environments and locales where each building is located. <br><br>

                                Inspired by the program, Microsoft Nashville establishes a welcoming, intuitive, and inspired space. A nod to Nashville's railroad roots, large, tactile, roughhewn-wood doors sit on a heavy steel frame and heighten the visitor's sense of passing as they enter the office. Reclaimed millwork, wood flooring, polished concrete floors, and blackened steel wall finishes layered throughout create variety and depth. The structural systems inherent to the building are exposed and expressed while indirect light and decorative pendant fixtures create a warm ambiance and vibe. <br><br>

                                An informal central gathering area anchors reception, lobby lounge and meeting spaces. Underscoring the office location, a bold photomosaic mural pictures a view of Nashville's historic Broadway made up of many smaller views - while the big picture remains the same, viewers are bound to discover a different image within the mosaic every time. <br><br>

                                The client-facing sales area showcases the brand's latest products. Custom, highly-detailed meeting tables fill the gathering and open meeting areas. Glass-fronted meeting rooms maximize natural light and visually connect the lounge, work, and meeting spaces. <br><br>

                                Key to the design is choice - the opportunity for employees to choose where and how you work. A variety of workspaces co-exist in a free flowing, open environment complete with a range of private to co-working, collaborative areas for small to large groups promote employee choice. Comfortable, textured, stylish, and highly-functional seating creates a lounge environment while bistro-style seating and booths invite larger groups to congregate and work together creating an active environment . Designed for flexibility, the team space is adaptable and can be easily reconfigured. <br><br>

                                "It feels like the great vibe you get walking into a cool club rather than walking into a sterile, formal corporate office that makes you uncomfortable," says Microsoft Workplace Strategist Brenda Ball. "It's not a highly-curated look, but a good mix of technology and texture." <br><br>


                                <ul class="project-tags tags-listing">

                                        <li><a href=""><button class="tags-btn">Workplace</button></a></li>
                                        <li><a href=""><button class="tags-btn">Nashville</button></a></li>
                                        <li><a href=""><button class="tags-btn">LEED Silver</button></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="listing-right-margin"></div>

            </div>

            <div class="img-gallary">

                <div class="flex gallary-row">

                    <div class="gallary-margin-left"></div>

                    <div class="gallary-center">

                        <div class="flex">

                            <div class="gallary-container-left">

                                <div class="gallary-img-container">

                                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-1.png" alt="">

                                </div>

                            </div>
                            <div class="gallary-container-center"></div>

                            <div class="gallary-container-right">

                                <div class="gallary-img-container">

                                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-2.png" alt="">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="gallary-margin-right"></div>

                </div>

                <div class="flex gallary-row">

                    <div class="gallary-margin-left"></div>

                    <div class="gallary-center">

                        <div class="flex">

                            <div class="gallary-container-left">

                                <div class="gallary-img-container">

                                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-3.png" alt="">

                                </div>

                            </div>
                            <div class="gallary-container-center"></div>

                            <div class="gallary-container-right">

                                <div class="gallary-img-container">

                                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-4.png" alt="">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="gallary-margin-right"></div>

                </div>

                <div class="flex">

                <div class="gallary-margin-left"></div>

                <div class="gallary-center">

                    <div class="flex">

                        <div class="gallary-container-left">

                            <div class="gallary-img-container">

                                <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-5.png" alt="">

                            </div>

                        </div>
                        <div class="gallary-container-center"></div>

                        <div class="gallary-container-right">

                            <div class="gallary-img-container">

                                <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-6.png" alt="">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="gallary-margin-right"></div>

            </div>

            </div>

            <div class="content-share-mobile">

                Share this opportunity
                <ul class="social-media-share">
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                    <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                </ul>

            </div>

            <div class="listing-footer">

            <div class="next-listing-btn">

                <p class="nxt-btn">Next Article</p>

            </div> 

    </div>    <!-- Article - Gallary -->
    
    <div class="listing-page"> <!-- Job listing -->
        
        <div class="listing-title">

            <div class="listing-name">
                Work place or work space?
            </div>
            <div class="listing-sub">
                by Dave Powell
            </div>

        </div>

        <div class="flex lg-img-container">

            <div class="img-container-left"></div>
            <div class="img-container-center">

                <div class="img-container">

                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/project-img-1.png" alt="">

                </div>

            </div>
            <div class="img-container-right"></div>

        </div>

        <div class="flex content-container">

            <div class="listing-left-margin"></div>

            <div class="listing-center">

                <div class="listing-content">

                    <div class="flex">

                        <div class="content-share">

                            Share this opportunity
                            <ul class="social-media-share">
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                            </ul>

                        </div>

                        <div class="content-center">



                        </div>

                        <div class="content-content">

                            Cited at oneC1TY, a vibrant new urban community in Nashville, Microsoft's new 11,000-square-foot office establishes a new home in this multi-building development under construction. oneC1TY will serve as a center for technology-enabled commercial, residential, research, and retail activity catering to the idea that mindful healthy living can be made easy. <br><br>

                            Microsoft Nashville is among the first to be designed from the ground up using Microsoft's Design Language for Place - Microsoft Real Estate & Facilities' framework to guide the remodeling of Microsoft's workspace around the world. Design Language for Place is intended to help designers create physical spaces in each of the company's 779 buildings that consistently embody its ethos and culture, while capturing the flavor of the environments and locales where each building is located. <br><br>

                            Inspired by the program, Microsoft Nashville establishes a welcoming, intuitive, and inspired space. A nod to Nashville's railroad roots, large, tactile, roughhewn-wood doors sit on a heavy steel frame and heighten the visitor's sense of passing as they enter the office. Reclaimed millwork, wood flooring, polished concrete floors, and blackened steel wall finishes layered throughout create variety and depth. The structural systems inherent to the building are exposed and expressed while indirect light and decorative pendant fixtures create a warm ambiance and vibe. <br><br>


                            <ul class="project-tags tags-listing">

                                    <li><a href=""><button class="tags-btn">Workplace</button></a></li>
                                    <li><a href=""><button class="tags-btn">Nashville</button></a></li>
                                    <li><a href=""><button class="tags-btn">LEED Silver</button></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="listing-right-margin"></div>

        </div>

        <div class="flex lg-img-container">

            <div class="img-container-left"></div>
            <div class="img-container-center">

                <div class="img-container">

                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/project-img-2.png" alt="">

                </div>

            </div>
            <div class="img-container-right"></div>

        </div>

        <div class="flex content-container">

            <div class="listing-left-margin"></div>

            <div class="listing-center">

                <div class="listing-content">

                    <div class="flex">

                        <div class="content-share">


                        </div>

                        <div class="content-center">



                        </div>

                        <div class="content-content">

                            An informal central gathering area anchors reception, lobby lounge and meeting spaces. Underscoring the office location, a bold photomosaic mural pictures a view of Nashville's historic Broadway made up of many smaller views - while the big picture remains the same, viewers are bound to discover a different image within the mosaic every time. <br><br>

                            The client-facing sales area showcases the brand's latest products. Custom, highly-detailed meeting tables fill the gathering and open meeting areas. Glass-fronted meeting rooms maximize natural light and visually connect the lounge, work, and meeting spaces. <br><br>

                            Key to the design is choice - the opportunity for employees to choose where and how you work. A variety of workspaces co-exist in a free flowing, open environment complete with a range of private to co-working, collaborative areas for small to large groups promote employee choice. Comfortable, textured, stylish, and highly-functional seating creates a lounge environment while bistro-style seating and booths invite larger groups to congregate and work together creating an active environment . Designed for flexibility, the team space is adaptable and can be easily reconfigured. <br><br>

                            "It feels like the great vibe you get walking into a cool club rather than walking into a sterile, formal corporate office that makes you uncomfortable," says Microsoft Workplace Strategist Brenda Ball. "It's not a highly-curated look, but a good mix of technology and texture." <br><br>


                            <ul class="project-tags tags-listing">

                                    <li><a href=""><button class="tags-btn">Workplace</button></a></li>
                                    <li><a href=""><button class="tags-btn">Nashville</button></a></li>
                                    <li><a href=""><button class="tags-btn">LEED Silver</button></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="listing-right-margin"></div>

        </div>

        <div class="flex lg-img-container">

            <div class="img-container-left"></div>
            <div class="img-container-center">

                <div class="img-container">

                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/project-img-3.png" alt="">

                </div>

            </div>
            <div class="img-container-right"></div>

        </div>

        <div class="img-gallary">

            <div class="flex">

            <div class="gallary-margin-left"></div>

            <div class="gallary-center">

                <div class="flex">

                    <div class="gallary-container-left">

                        <div class="gallary-img-container">

                            <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-5.png" alt="">

                        </div>

                    </div>
                    <div class="gallary-container-center"></div>

                    <div class="gallary-container-right">

                        <div class="gallary-img-container">

                            <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/gallary-img-6.png" alt="">

                        </div>

                    </div>

                </div>

            </div>

            <div class="gallary-margin-right"></div>

        </div>

        </div>

        <div class="content-share-mobile">

            Share this opportunity
            <ul class="social-media-share">
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
            </ul>

        </div>

        <div class="listing-footer">

        <div class="next-listing-btn">

            <p class="nxt-btn">Next Article</p>

        </div> 

    </div>    <!-- Article - Mixed -->

    <div class="listing-page"> <!-- Article - Text only -->
        
        <div class="listing-title">

            <div class="listing-name">
                Work place or work space?
            </div>
            <div class="listing-sub">
                by Dave Powell
            </div>

        </div>

        <div class="flex content-container">

            <div class="listing-left-margin"></div>

            <div class="listing-center">

                <div class="listing-content">

                    <div class="flex">

                        <div class="content-share">

                            Share this opportunity
                            <ul class="social-media-share">
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                            </ul>

                        </div>

                        <div class="content-center">



                        </div>

                        <div class="content-content" style="margin-bottom:0px">

                            Cited at oneC1TY, a vibrant new urban community in Nashville, Microsoft's new 11,000-square-foot office establishes a new home in this multi-building development under construction. oneC1TY will serve as a center for technology-enabled commercial, residential, research, and retail activity catering to the idea that mindful healthy living can be made easy. 

                        </div>

                    </div>

                </div>

            </div>


        </div>

   
    </div>    <!-- Article - Text only -->   
 
</section></div>
                <div id="job_test" class="individual_test"><link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/css/listing.css">


<section id="listing">
   
    <div class="listing-page"> <!-- Job listing -->
        
        <div class="listing-title">

            <div class="listing-name">
                Interior Designer
            </div>
            <div class="listing-sub">
                4-8 years of experience
            </div>

        </div>

        <div class="flex content-container">

            <div class="listing-left-margin"></div>

            <div class="listing-center">

                <div class="listing-content">

                    <div class="flex">

                        <div class="content-share">

                            Share this opportunity
                            <ul class="social-media-share">
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                            </ul>

                        </div>

                        <div class="content-center">



                        </div>

                        <div class="content-content">

                            Over the last thirty years, we have dedicated ourselves to investing in the best people. Hastings is constantly on the look-out for curious, creative, and self-motivated individuals. Our team of designers offer architecture, interior design, planning and sustainability services to a diverse group of inspired clients. Driven by a deep commitment to service, we've developed expertise in responsibly and sustainably designed workplace, academic, and community projects.br <br><br>

                            If you are a passionate and thoughtful interior designer who is motivated by all phases of design and construction to ultimately deliver innovative and sustainable environments, reach out to us.br <br><br>

                            The interior designer with 4-8 years of experience will be responsible for: br <br><br>

                            - Designing innovative solutions with complex details; competent in the completion <br>
                            and execution of high-end interior design projects 
                            - Development of interior design assignments including program documents, conceptual <br>
                            design, schematic design, and design development 
                            - Production of construction documents, working within Revit <br>
                            - Conducting construction administration <br> 
                            - Leading selection of furniture systems, specifications, and bidding <br> 
                            - Coordination of the project team including mechanical, electrical, structural,
                            and additional project consultants <br> 
                            - Collaborating closely with additional Hastings team members, clients, consultants,
                            contractors, and vendorsbr <br><br>

                            The ideal candidate will meet the following qualifications: br <br><br>

                            - Bachelor's degree from an accredited school of architecture or interior design <br> 
                            - Proficient in Revit <br> 
                            - Proficient in Adobe Creative Suite <br> 
                            - Detail oriented and collaborative <br> 
                            - Excellent communication skills, both verbal and written <br> 
                            - Excellent communications skills (verbal and written) <br>. 
                            - Well-rounded experience in design, FF&E specification, and construction documentation <br> 
                            - Knowledge of relevant building codes and accessibility requirements <br> 
                            - NCIDQ Certified and LEED accreditation preferred <br>
                            - Communicates a positive attitude, curiosity, creativity, a sense of urgency, and a    passion for details <br> 
                            - Eligible for full-time work in the United States <br><br>

                            If interested, please submit your cover letter, resume, and portfolio (no larger than 5M)
                            to future@haa.us <br><br>


                            <ul class="project-tags tags-listing">

                                    <li><a href=""><button class="tags-btn">Workplace</button></a></li>
                                    <li><a href=""><button class="tags-btn">Nashville</button></a></li>
                                    <li><a href=""><button class="tags-btn">LEED Silver</button></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="listing-right-margin"></div>

        </div>

        <div class="content-share-mobile">

            Share this opportunity
            <ul class="social-media-share">
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
            </ul>

        </div>

        <div class="listing-footer">

        <div class="next-listing-btn">

            <p class="nxt-btn">Next Job</p>

        </div> 

  
    </div>     <!-- Job - Listing -->
    

    <div class="listing-page"> <!-- Job listing -->
        
        <div class="listing-title">

            <div class="listing-name">
                Interior Designer
            </div>
            <div class="listing-sub">
                4-8 years of experience
            </div>

        </div>

        <div class="flex content-container">

            <div class="listing-left-margin"></div>

            <div class="listing-center">

                <div class="listing-content">

                    <div class="flex">

                        <div class="content-share">

                            Share this opportunity
                            <ul class="social-media-share">
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
                            </ul>

                        </div>

                        <div class="content-center">



                        </div>

                        <div class="content-content" style="margin-bottom:0px;">

                            Over the last thirty years, we have dedicated ourselves to investing in the best people. Hastings is constantly on the look-out for curious, creative, and self-motivated individuals. Our team of designers offer architecture, interior design, planning and sustainability services to a diverse group of inspired clients. Driven by a deep commitment to service, we've developed expertise in responsibly and sustainably designed workplace, academic, and community projects.br <br><br>

                        </div>

                    </div>

                </div>

            </div>

            <div class="listing-right-margin"></div>

        </div>

        <div class="content-share-mobile">

            Share this opportunity
            <ul class="social-media-share">
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/fb.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/tw.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/linkedin.svg" alt=""></a></li>
                <li><a href=""><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/mail.svg" alt=""></a></li>
            </ul>

        </div>


  
    </div>     <!-- Job - Listing -->


</section>
</div>
            </div>
        </div>

        <div id="two" class="main_column">
            <div class="main_content">
                <section id="practice">

    <div id="main-header">

  <div id="text-header">
      We're in our new office at<br>
      225 Polk Avenue in Nashville, TN<br>
      Say hi by <a href="#">email</a> or 615.329.1399
  </div>

  <div id="image-header">
      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/HAA_logo-01-r.svg" alt="Hastings Architecture">
  </div>

</div> 

    <div id="practice-thumbs">

      <div id="practice-list" class="clearfix">

          <div class="practice-box" data-tmpl="article" rel="search 1 5">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-A.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>
                          1 Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="1 2">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-10.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>
                          2 Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-B.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>
                          3 Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="search 1">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-desc-container no-img">
                      <p>4 
                          Lendlease is first in TN to be WELL Certified —Lendlease has achieved Silver certification in the WELL Building Standard, the first project in the State of Tennessee…
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2 3">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-5.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>5 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2 3">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-8.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>6 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="search 1 2">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/practice-thumb-holder.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>7 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2 3">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-c.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>8 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="1">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-desc-container no-img">
                      <p>9 
                          Lendlease is first in TN to be WELL Certified —Lendlease has achieved Silver certification in the WELL Building Standard, the first project in the State of Tennessee… 
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="search 2">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-12.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>10 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="1">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/practice-thumb-holder.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>11 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2 3">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-14.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>12 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="search 2 5">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/practice-thumb-holder.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>13 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="1">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-desc-container no-img">
                      <p>14 
                          Lendlease is first in TN to be WELL Certified —Lendlease has achieved Silver certification in the WELL Building Standard, the first project in the State of Tennessee…
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2 5">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-A.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>15 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="1">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/left-13.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>16 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="search 2 3">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/practice-thumb-holder.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>17 
                          Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="1">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-desc-container no-img">
                      <p>18 
                          Lendlease is first in TN to be WELL Certified —Lendlease has achieved Silver certification in the WELL Building Standard, the first project in the State of Tennessee… 
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/sketchbook.JPG" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>
                          19 Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" data-tmpl="article" rel="2 3">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/practice-thumb-holder.jpg" alt="">
                   </div>
                  <div class="practice-desc-container">
                      <p>
                          20 Best practices:<br>
                          How our studio views sustainable design
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="search team" data-tmpl="bio">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="profile-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/ppl-1.jpg" alt="">
                      <div class="pro-overlay"></div>
                  </div>
                  <div class="profile-desc-container">
                      <p>
                          Chris Davis<br>
                          Senior Associate AIA<br>
                          AIA, NCARB, LEED AP
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="team" data-tmpl="bio">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="profile-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/ppl-2.jpg" alt="">
                      <div class="pro-overlay"></div>
                  </div>
                  <div class="profile-desc-container">
                      <p>
                          Andrew Smith<br>
                          Senior Associate<br>
                          AIA, NCARB, LEED AP
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="team" data-tmpl="bio">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="profile-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/ppl-3.jpg" alt="">
                      <div class="pro-overlay"></div>
                  </div>
                  <div class="profile-desc-container">
                      <p>
                          John Smith<br>
                          Senior Associate<br>
                          AIA, NCARB, LEED AP 
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="team" data-tmpl="bio">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="profile-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/ppl-4.jpg" alt="">
                      <div class="pro-overlay"></div>
                  </div>
                  <div class="profile-desc-container">
                      <p>
                          Chris Davis<br>
                          Senior Associate<br>
                          AIA, NCARB, LEED AP 
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="search team" data-tmpl="bio">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="profile-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/ppl-5.jpg" alt="">
                      <div class="pro-overlay"></div>
                  </div>
                  <div class="profile-desc-container">
                      <p>
                          Sarah Atherston<br>
                          Senior Associate<br>
                          AIA,NCARB, LEED AP
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="team" data-tmpl="bio">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="profile-img-container">
                      <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/ppl-6.jpg" alt="">
                      <div class="pro-overlay"></div>
                  </div>
                  <div class="profile-desc-container">
                      <p>
                          Matt Spaulding<br>
                          Senior Associate<br>
                          AIA,NCARB, LEED AP
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="jobs" data-tmpl="job">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-desc-container no-img">
                      <p>1 
                          Interior Designer<br>
                          We are seeking a process oriented interikor designer with great design and people skills<br>
                          Experience: 1-4 of whatever he wanted to do and some other experuience he can get and more
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="jobs" data-tmpl="job">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-desc-container no-img">
                      <p>2 
                          Interior Designer<br>
                          We are seeking a process oriented interikor designer with great design and people skills<br>
                          Experience: 1-4 of whatever he wanted to do and some other experuience he can get and more
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

          <div class="practice-box" rel="search jobs" data-tmpl="job">
              <div class="practice-cell">
                  <div class="practiceThumbHoverLine top"></div>
                  <div class="practice-desc-container no-img">
                      <p>3  
                          Interior Designer<br>
                          We are seeking a process oriented interikor designer with great design and people skills<br>
                          Experience: 1-4 of whatever he wanted to do and some other experuience he can get and more
                      </p>
                  </div>
                  <div class="practiceThumbHoverLine bottom"></div>
              </div>
          </div>

      </div>
    </div>

</section>            </div> 
        </div>

        <div id="three" class="main_column">
            <div class="main_content">
                <div id="portfolio-thumbs">

  <div id="portfolio-list" class="col-lg-12"> <!-- GALLARY START -->


      <div class="portfolio-box portfolio-single" rel="1 3 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/1-1.jpg" alt="">
              
              <div class="overlay">
                  <div class="text">Vanderbilt University School of Nursing Expansion</div>
              </div>
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 2">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/1-2.jpg" alt="">
              
              <div class="overlay">
                  <div class="text">Lorem ipsum dolor sit amet</div>
              </div>
              
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">3</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-double" rel="search 2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/2-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">4</div>
              </div>        
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">5</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3 5">
          
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">6</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3">      
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">7</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="4 101">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-3.jpg" alt="">
              <div class="overlay">
                  <div class="text">8</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-double" rel="search 2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/4-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">9</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/4-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">10</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">11</div>
              </div>
                      
          </div>
       </div>

      <div class="portfolio-box portfolio-single" rel="1 3">     
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">12</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-3.jpg" alt="">
              <div class="overlay">
                  <div class="text">13</div>
              </div>
                      
          </div>

      </div>

      <div class="portfolio-box portfolio-single" rel="search 1">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/1-1.jpg" alt="">
              
              <div class="overlay">
                  <div class="text">14</div>
              </div>
              
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/1-2.jpg" alt="">
              
              <div class="overlay">
                  <div class="text">15 </div>
              </div>
              
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">16</div>
              </div>
                      
          </div>


      </div>

      <div class="portfolio-box portfolio-double" rel="1 4">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/2-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">17</div>
              </div>        
          </div>
      </div>

      <div class="portfolio-box portfolio-double" rel="2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/4-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">17-2</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="search 2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">18</div>
              </div>
                      
          </div>

      </div>

      <div class="portfolio-box portfolio-single" rel="2">     

          
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">19</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3 5">      
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">20</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-3.jpg" alt="">
              <div class="overlay">
                  <div class="text">21</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-double" rel="2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/4-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">22</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="search 2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/4-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">23</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">24</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3 5">      
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">25</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="102">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-3.jpg" alt="">
              <div class="overlay">
                  <div class="text">26</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="2 5">
         <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/1-1.jpg" alt="">
              
              <div class="overlay">
                  <div class="text">27</div>
              </div>
              
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="search 2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/1-2.jpg" alt="">
              
              <div class="overlay">
                  <div class="text">28</div>
              </div>
              
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">29</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-double" rel="1 3 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/2-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">30</div>
              </div>        
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="search 2 5">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/5-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">31</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="search 4 103">
          
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-1.jpg" alt="">
              <div class="overlay">
                  <div class="text">32</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="2 5">      
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-2.jpg" alt="">
              <div class="overlay">
                  <div class="text">33</div>
              </div>
                      
          </div>
      </div>

      <div class="portfolio-box portfolio-single" rel="1 3">
          <div class="portfolio-list-thumb">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/3-3.jpg" alt="">
              <div class="overlay">
                  <div class="text">34</div>
              </div>
                      
          </div>
      </div>
      

      
  </div>

</div>            </div> 
        </div>
        
        <div id="four" class="main_column">
            <div class="main_content">
                <link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/css/project.css">
<!--
<link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/fonts/fonts.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
-->

<section id="project-page">
    
    <div class="project-container">
    
        <div class="project-title">

            <div class="name">Creating a new space to learn and gather: Bellevue Library</div>

        </div>

        <div class="flex">

            <div class="project-margin-left"></div> <!-- LEFT MARGIN -->

            <div class="project-center">

                <div class="project-img">
                    <!-- <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/pro119_BV-2.jpg" alt=""> -->
                    <video loop>
                      <source src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/aesop.mov" >
                    </video> 
                </div>

                <div class="flex mobile-flex">

                    <div class="project-desc-margin-left"></div>

                    <div class="project-desc">

                        <div class="project-desc-content">

                            Following the devastating thousand-year flood of 2010, the Bellevue Library stands as a symbol of the city’s commitment to the local community. The library’s dynamic form is welcoming and inspiring: establishing a community landmark knit beautifully into the surrounding landscape and neighborhood.
                            <br><br>
                            Inspired by the collection housed within, two open books bisected at a central spine define the building form. The central spine provides intuitive circulation, organizing the various functions.

                        </div>

                    </div>

                    <div class="project-desc-margin-right"></div>

                </div>

                <div class="project-img">
                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/WORKac_KewGardensLibrary_PhotoByBruceDamonte_22.jpg" alt="">
                </div>

                <div class="flex mobile-flex">

                    <div class="project-desc-margin-left"></div>

                    <div class="project-desc">

                        <div class="project-desc-title">

                            "Bellevue Library est fitio remolorrum et landuci eos volorae cestiberibs asperi taquam nonseque odi occati berfercimse  boriore od ut doloreribea do.”

                        </div>

                        <div class="project-desc-author">

                            — David Bailey, Hastings Architecture

                        </div>

                        <div class="project-desc-content">

                            The layout of the library gives users a variety of seating and space options from louder, group collaborative spaces to more intimate individual reading spots. <br> <br>

                            A steel screen protects the full-height glass on the south facade from direct solar intrusion into the café, lounge, and primary stacks area, as well as the exterior reading porch. The custom perforation pattern was generated from the Harpeth River’s meandering path though Bellevue. 

                        </div>

                    </div>

                    <div class="project-desc-margin-right"></div>

                </div>
                

                <div class="flex mobile-flex">

                    <div class="left-sub-content-container">

                        <div class="single-content-container">

                            <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/WORKac_KewGardensLibrary_PhotoByBruceDamonte_23.jpg" alt="">

                        </div>

                    </div>

                    <div class="center-margin"></div>

                    <div class="right-sub-content-container">

                        <div class="double-content-container">

                            <!-- <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/project-img-1.jpg" alt=""> -->
                            <video loop>
                              <source src="http://ny.basedigital.io/hastings/html-proto/071018/tmp/aesop.mov" >
                            </video> 

                            <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/project-img-2.jpg" alt="">

                        </div>

                    </div>

                </div>

            </div>
            
            <div class="project-margin-right"></div> <!-- RIGHT MARGIN -->
            
        </div> 
            
        <div class="flex">    
            
            <div class="project-margin-left"></div> <!-- LEFT MARGIN -->
            
            <div class="project-center">
                
                <div class="flex tables-container mobile-flex">

                    <div class="left-sub-content-container">

                        <div class="single-content-container">

                            <table class="about-content-about">
                                <tr>
                                    <td class="table-desc">Location</td>
                                    <td class="table-content">Nashville, Tennessee</td>
                                </tr>
                                <tr>
                                    <td class="table-desc">Size</td>
                                    <td class="table-content">24,912 square feet</td>
                                </tr>
                                <tr>
                                    <td class="table-desc">Client</td>
                                    <td class="table-content">City of Nashville Nashville</td>
                                </tr>
                            </table>

                            <table class="about-content-selected">
                                <tr>
                                    <td class="table-desc">Selected Accolades</td>
                                    <td class="table-content">
                                        AIA Tennessee, Merit Award
                                        AIA Middle Tennessee Design Awards, Honor Award
                                        Urban Land Institute Nashville, Excellence in Development Awards
                                        Masonry Institute of Tennessee, Merit Award
                                        Award of Merit (Un-built), AIA Middle Tennessee
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-desc">Selected Press</td>
                                    <td class="table-content">
                                        The Tennessean “A New Space for Nashville” 1/2/2016
                                        Archinect “Hastings’ Bellevue Library” 1/9/2016
                                    </td>
                                </tr>
                            </table>

                        </div>

                    </div>

                    <div class="center-margin"></div>

                    <div class="right-sub-content-container">

                        <div class="double-content-container">

                            <table class="about-content-team">
                                <tr>
                                    <td class="table-desc">Team</td>
                                    <td class="table-content">
                                        David M. Powell, FAIA; LEED AP; Blaine Kimbrough, AIA, NCARB; Christina Holden AIA, LEED AP; Robert Kown AIA; Amanda Coulter
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-desc">Civil Engineer</td>
                                    <td class="table-content">
                                        Barge Cauthen & Associates, Inc.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-desc">MEP Engineer</td>
                                    <td class="table-content">
                                        Power Management Corporation
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-desc">Structural Engineer</td>
                                    <td class="table-content">
                                        EMC Structural Engineers, P.C.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-desc">General Contractor</td>
                                    <td class="table-content">
                                        Messer Construction
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-desc">Lanscape Architect</td>
                                    <td class="table-content">
                                        Hodgson and Douglas LLC
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-desc">Sustainability</td>
                                    <td class="table-content">
                                        greenSTUDIO
                                    </td>
                                </tr>

                            </table>

                            <ul class="project-tags">

                                <li><a href=""><button class="tags-btn">Community</button></a></li>
                                <li><a href=""><button class="tags-btn">Acadamic</button></a></li>
                                <li><a href=""><button class="tags-btn">Nashville</button></a></li>
                                <li><a href=""><button class="tags-btn last-tag">LEED Silver</button></a></li>

                            </ul>

                        </div>

                    </div>

                </div>
<!--
                <div class="project-footer">

                    <div class="next-project-btn">

                        <p class="nxt-btn">Next Project</p>

                    </div> 

                </div>
-->                
            </div>
            
            <div class="project-margin-right"></div> <!-- RIGHT MARGIN -->
            
        </div>

    

    </div>
    
    
</section>
            </div> 
        </div>

        <div id="scrollCoverCenter"></div>

    </div>

 </body>
</html>

<div id="two_helper"></div>
<div id="three_helper"></div>

<div id="navbar">
  <div class="box">
    <div id="practiceNav" class="cell practice">
      <div class="topFiltersWrapper">
          <div id="windowLeftBtn" class="practice-filters practice-filters-1col practice-filters-2col"><a href="#">Practice</a></div>

          <div id="practice-filters" class="practice-filters practice-filters-3col">
            <div id="search-icon-practice">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-search.svg">
            </div>

            <div id="practice-filter-1"><a href="javascript:void(0)" class="practice-filter" rel="1">News & Ideas</a></div>
            <div id="practice-filter-2"><a href="javascript:void(0)" class="practice-filter" rel="2">Recognition</a></div>
            <div id="practice-filter-3"><a href="javascript:void(0)" class="practice-filter" rel="team">People</a></div>
            <div id="practice-filter-4"><a href="javascript:void(0)" class="practice-filter" rel="jobs">Careers</a></div>
            <div id="practice-filter-5"><a href="javascript:void(0)" class="practice-filter" rel="5">About & Contact</a></div>
          </div>
      </div>
    </div>
    <div id="portfolioNav" class="cell portfolio">
      <div class="topFiltersWrapper">
          <div id="windowRightBtn" class="portfolio-filters portfolio-filters-1col portfolio-filters-2col"><a href="#">Portfolio</a></div>

          <div id="portfolio-filters" class="portfolio-filters portfolio-filters-3col">
            <div id="portfolio-filter-1"><a href="javascript:void(0)" class="portfolio-filter" rel="1">Workplace</a></div>
            <div id="portfolio-filter-2"><a href="javascript:void(0)" class="portfolio-filter" rel="2">Community</a></div>
            <div id="portfolio-filter-3"><a href="javascript:void(0)" class="portfolio-filter" rel="3">Residential & Hospitality</a></div>
            <div id="portfolio-filter-4"><a href="javascript:void(0)" class="portfolio-filter" rel="4">Planning</a></div>
            <div id="portfolio-filter-5"><a href="javascript:void(0)" class="portfolio-filter" rel="5">Academic</a></div>

            <div id="search-icon-portfolio">
              <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-search.svg">
            </div>
          </div>

          <div id="portfolio-filtered" class="portfolio-filters portfolio-filtered">
            <div class="portfolio-selected-category">***</div>
            <div><img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-x.svg"></div>
          </div>
      </div>
    </div>
  </div>
</div>

<div id="mainSiteIco">

  <div class="letter">
    <div class="H">
      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-H.svg" alt="">
    </div>
    <div class="I">
      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-H-hover.svg" alt="">
    </div>
    <div class="arrowUp">
      <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-H.svg" alt="">
      <!-- <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-arrow-u.svg" alt=""> -->
    </div>
  </div>

</div>

<div id="practice-sidebar">
  <div class="lt"></div>
  <div class="ct"></div>
  <div class="rt"></div>
</div>

<div id="portfolio-sidebar">
  <div class="lt"></div>
  <div class="ct"></div>
  <div class="rt"></div>
</div>
<link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/css/footer.css">
<!-- <link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/fonts/fonts.css">
<meta name="viewport" content="width=device-width,initial-scale=1"> -->

<section id="footer">
   
    <div class="flex">
   
        <div id="footer-left-margin"></div>

        <div id="footer-center">

            <div id="footer-center-content">
            
                <div class="flex">

                    <div id="col-name">

                        <div class="col-content">

                            &copy; Hastings Architecture, LLC

                        </div>    

                    </div>

                    <div id="col-email">

                        <div class="col-content">

                            hello@hastingsarchitecture.com

                        </div>    

                    </div>

                    <div id="col-address">

                        <div class="col-content">

                            225 Polk Avenue, Nashville, TN 37203

                        </div>

                    </div>

                    <div id="col-contact">

                        <div class="col-content">

                            <div class="flex">

                                615.329.1339
                                <ul class="social-media social-footer">
                                    <li class="has-facebook f-footer "><a href=""></a></li>
                                    <li class="has-instagram i-footer"><a href=""></a></li>
                                    <li class="has-linkedin l-footer"><a href=""></a></li>
                                    <li class="has-other o-footer"><a href=""></a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
               
            </div>
                
        </div>
           
        <div id="footer-right-margin"></div>
            
    </div>

        
    
</section><link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/css/contact.css">
<!--
<link rel="stylesheet" href="http://ny.basedigital.io/hastings/html-proto/071018/fonts/fonts.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
-->

<section id="contact-menu">
    
    <div class="flex">
        
        <div class="contact-menu-left-margin"></div>
        <div class="contact-menu-center">
            
            <div class="flex flex-mobile">
                
                <div class="exit-container-mobile">
                
                    <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-x.svg" alt="">
                
                </div>
                
                
                <div class="logo-container">
                    
                    <div id="contact-logo">
                        
                        <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/HAA_logo-01-r.svg" alt="">
                        
                    </div>
                    
                </div>
                
                <div class="contact-center"></div> <!-- empty container -->
                
                <div class="info-container">
                    
                    <ul class="nav-items">
                        
                        <li><a href="javascript:void(0)" id="goToPractice">Practice</a></li>
                        <li><a href="javascript:void(0)" id="goToPortfolio">Portfolio</a></li>
                        
                    </ul>
                    
                    <ul class="nav-items" id="secondary-nav">
                        
                        <li><a href="">615.329.1399</a></li>
                        <li><a href="">General Inquiries</a></li>
                        <li><a href="">Career Inquiries</a></li>
                        
                    </ul>
                    
                    <ul class="social-media">
                        <li class="hastings has-facebook"><a href=""></a></li>
                        <li class="hastings has-instagram"><a href=""></a></li>
                        <li class="hastings has-linkedin"><a href=""></a></li>
                        <li class="hastings has-other"><a href=""></a></li>
                    </ul>
                    
                </div>
                
            </div>
            
        </div>
        <div class="contact-menu-right-margin">
            
            <div class="exit-container">
                
                <img src="http://ny.basedigital.io/hastings/html-proto/071018/img/symbol-x.svg" alt="">
                
            </div>
            
        </div>
        
    </div>
    
</section>
<div id="window_cover"></div>
