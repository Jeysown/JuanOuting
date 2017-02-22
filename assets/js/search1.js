

function openSearch() {
    document.getElementById("mySearch").style.height = "100%";
    Object.assign(document.getElementById("mainNav").style,{display:"none"});
    document.body.style.overflow = 'hidden';


}

function closeSearch() {
    document.getElementById("mySearch").style.height = "0%";
          Object.assign(document.getElementById("mainNav").style,{display:"block",animation:"fadeIn .71s"});
	  document.body.style.overflow = 'visible';

}


function openSearch1() {
    document.getElementById("booking").style.height = "100%";
    Object.assign(document.getElementById("mainNav").style,{display:"none"});
    document.body.style.overflow = 'hidden';


}

function closeSearch1() {
    document.getElementById("booking").style.height = "0%";
          Object.assign(document.getElementById("mainNav").style,{display:"block",animation:"fadeIn .71s"});
	  document.body.style.overflow = 'visible';

}
