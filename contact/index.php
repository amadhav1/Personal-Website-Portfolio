<?php include '../_includes/header.php'; ?> 
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LdXatQUAAAAAN9ryst7BSmFF-WCDCqFXZWwFyxt', {action: 'contact'}).then(function(token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
    });
});
</script>

            <h1 class="title is-1 has-text-left is-uppercase">Contact form</h1>
<?php 
/* Subject and email variables */
$emailSubject  = 'Contact Aaron';
$myEmail = 'aaron.madhavan@gmail.com';
$ip = $_SERVER['REMOTE_ADDR'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fname = trim($_REQUEST["fname"]);
$lname = trim($_REQUEST["lname"]);
$email = trim($_REQUEST["email"]);
$botcheck = trim($_REQUEST["botcheck"]);
$message = trim($_REQUEST["message"]);
if (!empty($botcheck)) {
    echo '<div class="block">
    <article class="message is-warning"><div class="message-body"><p>You are not Human, if you are Human try to re-submit your form.</p></div></article></div>'; }
else { 
// Initialize error array.
$errors = array();
// Check for a proper First name
if (!empty($_REQUEST['fname'])) {
$fname = trim($_REQUEST["fname"]);
$pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
if (preg_match($pattern,$fname)){ $fname = $_REQUEST['fname'];}
else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
} else {$errors[] = 'You forgot to enter your First Name.';}

// Check for a proper Last name
if (!empty($_REQUEST['lname'])) {
$lname = trim($_REQUEST["lname"]);
$pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
if (preg_match($pattern,$lname)){ $lname = $_REQUEST['lname'];}
else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
} else {$errors[] = 'You forgot to enter your Last Name.';}
 // Check for a proper email
if (!empty($_REQUEST['email'])) {
$email = $_REQUEST['email'];
$pattern = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";// This is a regular expression that checks if the name is valid characters
if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
elseif (!preg_match($pattern,$email)){ $errors[] = 'Your email Is not formatted correctly.';}
} else {$errors[] = 'You forgot to enter your Email.';}
if (empty($errors)) { 


$body = <<<EOD
<br /> <hr />

First Name: $fname<br />
Last Name: $lname<br />
Email: $email<br />
IP: $ip;<br />
Message: $message<br />
EOD;
$headers = "Content-type: text/html\r\n";
// Send
$success = mail($myEmail, $emailSubject, $body, $headers);
    }
// Print any error messages. 
if (!empty($errors)) { 
    echo '<div class="block">
    <article class="message is-danger"><div class="message-header"><p>The following occurred:</p></div><div class="message-body"><ul>'; 
    // Print each error. 
    foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
    echo '</ul><p>Your mail could not be sent due to input errors.</p></div></article>
    </div>';}
     else{echo '<div class="block">
        <article class="message is-success"><div class="message-header"><p>Your mail was sent. Thank you!</p></div><div class="message-body"><p>Below is the message that you sent.</p>'; 
    echo "<p>Message from " . $fname . " " . $lname . "<br />Email: ".$email."</p>";
  echo '</div></article>
    </div>';

    }
}
  //End of errors array
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="columns">
        <div class="column is-half">
                <div class="field">
                    <label class="label">First Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="First Name" name="fname" value="<?php echo $fname ?>">
                    </div>
                </div>   
        </div>
        <div class="column">
            <div class="field">
                <label class="label">Last Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Last Name" name="lname" value="<?php echo $lname ?>">
                </div>
            </div>
        </div>    
    </div>

    <div class="columns">
        <div class="column is-half">
                <div class="field">
                    <label class="label">E-mail Address</label>
                    <div class="control has-icons-left">
                        <input class="input" type="email" placeholder="Enter your Email" name="email" value="<?php echo $email ?>">
                        <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                        </span>
                    </div >
                </div>   
        </div>   

        <div class="column">
            <div class="field">
                <label class="label">Bot check</label>
                <div class="control">
                    <input class="input" type="text" placeholder="If you are a human, leave this field blank." name="botcheck" value="<?php echo $botcheck ?>">
                </div>
            </div>
        </div>    
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Textarea" name="message"><?php echo $message ?></textarea>
                </div>
            </div>
        </div>
    </div>
    
    <div class="columns">
        <div class="column">
            <div class="field is-grouped">
                <p class="control">
                    <button type="submit" value="Submit" class="button is-primary">
                    Submit
                    </button>
                </p>
                <p class="control">
                    <button type="reset" value="Reset" class="button is-light">
                    Cancel
                    </button>
                </p>
            </div>
        </div>
    </div>
    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

</form>
<?php include '../_includes/footer.php'; ?> 