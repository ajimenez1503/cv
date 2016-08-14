<?php
#Copyright ©. All rights reserved. Designed by Antonio Jimenez Martinez -->
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
	echo "<meta charset=\"utf-8\">";
	echo "<title>CV Antonio Jimenez</title>";
	echo "<script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>";
    echo "<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>";
    #Latest compiled and minified CSS
    echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">";
    #Latest compiled and minified JavaScript
	echo "<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>";

	#style and script
	echo "<link href=\"css/styles.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo "<script type=\"text/javascript\" src=\"./js/script.js\"></script>";

	#favicon
	echo "<link rel=\"icon\" href=\"images/favicon-cv.png\" type=\"image/x-icon\">";


echo "<body>";
	echo "<div class=\"container\">";
		echo "<div class=\"col-lg-8 col-lg-offset-2\">";
			echo "<div class=\"row w\">";
				echo "<div class=\"col-md-3\">";
					echo "<img class=\"img-responsive\" src=\"images/cvprofile.jpg\" alt=\"cv_profile\">";
					echo "<ul class=\"nav nav-tabs nav-stacked\" id=\"myTab\">";
					  echo "<li id=\"linkProfile\" onclick=\"displayView('Profile')\" class=\"active\" ><a>Profile</a></li>";
					  echo "<li id=\"linkSkill\" onclick=\"displayView('Skill')\" ><a>Skill</a></li>";
					  echo "<li id=\"linkProject\" onclick=\"displayView('Project')\" ><a>Project</a></li>";
					  echo "<li id=\"linkContact\" onclick=\"displayView('Contact')\" ><a>Contact</a></li>";
					echo "</ul>";
				echo "</div>";

				echo "<div class=\"col-md-9\">";

					echo "<div class=\"tab-content\">";
						# ===== Profile Tab =====
						echo "<div class=\"tab-pane\" id=\"Profile\">";
							echo "<h2>Antonio Jimenez</h2>";
							echo "<h4>Software Engineer</h4>";
							echo "<hr>";
							echo "<h4><i class=\"icon-briefcase\"></i> Job Experience</h4>";
							echo "<p class=\"sm\">";
					  			echo "<grey>Ercisson- Inthernship</grey> | June 2016- october 2016 | Sweden, Linköping.<br><br>";
						  	echo "</p>";
							echo "<h4><i class=\"icon-file-text-alt\"></i> Education</h4>";
						  	echo "<p class=\"sm\">";
						  		echo "<grey>Computer Science Engineering - Software Engineering-  Bachelor</grey> |  2012 - 2016 | Spain, Granada.<br><br>";
								echo "<grey>Scholarship Computer Science Engineering</grey> |  2012 - 2016 | Sweden, Linköping.<br>";
						  	echo "</p>";
							echo "<h4><i class=\"icon-file\"></i> Course</h4>";
							echo "<p class=\"sm\">";
					  			echo "<grey>Course of programming APP mobile</grey> | (40h) | Spain, Madrird.<br>";
						  	echo "</p>";
						echo "</div><!-- Tab Profile -->";

						# ===== Skill Tab =====
						echo "<div class=\"tab-pane\" id=\"Skill\">";
							echo "<ul class=\"list-group\">";
							  echo "<li class=\"list-group-item\"> <strong>Programming language: </strong> C/C++, Python, Java, C#, Ruby</li>";
							  echo " <li class=\"list-group-item\"><strong>Web programming: </strong>HML5, PHP, JavaScript, CSS, MySQL, Ajax,Json, XML, Websocket, flask (python), sqlite3, IFML, API Rest</li>";
							  echo "<li class=\"list-group-item\"><strong>Data base: </strong>MySQL, PostgreSQL, mongodb, nosql, PhpMyAdmin</li>";
							  echo "<li class=\"list-group-item\"><strong>Graphic: </strong>OpenGL, X3D, Java3D, WebGL, gtk, unity3d, GLSL</li>";
							  echo "<li class=\"list-group-item\"><strong>Network: </strong>Wireshark, Putty, Juniper, Cisco, Netmiko, Telnetlib</li>";
							  echo "<li class=\"list-group-item\"><strong>Parallel programming: </strong>  MPI, OpenMp</li>";
							  echo "<li class=\"list-group-item\"><strong>Knowledge: </strong>Git, Bash, Benchmark, Scrum Kanban (Jira), Sprint, Jenkins, Gerrit</li>";
							  echo "<li class=\"list-group-item\"><strong>Testing: </strong>JUnit (Java), Mock (Python)</li>";
							echo "</ul>";
						echo "</div><!-- tab Skill -->";

						# ===== Project Tab =====
						echo "<div class=\"tab-pane\" id=\"Project\">";
							echo "<ul class=\"list-group\">";
								echo "<li class=\"list-group-item\"><strong>Twidder, Minimal social-networking </strong>  It manage the profile,the media and the chat. It is bui lt in Flask Python, Websocket, Bootstrap, AJAX, WSGI Server , History API <grey>Linköping | 2015</grey></li>";
								echo "<li class=\"list-group-item\"><strong>FunnyBall- 3D Game </strong>in Unity 3D <grey>Linköping | 2015</grey></li>";
								echo "<li class=\"list-group-item\"><strong>Solar system 3D </strong>It shows the move of sun, planets, satellites and ships. It is built in java3D, WebGl, X3D <grey>Granada | 2015</grey></li>";
								echo "<li class=\"list-group-item\"><strong>Heisenburg, web application </strong>to search and book hotel. It is built in PHP, CSS, JavaScript, HTML, MySQL <grey>Granada |  2015</grey></li>";
								echo "<li class=\"list-group-item\"><strong>Dbdofast </strong>ERP for a small shop  <grey>Granada | 2014</grey></li>";
								echo "<li class=\"list-group-item\"> <strong>Fermath</strong>  calculator with a data base and interface, it is built in C <grey> Granada | 2013</grey></li>";
							echo "</ul>";
						echo "</div><!-- tab Project -->";

						# ===== Contact Tab =====
						echo "<div class=\"tab-pane\" id=\"Contact\">";
							echo "<h2>Antonio Jimenez</h2>";
							echo "<h4>Software Engineer</h4>";
							echo "<h5>Contact Information</h5>";
							echo "<div class=\"row\">";
								echo "<div class=\"col-xs-12\">";
									echo "<p class=\"sm17\">";
									  echo "<i class=\"icon-envelope\"></i> - <a target=\"_blank\" href=\"mailto:94antoniojimenez@gmail.com\">94antoniojimenez@gmail.com</a>";
									echo "</p>";
								echo "</div><!-- col-xs-8 -->";
							echo "</div><!-- row -->";
							echo "<h4>Social Links</h4>";
							echo "<div class=\"row\">";
								echo "<div class=\"col-xs-8\">";
									echo "<p class=\"sm17\">";
									  echo "<i class=\"icon-twitter\"></i> - <a href=\"https://twitter.com/softwarejimenez\">softwarejimenez</a> <br>";
									  echo "<i class=\"icon-linkedin\"></i> - <a href=\"https://www.linkedin.com/in/antonio-jimenez-martinez\">antonio-jimenez-martinez</a> <br>";
									  echo "<i class=\"icon-github-alt\"></i> - <a href=\"https://github.com/softwarejimenez\">softwarejimenez</a>";
									echo "</p>";
								echo "</div><!-- col-xs-6 -->";
							echo "</div><!-- row -->";
							echo "<h4>Download cv Antonio Jimenez</h4>";
							echo "<div class=\"row\">";
								echo "<div class=\"col-xs-8\">";
									echo "<p class=\"sm17\">";
									  echo "<i class=\"icon-long-arrow-down\"></i> - <a download href=\"download/cv-Antonio-Jimenez.pdf\">Downlaod cv</a> <br>";
									echo "</p>";
								echo "</div><!-- col-xs-6 -->";
							echo "</div><!-- row -->";
						echo "</div><!-- tab Contact -->";
					echo "</div><!-- Tab Content -->";
				echo "</div><!-- col-md-8 -->";
		    echo "</div><!-- row w -->";
		echo "</div><!-- col-lg-6 -->";
	echo "</div><!-- /.container -->";
echo "</body>";
echo "</html>";
?>
