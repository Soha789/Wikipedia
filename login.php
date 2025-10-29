<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - WikiClone</title>
<style>
body {
  font-family: "Segoe UI", sans-serif;
  background: #f8f9fa;
  display: flex; flex-direction: column;
  align-items: center; justify-content: center;
  height: 100vh; margin: 0;
}
form {
  background: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  width: 300px;
}
h2 { color: #202122; margin-bottom: 20px; }
input {
  width: 100%; padding: 10px; margin-bottom: 15px;
  border: 1px solid #ccc; border-radius: 5px;
}
button {
  background: #3366cc; color: white;
  border: none; border-radius: 5px;
  padding: 10px; width: 100%;
  font-size: 1em; cursor: pointer;
}
button:hover { background: #447ff5; }
p { text-align:center; color: #555; }
</style>
</head>
<body>

<form id="loginForm">
<h2>Login</h2>
<input type="email" id="email" placeholder="Email" required>
<input type="password" id="password" placeholder="Password" required>
<button type="button" onclick="login()">Login</button>
<p>Don’t have an account? <a href="signup.php">Sign Up</a></p>
</form>

<script>
function login(){
  let email=document.getElementById("email").value;
  let pass=document.getElementById("password").value;
  let users=JSON.parse(localStorage.getItem("wikiclone_users")||"[]");
  let user=users.find(u=>u.email===email && u.pass===pass);
  if(user){
    localStorage.setItem("wikiclone_loggedin",JSON.stringify(user));
    alert("Login successful!");
    setTimeout(()=>window.location.href="home.php",1000);
  }else alert("Invalid credentials!");
}
</script>
</body>
</html>
