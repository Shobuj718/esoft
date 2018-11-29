<?php 

include_once 'view/front/includes/header.php' ;

 ?>

<style>
  .single_sidebar > ul > li a:hover{color:#d083cf}
  .single_page_content > img{
    max-width: 100%;
    width: 210px;
    height: 210px;
    margin-bottom: 15px;
  }
  .single_page_content{
    border-bottom: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
  }

</style>
 <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">

          
          

          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/1.JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>

          
          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/(2).JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>
          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/(3).JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>
          <div class="single_iteam"> <a href="#"> <img src="assets/front/images/(4).JPG" alt=""></a>
            <div class="slider_article">
            </div>
          </div>
         
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>নোটিশ</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav" style="height:auto !important;">
            <li>
                <div class="media"> <a href="view/front/information/2018 Vacation Notice .pdf" target="_blank" class="media-left"> <img class="img-rounded"  alt="" src="assets/front/images/mawsi.jpg"> </a>
                  <div class="media-body"> <a href="view/front/information/2018 Vacation Notice .pdf" target="_blank"> * সরকারি/বেসরকারি মাধ্যমিক ও নিম্নমাধ্যমিক বিদ্যালয়সমূহের ২০১৮ শিক্ষাবর্ষের ছুটির তালিকা ও শিক্ষাপঞ্জি ।</a> </div>
                </div>
            </li>

            <?php

             // foreach ($results as $result){  ?>

              <li>
                <div class="media"> <a href="view/front/news/index.php?show=<?php echo $result['unique_id']?>" class="media-left"> <img class="img-rounded"  alt="" src="view/admin/uploads/news/<?//= $result['image']; ?>" > </a>
                  <div class="media-body"> <a href="view/front/news/index.php?show=<?php echo $result['unique_id']?>" class="catg_title"> <?//= $result['news']; ?> </a> </div>
                </div>
              </li>
                
              <?php //} ?>
              
            </ul>


          <div class="single_sidebar">
            <h2><span>গুরুত্বপূর্ণ লিংকস</span></h2>

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong> শিক্ষা   বোর্ড  সমূহের  লিংক</strong></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="http://www.moedu.gov.bd" target="_blank">শিক্ষা মন্ত্রণালয়</a></li>
                <li><a href="http://www.shed.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ </a></li>
                <li><a href="http://www.tmed.gov.bd" target="_blank">কারিগরি ও মাদরাসা শিক্ষা বিভাগ</a></li>
                <li><a href="http://www.eedmoe.gov.bd" target="_blank">শিক্ষা প্রকৌশল অধিদপ্তর </a></li>
                <li><a href="http://dia.gov.bd" target="_blank">পরিদর্শন ও নিরীক্ষা অধিদপ্তর </a></li>
                <li><a href="http://www.dshe.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা অধিদপ্তর </a></li>             
                <li><a href="http://www.techedu.gov.bd" target="_blank">কারিগরি  শিক্ষা অধিদপ্তর</a></li>       
                <li><a href="http://www.bmeb.gov.bd" target="_blank">মাদরাসা শিক্ষা অধিদপ্তর</a></li>        

                <li><a href="http://www.dhakaeducationboard.portal.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, ঢাকা</li>   

                <li><a href="http://www.rajshahieducationboard.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, রাজশাহী </a></li>             
                <li><a href="http://www.dinajpureducationboard.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, দিনাজপুর </a></li>          
                <li><a href="http://sylhetboard.gov.bd/" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, সিলেট </a></li>             
               <li><a href="http://bise-ctg.portal.gov.bd/" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, চট্টগ্রাম </a></li>              
                <li><a href="http://www.jessoreboard.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, যশোর </a></li>
                <li><a href="http://www.barisalboard.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, বরিশাল </a></li> 
                <li><a href="http://www.rajshahieducationboard.gov.bd" target="_blank">বাংলাদেশ মাদরাসা শিক্ষা বোর্ড, ঢাকা </a></li>      
            </ul>
          </li>

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>শিক্ষা অধিদপ্তর গুরুত্বপূর্ণ    লিংক</strong></a>
            <ul class="dropdown-menu" role="menu">
              
                <li><a href="https://www.teachers.gov.bd/" target="_blank">শিক্ষক বাতায়ন </a></li>
                <li><a href="http://konnect.edu.bd/public/" target="_blank">কিশোর  বাতায়ন</a></li>
                <li><a href="http://www.mmc.e-service.gov.bd" target="_blank">মাল্টিমিডিয়া ক্লাসরুম ম্যানেজমেন্ট (এমএমসি)</a></li>
                <li><a href="http://www.muktopaath.gov.bd/login/auth" target="_blank">মুক্তপাঠ আকাশ আমার পাঠশালা </a></li>
                <li><a href="http://www.nctb.gov.bd" target="_blank">জাতীয় শিক্ষাক্রম পাঠ্যপুস্তক বোর্ড (এনসিটিবি)</a></li>             
                <li><a href="http://www.banbeis.gov.bd" target="_blank">বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস) </a></li>               
                <li><a href="http://www.ntrca.gov.bd" target="_blank">বেসরকারি শিক্ষক নিবন্ধন ও প্রত্যয়ন কর্তৃপক্ষ </a></li>                
                <li><a href="http://www.terbb.gov.bd" target="_blank">বেসরকারি শিক্ষা প্রতিষ্ঠান শিক্ষক ও কর্মচারী অবসর সুবিধা বোর্ড </a></li>              
                <li><a href="http://www.ngte-welfaretrust.gov.bd" target="_blank">বেসরকারি শিক্ষা প্রতিষ্ঠান শিক্ষক ও কর্মচারি কল্যাণ ট্রাস্ট </a></li>             
                
            </ul>
          </li>

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>প্রাথমিক  শিক্ষা অধিদপ্তর গুরুত্বপূর্ণ  লিংক  </strong></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="http://www.mopme.gov.bd/" target="_blank">প্রাথমিক ও গণশিক্ষা মন্ত্রণালয় </a></li>
                <li><a href="http://www.dpe.gov.bd" target="_blank">প্রাথমিক শিক্ষা অধিদপ্তর </a></li>
                <li><a href="http://digitalcontent.ictd.gov.bd/" target="_blank">প্রাথমিক শিক্ষা ডিজিটাল কনটেন্ট একটিভিটি </a></li>
                <li><a href="http://myschool.eis.dpe.gov.bd/#" target="_blank">প্রাথমিক বিদ্যালয় ই-ব্যবস্থপনা </a></li>
              <li><a href="http://www.naem.gov.bd" target="_blank">জাতীয় শিক্ষা ব্যাবস্থাপনা একাডেমী (নায়েম)</a></li>   
              <li><a href="http://www.ugc.gov.bd" target="_blank">বাংলাদেশ বিশ্ববিদ্যালয়  মঞ্জরী  কমিশন </a></li>
                
            </ul>
          </li>
              <li><a href="http://www.educationboardresults.gov.bd" target="_blank">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড সমূহের ফলাফল </a></li>
                <li><a href="http://180.211.137.51:5839" target="_blank">প্রাথমিক ও ইবতেদায়ি শিক্ষা সমাপনী পরীক্ষার ফলাফল </a></li>
            <li><a href="#" target="_blank"><strong>স্কুলের বার্ষিক পরীক্ষার  রেজাল্ট  </strong></a></li>
           <li><a href="#" target="_blank"><strong>School Final Exam Routine</strong> </a></li>
              
          </div>


           <!--  <div id="next-button"><i class="fa  fa-chevron-down"></i></div> -->
          </div>

        </div>
      </div>
    </div>
  </section>
  
  <!-- <section id="contentSection">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="left_content">
          <div class="single_page">
            <div class="col-md-8">
                  <iframe width="800" height="800" src="http://www.educationboardresults.gov.bd"></iframe>
            </div>
          </div>
         </div>
      </div>
    </div>
  </section>
 -->
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              
              <li style="color:white;" class="active">স্কুলের তথ্য  ও ছবি </li>
            </ol>
            
           <!--  <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>pfbrghs</a> <span><i class="fa fa-calendar"></i><?php echo date('h:m') ?></span> <a href="#"><i class="fa fa-tags"></i>Info</a> </div> -->

            <div class="row">

              <div class="col-md-12">
                <h1 style="font-size:22px;text-align:center;"><p style="color:#D083CF"> প্রতিষ্ঠানের ইতিহাস</p>   </h1>
                <hr>
                  <div class="single_page_content">
                <p style="text-align:justify;">অন্ধকার দূর করে মানব জীবনকে আলোকিত করাই শিক্ষা। শিক্ষার্থীদের মেধা বিকাশ সাধনের মাধ্যমে আধুনিক বিজ্ঞান শিক্ষার প্রতি গুরুত্বসহ শ্রেণিকক্ষে মাল্টিমিডিয়া পদ্ধতিতে প্রজেক্টরের মাধ্যমে পাঠদান করে শিক্ষার্থীর সৃজনশীলতা ও চেতনাকে সমৃদ্ধ করাই শিক্ষার লক্ষ্য। মান সম্মত শিক্ষা প্রদান করে শিক্ষার্থীদের কে আদর্শ সুনাগরিক হিসাবে গড়ে তোলা এবং সহ পাঠ্যক্রমিক কার্যাবলীর মাধ্যমে শিক্ষার্থীর শারিরীক ও মানসিক বিকাশ সাধন করাই অত্র প্রতিষ্ঠানের লক্ষ্য ও উদ্দেশ্য। ফাঁপোর ইউনিয়নের প্রত্যন্ত অঞ্চলে ফাঁপোর গ্রামসহ পার্শ্ববতী গ্রাম, চাঁন্দাই, কৈচড়, চকদূর্গা, বেলগাড়ী গ্রামগুলোর ছেলে মেয়েদের মাধ্যমিক শিক্ষা গ্রহণের জন্য অত্র এলাকায় কোন শিক্ষা রতিষ্ঠান ছিল না। প্রাথমিক শিক্ষা সমাপ্ত করে অত্র এলাকার শিক্ষার্থীদেরকে মাধ্যমিক শিক্ষা গ্রহণের জন্য বগুড়া শহরের বিভিন্ন শিক্ষা প্রতিষ্ঠানে যেতে হত। সহজে চলাচলের জন্য ভাল রাস্তাসহ যোগাযোগ ব্যবস্থা ভাল ছিল না। অনেক কঃষ্ট করে পায়ে হেঁটে শহরের স্কুল গুলোতে যেতে হত, যাহা মেয়েদের জন্য ছিল অত্যন্ত কষ্টকর ও নিরাপত্তার অভাব ছিল। শিক্ষা একটি মৌলিক অধিকার। শিক্ষা গ্রহণের অধিকার সকলেরই আছে। সামাজিক এই গুরুত্বপূর্ণ চাহিদার প্রতি  লক্ষ রেখে, ফাঁপোর গ্রামে ফাঁপোর উচ্চ বিদ্যালয় নামে একটি মাধ্যমিক শিক্ষা প্রতিষ্ঠান গড়ে তোলার সিদ্ধান্ত গ্রহণ করেন। সিদ্ধান্ত মোতাবেক অত্র গ্রামের বিশিষ্ট সমাজসেবক ও শিক্ষা অনুরাগী মোঃ মহিউদ্দিন মন্ডল দাতাসহ স্থানীয় কিছু সংখ্যক বিদে্যুাৎসাহী ও গণ্যমান্য গড়ে তোলার সিদ্ধান্ত গ্রহণ করেন। সিদ্ধান্ত মোতাবেক অত্র গ্রামের বিশিষ্ট সমাজসেবক ও শিক্ষা অনুরাগী মোঃ মহিউদ্দিন মন্ডল দাতাসহ স্থানীয় কিছু সংখ্যক বিদে্যুাৎসাহী ও গণ্যমান্য ইউনিয়নের মধ্যে সর্বপ্রথম বিদ্যালয়টি ১৯৬৮ ইং সনে স্থাপন করা হয়। বর্তমানে বিদ্যালয়টি অত্র ইউনিয়নের মধ্য সুনামধন্য ও আদর্শ শিক্ষা প্রতিষ্ঠান হিসেবে পরিচিতি লাভ করিয়াছে। 
<br>
<br>
<strong style="font-size:22px"> প্রতিষ্ঠাকালঃ </strong>
<br>
০১-০১-১৯৬৮ ইং সনে নিম্নলিখিত স্থানীয় বিদ্যোৎসাহী ও দাতাগণের প্রচেষ্টায় প্রত্যন্ত গ্রামে শিক্ষা বিস্তারের লক্ষ্যে অত্র ইউনিয়নের মধ্যে সর্বপ্রথম বিদ্যালয়টি স্থাপন করা হয়।</p>
                </div>
                  
              </div>

            </div>


            <div class="row">

            <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF"> সভাপতির বাণীঃ</p>   প্রভাষক আব্দুর রাজ্জাক  </h1>
              <br>
                <div class="single_page_content"> <img class="img-center img-rounded" src="assets/front/images/president.jpg" alt="">
               
              <p style="text-align:justify;">ফাঁপোর উচ্চ বিদ্যালয় একটি ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান। অত্র প্রতিষ্ঠানটি প্রত্যন্ত গ্রাম অঞ্চলে কোলাহলমুক্ত পরিবেশে অবস্থিত। নারী শিক্ষা বিস্তারে... </p><h5><a style="color:#D083CF" href="view/front/ourspeak/presidentspeak.php">আরও...</a> </h5> 
                         
              </div>
            </div>

              <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF"> প্রধান শিক্ষকের বাণীঃ</p>   মোঃ রেজাউল হক     </h1>
               <br>
                
                <div class="single_page_content"> <img class="img-center img-rounded" src="assets/front/images/2.JPG" alt="">

              <p style="text-align:justify;">ডিজিটাল পদ্ধতি আমাদের দেশে একটি নতুন আকাংখিত ও কল্পিত পদ্ধতি। বর্তমান সরকার ২০২১ সালের মধ্যে মৌলিক পরিবর্তন ও কৌশলগত প্রযুক্তির মাধ্যমে...<h5><a style="color:#D083CF" href="view/front/ourspeak/principalspeak.php">আরও...</a> </h5></p>

                         
            </div>
              </div>
              <div class="col-md-4">
              <h1 style="font-size:21px;text-align:center;"><p style="color:#D083CF;"> সহঃ প্রঃ শিক্ষকের   বাণীঃ</p> নীতীশ চন্দ্র পাল  </h1>
              <br>
                <div class="single_page_content"> <img class="img-center img-rounded" src="assets/front/images/3.JPG" alt="">
              <p  style="text-align:justify;">বর্তমান বিশ্বের সাথে তাল মিলিয়ে শিক্ষার মান উন্নয়নের লক্ষ্যে ঐতিহ্যবাহী ফাঁপোর উচ্চ বিদ্যালয়ে যুগোপযোগী ও মান সম্মত শিক্ষা প্রসারের লক্ষ্যে...<h5><a style="color:#D083CF" href="view/front/ourspeak/assistantPrincipalspeak.php"><b>আরও...</a> </h5> </p>
                         
            </div>
            </div>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <!-- <div class="related_post">
              <h2>Related  <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow  animated">
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="assets/front/images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> President Speak</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="assets/front/images/post_img2.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Senior Teachers Speak</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="assets/front/images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Other Speak</a> </div>
                  </div>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
     
      


      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <!-- <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="assets/front/images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="assets/front/images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="assets/front/images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              
            </ul>
          </div> -->


          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">ক্যাটাগরি </a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">ভিডিও </a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">ছবি</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                 <!--  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe> -->
                 <img width="100" height="100" src="assets/front/images/Green Nature.jpg" alt="">
                  <iframe width="100%" height="250" src="assets/front/images/Sublime text bangla 11 Package Control [720p].kmp" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow "> <a href="" class="media-left"> <img alt="" src="assets/front/images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="" class="catg_title"> আগামী ০১ মে ও ২ মে শ্রমিক দিবস ও পবিত্র  শবে বরাত উপলক্ষে স্কুল বন্ধ থাকবে </a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow "> <a href="" class="media-left"> <img alt="" src="assets/front/images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="" class="catg_title"> আগামী ০১ মে ও ২ মে শ্রমিক দিবস ও পবিত্র  শবে বরাত উপলক্ষে স্কুল বন্ধ থাকবে </a> </div>
                    </div>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow ">
            <h2><span>গুগল ম্যাপ </span></h2>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d282794.6558797403!2d89.4411916718107!3d25.207816539081524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd1784e93ffe15%3A0x90930842d0c098f6!2sPuraton+Badiakhali+High+School!5e0!3m2!1sen!2sbd!4v1523959786549" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d28968.277565949553!2d89.3201913063591!3d24.82848706359003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39fc543bb1d5cce7%3A0xa33e907dbc001fa3!2sFapore!3m2!1d24.825570199999998!2d89.32743909999999!5e0!3m2!1sen!2sbd!4v1512292908154" width="340" height="250" frameborder="0" style="border:0" allowfullscreen></iframe> 

            <h2>অনলাইন পাঠক</h2>
              <div id='visitor' style="text-align:center;">
                <img src="http://services.webestools.com/cpt_global/43826-2.png" alt="Global Counter" />
              </div>
</div>
            
          <!-- <div class="single_sidebar wow fadeInDown"> 

          <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d28968.277565949553!2d89.3201913063591!3d24.82848706359003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39fc543bb1d5cce7%3A0xa33e907dbc001fa3!2sFapore!3m2!1d24.825570199999998!2d89.32743909999999!5e0!3m2!1sen!2sbd!4v1512292908154" frameborder="0" style="border:0" allowfullscreen></iframe>
          
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div> -->
          <!-- <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div> -->
        </aside>
      </div>
    </div>
  </section>


<!---->
<?php include_once 'view/front/includes/footer.php';?>
