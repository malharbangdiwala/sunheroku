<html>
<head>
<title>Simple Feedback Form</title>
<style>label{display:block;}</style>
</head>
<body>

<form action="feedback_form.php" method="post">

<label>Email Address</label>
<input type="text" name="email_address" size="40">

<label>Your Feedback</label>
<textarea name="feedback" cols="50" rows="10"></textarea>

<input type="submit" name="send" value="Submit">

</form>

</body>
</html>