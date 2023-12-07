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

	img {
		margin-bottom: -4px;
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
</style>



<!-- Start of Breadcrumb section
	============================================= -->
<section id="arck-breadcrumb" class="arck-breadcrumb-section-2 position-relative" data-background="assets/img/bg/ar-shape.png">
	<div class="slider-side-content position-absolute">
		<span class="archx-slider-side1 position-absolute"><a href="#">Contact@gmail.com</a></span>
	</div>
	<div class="container">
		<div class="arck-breadcrumb-content position-relative text-center headline-2 ul-li">
			<h1>Team</h1>
			<ul>
				<li><a href="#">Home</a></li>
				<li>Team</li>
			</ul>
		</div>
	</div>
</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Team feed section
	============================================= -->
<section id="arck-team-feed" class="arck-team-feed-section inner-page-padding">

	<div class="row">
		<div class="column">
			<img src="assets/img/team/tm3.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
		</div>
		<div class="column">
			<img src="assets/img/team/tm2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
		</div>
		<div class="column">
			<img src="assets/img/team/tm1.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
		</div>
		<div class="column">
			<img src="assets/img/team/tm3.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
		</div>
	</div>

	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides">
				<img src="assets/img/team/tm3.jpg" style="margin-left: 400px">
			</div>

			<div class="mySlides">
				<img src="assets/img/team/tm2.jpg" style="margin-left: 400px">
			</div>

			<div class="mySlides">
				<img src="assets/img/team/tm1.jpg" style="margin-left: 400px">
			</div>

			<div class="mySlides">
				<img src="assets/img/team/tm3.jpg" style="margin-left: 400px">
			</div>


			<div class="caption-container">
				<p id="caption"></p>
			</div>
		</div>
	</div>
</section>

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