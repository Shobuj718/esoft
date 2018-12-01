


<!DOCTYPE html>
<html>
<head>
<title>ফাঁপোর উচ্চ বিদ্যালয় </title>
<base href="http://localhost/esoft/">
<link rel="shortcut icon" href="assets/front/images/ehsan soft logo.png">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/front/assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  .hover>div>li>a{
    color: #fff;
    padding-top: 4px;
    padding-bottom: 4px;
  }
  .hover>div>li:hover{
   background-color: #d083cf;
  }
  .hover>div>li{
    padding: 7px 10px;
    clear: both;
    text-decoration: ;
  }
  #navArea{
    padding: 0px 0px;
    /*width: 1200px;*/
  }
  .header_top{
    padding: 0px 0px;
  }
  .goog-te-gadget-simple {
   background-color: #F2184F !important; 
   color: #fff;
   background-image: none;
   border-left: none; 
   border-top: none; 
   border-bottom: 0px; 
   border-right: 0px; 
   font-size: 10pt; 
  display: inline-block;
   padding-top: 0px; 
   padding-bottom: 0px; 
  cursor: pointer;
  zoom: 1;
  display: inline;
  margin-bottom:-5px;
}
.goog-te-gadget-simple .goog-te-menu-value {
   color: #fff; 
}
.add_banner{
  background-image: url(pp.jpg);
  width: 971px;
  height: 100px;
  text-align: center;
}

.logo2 img{
  width: 100px;
  height: 100%;
  margin-top: -69px;
  margin-left: 871px;
}

/*.backimg{
 background-image: url("view/front/includes/pp.jpg");
 background-repeat: no-repeat;
 background-size: 971px 100px;
 opacity: ;
        
}*/
.backimg {
  background-image: url("view/front/includes/pp.jpg");
  background-repeat: no-repeat;
  background-size: 1140px 130px;
  opacity: ;
}
.sc{
        text-align: center;
        /*padding-top: 7px;*/
        /*padding-bottom: 5px;*/
        font-style: italic;
        text-shadow:5px 5px 10px #1AA644;

    }

.header-wrapper {
  z-index: 9;
  position: relative;
  background-color: #1aa644;
  
}
.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  bottom: 0;
  
}


</style>
</head>
<body>
<!-- <div id="preloader">
  <div id="status">&nbsp;</div>
</div> -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container" style="margin-bottom:0px;">
  <header id="header" style="margin-top:0px;">
    <div class="row">

    <!-- style="background-color:#F2184F !important" -->

      <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:-5px;">  
        <div class="header_top" style="background-color:#F2184F !important;">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="http://www.worldehsan.com" target="_blank">Ehsan Soft</a></li>
              <!-- <li><a href="javascript:void(0);">About</a></li> -->
              
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Board Result</a>
                <ul class="dropdown-menu" role="menu" style="background-color:#000;font-family:'',sans-serif;">
                    <li><a href="http://eboardresults.com/app/" target="_blank">Result Publication System</a></li>
                    <li><a href="view/front/information/educationboardresult.php">SSC Board Result</a></li>
                    <li><a href="view/front/information/primaryboardresult.php">Primary Result</a></li>
                </ul>
              </li>
              <li style="color:#fff;">
                <div class="lantra">  

          <div id="google_translate_element"> </div>

            <script type="text/javascript">

            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-59955232-1'}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div> 
              </li>
            </ul>
          </div>
          <div class="header_top_right">

           <p> <?php $str = date('m-d-Y');
                //$dateObj = DateTime::createFromFormat('m-d-Y', $str);
                $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
echo $dt->format('F j, Y, g:i a'); ?> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12" class="">
        <div class="header_bottom backimg" style="background-color:">
          <div class="logo_area"><a href="index.php" class="logo"><img class="img-rounded" src="assets/front/images/Logo.jpg" width="100" height="100" alt=""></a></div>
          <!-- <p style="">শিক্ষা নিয়ে গর্ব দেশ শেখ হাসিনার বাংলাদেশ </p> -->
          <div class="add_banner " style="padding-top:;"> <h3 class="sc" style="color:#1AA644; margin-top:2px;"> ফাঁপোর উচ্চ বিদ্যালয়   </h3><p style="color:#000;">স্থাপিতঃ  ১৯৬৮  খ্রিঃ </p>
          <div class="logo_area"><a href="index.php" class="logo2"><img align="right" class="img-rounded" src="assets/front/images/mawsi.jpg" width="100" height="100" alt=""></a></div>
          </div>
          <!-- <a href="#"><img src="assets/front/images/pp.jpg" alt=""></a> -->
        </div>
      </div>
    </div>
  </header>
  <section id="navArea" class="header-wrapper sticky">
    <nav class="navbar navbar-inverse  " role="navigation" style="background-color:#202C45 !important">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse header-wrapper">
        <ul class="nav navbar-nav main_nav ">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

           <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">At a glance</a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="view/front/information/404.php">Governing Council </a></li>
                <li><a href="view/front/information/managingcomittee.php">Managing Committe</a></li>
                <li><a href="view/front/information/teacherinfo.php">Teacher Information</a></li>
                <li><a href="view/front/information/studentinfo.php">Student Information</a></li>
                <li><a href="view/front/information/404.php">Employe Information</a></li>
              <li><a href="view/front/information/404.php">Assets</a></li>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us</a>
            <ul class="dropdown-menu" role="menu" style="min-width:350px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-7">
                  <li><a href="view/front/ourspeak/districeduofficerspak.php">TNO message</a></li>
                  <li><a href="view/front/ourspeak/presidentspeak.php">President message</a></li>
                  <li><a href="view/front/ourspeak/principalspeak.php">Principle message</a></li>
                  <li><a href=" view/front/ourspeak/assistantPrincSpeak.php">Vice Principle message</a></li>
                  <li><a href="view/front/ourspeak/orgaHistory.php">History of institution</a></li>
                  <li><a href="view/front /ourspeak/404.php">Founder</a></li>
                </div>
                <div class="col-md-5">
                  <li><a href="view/front/ourspeak/orgaContact.php">Institution Information</a></li>
                  <li><a href="view/front/ourspeak/404.php">Master Plan</a></li>
                  <li><a href="view/front/ourspeak/404.php">Goal & Purpose</a></li>
                  <li><a href="view/front/ourspeak/404.php"> Achievement ও Success</a></li>
                  <li><a href="view/front/ourspeak/404.php">Physical infrastructure</a></li>
                </div>
              </div>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Activities </a>
            <ul class="dropdown-menu" role="menu" style="min-width:350px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-6">
<<<<<<< HEAD
                  <li><a href="view/front/ourspeak/404.php">Number of buildings</a></li>
                  <li><a href="view/front/ourspeak/404.php">Number of Class Room</a></li>
                  <li><a href=" view/front/ourspeak/404.php">Number of student seats </a></li>
                  <li><a href="view/front/ourspeak/404.php">Vehicles</a></li>
                </div>
                <div class="col-md-6">
                  <li><a href="view/front /ourspeak/404.php">Multimedia class room</a></li>
                  <li><a href="view/front/ourspeak/404.php">Computer Lab</a></li>
                  <li><a href="view/front/ourspeak/404.php">School law </a></li>
                  <li><a href="view/front/ourspeak/404.php">School ground information</a></li>
=======
                  <li><a href="view/front/ourspeak/404.php">ভবন সংখ্যা </a></li>
                  <li><a href="view/front/ourspeak/404.php">কক্ষ  সংখ্যা </a></li>
                  <li><a href=" view/front/ourspeak/404.php">শিক্ষার্থী আসন  সংখ্যা </a></li>
                  <li><a href="view/front/ourspeak/404.php">যানবাহন </a></li>
                  <li><a href="view/front/information/404.php">শূন্য  পদ </a>
                  <li><a href="view/front/information/404.php">সংবাদ</a></li>
                <li><a href="view/front/information/2018 Vacation Notice .pdf" target="_blank">ছুটির তালিকা</a></li>
                
                
                </div>
                <div class="col-md-6">
                <li><a href="view/front/information/404.php">সুযোগ সুবিধা</a></li>
                  <li><a href="view/front/information/404.php">লাইব্রেরী</a></li>
                <li><a href="view/front/information/404.php">প্রকাশনা</a></li>
                  <li><a href="view/front /ourspeak/404.php">মাল্টিমিডিয়া  ক্লাসরুম </a></li>
                  <li><a href="view/front/ourspeak/404.php">কম্পিউটার  ল্যাব </a></li>
                  <li><a href="view/front/ourspeak/404.php">স্কুলের আইন </a></li>
                  <li><a href="view/front/ourspeak/404.php">স্কুলের মাঠের তথ্য</a></li>
>>>>>>> 2f95d056182e5acaf7d506f0f036577e60112e1c
                  
                </div>
              </div>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Information </a>
            <ul class="dropdown-menu" role="menu" style="min-width:420px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-5">
<<<<<<< HEAD
                <li><a href="view/front/information/404.php">Students of fame</a>
                <li><a href="view/front/information/404.php">Active Teachers/ Employees</a>
                <li><a href="view/front/information/404.php">Vacancy</a>
                  <li><a href="view/front/information/404.php">News</a></li>
                <li><a href="view/front/information/2018 Vacation Notice .pdf" target="_blank">Holiday List</a></li>
                
                <li><a href="view/front/information/404.php">Facilities</a></li>
                  <li><a href="view/front/information/404.php">Library</a></li>
                <li><a href="view/front/information/404.php">Publishing</a></li>
                <li><a href="view/front/information/404.php">Clearance </a></li>
                <li><a href="view/front/information/404.php">Testimonial</a></li>
                <li><a href="view/front/information/404.php">Certificate</a></li>
                </div>
                <div class="col-md-7">
                <li><a href="http://www.teachers.gov.bd" target="_blank">Teachers Batayon  </a></li>
                <li><a href="http://www.konnect.edu.bd" target="_blank">Teenager  Batayon  </a></li>
                <li><a href="http://www.muktopaath.gov.bd" target="_blank">Free lesson</a></li>
                <li><a href="view/front/information/404.php">Teachers Corner</a></li>
                <li><a href="view/front/information/404.php">Students Corner</a></li>
                <li><a href="view/front/information/404.php">Guests Corner</a></li>
                <li><a href="view/front/information/404.php">Health & Environmental info</a></li>
                <li><a href="view/front/information/404.php">Former Principles</a></li>
                <li><a href="view/front/information/404.php">Former Teachers</a></li><li><a href="view/front/information/404.php">Former Managing Committe</a></li>
=======
                <li><a href="view/front/information/404.php">কৃতি শিক্ষার্থীগণ</a>
                <li><a href="view/front/information/404.php">কর্মরত  শিক্ষক/কর্মচারী </a>
                
                <li><a href="view/front/information/404.php">ছাড়পত্র </a></li>
                <li><a href="view/front/information/404.php">প্রশংসা পত্র </a></li>
                <li><a href="view/front/information/404.php">প্রত্যয়ন পত্র </a></li>
                <li><a href="http://www.teachers.gov.bd" target="_blank">শিক্ষক বাতায়ন  </a></li>
                <li><a href="http://www.konnect.edu.bd" target="_blank">কিশোর  বাতায়ন  </a></li>
                <li><a href="http://www.muktopaath.gov.bd" target="_blank">মুক্ত  পাঠ</a></li>
                </div>
                <div class="col-md-7">
                
                <li><a href="view/front/information/404.php">শিক্ষকদের কর্নার </a></li>
                <li><a href="view/front/information/404.php">শিক্ষার্থীদের কর্নার </a></li>
                <li><a href="view/front/information/404.php">অতিথিদের কর্নার </a></li>
                <li><a href="view/front/information/404.php">স্বাস্থ্য ও পরিবেশ সচেতনমুলক তথ্য</a></li>
                <li><a href="view/front/information/404.php">পূর্ববর্তী প্রতিষ্ঠান প্রধানগণ</a></li>
                <li><a href="view/front/information/404.php">পূর্ববর্তী প্রতিষ্ঠানের শিক্ষকগণ</a></li><li><a href="view/front/information/404.php">পূর্ববর্তী ম্যানেজিং কমিটি</a></li>
>>>>>>> 2f95d056182e5acaf7d506f0f036577e60112e1c
                </div>
              </div>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academic</a>
            <ul class="dropdown-menu" role="menu" style="min-width:450px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-6">
<<<<<<< HEAD
                  <li><a href="view/front/information/404.php">Behavior</a></li>
                  <li><a href="view/front/information/404.php">Class Routine</a></li>
                <li><a href="view/front/information/404.php">Lesson plan</a></li>
                  <li><a href="view/front/information/404.php">Examination Routine</a></li>
                <li><a href="view/front/information/academiccalendar.php">Academic Calender</a></li>
                <li><a href="view/front/information/404.php">Guidelines for Parents</a></li>
                  <li><a href="view/front/information/404.php">Co-educational work</a></li>
                <li><a href="view/front/information/404.php">Dress </a></li>
                <li><a href="view/front/information/404.php">Text Book List</a></li>
                </div>
                <div class="col-md-6">
                  
                  <li><a href="view/front/information/photogallery.php">Photo Gallery</a></li>
                  <li><a href="view/front/information/404.php">Video Gallery</a></li>
                  <li><a href="view/front/information/404.pdf" target="_blank">Examination Result</a></li>
                  <li><a href="view/front/information/404.php">JSC Examination Result - 2017</a></li>
                  <li><a href="http://www.educationboardresults.gov.bd/">Board Result</a></li>
                  <li><a href="http://www.ebook.gov.bd/">E-book</a>                      
                  <li><a href="view/front/information/404.php">Student Academic Info</a></li>
                  <li><a href="view/front/information/404.php"> Teachers Info</a></li>
=======
                  <li><a href="view/front/information/404.php">আচরনবিধি</a></li>
                  <li><a href="view/front/information/404.php">ক্লাস রুটিন</a></li>
                <li><a href="view/front/information/404.php">পাঠ পরিকল্পনা</a></li>
                  <li><a href="view/front/information/404.php">পরীক্ষার সময়সূচী</a></li>
                <li><a href="view/front/information/academiccalendar.php">একাডেমিক ক্যালেন্ডার</a></li>
                <li><a href="view/front/information/404.php">অভিভাবকের জন্য নির্দেশিকা</a></li>
                  <li><a href="view/front/information/404.php">সহ-শিক্ষাক্রমিক কার্যাবলী</a></li>
                <li><a href="view/front/information/404.php">পোষাকরীতি</a></li>
                </div>
                <div class="col-md-6">
                  <li><a href="view/front/information/404.php">পাঠ্য বইয়ের তালিকা </a></li>

                  <li><a href="view/front/information/photogallery.php">ফটো গ্যালারী</a></li>
                  <li><a href="view/front/information/404.php">ভিডিও গ্যালারী</a></li>
                  <li><a href="view/front/information/404.pdf" target="_blank">প্রতিষ্ঠানের পরীক্ষার ফলাফল</a></li>
                  <li><a href="view/front/information/404.php">জে.এস.সি পরীক্ষার ফলাফল - ২০১৭</a></li>
                  <li><a href="http://www.educationboardresults.gov.bd/">বোর্ড পরীক্ষার ফলাফল</a></li>
                  <li><a href="http://www.ebook.gov.bd/">ই-বুক</a>                      
>>>>>>> 2f95d056182e5acaf7d506f0f036577e60112e1c

                </div>
              </div>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events </a>
            <ul class="dropdown-menu" role="menu" style="min-width:350px;">
              <div class="row hover" style="padding-left:;">
                <div class="col-md-5">
                    <li><a href="view/front/information/404.php">Yellow bird</a></li>
                  <li><a href="view/front/information/404.php">Scout</a></li>
                  <li><a href="view/front/information/404.php">Girls' Guide</a></li>
                  <li><a href="view/front/information/404.php">Red Cresent</a></li>
                  <li><a href="view/front/information/404.php">Display</a></li>
                  <li><a href="view/front/information/404.php">Volunteer</a></li>
                 
                </div>
                <div class="col-md-7">
                 <li><a href="view/front/information/404.php">Annual  Milad mahfil</a></li>
                  <li><a href="view/front/information/404.php">Student parliament</a></li> 
                  <li><a href="view/front/information/404.php">Annual Sports Competition</a></li>
                  <li><a href="view/front/information/404.php">Sports</a></li>
                  <li><a href="view/front/information/404.php">cultural program</a></li>

                </div>
              </div>
            </ul>
          </li>

         
          

          
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admission</a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="view/front/information/404.php">Admission Notice</a></li>
            <li><a href="view/front/information/404.php">Apply Online </a></li>
                <li><a href="view/front/information/404.php">Admission Guidelines</a></li>
                <li><a href="view/front/information/404.php">Admission Results</a></li>
              <li><a href="view/front/information/404.php">Fees & Payments</a></li>
                <li><a href="view/front/information/404.php">Scholarship</a></li>
                <li><a href="view/front/information/404.php">Others</a></li>
            </ul>
          </li>
          
         
          
           <li><a href="view/front/contact/contact.php">Contact </a></li>
          
          <li style="text-align:;"><a href="view/admin/index.php">Log In</a></li>

        </ul>
      </div>
    </nav>
  </section>
  <!-- <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>নিউজ</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="view/front/information/academiccalendar.php" alt="">স্কুলের একাডেমিক ক্যালেন্ডার </a></li>
            <li><a href="#"><img src="assets/front/images/fuphs.jpg" alt="">আগামী ০১ মে ও ২ মে শ্রমিক দিবস ও পবিত্র  শবে বরাত উপলক্ষে স্কুল বন্ধ থাকবে</a></li>
            <li><a href="#"><img src="assets/front/images/news_thumbnail3.jpg" alt="">আগামী ০১ মে ও ২ মে শ্রমিক দিবস ও পবিত্র  শবে বরাত উপলক্ষে স্কুল বন্ধ থাকবে</a></li>
            <li><a href="#"><img src="assets/front/images/news_thumbnail3.jpg" alt="">আগামী ০১ মে ও ২ মে শ্রমিক দিবস ও পবিত্র  শবে বরাত উপলক্ষে স্কুল বন্ধ থাকবে</a></li>
            
            <ul id="ticker01" class="news_sticker">
            <li><a href="view/front/information/academiccalendar.php"><img src="assets/front/images/fuphs.jpg" alt="">স্কুলের একাডেমিক ক্যালেন্ডার </a></li>
            <li><a href="#"><img src="assets/front/images/fuphs.jpg" alt="">আগামী ০১ মে ও ২ মে শ্রমিক দিবস ও পবিত্র  শবে বরাত উপলক্ষে স্কুল বন্ধ থাকবে</a></li>
         
          </ul>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="javascript:void(0);"></a></li>
              <li class="twitter"><a href="javascript:void(0);"></a></li>
              <li class="googleplus"><a href="javascript:void(0);"></a></li>
              <li class="youtube"><a href="javascript:void(0);"></a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>News</span>
         <marquee class="news_sticker" style="color:#fff;padding-top:8px;" behavior='scrol' scrollamount='4'  direction=''  delay='200' onmouseover='stop()' onmouseout='start()'> 

          <?php

              //foreach ($results as $result){
              // echo $result['news'];
              //}

          ?>  
           </marquee>

          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="javascript:void(0);"></a></li>
              <li class="twitter"><a href="javascript:void(0);"></a></li>
              <li class="googleplus"><a href="javascript:void(0);"></a></li>
              <li class="youtube"><a href="javascript:void(0);"></a></li>
              <li class="pinterest"><a href="#"></a></li> 
              <li class="vimeo"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
 