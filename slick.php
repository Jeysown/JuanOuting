<html>
  <head>
  <title>Pogi qhue</title>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
  </head>
  <style media="screen">
  /* Slider */
.slick-slider {
position: relative;
display: block;
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
-ms-touch-action: none;
touch-action: none;
-webkit-tap-highlight-color: transparent;
}

.slick-list {
position: relative;
overflow: hidden;
display: block;
margin: 0;
padding: 0;
}
.slick-list:focus {
outline: none;
}
.slick-loading .slick-list {
background: white url(./ajax-loader.gif) center center no-repeat;
}
.slick-list.dragging {
cursor: pointer;
cursor: hand;
}

.slick-slider .slick-list,
.slick-track,
.slick-slide,
.slick-slide img {
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0);
}

.slick-track {
position: relative;
left: 0;
top: 0;
display: block;
zoom: 1;
}
.slick-track:before, .slick-track:after {
content: "";
display: table;
}
.slick-track:after {
clear: both;
}
.slick-loading .slick-track {
visibility: hidden;
}

.slick-slide {
float: left;
height: auto;
min-height: 1px;
display: none;
}
.slick-slide img {
display: block;
}
.slick-slide img.slick-loading {
background: white url(./ajax-loader.gif) center center no-repeat;
padding-bottom: 100%;
}
.slick-slide.dragging img {
pointer-events: none;
}
.slick-initialized .slick-slide {
display: block;
}
.slick-loading .slick-slide {
visibility: hidden;
}
.slick-vertical .slick-slide {
display: block;
height: auto;
border: 1px solid transparent;
}

.content {
width: 80%;
margin: auto;
}

.blue, html {
background: #3498db;
color: #fff;
}
.blue h3, html h3 {
background: #fff;
color: #3498db;
font-size: 36px;
line-height: 200px;
margin: 10px;
padding: 2%;
text-align: center;
border: 1px solid #999;
}


  </style>
  <body>
    <div class="" style="border:1px solid black;height:400px;width:400px">

    </div>
    <section id="features" class="blue">
    			<div class="content">

    				<h2>Responsive Display</h2>
    				<div class="slider responsive">

    					<div >
    						<h3 style="width:300px;height:220px;background:blue;">1</h3>
             </div>
             <div >
               <h3 style="width:300px;height:220px;background:blue;">2</h3>
            </div>
            <div >
              <h3 style="width:300px;height:220px;background:blue;">3</h3>
           </div>
           <div >
             <h3 style="width:300px;height:220px;background:blue;">4</h3>
          </div>
    				</div>
    			</div>
    		</section>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

  <script type="text/javascript">

  $('.responsive').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true
});
  </script>
<script type="text/javascript">
// $(document).ready(function() {
//
//     $('.responsive').slick({
//         infinite: true,
//         speed: 300,
//         slidesToShow: 8,
//         slidesToScroll: 1,
//         responsive: [{
//             breakpoint: 1024,
//             settings: {
//                 slidesToShow: 6,
//                 slidesToScroll: 1,
//                 // centerMode: true,
//
//             }
//
//         }, {
//             breakpoint: 800,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 2,
//                 dots: true,
//                 infinite: true,
//
//             }
//
//
//         }, {
//             breakpoint: 600,
//             settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 2,
//                 dots: true,
//                 infinite: true,
//
//             }
//         }, {
//             breakpoint: 480,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 dots: true,
//                 infinite: true,
//                 autoplay: true,
//                 autoplaySpeed: 2000,
//             }
//         }]
//     });
//
//
// });
</script>
  </body>
</html>
