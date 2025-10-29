<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Article - WikiClone</title>
<style>
body {
  font-family:"Segoe UI",sans-serif;
  background:#f8f9fa;
  display:flex; flex-direction:column;
  align-items:center; padding:40px;
}
form {
  background:white; padding:25px; border-radius:8px;
  box-shadow:0 4px 10px rgba(0,0,0,0.1);
  width:400px;
}
h2 { color:#202122; margin-bottom:20px; }
input,textarea {
  width:100%; padding:10px; margin-bottom:15px;
  border:1px solid #ccc; border-radius:5px;
}
button {
  background:#3366cc; color:white;
  border:none; border-radius:5px;
  padding:10px; width:100%;
  font-size:1em; cursor:pointer;
}
button:hover { background:#447ff5; }
</style>
</head>
<body>

<form id="articleForm">
<h2>Create New Article</h2>
<input type="text" id="title" placeholder="Article Title" required>
<textarea id="content" rows="6" placeholder="Article Content" required></textarea>
<input type="file" id="image" accept="image/*" required>
<button type="button" onclick="saveArticle()">Publish</button>
</form>

<script>
function saveArticle(){
  let title=document.getElementById("title").value;
  let content=document.getElementById("content").value;
  let img=document.getElementById("image").files[0];
  if(!title||!content||!img){alert("All fields required!");return;}
  let reader=new FileReader();
  reader.onload=function(e){
    let imageData=e.target.result;
    let user=JSON.parse(localStorage.getItem("wikiclone_loggedin")||"{}");
    let articles=JSON.parse(localStorage.getItem("wikiclone_articles")||"[]");
    articles.unshift({title,content,image:imageData,author:user.name||"Anonymous",date:new Date().toLocaleString()});
    localStorage.setItem("wikiclone_articles",JSON.stringify(articles));
    alert("Article published!");
    window.location.href="home.php";
  };
  reader.readAsDataURL(img);
}
</script>
</body>
</html>
