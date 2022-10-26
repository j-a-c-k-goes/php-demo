<?php 
	if (!isset($_POST['firstname'])){
		include __DIR__ . '/../default/templates/form.html.php';
	}
	else {
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];

		if ($firstName == "Tom" && $lastName == "Hank"){
			$output = 'Welcome.';
		}
		else {
			$output = 'Welcome to the website. ' .
			htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
			htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
		}
		include __DIR__ . '/../default/templates/welcome.html.php';
	}
?>