<html>
<head>
<title>Simple Feedback Form</title>
<style>label{display:block;}</style>
</head>
<body>

<form action="feedback_form.php" method="post">
<label>Name</label>
<input type="text" name="name" size="40">
<label>Email Address</label>
<input type="text" name="email" size="40">

<label>Your Feedback</label>
<textarea name="comment" cols="50" rows="10"></textarea>

<input type="submit" name="send" value="Submit">

</form>

</body>
</html>