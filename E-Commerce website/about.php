<?php
require_once("partials/general.php");
require_once("partials/navv.php");//require_once ("partials/navv.php");

if (! checkIsLogin()){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enactus tech Team-3</title>
        <link rel="stylesheet" type="text/css" href="Style.css" />
    </head>
    <body>
<section  class="Mohamed_section">
           <div class="left">
           <div class="circlehome3"></div>   
           <div class="circlehome4"></div> 
            </div> 
                <!--creating a enactus img-->
                <img class="img_mohamed" src="img/enactus.png" alt="enactus image">

                <!--creating a circlehome4 -->
             
            <div class="text">
                <!--about us-->
                <div class="about_text">
                    <p>About us</p>
                </div>

                <!--creating a pargraph-->
                <div class="paragraph">
                    <p>We believe investing in students who take Enterprenurial action for others creates a better world for us all.</p>
                </div>
            </div>
            
                
           <!--creating a circlehome3-->
        </section>
        <section id="Our-Impact" class="ourImpact">
            <h1>Our Impact</h1>
            <div class="text_Impact">
                <div class="PROJECTS IT">
                    <img src="img/projects.png" alt="projects_img">
                    <p class="M">1,626</p>
                    <div>
                        <p>TEAM PROJECTS</p>
                    </div> 
                    
                </div>
                <div class="countries IT">
                    <img src="img/flags.png" alt="flags_img">
                    <p class="M">33</p>
                    <div>
                        <p>COUNTRIES</p>  
                    </div> 
                </div>
                <div class="campus_programs IT">
                    <img src="img/university.png" alt="university_img">
                    <p class="M">2,064</p>
                    <div>
                    <p>CAMPUS PROGRAMS</p>
                    </div>
                </div>
                <div class="SMA IT">
                    <img src="img/impact.png" alt="impact_img">
                    <p class="M">37,470</p>
                    <div>
                        <p>STUDENT MEMBERS ANNUALLY</p>
                    </div>
                </div>
                <div class="Partners IT">
                    <img src="img/handshake.png" alt="handshake_img">
                    <p class="M">500</p>
                    <div>
                        <p>PARTNERS</p>
                    </div>
                </div>
                <div class="live_impac IT">
                    <img src="img/people.png" alt="people_img">
                    <p class="M">11,606,477</p>
                    <div>
                        <p>LIVES IMPACTED</p>
                    </div>
                </div>
            </div>
        </section>
        </body>
 </html>