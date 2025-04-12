<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author:" content="Dexter Lumibao">
    <meta name="description" content="Online services">

    <title>Alchemy</title>

    <!-- Mobile specific -->
      <meta name="viewport" content="width-device-width, inital-scale=1">
    <!-- web style -->
      <link rel="stylesheet" href="css/style.css" href="animation.js">
    <!-- web logo icon  -->
      <link rel="icon" href="" type="image/png" sizes="16x16">    
    <!-- animation   -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    </head>

    <body>
      <div id="container">
        <div id="main">
            <header>
                <div class="headerContainer">
                <img src="" alt="" class="logo">    
                <nav>
                    <div class="wrapperNav">
                      <div id="VidAF"></div>
                      <script src="lottie.js"></script>
                      <script src="script.js"></script>
                    <ul>
                        <li><a data-aos="fade-up-right" data-aos-delay="500" href="index.php">Home</a></li>
                        <li><a data-aos="fade-down" data-aos-delay="500" href="aboutUs.php">About us</a></li>
                        <li><a data-aos="fade-up" data-aos-delay="500"href="services">Services</a></li>
                        <li><a data-aos="fade-up-left" data-aos-delay="500" href="contactUs.php">Contact us</a></li>
                    </ul>
                    </div>
                </nav>
                </div>
            </header>

            <section class="containerBody">
               
                <div class="main-Video">
                    <h1 data-aos="fade-down" data-aos-delay="500">A Network of Solution</h1>
                      <video  src="Corporate Presentation Video Template   After Effects Templat[1].mp4" type="video/mp4" controls autoplay muted loop plays-inline class="videoPresentation">
                </div>
                
                    <div class="clients">
                        <h2 data-aos="fade-up" data-aos-delay="500" class="clientsTitle">Tried and Tested</h2>
                            <div class="carouselWrapper">
                                <div class="item item1"><img src="css/BM.png" alt=""></div>
                                <div class="item item2"><img src="css/infinite.png" alt=""></div>
                                <div class="item item3"><img src="css/AfPS_logo2.png" alt=""></div>
                                <div class="item item4"><img src="css/asi.png" alt=""></div>
                                <div class="item item5"><img src="css/jackson.png" alt=""></div>
                            </div>
                    </div >
                    
                  
                  

                    <div class="mission">
                    
                      <h1 data-aos="fade-up" data-aos-delay="500" class="missionTitle">Our Mission</h1>
                          
                          <div class="el"></div>                     
                            <p data-aos="fade-up-right" data-aos-delay="500" class="paragraphM1">Alchemy’s mission is to use a combination of powerful technology and a highly skilled workforce to create a virtual extension to a variety of service-oriented teams providing highly skilled and experienced personnel that assist in administration needs; thereby increasing your staff capacity, operations and efficiency.<br><br>
                            Alchemy’s mission is to use a combination of powerful technology and a highly skilled workforce to create a virtual extension to a variety of service-oriented teams providing highly skilled and experienced personnel that assist in administration needs; thereby increasing your staff capacity, operations and efficiency.<br><br>Marinez Burnett – Founder and President
                            </p>
                            
                            <div data-aos="fade-right" data-aos-delay="500" class="Hboxer1">
                              
                            </div>
                            <div data-aos="fade-left" data-aos-delay="500" class="Hboxer2">
                              
                            </div>
                        <button data-aos="fade-up-left"  data-aos-delay="500" class="button-36" role="button">Learne More</button>
                        
                    </div>
                   
            
                    <div class="Specialization">
                        <div class="box-element1">
                          <p class="paragraphM2">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          </p>
                        </div>
                        <div class="box-element2">
                          <div class="box-element2Wrapper1">
                            <div data-aos="fade-down-right" data-aos-delay="500" class="InsuranceAgency">
                              <h5>Insurance Agency</h5>
                              <img src="css/PropertyManagment.jpg" alt="">
                            </div>
                            <div data-aos="fade-up-right" data-aos-delay="500" class="MedicalPractice">
                              <h5>Medical Practice</h5>
                              <img src="css/MedicalPract.jpg" alt="">
                            </div>
                          </div>
                          <div class="box-element2Wrapper1">
                            <div data-aos="fade-down-left" data-aos-delay="500" class="BillingAndCoding">
                              <h5>Billing And Coding</h5>
                              <img src="css/MedicalPract.jpg" alt="">
                            </div>
                            <div data-aos="fade-up-left" data-aos-delay="500" class="PropertyManagement">
                              <h5>Property Management</h5>
                              <img src="css/PropertyManagment.jpg" alt="">
                            </div>
                          </div>
                        </div>                       
                    </div>
               
                </section>
            </div>
        </div>
      </div>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>
    </body>
    <footer>
                    <h5>Custome D <br> 2020 <br> Baguio </h5>
                        <label for="">Admin
                        <form class="admin" action="includes/adminLogin.inc.php" method="POST">
                        <input type="text" name="AdminUid" placeholder="Admin Username/e-mail">
                        <input type="password" name="AdminPwd" placeholder="Admin password">
                        <button type="submit" name="submit">Admin</button>
        
                        <?php
                        if (isset($_GET["newpwd"])) {
                            if ($_GET["newpwd"] == "passwordupdated") {
                            echo '<p class"signupsuccess">Your password has been updated!</p>';
                            }
                        }
                        ?>
                        <a class="ResetPwd" href="resetPassword.php">Forgot your password?</a>
                        </form>
                        </label>
    </footer>
  </html>
  