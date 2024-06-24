
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title>How to deploy webapp and restful api on pythonanywhere</title>
<meta name="description" content="Deploy your django webapplication and restful django api on pythonanywhere. Follow all the steps and get result.">
<meta name="keywords" content="
							   deploy webapp python anywhere,
							   deploy python web app on aws,
							   deploy python webapp,
							   pythonanwhere web app,
							   deploy flask app to pythonanywhere,
							   python webapp aws,
							   azure deploy python web app
							   how to deploy django app on pythonanywhere,
							   cpanel python app,
							   deploy python script as web service,
							   deploy python app on elastic beanstalk,
							   deploy python script as web service,
							   deploy python app on elastic bean stalk,
							   web python environment,
							   deploy django pythonanywhere,
							   python script to deploy ear in websphere,
							   how to deploy a django app on aws,
							   kubernetes deploy webapp ,
							   python web development,
							   python anywhere django tutorial,
							   pythonanywhere tutorail,
							   pyqt deploy,
							   run python website,
							   deploy python app azure app service,
							   web2py deployment,
							   python web3 deploy contract,
							   web deploy 403 forbidden
							   ">
<meta name="author" content="codeavenues">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#e8f1ff">

<link href="images/faviconc.ico" rel="icon">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/plugin.min.css" rel="stylesheet">
<link href="css/all.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Varela+Round&display=swap" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/themes/prism.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/components/prism-python.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="css/upstyle.css">
	<script src="//servedby.studads.com/ads/ads.php?t=MTkxMzg7MTI4MDc7aG9yaXpvbnRhbC5iYW5uZXI=&index=1"></script>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MS2YWG5G5X');
</script>
</head>
<body>

<div class="onloadpage" id="page-load">
<div class="loader-div">
<div class="on-img"><img src="images/loader.gif" alt="Logo" class="img-fluid"><span>Loading Please Wait...</span></div>
</div>
</div>
<?php include('header.php') ?>

<div class="r-bg-a pt85">
<div class="container w-992">
<div class="row pt80">
<div class="col-lg-12">
<div class="page-headings text-center">
<ul class="breadcrus mb20">
<li class="bread-non"><a href="blog.html">All Blog Posts</a></li>
<li>&nbsp;/&nbsp;</li>
<li class="bread-active"><a href="#">pythonanywhere</a></li>
</ul>
<h1>How to deploy webApp and API's on Pythonanywhere</h1>
</div>
</div>
</div>
</div>
</div>
<div class="r-bg-x pb120">
<div class="container w-992">
<div class="blog-details">
<div class="row">
<div class="col-lg-12">
<div class="sol-img mt60"><img src="images/python/img1.webp" alt="blog" class="img-fluid"> </div>
<div class="ree-blog-details">
<div class="info-bar">
<div class="info-b-left"> <a href="#">#python</a> <a href="www.codeavenues.com/django/intro">#django</a> <a href="#">#deploy</a> <a href="#">#restframework</a> <a href="#">#api</a> </div>
<div class="info-b-right">By <a href="#">anonymous</a> • <span>today</span> </div>
</div>
<p>Deploy a django application on pythonanywhere is same as deploy the application on your localhost. Please note that the steps may vary slightly depending on the specific versions of Django and PythonAnywhere you're using, so always refer to their documentation for the most up-to-date instructions.</p>
	<p><b>Here's a general overview of the process</b></p>
<h4>1. Create a PythonAnywhere Account:</h4>
<p>If you don't already have one, sign up for a PythonAnywhere account at<mark>https://www.pythonanywhere.com/</mark>. Choose the "Beginner" plan, which is free.</p>
	<h4>2. Uploading your code to PythonAnywhere</h4>
	<p>put your code on sharing site like GitHub or Bitbucket, you can just clone it from a <b>Bash Console</b>.</p>
	<p><b>For Example</b> run this command:</p>
	<p><mark>$ git clone https://github.com/myusername/myproject.git</mark></p>
<p>if you facing any clone error the please follow this page<a href="#" id="info-anchor"> git authentication error</a></p>
	<h4>3. Set Up a Virtual Environment:</h4>
<p>Once you're logged in to PythonAnywhere, navigate to the "Consoles" tab and start a new Bash console. Use the following commands to create and activate a virtual environment:</p>
	  <div class="container-box">
        <div class="code-container">
            <pre class="line-numbers">
                <code class="language-python">
                    # Copy these commands
                 $ mkvirtualenv --python=/usr/bin/python3.10 mysite-virtualenv
                 (mysite-virtualenv)$ pip install django

                </code>
            </pre>
            <button class="copy-button" onclick="copyCode()">
                <i class="fas fa-copy"></i>
            </button>
        </div>
    </div>
	<h4>4. Install Dependencies:</h4>
	<p>Install your project's dependencies using pip:</p>
	<p>Run the command:</p>
	<p><mark>(mysite-virtualenv)$ pip install -r requirements.txt</mark></p>
	<p><b>Warning</b> this process take time so please wait until the process is over.</p>
	
	<h4>5. Setting up your Web app and WSGI file</h4>
<p>At this point, you need to be armed with 3 pieces of information:</p>
<ul class="ul-list mb10">
<li>The path to your Django project's top folder -- the folder that contains "manage.py", eg /home/myusername/mysite</li>
<li>The name of your project (that's the name of the folder that contains your settings.py), eg mysite</li>
<li>The name of your virtualenv, eg mysite-virtualenv</li>
</ul>
	<h6>1. Create a Web app with Manual Config</h6>
	<p>Click on the Web tab and make manual configuration after requirements.txt installation sucessfully.</p>
	<img src="images/python/img3.webp" width="50%"/>
	<p><b>NOTE</b>: Make sure you choose Manual Configuration, not the "Django" option, that's for new projects only.</p>
	<h6>2. Enter your virtualenv path in this section</h6>
	<img src="images/python/img4.webp" width="50%"/>
	<p>Note: enter the full pathe of the virtualenv shown in the above figure</p>	
	<h6>3. Then paste the full path of your code</h6>
	<p>paste the full path of your source code and working directory in which your application resides.</p>
	<img src="images/python/img2.webp" width="70%"/>
	<h4>7. Configure WSGI File:</h4>
	<p>In the "Web" tab, find the "WSGI configuration file" section and configure it to point to your Django project's WSGI file. It might look something like this:</p>
	 <div class="container-box">
        <div class="code-container">
            <pre class="line-numbers">
                <code class="language-python">
                    # Copy these commands
                 import os
                 import sys

                  path = '/path/to/your/django/project'
                  if path not in sys.path:
                      sys.path.append(path)

                   from django.core.wsgi import get_wsgi_application
                   os.environ['DJANGO_SETTINGS_MODULE'] = 'your_project.settings'
                   application = get_wsgi_application()


                </code>
            </pre>
            <button class="copy-button" onclick="copyCode()">
                <i class="fas fa-copy"></i>
            </button>
        </div>
    </div>
	<p>Delete all the code before paste these command in the wsgi file and ctrl+s for save the file.</p>
	<h4>8. Reload the Web App:</h4>
	<p>
Reload your web app on PythonAnywhere to apply the changes.</p>
	<h4>Open the App:</h4>
<p>Once everything is set up, you should be able to access your Django app by clicking the link provided in the "Web" tab.</p>
	<p>That's a basic overview of how to deploy a Django app on PythonAnywhere. Keep in mind that this is a simplified guide, and you might encounter specific issues based on your project's configuration and dependencies. Be sure to refer to the official PythonAnywhere documentation and Django documentation for more detailed and up-to-date instructions.
</p>
</div>
<div class="center-btn"> <a href="#" class="ree-btn  ree-btn-grdt2 mr20">Back to Blogs <i class="fas fa-arrow-left fa-btn"></i></a> </div>
</div>
</div>
</div>
</div>
</div>


<?php include('footer.php') ?>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/app.bundle.js"></script>

<script src="js/main.js"></script>
	<script>
        function copyCode() {
    var codeElement = document.querySelector('code');
    var textArea = document.createElement('textarea');
    textArea.value = codeElement.textContent;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand('copy');
    document.body.removeChild(textArea);
    alert('Code copied to clipboard!');
}
	</script>
<script language="javascript" type="text/javascript">
offset_12807 = 0;
keyword_12807 = '';
sid_12807='';
sem_12807='';
document.write("<script language='javascript' type='text/javascript' src='//servedby.studads.com/ads/ads.php?t=MTkxMzg7MTI4MDc7aG9yaXpvbnRhbC5iYW5uZXI=&o=" + offset_12807 + "&k=" + escape(keyword_12807)  + "&sid=" + escape(sid_12807) + "&sem=" + escape(sem_12807) + "'><\/sc" + "ript>");
</script>
</body>
</html>