<?php include'header.php' ?>
<!----->
<div class="news-model">
	<div class="container">
<ol class="breadcrumb">
 <li><a href="index.html">Home</a></li>
 <li class="active">News</li>
</ol>
<div class="col-md-9 news-model-sec">

<h2>Latest News</h2><br/>
<h3 id="news"></h3>
<p id="spider"></p><br/>
<button type="button" onclick="loadDoc()">Read more</button>
<button type="button" id="less">Read less</button><br/>

<script>
	function loadDoc() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("spider").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "ajax/spider.txt", true);
	  xhttp.send();
}
$(document).ready(function(){
    $("#less").click(function(){
        $("#spider").toggle();
    });
	});
	</script>
	<script>
	function myFunc(myObj) {
	  document.getElementById("news").innerHTML = myObj.title;
	}
	</script>
	<script src="ajax/json.php"></script>

</div>
</div>
</div>


<?php include'footer.php' ?>
