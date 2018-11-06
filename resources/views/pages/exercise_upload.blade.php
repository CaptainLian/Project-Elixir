<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Upload Exercise - Elixir</title>

		<!-- Smart Wizard CCS Files -->
		<link href="/styles/smart_wizard.css" rel="stylesheet" type="text/css" />
		<link href="/styles/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
		<!-- Chosen CSS Files -->
		<link href="/styles/chosen.min.css" rel="stylesheet" />
		<!-- Tag Manager CSS Files -->
		<link href="/styles/tagmanager.css" rel="stylesheet" />
		<!-- CSS Layout Files -->
		<link href="/styles/bootstrap.min.css" rel="stylesheet" />
		<link href="/styles/style.css" rel="stylesheet" />
		<link href="/styles/default.css" rel="stylesheet" />
		<link href="/styles/elixir-style.css" rel="stylesheet" />

		<!-- JavaScript references -->
		<!--
		<script src="/js/jquery.js" defer="defer"></script>
		-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" defer="defer"></script>
		<script src="/js/jquery.easing.1.3.js" defer="defer"></script>
		<script src="/js/bootstrap.min.js" defer="defer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js" defer="defer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js" defer="defer"></script>
		<script src="/js/jquery.smartWizard.min.js" defer="defer"></script>
		<script src="/js/chosen.jquery.min.js" defer="defer"></script>
		<script src="/js/tagmanager.js" defer="defer"></script>
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js" defer="defer"></script>

		<script src="/js/pages/exercise_upload.js" defer="defer"></script>
		<!-- End of JavaScript references -->
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
								<li class="active"><a href="upload">UPLOAD</a></li>
								<li><a href="search">SEARCH</a> </li>
							</ul>
						</div>
						<!-- End of navigation buttons -->
					</div>
				</div>
			</header>
			<!-- End of navigation bar -->

			<!-- Banner -->
			<section id="upload-banner" class="callaction">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="cta-text">
								<images id="banner" src="images/banner.png"> </images>
								<h1>UPLOAD EXERCISE</h1>
								<!-- Divider -->
								<div class="solidline"></div>
								<!-- End of divider -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End of banner -->

			<!-- Content -->
			<section class="content">
				<div class="container">
					<div id="smartwizard" class="row">
						<!-- Tabs for the steps -->
						<ul>
							<li><a href="#step-1"><big>STEP 1</big><br /><medium>Basic information</medium></a></li>
							<li><a href="#step-2"><big>STEP 2</big><br /><medium>Exercise Content</medium></a></li>
							<li><a href="#step-3"><big>STEP 3</big><br /><medium>Answer Key</medium></a></li>
							<li><a href="#step-4"><big>STEP 4</big><br /><medium>Confirmation</medium></a></li>
						</ul>
						<!-- End of tabs for the steps -->

						<div>
							<!-- STEP 1 - Basic Information -->

								<div id="step-1">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<!-- STEP 1 Instructions -->
											<div class="row instructionDiv">
												<div class="col-lg-12">
													<h3 class="heading marginbot10">
														Thank you for deciding to contribute!
													</h3>
													<p>First, tell us what your exercise is all about. This will help others easily find it.</p>
												</div>
											</div>
											<!-- End of STEP 1 Instructions -->
											<!-- STEP 1 Content -->
											<div id="informationDiv" class="panel panel-default">
												<div class="panel-body">
													<div action="" method="post" role="form" class="contactForm">
														<div class="form-group">
															<!-- Exercise Title -->
															<h6>Exercise Title</h6>
															<input type="text" name="exercise_title" class="form-control" id="exercise-title" placeholder="e.g. Programming with if Statements" />
															<!-- End of Exercise Title -->
															<!-- Subject Area -->
															<h6>Subject Area</h6>
															<select name="subject" data-placeholder="e.g. Variables and Expressions" id="subject-select">
																<optgroup label="Programming">
																	<option value="1">Variables and Expressions</option>
																	<option value="2">Conditional Statements</option>
																	<option>Iterative Statements</option>
																</optgroup>

																<optgroup label="Databases">
																	<option value="3">Database Design</option>
																	<option value="4">SQL Queries</option>
																</optgroup>

																<optgroup label="Primary Math">
																	<option value="5">Basic Arithmetic</option>
																	<option value="6">Fractions</option>
																	<option value="7">Decimals</option>
																</optgroup>
															</select>
															<!-- End of Subject Area -->

															<!-- Tags -->
															<h6>Tags</h6>

															<input id="tags" type="text" class="tm-input" placeholder="e.g. java,easy,mathematical" />
															<!-- End of tags -->
														</div>
													</div>
												</div>
											</div>
											<!-- End of STEP 1 Content -->
										</div>
									</div>
								</div>
								<!-- STEP 2 - Exercise Content -->
								<div id="step-2" class="">
									<div class="row">
										<div class="col-lg-12">
											<!-- STEP 2 Instructions -->
											<div class="row">
												<div class="col-lg-12">
													<h3 class="heading marginbot10">Sounds great!</h3>
													<p>Next, write down or paste your exercise here. Make sure there are no typos!</p>
												</div>
											</div>
											<!-- End of STEP 2 Instructions -->
											<!-- STEP 2 Content -->
											<div id="questionsDiv" class="panel panel-default col-lg-12">
												<div class="panel-body">
													<div action="" method="post" role="form" class="contactForm">
														<!-- Instructions input -->
														<h6>Instruction</h6>
														<textarea id="instructions" name="instructions"></textarea>
														<!-- End of Instructions input -->
														<!-- Content input -->
														<h6>Content</h6>
														<textarea id="content" name="content"></textarea>
														<!-- End of Content input -->
													</div>
												</div>
											</div>
											<!-- End of STEP 2 Content -->
										</div>
									</div>
								</div>
								<!-- End of STEP 2 Exercise Content -->
								<!-- STEP 3 - Answer Key -->
								<div id="step-3" class="">
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<!-- STEP 3 Instructions -->
												<div class="col-lg-12">
													<h3 class="heading">Does your exercise have an answer key?</h3>
													<p>Providing the answers to objective exercises can help the people who will use your exercise greatly.</p>
												</div>
												<!-- End of STEP 3 Instructions -->
												<!-- STEP 3 Content -->
												<div role="form" class="contactForm">
													<div id="answerDiv" class="col-md-6">
														<!-- Your Exercise -->
														<h6>Your Exercise</h6>
														<div id="answerkeyexercise" class="bs-callout bs-callout-success">
															<h3>Instructions</h3>
															<p>Solve the following equations.</p>
															<br/>
															<p>1. 1 + 1</p>
															<p>2. 10 / 2</p>
															<p>3. 5 + 5</p>
															<p>4. 5 + 4</p>
															<p>5. 6 x 3</p>
															<p>6. 10 x 10</p>
															<p>7. 8 - 4</p>
														</div>
														<!-- End of Your Exercise -->
													</div>
													<!-- Answer Key -->
													<div class="col-md-6">
														<h6> Answer Key</h6>
														<textarea id="answerkey" name="answerkey"></textarea>
													</div>
													<!-- End of Answer Key -->
												</div>
												<!-- End of STEP 3 Content -->
											</div>
										</div>
									</div>
								</div>
								<!-- STEP 4 - Review -->
								<div id="step-4" class="">
									<!-- STEP 4 Instructions -->
									<div class="row">
										<div class="col-lg-12">
											<h3 class="heading">Almost Done!</h3>
											<p>Please make sure you've typed everything correctly before submitting.</p>
										</div>
									</div>
									<!-- End of STEP 4 Instructions -->
									<!-- STEP 4 Content -->
										<div class="row">
											<!-- Title -->
											<div class="col-md-4">
												<h6> Title</h6>
												<p>Simple Math Problems
											</div>
											<!-- End of Title -->
											<!-- Subject Area -->
											<div class="col-md-4">
												<h6> Subject Area</h6>
												<p>Basic Arithmetic</p>
											</div>
											<!-- End of Subject Area -->
											<!-- Tags -->
											<div class="col-md-4">
												<h6>Tags</h6>
												<a href="#" class="btn btn-medium btn-rounded btn-theme">math</a>
												<a href="#" class="btn btn-medium btn-rounded btn-theme">easy</a>
											</div>
											<!-- End of Tags -->
										</div>
										<!-- Your Exercise and Answer Key -->
										<div class="row">
											<div class="col-md-6">
												<h6>Your Exercise</h6>
												<div class="bs-callout bs-callout-success">
													<h3>Instructions</h3>
													<p>Solve the following equations.</p>
													<br/>
													<p>1. 1 + 1</p>
													<p>2. 10 / 2</p>
													<p>3. 5 + 5</p>
													<p>4. 5 + 4</p>
													<p>5. 6 x 3</p>
													<p>6. 10 x 10</p>
													<p>7. 8 - 4</p>
												</div>
											</div>
											<div class="col-md-6">
												<h6> Your Answer Key</h6>
												<div class="bs-callout bs-callout-success">
													<p>1. 2</p>
													<p>2. 5</p>
													<p>3. 10</p>
													<p>4. 9</p>
													<p>5. 18</p>
													<p>6. 100</p>
													<p>7. 4</p>
												</div>
											</div>
										</div>
										<!-- End of Exercise and Your Answer Key -->
									<!-- End of STEP 4 Content -->
								</div>
								<!-- End of STEP 4 - Review -->

						</div>
					</div>
				</div>
			</section>
			<!-- End of content -->

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
	</body>
</html>
