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
				<div class="col-md-4">
					<img class="img-responsive" src="images/cvprofile.jpg" alt="cv_profile">
					<ul class="nav nav-tabs nav-stacked" id="myTab">
					  <li id="linkProfile" onclick="displayView('Profile')" class="active" ><a href="#Profile">Profile</a></li>
					  <li id="linkSkill" onclick="displayView('Skill')" ><a href="#Skill">Skill</a></li>
					  <li id="linkProject" onclick="displayView('Project')" ><a href="#Project">Project</a></li>
					  <li id="linkContact" onclick="displayView('Contact')" ><a href="#Contact">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-8">

					<div class="tab-content">
						<!-- ===== Profile Tab ===== -->
						<div class="tab-pane" id="Profile">
							<h2>Antonio Jimenez</h2>
							<h4>Software Engineer</h4>
							<hr>
							<h3><i class="icon-briefcase"></i> Job Experience</h4>
							<p class="sm">
					  			<grey>Ercisson- Inthernship</grey> | June 2016- october 2016 |Sweden, Linköping.<br><br>
						  	</p>
							 <h3><i class="icon-file-text-alt"></i> Education</h4>
						  	<p class="sm">
						  		<grey>Computer Science Engineering - Software Engineering-  Bachelor</grey> |  2012 - 2016 | Spain, Granada.<br><br>
								<grey>Scholarship Computer Science Engineering</grey> |  2012 - 2016 | Sweden, Linköping.<br><br><br>
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
							<h2>Antonio Jimenez</h2>
							<h4>Software Engineer</h4>
							<hr>
							<p>Project
							I have experience with C++, Python and for some time I've been using Go language and I just love it.
							Language agnostic and passionate about all kind of tech stuff. C++ fanatic and looking forward C++17!
							</p>
						</div><!-- tab Project -->
						<!-- ===== Contact Tab ===== -->
						<div class="tab-pane" id="Contact">
							<h2>Antonio Jimenez</h2>
							<h4>Software Engineer</h4>
							<hr>
							<p>Contact
							I have experience with C++, Python and for some time I've been using Go language and I just love it.
							Language agnostic and passionate about all kind of tech stuff. C++ fanatic and looking forward C++17!
							</p>
						</div><!-- tab Contact -->
					</div><!-- Tab Content -->
				</div><!-- col-md-8 -->
		    </div><!-- row w -->
		</div><!-- col-lg-6 -->
	</div><!-- /.container -->
</body>
</html>
