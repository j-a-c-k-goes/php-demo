<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random Number</title>
	<style type="text/css">
		body {
			font-family: "Helvetica";
			margin: 72px;
			text-transform: lowercase;
		}
		p { font-size: 16px; }
		code {font-family: Menlo; font-size: 12px;}
		span {
			display: inline-block; 
			width: auto;
			height: auto;
			padding: 12px; 
			font-weight: bold;
		}
		button {
			background: none;
			width: auto; 
			height: auto;
			padding: 12px; 
			border: 1px solid black; 
			border-radius: 24px;
			font-weight: bold;
		}
		a {text-decoration: none;}
		button:hover{ border: none; }
		.php-advantages {
			display: flex;
			flex-direction: column;
		}
	</style>
</head>
<body>
	<!--  Create an H1 tag, use a variable -->
	<?php
	    $headerTag = "PersonalHomePage Demo";
	    echo "<h1>$headerTag</h1>";
	?>

	<!-- Loop through greetings and echo each of them. -->
	<?php 
		$greetings = [ 
			1 => "Hi:",
			2 => "Hello.", 
			3 => "Heyyy!",
		];
		foreach($greetings as $greeting){ 
			if ($greeting == "Hi:"){
				echo "<h2>$greeting Personal Homepage</h2>"; 
			}
			else if ($greeting == "Hello."){
				echo "<h2>$greeting PHP: Hypertext Processor</h2>";
			}
			else if ($greeting == "Heyyy!"){
				echo "<h2>$greeting It's PHP Time.</h2>";
			}
		}
	?>
	
	<!-- Create a Welcome Body -->
	<?php 
	    $welcomeBody = "Server-side languages are run by the web server. This happens before pages are sent to the browser.";
	    echo "<h3>$welcomeBody</h3><hr>";
	?>	

	<!-- Random Number b/t -->
	<?php 
		$randNumber=rand(10_001,100_000)-rand(1,10_000);
		$message="Generate a number between 1 and 10";
		echo "<p>$message</p>";
		echo "<p><span>$randNumber</span></p>";
	?> 

	<!-- Uncomment for Slow Results -->
	<?php for ($count=1; $count <=$randNumber; $count++){
		// echo "<p>$count ways to script</p>";
	}?>

	<section>
		<button>
			<?php
				$mailLink ="<a href='mailto:jlester@student.gptc.edu?subject=PHP-development'>Email Me</a>";
				echo $mailLink;
			?>
		</button>
		<?php for($count=0; $count<32; $count++){
			if ($count % 2 == 1){
				echo "<code>$count is odd</code><br>";
			} 
			else { 
				echo "<code>The number is even, that is all you need to know.</code>";
			}
		} ?>
	</section>

	<section class='php-advantages'>
		<h2>Advantages of PHP (Server-side scripting)</h2>
		<?php
			$phpAdvantages = [
				"Security" => "If the above were inserted using JavaScript, they would be generated in browser. Someone could amend the code and inject any value into the page.",
				"Fewer Browser Compatibility Issues" => "PHP is interpreted by the web server. The features of an end-users web browser are a non-factor here.",
				"Access to Server-Side Resources" => "The code is freed from being limited by the browser. HTML could be generated from a database or file.",
				"Reduced Load on the Client" => "With server-side code, heavier computation is passed to the web server and not the browser.",
				"Choice" => "Running code on the server which generates HTML gives more options for languages outside HTML, CSS, JavaScript."
			];

			foreach($phpAdvantages as $key => $value){
				echo "<h3>$key</h3>";
				echo "<p>$value</p>";
			}
		?>	
	</section>
</body>
</html>