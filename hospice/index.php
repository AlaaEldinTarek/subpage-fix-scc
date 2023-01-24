



<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css?v=1">
        <base href="https://pebblebrookseniorhomecare.com/"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>We Care for Terminally ill / Hospice Patients in Our Temecula CA Facility</title>
        <meta name="description" content="Pebble Brook offers hospice care for residents aged 55+ who have terminal illness in our Temecula assisted living facility.">
        <meta name="keywords" content="terminall ill temecula, hospice care, hospice care temecula, hospice care near me, in home hospice care , comfort care hospice, california hospice, california hospice care, hospice in california, hospice care california, hospice care in california">
        <meta name="robots" content="index, follow">
        <meta name="language" content="English">
        <link rel="icon" type="image/png" href="https://www.pebblebrookseniorhomecare.com/img/icon.png"/>
                <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        
        
       
       <script type="application/ld+json">
      {
        "@context": {
            "@vocab": "http:\/\/schema.org\/"
        },
        "@graph": [
            {
                "@id": "https:\/\/pebblebrookseniorhomecare.com",
                "@type": "Organization",
                "name": "Pebble Brook Senior Home Care",
                "url": "https:\/\/pebblebrookseniorhomecare.com\/",
                "logo": "https:\/\/pebblebrookseniorhomecare.com\/logo4.svg"
            },
            {
                "@type": "LocalBusiness",
                "parentOrganization": {
                    "name": "Pebble Brook Senior Home Care"
                },
                "name": "Pebble Brook Senior Home Care",
                "telephone": "(951) 303-0253",
                 "priceRange": "4000",
                "openingHoursSpecification": [
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Monday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Tuesday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Wednesday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Thursday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Friday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Saturday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Sunday"
                        ],
                        "opens": null,
                        "closes": null
                    }
                ],
                "address": {
                    "@type": "PostalAddress",
                    "name": "PBS Home Care - Pebble Brook Senior Home Care",
                    "streetAddress": "33722 Pebble Brook Circle",
                    "addressLocality": "Temecula",
                    "addressRegion": "CA",
                    "postalCode": "92592"
                },
                "image": "https:\/\/pebblebrookseniorhomecare.com\/logo4.svg"
            }
        ]
    }
      

    </script>






    </head>
<body>



    <?php //navbar here

        include("../navbar.php");
    ?>
    	
    <div class="body-wrapper" style="position: relative">
        <div class="section-search" style="display: none">
            <div class="search-bar"><strong>Contact Us</strong	>
              <div class="clear hide" ></div>
            </div>
        </div>

      <script>
            // document.getElementById('search').keypress(function () {
            //     document.getElementById('search').removeClass('error');
            // });

            // const form = document.getElementById('search_form');
            // form.addEventListener('submit', searcht);

            // function searcht(event) {
            //     event.preventDefault();
            //     var term = document.getElementById('search').value;
            //     term = term.replace(/\s+/g, '-').toLowerCase();

            //     if (term == '') {
            //         document.getElementById('search').focus();
            //         document.getElementById('search').addClass('error');
            //     } else {
            //         window.location.href = "search/" + term + "/";
            //     }
            // }
            let scrollpos = window.scrollY
            const header = document.querySelector(".header-wrapper-fixed")
            const header_height = header.offsetHeight

            const add_class_on_scroll = () => header.classList.add("is-sticky")
            const remove_class_on_scroll = () => header.classList.remove("is-sticky")

            window.addEventListener('scroll', function() { 
                scrollpos = window.scrollY;

                if (scrollpos >= header_height) { add_class_on_scroll() }
                else { remove_class_on_scroll() }
            })

            
            let dropCheckboxNew = document.getElementById("drop"); 
            dropCheckboxNew.addEventListener("change", function() { 
                let mainMenu = document.getElementsByClassName("main-ul")[0];
                let menuOverlay = document.getElementsByClassName("menu-overlay")[0];
                
                    if (this.checked) { 
                        mainMenu.style.display = "block";
                        menuOverlay.classList.add('menu-is-open')
                    } else { 
                        mainMenu.style.display = "none";
                        menuOverlay.classList.remove('menu-is-open')
                    } 
            }); 
            let dropCheckboxNewMob = document.getElementById("mob-drop"); 
            dropCheckboxNewMob.addEventListener("change", function() { 
                let mainMenu = document.getElementsByClassName("main-ul")[0];
                let menuOverlay = document.getElementsByClassName("menu-overlay")[0];
                
                    if (this.checked) { 
                        mainMenu.style.display = "block";
                        menuOverlay.classList.add('menu-is-open')
                    } else { 
                        mainMenu.style.display = "none";
                        menuOverlay.classList.remove('menu-is-open')
                    } 
            }); 

            document.querySelector('.pg_close').addEventListener('click',function () {
                let input = document.querySelector('#check01')
                input.checked = false
            })

            function showSharePopup() {
                var pop = document.getElementById("share-popup");
                pop.classList.remove("hide-popup");
            }

            function hideSharePopup() {
                var pop = document.getElementById("share-popup");
                pop.classList.add("hide-popup");
            }
            function showDownloadPopup() {
                var pop = document.getElementById("download-popup");
                pop.classList.remove("hide-popup");
            }

            function hideDownloadPopup() {
                var pop = document.getElementById("download-popup");
                pop.classList.add("hide-popup");
            }
        </script>
    <div class="section-social-mobile">
        <?php //prices here
            include("../pricesMobile.php");
        ?>
    </div>
    <div class="display-flex">
        <div class="section-content-nav-hospice" style="width: 100%">
            <div class="section-desktop">
                <div class="flex-item flex-item-img">
                    <img class="flex-item-img-img" src="https://pebblebrookseniorhomecare.com/house1.jpg" alt="Home Care Facility" title="RCFE front entrance">
                </div>
                <div class="header-divider"></div>
                <?php //prices here

        include("../prices.php");
    ?>
              
            </div>

            <div class="content-nav-list" style="width: 94%">
             
    <div class="contact-form">
             <?php 
      $msg ="";
      if(!empty($_POST)){
        if(!empty($_POST['name']) && isset($_POST['name'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          $txt ='<div style="margin:0 10% 0 10%;border: 1px solid #cdcdcd;">
                  <div class="col-sm-6 col-sm-offset-3">
                      <div class="panel panel-primary">
                          <div class="panel-body">
                              <div style="padding: 30px;">
                                  <p>Name: '.$name.',</p>
                                  <p>Email: '.$email.',</p>
                                  <p>'.$message.'</p>
                                  <p>Regards</p>
                                  <p>LOGO</p>
                                  <div style="margin-top:10%;">
                                      <hr>
                                      <small class="text-center" style="display:block;">&copy; '.date("Y").' LOGO Inc. All Rights Reserved. <br></small>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>';
          $email = 'winstonfalcon@gmail.com';
          $from = 'inquiry@pebblebrookseniorhomecare.com';  
          $headers = 'From:' . $from."\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

          $msg = mail($email,$subject,$txt,$headers);
        }
      }
      ?>
        <div class="hero-banner">
            <div class="topcenter-box">
                <div class="d-flex flex-row justify-content-between">
                    <div class="contact-form">
                        <div class="text-align">
                            <!-- <span  class="mobile-breadcrumb" style="color:#adadad; font-size:13px"> Residential Care for the Elderly </span> --> 
                            <!-- <span  class="mobile-breadcrumb" style="color:#999; font-size:13px">LICENSE # 336425448 </span>  --> 
                               
                        </div>
                        <div class="hero-banner" style="width: 632px">
                            <div class="topcenter-box second-child">
                                <div class="text-over-background">
                                    <p> 
                                        <span >STATE LICENSE # 336425448</span>
                                    </p> 
                                    <h1>
                                        <span>Comfort Care For The<br>
                                     Terminally ill<br>Using Hospice</span>
                                    </h1>   
                                </div>                                
                                
                                
                                 
                                <div class="header-padding"><h2>Hospice FAQ</h2></div> 
                               <hr class="hr3">
                                     <h2 class="h1 text-white main-contact-heading">What is Hospice?</h2>
                                <p class="p-text" style="line-height:2">Our facility is licensed to have up to four residents under hospice care. So in the event, your loved one is put under hospice care or becomes terminally ill, they won't have to go through the hassle of relocating to another facility or hospital, which can be energy- and time-consuming on your part and that of your loved one. With hospice waivers available at our facility, you will have peace of mind knowing what to expect from start to finish.

                                </p>
                                
                                <hr class="hr3">
                                 
                                 <h2 class="h1 text-white main-contact-heading">Hospice Care Means More Care In Addition Our Current Services</h2>
                                  <h3>Below is a list of services Hospice provides</h3>
                                 <p class="p-text" style="line-height:2">Physician services • Nursing care services • Certified hospice aide services • Homemaker services • Medical social services • Spiritual support • Volunteer services • Counseling, including dietary counseling • Medication for symptom control and pain relief related to the terminal illness • medical supplies and equipment related to the terminal illness • Physical therapy, occupational therapy, respiratory therapy, and speech therapy.
</p>
                                 
                                 <hr class="hr3">
 
 								 <h2 class="h1 text-white main-contact-heading">FAQ: Does it cost anything?</h2>
                                 <p class="p-text" style="line-height:2">No. There is no additional cost. Your loved one will even receive more care.
</p>
                                 
                                 <hr class="hr3">
                                 
                                 <h2 class="h1 text-white main-contact-heading">FAQ: When is it appropriate to call hospice?</h2>
                                 <p class="p-text" style="line-height:2">Most medical treatments and interventions are no longer effective, and a physician concludes that a patient's life expectancy is six months or fewer.</p>
                                 
                                 <hr class="hr3">
                                 
                                 <h2 class="h1 text-white main-contact-heading">FAQ: What is the first step in beginning hospice care?</h2>
                                 <p class="p-text" style="line-height:2">You will not be charged a dime when putting your loved one under Hospice Care. Usually, physicians direct patients to specialists, while the family members get to choose for some. Physicians will be the ones who will assess and determine whether the patient has 6-months or less to live. When a patient and their family call Hospice, they indicate that they don't want to seek curative treatment anymore. A physician would evaluate a patient's life expectancy. If it's six months or less, most treatment options and procedures are no longer effective, won't cure the illness, and prolong the patient's misery. Patients' care is moved from disease experts and surgeons to an interdisciplinary team trained in comfort care, pain management, psychological support, and quality of life when they are admitted to Hospice.
</p>
                                 
                                 <hr class="hr3">
                                 
                                 <h2 class="h1 text-white main-contact-heading">FAQ: If hospice is for the terminally ill, does that mean I am giving up on my loved one?</h2>
                                 <p class="p-text" style="line-height:2">No. When other care alternatives for an illness have been used up  or no longer work, hospice provides a method for people 
                                 to live in comfort, serenity, and dignity without curative care. What hospice is about is adding more care to  a patient's quality of living, comfort and not about giving up!</p>
                                 
                                 <hr class="hr3">
                                 
                                 <h2 class="h1 text-white main-contact-heading">FAQ: When does it become necessary to seek hospice care?</h2>
                                 <p class="p-text" style="line-height:2">Seeking hospice care should be considered by patients when medical procedures are no longer effective in curing their condition and the patient's suffering burden outweighs any benefits of continuing medication. A doctor must determine that a patient has an expected lifespan of six months or fewer before hospice treatments can be initiated.
</p>
                                 
                                 <hr class="hr3">
                                
                                 <h2 class="h1 text-white main-contact-heading">FAQ: What is end-of-life care, exactly?</h2>
                                 <p class="p-text" style="line-height:2">The goal of care near the end of life is to provide comfort rather than cure. It is care that recognizes that the patient's 
                                 condition is deteriorating and that attempting to alter the course of their terminal illness would be fruitless or that the risks would exceed the benefits. The patient is 
                                 terminally sick and opts for palliative care, often known as comfort care.</p>
                                 
                                 <hr class="hr3">
                                 
                                 <h2 class="h1 text-white main-contact-heading">FAQ: What does it mean to provide "comfort care"?</h2>
                                 <p class="p-text" style="line-height:2">Comfort care aims to provide pleasure and alleviate discomfort rather than at curing or managing the underlying illness. Comfort care is designed to meet the patient's physiological, mental, and moral requirements and their family.
</p>
                                 
                                 
                      
                                 <?php include("../address.php"); ?> 
                        
                        
                                           <h3>Online Form</h3>                                
                                    <br>
                                    <div class="contact-form">
                                        <form method="post" class="form-container">
                                            <input type="text" id="name" class="name" placeholder="Your Name" name="name" required="">
                                            <input type="email" id="email" class="email" placeholder="Your Email" name="email" required="">
                                            <input type="text" id="subject" class="subject" placeholder="Subject" name="subject" required="">
                                            <textarea id="message" name="message" rows="4" class="textarea" placeholder="Message" required=""></textarea>
                                            <button type="submit" class="border-0 fs-16 py-2 px-4 button">Submit</button>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <?php 
        if(!empty($msg)){ ?>
        <div
            style="text-align:center"
            class="alert alert-success alert-dismissible successmsg"
            
            >
            <p style="font-size:larger; margin-bottom:0; text-align:center; color:green;">
                <b>Thanks, mail sent. We'll get back to you soon!</b>
            </p>
        </div>
      <?php } ?>
      <footer>
        
      </footer>
      <script>
        setTimeout(function () {
          $('.alert-success').css('display','none');
        }, 3500);
      </script>
            </div>
    <br>
            </div>
            <div class="divider"></div>
            <div class="videos-found"></div>
        </div>
        <div class="section-footer">
        <div class="nav nav-footer">
            <ul class="nav-item nav-footer-list">
    		  <?php //footer here

        include("../footerBar.php");
    ?>
            </ul>
        </div>
        <div class="footer-divider-mobile"></div>
        <div class="social-list social-footer">
          <a  aria-label="facebook share" href="https://www.facebook.com/Pebble-Brook-Senior-Home-Care-2227131354196518/" rel="nofollow noopener" class="bg-facebook"></a>
          <a  aria-label="twitter share" href="https://api.addthis.com/oexchange/0.8/forward/reddit/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-twitter"></a>
          <a  aria-label="reddit share" href="https://api.addthis.com/oexchange/0.8/forward/reddit/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-reddit"></a>
          <a  aria-label="google share" href="https://api.addthis.com/oexchange/0.8/forward/google/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-google"></a>
          <a  aria-label="messenger share" href="https://api.addthis.com/oexchange/0.8/forward/messenger/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-messenger"></a>
          <a  aria-label="email share" href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-email"></a>
        </div>
        <div class="footer-divider"></div>
        <div class="copy">
            Copyright <?php echo date('Y');?>. All rights reserved. Disclaimer: All images are copyright to their respective owners.    </div>
        <div class="logos">
            <div class="bg-googleplay"></div>
            <div class="bg-appstore"></div>
            <div class="bg-rta"></div>
            <div class="bg-mcaffee"></div>
            <div class="bg-lock"></div>
            <div class="bit">128-bit SSL</div>

        </div>
    </div>
      </div>
    <div class="section-content" style=""><main id="maincontent"></main>
                 
                  
    </div>
        
  


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QQZQ9DPXLMqqq"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      function gtagCall(){
          gtag('js', new Date());
          gtag('config', 'G-QQZQ9DPXLMqqq');
      }
      gtagCall();
    </script>
    <!-- dropdown menu toggler -->
    <script>
        $('#services-toggle').click(function(){
            $('.our-services .display-flex .right-arrow').toggleClass('d-none');
            $('.our-services .display-flex .down-arrow').toggleClass('d-none')
        })
        $('#facility-toggle').click(function(){
            $('.facility-features .display-flex .right-arrow').toggleClass('d-none');
            $('.facility-features .display-flex .down-arrow').toggleClass('d-none')
        })
    </script>
</body>  