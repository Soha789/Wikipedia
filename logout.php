<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Logout - WikiClone</title>
<script>
localStorage.removeItem("wikiclone_loggedin");
alert("You have been logged out.");
window.location.href="index.php";
</script>
</head>
<body></body>
</html>
