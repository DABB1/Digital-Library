
		<?php
		session_start();
		if (isset($_SESSION['email'])){
		    echo file_get_contents("header2.html");
		}
		else {
		  echo file_get_contents("header.html");
		}
		?>
		<div class="topPart" id="terms">

			<h2>Got a problem ? <br> We're ready to help !</h2>
			<p>Get in touch with us on various platforms. <br> You're not going to hit a ridiculously long phone menu when you call us. Your email isn't going to the inbox abyss, never to be seen or heard from again. At BookHunters we provide the exceptional service we'd want to experience ourselves!</p>
			<p><h3>Contact Numbers:</h3><ul><li>080 2671 2632</li><li>080 2671 2635</li><li>9845624435</li></ul></p>
				<p><h3>Corporate Headquaters</h3>No. 5, 9th Main,<br> Banashankari Stage II,<br> Banashankari, Bengaluru, Karnataka 560085</p>
				<p><h3>Emails:</h3>
				customerservice@bookHunters.com<br>
				sales@bookHunters.com<br>
				careers@bookHunters.com
		    	</p>

		</div>

<!--
		<div class = "row">
		  <div class = "column side">
			<p><h3>Corporate Headquaters</h3>No. 5, 9th Main,<br> Banashankari Stage II,<br> Banashankari, Bengaluru, Karnataka 560085
			</p>
		  </div>
		  <div class = "column side">
			<p><h3>Contact Numbers:</h3><ul><li>080 2671 2632</li><li>080 2671 2635</li><li>9845624435</li></ul>
			</p>

		  </div>
		  <div class = "column side">
		  	<p><h3>Emails:</h3>
				customerservice@bookHunters.com<br>
				sales@bookHunters.com<br>
				careers@bookHunters.com
		    	</p>
		  </div>
		</div>
	-->
	</body>
</html>
