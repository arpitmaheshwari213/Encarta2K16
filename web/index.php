<?php
ob_start();
session_start();
require_once "includes/config.php";
require_once "includes/database.php";
require_once "includes/functions.php";
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Encarta</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
	<!--counter-->
	<link href="css/counter.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">


	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/anim_component.css" />


	<!-- Main Style -->
	<link href="css/event.css" rel="stylesheet">

	<!-- FancyBox -->
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<!-- Responsive -->
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	 <link href="css/responsiveheader.css" rel="stylesheet">
	<!--Get in touch-->
	<link href="css/getintouch.css" rel="stylesheet"/>

	<!--gallery-->
	<!--<link href="css/gallery.css" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="css/preloader.css"/>
	<!-- Js -->
	<script src="js/vendor/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Modernizr -->
	<script src="js/modernizr.js"></script>
	<link href="css/navbar.css" rel="stylesheet">
	<!-- Preloader-->

	<script src="js/preloader.js"></script>

	<!--End Preloader-->

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="100">
	<!-- Header -->
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" style="width:100%;margin-left:0px">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php#home" style="padding:0px;margin-left:10px;height:100%;"><img src="img/logo.png"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right" style="padding-left:3px;">
						<li><a href="#home">HOME</a></li>
						<li><a href="#about">ABOUT US</a></li>
						<li><a href="#events">EVENTS</a></li>
						<li><a href="#contact">CONTACT</a></li>
						<?php if(!isset($_SESSION['logged_in'])) { ?>
							<li><a href="login.php" <?php  ?>>LOGIN</a></li>
							<?php } else { ?>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi! <?php echo $_SESSION['name']; ?>
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="profile.php">Profile</a></li>
										<!-- <li><a href="#">Select events</a></li> -->
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<!-- End Header -->

			<!--Preloader-->
			<div class="loader se-pre-con "></div>


			<!--animation-->
			<div class="container-fluid" id="home">
				<div class="row">
					<div class="col-md-12" style="padding-right: 0px;padding-left: 0px;">

						<div class="demo-1">
							<div class="content">
								<div id="large-header" class="large-header">
									<canvas id="demo-canvas"></canvas>
									<h1 class="main-title" style="font-family:'Monoton',serif;color:#6fc6fd;"><img src="img/encarta-icon2.png"/><br>ENCARTA-2K16<br><span class="thin"style="font-family: 'Kaushan Script', cursive;">25-27 NOV</span></h1>

								</div>
							</div>
						</div>

					</div>
				</div>

				<!--counter Start-->
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="timer">
								<h1><img src="img/clock-icon.png"/>Event Starts in !!!</h1>
								<div id="no-reflection">
								</div>
							</div>
						</div>
						<div class="col-md-6" >
							<h1 style="padding-top:15px;">Notifications</h1>
							<ul style="list-style-type:square">
							<li>Registration for ENCARTA has started!!!</li>
							<li>Download Prelims to participate in various events here <a><button type="button" class="btn btn-danger">Click Here</button></a></li>
						</ul>
						</div>


					</div>
				</div>
				<!--counter end-->
				<!-- Wrapper Start -->
				<section id="intro">


					<div class="container" id="about">
						<div class="row">
							<div class="col-md-7 col-sm-12">
								<div class="block">
									<div class="section-title">
										<h2>About Us</h2>
										<p>TECHNICAL FESTIVAL BY
											M.B.M. ENGG. COLLEGE.
											Act as a platform for innovative and dexterous technocrats to exhibit their technical skills.

											Scheduled from 25 November 2016 to 27 November 2016, the fest contains the technical, business, intellectual and General Knowledge events, covering the serious & fun part.</p>
										</div>
										<p></p>
									</div>
								</div><!-- .col-md-7 close -->
								<div class="col-md-5 col-sm-12">
									<div class="block">
										<img src="img/wrapper-img.png" alt="Img">
									</div>
								</div><!-- .col-md-5 close -->
							</div>
						</div>

					</section>

					<section id="feature" >
						<div class="container"  >
							<div class="row">
								<div class="col-md-6 col-md-offset-6" >
									<h2 >WE BELIEVE IN GREAT IDEAS</h2>
									<p >WHERE YOU REFORM THE TECH
										<br>
										The place where you code the fun out of your heart. The place where you mobilize the immovable.</p>
										<p>
											WHERE YOU SHOUT OUT LOUD.
											<br>
											30+ events and workshops over 3 days.Come join us and enjoy 30 hours of fun.</p>
											<p>WHERE FUN BEGINS
												<br>
												It's Technical, not 'just' Technical. "Super entertaining events with super awesome prizes."</p>
												<a href="signup.php" class="btn btn-view-works">Register Now</a>
											</div>
										</div>
									</div>
								</section>

								<!-- Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
									<div class="modal-dialog"  >

										<!-- Modal content-->
										<div class="modal-content" style="background-color:#eeeeee">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" style="font-size:40px;">&times;</button>
												<h2 class="modal-title" align="center"></h2>
											</div>
											<div class="modal-body" align="justify" >
												<img id="eventimage"  style="width: 100%;max-width: 480px;margin: auto;display: block;padding-bottom:20px;">
												<p id="para" style="white-space: pre-line;font-family:timesnewroman sans-serif;" ></p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>
								<!-- Event Section -->
								<div id="events" class="page">
									<div class="container">
										<!-- Title Page -->
										<div class="row">
											<div class="span12">
												<div class="title-page">
													<h2 class="title"><img src="img/events-icon.png"/>Events</h2>
													<h3 class="title-description">Check Out Our Events In Encarta</h3>
												</div>
											</div>
										</div>
										<!-- End Title Page -->

										<!-- Portfolio Projects -->
										<div class="row">
											<div class="col-sm-3">
												<!-- Filter -->
												<nav id="options" class="work-nav">
													<ul id="filters" class="option-set" data-option-key="filter">
														<li class="type-work">Type of Events</li>
														<li><a href="#filter" data-option-value="*" class="selected">All Events</a></li>
														<li><a href="#filter" data-option-value=".codefiesta">Code Fiesta</a></li>
														<li><a href="#filter" data-option-value=".quizzard">Quizzard</a></li>
														<li><a href="#filter" data-option-value=".creatrix">Creatrix</a></li>
														<li><a href="#filter" data-option-value=".gamezvilla">Gamevilla</a></li>
														<li><a href="#filter" data-option-value=".ingenieur">Ingenieur</a></li>
														<li><a href="#filter" data-option-value=".manigma">Manigma</a></li>
													</ul>
												</nav>
												<!-- End Filter -->
											</div>

											<div class="col-sm-9">
												<div class="row">
													<section id="projects">
														<ul id="thumbs">

															<!-- Item Project and Filter Name -->
															<li class="item-thumbs span3 codefiesta">
																<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Code Marathon" data-toggle="modal" href="#myModal" id="codemarathon" >
																	<span class="overlay-img"  ></span>
																	<span class="overlay-img-thumb ">CODE MARATHON</span>

																</a>


																<!-- Thumb Image and Description -->
																<img src="img/events/270X180/codefiesta/codemarathon.jpg" alt="Code Marathon">
																<p style="display:none" id="paracodemarathon" >Get ready for some food of thought and a test for your dexterity!!!
																	An adrenaline rush short time contest testing your coding expertise with a plethora of questions to unravel the coding marvel within you.
																	Will you survive or fall in this abyss of marathon of code. Come and prove your mettle for this coding race
																	Further details will be given soon!!!</p>

																</li>
																<!-- End Item Project -->
																<!-- Item Project and Filter Name -->
																<li class="item-thumbs span3 codefiesta">
																	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Bragging" data-toggle="modal" href="#myModal" id="bragging" >
																		<span class="overlay-img"  ></span>
																		<span class="overlay-img-thumb ">BRAGGING</span>

																	</a>


																	<!-- Thumb Image and Description -->
																	<img src="img/events/270X180/codefiesta/bragging.jpg" alt="Bragging">
																	<p style="display:none" id="parabragging" >Obfuscate Code- how complex you can make simpler things.
																		You will be given a simple mathematical expression. You have to complex it to a level that othe a’t fid hat it is actually unless he solves it. Show your zeal pull up your shoes for this.
																		Number of Participants: 2
																		Duration: 02:00 hrs(2rounds-1 hr each)  </p>

																	</li>
																	<!-- End Item Project -->
																	<!-- Item Project and Filter Name -->
																	<li class="item-thumbs span3 quizzard">
																		<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="KBC" data-toggle="modal" href="#myModal" id="kbc" >
																			<span class="overlay-img"  ></span>
																			<span class="overlay-img-thumb ">KBC</span>

																		</a>


																		<!-- Thumb Image and Description -->
																		<img src="img/events/270X180/quizzard/kbc.jpg" alt="KBC">
																		<p style="display:none" id="parakbc" >KBC is not just a word, it is a whole sentence.
																			We guess KBC needs no introduction. Tease your brain and sweat it out for the ultimate glory… The event consists of some levels and crossing each level gives you assured prizes. The exact rounds and details will be dislosed on the spot…
																			Prelims: Written test
																			Participation: Individual </p>

																		</li>
																		<!-- End Item Project -->
																		<!-- Item Project and Filter Name -->
																		<li class="item-thumbs span3 codefiesta">
																			<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																			<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Bandit" data-toggle="modal" href="#myModal" id="bandit" >
																				<span class="overlay-img"  ></span>
																				<span class="overlay-img-thumb ">BANDIT</span>

																			</a>


																			<!-- Thumb Image and Description -->
																			<img src="img/events/270X180/codefiesta/bandit.jpg" alt="Bandit">
																			<p style="display:none" id="parabandit" > Details will be given soon !!!</p>

																		</li>
																		<!-- End Item Project -->
																		<!-- Item Project and Filter Name -->
																		<li class="item-thumbs span3 quizzard">
																			<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																			<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Quiz Up" data-toggle="modal" href="#myModal" id="quizup" >
																				<span class="overlay-img"  ></span>
																				<span class="overlay-img-thumb ">QUIZ UP</span>

																			</a>


																			<!-- Thumb Image and Description -->
																			<img src="img/events/270X180/quizzard/quizup.jpg" alt="Quiz Up">
																			<p style="display:none" id="paraquizup" >Details will be given soon !!!
																			</p>

																		</li>
																		<!-- End Item Project -->


																		<!-- Item Project and Filter Name -->
																		<li class="item-thumbs span3 codefiesta">
																			<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																			<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Chaos" data-toggle="modal" href="#myModal" id="chaos" >
																				<span class="overlay-img"  ></span>
																				<span class="overlay-img-thumb ">CHAOS</span>

																			</a>


																			<!-- Thumb Image and Description -->
																			<img src="img/events/270X180/codefiesta/chaos.jpg" alt="Chaos">
																			<p style="display:none" id="parachaos" >"To have another language is to possess a second soul."  -Charlemagne
																				Looking for something a little more challenging and different than your usual programming language? We bring to you Chaos, an exciting contest, in which you will be introduced to an absolutely new language.
																				If it seems it is out of your forte, don't worry, a little time into the contest and you will have adapted to the rules of the language. So gear up, to learn and adapt to a mystery language fast and code your way to victory. After all, genius is the conquest of chaos and mystery.
																				"And you know the thing about Chaos? It’s fair."
																				Number of Participants: 2
																				Duration: 01:00 hrs</p>

																			</li>
																			<!-- End Item Project -->

																			<!-- Item Project and Filter Name -->
																			<li class="item-thumbs span3 creatrix">
																				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Accelera" data-toggle="modal" href="#myModal" id="accelera" >
																					<span class="overlay-img"  ></span>
																					<span class="overlay-img-thumb ">ACCELERA</span>

																				</a>


																				<!-- Thumb Image and Description -->
																				<img src="img/events/270X180/creatrix/accelera.jpg" alt="Accelera">
																				<p style="display:none" id="paraaccelera" > WORDS are dying to test you and your typing skills. Well you can’t deny that you’ll be typing every single day. Typing quickly and reducing typing errors would save you hundreds and hundreds of hours. Accelera is all about this… Participants will be tested on the basis of accuracy and speed of typing.
																					Participation: Individual
																					Duration: 00:30 hrs</p>

																				</li>
																				<!-- End Item Project -->
																				<!-- Item Project and Filter Name -->
																				<li class="item-thumbs span3 ingenieur">
																					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Blue Print" data-toggle="modal" href="#myModal" id="blueprint" >
																						<span class="overlay-img"  ></span>
																						<span class="overlay-img-thumb ">BLUE PRINT</span>

																					</a>


																					<!-- Thumb Image and Description -->
																					<img src="img/events/270X180/ingenieur/blueprint.jpg" alt="Blue Print">
																					<p style="display:none" id="parablueprint" >Do you consider yourself to be good at handling AutoCAD?
																						Test your abilities against time, where you will be required to put your designing powers to design the perfect blueprint.
																						The competition will be organized in two segments each separately for the civil and mechanical students, testing their skills in their specialized domain.
																						Participation: Individual
																						Duration: 01:00 hrs </p>

																					</li>
																					<!-- End Item Project -->
																					<!-- Item Project and Filter Name -->
																					<li class="item-thumbs span3 ingenieur">
																						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Line Follower Race" data-toggle="modal" href="#myModal" id="linefollower" >
																							<span class="overlay-img"  ></span>
																							<span class="overlay-img-thumb ">LINE FOLLOWER RACE</span>

																						</a>


																						<!-- Thumb Image and Description -->
																						<img src="img/events/270X180/ingenieur/linefollower.jpg" alt="Line Follower Race">
																						<p style="display:none" id="paralinefollower" >LINE FOLLOWER RACE

																							“Follow the Line to your Destiny”
																							For those who love the world of lines and robotics, here is Line Follower Race

																							TASK:
																							Teams have to build an autonomous BOT that follows a black line in minimum possible time without deviating.

																							ARENA AND BOT SPECIFICATIONS:
																							The arena is composed of random path without crisscross, dead ends, loops. The width of black strip will be 30 mm.
																							The autonomous BOT must fit in a box of dimensions 230 mm x 230 mm x 230 mm (l x b x h). Bot must have an onboard power supply which should not exceed 24 volts.
																							GENERAL RULES:
																							•	The bot must be completely autonomous, should not receive any kind of input from outside the arena.
																							•	You will be given 60 seconds for calibrations.
																							•	Laptops, PCs are not allowed near the arena. Wi-Fi, Bluetooth, etc. devices must be switched off.
																							•	Time measured by organizers will be final.
																							Team may consist of 3-4 participants.</p>

																						</li>
																						<!-- End Item Project -->
																						<!-- Item Project and Filter Name -->
																						<li class="item-thumbs span3 codefiesta">
																							<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																							<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Insomnia" data-toggle="modal" href="#myModal" id="insomnia" >
																								<span class="overlay-img"  ></span>
																								<span class="overlay-img-thumb ">INSOMNIA</span>

																							</a>


																							<!-- Thumb Image and Description -->
																							<img src="img/events/270X180/codefiesta/insomnia.jpg" alt="insomnia">
																							<p style="display:none" id="parainsomnia" > Instead of retreating to the luring comfort of bed, join the quest of overnight coding and showcase your skills and perseverance with series of problems in C/C++/JAVA. This event tests your tenacity and endurance as you have just a single night at your disposal.
																								The problem set will consist of 5 questions.
																								The event would be conducted at the junior and senior level.
																								Languages to be used: C/C++/JAVA
																								Number of Participants: 1
																								Duration: 12:00 hrs   </p>

																							</li>
																							<!-- End Item Project -->
																							<!-- Item Project and Filter Name -->
																							<li class="item-thumbs span3 manigma">
																								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																								<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Alohomora" data-toggle="modal" href="#myModal" id="alohomora" >
																									<span class="overlay-img"  ></span>
																									<span class="overlay-img-thumb ">ALOHOMORA</span>

																								</a>


																								<!-- Thumb Image and Description -->
																								<img src="img/events/270X180/manigma/alohomora.jpg" alt="Alohomora">
																								<p style="display:none" id="paraalohomora" >Guide your team to the goal and prove that your ability to maneuver is beyond doubt the best.
																									Lay your claim to be the king of this treasure hunt.
																									Solve the clues as they lead on to the next; be in haste as the first team to complete this journey spanning the whole college campus will emerge as the victor.
																									Participation: Team of 5
																									Duration: 02:00 hrs(2 rounds) </p>

																								</li>
																								<!-- End Item Project -->
																								<!-- Item Project and Filter Name -->
																								<li class="item-thumbs span3 codefiesta">
																									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																									<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Python Phreackers" data-toggle="modal" href="#myModal" id="pythonphreackers" >
																										<span class="overlay-img"  ></span>
																										<span class="overlay-img-thumb ">PYTHON PHREACKERS</span>

																									</a>


																									<!-- Thumb Image and Description -->
																									<img src="img/events/270X180/codefiesta/pythonphreackers.jpg" alt="Python Phreackers">
																									<p style="display:none" id="parapythonphreackers" >One of the most popular language python has the ability to mould itself according to the necessity.
																										Well it’s time to see if you can survive Avada Kedavra but this time you have the very Python to help you. Use your parseltongue to destroy the voldemort before your opponents does.
																										Number of Participants: 2
																										Duration: 01:00 hrs</p>

																									</li>
																									<!-- End Item Project -->
																									<!-- Item Project and Filter Name -->
																									<li class="item-thumbs span3 codefiesta">
																										<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																										<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Gauntlet" data-toggle="modal" href="#myModal" id="thegauntlet" >
																											<span class="overlay-img"  ></span>
																											<span class="overlay-img-thumb ">THE GAUNTLET</span>

																										</a>


																										<!-- Thumb Image and Description -->
																										<img src="img/events/270X180/codefiesta/thegauntlet.jpg" alt="The Gauntlet">
																										<p style="display:none" id="parathegauntlet" >
																											Buckle up for this ride where you’ll face increasingly difficult levels of problems to crack through. You’ll be able to move on to the next question only when you’ll be able to crack the current puzzle.
																											Each question you’ll solve will get you  points and each failed attempt you make to solve one will you get a negative point.
																											The team with the maximum points after one hour will be declared as the undisputed winner of this GAUNTLET!!
																											Languages to be used: C/C++/JAVA
																											Number of Participants: 2
																											Duration: 01:00 hrs  </p>

																										</li>
																										<!-- End Item Project -->
																										<!-- Item Project and Filter Name -->
																										<li class="item-thumbs span3 manigma">
																											<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																											<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dalal Street" data-toggle="modal" href="#myModal" id="dalalstreet" >
																												<span class="overlay-img"  ></span>
																												<span class="overlay-img-thumb ">DALAL STREET</span>

																											</a>


																											<!-- Thumb Image and Description -->
																											<img src="img/events/270X180/manigma/dalalstreet.jpg" alt="Dalal Street">
																											<p style="display:none" id="paradalalstreet" >A meticulously drafted, well researched & carefully analyzed equity research & capital investment event for all readers-investors of corporate India.
																												Experience the excessive speculative zeal with the sense of pessimism in our Virtual Stock Market with your personal finance investment advice. Buy, hold & sell your assets/shares by making capital market analysis from our piece of research and recommendations. Observe all the varying economic activities, get a clear cut guidance & feel the deja vu to invest YOUR hard-earned money to our Virtual Stock Market.
																												Team with most capital & share holdings after the last juncture will WIN. Be a Watchdog!
																												No. of participants per team: 2
																												Duration: 2 hours</p>

																											</li>
																											<!-- End Item Project -->
																											<!-- Item Project and Filter Name -->
																											<li class="item-thumbs span3 manigma">
																												<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																												<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pick-A-Pic" data-toggle="modal" href="#myModal" id="pickapic" >
																													<span class="overlay-img"  ></span>
																													<span class="overlay-img-thumb ">PICK-A-PIC</span>

																												</a>


																												<!-- Thumb Image and Description -->
																												<img src="img/events/270X180/manigma/pickapic.jpg" alt="Pick-A-Pic">
																												<p style="display:none" id="parapickapic" >Imagination has no bounds.
																													Test how colorful your imagination is and if you have the IQ when you try to decipher the hidden meaning implicated by a few inter-related images brought along together. </p>

																												</li>
																												<!-- End Item Project -->
																												<!-- Item Project and Filter Name -->
																												<li class="item-thumbs span3 codefiesta">
																													<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																													<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Klutzy Code" data-toggle="modal" href="#myModal" id="klutzycode" >
																														<span class="overlay-img"  ></span>
																														<span class="overlay-img-thumb ">KLUTZY CODE</span>

																													</a>


																													<!-- Thumb Image and Description -->
																													<img src="img/events/270X180/codefiesta/klutzycode.jpg" alt="Klutzy Code">
																													<p style="display:none" id="paraklutzycode" >Clean the unclean!!!!
																														Coding event that tests your ability to hone the code snippet and beat your counterparts.
																														Pave on the road to triumph by rectifying the codes at your disposal.
																														The event consists of a set of questions along with their code snippets. Racing against time, get your code to work the fastest.
																														This event will be conducted at the junior level.
																														No. of participants: 2
																														Duration: 01:00 hrs</p>

																													</li>
																													<!-- End Item Project -->
																													<!-- Item Project and Filter Name -->
																													<li class="item-thumbs span3 codefiesta">
																														<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																														<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Webcrats" data-toggle="modal" href="#myModal" id="webcrats" >
																															<span class="overlay-img"  ></span>
																															<span class="overlay-img-thumb ">WEBCRATS</span>

																														</a>


																														<!-- Thumb Image and Description -->
																														<img src="img/events/270X180/codefiesta/webcrats.jpg" alt="Webcrats">
																														<p style="display:none" id="parawebcrats" >Ever wondered why some websites amazed you? How those beautiful effects are created? Ever tried to view the source code? If YES, then WebCrats is an event to showcase your skills in the field of basic development of web pages.
																															We provide you with a perfect platform to demonstrate your coding skills in fusion with creativity using HTML, CSS, JavaScript.
																															Number of Participants: 1
																															Duration: 00:45 hrs </p>

																														</li>
																														<!-- End Item Project -->
																														<!-- Item Project and Filter Name -->
																														<li class="item-thumbs span3 quizzard">
																															<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																															<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Head Rush" data-toggle="modal" href="#myModal" id="headrush" >
																																<span class="overlay-img"  ></span>
																																<span class="overlay-img-thumb ">HEAD RUSH</span>

																															</a>


																															<!-- Thumb Image and Description -->
																															<img src="img/events/270X180/quizzard/headrush.jpg" alt="Head Rush">
																															<p style="display:none" id="paraheadrush" >A clarion call to the budding technocrats!!!
																																Ultimate challenge for the tech freak who you are. Get ready to delve deeper into the nuances of technology and bring down your gray cells to work.
																																The event is divided into two rounds:
																																1) Prelims: Written test
																																2) Finals: Logo quiz + Questionnaire The eat ouds ad details ill e dislosed o the spot… Participation: Individual
																																Duration: 01:00 hrs</p>

																															</li>
																															<!-- End Item Project -->
																															<!-- Item Project and Filter Name -->
																															<li class="item-thumbs span3 creatrix">
																																<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mad About Ads" data-toggle="modal" href="#myModal" id="madaboutads" >
																																	<span class="overlay-img"  ></span>
																																	<span class="overlay-img-thumb ">MAD ABOUT ADS</span>

																																</a>


																																<!-- Thumb Image and Description -->
																																<img src="img/events/270X180/creatrix/madaboutads.jpg" alt="Mad About Ads">
																																<p style="display:none" id="paramadaboutads" >Showcase your creativity in marketing products and services comprising of humorous and conceptual ad presentation.
																																	Act out on various advertisement script and ideas relevant for different sectors including FMCG product, goods, services, automobiles and social awareness etc.
																																	All the participants will be given a time frame to showcase their talent.
																																	Participation: Team of not more than 4, Individual
																																	Judging Criteria: Advertisement content
																																	Expressions
																																	Pesete’s fluency</p>

																																</li>
																																<!-- End Item Project -->
																																<!-- Item Project and Filter Name -->
																																<li class="item-thumbs span3 quizzard">
																																	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Digital Fortress" data-toggle="modal" href="#myModal" id="digitalfortress" >
																																		<span class="overlay-img"  ></span>
																																		<span class="overlay-img-thumb ">DIGITAL FORTRESS</span>

																																	</a>


																																	<!-- Thumb Image and Description -->
																																	<img src="img/events/270X180/quizzard/digitalfortress.jpg" alt="Digital Fortress">
																																	<p style="display:none" id="paradigitalfortress" >Mathematics need not to be boring and orthodox. So get your pen and paper because here at ENCARTA we offer you a chance to give your brains the free reign that it deserves. Fo all the Mathematics wizards, a Battlefield to solve the trickiest Question the fastest.
																																		This event consist different levels and each level will contain the clue for the next.
																																		Get ready to solve the most amazing maze of mathematics!!
																																		Participation: Individual
																																		Duration: 00:45 hrs</p>

																																	</li>
																																	<!-- End Item Project -->
																																	<!-- Item Project and Filter Name -->
																																	<li class="item-thumbs span3 codefiesta">
																																		<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																		<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clean The Bugs" data-toggle="modal" href="#myModal" id="cleanthebugs" >
																																			<span class="overlay-img"  ></span>
																																			<span class="overlay-img-thumb ">CLEAN THE BUGS</span>

																																		</a>


																																		<!-- Thumb Image and Description -->
																																		<img src="img/events/270X180/codefiesta/cleanthebugs.jpg" alt="Clean The Bugs">
																																		<p style="display:none" id="paracleanthebugs" >Couple your brain with your eyes to see the bugs scattered all over the code.
																																			The participants will have to hunt the errors or predict the output for the given code.
																																			This event would be conducted at junior and senior level.
																																			Languages to be used: C/C++/JAVA
																																			Number of Participants: 2
																																			Duration: 01:00 hrs</p>

																																		</li>
																																		<!-- End Item Project -->
																																		<!-- Item Project and Filter Name -->
																																		<li class="item-thumbs span3 creatrix">
																																			<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																			<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Youth Parliament" data-toggle="modal" href="#myModal" id="youthparliament" >
																																				<span class="overlay-img"  ></span>
																																				<span class="overlay-img-thumb ">YOUTH PARLIAMENT</span>

																																			</a>


																																			<!-- Thumb Image and Description -->
																																			<img src="img/events/270X180/creatrix/youthparliament.jpg" alt="Youth Parliament">
																																			<p style="display:none" id="parayouthparliament" >Always a favorite competition among the orators where the people fight for their point either for or against the motion!!So get ready with the most powerful weapon of the era that is “Speech" and prove the truthfulness of the side of motion you choose. Let’s debate!!
																																				Participation: Individual
																																				Duration: 01:00 hrs (each for the two rounds) </p>

																																			</li>
																																			<!-- End Item Project -->
																																			<!-- Item Project and Filter Name -->
																																			<li class="item-thumbs span3 ingenieur">
																																				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Circuit Cipher" data-toggle="modal" href="#myModal" id="circuitcipher" >
																																					<span class="overlay-img"  ></span>
																																					<span class="overlay-img-thumb ">CIRCUIT CIPHER</span>

																																				</a>


																																				<!-- Thumb Image and Description -->
																																				<img src="img/events/270X180/ingenieur/circuitcipher.jpg" alt="Circuit Cipher">
																																				<p style="display:none" id="paracircuitcipher" >Is designing circuits your forte?
																																					Challenge yourself by competing in a time bound event to realize a given circuit.
																																					The participant with the perfect circuit after the one hour duration will emerge as the victor.
																																					Participation: Individual
																																					Duration: 01:00 hrs </p>

																																				</li>
																																				<!-- End Item Project -->
																																				<!-- Item Project and Filter Name -->
																																				<li class="item-thumbs span3 gamezvilla">
																																					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Counter Strike" data-toggle="modal" href="#myModal" id="counterstrike" >
																																						<span class="overlay-img"  ></span>
																																						<span class="overlay-img-thumb ">COUNTER STRIKE</span>

																																					</a>


																																					<!-- Thumb Image and Description -->
																																					<img src="img/events/270X180/gamezvilla/counterstrike.jpg" alt="Counter Strike">
																																					<p style="display:none" id="paracounterstrike" >If you need a description of how these counter strike events go then its better you step aside and let the real gamers battle it out to be the best.
																																						So bring along your best sharpshooters, plan out strategies and prepare to kill or be killed as this tournament is going to be a scorching rampage.
																																						Participation: Team of five members. </p>

																																					</li>
																																					<!-- End Item Project -->
																																					<!-- Item Project and Filter Name -->
																																					<li class="item-thumbs span3 gamezvilla">
																																						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Need For Speed" data-toggle="modal" href="#myModal" id="needforspeed" >
																																							<span class="overlay-img"  ></span>
																																							<span class="overlay-img-thumb ">NEED FOR SPEED</span>

																																						</a>


																																						<!-- Thumb Image and Description -->
																																						<img src="img/events/270X180/gamezvilla/needforspeed.jpg" alt="Need For Speed">
																																						<p style="display:none" id="paraneedforspeed" >Beat all ten of the blacklists? That was child’s play, come test your skills against someone from the real world. If you consider yourself to be the master in this game, it’s time that you try to prove it. Buckle up, and rev your engines. Drive safely and responsibly but not here.
																																							The completion will go about in rounds where the racers have to prove their worth by winning the sprint races.
																																							As the competition advances, all your racing skills will be put to test.
																																							The victor will be the undisputed sprint, drag and circuit master of the tracks.
																																							Participation: Individual </p>

																																						</li>
																																						<!-- End Item Project -->
																																						<!-- Item Project and Filter Name -->
																																						<li class="item-thumbs span3 gamezvilla">
																																							<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																							<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Mini Militia" data-toggle="modal" href="#myModal" id="minimilitia" >
																																								<span class="overlay-img"  ></span>
																																								<span class="overlay-img-thumb ">MINI MILITIA</span>

																																							</a>


																																							<!-- Thumb Image and Description -->
																																							<img src="img/events/270X180/gamezvilla/minimilitia.jpg" alt="Mini Militia">
																																							<p style="display:none" id="paraminimilitia" >Do you kill your time killing militants on Mini Militia? Now we bring you platform to show off your Mini Militia skills. All the terminator's, killers, A.T.O.M, deathnotes and many more, challenge the best at Encarta. Hear the whiz of bullets flying past your face as you tumble for over. Out smart the enemy with a well placed grenade and watch them explode into bloody confetti.

																																								Tournament Rules:
																																								1. Participants should switch their device to “Air Plane mode”.
																																								2. No mod, Pro-pack or cracked apk is allowed. Your current game in the phone will be uninstalled and game provided by us will be installed there only before starting of the game.
																																								3. There will be no rematch for the player whose device crashes or by any reason he exits from the match.
																																								4. Top 2 players will proceed to the next round.
																																								5. Map for the match will be decided by voting.
																																								6. The Organiser has the right to disqualify any registered player from the tournament for any valid reason.
																																								7. Your phone should be fully charged.
																																								8. Everyone should obey the commands of the coordinators.</p>

																																							</li>
																																							<!-- End Item Project -->
																																							<!-- Item Project and Filter Name -->
																																							<li class="item-thumbs span3 codefiesta">
																																								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																								<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Code Mutants" data-toggle="modal" href="#myModal" id="codemutants" >
																																									<span class="overlay-img"  ></span>
																																									<span class="overlay-img-thumb ">CODE MUTANTS</span>

																																								</a>


																																								<!-- Thumb Image and Description -->
																																								<img src="img/events/270X180/codefiesta/codemutants.jpg" alt="Code Mutants">
																																								<p style="display:none" id="paracodemutants" >CRAZY ABOUT YOUR LOGIC TACTICS? Get armed up for the battle… "Logistica" welcomes you to the paper pen quiz. FLEX your BRAIN by going through a single level test, comprising of 4 questions. Participants have to implement the code for the given algorithms.
																																									Languages to be used: C/C++/JAVA
																																									Number of Participants: 2
																																									Duration: 01:00 hrs
																																									Code on and just gear up to crush your competition…!!!!! </p>

																																								</li>
																																								<!-- End Item Project -->
																																								<!-- Item Project and Filter Name -->
																																								<li class="item-thumbs span3 ingenieur">
																																									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																									<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Open Hardware" data-toggle="modal" href="#myModal" id="openhardware" >
																																										<span class="overlay-img"  ></span>
																																										<span class="overlay-img-thumb ">OPEN HARDWARE</span>

																																									</a>


																																									<!-- Thumb Image and Description -->
																																									<img src="img/events/270X180/ingenieur/openhardware.jpg" alt="Open Hardware">
																																									<p style="display:none" id="paraopenhardware" > Do you have a zeal for development?
																																										Under Encarta 2K16 open hardware event we provide you a platform to showcase your technical and creative skills. Present circuits and embedded system or any other hardware equipment you possess.
																																									</p>

																																								</li>
																																								<!-- End Item Project -->
																																								<!-- Item Project and Filter Name -->
																																								<li class="item-thumbs span3 ingenieur">
																																									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																									<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Open Software" data-toggle="modal" href="#myModal" id="opensoftware" >
																																										<span class="overlay-img"  ></span>
																																										<span class="overlay-img-thumb ">OPEN SOFTWARE</span>

																																									</a>


																																									<!-- Thumb Image and Description -->
																																									<img src="img/events/270X180/ingenieur/opensoftware.jpg" alt="opensoftware">
																																									<p style="display:none" id="paraopensoftware" > With open software event is intended to celebrate, encourage and promote the contribution of researchers, software developers and educators to advance the field by providing with implementations of codecs, middleware, frameworks, toolkits, libraries, multimedia players, applications, authoring tools, and other multimedia software.</p>

																																								</li>
																																								<!-- End Item Project -->

																																								<!-- Item Project and Filter Name -->
																																								<li class="item-thumbs span3 creatrix">
																																									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
																																									<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Art Design" data-toggle="modal" href="#myModal" id="artdesign" >
																																										<span class="overlay-img"  ></span>
																																										<span class="overlay-img-thumb ">ART DESIGN</span>

																																									</a>


																																									<!-- Thumb Image and Description -->
																																									<img src="img/events/270X180/creatrix/artdesign.jpg" alt="artdesign">
																																									<p style="display:none" id="paraartdesign" > An Adobe Photoshop Art Design Event.
																																										Further Details will be given soon !!!</p>

																																								</li>
																																								<!-- End Item Project -->



																																							</ul>
																																						</section>

																																					</div>
																																				</div>
																																			</div>
																																			<!-- End Portfolio Projects -->
																																		</div>
																																	</div>
																																	<!-- End Event Section -->


																																	<!--Sponsor Start-->
																																	<div class="sponsor" style="text-align:center;">
																																	<div class="row">
																																	 <div class="col-md-12">
                                                                     <h1 style="color:grey;font-family:serif;font-style:italic;font-size:40px;">Our Sponsors</h1>
																																		 <h2 style="font-family:serif;font-style:italic;">Title Sponsor</h2>
																																		 <a href="http://shikshawse.in/" ><img class="spnimg" src="img/sponsor/shiksha.png" style="max-width:95%;"></a>
																																	 </div>
                                                                    <div class=" col-md-offset-1 col-md-6">
																																			 <h2  style="font-family:serif;font-style:italic;">Co-Sponsors</h2>
																																		 <img src="img/sponsor/wscubetech.png" style="max-width:60%;margin-right:15px;">
																																		 <img  src="img/sponsor/rees52.png" style="max-width:60%;margin-right:15px;">
																																	 </div>
																																	 <div class="col-md-3 ">
																																		 <h2  style="font-family:serif;font-style:italic;">Print Media Partner</h2>

																																		 <img src="img/sponsor/printmedia.png" style="max-width:60%;">
																																 </div>
																																	</div>
																																</div>
																																	<!--sponsor end-->

																																	<!--gallery start-->
																																	<div id="gallerydiv">

																																	</div>
																																	<!--gallery end-->

																																	<!--Get in touch-->
																																	<div class="row">

																																		<div class="col-md-offset-2 col-md-8" id="contact">
																																			<h2> Get In Touch</h2>
																																			<p>For any queries regarding registeration or sponsoring us.<br>
																																				Drop a mail or get in touch with us on the given details
																																			</p>
																																			<p>
																																				<a href="mailto:encarta@encarta.csembm.in" target="_blank" style="color: black;"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
																																				<a href="https://web.facebook.com/Encarta2k16/" target="_blank" style="color: #3b5998;padding-left: 20px;"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
																																			</p>
																																		</div>
																																	</div>

																																	<div class="row ">

																																		<div class="col-md-offset-2 col-md-8 footer" >
																																			<div>
																																				<h3>ENCARTA </h3>
																																				<p>A technical fest by Department of Computer Science &amp; Engineering,
																																					M.B.M Engineering College, Jodhpur.
																																					<br>Developed by: Team Encarta</p>
																																				</div>
																																				<p style="text-align: center;">
																																					<img src="img/mbmlogo.png"/>
																																					<small style="color: white; font-size: 10px; display:block;">All rights reserved to Team Encarta<small>
																																					</p>
																																				</div>
																																			</div>


																																			<!-- event details image-->
																																			<script>
																																			$(document).ready(function() {
																																				$('#myModal').on('show.bs.modal', function (event) {
																																					var a = $(event.relatedTarget)
																																					var modal = $(this)
																																					var cls=a.parent().prop("classList")
																																					var sr='img/events/'+cls[2]+'/'+a.attr('id')+'.jpg'
																																					var p='para'+a.attr('id')
																																					modal.find('#para').text($('#'+p).text())
																																					modal.find('#eventimage').attr('src',sr)
																																					modal.find('.modal-title').text(a.attr('title'))
																																				})
																																			});
																																			</script>
																																			<!-- animation js-->
																																			<script src="js/TweenLite.min.js"></script>
																																			<script src="js/EasePack.min.js"></script>
																																			<script src="js/anim_demo.js"></script>
																																			<!--gallery js-->

																																			<script src="js/jquery.lbslider.js"></script>
																																			<script >

																																			if ($(window).width() >1000) {
																																				var head    = document.getElementsByTagName('head')[0];
																																				$('#gallerydiv').html("<div class='row' id='gallery'></div class='col-md-12'><h1 align='center'><img src='img/gallery-icon.png'/>Gallery</h1><div class='slider-wrap '><div class='slider'><ul><li class='imgli'> <img src='img/gallery/1.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/2.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/3.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/4.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/5.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/6.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/7.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/8.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/9.jpg' class='photo' /> </li><li class='imgli'> <img src='img/gallery/10.jpg' class='photo' /> </li></ul></div><a  class='slider-arrow sa-left'>&lt;</a> <a class='slider-arrow sa-right'>&gt;</a></div></div></div>");
																																				var link = document.createElement('link');
																																				link.type = 'text/css';
																																				link.rel = 'stylesheet'
																																				link.href = 'css/gallery.css';
																																				head.appendChild(link);
																																				var script  = document.createElement('script');
																																				script.type = 'text/javascript';
																																				script.src = 'js/jquery.lbslider.js'
																																				head.appendChild(script);
																																				var script2  = document.createElement('script');
																																				script2.type = 'text/javascript';
																																				script2.src  = 'js/gallery.js';
																																				head.appendChild(script2);


																																			}

																																			</script>

																																			<!--<script src="js/gallery.js"></script>-->


																																			<!--counter-->
																																			<script src="js/counter.js" type="text/javascript"></script>

																																			<script type="text/javascript" src="js/timer_call.js">
																																			</script>
																																			<script src="js/supersized.3.2.7.min.js"></script> <!-- Slider -->
																																			<script src="js/waypoints.js"></script> <!-- WayPoints -->
																																			<script src="js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
																																			<script src="js/jquery.isotope.js"></script> <!-- Isotope Filter -->
																																			<script src="js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
																																			<script src="js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
																																			<script src="js/event.js"></script> <!-- Default JS -->


																																		</body>
																																		</html>
