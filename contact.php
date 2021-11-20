<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script charset="utf-8" src="https://widget.bandsintown.com/main.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script>if(window.history.replaceState){window.history.replaceState(null,null,window.location.href);}</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Shwallama</title>
</head>

<body>
    <nav class="navbar h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="img/logo(200x200).png" alt="logo"></div>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#music">Music</a></li>
            <!--<li><a href="#about">About</a></li>-->
            <li><a href="video.php">Video</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <!--<div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>-->
        <div class="social">
            <ul class="icons v-class-resp">
                <li><a href="https://youtube.com/c/shwallama" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://instagram.com/shwallama" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://soundcloud.com/shwallama" target="_blank"><i class="fab fa-soundcloud"></i></a>
                </li>
                <!--<li><a href="https://www.linkedin.com/in/shwallama-86237620b/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>-->
               <li><a href="https://open.spotify.com/artist/2ZpzBBC5u5hMBz16xjhy3D?si=o3QqEovmT7umZDYzawl4-Q" target="_blank"><i class="fab fa-spotify"></i></a></li>
                <li><a href="https://story.snapchat.com/@shwallama" target="_blank"><i
                            class="fab fa-snapchat-ghost"></i></a></li>
            </ul>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>



    <section id="contact" class="contact">
        <h2 class="text-center">Contact</h2>
        <div class="contact-mail" style="display: flex; justify-content: center;">
            <h1><a href="mailto:shwallamamusic@gmail.com" style="display: block; color: black; text-align: center; padding: 10px 15px;">Click to send a message to Shwallama</a></h1>
            <img class="mail-icon" src="img/mail-808-475025.png" alt="" style="width: 44px;">
        </div>
       <!-- <form action="userinfo.php" method="post"> 
            <div class="form">
                <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name">
                <input class="form-input" type="email" name="contact-email" id="contact-email" placeholder="Enter your Email">
                <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Elaborate"></textarea>
                <button class="btn btn-dark">Submit</button>
            </div>
        </form>-->
    </section>

    <section>
        <footer class="background">
            <h3 class="newsletter-heading">Newsletter</h3>
            <p class="newsletter-text">subscribe for latest updates</p>
            
            <div id="message"></div>
            <!--<p class="newsletter-thankyou">Thank you!</p>-->
            <!-- <form action="submit_yt.php" method="POST" id="newsletter-id"> -->
            <form>
            <!--<p class="newsletter-thankyou">Thank you!</p>-->
            <!--<span class="newsletter-thankyou" style="display: block" id="msg"></span>-->
                <div class="newsletter">
                    <input class="newsletter-typebox" type="email" name="email"  placeholder="your email" id="email" required>
                    <button type="button" name="submit" class="btn-newsletter" onclick="sendmail();" id="submit">Submit</button>
                                            
                </div> 

            </form>
            <p class="text-footer" id="thanks"> 
                This website is completly designed and coded by Shwallama<br>
                Copyright &copy; 2027 -Shwallama- All rights reserved
            </p>
        </footer>
        
        <hr>
    </section>
<script>
function sendmail() {
    var email=document.getElementById('email').value;

        $.ajax({
            url: 'submit_yt.php',
            type: 'POST',
            data: {
                email: email
            },
            success: function(data) {
                            //   alert(data);
               $('#message').html(data);
               cleartext();
               
            }
        });

    }
    function cleartext(){
        $('#email').val(""); 
    }
</script>
    <script src="js/resp.js"></script>
    <script src="js/conect.js"></script>

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>