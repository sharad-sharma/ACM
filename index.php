<?php
include_once 'connection.php';
 ?>


<!DOCTYPE.html>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.8">
    <meta http-equiv="X-UA-Compatibile" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        #count{
  border-radius:50%;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.modcard {
    max-height: 250px;
    font-size: 20px;
    overflow-y: auto;
    width: 400px;
    margin-left:  110px;
  }
@media only screen and (max-width: 450px) {
  #modcard {
    width: 220px;
    font-size: 15px;
    margin-left: 0px;
  }
  #modnotifs {
    font-size: 15px;
  }
}


    </style>
    <title>acm website</title>
  </head>
  <body>
    <!--navbar starting-->
    <div class="navbar-fixed">
      <nav class="nav-wrapper #303f9f indigo darken-2">
        <div class="container" style="font-size: 5px;">
          <ul class="left hide-on-med-and-down">
            <li><a href="index.html"><b>Home</b></a></li>
            <li><a href="#aboutt_us"><b>About Us</b></a></li>
            <li><a href="#CONTACT"><b>Contact Us</b></a></li>

          </ul>
          <a href="#" class="center brand-logo"><img class="smallsize" id="deOnMob"
              src="img/logo.jpeg" style="height:70px;" /></a>
          <a href="#" class="sidenav-trigger" data-target="mobile-links">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">

            <li><a href="#About_EVENTS"><b>Our Events</b></a></li>
            <li><a href="#team_ACM"><b>Board</b></a></li>
            <li><a href="#notification"><b>Notifications</b></a>
            </li>
            <li><a href="#membershipp"><b></b></a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!--laptop-view navbar ending-->
    <!--mobile view navbar starting-->
    <ul id="mobile-links" class="sidenav #bbdefb blue lighten-4">
      <li>
        <div class="user-view">
          <div class="col s2">
            <a href="#user"><img class="circle responsive-img" id="centerme"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Association_for_Computing_Machinery_%28ACM%29_logo.svg/220px-Association_for_Computing_Machinery_%28ACM%29_logo.svg.png"></a>
          </div>
        </div>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a href="index.html">Home</a></li>
      <li><a href="#aboutt_us">About Us</a></li>
      <li><a href="#CONTACT">Contact Us</a></li>
      <li><a href="#About_EVENTS">Our Events</a></li>
      <li><a href="#team_ACM">Board</a></li>
      <li><a href="#membershipp">About Membership</a></li>
      <li><a href="#notification" id="notification">Notifications</a></li>
      <li><a href="aboutteam.html">About Developers</a></li>

    </ul>
    <!--navbar mobile view ended-->
    <!--main body starts-->

    <div class="main-body">
      <div class="hero">
        <div class="row">
          <!-- the animated giffy text -->
          <div class="moveBox card-title1">
            <div class="M">A</div>
            <div class="M">C</div>
            <div class="M">M</div>
          </div>

        </div>
        <!-- autoTyping Text -->
        <h1 id="memo"><span id="demo"></span>|</h1>

        <div class="down">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="7 13 12 18 17 13"></polyline>
            <polyline points="7 6 12 11 17 6"></polyline>
          </svg>
        </div>

      </div>

      <!--outside hero-->
      <!-- the red button on bottom right -->
      <div class="content" id="heightZero">
        <div class="fixed-action-btn">
          <a class="btn-floating btn-large red pulse">
            <i class="large material-icons">mode_edit</i>
          </a>
          <ul>
            <li><a class="btn-floating red"><i class="material-icons"
                  href="#"><i
                    class="fa fa-bell"></i></i></a></li>
            <li><a class="btn-floating yellow darken-1" href="https://twitter.com/TheOfficialACM"><i
                  class="material-icons"><i class="fa fa-twitter"></i></i></a></li>
            <li><a class="btn-floating green" href="https://www.youtube.com/results?search_query=ACM"><i
                  class="material-icons"><i class="fa fa-youtube"></i></i></a></li>
            <li><a class="btn-floating blue" href="https://www.facebook.com/ACMIET/"><i class="material-icons"><i
                    class="fa fa-facebook"></i></i></a></li>
          </ul>
        </div>

        <!-- the blue button on bottom left -->
        <!-- It requires extra CSS to set it to the left -->
        <div id="top">
          <i class="fa fa-arrow-up"></i>
        </div>


      </div>
      <div class="content" id="mybackground" style="width:100%;height:auto;">
        <div class="container" style="max-width: 1200px;">
          <div class="row" id="aboutt_us">
            <div class="col-xs-12" style="text-align:center;">
              <h2> About Us </h2>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
              <div class="info-text">
                <p align="justify">
                    ACM, the Association for Computing Machinery founded in New York on September 15, 1947, is the world’s largest educational and scientific computing society, connecting and convening the researchers, computing educators, and professionals from all over the globe to collaborate, inspire dialogues, share resources and address the field challenges advancing computing as a Science and a profession.
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
              <div class="col-xs-12">
                <figure class="snip1374"><a href="#"><img
                      src="https://cdn.shopify.com/s/files/1/2204/2817/files/featurette-10-1000x1000.jpg?98122347912348223"
                      alt="sample66" /></a></figure>
              </div>
            </div>

            <div style="clear: both;"></div>
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-6 col-md-push-6">
                <div class="info-text right">
                  <p align="justify">
                      IET-ACM Student Chapter is successfully conducting a nourishing series of Workshops, seminars, high quality computing conferences, technical events advancing computer science education and Certification Programmes to recognize technical excellence achievements, thereby enhancing and enriching your experience and knowledge with technical content, professional development, career networking opportunities and life-long learning resources. It offers a general platform inviting talents and ideas and promoting knowledge, awareness and skills among multiple domains.
                      
                  </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-6 col-md-pull-6">
                <div class="col-xs-12 col-sm-12">
                  <figure class="snip1374"><a href="#"><img
                        src="https://cdn.shopify.com/s/files/1/2204/2817/files/featurette-5-1000x1000.jpg?98122347912348223"
                        alt="sample57" /></a></figure>
                </div>
              </div>
            </div>
             <div style="clear: both;"></div>
            <div class="col-xs-12 col-sm-8 col-md-6">
              <div class="info-text">
                <p align="justify">
                   Objective
ACM Student Chapter is a society to promote Computing as a Science & Profession in our college. 
Our major objective is to come up with an ambiance for all to learn, discuss,  explore and enhance with world-wide exposure. It conducts various guest lectures, seminars, conferences, quizzes and coding contests in order to boost up our computing interests, skills, knowledge and experience to a greater extent. It offers a platform inviting talents and ideas from various domains to collaborate  to promote knowledge, awareness and skills enhancing our professional career or academic life.
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
              <div class="col-xs-12">
                <figure class="snip1374"><a href="#"><img
                      src="https://cdn.shopify.com/s/files/1/2204/2817/files/featurette-10-1000x1000.jpg?98122347912348223"
                      alt="sample66" /></a></figure>
              </div>
            </div>
             <div style="clear: both;"></div>
        
           <div class="row" id="About_EVENTS">
                  
                  <h2><b>Events</b></h2>
            <figure class="snip1237" style="">
              <div class="image" id="truck"> <img src="img/convoke.jpeg" alt="Touch-A-Truck" height="100%" width="100%"><em></em>
                </div>
              <figcaption>
          <h3 style="text-align:center;font-size: 20px;padding-top:5px;">Convoke With Campus Stars</h3><br> 
          <a href="https://www.facebook.com/search/top/?q=acm%20iet%20chapter&epa=SEARCH_BOX" class="read-more" >About Event</a> 

              </figcaption>
            </figure>
            <figure class="snip1237" >
              <div class="image" id="truck"> <img src="img/essaycomp.jpeg" alt="Touch-A-Truck" height="100%" width="100%"><em></em>
                </div>
              <figcaption>
          <h3 style="text-align:center;font-size: 20px;padding-top:5px;">Essay <br/>Competition</h3><br> 
          <a href="https://www.facebook.com/search/top/?q=acm%20iet%20chapter&epa=SEARCH_BOX" class="read-more" >About Event</a> 
              </figcaption>
            </figure>
            <figure class="snip1237"style="">
              <div class="image" id="truck"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1223" alt="Touch-A-Truck" height="100%" width="100%"><em></em>
                </div>
              <figcaption>
          <h3 style="text-align:center;font-size: 20px;padding-top:5px;">Recruitments <br/><br/></h3><br> 
          <a href="aboutevents.html" class="read-more" >About Events</a> 
              </figcaption>
            </figure> 
        </div>
            <!--contact us starting-->
            <div class="row" style="background-color: black;height:auto;width:100%;">
              <div class="container" id="CONTACT">
                <div class="row">
                  <div class="col-sm text-center">
                    <h3 class="div-heading display-4" style="color:white;"><b>Contact US</b></h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                      <form action="https://docs.google.com/forms/d/e/1FAIpQLSfr1ddJUnNEXbmrv1XwBXpihQ3FZiHyAoHodoEb1N2OQBVRFw/formResponse" method="POST" target="_self">
                      <div class="form-group" >
                        <input type="name" class="form-control" id="exampleInputName" placeholder="Name..." name="entry.2005620554" >
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Email Address..." name="entry.1045781291">
                      </div>

                      <div class="form-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Message" name="entry.1065046570"></textarea>
                      </div>
                      <button type="submit" class="btn btn-warning btn-lg btn-block" value="Submit">Submit</button>
                    </form>
       
       
                  </div>
                  <div class="col-md-6">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.3576375515418!2d75.87650411491282!3d22.677726685128775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fddd986e5571%3A0x115bc66d83167fc9!2sInstitute+of+Engineering+%26+Technology+(DAVV)!5e0!3m2!1sen!2sin!4v1566237050868!5m2!1sen!2sin"
                      frameborder="0" style="border:0 ;width:180px;"></iframe>

                  </div>

                </div>

              </div>

            </div>
            <!--contact us ending-->
            <!--about the team starting-->
            <!--About faculty-->
            <div class="container-fluid">
              <div class="container faculty-head-text" id="aboutME">
                <h3 id="nameH" class="faculty-head-text">Faculty Sponsor</h3>

                </br>

                <div class="row">
                  <div class="col-md-4 center-block text-c">
                    <img src="img/CPPATIDAR.jpeg" class="img-thumbnail"
                      style="height:190px;margin-left:-80px;max-width:200%;" alt="Wilfred"
                      title="Wilfred's signature smile :P">
                    <br><br>
                    <p class="CP" style="margin-left:-90px;"><b>C . P . Patidar</b></p>
                    <p class="CP" style="margin-left:-90px;">Assisstant Professor</p>
                  </div>
                  <br>
                  <div class="col-md-8 text-c" style="margin-top: -80px;">
                    <h5 class="HOD_paragraph">Message ~</h5>
                    <hr class="style15">
                    <p align="justify" class="HOD_paragraph">On behalf of the entire ACM IET Family,  welcome to our website. We hope you recognize a virtual space that is emblematic of our active, engaged and vibrant family. 
ACM, the world's largest educational and scientific computing society, delivers resources that advance computing as a science and a profession. ACM provides the computing field's premier Digital Library and serves its members and the computing profession with leading-edge publications, conferences, and career resources.ACM IET's motive is to help students cultivate intellectual curiosity and embrace a love of learning as they aspire to reach excellence.We work on the motto ASPIRE AND ASCEND, which clearly signifies that all the members in the team are enthusiastic enough to grow and reach heights.
                    </p>

                  </div>

                </div>
              </div>

            </div>


          </div>


          <!--Ending about faculty-->

          <div class="container-fluid" id="team_ACM">
            <h2 class="team_heading">Team Bleech</h2>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\darshita.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Darshita Patil</h3>
                    <span class="content__subtitle">Chairperson</span>
                  </div>
                  <ul class="profile__social">
                    <li>
                      <a href="#">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/darshita-p-6b4794164">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/darshita.patil.1441">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/_.darshita._?igshid=u6uxsjxkyz6i">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\dhano.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Dhananjay Purohit</h3>
                    <span class="content__subtitle">Vice-Chairperson</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="https://github.com/DhananjayPurohit">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/dhananjay-purohit-6b81a2175">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/Dhananjaypuroh7?s=08">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/invites/contact/?i=xl8tvb29aaoq&utm_content=4oukhic">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\HR.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Hrithik Jain</h3>
                    <span class="content__subtitle">Secretary</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="https://github.com/Hrithik28">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/hrithik-jain-680aa5185">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://m.facebook.com/hrithiknopra?ref=bookmarks">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/invites/contact/?i=fh2eyijr590c&utm_content=3qkqq91">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <div class="container-fluid">

            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\ayush.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Ayush Dua</h3>
                    <span class="content__subtitle">Event Head</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="https://github.com/AyushDua">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/ayush-dua-b383b5170">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/ayush.dua1">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\Aditya_shrivastva.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Aaditya Shrivastva</h3>
                    <span class="content__subtitle">Technical Head</span>
                  </div>


                  <ul class="profile__social">
                    <li>
                      <a href="http://github.com/aaditya1499">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/aaditya-shrivastava">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/Aaditya1499?s=08">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/aaditya_1499?igshid=lc6j67s0ozv0">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\akshita.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Akshita Ranawat</h3>
                    <span class="content__subtitle">Marketing Head</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="#">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://m.facebook.com/akshita.ranawat.73?ref=bookmarks">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/_akshita_002/?hl=en">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <div class="container-fluid">

            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\PRAKHAR.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Prakhar Chelawat</h3>
                    <span class="content__subtitle">Webmaster</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="https://github.com/PrakharChelawat">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/prakhar-chelawat-2b909a187">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/chelwat?s=09">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/invites/contact/?i=1ovv7yi9duk8t&utm_content=3jce9tl">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\simran.jpg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Simran Khullar</h3>
                    <span class="content__subtitle">Treasurer</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="#">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/simran-k-a0296016b">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/_simrankhullar?igshid=1lb1kepwc5i0">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\yogesh.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Yogesh Gupta</h3>
                    <span class="content__subtitle">Membership Chairperson</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="https://github.com/Yg12061998">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/yogigupta1206/">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/yogigupta1206">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/yogigupta1206/">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="profile">
                  <div class="profile__photo">
                    <img src="img\AdityaRajput.jpeg" alt="">
                  </div>
                  <div class="profile__content">
                    <h3 class="content__title">Aditya Rajput</h3>
                    <span class="content__subtitle">Public Relation Head</span>
                  </div>

                  <ul class="profile__social">
                    <li>
                      <a href="https://github.com/itsadityaraj">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/aditya-singh-rajput/">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/aditya_pratap03/">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              

              <!--about the team ends-->
            </div>

          </div>
          <!--Notifications-->
          <div class="row" style="background-color: black;height:auto;width:100%;"  id="notification">
              <div class="container"  id="notification" >
                <div class="row"  id="notification">
                  <div class="col-sm text-center">
                    <h2 class="div-heading display-4" id="modnotifs" style="color:white;"><b>Notifications</b>  <i class="fa fa-bell"></i> <span class="badge badge-danger" id="count"><!-- <?php echo $count; ?></span> --></h6></h2>
                  </div>
                </div>
                <?php

   $sql_get= mysqli_query($con,"SELECT * FROM message where status=0");
   $count = mysqli_num_rows($sql_get);

?>
                <div class="row">
                  <div class="card modcard" id="modcard"> 

  <div class="container" style="color:black;text-align:left;">
     <?php
          $sql_get1= mysqli_query($con,"SELECT * FROM message where status=0");
          if(mysqli_num_rows($sql_get1)>0)
          {
            while($result= mysqli_fetch_assoc($sql_get1))
            { 
              echo '<br/>';
              echo ' <p class="dropdown-item" href="read_msg.php?id='.$result['id'].'" font-weight="bold">  <i class="fa fa-arrow-circle-right" size="2x"></i>    '.$result['message'].'</p>';
              
              
              
            }


          }
          else{
                echo ' <a class="dropdown-item" href="#" font-weight="bold">No Notifications</a>';
          }
          ?>
          
          
  </div>
</div>
                  <!-- <div class="col-md-6">
                      <form action="https://docs.google.com/forms/d/e/1FAIpQLSfr1ddJUnNEXbmrv1XwBXpihQ3FZiHyAoHodoEb1N2OQBVRFw/formResponse" method="POST" target="_self">
                      <div class="form-group" >
                        <input type="name" class="form-control" id="exampleInputName" placeholder="Name..." name="entry.2005620554" >
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Email Address..." name="entry.1045781291">
                      </div>

                      <div class="form-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Message" name="entry.1065046570"></textarea>
                      </div>
                      <button type="submit" class="btn btn-warning btn-lg btn-block" value="Submit">Submit</button>
                    </form>
       
       
                  </div>
                  <div class="col-md-6">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.3576375515418!2d75.87650411491282!3d22.677726685128775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fddd986e5571%3A0x115bc66d83167fc9!2sInstitute+of+Engineering+%26+Technology+(DAVV)!5e0!3m2!1sen!2sin!4v1566237050868!5m2!1sen!2sin"
                      frameborder="0" style="border:0 ;width:180px;"></iframe>

                  </div> -->


                </div>

              </div>

            </div>
        </div>
      </div>
    </div>
 

    </div>
    


    <!--footer starting-->

    <div class="content">

      <footer class="flex-rw" style="z-index:0;">

        <ul class="footer-list-top">
          <li>
            <h4 class="footer-list-header">About ACM</h4>
          </li>
          <li><a href="https://www.acm.org/about-acm" class="generic-anchor footer-list-anchor" itemprop="significantLink">About
              US</a></li>
          <li><a href="https://www.acm.org/about-acm/get-involved" class="generic-anchor footer-list-anchor" itemprop="significantLink">Volunteer</a>
          </li>
          <li><a href="https://www.acm.org/membership/join" class="generic-anchor footer-list-anchor"
              itemprop="significantLink">Membership</a></li>

          <li><a href="https://www.acm.org/membership/join" itemprop="significantLink" class="generic-anchor footer-list-anchor">Join
              ACM</a></li>

          <li><a href="https://www.acm.org/membership/membership-benefits" class="generic-anchor footer-list-anchor"
              itemprop="significantLink">Membership Benifits</a></li>
        </ul>
        <ul class="footer-list-top">
          <li>
            <h4 class="footer-list-header">CHAPTERS</h4>
          </li>


          <li><a href="https://www.acm.org/chapters/chapter-administrative-interface" class="generic-anchor footer-list-anchor">Chapter Admin</a></li>
          <li><a href="#">Calender</a></li>
          <li><a href="#">Publications</a></li>
          <li><a href='#' class="generic-anchor footer-list-anchor"></a></li>
          <li><a href='#' class="generic-anchor footer-list-anchor" target="_blank">About
              Awards</a></li>
        </ul>
        <ul class="footer-list-top">
          <li id='help'>
            <h4 class="footer-list-header"> Any Help</h4>
          </li>
          <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink" id="CONTACT">CONTACT
              US</a></li>
          
          <li id='find-a-store'><a href='#' class="generic-anchor footer-list-anchor"
              itemprop="significantLink">Education</a></li>
          <li id='user-registration'><a href='#' class="generic-anchor footer-list-anchor"
              itemprop="significantLink">Media</a></li>
          <li id='order-tracking'><a href='https://www.acm.org/code-of-ethics' itemprop="significantLink"
              class="generic-anchor footer-list-anchor">Code of ethics</a></li>
        </ul>
        <section class="footer-social-section flex-rw">
          <span class="footer-social-overlap footer-social-connect">
            CONNECT <span class="footer-social-small">with</span> US
          </span>
          <span class="footer-social-overlap footer-social-icons-wrapper">
            <a href="#" class="generic-anchor"
              target="_blank" title="linkedin" itemprop="significantLink"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.facebook.com/ACMIET/" class="generic-anchor" target="_blank" title="Facebook"
              itemprop="significantLink"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/TheOfficialACM" class="generic-anchor" target="_blank" title="Twitter"
              itemprop="significantLink"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/acm_iet/" class="generic-anchor" target="_blank" title="Instagram"
              itemprop="significantLink"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/results?search_query=ACM" class="generic-anchor" target="_blank"
              title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
            <a href="https://www.acm.org/" class="generic-anchor" target="_blank" title="Google Plus"
              itemprop="significantLink"><i class="fa fa-google-plus"></i></a>
          </span>
        </section>
        <section class="footer-bottom-section flex-rw">
          <div class="footer-bottom-wrapper">
            <i class="fa fa-copyright" role="copyright">

            </i> ACM <address class="footer-address" role="company address">IET-DAVV,Indore</address><span
              class="footer-bottom-rights"> - All Rights Reserved - </span>
          </div>
          <div class="footer-bottom-wrapper">
            <i class="fa fa-copyright" role="copyright">

            </i><address class="footer-address" role="company address"></address><span
              class="footer-bottom-left"><a href="aboutteam.html" target="_blank"> About Developers</a> </span>
          </div>
          
        </section>
      </footer>
    </div>


    </div>


    <!--footer-starting-->
    <!-- <div id="footer" style="z-index: 100;">

      <div id="footerbuttondown" class="pointer">&#9660;

      </div>
      <div id="footerbuttonup" class="pointer">&#9650;
        <div class="popup" onclick="myFunction()">
          <span class="popuptext" id="myPopup">Quick links</span>
        </div>
      </div>

      <div id="footercont">
 -->

        <div class="row">



        <!--  <div class="col-md-6" style="margin-top:05px;">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <span class="glyphicon glyphicon-bookmark"></span> Quick Shortcuts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-6 col-md-6">
                    <a href="#" class="btn btn-danger btn-lg" role="button"><span
                        class="glyphicon glyphicon-list-alt"></span> <br />Apps</a>
                    <a href="#" class="btn btn-warning btn-lg" role="button"><span
                        class="glyphicon glyphicon-bookmark"></span> <br />Bookmarks</a>
                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                        class="glyphicon glyphicon-signal"></span> <br />Reports</a>
                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                        class="glyphicon glyphicon-comment"></span> <br />Comments</a>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <a href="#" class="btn btn-success btn-lg" role="button"><span
                        class="glyphicon glyphicon-user"></span> <br />Users</a>
                    <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span>
                      <br />Notes</a>
                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                        class="glyphicon glyphicon-picture"></span> <br />Photos</a>
                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                        class="glyphicon glyphicon-tag"></span> <br />Tags</a>
                  </div>
                </div>
                <a href="aboutteam.html" class="btn btn-success btn-lg btn-block" role="button"><span
                    class="glyphicon glyphicon-globe"></span> About Devlepors</a>
              </div>
            </div>
          </div>
          <div class="vl"
            style="border-left: 1px dotted grey;height: 200px;position: absolute;left: 50%;margin-left: 70px;top: 70;">
          </div>-->
          <!--<div class="video-hero"

     data-provider="youtube"

     data-videoid="d_fyd8xMDnQ"

     data-poster="https://i.ytimg.com/vi/d_fyd8xMDnQ/maxresdefault.jpg">

</div>
<!--
<div class="video-hero"

     data-provider="custom"

     data-source='[{"source":"1.mp4", "type":"video/mp4"}, {"source":"1.webm", "type":"video/webm"}]'

     data-poster="poster.jpg">

</div>
<script>
$(".video-hero").videohero();
$(".video-hero").videohero({
02
  provider: "youtube",
03
  videoid: "",
  source: "",

  type:"video/mp4",
  poster: "",

  log: false,

  api: {

    url: "https://you-link.herokuapp.com/",

    param: "?url=https://www.youtube.com/watch?v="

  },

  attrs: {

    muted: true,

    autoplay: true,

    loop: true,

  },

  classes: {

    container: {

      wrapper: "videohero videohero-wrapper",

      preparing: "preparing",

      ready: "ready",

      error: "error",

      provider: "videohero-provider-"

    },

    video: "videohero-element",

    buttons: {

      mute: {

        self: "videohero-mute-button",


        on: "sound-off",

        off: "sound-on"

      }

    }

  },
  i18n: {

    "mute": "Sound off",

    "unmute": "Sound on"
  }

});


        </script>-->
          <!--youtube video-->
          <!-- <div class="col-md-12" style="margin-top:-11px;">
            <h6><a href="https://www.youtube.com/results?search_query=ACM">About ACM</h6>
            <iframe id="existing-iframe-example" width="300" height="170"
              src="https://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1" frameborder="0"
              style="border: solid 4px #37474F" controls webkitallowfullscreen mozallowfullscreen allowfullscreen>

            </iframe>


          </div> -->


        </div>

      </div>
      <!--end of footer-->

    </div>

    </div>
    </div>.
    <!--end of footer-->
    <script>
      function onYouTubeIframeAPIReady() {
        var player;
        player = new YT.Player('player', {
          width: 1280,
          height: 720,
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onPlaybackQualityChange': onPlayerPlaybackQualityChange,
            'onStateChange': onPlayerStateChange,
            'onError': onPlayerError
          }
        });
      }

      function onPlayerReady(event) {
        event.target.setVolume(100);
        event.target.playVideo();
      }
    </script>
    <script>
      var tag = document.createElement('script');
      tag.id = 'iframe-demo';
      tag.src = 'https://www.youtube.com/iframe_api';
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('existing-iframe-example', {
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      function onPlayerReady(event) {
        document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
      }
      function changeBorderColor(playerStatus) {
        var color;
        if (playerStatus == -1) {
          color = "#37474F"; // unstarted = gray
        } else if (playerStatus == 0) {
          color = "#FFFF00"; // ended = yellow
        } else if (playerStatus == 1) {
          color = "#33691E"; // playing = green
        } else if (playerStatus == 2) {
          color = "#DD2C00"; // paused = red
        } else if (playerStatus == 3) {
          color = "#AA00FF"; // buffering = purple
        } else if (playerStatus == 5) {
          color = "#FF6DOO"; // video cued = orange
        }
        if (color) {
          document.getElementById('existing-iframe-example').style.borderColor = color;
        }
      }
      function onPlayerStateChange(event) {
        changeBorderColor(event.data);
      }
    </script>

    <script>
      //Make sure you have this script in your js folder after JQuery
      $(document).ready(function () {
        //Back to Top Button
        var veiwportHeight = window.innerHeight; //Get height of viewport

        var scroll_top_duration = 'fast'; //Set page scroll speed, can be changed to number or a string like 'slow'
        $back_to_top = $('#top'); //Capture the div with the id of top which is the button
        //When the button is clicked, fire this fuction
        $back_to_top.on('click', function (e) {
          e.preventDefault(); //prevent default action of anchor tag
          $('body,html').animate({ //animate the page
            scrollTop: 0, //the top of the page, viewport height 0
          }, scroll_top_duration
          );
        });
        //add/remove the scrolled class to the button
        $(window).scroll(function () {
          if (window.scrollY > veiwportHeight / 3) {
            $back_to_top.addClass('scrolled')
          } else {
            $back_to_top.removeClass('scrolled')
          }
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $(".sidenav").sidenav();
      })
      $(".dropdown-trigger").dropdown();
      $(document).ready(function () {
        $('.fixed-action-btn').floatingActionButton();
      });
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".sidenav").sidenav();
      })  
    </script>
    <script src="main.js">
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        $(".hero").css({
          transform: 'translate3d(0, +' + (scroll / 100) + '%, 0) scale(' + (100 - scroll / 100) / 100 + ')'
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        let elems = document.querySelectorAll('.sidenav');
        let options = {
          edge: 'left',
          inDuration: 250,
          outDuration: 200,
          draggable: true
        }
        let instances = M.Sidenav.init(elems, options);
      });
    </script>
    <script>
      document.getElementById("footerbuttondown").onclick = function () { shrink() };
      document.getElementById("footerbuttonup").onclick = function () { expand() };
      document.getElementById("footer").style.height = "300px";

      function shrink() {
        if (document.getElementById("footer").style.height = "300px") {

          document.getElementById("footer").style.height = "30px";
          document.getElementById("footerbuttondown").style.visibility = "hidden";
          document.getElementById("footerbuttonup").style.visibility = "visible";
          document.getElementById("footercont").style.opacity = "0";
          document.getElementById("footercont").style.visibility = "hidden";

        }
      }

      function expand() {
        if (document.getElementById("footer").style.height = "30px") {

          document.getElementById("footer").style.height = "300px";
          document.getElementById("footerbuttondown").style.visibility = "visible";
          document.getElementById("footerbuttonup").style.visibility = "hidden";
          document.getElementById("footercont").style.opacity = "1";
          document.getElementById("footercont").style.visibility = "visible";


        }
      }

    </script>
    <script>
      // When the user clicks on <div>, open the popup
      function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }
    </script>
    <script>
      // Collapsible Footer
      document.getElementById("footerbuttondown").onclick = function () { shrink() };
      document.getElementById("footerbuttonup").onclick = function () { expand() };
      document.getElementById("footer").style.height = "300px";

      function shrink() {
        if (document.getElementById("footer").style.height = "300px") {

          document.getElementById("footer").style.height = "30px";
          document.getElementById("footerbuttondown").style.visibility = "hidden";
          document.getElementById("footerbuttonup").style.visibility = "visible";
          document.getElementById("footercont").style.opacity = "0";
          document.getElementById("footercont").style.visibility = "hidden";

        }
      }
      function expand() {
        if (document.getElementById("footer").style.height = "30px") {

          document.getElementById("footer").style.height = "300px";
          document.getElementById("footerbuttondown").style.visibility = "visible";
          document.getElementById("footerbuttonup").style.visibility = "hidden";
          document.getElementById("footercont").style.opacity = "1";
          document.getElementById("footercont").style.visibility = "visible";

        }
      }
      shrink();


    </script>

    <script>
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        $(".hero").css({
          transform: 'translate3d(0, +' + (scroll / 100) + '%, 0) scale(' + (100 - scroll / 100) / 100 + ')'
        });
      });
      document.addEventListener('DOMContentLoaded', function () {
        let elems = document.querySelectorAll('.sidenav');
        let options = {
          edge: 'left',
          inDuration: 250,
          outDuration: 200,
          draggable: true
        }
        let instances = M.Sidenav.init(elems, options);
      });



      // autoTyping Text
      var i = 0;
      // var txt = 'Imagine . Create . Iterate ';
      let A = ['IET-DAVV ', ' STUDENT CHAPTER '];
      let j = 0;
      //let txt = A[j];
      var speed = 120;

      function typeWriter() {
        let txt = A[j];
        if (i < txt.length) {
          document.getElementById("demo").innerHTML += txt.charAt(i);
          i++;
          if (i == txt.length) {
            speed = 700;
          } else {
            speed = 120;
          }
          setTimeout(typeWriter, speed);
        }
        if (i == txt.length) {
          i = 0;
          j = (j + 1) % A.length;
          document.getElementById("demo").innerHTML = "";
        }
      }
      typeWriter();
    </script>
    <script>
      $(document).ready(function () {
        var pos = 0,
          slides = $('.slide'),
          numOfSlides = slides.length;

        function nextSlide() {
          // `[]` returns a vanilla DOM object from a jQuery object/collection
          slides[pos].video.stopVideo()
          slides.eq(pos).animate({ left: '-100%' }, 500);
          pos = (pos >= numOfSlides - 1 ? 0 : ++pos);
          slides.eq(pos).css({ left: '100%' }).animate({ left: 0 }, 500);
        }

        function previousSlide() {
          slides[pos].video.stopVideo()
          slides.eq(pos).animate({ left: '100%' }, 500);
          pos = (pos == 0 ? numOfSlides - 1 : --pos);
          slides.eq(pos).css({ left: '-100%' }).animate({ left: 0 }, 500);
        }

        $('.left').click(previousSlide);
        $('.right').click(nextSlide);
      })

      function onYouTubeIframeAPIReady() {
        $('.slide').each(function (index, slide) {
          // Get the `.video` element inside each `.slide`
          var iframe = $(slide).find('.video')[0]
          // Create a new YT.Player from the iFrame, and store it on the `.slide` DOM object
          slide.video = new YT.Player(iframe)
        })
      }
    </script>
  </body>

  </html>
