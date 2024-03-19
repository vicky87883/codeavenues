<!DOCTYPE html>
<html lang=en class=no-js>
<head>
<meta charset=utf-8 />
<title>Understand the Django structure its working in easy way</title>
<link rel=canonical href=https://www.codeavenues.com/django/structure />
<meta name=description content="
Basic structure of django framework and its explore Model view classes(MVT) in detail">
<meta name=google-site-verification content=l4dKb_2dJnr_9AsfmgHJ6E_vIgOQxIvCn-e2VKcTfy0 />
<meta name=keywords content="django installation,
							 Python django structure,
							 django structured logging,
							 django structure best practices,
							 template django structure,
							 django structure mvt,
							 django structure example,
							 django structure layout,
							 django structure of queryset,
							 django structure data,
							 django structure explained,
							 django structure and flow,
							 django structure and best practices,
							 django write api,
							 django write app,
							 django write file,
							 django write a custom widget
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
Structure of Django Framework:
</h3>
<br>
<p><b>Let us discuss the structure of django framework.</b></p>
<p>In this simple guide, we're going to break down the structure of <a href=intro>Django</a>, the web framework that makes building websites easier. No technical jargon, just straightforward explanations. We'll show you how <a href=intro>Django</a> is organized so you can understand its different parts and how they work together. Let's get started on your journey to grasp the structure of Django!
</p>
<br>
<h4>1. Project vs. App :</h4>
<br>
<p>At the core of Django's structure lies the distinction between a project and an app.</p>
<br>
<p><b>➯ Project</b>: A Django project is the entire web application. It encompasses everything required to run your website, including settings, URL configurations, and multiple apps.</p>
<br>
<p><b>➯ App</b>: An app, on the other hand, is a modular component within a project that encapsulates specific functionalities. Each app can have its models, views, templates, and more.</p>
<br>
<h4>2. The Project Directory:</h4>
<br>
<p>When you create a new Django project, it generates a directory structure that serves as the foundation for your application. Here's a simplified breakdown of the essential components:</p>
<br>
<p><img src=blogimages/img6.webp /></p>
<br>
<p><b>➯ manage.py</b>: A command-line utility that simplifies administrative tasks and provides a convenient way to interact with your project.</p>
<br>
<p><b>➯ projectname/</b>: The project directory, containing settings and configuration files.</p>
<p> ● settings.py: This is where you configure your project's settings, including database connections, installed apps, and more.</p>
<p> ● urls.py: The URL configuration for your project, mapping URLs to views within your apps.</p>
<p> ● wsgi.py: A gateway interface used to serve your Django project using web servers like <a>Apache or Nginx</a>.</p>
<p> ● asgi.py: A similar interface to wsgi.py, used for asynchronous web servers.</p>
<br>
<p><b>➯ apps/</b>: This is where you can create and manage your individual apps.</p>
<br>
<p><b>➯ appname/</b>: Each app has its own directory.</p>
<p>● models.py: Define your database models using <a>Django's Object-Relational Mapping (ORM)</a>.</p>
<p>● views.py: Handle user requests, process data, and return responses.</p>
<p>● urls.py: Configure URL routing specific to the app.</p>
<br>
<p><b>➯ templates/</b>: Store HTML templates for rendering dynamic content.</p>
<br>
<p><b>➯ static/</b>: Place static files like CSS, JavaScript, and images.</p>
<br>
<h4>3. The MVT Architecture:</h4>
<br>
<p>Django follows a Model-View-Template (MVT) architecture, which is an adaptation of the Model-View-Controller (MVC) pattern.</p>
<br>
<p><b>➯ Model</b>: Represents the data structure of your application. Models define the database schema and interactions.</p>
<br>
<p><b>➯ View</b>: Handles the logic and processing of user requests. Views interact with models to retrieve data and templates to render the response.</p>
<br>
<p><b>➯ Template</b>: Defines how data from views is presented to users. Templates contain placeholders for dynamic content and enable HTML rendering.</p>
<br>
<h4>4. URL Routing:</h4>
<br>
<p>Django's URL routing system directs incoming requests to the appropriate views within your apps.</p>
<br>
<p><b>➯ urls.py</b>: In the project directory, each app has its own urls.py file to define URL patterns specific to the app.</p>
<br>
<h4>5. DRY Principle:</h4>
<br>
<p>Django promotes the <a>"Don't Repeat Yourself" (DRY) principle</a>, emphasizing code reusability and maintainability. The framework's structure encourages modular development and the reuse of components across projects.</p>
<br>
<div class=col-md-12>
<div class="ree-card pera-block ree-card-content">
<h5>Explore some links:</h5>
<div class=row>
<div class=col-md-3><a href=intro>Introduction</a></div>
<div class=col-md-3><a href=install>Installation Process</a></div>
<div class=col-md-3><a href=structure>Structure of django</a></div>
<div class=col-md-3><a href></a></div>
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
<script language=javascript type=text/javascript>const buttons=document.querySelectorAll(".faq-toggle");buttons.forEach((button)=>{button.addEventListener("click",()=>button.parentElement.classList.toggle("active"));});</script>
</body>
</html>