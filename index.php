<!DOCTYPE html>

<html>
	<head>in
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Marco Hennermann  |  Home</title>
		
		<script src="https://kit.fontawesome.com/aacedd6e06.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="Items/icon.ico">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		<script src="JavaScript/examples.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<!--		<style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Moospirach
        const moospirach = { lat: 47.996, lng: 12.903};
        // The map, centered at Moospirach
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: { lat: 47.896, lng: 13.003},
        });
        // The marker, positioned at Moospirach
        const marker = new google.maps.Marker({
          position: moospirach,
          map: map,
        });
      }
    </script>-->
	</head>
	
	<!--------HEADER-------->
	
	<body onload="init();">
		<header>
			<div id = "logo">
				<a href = "#">
					<img src="Items/Logo.png" alt="Logo">
				</a> 
			</div>
			
			<nav id = "main-nav">
				<i class="fa fa-bars" aria-hidden="true"></i>
				<ul>
					<a href="#home"><li>Home</li></a>
					<a href="#about"><li>About</li></a>
					<a href="#work"><li>Work</li></a>
					<a href="#game"><li>Game</li></a>
					<a href="#contact"><li>Contact</li></a>
				</ul>
			</nav>
		</header>
			
		<!--------HOME-------->
	
			<section id = "home">
				<hr>
				<h1>Marco Hennermann</h1>
				<h2>Designer &amp; Developer</h2>
				<a href = "#about">
					<img src = "Items/pfeil.png" alt="Pfeil">
				</a>
			</section>
						
		<!--------ABOUT-------->
			
			<section id = "about">
				<h3>About</h3>
				<hr>
				<img src = "Items/avatar.jpg" alt = "Avatar">
				<h4> Marco Hennermann</h4>
				<p>Das <strong>Leben stellt</strong> uns immer wieder <strong>Herausforderungen</strong>. Entscheidend ist, <strong>wie</strong> wir <strong>damit umgehen</strong>.</p>
				<br>
				<img src = "Items/inspiration.jpg" alt = "Inspiration">
				<br>
				<br>
				<p>
				    <strong>Die Prähistorie:</strong>
				</p>
				<br>
				<p>Nachdem ich meine ersten Lebensjahre bei meinen Eltern in <strong>St. Pantaleon</strong> verbracht habe, bin ich nach deren Trennung zu meinen Großeltern in ein kleines einfaches Bauerndorf namens <strong>Moospirach</strong> gezogen, wie unten zu sehen. Dort verbrachte ich eine ebenso idyllische wie einfache Kindheit, in der ich mit Technik nicht mehr am Hut hatte als den Fernseher, eine PlayStation 2 und unzählige Traktoren. Hard- und Software hatten mich zwar mit der Zeit interessiert, waren aber lange zu weit von mir entfernt. Dies änderte sich, als ich <strong>mit 13</strong> nach langem Einwirken auf meine Familie <strong>meinen ersten Computer</strong> in Form eines Laptops bekam. Von da weg bin ich praktisch jeden Tag am Computer gehängt, habe <strong>Spiele</strong> gespielt, mich mit meinem <strong>Windows 7</strong>-Betriebssystem gespielt und <strong>meine Begeisterung an Daten in Excel ausgelebt</strong>. Den Zweig Elektronik & Technische Informatik an der HTBLuVA Salzburg zu belegen war dann eine logische Konsequenz und sollte den Grundstock für meine heutigen IT-Fähigkeiten legen.</p>
				<br>
				<img src = "Items/moospirach.png" alt = "Moospirach">
				<div id="map"></div>

                <script
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQe3ZrblwxTAkvnj9wZ85Y_onbQf5rQSs&callback=initMap&libraries=&v=weekly"
                  async
                ></script>
				<br>
				<br>
				<p>
				    <strong>Über mich:</strong>
				</p>
				<br>
				<p>Als <strong>Informatik-Maturant</strong> bringe ich natürlich bereits eine gewisse <strong>Basis an IT-Kenntnissen</strong> mit. Darüber hinaus ist die Softwareentwicklung ein wesentlicher Teil meines <strong>Mechatronik-Studiums</strong> an der JKU Linz. Die Größe dieser Universität ist ein Vorteil, den ich auch genieße und ausschöpfe, indem ich von diversen sich dort bietendenden <strong>studienexternen Lehrveranstaltungen</strong> Gebrauch nehme, um meine Programmierkenntnisse in Java und Python zu vertiefen. Zusätzlich zu meiner Ausbildung verbringe ich auch meine Freizeit mehr und mehr mit dem Schreiben eigener Programme, Anlernen neuer Programmiersprachen und dem generellen Erweitern meiner Kenntnisse. All das führt dazu, dass ich in puncto Softwareentwicklung nicht ganz unwissend bin.</p>
				<br>
				<img src = "Items/htl_logo_.png" alt = "HTL Salzburg">
				<img src = "Items/jku_logo_.jpg" alt = "JKU Linz">
				<br>
				<br>
				<p>
				    <strong>Meine Leidenschaften:</strong>
				</p>
				<br>
				<p>
				    Manche meiner engsten Kontakte würden behaupten, der <strong>Motorsport</strong> sei meine größte Leidenschaft, manche würden das <strong>Programmieren</strong> eher als dieses ansehen. Doch in Wahrheit haben beide Parteien recht. Beide Bereiche sind <strong>meine Passionen</strong>. Wenn ich mich mit Motorsport beschäftige, geht nichts anderes in meinem Kopf vor. Bei Formel 1-Rennen fiebere ich mit meinen Lieblingsfahrern mit, denke möglichst mit den Strategien aller Teams und Fahrer mit, hinterfrage mit regem Interesse jede der unzähligen technischen Innovationen dieses faszinierenden Sports und beobachte jede auf der Onboard zu sehende Bewegung der Fahrer.
				</p>
				<br>
				<video preload src = "Items/track_record_kw_sbg.mp4" width = 320 height = 240 controls poster="Items/vorschau.jpg">Dies Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                </video>
				<br>
				<br>
				<p>
				    <strong>Der Kartsport:</strong>
				</p>
				<br>
				<p>
				    Im <strong>Kart</strong> versuche ich dann, wie im obigen Video vom von mir persönlich aufgestellten Streckenrekord in der Kartworld Salzburg zu sehen, genau diese Fähigkeiten der Weltbesten zu replizieren, nehme jedes noch so insignifikant erscheinende Feedback auf, das mir das Kart gibt, analysiere diese und versuche so die Kurvenfahrt zu perfektionieren um im Endeffekt um <strong>Streckenrekorde</strong> und den Gewinn der <strong>Sodi World Series</strong> zu kämpfen, der inoffiziellen <strong>Leihkart-Weltmeisterschaft</strong>, an der ich seit einigen Jahren aktiv teilnehme und mit weltweit über 70.000 Gegnern konkurriere.
				</p>
				<br>
				<img src = "Items/sws_logo.jpg" alt = "SWS">
				<p id = "countdown"></p>
				<br>
				<br>
				<p>
				    <strong>Die Softwareentwicklung:</strong>
				</p>
				<br>
				<p>
				    Worauf ich damit hinaus will? Nun, ebenso wie ich für den Motorsport brenne, <strong>brenne</strong> ich auch <strong>für die Softwareentwicklung</strong>. Man muss hierfür genauso eine Leidenschaft entwickeln, um immer am Ball zu bleiben und zu den besten zu gehören und immerzu die neuesten Techniken und Entwicklungen verfolgen, um diesen Markt zu verstehen und neue Programme und Produkte entwerfen zu können, die dem sich laufend änderenden Konsumverhalten gerecht werden. Die Ansprüche werden immer höher, die Programme immer komplexer.
				</p>
				<br>
				<img src = "Items/innovation.png" alt = "Innovation">
				<br>
				<br>
				<p>
				    <strong>Meine Entwicklung:</strong>
				</p>
				<br>
				<p>
				    Ich kann mich wohl glücklich schätzen, eine Denk- und Lebensweise zu pflegen, welche genau diesem Profil entspricht. Auch ich hatte mir zwar auf meinem Lebensweg schon die eine oder andere Idee wie etwa das Anlernen von Sprachen wie italienisch oder schwedisch in den Kopf gesetzt, die ich bald wieder verworfen hatte, weil ich nicht die nötige Begeisterung dafür aufbauen konnte, aber das Programmieren war seit ich mit 16 im Rahmen meiner HTL-Ausbildung mein erstes Java-Programm kompilierte ein ständiger Wegbegleiter und hat mich mit jedem weiteren Programm und jeder zusätzlichen Funktionalität, die ich seither kennenlernen durfte, mehr vom Programmieren begeistert.
				</p>
				<br>
				<img src = "Items/logos1.png" alt = "Logos 1">
				<br>
				<br>
				<p>
				    <strong>Meine Resultate:</strong>
				</p>
				<br>
				<p>
				    In den seither <strong>7</strong> vergangenen <strong>Jahren</strong> habe ich <strong>voller Tatendrang</strong> an eigenen Programmen gearbeitet, mir <strong>über 10 Programmiersprachen</strong> angeeignet, diese <strong>Webseite selbst entworfen</strong> und vieles mehr. Ein paar meiner Programme sind in der folgenden Sektion ausführlich präsentiert. Scheuen Sie sich nicht, einen Blick darauf zu werfen.
				</p>
				<br>
				<img src = "Items/logos2.png" alt = "Logos 2">
				<br>
				<p>
				    Ihr Marco Hennermann
				</p>
			</section>
			<script>
                // Set the date we're counting down to
                var countDownDate = new Date("Jul 15, 2021 00:00:00").getTime();
                
                // Update the count down every 1 second
                var x = setInterval(function() {
                
                  // Get today's date and time
                  var now = new Date().getTime();
                
                  // Find the distance between now and the count down date
                  var distance = countDownDate - now;
                
                  // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                  // Display the result in the element with id="demo"
                  document.getElementById("countdown").innerHTML = "SWS World Finals in Lonato, Italy in: " + days + "d " + hours + "h "
                  + minutes + "m " + seconds + "s ";
                
                  // If the count down is finished, write some text
                  if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                  }
                }, 1000);
            </script>
						
		<!--------WORK-------->
			
			<section id = "work">
				<h3>Work</h3>
				<hr>
				<div id = "projects">
					<ul>
						<li>
							<a>
							    Reflecton
								<img id = "reflecton" src = "Items/Reflecton.png" onclick = "show_Reflecton()" alt = "Reflecton">
								<video preload id = "reflecton_video" src = "Items/Reflecton.mp4" width = 240 height = 180 controls poster="Items/vorschau_reflecton.jpg" autoplay loop>Dieses Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                                </video>
                    			<a id="reflecton_github" href="https://github.com/SoftwareRacer/Reflecton" class="fab fa-github">Github-Link</a>
            					<a id="reflecton_return" class="fas fa-chevron-left" onclick = "show_Reflecton()">Close
                				</a>
							</a>
						</li>
						<li>
							<a>Tic Tac Toe
								<img id = "tic_tac_toe" src = "Items/tic_tac_toe.jpg" onclick = "show_Tic_Tac_Toe()" alt = "Tic Tac Toe">
								<video preload id = "tic_tac_toe_console_app_video" src = "Items/Tic_Tac_Toe_Console_App.mp4" width = 240 height = 180 controls poster="Items/vorschau_tic_tac_toe.jpg" autoplay loop>Dieses Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                                </video>
								<video preload id = "tic_tac_toe_forms_app_video" src = "Items/Tic_Tac_Toe_Forms_App.mp4" width = 240 height = 180 controls poster="Items/vorschau_tic_tac_toe.jpg" autoplay loop>Dieses Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                                </video>
                    			<a id="tic_tac_toe_github" href="https://github.com/SoftwareRacer/Tic-Tac-Toe" class="fab fa-github">Github-Link</a>
            					<a id="tic_tac_toe_return" class="fas fa-chevron-left" onclick = "show_Tic_Tac_Toe()">Close
                				</a>
							</a>
						</li>
						<li>
							<a>ToDo-App
								<img id="todo" src = "Items/ToDo_App.png" onclick = "show_ToDo()" alt = "ToDO-App">
                                <video preload id = "todo_app_video" src = "Items/todo_app.mp4" width = 240 height = 180 controls poster="Items/vorschau_todo.jpg" autoplay loop>Dieses Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                                </video>
                    			<a id="todo_github" href="https://github.com/SoftwareRacer/ToDo-App" class="fab fa-github">Github-Link</a>
            					<a id="todo_return" class="fas fa-chevron-left" onclick = "show_ToDo()">Close
                				</a>
							</a>
						</li>
						<li>
							<a>Pac Man
								<img id = "pac_man" src = "Items/pac_man.png" onclick = "show_Pac_Man()" alt = "Pac Man">
                                <video preload id = "pac_man_video" src = "Items/Pac_Man.mp4" width = 240 height = 180 controls poster="Items/vorschau_pac_man.jpg" autoplay loop>Dieses Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                                </video>
                    			<a id="pac_man_github" href="https://github.com/SoftwareRacer/Pac-Man" class="fab fa-github">Github-Link</a>
            					<a id="pac_man_return" class="fas fa-chevron-left" onclick = "show_Pac_Man()">Close
                				</a>
							</a>
						</li>
						<li>
							<a>Machine Learning
								<img id = "machine_learning" src = "Items/machine_learning.jpeg" onclick = "show_Machine_Learning()" alt = "Pocket Soccer/Machine Learning">
                                <video preload id = "machine_learning_video" src = "Items/Machine_Learning.mp4" width = 240 height = 180 controls poster="Items/vorschau_machine_learning.jpg" autoplay loop>Dieses Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                                </video>
                    			<a id="machine_learning_github" href="https://github.com/SoftwareRacer/Machine-Learning-JKU" class="fab fa-github">Github-Link</a>
            					<a id="machine_learning_return" class="fas fa-chevron-left" onclick = "show_Machine_Learning()">Close
                				</a>
							</a>
						</li>
						<li>
							<a>C#-Interpreter
								<img id = "interpreter" src = "Items/interpreter.gif" onclick = "show_Interpreter()" alt = "C#-Interpreter">
                                <video preload id = "interpreter_video" src = "Items/C_Sharp_Interpreter.mp4" width = 240 height = 180 controls poster="Items/vorschau_interpreter.jpg" autoplay loop>Dieses Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
                                </video>
                    			<a id="interpreter_github" href="https://github.com/SoftwareRacer/C_Sharp-Interpreter" class="fab fa-github">Github-Link</a>
            					<a id="interpreter_return" class="fas fa-chevron-left" onclick = "show_Interpreter()">Close
                				</a>
							</a>
						</li>
					</ul>
				</div>
			</section>
			
			<script>
			    var a, b, c, d, e, f;
	            document.getElementById("tic_tac_toe_console_app_video").style.display="none";
	            document.getElementById("tic_tac_toe_forms_app_video").style.display="none";
	            document.getElementById("tic_tac_toe_github").style.display="none";
	            document.getElementById("tic_tac_toe_return").style.display="none";
	            document.getElementById("todo_app_video").style.display="none";
	            document.getElementById("todo_github").style.display="none";
	            document.getElementById("todo_return").style.display="none";
	            document.getElementById("reflecton_video").style.display="none";
	            document.getElementById("reflecton_github").style.display="none";
	            document.getElementById("reflecton_return").style.display="none";
	            document.getElementById("pac_man_video").style.display="none";
	            document.getElementById("pac_man_github").style.display="none";
	            document.getElementById("pac_man_return").style.display="none";
	            document.getElementById("machine_learning_video").style.display="none";
	            document.getElementById("machine_learning_github").style.display="none";
	            document.getElementById("machine_learning_return").style.display="none";
	            document.getElementById("interpreter_video").style.display="none";
	            document.getElementById("interpreter_github").style.display="none";
	            document.getElementById("interpreter_return").style.display="none";
			    function show_Tic_Tac_Toe(){
			        if(a == 1){
			            document.getElementById("tic_tac_toe").style.display="inline";
			            document.getElementById("tic_tac_toe_console_app_video").style.display="none";
			            document.getElementById("tic_tac_toe_forms_app_video").style.display="none";
			            document.getElementById("tic_tac_toe_github").style.display="none";
			            document.getElementById("tic_tac_toe_return").style.display="none";
			            return a = 0;
			        }
			        else{
			            document.getElementById("tic_tac_toe").style.display="none";
			            document.getElementById("tic_tac_toe_console_app_video").style.display="inline";
			            document.getElementById("tic_tac_toe_forms_app_video").style.display="inline";
			            document.getElementById("tic_tac_toe_github").style.display="inline";
			            document.getElementById("tic_tac_toe_return").style.display="inline";
			            return a = 1;
			        }
			    }
			    function show_ToDo(){
			        if(b == 1){
			            document.getElementById("todo").style.display="inline";
			            document.getElementById("todo_app_video").style.display="none";
			            document.getElementById("todo_github").style.display="none";
			            document.getElementById("todo_return").style.display="none";
			            return b = 0;
			        }
			        else{
			            document.getElementById("todo").style.display="none";
			            document.getElementById("todo_app_video").style.display="inline";
			            document.getElementById("todo_github").style.display="inline";
			            document.getElementById("todo_return").style.display="inline";
			            return b = 1;
			        }
			    }
			    function show_Reflecton(){
			        if(c == 1){
			            document.getElementById("reflecton").style.display="inline";
			            document.getElementById("reflecton_video").style.display="none";
			            document.getElementById("reflecton_github").style.display="none";
			            document.getElementById("reflecton_return").style.display="none";
			            return c = 0;
			        }
			        else{
			            document.getElementById("reflecton").style.display="none";
			            document.getElementById("reflecton_video").style.display="inline";
			            document.getElementById("reflecton_github").style.display="inline";
			            document.getElementById("reflecton_return").style.display="inline";
			            return c = 1;
			        }
			    }
			    function show_Pac_Man(){
			        if(d == 1){
			            document.getElementById("pac_man").style.display="inline";
			            document.getElementById("pac_man_video").style.display="none";
			            document.getElementById("pac_man_github").style.display="none";
			            document.getElementById("pac_man_return").style.display="none";
			            return d = 0;
			        }
			        else{
			            document.getElementById("pac_man").style.display="none";
			            document.getElementById("pac_man_video").style.display="inline";
			            document.getElementById("pac_man_github").style.display="inline";
			            document.getElementById("pac_man_return").style.display="inline";
			            return d = 1;
			        }
			    }
			    function show_Machine_Learning(){
			        if(e == 1){
			            document.getElementById("machine_learning").style.display="inline";
			            document.getElementById("machine_learning_video").style.display="none";
			            document.getElementById("machine_learning_github").style.display="none";
			            document.getElementById("machine_learning_return").style.display="none";
			            return e = 0;
			        }
			        else{
			            document.getElementById("machine_learning").style.display="none";
			            document.getElementById("machine_learning_video").style.display="inline";
			            document.getElementById("machine_learning_github").style.display="inline";
			            document.getElementById("machine_learning_return").style.display="inline";
			            return e = 1;
			        }
			    }
			    function show_Interpreter(){
			        if(f == 1){
			            document.getElementById("interpreter").style.display="inline";
			            document.getElementById("interpreter_video").style.display="none";
			            document.getElementById("interpreter_github").style.display="none";
			            document.getElementById("interpreter_return").style.display="none";
			            return f = 0;
			        }
			        else{
			            document.getElementById("interpreter").style.display="none";
			            document.getElementById("interpreter_video").style.display="inline";
			            document.getElementById("interpreter_github").style.display="inline";
			            document.getElementById("interpreter_return").style.display="inline";
			            return f = 1;
			        }
			    }
			</script>
			
		<!---------GAME---------->
		
		<section id = "game" class = "SoundJS">
			<h3>Game</h3>
			<hr>
			<div id="content">
				<canvas id="gameCanvas" width="960" height="400"
						style="background:black;"></canvas>
			</div>

			<div id="leaderboard">
				<h1>Leaderboard:</h1>
				<ul>
							<li>
								<a href = "#">
									
								</a>
							</li>
						</ul>
						
				<div class="row">
					<div class="name">Marco: </div><div class="score">1384</div>
				</div>
				
				<div class="row">
					<div class="name">1. </div><div class="score">1066</div>
				</div>
				
				<div class="row">
					<div class="name">2. </div><div class="score">860</div>
				</div>
				
				<div class="row">
					<div class="name">3. </div><div class="score">791</div>
				</div>
				
				<div class="row">
					<div class="name">4. </div><div class="score">740</div>
				</div>
				
				<div class="row">
					<div class="name">5. </div><div class="score">571</div>
				</div>
			</div>
		</section>
		
		<script src="JavaScript/preloadjs-NEXT.min.js"></script>
		<script src="JavaScript/soundjs-NEXT.min.js"></script>

		<script src="JavaScript/easeljs-NEXT.js"></script>
			
		<script type="text/javascript" src="JavaScript/SpaceRock.js"></script>
		<script type="text/javascript" src="JavaScript/Ship.js"></script>

		<script>
		var DIFFICULTY = 2;			//how fast the game gets more difficult
		var ROCK_TIME = 110;		//aprox tick count until a new asteroid gets introduced
		var SUB_ROCK_COUNT = 4;		//how many small rocks to make on rock death
		var BULLET_TIME = 5;		//ticks between bullets
		var BULLET_ENTROPY = 100;	//how much energy a bullet has before it runs out.

		var TURN_FACTOR = 7;		//how far the ship turns per frame
		var BULLET_SPEED = 17;		//how fast the bullets move

		var KEYCODE_ALT = 18;		//useful keycode
		var KEYCODE_UP = 16;		//useful keycode
		var KEYCODE_LEFT = 37;		//useful keycode
		var KEYCODE_RIGHT = 39;		//useful keycode

		var manifest;           // used to register sounds for preloading
		var preload;

		var shootHeld;			//is the user holding a shoot command
		var lfHeld;				//is the user holding a turn left command
		var rtHeld;				//is the user holding a turn right command
		var fwdHeld;			//is the user holding a forward command

		var timeToRock;			//difficulty adjusted version of ROCK_TIME
		var nextRock;			//ticks left until a new space rock arrives
		var nextBullet;			//ticks left until the next shot is fired

		var rockBelt;			//space rock array
		var bulletStream;		//bullet array

		var canvas;			//Main canvas
		var stage;			//Main display stage

		var ship;			//the actual ship
		var alive;			//wheter the player is alive

		var messageField;		//Message display field
		var scoreField;			//score Field

		var loadingInterval = 0;

		//register key functions
		document.onkeydown = handleKeyDown;
		document.onkeyup = handleKeyUp;

		function init() {
			if (!createjs.Sound.initializeDefaultPlugins()) {
				document.getElementById("error").style.display = "block";
				document.getElementById("content").style.display = "none";
				return;
			}

			if (createjs.BrowserDetect.isIOS || createjs.BrowserDetect.isAndroid || createjs.BrowserDetect.isBlackberry) {
				document.getElementById("mobile").style.display = "block";
				document.getElementById("content").style.display = "none";
				return;
			}

			canvas = document.getElementById("gameCanvas");
			stage = new createjs.Stage(canvas);
			messageField = new createjs.Text("Loading", "bold 24px Arial", "#FFFFFF");
			messageField.maxWidth = 1000;
			messageField.textAlign = "center";
			messageField.textBaseline = "middle";
			messageField.x = canvas.width / 2;
			messageField.y = canvas.height / 2;
			stage.addChild(messageField);
			stage.update(); 	//update the stage to show text

			// begin loading content (only sounds to load)
			var assetsPath = "sounds/";
			manifest = [
				{id: "begin", src: "spawn.ogg"},
				{id: "break", src: "break.ogg", data: 6},
				{id: "death", src: "death.ogg"},
				{id: "laser", src: "shot.ogg", data: 6},
				//{id: "music", src: "music.ogg"}
			];

			createjs.Sound.alternateExtensions = ["mp3"];
			preload = new createjs.LoadQueue(true, assetsPath);
			preload.installPlugin(createjs.Sound);
			preload.addEventListener("complete", doneLoading); // add an event listener for when load is completed
			preload.addEventListener("progress", updateLoading);
			preload.loadManifest(manifest);
		}

		function stop() {
			if (preload != null) {
				preload.close();
			}
			createjs.Sound.stop();
		}

		function updateLoading() {
			messageField.text = "Loading " + (preload.progress * 100 | 0) + "%";
			stage.update();
		}

		function doneLoading(event) {
			clearInterval(loadingInterval);
			scoreField = new createjs.Text("0", "bold 18px Arial", "#FFFFFF");
			scoreField.textAlign = "right";
			scoreField.x = canvas.width - 20;
			scoreField.y = 20;
			scoreField.maxWidth = 1000;

			messageField.text = "Welcome: Click to play\n\nControls: \nAlt: shooting\nShift: Boost\n<- & -> Arrow Key: Change Direction";

			// start the music
			//createjs.Sound.play("music", {interrupt: createjs.Sound.INTERRUPT_NONE, loop: -1, volume: 0.4});

			watchRestart();
		}

		function watchRestart() {
			//watch for clicks
			stage.addChild(messageField);
			stage.update(); 	//update the stage to show text
			canvas.onclick = handleClick;
		}

		function handleClick() {
			//prevent extra clicks and hide text
			canvas.onclick = null;
			stage.removeChild(messageField);

			// indicate the player is now on screen
			createjs.Sound.play("begin");

			restart();
		}

		//reset all game logic
		function restart() {
			//hide anything on stage and show the score
			stage.removeAllChildren();
			scoreField.text = (0).toString();
			stage.addChild(scoreField);

			//new arrays to dump old data
			rockBelt = [];
			bulletStream = [];

			//create the player
			alive = true;
			ship = new Ship();
			ship.x = canvas.width / 2;
			ship.y = canvas.height / 2;

			//log time untill values
			timeToRock = ROCK_TIME;
			nextRock = nextBullet = 0;

			//reset key presses
			shootHeld = lfHeld = rtHeld = fwdHeld = dnHeld = false;

			//ensure stage is blank and add the ship
			stage.clear();
			stage.addChild(ship);

			//start game timer
			if (!createjs.Ticker.hasEventListener("tick")) {
				createjs.Ticker.addEventListener("tick", tick);
			}
		}

		function tick(event) {
			//handle firing
			if (nextBullet <= 0) {
				if (alive && shootHeld) {
					nextBullet = BULLET_TIME;
					fireBullet();
				}
			} else {
				nextBullet--;
			}

			//handle turning
			if (alive && lfHeld) {
				ship.rotation -= TURN_FACTOR;
			} else if (alive && rtHeld) {
				ship.rotation += TURN_FACTOR;
			}

			//handle thrust
			if (alive && fwdHeld) {
				ship.accelerate();
			}

			//handle new spaceRocks
			if (nextRock <= 0) {
				if (alive) {
					timeToRock -= DIFFICULTY;	//reduce spaceRock spacing slowly to increase difficulty with time
					var index = getSpaceRock(SpaceRock.LRG_ROCK);
					rockBelt[index].floatOnScreen(canvas.width, canvas.height);
					nextRock = timeToRock + timeToRock * Math.random();
				}
			} else {
				nextRock--;
			}

			//handle ship looping
			if (alive && outOfBounds(ship, ship.bounds)) {
				placeInBounds(ship, ship.bounds);
			}

			//handle bullet movement and looping
			for (bullet in bulletStream) {
				var o = bulletStream[bullet];
				if (!o || !o.active) {
					continue;
				}
				if (outOfBounds(o, ship.bounds)) {
					placeInBounds(o, ship.bounds);
				}
				o.x += Math.sin(o.rotation * (Math.PI / -180)) * BULLET_SPEED;
				o.y += Math.cos(o.rotation * (Math.PI / -180)) * BULLET_SPEED;

				if (--o.entropy <= 0) {
					stage.removeChild(o);
					o.active = false;
				}
			}

			//handle spaceRocks (nested in one loop to prevent excess loops)
			for (spaceRock in rockBelt) {
				var o = rockBelt[spaceRock];
				if (!o || !o.active) {
					continue;
				}

				//handle spaceRock movement and looping
				if (outOfBounds(o, o.bounds)) {
					placeInBounds(o, o.bounds);
				}
				o.tick(event);

				//handle spaceRock ship collisions
				if (alive && o.hitRadius(ship.x, ship.y, ship.hit)) {
					alive = false;

					stage.removeChild(ship);
					messageField.text = "You are dead:  Click to play again";
					stage.addChild(messageField);
					watchRestart();

					//play death sound
					createjs.Sound.play("death", {interrupt: createjs.Sound.INTERRUPT_ANY});
					continue;
				}

				//handle spaceRock bullet collisions
				for (bullet in bulletStream) {
					var p = bulletStream[bullet];
					if (!p || !p.active) {
						continue;
					}

					if (o.hitPoint(p.x, p.y)) {
						var newSize;
						switch (o.size) {
							case SpaceRock.LRG_ROCK:
								newSize = SpaceRock.MED_ROCK;
								break;
							case SpaceRock.MED_ROCK:
								newSize = SpaceRock.SML_ROCK;
								break;
							case SpaceRock.SML_ROCK:
								newSize = 0;
								break;
						}

						//score
						if (alive) {
							addScore(o.score/100);
						}

						//create more
						if (newSize > 0) {
							var i;
							var index;
							var offSet;

							for (i = 0; i < SUB_ROCK_COUNT; i++) {
								index = getSpaceRock(newSize);
								offSet = (Math.random() * o.size * 2) - o.size;
								rockBelt[index].x = o.x + offSet;
								rockBelt[index].y = o.y + offSet;
							}
						}

						//remove
						stage.removeChild(o);
						rockBelt[spaceRock].active = false;

						stage.removeChild(p);
						bulletStream[bullet].active = false;

						// play sound
						createjs.Sound.play("break", {interrupt: createjs.Sound.INTERUPT_LATE, offset: 0.8});
					}
				}
			}

			//call sub ticks
			ship.tick(event);
			stage.update(event);
		}

		function outOfBounds(o, bounds) {
			//is it visibly off screen
			return o.x < bounds * -2 || o.y < bounds * -2 || o.x > canvas.width + bounds * 2 || o.y > canvas.height + bounds * 2;
		}

		function placeInBounds(o, bounds) {
			//if its visual bounds are entirely off screen place it off screen on the other side
			if (o.x > canvas.width + bounds * 2) {
				o.x = bounds * -2;
			} else if (o.x < bounds * -2) {
				o.x = canvas.width + bounds * 2;
			}

			//if its visual bounds are entirely off screen place it off screen on the other side
			if (o.y > canvas.height + bounds * 2) {
				o.y = bounds * -2;
			} else if (o.y < bounds * -2) {
				o.y = canvas.height + bounds * 2;
			}
		}

		function fireBullet() {
			//create the bullet
			var o = bulletStream[getBullet()];
			o.x = ship.x;
			o.y = ship.y;
			o.rotation = ship.rotation;
			o.entropy = BULLET_ENTROPY;
			o.active = true;

			//draw the bullet
			o.graphics.beginStroke("#FFFFFF").moveTo(-1, 0).lineTo(1, 0);

			// play the shot sound
			createjs.Sound.play("laser", {interrupt: createjs.Sound.INTERUPT_LATE});
		}

		function getSpaceRock(size) {
			var i = 0;
			var len = rockBelt.length;

			//pooling approach
			while (i <= len) {
				if (!rockBelt[i]) {
					rockBelt[i] = new SpaceRock(size);
					break;
				} else if (!rockBelt[i].active) {
					rockBelt[i].activate(size);
					break;
				} else {
					i++;
				}
			}

			if (len == 0) {
				rockBelt[0] = new SpaceRock(size);
			}

			stage.addChild(rockBelt[i]);
			return i;
		}

		function getBullet() {
			var i = 0;
			var len = bulletStream.length;

			//pooling approach
			while (i <= len) {
				if (!bulletStream[i]) {
					bulletStream[i] = new createjs.Shape();
					break;
				} else if (!bulletStream[i].active) {
					bulletStream[i].active = true;
					break;
				} else {
					i++;
				}
			}

			if (len == 0) {
				bulletStream[0] = new createjs.Shape();
			}

			stage.addChild(bulletStream[i]);
			return i;
		}

		//allow for arrow control scheme
		function handleKeyDown(e) {
			//cross browser issues exist
			if (!e) {
				var e = window.event;
			}
			switch (e.keyCode) {
				case KEYCODE_ALT:
					shootHeld = true;
					return false;
				case KEYCODE_LEFT:
					lfHeld = true;
					return false;
				case KEYCODE_RIGHT:
					rtHeld = true;
					return false;
				case KEYCODE_UP:
					fwdHeld = true;
					return false;
			}
		}

		function handleKeyUp(e) {
			//cross browser issues exist
			if (!e) {
				var e = window.event;
			}
			switch (e.keyCode) {
				case KEYCODE_ALT:
					shootHeld = false;
					break;
				case KEYCODE_LEFT:
					lfHeld = false;
					break;
				case KEYCODE_RIGHT:
					rtHeld = false;
					break;
				case KEYCODE_UP:
					fwdHeld = false;
					break;
			}
		}

		function addScore(value) {
			//trust the field will have a number and add the score
			scoreField.text = (Number(scoreField.text) + Number(value)).toString();
		}
		</script>
							
		<!--------CONTACT-------->
			
		<section id = "contact">
			<h3>Contact</h3>
			<hr>
			
			<form action="mailto:marco.hennermann@hotmail.com" method="POST" enctype=”multipart/form-data” name=”EmailForm”>
				<input id="email_address" class="input_text" type = "email" tabindex = "1" placeholder = "Ihre E-Mail-Adresse" required><br>
				<input id="subject" class="input_text" type = "text" tabindex = "2" placeholder = "Betreff" required><br>
				<textarea id="message" class="input_text" tabindex = "3" placeholder = "Nachricht" required></textarea><br>
				<input id="submit" class="button" type="submit">
				<p>
				    Aktuell ist es <datetime>
    			    <?php
                        date_default_timezone_set("Europe/Berlin");
                        $timestamp = time();
                        $datum = date("d.m.Y",$timestamp);
                        $uhrzeit = date("H:i",$timestamp);
                        echo $uhrzeit," Uhr, am ",$datum," bei mir.";
                    ?>
                    </datetime>
				</p>
			</form>
		</section>
		
	<!--------FOOTER-------->
			
		<footer>
			<p>
				&copy: 2021 Marco Hennermann 
			<a id="github" href="https://github.com/SoftwareRacer" class="fab fa-github"></a>					
			<a id="instagram" href="https://www.instagram.com/marcohennermann/" class="fab fa-instagram"></a>
			<a id="facebook" href="https://www.facebook.com/marco.hennermann" class="fa fa-facebook"></a>
			</p>
		</footer>
		
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
		integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" 
		crossorigin="anonymous"></script>
		<script src="JavaScript/mobile-menu.js"></script>
	</body>
</html>