function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }



function myFunc(myObj) {
  document.getElementById("news1").innerHTML = myObj.title;
}


function loadDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("guard").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax/guard.txt", true);
  xhttp.send();
}

function loadDoc5() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("guard").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax/empty.txt", true);
  xhttp.send();
}


function loadDoc3() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("rdj").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "ajax/rdj.txt", true);
    xhttp.send();
}
function loadDoc6() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("rdj").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "ajax/empty.txt", true);
    xhttp.send();
}



function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("spider").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax/spider_x.txt", true);
  xhttp.send();
}

function loadDoc4() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("spider").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "ajax/empty.txt", true);
    xhttp.send();
}






