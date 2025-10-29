<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Signup - WikiClone</title>
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

<form id="signupForm">
<h2>Create Account</h2>
<input type="text" id="name" placeholder="Full Name" required>
<input type="email" id="email" placeholder="Email" required>
<input type="password" id="password" placeholder="Password" required>
<button type="button" onclick="signup()">Sign Up</button>
<p>Already have an account? <a href="login.php">Login</a></p>
</form>

<script>
function signup(){
  let name=document.getElementById("name").value;
  let email=document.getElementById("email").value;
  let pass=document.getElementById("password").value;
  if(name && email && pass){
    let users=JSON.parse(localStorage.getItem("wikiclone_users")||"[]");
    if(users.some(u=>u.email===email)){alert("Email already exists.");return;}
    users.push({name,email,pass});
    localStorage.setItem("wikiclone_users",JSON.stringify(users));
    alert("Signup successful! Redirecting to login...");
    setTimeout(()=>window.location.href="login.php",1000);
  }else alert("All fields required!");
}
</script>
</body>
</html>
