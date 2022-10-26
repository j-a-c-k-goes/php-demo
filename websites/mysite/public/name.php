<?php
	// Name is assigned from value stored in name.html 
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname']; 
    /* 
        htmlspecialchars performs a conversion
        ENT_QUOTES tells conversion to convert single and double quotes
        UTF-* is the character encoding 
    */
    $combinedName = '$firstName $lastName';
    $welcomeText = 'Welcome to our website,';
    $convertedName = htmlspecialchars($combinedName, ENT_QUOTES, 'UTF-8');
    $phpMessage ="PHP's biggest weakness is how easy it is to introduce security issues. Also, POST is more secure than GET — anything sent via GET appears in the URL and is stored in hostory and bookmarks.";
    // echo "$welcomeText $convertedName. $phpMessage";
?>