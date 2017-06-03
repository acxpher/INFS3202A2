<?php include'header.php' ?>

<body>
	<div class="container">
		<ol class="breadcrumb">
		 <li><a href="index.php">Home</a></li>
		 <li class="active">News</li>
		</ol>
	</div>
	<div class="news-model">

		<div class="container">

			<div class="col-md-9 news-model-sec">
				<section id="news-content">
					<h1>Latest News</h1><br/>




					<div id="first-news">
						<hr>
						<h2 id="news1"></h2>
						<hr>

						<div class="video"><iframe src="https://www.youtube.com/embed/U0D3AOldjMU?ecver=2" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>
						<br><br><br>
						<i><h3>Spidey tests out his new suit & bonds with Iron Man!</h3></i>

						<p id="spider"></p>

						<div class="centerbtn">
							<button class="btn btn-lg btn-default" type="button" onclick="loadDoc()">Read more</button>
							<button class="btn btn-lg btn-default" type="button" onclick="loadDoc4()">Close</button><br/>
						</div>


							<script src="ajax/json.php" ></script>
							<br><br><br><br>

					</div>
					


					<div id="second-news">
						<hr>
						<h2>MARVEL STUDIOS' GUARDIANS OF THE GALAXY VOL. 2 TAKES #1 AT THE BOX OFFICE</h2>
						<hr>

						<img src="images/GOTGv2.jpg" >
						<br><br><br>
						<i><h3>The Guardians knocked it out of the galaxy earning $146.5M this weekend!</h3></i>

						<p id="guard"></p><br>

						<div class="centerbtn">
							<button class="btn btn-lg btn-default" type="button" onclick="loadDoc2()">Read more</button>
							<button class="btn btn-lg btn-default" type="button" onclick="loadDoc5()">Close</button>

						</div>
						<br/>


						<br><br><br><br>


					</div>

					<div id="third-news">
						<hr>
						<h2>DO YOU WANT TO HANG WITH ROBERT DOWNEY JR. ON THE SET OF THE LATEST 'AVENGERS'?</h2>
						<hr>

						<img src="images/rdj.jpg" >
						<br><br><br>
						<i><h3>Get Set Ready and Support Random Act Funding!</h3></i>
						

						<p id="rdj"></p><br>

							

						<div class="centerbtn">
							<button class="btn btn-lg btn-default" type="button" onclick="loadDoc3()">Read more</button>
							<button class="btn btn-lg btn-default" type="button" onclick="loadDoc6()">Close</button>

						</div>
						<br/>




						<br><br><br><br>

					</div>

					

				</section>
				











			</div>
		</div>
	</div>

</body>



<?php include'footer.php' ?>
