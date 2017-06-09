
<!-- Database -->
<div class="loaded-slide">
    <div class="row deck-row">
          <div class="featured-title">
            Antipolo
          </div>
          <div class="slider responsive1">
            <div>
              <div class="col-lg-12 card card-responsive">
                <img src="http://www.planwallpaper.com/static/images/Beautiful-Scenery-HD-Wallpapers-Pictures-11.jpg" alt="" class="r-img">
                <p class="r-content"><b class="r-price">₱27000</b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                <p class="r-name"> La Reprezza Resort </p>
              </div>

            </div>
            <div class="">
              <div class="col-lg-12 card card-responsive">
                <img src="http://wallpapercave.com/wp/JAA5qgn.jpg" alt="" class="r-img">
                <p class="r-content"><b class="r-price">₱8500 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                <p class="r-name"> Joremi Private Resort </p>
              </div>
            </div>
            <div class="">
              <div class="col-lg-12 card card-responsive">
                <img src="https://www.planwallpaper.com/static/images/alone-wolf-111810-2048x1536.jpg" alt="" class="r-img">
                <p class="r-content"><b class="r-price">₱7000 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                <p class="r-name"> Amore Mio Resort </p>
              </div>
            </div>
            <div class="">
              <div class="col-lg-12 card card-responsive">
                <img src="https://www.planwallpaper.com/static/images/Hd-superman-free-wallpaper_jk4XZN4.jpg" alt="" class="r-img">
                <p class="r-content"><b class="r-price">₱36000 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                <p class="r-name"> CJC Resort </p>
              </div>
            </div>
          </div>
    </div>
</div>

  <script type="text/javascript">


function createSlick(){

	$(".responsive1").not('.slick-initialized').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        arrows:false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        arrows:false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        arrows:false
      }
    }

  ]
});

}

createSlick();

//Now it will not throw error, even if called multiple times.
$(window).on( 'resize', createSlick );

  </script>
