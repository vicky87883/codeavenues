<!DOCTYPE html>
<html lang=en class=no-js>
<head>
<meta charset=utf-8 />
<title>Installation and setup of django | Complete Guide from beginner to advance</title>
<link rel=canonical href=https://www.codeavenues.com/django/install />
<meta name=description content="
Installation of django in windows, windows 11. using pycharm IDE with latest version">
<meta name=google-site-verification content=l4dKb_2dJnr_9AsfmgHJ6E_vIgOQxIvCn-e2VKcTfy0 />
<meta name=keywords content="django installation,
							 google installation django,
							 google django installation,
							 install django in environment,
							 install django-filters,
							 install six django,
							 install knox django,
							 django google app engine,
							 django google,
							 django google drive,
							 google django,
							 django google cloud run,
							 install django extension,
							 how to install django mac,
							 host django on google cloud,
							 instalar django,
							 how to install django on ubuntu,
							 install django linux,
							 install django python,
							 install django python3,
							 installing django mac,
							 
							 
							 django allauth google,
							 google app engine django,
							 how to use google map api in django,
							 django social auth google,
							 django-baton missing google analytics optional dependencies,
							 google django
							 python django installation,
							 python django installation steps,
							 pythonenc install django installtion failed,
							 newrelic django installation,
							 django installation in windows,
							 django installation in windows 11,
							 django installation in vscode,
							 django installation in pycharm,
							 django installation in windows,
							 django installation command,
							 django install app,
							 django install anaconda,
							 django install all dependencies,
							 django install all requirements
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
<link href=../css/style.css rel=stylesheet>
<link href=../css/responsive.css rel=stylesheet>
<link href=sidebar.css rel=stylesheet>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin=anonymous referrerpolicy=no-referrer />
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-MS2YWG5G5X');</script>
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
Installation Of Django Framework:
</h3>
<br>
<p><b>Let us discuss about installation process of django framework.</b></p>
<p>In this guide, we'll walk you through the installation process of Django, from setting up the prerequisites to getting your first project up and running. Let's dive in and unlock the world of web development with Django.
</p>
<br>
<h4>Prerequisites:</h4>
<br>
<p>Before you can use django, you'll need to install python.</p>
<br>
<p><b>➯ Python</b>: Django is built using Python, so you'll need to have Python installed on your system. Visit the official Python website <a>(https://www.python.org/)</a> to download and install the latest version suitable for your operating system.</p>
<br>
<p><b>➯ Pip (Python Package Installer)</b>: Pip is a package manager for Python that simplifies the installation of libraries and frameworks. Most likely, it's already included with your Python installation. You can check by opening a terminal or command prompt and running the command <a>pip --version</a>.</p>
<br>
<h3>Quick Installation:</h3>
<br>
<p>Now that you have Python and Pip ready, let's proceed with the installation of Django. Follow these steps:</p>
<p><b>➯ Open a Terminal or Command Prompt</b>:</p>
<img src=blogimages/pycharm.webp width="60%"/>
<p>In this tutorial we are using Pycharm IDE for django installation. you need to install pycharm for windows. You can download IDE from Link:<a>https://www.jetbrains.com/pycharm/</a></p>
<br>
<p><b>➯ Install Django Using Pip</b>:</p>
<br>
<p>In the pycharm terminal, run the following command:</p>
<br>
<p><img src=blogimages/img1.webp width=80% /></p>
<br>
<p><b>➯ Verify the Installation:</b></p>
<br>
<p>After the installation is complete, you can verify it by running:</p>
<br>
<p><img src=blogimages/img2.webp width="80%"/></p>
<br>
<p>This command will display the installed Django version. If you see the version number, congratulations! You've successfully installed Django.</p>
<br>
<h3>Create your first Project</h3>
<p>With Django installed, it's time to create your first project. Follow these steps:</p>
<br>
<p><b>➯ Choose a Directory:</b></p>
<p>Decide where you want to create your project directory. Navigate to that location in your terminal using the cd command.</p>
<br>
<p><b>➯ Create a Django Project</b>:</p>
<br>
<p>Run the following command to create a new Django project:</p>
<br>
<p><img src=blogimages/img3.webp width="80%"/></p>
<br>
<p>Replace projectname with the name you want to give your project.</p>
<br>
<h4>➯ Running the Development Server:</h4>
<br>
<p>Django includes a development server that allows you to preview your project locally. Here's how to get it running:</p>
<br>
<p><b>Start the Development Server:</b></p>
<br>
<p>In your project directory, run:</p>
<br>
<p>➯ <a>python manage.py runserver</a></p>
<br>
<p><img src=blogimages/img4.webp width="80%"/></p>
<br>
<p>This command starts the development server, and you'll see output indicating that the server is running.</p>
<br>
<p><b>Preview Your Project</b>:</p>
<br>
<p>Open your web browser and go to <a>http://127.0.0.1:8000/</a>. You should see the default Django <a>"Welcome to Django"</a> page.</p>
<br>
<p><img src=blogimages/img5.webp width="80%"/></p>
<div class=col-md-12>
<div class="ree-card pera-block ree-card-content">
<h5>Explore some links:</h5>
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
<script language=javascript type=text/javascript>const buttons=document.querySelectorAll(".faq-toggle");buttons.forEach((button)=>{button.addEventListener("click",()=>button.parentElement.classList.toggle("active"));});</script>
</body>
</html>