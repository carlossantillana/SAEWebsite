
<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: FSAE';
    $to = 'rlugt002@ucr.edu';
    $subject = 'Hello from the Website';
    $human = $_POST['human'];
    $name = $fname + $lname;

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '6') {
        if (mail ($to, $subject, $body, $from)) {
	    echo '<p>Your message has been sent!</p>';
	} else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
} else if ($_POST['submit'] && $human != '6') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
header('Location: home.html');
?>
