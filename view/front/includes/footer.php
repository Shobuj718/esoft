<div class='bottomcatbox'>
<!-- <h2>ভিডিও কর্ণার</h2> -->

<!-- <iframe title='YouTube video player' class='youtube-player' type='text/html' 
width='280' height='200' src='http://www.youtube.com/embed/nasa44?autoplay=2'
frameborder='0' allowFullScreen> </iframe></div> -->


 <footer id="footer" style="margin-bottom:0px;">
    <div class="footer_top" style="background-color:#202C45 !important">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig" style="float:0;">
            <h2>স্কুল ছবি </h2>
            <ul class="tag_nav">
              <li><a href="view/front/information/photogallery.php">ফটো গ্যালারী </a></li>
              <li><a href="#">ভিডিও গ্যালারী</a></li>
             
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>গুরুত্বপূর্ণ লিংকস</h2>
            <ul class="tag_nav">
              <li><a href="#">শিক্ষা অধিদপ্তর</a></li>
              <li><a href="#">ঢাকা শিক্ষা বোর্ড </a></li>
              <!-- <li><a href="#">দিনাজপুর শিক্ষা বোর্ড </a></li>
              <li><a href="#">রাজশাহী শিক্ষা বোর্ড </a></li>
              
              <li><a href="#">সিলেট শিক্ষা বোর্ড </a></li>
              <li><a href="#">বরিশাল শিক্ষা বোর্ড </a></li>
              <li><a href="#">চট্টগ্রাম শিক্ষা বোর্ড </a></li>
              <li><a href="#">খুলনা শিক্ষা বোর্ড </a></li> -->
             
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div>
            <h3>যোগাযোগঃ</h2>
            <p>   বগুড়া সদর, জেলাঃ বগুড়া। </p>
            <address>
             মোবাইলঃ 0123456789  <br> ইমেইলঃ example@gmail.com
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom" style="text-align:center;background-color: #F2184F !important">
      <p class="copyright" style="text-align:left;">Copyright &copy; 2011 - <?= date('Y') ?> <a href="http://www.worldehsan.com/">Ehsan Software (A Sister Concern of Ehsan Group).</a></p>
      <p class="developer" style="color:#fff;">Marketing By: Ehsan Marketing (EM)</p>
    </div>
  </footer>
</div>
<script src="assets/front/assets/js/jquery.min.js"></script> 
<script src="assets/front/assets/js/wow.min.js"></script> 
<script src="assets/front/assets/js/bootstrap.min.js"></script> 
<script src="assets/front/assets/js/slick.min.js"></script> 
<script src="assets/front/assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/front/assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/front/assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/front/assets/js/custom.js"></script>

<script>
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }

    $(document).ready(function () {
        $('.alert').delay(3000).fadeOut(2000,function () {
            $(this).alert('close');
        });
    });

</script>

<script type="text/javascript" language="javascript">
    $(document).ready(function($) {
        $('#printDiv').click(function (evt) {
            evt.preventDefault();
            $('#printableArea').printElement(
                {
                    overrideElementCSS: [
                        'assets/front/assets/css/bootstrap.min.css',
                        {
                            href: '/assets/front/assets/css/bootstrap.min.css',
                            media: 'print'
                        },
                    ],
                });
        });
    });
</script>

</body>
</html>