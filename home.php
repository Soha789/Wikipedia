<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home - WikiClone</title>
<style>
body { font-family:"Segoe UI",sans-serif; background:#f8f9fa; margin:0; }
header {
  background:#3366cc; color:white; padding:15px 20px;
  display:flex; justify-content:space-between; align-items:center;
}
header h1 { margin:0; font-size:1.5em; }
header button {
  background:white; color:#3366cc; border:none;
  padding:8px 15px; border-radius:5px; cursor:pointer;
}
header button:hover { background:#e8e8e8; }
.container { padding:20px; }
.article {
  background:white; padding:15px; margin:10px 0;
  border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.1);
}
.article img { width:100%; border-radius:6px; }
.article h3 { margin:10px 0 5px; color:#202122; }
.article p { color:#444; }
</style>
</head>
<body>
<header>
  <h1>WikiClone</h1>
  <div>
    <button onclick="redirect('create_article.php')">+ Create Article</button>
    <button onclick="redirect('logout.php')">Logout</button>
  </div>
</header>
<div class="container" id="articles"></div>

<script>
function redirect(page){ window.location.href=page; }

window.onload=function(){
  let articles=JSON.parse(localStorage.getItem("wikiclone_articles")||"[]");
  let div=document.getElementById("articles");
  if(articles.length==0){ div.innerHTML="<p>No articles yet. Create one!</p>"; return;}
  div.innerHTML=articles.map(a=>`
    <div class="article">
      <img src="${a.image}" alt="">
      <h3>${a.title}</h3>
      <p>${a.content}</p>
      <small>By ${a.author} on ${a.date}</small>
    </div>`).join("");
};
</script>
</body>
</html>
