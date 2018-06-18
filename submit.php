<?php
// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){
	// then send the form to your email
	mail( 'me@noahnlandu.com', 'Noah Nlandu', print_r($_POST,true) );
}
// otherwise, let the spammer think that they got their message through

header('Location: http://www.noahnlandu.com');
exit('Redirecting you to http://www.noahnlandu.com');
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Thanks!</title>

</head>
<body>

<h1>Thanks</h1>
<p>We'll get back to you as soon as possible.</p>

<body>
</body>
</html>