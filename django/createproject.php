<!DOCTYPE html>
<html lang=en class=no-js>
<head>
<meta charset=utf-8 />
<title>How To Create a Project in Django(Python Web Framework): A Beginner's Guide</title>
<link rel=canonical href=https://www.codeavenues.com/django/createproject />
<meta name=description content="
How to create a django project and how to run your first project. A complete guide for begginers to advance">
<meta name=google-site-verification content=l4dKb_2dJnr_9AsfmgHJ6E_vIgOQxIvCn-e2VKcTfy0 />
<meta name=keywords content="create project django google,
							 create project django,
							 create django project pycharm,
							 create new django project pycharm community addition,
							 django project example github,
							 django create a new project,
							 create a project django,
							 django create project in current directory,
							 django create new project,
							 generate django project,
							 django create new project,
							 generate django project,
							 django create pdf,
							 python create django project,
							 python create django project,
							 django make project,
							 r create project,
							 create go proejct vscode,
							 django google drive,
							 create new django app,
							 create project google earth,
							 django creator,
							 django proejct examples
							 
							 							 
							 ">
<meta name=author content=codeavenues>
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=theme-color content=#e8f1ff>
<link href=../images/faviconc.ico rel=icon>
<link href=../css/bootstrap.min.css rel=stylesheet>
<link href=../css/plugin.min.css rel=stylesheet>
<link href=../css/all.min.css rel=stylesheet>
<link href=instyle.css rel=stylesheet>
<link rel=preconnect href=https://fonts.gstatic.com>
<link rel=preconnect href=https://fonts.gstatic.com>
<link href=sidebar.css rel=stylesheet>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin=anonymous referrerpolicy=no-referrer />
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/themes/prism.min.css>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.css>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
<link href=../css/style.css rel=stylesheet>
<link href=../css/responsive.css rel=stylesheet>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/prism.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/components/prism-python.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.js></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2HLEG6VPPV"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-2HLEG6VPPV');<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-MS2YWG5G5X');</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-MS2YWG5G5X');</script>
<style>pre{position:relative;background-color:#282c34;color:#abb2bf;padding:10px;border:1px solid #61afef;border-top:30px solid #353541;border-radius:4px;white-space:pre-wrap;overflow-x:auto}pre::before{content:"Code";position:absolute;top:0;left:10px;padding:5px;color:#fff;border-radius:4px}.copy-icon{position:absolute;top:10px;right:10px;cursor:pointer}.code-icon{background-color:#333;color:#fff;padding:5px;border-radius:4px;margin-bottom:5px}</style>
</head>
<body>
<div class=onloadpage id=page-load>
<div class=loader-div>
<div class=on-img><img src=../images/loader.gif alt=Logo class=img-fluid /><span>Loading Please Wait...</span></div>
</div>
</div>
<?php include("header.php") ?>
<div class="pt85 pb120">
<div class=container>
<div class="row pt80">
<div class=col-lg-3>
<?php include("sidebar.php") ?>
</div>
<div class="col-lg-9 anchor">
<p><img src=blogimages/django.webp width="80%"/></p>
<br>
<h3>
How To Create Your First Project In Django:
</h3>
<br>
<p><b>Let us discuss how to create first django project.</b></p>
<p>If you have complete the installation process then we are taking a step forward, Let's create our first project in django and get a bit knowledge that how to run our first project on web browser. In this complete guide we are using pycharm IDE(Integrated Development Environment).You must also use this IDE for personal use.</p>
<br>
<h4>1. Install Django:</h4>
<p>Before anything else, you'll need to have Django installed on your computer. Think of Django as the toolbox you'll use to build your website. Open your computer's terminal (or command prompt on Windows) and type in the following command:</p>
<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code class="c">
pip install django
</code>
</pre>
</div>
<h4>2. Create first Project:</h4>
<p>After creating pure python project run this command to create the new django project.</p>
<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code class="c">
django-admin startproject codelab
</code>
</pre>
</div>
<br>
<p>After creating the project you see that the project has successfully create in your directory</p>
<br>
<p><img src=blogimages/d1.webp width=30%></p>
<br>
<h4>3. Now paste this command in the terminal.</h4>
<p>This command will select the project which you have created in the current directory</p>
<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code class="c">
cd codelab
</code>
</pre>
</div>
<h4>4. Now run this command</h4>
<p>this command will generate a local server to run your application.</p>
<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code class="c">
python manage.py runserver
</code>
</pre>
</div>
<p><b>You can access the development server by opening a web browser and navigating to http://127.0.0.1:8000/.</b></p>
<br>
<p>Remember that these steps are subject to change based on the latest developments, so it's always a good idea to refer to the official Django documentation or recent blog posts for the most up-to-date information.</p>
<br>
<br>
<div class=col-md-12>
<div class="ree-card pera-block ree-card-content">
<h5>Explore some links:</h5>
<div class=row>
<div class=col-md-3><a href=intro>Introduction</a></div>
<div class=col-md-3><a href=install>Installation Process</a></div>
<div class=col-md-3><a href=structure>Structure of django</a></div>
<div class=col-md-3><a href=mvc>MVC in django</a></div>
</div>
<div class=row>
<div class=col-md-6><a href=installation-in-ubuntu>Installation in Ubuntu</a></div>
<div class=col-md-3></div>
<div class=col-md-3></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php") ?>
<script src=../js/jquery-3.6.0.min.js></script>
<script src=../js/bootstrap.bundle.min.js></script>
<script src=../js/app.bundle.js></script>
<script src=../js/main.js></script>
<script src=snippet.js></script>
<script>function copyCode(){const codeBlock=document.querySelector('code');const range=document.createRange();range.selectNode(codeBlock);window.getSelection().removeAllRanges();window.getSelection().addRange(range);document.execCommand('copy');window.getSelection().removeAllRanges();}</script>
<script language=javascript type=text/javascript>const buttons=document.querySelectorAll(".faq-toggle");buttons.forEach((button)=>{button.addEventListener("click",()=>button.parentElement.classList.toggle("active"));});</script>
</body>
</html>