//Get geolocationData
var geolocationData = null;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    //document.getElementById("demo").innerHTML = myObj.ip + myObj.country_code;
    geolocationData = myObj;
  }
};
xmlhttp.open("GET", "http://freegeoip.net/json/", true);
xmlhttp.send();


//funtions
function getQtyPhotoLikes(photoLink, divname = "") {
  //alert("hola");
  if (photoLink == "") {
    return;
  } else {

    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        if (document.getElementById(divname)) {
          //alert("encontre");
          document.getElementById(divname).innerHTML = this.responseText;
        }
        //alert(divname);
        if (document.getElementById("loader")) {
          var x = document.getElementById("loader");
          x.style.display = "none";
        }
      }
    };

    xmlhttp.open("GET", "getQtyPhotoLikes.php?q=" + photoLink, true);

    xmlhttp.send();
  }
}

function setLikeToPhoto(photoLink, caption = "", username = "", photoURL = "", divname = "") {
  //alert("HOLAaaaaaaaaaaaaa");
  //show();
  //alert(divname);
  if (document.getElementById("loader")) {

    var x = document.getElementById("loader");
    x.style.display = "block";
  }
  if (photoLink == "") {

    return;
  } else {

    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        getQtyPhotoLikes(photoLink, divname);
        //document.getElementById("qtyPhotoLikes").innerHTML = this.responseText;
        //alert(thi.responseText);
      }
    };
    xmlhttp.open("GET", "setLikeToPhoto.php?q=" + photoLink + "&ip=" + geolocationData.ip + "&city=" + geolocationData.city + "&country_code=" + geolocationData.country_code + "&latitude=" + geolocationData.latitude + "&longitude=" + geolocationData.longitude + "&caption=" + caption + "&username=" + username + "&photoURL=" + photoURL, true);
    xmlhttp.send();
  }
}

function goToProfileByUsername(username) {
  window.location.href = "./index.php?username=" + username;
}

function setSuperLike(username, photoLink) {
  setLikeToPhoto(photoLink);
  goToProfileByUsername(username);
  //window.location.href = "./index.php?username="+username;
}

function goToTheGallery() {
  window.location.href = "./thegallery.php";
}

function goToSearch() {
  window.location.href = "./search.html";
}