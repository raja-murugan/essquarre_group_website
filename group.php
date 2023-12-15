<?php include('header.php') ?>

<style>
	* {
		box-sizing: border-box;
	}

	.row>.column {
		padding: 0 8px;
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	.column {
		float: left;
		width: 25%;
	}

	/* The Modal (background) */
	.modal {
		display: none;
		position: fixed;

		padding-top: 100px;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: black;
	}

	/* Modal Content */
	.modal-content {
		position: relative;
		margin: auto;
		padding: 0;
		width: 90%;
		max-width: 1200px;
	}

	/* The Close Button */
	.close {
		color: white;
		position: absolute;
		top: 10px;
		right: 25px;
		font-size: 35px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: #999;
		text-decoration: none;
		cursor: pointer;
	}

	.mySlides {
		display: none;
	}

	.cursor {
		cursor: pointer;
	}

	/* Next & previous buttons */
	.prev,
	.next {
		cursor: pointer;
		position: absolute;
		top: 50%;
		width: auto;
		padding: 16px;
		margin-top: -50px;
		color: white;
		font-weight: bold;
		font-size: 20px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
		user-select: none;
		-webkit-user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
		right: 0;
		border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover,
	.next:hover {
		background-color: rgba(0, 0, 0, 0.8);
	}

	/* Number text (1/3 etc) */
	.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
	}

	.caption-container {
		text-align: center;
		background-color: black;
		padding: 2px 16px;
		color: white;
	}

	.demo {
		opacity: 0.6;
	}

	.active,
	.demo:hover {
		opacity: 1;
	}

	img.hover-shadow {
		transition: 0.3s;
	}

	.hover-shadow:hover {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	/* 100% Image Width on Smaller Screens */
	@media only screen and (max-width: 700px) {
		.modal-content {
			width: 100%;
		}
	}

.column {
  position: relative;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
  margin-bottom: -1px;
}

.column:hover .overlay {
  height: 100%;
}

.text {
  color: white;
  font-size: 16px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>



<!-- Start of Breadcrumb section
	============================================= -->
<section id="arck-breadcrumb" class="arck-breadcrumb-section-2 position-relative" data-background="assets/img/bg/ar-shape.png">
	<div class="container">
		<div class="arck-breadcrumb-content position-relative text-center headline-2 ul-li">
			<h1>Team</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Team</li>
			</ul>
		</div>
	</div>
</section>
<!-- End of Breadcrumb section
	============================================= -->
	<div class="arck-section-title pt-5">
		<div class="container">
			<h1>"One Stop Solution For Your All Construction Needs!"</h1>
			<b>
				<div class="row pt-3">
					<div class="col-6 text-center" >
						<li>ESSQUARRE ASSOCIATES</li>
					</div>
					<div class="col-6 text-left">
						<li>SIVARAAJ SAW MILL & TIMBERS</li>
					</div>
				</div>
				<div class="row">
					<div class="col-6 text-center" style="padding-left: 30px;">
						<li>ESSQUARRE CONSULTANTS</li>
					</div>
					<div class="col-6 text-left">
						<li>SIVARAAJ AGENCY</li>
					</div>
				</div>
				<div class="row">
					<div class="col-6 text-center" style="padding-left: 50px;">
						<li>ESSQUARRE CONSTRUCTIONS</li>
					</div>
					<div class="col-6 text-left">
						<li>SIVARAAJ CONSTRUCTIONS</li>
					</div>
				</div>
			</b>
		</div>
		<div class="container pt-3">
			<p>
			Welcome to the diverse world of Essquarre Groups, where excellence meets innovation across various domains. Essquarre Associates leads in strategic consulting, providing insightful solutions for business growth. Essquarre Consultants are the architects of visionary designs, shaping spaces and experiences with a blend of creativity and precision. Essquarre Constructions stands as the backbone, crafting robust structures that stand the test of time. Sivaraaj Saw Mill & Timbers contribute to the group's legacy with a commitment to quality timbering for over 50 years. 
			Sivaraaj Agency excels in comprehensive services, meeting various needs with efficiency and reliability. Sivaraaj Constructions, under the umbrella of Essquarre Groups, paves the way for the future, constructing not just buildings but lasting legacies. Together, these entities form a powerful conglomerate dedicated to excellence, innovation, and a holistic approach to various industry verticals.
			</p>
		</div>
	</div>
	

<!-- Start of Team feed section
	============================================= -->
<section id="arck-team-feed" class="arck-team-feed-section inner-page-padding">

	<div class="row">
		<div class="column">
			<img src="assets/img/team/tm1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
			<div class="overlay">
				<div class="text">
					<b>Mr. SURESH SUBRAMANIAN<br>
					B.Arch.,<br>
					CEO & Founder of (Essquarre Groups of Companies)</b><br>
					Designing dreams for over 17 years – my architectural expertise transforms spaces into extraordinary experiences.
				</div>
			</div>
		</div>
		<div class="column">
			<img src="assets/img/team/tm2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
			<div class="overlay">
				<div class="text">
					<b>Mrs. E.SANGEETHA M.B.A.,<br>
					DIRECTOR of (Essquarre Associates)</b><br>
					With over 13 years as a director, my experience shapes success, leading with innovation and expertise.
				</div>
			</div>
		</div>
		<div class="column">
			<img src="assets/img/team/tm3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
			<div class="overlay">
				<div class="text">
					<b>Mr. S.ELANGOVAN B.COM.,<br>
					DIRECTOR of <br> (Sivaraaj Saw Mill & Timbers and Sivaraaj Agency)</b><br>
					Steering Sivaraaj Saw Mill for 50+ years, unwavering commitment to timber excellence, enduring through generations.
				</div>
			</div>
		</div>
		<div class="column">
			<img src="assets/img/team/tm4.jpg" style="width:1000%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
			<div class="overlay">
				<div class="text">
				<b>Mr. E.SHIVARAJ M.E(Struct.)<br>
				DIRECTOR of <br>(Sivaraaj Constructions)</b><br>
				For over 15 years, Sivaraaj Constructions crafts engineering excellence, molding strength and durability with precision.
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-3 text-center">
			<b>	
				Mr. SURESH SUBRAMANIAN B.Arch.,
				<p>CEO & Founder</p>
			</b>
		</div>
		<div class="col-3 text-center">
			<b>	
				Mrs. E.SANGEETHA M.B.A.,
				<p>DIRECTOR</p>
			</b>
		</div>
		<div class="col-3 text-center">
			<b>	
				Mr. S.ELANGOVAN B.COM.,
				<p>DIRECTOR</p>
			</b>
		</div>
		<div class="col-3 text-center">
			<b>	
				Mr. E.SHIVARAJ M.E(Struct)
				<p>DIRECTOR</p>
			</b>
		</div>
	</div>

	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides">
				<img src="assets/img/team/tm1.jpg" style="margin-left: 400px">
			</div>

			<div class="mySlides">
				<img src="assets/img/team/tm2.jpg" style="margin-left: 400px">
			</div>

			<div class="mySlides">
				<img src="assets/img/team/tm3.jpg" style="margin-left: 400px">
			</div>

			<div class="mySlides">
				<img src="assets/img/team/tm4.jpg" style="margin-left: 400px">
			</div>


			<div class="caption-container">
				<p id="caption"></p>
			</div>
		</div>
	</div>
</section>

<!-- Start of Sponsor section
	============================================= -->
	<section id="arck-sponsor" class="arck-sponsor-section">
		<div class="container">
			<div class="arck-sponsor-slider">
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp1.png">
				</div>
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp2.png">
				</div>
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp3.png">
				</div>
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp4.png">
				</div>
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp5.png">
				</div>
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp1.png">
				</div>
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp2.png">
				</div>
				<div class="arck-sponsor-slider-item">
					<img src="assets/img/sponsor/sp3.png">
				</div>
			</div>
		</div>
	</section>		
<!-- End of Sponsor section
	============================================= -->

<script>
	function openModal() {
		document.getElementById("myModal").style.display = "block";
	}

	function closeModal() {
		document.getElementById("myModal").style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
		if (n > slides.length) {
			slideIndex = 1
		}
		if (n < 1) {
			slideIndex = slides.length
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
		captionText.innerHTML = dots[slideIndex - 1].alt;
	}
</script>
<!-- End of Team Feed section
	============================================= -->
<?php include('footer.php') ?>