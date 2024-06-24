<?php
require_once('dbcon.php');
$query = "select * from indexpage";
$query2= "SELECT * FROM `blogintro`   ORDER BY `id` DESC;";
$query3= "SELECT * FROM `indexjob`   ORDER BY `id` DESC;";
$query4= "SELECT * FROM `dsintro`   ORDER BY `id` DESC;";
$result = mysqli_query($con,$query);
$result2 = mysqli_query($con,$query2);
$result3 = mysqli_query($con,$query3);
$result4 = mysqli_query($con,$query4);
?>
<!DOCTYPE html>
<html lang=zxx class=no-js>
<head>
<meta charset=utf-8>
<title>Codeavenues - Debug Your Daily Coding Problem's</title>
<meta name=description content="codeavenues are offering exciting coding problem's and their best solution's.Debug your Daily coding problem's with our code company." />
<meta name=keywords content="
							 Programming languages,
							 Daily Coding Problem's,
							 codeavenues,
Python,
JavaScript,
Java,
C++,
Ruby,
Swift,
HTML,
CSS,
Web development,
Mobile app development,
Artificial Intelligence (AI),
Machine learning,
Data science,
Blockchain,
Internet of Things (IoT),
Cloud computing,
Cybersecurity,
Full-stack development,
Front-end development,
Back-end development,
Agile development,
DevOps,
Git,
Version control,
API,
Frameworks,
Algorithms,
Data structures,
Code optimization,
User experience (UX) design,
User interface (UI) design,
Testing and debugging,
Automation,
Serverless architecture,
Microservices,
Progressive Web Apps (PWAs),
Chatbots,
Natural Language Processing (NLP),
Virtual Reality (VR) programming.
							 ">
<link rel=canonical href=https://www.codeavenues.com/ />
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name=google-site-verification content=l4dKb_2dJnr_9AsfmgHJ6E_vIgOQxIvCn-e2VKcTfy0 />
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=theme-color content=#e8f1ff>
<meta name=trustpilot-one-time-domain-verification-id content="e1d00248-3e59-49af-9afb-e295f87c822d"/>
<link href=images/faviconc.ico rel=icon>
<link href=css/bootstrap.min.css rel=stylesheet>
<link href=css/plugin.min.css rel=stylesheet>
<link href=css/all.min.css rel=stylesheet>
<link rel=preconnect href=https://fonts.gstatic.com>
<link href=css/style.css rel=stylesheet>
<link href=css/responsive.css rel=stylesheet>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6958761602872755"
     crossorigin="anonymous"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date());gtag("config","G-MS2YWG5G5X");</script>
<style>.alert-box{width:100%;text-align:left}@media only screen and (max-width:1000px){.subs-btn{position:relative!important}}.alert-primary{color:rgba(0,0,0,.85);background-color:#fff;border:1px solid #f0f0f0;border-radius:10px;box-shadow:rgba(0,0,0,0.05) 0 0 0 1px}.nav-tabs .nav-item{margin:0 0 0 10px}.nav-link{border:1px solid #b2babf!important;border-radius:7px!important;font-family:var(--font-primary)!important;font-size:12px!important;padding:5px 15px!important}.nav-link active{background:rgba(0,0,0,.85);color:#fff}.small{background:#1a73e8;color:#fff;padding:7px;border-radius:14px}</style>
</head>
<body>
<div class=onloadpage id=page-load>
<div class=loader-div>
<div class=on-img><img src=images/codeavenue.png alt=Logo class=img-fluid><span></span></div>
</div>
</div>
<?php include('header.php') ?>
<section class="home-hero slide-hero">
<div class="hero-owl owl-carousel">
<div class="slide owlbg11" data-background=images/svg/svg-bg1.svg style=background-image:url(&quot;images/svg/svg-bg1.svg&quot;)>
<div class=container>
<div class=row>
<div class="col-md-6 col-sm-12 vcenter">
<div class=hero-content-x> 💻
<p class="mb10 ree-tt">Are <vikram id=typing-text></vikram></p>
<h1 class=mb30 data-aos=fade-in data-aos-delay=200><span class=ree-tt>CodeAvenues: </span>Debug your daily coding problem's</h1>
<p data-aos=fade-in data-aos-delay=500>🚀 Our website is fully dedicated to Developer's, Student's and those who are interested in coding, development can use our job section and our daily article's in their journey.
🚀.
</p>
<br>
<form class=mt20 style=position:relative!important>
<input type=text name=subs id=subs-email placeholder="Enter Email..." class=subs-input>
<button class="ree-btn-grdt1 subs-btn">Start Your Journey⚡️
</button>
</form>
</div>
</div>
<div class="col-md-6 col-sm-12 vcenter">
<div class="sol-image m-mt30">
<img src=images/sliders/girl-bro.svg alt="web development" class=img-fluid data-aos=fade-in data-aos-delay=400>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="r-bg-i sec-pad digi-service">
<div class=container>
<div class="row justify-content-center">
<div class=col-lg-8>
<div class="sec-heading text-center pera-block">
<h2>Explore Our Cutting-Edge <span class=ree-tt> Articles</span></h2>
</div>
</div>
</div>
<div class="row mt30">
<div class="col-lg-12 col-sm-12 mt30" data-aos=fade-up data-aos-delay=1000>
<div class="ree-card bhv-tt">
<div class=container>
<div class="row justify-content-center" style=width:100%!important>
<div class="tab-17 tabs-layout">
<ul class="nav nav-tabs justify-content-center" id=myTab3 role=tablist>
	
<li class=nav-item><a class="nav-link active" id=tab1a data-toggle=tab href=#tab1 role=tab aria-controls=tab1 aria-selected=true>All</a>
</li>
<li class=nav-item><a class=nav-link id=tab2b data-toggle=tab href=#tab2 role=tab aria-controls=tab2 aria-selected=false>Jobs</a></li>
<li class=nav-item><a class=nav-link id=tab3b data-toggle=tab href=#tab3 role=tab aria-controls=tab3 aria-selected=false>DataStructure</a></li>
</ul>
<div class=tab-content id=myTabContent3>
<div class="tab-pane fade active show" id=tab1 role=tabpanel aria-labelledby=tab1a>
<div class=tab-data-cont>
<div class=row>
<?php
                        while($row = mysqli_fetch_assoc($result2))
                        {
                            ?>
<div class="alert alert-primary alert-box ant-card" role=alert>
<a href=<?php echo ($row['link']); ?>>
<h6><span class="spinner-grow text-success" role=status style=width:1rem;height:1rem></span>&nbsp;&nbsp;
<?php echo $row['heading']; ?></h6>
<p> <?php echo $row['text']; ?><a href=<?php echo ($row['link']); ?>>Read More</a></p>
</a>
<br><br>
<p><i class="fa fa-rss" aria-hidden=true></i>&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag1']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag2']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag3']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag4']; ?></a></p>
</div>
<?php
						}?>
</div>
</div>
</div>
<div class=tab-pane id=tab2 role=tabpanel aria-labelledby=tab2a>
<div class=tab-data-cont>
<div class=row>
<?php
                        while($row = mysqli_fetch_assoc($result3))
                        {
                            ?>
<div class="alert alert-primary alert-box ant-card" role=alert>
<a href=<?php echo ($row['link']); ?>>
<h6><span class="spinner-grow text-success" role=status style=width:1rem;height:1rem></span>&nbsp;&nbsp;
<?php echo $row['heading']; ?></h6>
<p> <?php echo $row['text']; ?><a href=<?php echo ($row['link']); ?>>Apply Now</a></p>
</a>
<br><br>
<p><i class="fa fa-rss" aria-hidden=true></i>&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag1']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag2']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag3']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag4']; ?></a></p>
</div>
<?php
						}?>
</div>
</div>
</div>
<div class=tab-pane id=tab3 role=tabpanel aria-labelledby=tab3a>
<div class=tab-data-cont>
<div class=row>
<?php
                        while($row = mysqli_fetch_assoc($result4))
                        {
                            ?>
<div class="alert alert-primary alert-box ant-card" role=alert>
<a href=<?php echo ($row['link']); ?>>
<h6><span class="spinner-grow text-success" role=status style=width:1rem;height:1rem></span>&nbsp;&nbsp;
<?php echo $row['heading']; ?></h6>
<p> <?php echo $row['text']; ?><a href=<?php echo ($row['link']); ?>>Read More</a></p>
</a>
<br><br>
<p><i class="fa fa-rss" aria-hidden=true></i>&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag1']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag2']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag3']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=# class=small> <?php echo $row['tag4']; ?></a></p>
</div>
<?php
						}?>
</div>
</div>
</div>
<div class=tab-pane id=tab4 role=tabpanel aria-labelledby=tab4a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Fourth tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab5 role=tabpanel aria-labelledby=tab5a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Fifth tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab6 role=tabpanel aria-labelledby=tab6a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Six tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab7 role=tabpanel aria-labelledby=tab7a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Seven tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab8 role=tabpanel aria-labelledby=tab8a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Eight tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab9 role=tabpanel aria-labelledby=tab9a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Nine tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab10 role=tabpanel aria-labelledby=tab10a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is 10 tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab11 role=tabpanel aria-labelledby=tab11a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Eleven tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab12 role=tabpanel aria-labelledby=tab12a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Twelve tab</h1>
</div>
</div>
</div>
</div>
<div class=tab-pane id=tab13 role=tabpanel aria-labelledby=tab13a>
<div class=tab-data-cont>
<div class="row justify-content-center">
<div class="col-lg-2 col-md-3 col-sm-4 col-6">
<h1>this is Thirteen tab</h1>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="home-about sec-pad r-bg-a">
<div class=container>
<div class="row justify-content-center">
<div class=col-lg-10>
<div class="about-content-home m-mb60 pera-block text-center">
<h2>We Work With <span class=ree-tt>Great Companies</span> of All Sizes</h2>
<p>
We are continuously try to solve most typical query on great websites and help many programmer's to grow in their carrier path.
</p>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-10 mt60">
<div class=client-logo-set>
<a href="https://stackoverflow.com"><img src=images/stackoverflow.webp alt="client logo"></a>
<a href="https://newsguru.live/"><img src=images/newsguru.webp alt="client logo"></a>
</div>
</div>
</div>
</div>
</section>
<?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
<section class="home-hero lead-gen">
<div class=container>
<div class=row>
<div class="col-lg-5 vcenter">
<div class="hero-content pera-block">
<span class="sub-heading mb15" style=text-transform:none!important>Let's Grow Together</span>
<h1 data-aos=fade-in data-aos-delay=200>Unite, Learn, and Innovate Together!</h1>
<p data-aos=fade-in data-aos-delay=500>🚀<?php echo $row['section2']; ?>
🚀</p>
<a href=# class="ree-btn ree-btn-grdt1 mt40 mw-80" data-aos=fade-in data-aos-delay=800>Join Our Community<i class="fas fa-arrow-right fa-btn"></i></a>
</div>
</div>
<div class="col-lg-7 vcenter">
<div class="sol-image m-mt30">
<img src=images/hero/funnel-1.png alt="web development" class=img-fluid data-aos=fade-in data-aos-delay=400>
</div>
</div>
</div>
</div>
</section>
<section class="r-bg-x zup sec-pad">
<div class=container>
<div class="row justify-content-center">
<div class=col-lg-4>
<div class="sol-img m-mt30">
<img src=images/others/team-business.jpg alt="reevan office" class=img-fluid>
</div>
</div>
<?php
                        }

                        ?>
<div class=col-lg-7>
<div class="pera-block ml50">
<h2> Frequently Asked<span class=ree-tt> Question's</span></h2>
<p>
</p>
<section class="home-partners-block r-bg-x">
<div class=container>
<div class="row mt60">
<div class=col-lg-12>
<div class=feature-list>
<div id=accordionExample class="accordion ac-1">
<div class=cards>
<div id=heading1 class=card-header>
<h6 class=mb-0><a href=https://www.codeavenues.com/article data-toggle=collapse data-target=#collapse1 aria-expanded=true aria-controls=collapse1 class="d-block collapsed collapsible-link">Real time and latest technology case studies and articles.</a></h6>
</div>
<div id=collapse1 aria-labelledby=heading1 data-parent=#accordionExample class="collapse show">
<div class="card-body p-4">
<p class="font-weight-light m-0">Real time blogs and case study on companies and their project's.Helping the student's and developer's to introduce with new technologies</p>
</div>
</div>
</div>
<div class=cards>
<div id=heading6 class=card-header>
<h6 class=mb-0><a href=https://www.codeavenues.com/free-jobs-near-me data-toggle=collapse data-target=#collapse6 aria-expanded=false aria-controls=collapse6 class="d-block collapsed collapsible-link">Helping student's and developer's to get their dream job.</a></h6>
</div>
<div id=collapse6 aria-labelledby=heading6 data-parent=#accordionExample class=collapse>
<div class="card-body p-4">
<p class="font-weight-light m-0">Take benefits of our daily job posting and get your dream job to fullfil their requirement's</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</section>
<?php include('footer.php') ?>
<script src=js/modernizr-3.5.0.min.js></script>
<script src=js/jquery-3.6.0.min.js></script>
<script src=js/bootstrap.bundle.min.js></script>
<script src=js/app.bundle.js></script>
<script src=js/parallax.min.js></script>
<script src=js/main.js></script>
<script>const textElement=document.getElementById("typing-text");const textToType="you ready to debug your code problems?";let index=0;let isErasing=false;function typeAndErase(){if(isErasing){textElement.textContent=textToType.slice(0,index);index--;if(index<0){isErasing=false}}else{textElement.textContent=textToType.slice(0,index);index++;if(index>textToType.length){isErasing=true}}}setInterval(typeAndErase,100);</script>
</body>
</html>