<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>DigiPad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets1/css/noscript.css" /></noscript>


	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major"> Welcome To DigiPad </h1>
									 <blockquote>DigiPad helps you to connect and share Stories with the people in your life.<br>
									Whatever story you want to tell, there is a reader waiting for you on DigiPad. From science fiction to romance, your story could be the next huge hit.</blockquote>
									<ul class="actions">
										<li><a href="#user" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
 </div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/pic01.png" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							 

						<!-- Panel -->
							<section class="panel color1" id="user">
								
								<div class="intro joined">
									<h2 class="major" id="user_para"> <a href="#" style="text-decoration:none;"><span class="glyphicon glyphicon-user"></span>&nbsp;@ <?php echo $userRow['username']; ?></a> </h2>
									<blockquote>" Get an Immersive Digital reading writing Experience "</blockquote>
									
								</div>
								
								<div class="inner">
									 <ul class="actions">
											<li><a href="profile/Profile.php" class="button special color2">Your Profile</a></li>
											
										 </ul>
									
											<ul class="actions ">
											<li><a href="story/YourStory.php" class="button " target="_blank">Your Stories</a></li>
											<li><a href="#write" class="button">Just Write It</a></li>
										</ul>
										<ul class="actions ">
											<li><a href="file:///E:/StoryBoat/ReadStory/ReadStory.html" class="button ">Read Stories</a></li>
											<li><a href="ARStory/AR.html" class="button ">AR/VR Stories</a></li>
                                           
											
										</ul>
										
									 <ul class="actions">
									 <li><a href="#Feature" class="button">Featured List</a></li>
									 </ul>
									 <ul class="actions">
                                         <li><a href=" logout.php?logout" class="button special color2"><span class="glyphicon glyphicon-log-out"></span> Logout Profile</a></li>
                                         
									
									 <li><a href="Support.php" class="button special color2" >Ask For Support</a></li>
										</ul>
										<ul class="actions">
										 <li><a href="settings.php" class="button special color2 circle icon fa-cog">Settings</a></li>
										</ul>
								</div>
								<div class="gallery">
								<a  class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
								</div>

							</section>

						<!-- Panel (Spotlight) -->
							 

						<!-- Panel -->
							<section class="panel" id="Feature">
								<div class="intro color2" >
									<h2 class="major">#FeaturedList </h2>
									<blockquote>Check out the latest and greatest stories hand-picked by our team.</blockquote>
									<ul class="actions "> 
										  <center> <li><a href="#user" class="button special color1 circle icon fa-angle-left ">Go Back</a></li> 
										 <li><a href="#write" class="button special color1 circle icon fa-angle-right ">Go Forward</a></li> 	
											</center>								  
									</ul>
								</div>
                              <div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/fulls/01.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/01.jpg" alt="" /></a>
										<a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/02.jpg" alt="" /></a>
										<a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/03.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/04.jpg" alt="" /></a>
                                </div>
                

							</section>

						<!-- Panel -->
							 
						<!-- Panel -->
							<section class="panel color2-alt" id="write">
								<div class="intro color2">
									<h2 class="major">#JustWriteIt</h2>
									<blockquote>Story can be organized in a number of thematic or formal categories: non-fiction, fictionalization of historical events and fiction proper.</blockquote>
									  <ul class="actions vertical"> 
										  <center><li><a href="#user" class="button special color1 circle icon fa-angle-left ">Go Back</a></li></center>	
									
										  <li><a href="story/YourStory.php" class="button ">Your Stories</a></li>
										</ul>
								</div>
								 <div class="inner columns aligned">
									  <div class="span-4-5">
										<h3 class="major">DiGiPaD Editor</h3>
										<blockquote>" Write Stories and publish them! The more stories you write the better your reputation builds, among other writers. "</blockquote>
                                        <p> Click on the Write button to get into your customised editor!</p>  
                                          <p>Your stories will be published to all the users. You can include Links, References, Images etc. into your story to make it more interactive. </p>
                                          
 <ul class="actions">
     <li><a href="editor/index.php" class="button special color2" onclick="fun()"><span class="glyphicon glyphicon-log-out" ></span> Write! </a></li></ul>
									</div>
								</div>
							</section>

						<!-- Copyright -->
							<div class="copyright">&copy; StoryBoat 2018.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
			 
<script>
    function fun()
    { 
        alert('Your personalised editor will load now!');
    }
</script>
	</body>
</html>




