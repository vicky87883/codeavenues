<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
<figure class="navigation-widget-cover liquid">
<img src="img/cover/03.jpg" alt="cover-03">
</figure>
<div class="user-short-description">
<a class="user-short-description-avatar user-avatar medium" href="#">
<div class="user-avatar-border">
<div class="hexagon-120-132"></div>
</div>
<div class="user-avatar-content">
<div class="hexagon-image-82-90" data-src="img/avatar/03.jpg"></div>
</div>
<div class="user-avatar-progress">
<div class="hexagon-progress-100-110"></div>
</div>
<div class="user-avatar-progress-border">
<div class="hexagon-border-100-110"></div>
</div>
<div class="user-avatar-badge">
<div class="user-avatar-badge-border">
<div class="hexagon-32-36"></div>
</div>
<div class="user-avatar-badge-content">
<div class="hexagon-dark-26-28"></div>
</div>
<p class="user-avatar-badge-text">24</p>
</div>
</a>
<p class="user-short-description-title"><a href="#">
<?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{
    echo"
    $_SESSION[username] 
    ";
}
    else{
        echo "
        <div class='sign-in-up'>
	<button type='submit' name='login' class='ree-btn  ree-btn-grdt1 w-100'>LOGIN <i class='fas fa-arrow-right fa-btn'></i></button> 
    </div>
        ";
    }
    ?>
</a></p>
<p class="user-short-description-text">
<?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{
    echo"
     <a href='logout'>Logout</a>
	 
    ";
}
    else{
        echo "
        <div class='sign-in-up'>
	<button type='submit' name='login' class='ree-btn  ree-btn-grdt1 w-100'>LOGIN <i class='fas fa-arrow-right fa-btn'></i></button> 
    </div>
        ";
    }
    ?>
</p>
</div>
<div class="badge-list small">
<div class="badge-item">
<img src="img/badge/gold-s.png" alt="badge-gold-s">
</div>
<div class="badge-item">
<img src="img/badge/age-s.png" alt="badge-age-s">
</div>
<div class="badge-item">
<img src="img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
</div>
<div class="badge-item">
<img src="img/badge/warrior-s.png" alt="badge-warrior-s">
</div>
<a class="badge-item" href="profile-#">
<img src="img/badge/blank-s.png" alt="badge-blank-s">
<p class="badge-item-text">+9</p>
</a>
</div>
<div class="user-stats">
<div class="user-stat">
<p class="user-stat-title">0</p>
<p class="user-stat-text">posts</p>
</div>
<div class="user-stat">
<p class="user-stat-title">0</p>
<p class="user-stat-text">friends</p>
</div>
<div class="user-stat">
<p class="user-stat-title">0</p>
<p class="user-stat-text">visits</p>
</div>
</div>
<ul class="menu">
<li class="menu-item">
<a class="menu-item-link" href="#">
<svg class="menu-item-link-icon icon-newsfeed">
<use xlink:href="#svg-newsfeed"></use>
</svg>
community
</a>
</li>
<li class="menu-item">
<a class="menu-item-link" href="#">
<svg class="menu-item-link-icon icon-group">
<use xlink:href="#svg-group"></use>
</svg>
messages
</a>
</li>
<li class="menu-item">
<a class="menu-item-link" href="#">
<svg class="menu-item-link-icon icon-forums">
<use xlink:href="#svg-forums"></use>
</svg>
chat
</a>
</li>
</ul>
</nav>