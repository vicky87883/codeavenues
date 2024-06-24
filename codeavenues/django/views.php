<!DOCTYPE html>
<html lang=en class=no-js>
<head>
<meta charset=utf-8 />
<title>What Is Purpose Of views.py File in Django(Python Web Framework): A Beginner's Guide</title>
<link rel=canonical href=https://www.codeavenues.com/django/views />
<meta name=description content="
 Let's know how views.py file render the html pages using urls.py and how views.py file call various functions to render these pages">
<meta name=google-site-verification content=l4dKb_2dJnr_9AsfmgHJ6E_vIgOQxIvCn-e2VKcTfy0 />
<meta name=keywords content="views in django,
							 generic views in django,
							 class based views in django,
							 import views in django,
							 types of views in django,
							 generic views in django,
							 how to create views in django rest framework,
							 pass value from html to views in django,
							 api views in django,
							 urls and views in django,
							 async views in django,
							 what are generic views in django,
							 add views in django,
							 adding views in django,
							 django access settings variables in views,
							 args and kwargs in django views,
							 how to get ajax data in django views,
							 in django views are written as,
							 authenticate in views django,
							 alert in django views,
							 function based views in django,
							 function based views in django rest framework,
							 base views in django,
							 django built in views,
							 pagination in function based views django,
							 django pagination in class based views,
							 decorators in django class based views,
							 login required in class based views django,
							 how to create class based views in django,
							 creating views in django,
							 count page views in django,
							 how to get current url in django views,
							 how to create views.py in django,
							 context in django views,
							 built in class based views django,
							 database views in django,
							 dynamic views in django,
							 delete in django views,
							 how to change data format in django views,
							 get post data in djanog views,
							 django views.py in project directory
							 							 
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
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/themes/prism.min.css>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.css>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
<link href=../css/style.css rel=stylesheet>
<link href=../css/responsive.css rel=stylesheet>
<link href=sidebar.css rel=stylesheet>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin=anonymous referrerpolicy=no-referrer />
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/prism.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/components/prism-python.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.js></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2HLEG6VPPV"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-2HLEG6VPPV');<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-MS2YWG5G5X');</script>
<style>.container-box{background-color:#fff;border-radius:5px;box-shadow:0 0 10px rgba(0,0,0,0.1);width:80%}.code-container{position:relative}#pre{background-color:#f7f7f7;border-radius:5px;padding:15px;overflow-x:auto;margin:0}code{font-family:Consolas,monospace;color:#333}.copy-button{position:absolute;top:10px;right:10px;padding:5px 10px;background-color:#007bff;color:#fff;border:0;border-radius:3px;cursor:pointer}pre[class*=language-].line-numbers{padding-left:0}</style>
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
Purpose Of views.py File In Django:
</h3>
<br>
<p><b>Let us discuss views.py in django framework.</b></p>
<p>Imagine you're a tour guide for your website visitors. You lead them to different attractions, share stories, and provide information. In Django, views play a similar role. They handle incoming web requests and decide what content to display in response. Views serve as the bridge between your website's data and the HTML templates that create the user interface.</p>
<br>
<h3></h3>
<h4>Creating Your First View: A Basic Example</h4>
<p>Let's say you're building a website for a pizzeria. You want a page that displays a list of available pizzas. Here's how you can create a simple view for this using Django:</p>
<p>1. Open your app's views.py file (located inside your app's folder).</p>
<p>2. Import the necessary modules:</p>
<br>
<div class=container-box>
<div class=code-container id=snippet1>
<pre class=line-numbers id=#pre>
                <code class="language-python">from django.shortcuts import render</code>
            </pre>
<button class=copy-button onclick="copyCode('snippet1')">
<i class="far fa-copy"></i> Copy
</button>
</div>
</div>
<br>
<p><b>Define your view function. In this case, let's create a function named pizza_list:</b></p>
<br>
<h4>3. Write your First View.</h4>
<div class=container-box id=snippet2>
<div class="code-container code">
<pre class=line-numbers id=#pre>
                <code class="language-python">
			     def pizza_list(request):
                 pizzas = ['Margherita', 'Pepperoni', 'Supreme', 'Hawaiian']
                 return render(request, 'pizzeria/pizza_list.html', {'pizzas': pizzas})
				</code>
            </pre>
<button class=copy-button onclick="copyCode('snippet2')">
<i class="far fa-copy"></i> Copy
</button>
</div>
</div>
<br>
<p>In this function, we've prepared a list of pizzas. We then use the render function to generate an HTTP response containing an HTML template. The pizza_list.html template will be used to display the list of pizzas.</p>
<br>
<h4>Connecting URLs to Views</h4>
<p>Now that you've defined your view, it's time to connect it to a URL so users can access it. Follow these steps:</p>
<p>1. Create a urls.py file in your app's folder if it doesn't exist already.</p>
<p>2. Import the necessary modules:</p>
<br>
<div class=container-box id=snippet2>
<div class="code-container code">
<pre class=line-numbers id=#pre>
                <code class="language-python">
			    from django.urls import path
                from . import views
				</code>
            </pre>
<button class=copy-button onclick="copyCode('snippet2')">
<i class="far fa-copy"></i> Copy
</button>
</div>
</div>
<br>
<p>Define the URL pattern for your view. Add the following code to the urlpatterns list:</p>
<br>
<div class=container-box id=snippet2>
<div class="code-container code">
<pre class=line-numbers id=#pre>
                <code class="language-python">
			    urlpatterns = [
                path('pizzas/', views.pizza_list, name='pizza_list'),
                ]
				</code>
            </pre>
<button class=copy-button onclick="copyCode('snippet2')">
<i class="far fa-copy"></i> Copy
</button>
</div>
</div>
<br>
<p>Here, we've specified that when users visit /pizzas/, they'll be directed to the pizza_list view.</p>
<br>
<h4>Creating the Template:</h4>
<p>To display the list of pizzas, you need an HTML template. <mark>Create a templates folder within your app's folder if it doesn't exist</mark>. Inside the templates folder,<mark> create a subfolder named after your app (let's call it pizzeria)</mark>. <mark>In the pizzeria folder, create a file named pizza_list.html.</mark>
In pizza_list.html, you can use Django template language to loop through the list of pizzas and display them:</p>
<br>
<div class=container-box id=snippet2>
<div class="code-container code">
<pre class=line-numbers id=#pre>
                <code class="language-python">
                 &lt;!DOCTYPE html&gt;
                 &lt;html&gt;
                 &lt;head&gt;
                 &lt;title&gt;Pizza List&lt;/title&gt;
                 &lt;/head&gt;
                 &lt;body&gt;
                 &lt;h1&gt;Welcome to Our Pizzeria!&lt;/h1&gt;
                 &lt;h2&gt;Available Pizzas:&lt;/h2&gt;
                 &lt;ul&gt;
                 {% for pizza in pizzas %}
                 &lt;li&gt;{{ pizza }}&lt;/li&gt;
                 {% endfor %}
                 &lt;/ul&gt;
                 &lt;/body&gt;
                 &lt;/html&gt;
				</code>
            </pre>
<button class=copy-button onclick="copyCode('snippet2')">
<i class="far fa-copy"></i> Copy
</button>
</div>
</div>
<br>
<h4>Testing Your View</h4>
<br>
<p>To see your view in action, follow these steps:</p>
<br>
<p>Run the development server:</p>
<br>
<div class=container-box id=snippet2>
<div class="code-container code">
<pre class=line-numbers id=#pre>
                <code class="language-python">
			    python manage.py runserver
				</code>
            </pre>
<button class=copy-button onclick="copyCode('snippet2')">
<i class="far fa-copy"></i> Copy
</button>
</div>
</div>
<p>Open your web browser and visit <mark>http://127.0.0.1:8000/pizzas/</mark>.</p>
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
<script>document.body.addEventListener('click',function(event){if(event.target.classList.contains('copy-icon')){var snippetId=event.target.getAttribute('data-snippet');copyCode(snippetId);}});function copyCode(snippetId){var codeElement=document.querySelector(`#${snippetId}code`);var range=document.createRange();range.selectNode(codeElement);window.getSelection().removeAllRanges();window.getSelection().addRange(range);document.execCommand('copy');window.getSelection().removeAllRanges();}</script>
<script language=javascript type=text/javascript>const buttons=document.querySelectorAll(".faq-toggle");buttons.forEach((button)=>{button.addEventListener("click",()=>button.parentElement.classList.toggle("active"));});</script>
</body>
</html>