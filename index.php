<!--Copyright ©. All rights reserved. Designed by Antonio Jimenez Martinez -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CV Antonio Jimenez Martinez</title>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<?php
		echo "<link href=\"css/styles.css\" rel=\"stylesheet\" type=\"text/css\"/>";
		echo "<script type=\"text/javascript\" src=\"./js/script.js\"></script>"
	?>
	<link rel="icon" href="images/favicon-cv.png" type="image/x-icon">


<body>
	<div class="container">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="row w">
				<div class="col-md-3">
					<img class="img-responsive" src="images/cvprofile.jpg" alt="cv_profile">
					<ul class="nav nav-tabs nav-stacked" id="myTab">
					  <li id="linkProfile" onclick="displayView('Profile')" class="active" ><a href="#Profile">Profile</a></li>
					  <li id="linkSkill" onclick="displayView('Skill')" ><a href="#Skill">Skill</a></li>
					  <li id="linkProject" onclick="displayView('Project')" ><a href="#Project">Project</a></li>
					  <li id="linkContact" onclick="displayView('Contact')" ><a href="#Contact">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-9">

					<div class="tab-content">
						<!-- ===== Profile Tab ===== -->
						<div class="tab-pane" id="Profile">
							<h2>Antonio Jimenez</h2>
							<h4>Software Engineer</h4>
							<hr>
							<h4><i class="icon-briefcase"></i> Job Experience</h4>
							<p class="sm">
					  			<grey>Ercisson- Inthernship</grey> | June 2016- october 2016 |Sweden, Linköping.<br><br>
						  	</p>
							 <h4><i class="icon-file-text-alt"></i> Education</h4>
						  	<p class="sm">
						  		<grey>Computer Science Engineering - Software Engineering-  Bachelor</grey> |  2012 - 2016 | Spain, Granada.<br><br>
								<grey>Scholarship Computer Science Engineering</grey> |  2012 - 2016 | Sweden, Linköping.<br>
						  	</p>
							<h4><i class="icon-file"></i> Course</h4>
							<p class="sm">
					  			<grey>Course of programming APP mobile</grey> | (40h) |Spain, Madrird.<br>
						  	</p>
						</div><!-- Tab Profile -->
						<!-- ===== Skill Tab =====-->
						<div class="tab-pane" id="Skill">
							<ul class="list-group">
							  <li class="list-group-item"> <strong>Programming language: </strong> C/C++, Python, Java, C#, Ruby</li>
							  <li class="list-group-item"><strong>Web programming: </strong>HML5, PHP, JavaScript, CSS, MySQL, Ajax,Json, XML, Websocket, flask (python), sqlite3, IFML</li>
							  <li class="list-group-item"><strong>Data base: </strong>MySQL, PostgreSQL, mongodb, nosql, PhpMyAdmin</li>
							  <li class="list-group-item"><strong>Graphic: </strong>OpenGL, X3D, Java3D, WebGL, gtk, unity3d</li>
							  <li class="list-group-item"><strong>Network: </strong>Wireshark, Putty, Juniper, Cisco, Netmiko, Telnetlib</li>
							  <li class="list-group-item"><strong>Parallel programming: </strong>  MPI, OpenMp</li>
							 <li class="list-group-item"><strong>Knowledge: </strong>Github, Bash, Benchmark, Scrum, Sprint</li>
							 <li class="list-group-item"><strong>Operating system: </strong>Linux, Microsoft, Android, IOS</li>
							</ul>
						</div><!-- tab Skill -->
						<!-- ===== Project Tab ===== -->
						<div class="tab-pane" id="Project">
							<ul class="list-group">
								<li class="list-group-item"><strong>Twidder, Minimal social-networking </strong>  It manage the profile,the media and the chat. It is bui lt in Flask Python, Websocket, Bootstrap, AJAX, WSGI Server , History API <grey>Linköping | 2015</grey></li>
								<li class="list-group-item"><strong>FunnyBall- 3D Game </strong>in Unity 3D <grey>Linköping | 2015</grey></li>
								<li class="list-group-item"><strong>Solar system 3D </strong>It shows the move of sun, planets, satellites and ships. It is built in java3D, WebGl, X3D <grey>Granada | 2015</grey></li>
								<li class="list-group-item"><strong>Heisenburg, web application </strong>to search and book hotel. It is built in PHP, CSS, JavaScript, HTML, MySQL. <grey>Granada | 2015</grey></li>
								<li class="list-group-item"><strong>Dbdofast </strong>ERP for a small shop. <grey>Granada | 2014</grey></li>
								<li class="list-group-item"> <strong>Fermath</strong>  calculator with a data base and interface, it is built in C <grey> Granada |2013</grey></li>
							</ul>
						</div><!-- tab Project -->
						<!-- ===== Contact Tab ===== -->
						<div class="tab-pane" id="Contact">
							<h2>Antonio Jimenez</h2>
							<h4>Software Engineer</h4>
							<h4>Contact Information</h4>
							<hr>
							<div class="row">
								<div class="col-xs-12">
									<p class="sm17">
									  <i class="icon-envelope"></i> - <a href="mailto:94antoniojimenez@gmail.com">94antoniojimenez@gmail.com</a>
									</p>
								</div><!-- col-xs-8 -->

							</div><!-- row -->

							<h4>Social Links</h4>
							<hr>
							<div class="row">
								<div class="col-xs-8">
									<p class="sm17">
									  <i class="icon-twitter"></i> - <a href="https://twitter.com/softwarejimenez">softwarejimenez</a> <br>
									  <i class="icon-linkedin"></i> - <a href="https://www.linkedin.com/in/antonio-jimenez-martinez">antonio-jimenez-martinez</a> <br>
									  <i class="icon-github-alt"></i> - <a href="https://github.com/softwarejimenez">softwarejimenez</a>
									</p>
								</div><!-- col-xs-6 -->
							</div><!-- row -->
							<div class="row">
								<h4>Download cv.pdf</h4>
								<hr>
								<div class="row">
									<div class="col-xs-8">
										<p class="sm17">
										  <i class="icon-long-arrow-down"></i> - <a href="">Downlaod cv</a> <br>
										</p>
									</div><!-- col-xs-6 -->
							</div><!-- row -->
						</div><!-- tab Contact -->
					</div><!-- Tab Content -->
				</div><!-- col-md-8 -->
		    </div><!-- row w -->
		</div><!-- col-lg-6 -->
	</div><!-- /.container -->
</body>
</html>
