<!doctype html>
<html>

<meta http-equiv="refresh" content="20">

<head>
    <meta charset="UTF-8">
    <title>Send Message</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>

</style>
<body>
    <h1 style="text-align: center;"> Chat APP</h1>
    <form method="post" action="Page2.php">
        <input type="text" name="input" id="msg" placeholder="Enter Your Message">
        <input type="submit" value="Send" /> <br /> <br />
    </form>
    <div id="chatbox">
        <iframe src="Page1.php" width="450" height="200" scrolling="yes">
        </iframe>
    </div>
</body>

</html>

