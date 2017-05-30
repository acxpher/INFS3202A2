<?php include'header.php' ?>

<div class="news-model">
	<div class="container">
		<ol class="breadcrumb">
		 <li><a href="index.php">Home</a></li>
		 <li class="active">News</li>
		</ol>
		<div class="col-md-9 news-model-sec">
			<section id="news-content">
				<h1>Latest News</h1><br/><br/><br/>




				<div id="first-news">
					<hr>
					<h3 id="news1"></h3>
					<hr>

					<div class="video"><iframe src="https://www.youtube.com/embed/U0D3AOldjMU?ecver=2" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>
					

					<p id="spider"></p><br>

					<button class="btn btn-lg btn-default" type="button" onclick="loadDoc()">Read more</button>
					<button class="btn btn-lg btn-default" type="button" onclick="loadDoc4()">Close</button><br/>



					<script>
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



						</script>

						<script>
						function myFunc(myObj) {
						  document.getElementById("news1").innerHTML = myObj.title;
						}
						</script>
						<script src="ajax/json.php"></script>
						<br><br><br><br>

				</div>
				


				<div id="second-news">
					<hr>
					<h3>MARVEL STUDIOS' GUARDIANS OF THE GALAXY VOL. 2 TAKES #1 AT THE BOX OFFICE</h3>
					<hr>

					<img src="images/GOTGv2.jpg">


					<p id="guard"></p><br>
						<script>
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


					$(document).ready(function(){
					    $("#less").click(function(){
					        $("#guard").toggle();
					    });
						});
						</script>

					<button class="btn btn-lg btn-default" type="button" onclick="loadDoc2()">Read more</button>
					<button class="btn btn-lg btn-default" type="button" onclick="loadDoc5()">Close</button><br/>


					<br><br><br><br>


				</div>

				<div id="third-news">
					<hr>
					<h3>DO YOU WANT TO HANG WITH ROBERT DOWNEY JR. ON THE SET OF THE LATEST 'AVENGERS'?</h3>
					<hr>

					<img src="images/rdj.jpg">
					

					<p id="rdj"></p><br>
						<script>
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
					$(document).ready(function(){
					    $("#less").click(function(){
					        $("#rdj").toggle();
					    });
						});
						</script>


					<button class="btn btn-lg btn-default" type="button" onclick="loadDoc3()">Read more</button>
					<button class="btn btn-lg btn-default" type="button" onclick="loadDoc6()">Close</button><br/>




					<br><br><br><br>

				</div>







				

			</section>
			











		</div>
	</div>
</div>


<?php include'footer.php' ?>
