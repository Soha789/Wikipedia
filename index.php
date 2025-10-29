<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>WikiClone - Knowledge for Everyone</title>
<style>
body {
  font-family: "Segoe UI", sans-serif;
  background: #f8f9fa;
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}
h1 {
  color: #202122;
  font-size: 2.5em;
  margin-bottom: 10px;
}
p {
  max-width: 600px;
  text-align: center;
  color: #54595d;
  font-size: 1.1em;
  margin-bottom: 30px;
}
button {
  background: #3366cc;
  color: white;
  border: none;
  border-radius: 6px;
  padding: 12px 30px;
  margin: 10px;
  font-size: 1em;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background: #447ff5;
}
</style>
</head>
<body>
<h1>Welcome to WikiClone</h1>
<p>A collaborative encyclopedia built by the community. Create, edit, and share knowledge freely — just like Wikipedia.</p>
<div>
  <button onclick="redirect('signup.php')">Sign Up</button>
  <button onclick="redirect('login.php')">Login</button>
</div>

<script>
function redirect(page) {
  window.location.href = page;
}
</script>
</body>
</html>
