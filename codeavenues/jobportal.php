<?php
require_once('dbcon.php');
$query = "SELECT * FROM `jobcap`   ORDER BY `id` DESC;";
$result = mysqli_query($con,$query);
?>
<?php include "script.php" ?>
<!DOCTYPE html>
<html lang=en class=no-js>
<head>
<meta charset=utf-8 />
<title>Free Jobs Near me</title>
<link rel=canonical href=https://www.codeavenues.com/jobportal />
<meta name=description content="Work from home , part time jobs , typing data entry jobs , captcha typing jobs , online jobs , government jobs vacancy , naukri , earn money online, Free jobs near me">
<meta name=keywords content="google jobs,
							   google jobs gurgaon,
							   google hiring,
							   google hiring process,
							   google hiring 2023,
							 Free jobs near me,
							   google hiring freshers,
							   google jobs work from home,
							   google jobs for freshers,
							   interships in google,
							   google ctc,
							   facebook jobs linkedin,
							   google jobs in az,
							   google jobs in finance,
							   google jobs in arizona,
							   google jobs in india,
							   google jobs linkedin,
							   google jobs in las vegas,
							   business jobs in google,
							   google jobs in boston,
							   google jobs in dc,
							   google jobs in dallas,
							   director jobs in google,
							   linkedin jobs google,
							   hr jobs at facebook,
							   hr jobs for google,
							   how to get a job in facebook or google
							   ">
<meta name=author content=codeavenues>
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=theme-color content=#e8f1ff>
<link href=images/faviconc.ico rel=icon>
<link href=css/bootstrap.min.css rel=stylesheet>
<link href=css/plugin.min.css rel=stylesheet>
<link href=css/all.min.css rel=stylesheet>
<link rel=preconnect href=https://fonts.gstatic.com>
<link rel=preconnect href=https://fonts.gstatic.com>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel=stylesheet>
<link href=css/style.css rel=stylesheet>
<link href=css/responsive.css rel=stylesheet>
<meta name=google-site-verification content=l4dKb_2dJnr_9AsfmgHJ6E_vIgOQxIvCn-e2VKcTfy0 />
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2HLEG6VPPV"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date());gtag("config","G-2HLEG6VPPV");</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6958761602872755" crossorigin=anonymous></script>
<script>(function(e,k,a,c,m){e[c]=e[c]||[];e[c].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var b=k.getElementsByTagName(a)[0],h=k.createElement(a),g=c!="dataLayer"?"&l="+c:"";h.async=true;h.src="https://www.googletagmanager.com/gtm.js?id="+m+g;b.parentNode.insertBefore(h,b)})(window,document,"script","dataLayer","GTM-KBXQFKS");</script>
<style>.job-box{display:flex;align-items:center;justify-content:space-between}.job-box img{padding:5px}.bg-soft-primary{background-color:rgba(59,130,246,0.05)!important;color:#3b82f6!important;font-size:15px}.badge{letter-spacing:.5px;padding:6px 9px;font-weight:600!important}.avatar.avatar-small{height:65px;width:65px}.text-dark{color:#1e293b!important}.shade{box-shadow:0 0 3px rgba(30,41,59,0.15)!important}.rounded{border-radius:6px!important}.rounded{border-radius:var(--bs-border-radius)!important}.bg-white{--bs-bg-opacity:1;background-color:rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important}.p-3{padding:1rem!important}.shadow{box-shadow:var(--bs-box-shadow)!important}.p5{padding:5px}.p10{padding:10px}.fea.icon-sm{height:16px;width:16px}.mb2{margin-bottom:2px}.mt2{margin-top:2px}.ft13{font-size:13px}.progress-box .progress{height:6px;overflow:visible;background:#f1f5f9}.text-muted{color:#94a3b8!important}.comp h4{font-size:18px!important}</style>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBXQFKS" height=0 width=0 style=display:none;visibility:hidden></iframe></noscript>
<div class=onloadpage id=page-load>
<div class=loader-div>
<div class=on-img><img src=images/loader.gif alt=Logo class=img-fluid /><span>Loading Please Wait...</span></div>
</div>
</div>
<?php include("header.php") ?>
<div class="r-bg-a pt85 pb120">
<div class=container>
<div class="row pt80">
<div class=col-lg-5>
<div class=page-headings>
<span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Latest Job's</span>
<h1 class=mb15>Free<span class="ree-text rt40">&nbsp;Jobs Near Me</span></h1>
<p>Find Free jobs for both fresher's and experience</p>
</div>
</div>
<div class=col-lg-7>
<div class=ree-subs-from>
<h4>Subscribe to get the latest insights in your inbox.</h4>
<form class=mt20>
<input type=text name=subs id=subs-email placeholder="Your email please" class=subs-input>
<button class="ree-btn-grdt1 subs-btn" name="button" type="button"><i class="fas fa-arrow-right"></i></button>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="blog-block sec-pad pt80">
<div class=container>
<div class=blog-post>
<div class=row>
<?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
<div class="col-lg-4 col-sm-6">
<div class=ree-media-crd>
<div class="job-content p10">
<div class=job-box>
<div class=img>
<img alt=Logo src=<?php echo ($row['image']); ?> class="avatar avatar-small rounded shade p-3 bg-white" />
</div>
<div class=comp>
<h4><?php echo ($row['cname']); ?></h4>
<div class=timelog>
<span class="text-muted d-flex align-items-center small mt-2"><svg xmlns=http://www.w3.org/2000/svg width=24 height=24 viewBox="0 0 24 24" fill=none stroke=currentColor stroke-width=2 stroke-linecap=round stroke-linejoin=round class="feather feather-clock fea icon-sm me-1"><circle cx=12 cy=12 r=10></circle><polyline points="12 6 12 12 16 14"></polyline></svg> &nbsp;<?php echo ($row['time']); ?></span>
</div>
</div>
<div class="status badge bg-soft-primary">
<p class="ft13 small"><?php echo ($row['status']); ?></p>
</div>
</div>
<br>
<div><a href=<?php echo ($row['link']); ?>><?php echo ($row['company']); ?><br><span class=mt2><?php echo ($row['ctag']); ?></span></a></div>
<br>
<div class=loc>
<span class="text-muted d-flex align-items-center mt-2 small"><svg xmlns=http://www.w3.org/2000/svg width=24 height=24 viewBox="0 0 24 24" fill=none stroke=currentColor stroke-width=2 stroke-linecap=round stroke-linejoin=round class="feather feather-map-pin fea icon-sm me-1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx=12 cy=10 r=3></circle></svg>&nbsp;<?php echo ($row['location']); ?></span>
</div>
<div class="progress-box mt-3">
<div class="progress mb-2">
<div class="progress-bar position-relative bg-primary" style=width:50%></div>
</div>
<span class="text-dark small mt-2"><?php echo ($row['applied']); ?> <span class=text-muted><?php echo ($row['vacany']); ?></span></span>
</div>
</div>
</div>
</div>
<?php
                        }

                        ?>
<div class=page-info>
<?php
    if(!isset($_GET['page-nr']))
    {
        $page=1;
    }
    else{
        $page = $_GET['page-nr'];
    }
    ?>
showing <?php echo $page ?> of <?php echo $pages ?>
<br>
</div>
<div class="col-lg-12 col-sm-12 mt100">
<ul class="pagination shadows">
<div class=pagination>
<?php
    if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1)
    {
        ?>
<li> <a class=prev href="?page-nr=<?php echo $_GET['page-nr'] - 1?>">Previous</a></li>
<?php
    }
    else{
        ?>
<li><a class=prev>Previous</a></li>
<?php
    }
    ?>
<?php
        for( $counter= 1; $counter <= $pages; $counter++ )
        {
        ?>
<li class="pageNumber active"><a href="?page-nr=<?php echo $counter ?>"><?php echo $counter ?></a></li>
<?php

        }
        ?>
<?php
    if(!isset($_GET['page-nr']))
    {
        ?>
	<li><a href="?page-nr=2" class=next>Next</a></li>
<?php
    }else{
        if($_GET['page-nr']>=$pages)
        {
            ?>
<li><a class=next>Next</a></li>
<?php
        }else{
            ?>
<li><a class=next href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a></li>
<?php
        }
    }
    ?>
</div>
</ul>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php") ?>
<script data-cfasync=false src=/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js></script>
<script src=js/modernizr-3.5.0.min.js></script>
<script src=js/jquery-3.6.0.min.js></script>
<script src=js/bootstrap.bundle.min.js></script>
<script src=js/app.bundle.js></script>
<script src=js/main.js></script>
</body>
</html>