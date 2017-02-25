

function openSearch() {
    document.getElementById("mySearch").style.height = "100%";
    Object.assign(document.getElementById("mainNav").style,{display:"none"});
    document.body.style.overflow = 'hidden';
    $('.filter-index').css({"z-index":"0"});
    $('.footer').css({"z-index":"0"});


}

function closeSearch() {
    document.getElementById("mySearch").style.height = "0%";
          Object.assign(document.getElementById("mainNav").style,{display:"block",animation:"fadeIn .71s"});
	  document.body.style.overflow = 'visible';
    $('.filter-index').css({"z-index":"400"});
    $('.footer').css({"z-index":"501"});

}


function openbooking() {
    document.getElementById("myBooking").style.height = "100%";
    Object.assign(document.getElementById("mainNav").style,{display:"none"});
    document.body.style.overflow = 'hidden';
}
function openfilter() {
  document.getElementById("myFilter").style.height = "100%";
    document.getElementById("myFilter").style.overflowY = "auto";
    Object.assign(document.getElementById("mainNav").style,{display:"none"});
    document.body.style.overflow = 'hidden';
    $('.filter-list').css({"padding-top":"40px"});
    $('.filter-index').css({"z-index":"0"});


}
function closefilter() {
  document.getElementById("myFilter").style.height = "0%";
    document.getElementById("myFilter").style.overflowY = "none";
    Object.assign(document.getElementById("mainNav").style,{display:"block",animation:"fadeIn .71s"});
    document.body.style.overflow = 'visible';
    $('.filter-index').css({"z-index":"400"});

}
function closebooking() {
    document.getElementById("myBooking").style.height = "0%";
          Object.assign(document.getElementById("mainNav").style,{display:"block",animation:"fadeIn .71s"});
	  document.body.style.overflow = 'visible';

}
