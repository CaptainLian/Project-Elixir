<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Upload Exercise - Elixir</title>

		<!-- CSS Layout Files -->
		<link href="{{asset('styles/bootstrap.min.css')}}" rel="stylesheet" />
		<link href="{{asset('styles/style.css')}}" rel="stylesheet" />
		<link href="{{asset('styles/default.css')}}" rel="stylesheet" />
		<link href="{{asset('styles/elixir-style.css')}}" rel="stylesheet" />
		<link href="{{asset('styles/test.css')}}" rel="stylesheet" />
		<link href="{{asset('styles/examples.css')}}" rel="stylesheet" />

		<!-- Suggestion Text  Field-->
		<link href="{{asset('css/example-styles.css')}}" rel="stylesheet" >

	</head>
	<body>
		<div id="wrapper">
			<!-- Navigation bar -->
			<header>
				<div class="navbar navbar-default navbar-static-top">
					<div class="container">
						<!-- Elixir name and logo -->
						<a class="navbar-brand" href="#"><images class="elixir-logo" src="images/flask.png" />PROJECT ELIXIR</a>
						<!-- End of Elixir name and logo -->
						<!-- Navigation buttons -->
						<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li><a href="/upload">UPLOAD</a></li>
								<li class="active"><a href="/search">SEARCH</a></li>
							</ul>
						</div>
						<!-- End of navigation buttons -->
					</div>
				</div>
			</header>
			<!-- End of navigation bar -->

			<!-- Banner -->
		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cta-text">


							<!-- Divider -->
							<div class="solidline"></div>
							<!-- End of divider -->
						</div>
					</div>
				</div>
			</div>
		</section>
			<!-- End of banner -->


			<section  id="search-div">

				<div  id="test">
				<!-- Search bar -->
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form autosuggest="off">
								<div id="the-basics">
									<input type="text" id="search-bar"  class="typeahead form-control" type="text" placeholder="Enter a subject area, topic, or keyword">
									<!-- <a href=""><images  id="iconSearch" src="images/search.png"> </images></a> -->
								</div>
						</form>
						</div>
					</div>


					<images id="bg" src="images/test2.png"> </images>
				</div>
				<!-- End of search bar -->
				<!-- Search results -->
				<!-- NOTE TO BACKEND: Do not remove the search-result items. Instead, merely replace their contents and hide as necessary. -->
				<div id="search-results">
					<images id="loading" src="images/cube.svg" />
					<div class="container" id="results">
						<div class="search-result">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 search-item">
									<h3 class="search-result-title">Tracing Exercise</h3>
									<p class="search-result-author">by Thomas Tiam-Lee</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">java</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">easy</a>
									</div>
									<p class="search-result-instruction">Trace the following programs and determine the value of x.</p>
									<p class="main-area">Introductory Programming</p>
									<p class="sub-area">Variables and Expressions</p>
									<button id="testBTN" class="btn view-button">VIEW EXERCISE</button>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-md-offset-2 search-item">
									<h3 class="search-result-title">Hardcore Derivatives</h3>
									<p class="search-result-author">by Stanley Tan</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">math</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">difficult</a>
									</div>
									<p class="search-result-instruction">Evaluate the following derivatives. WARNING: It is very difficult.</p>
									<p class="main-area">Calculus</p>
									<p class="sub-area">Limits and Derivatives</p>
									<button class="btn view-button">VIEW EXERCISE</button>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-md-offset-2 search-item">
									<h3 class="search-result-title">Modified True or False about Philippine Constitution</h3>
									<p class="search-result-author">by Arleigh Dela Cruz</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">philippines</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">modified true or false</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">constitution</a>
									</div>
									<p class="search-result-instruction">For each of the following statements, write TRUE if the statement is true. If the statement is false, write the word that should replce the underlined word to make it true.</p>
									<p class="main-area">Philippine History</p>
									<p class="sub-area">The Second Philippine Republic</p>
									<button class="btn view-button">VIEW EXERCISE</button>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-md-offset-2 search-item">
									<h3 class="search-result-title">Finding the Area</h3>
									<p class="search-result-author">by Manuel Carl Toleran Jr.</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">manu</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">:---)</a>
									</div>
									<p class="search-result-instruction">Find the area of the following.</p>
									<p class="main-area">Geometry</p>
									<p class="sub-area">Area and Perimeter</p>
									<button class="btn view-button">VIEW EXERCISE</button>
								</div>
							</div>
						</div>

						<!-- Page controls -->
						<div id="page-controls">
							<div class="row">
								<div class="col-md-3 col-md-offset-7">
									<div class="pull-right">
										<span>Showing 1-3 of 30</span>
										<button class="btn page-control">&#8249;</button>
										<button class="btn page-control">&#8250;</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End of page controls -->
					</div>
				</div>
			</div>
				<!-- End of search results -->
			</section>
			<!-- Footer -->
			<footer>
				<div id="sub-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="copyright">
									<p>&copy; 2017 Project Elixir. All right reserved.</p>
								</div>
							</div>
							<div class="col-lg-6">
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End of footer -->
		</div>

		<!-- Overlay -->
		<div id="overlay">

		</div>
		<!-- End of overlay -->

		<div class="container overlay-content">
				<!-- Exercise Preview -->
				<div class="row">
					<div class="col-md-3 hidden-sm">
						<!-- Results -->
						<div class="container" id="side-result-items">
							<div class="row">
								<div class="col-md-3 side-result-item active">
									<h3 class="search-result-title">Tracing Exercise</h3>
									<p class="search-result-author">by Thomas Tiam-Lee</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">java</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">easy</a>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3 side-result-item">
									<h3 class="search-result-title">Hardcore Derivatives</h3>
									<p class="search-result-author">by Stanley Tan</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">math</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">difficult</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 side-result-item">
									<h3 class="search-result-title">Modified True or False on Philippine Constitution</h3>
									<p class="search-result-author">by Arleigh Dela Cruz</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">philippines</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">constitution</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 side-result-item">
									<h3 class="search-result-title">Find the Area</h3>
									<p class="search-result-author">by Manuel Carl Toleran</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">manu</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">:---)</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 side-result-item">
									<h3 class="search-result-title">Tracing Exercise</h3>
									<p class="search-result-author">by Thomas Tiam-Lee</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">java</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">easy</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 side-result-item">
									<h3 class="search-result-title">Tracing Exercise</h3>
									<p class="search-result-author">by Thomas Tiam-Lee</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">java</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">easy</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 side-result-item">
									<h3 class="search-result-title">Tracing Exercise</h3>
									<p class="search-result-author">by Thomas Tiam-Lee</p>
									<div class="search-result-tags">
										<a href="#" class="btn btn-medium btn-rounded btn-theme">java</a>
										<a href="#" class="btn btn-medium btn-rounded btn-theme">easy</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Results -->
					</div>
					<div id="preview" class="col-md-9">
						<div id ="exercise-preview">
							<h3>Tracing Exercise</h3>
							<br />
							<h3>Instructions</h3>
							<p>Evaluate the following expressions</p>
							<br />
							<p>1) 5 + 5</p>
							<p>2) 3 + 2 - (2 - 1)</p>
							<p>3) 5 * 2 + 3</p>
							<p>4) 10 - 8 / 2 + 3</p>
							<p>5) 99 - 36 * 2</p>
							<p>6) (5 + 3 * (2 - 1)) - 2</p>
							<p>7) 1 + 2 + 3 * 4</p>
							<p>8) 7 - 2 + 3 / 2</p>
							<p>9) (2 + 1 * 3) / 5</p>
							<p>10) 0 * 2 + 3</p>
						</div>
					</div>
				</div>
				<!-- End of Exercise Preview -->
			</div>

		<!-- JavaScript references -->
		<script src="{{asset('js/text-field-suggester.js')}}"></script>
		<script src="{{asset('js/jquery.js')}}"></script>
		<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

		<script src="{{asset('js/jquery.smartWizard.min.js')}}"></script>

		<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
		<script src="{{asset('js/tagmanager.js')}}"></script>
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

		<script src="{{asset('js/bloodhound.js')}}"></script>
		<script src="{{asset('js/bloodhound.min.js')}}"></script>
		<script src="{{asset('js/typeahead.bundle.js')}}"></script>
		<script src="{{asset('js/typeahead.jquery.js')}}"></script>

		<script src="{{asset('js/test2.js')}}"></script>
		<!-- End of JavaScript references -->

		<!-- Scripts -->
		<script>
			function updateHeight() {
				var height = $(document).height();
				$("#search-div").css("min-height", (height - 200) + "px");
			}

			function displaySearchResults() {
				$("#the-basics").animate({
					"top": "0px"
				}, 500, "swing", function () {
					$("div#search-results").css("visibility", "visible");
					setTimeout(function () {
						$("div#search-results > #loading").css("visibility", "hidden");
						$("div#search-results > #results").css("display", "block");
						$("div#search-results > #results").css("visibility", "visible");
						$("div#search-results > #results").animate({
							opacity: "1"
						}, 200);
					}, 1000);

				});

				$("#bg").css("display", "none");
			}

			function showExercise() {
				console.log('showExercise()');
				$("#overlay").css("display", "inline");
				$(".overlay-content").css("display", "inline");
				$("#search-bar").css("display", "none");
				$("#the-basics").css("display", "none");
				console.log('END showExercise() ');
			}

			$(document).ready(

				function () {

					console.log("DOCUMENT READY");

					var triggered = false;
					$("input#search-bar").keyup(function () {


						console.log("KEY UPED READY");

						if (triggered) return;
						if ($("input#search-bar").val().length > 1) {
							triggered = true;
							updateHeight();
							displaySearchResults();

						}
					});


					$(".btn.view-button").click(function () {
						console.log("BUTTON CLICKED");
						showExercise();
					});
				}//function
			)//ready;
		</script>
	</body>
</html>
