<?php
require('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel=stylesheet href=css/vendor/bootstrap.min.css>
<link rel=stylesheet href=css/styles.min.css>
<link rel=stylesheet href=css/vendor/simplebar.css>
<link rel=stylesheet href=css/vendor/tiny-slider.css>
<link rel=icon href=../images/faviconc.ico>
<title>CodeAvenues Community Admin Panel: Empowering Collaboration and Growth</title>
</head>
<body>
<div class=page-loader>
<div class=page-loader-decoration>
<img src=../images/faviconc.ico />
</div>
<div class=page-loader-info>
<p class=page-loader-info-title>Codeavenues</p>
<p class=page-loader-info-text>Loading...</p>
</div>
</div>
<?php include('sidenav.php') ?>
<?php include('featurenav.php') ?>
<nav id=navigation-widget-mobile class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
<div class=navigation-widget-close-button>
<svg class="navigation-widget-close-button-icon icon-back-arrow">
<use xlink:href=#svg-back-arrow></use>
</svg>
</div>
<div class=navigation-widget-info-wrap>
<div class=navigation-widget-info>
<a class="user-avatar small no-outline" href=#>
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/01.jpg></div>
</div>
<div class=user-avatar-progress>
<div class=hexagon-progress-40-44></div>
</div>
<div class=user-avatar-progress-border>
<div class=hexagon-border-40-44></div>
</div>
<div class=user-avatar-badge>
<div class=user-avatar-badge-border>
<div class=hexagon-22-24></div>
</div>
<div class=user-avatar-badge-content>
<div class=hexagon-dark-16-18></div>
</div>
<p class=user-avatar-badge-text>24</p>
</div>
</a>
<p class=navigation-widget-info-title><a href=#>Marina Valentine</a></p>
<p class=navigation-widget-info-text>Welcome Back!</p>
</div>
<?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
    echo"
     <a href='logout' class='navigation-widget-info-button button small secondary'>Logout</a>
	 
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
</div>
<p class=navigation-widget-section-title>Sections</p>
<ul class=menu>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-newsfeed">
<use xlink:href=#svg-newsfeed></use>
</svg>
Newsfeed
</a>
</li>
<li class="menu-item active">
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-overview">
<use xlink:href=#svg-overview></use>
</svg>
Overview
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-group">
<use xlink:href=#svg-group></use>
</svg>
Groups
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-members">
<use xlink:href=#svg-members></use>
</svg>
Members
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-badges">
<use xlink:href=#svg-badges></use>
</svg>
Badges
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-quests">
<use xlink:href=#svg-quests></use>
</svg>
Quests
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-streams">
<use xlink:href=#svg-streams></use>
</svg>
Streams
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-events">
<use xlink:href=#svg-events></use>
</svg>
Events
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-forums">
<use xlink:href=#svg-forums></use>
</svg>
Forums
</a>
</li>
<li class=menu-item>
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-marketplace">
<use xlink:href=#svg-marketplace></use>
</svg>
Marketplace
</a>
</li>
</ul>
<p class=navigation-widget-section-title>My Profile</p>
<a class=navigation-widget-section-link href=#>Profile Info</a>
<a class=navigation-widget-section-link href=#>Social &amp; Stream</a>
<a class=navigation-widget-section-link href=#>Notifications</a>
<a class=navigation-widget-section-link href=#>Messages</a>
<a class=navigation-widget-section-link href=#>Friend Requests</a>
<p class=navigation-widget-section-title>Account</p>
<a class=navigation-widget-section-link href=#>Account Info</a>
<a class=navigation-widget-section-link href=#>Change Password</a>
<a class=navigation-widget-section-link href=#>General Settings</a>
<p class=navigation-widget-section-title>Groups</p>
<a class=navigation-widget-section-link href=#>Manage Groups</a>
<a class=navigation-widget-section-link href=#>Invitations</a>
<p class=navigation-widget-section-title>My Store</p>
<a class=navigation-widget-section-link href=#>My Account <span class=highlighted>$250,32</span></a>
<a class=navigation-widget-section-link href=#>Sales Statement</a>
<a class=navigation-widget-section-link href=#>Manage Items</a>
<a class=navigation-widget-section-link href=#>Downloads</a>
<p class=navigation-widget-section-title>Main Links</p>
<a class=navigation-widget-section-link href=#>Home</a>
<a class=navigation-widget-section-link href=#>Careers</a>
<a class=navigation-widget-section-link href=#>Faqs</a>
<a class=navigation-widget-section-link href=#>About Us</a>
<a class=navigation-widget-section-link href=#>Our Blog</a>
<a class=navigation-widget-section-link href=#>Contact Us</a>
<a class=navigation-widget-section-link href=#>Privacy Policy</a>
</nav>
<aside id=chat-widget-message class="chat-widget chat-widget-overlay hidden sidebar right">
<div class=chat-widget-header>
<div class=chat-widget-close-button>
<svg class="chat-widget-close-button-icon icon-back-arrow">
<use xlink:href=#svg-back-arrow></use>
</svg>
</div>
<div class=user-status>
<div class=user-status-avatar>
<div class="user-avatar small no-outline online">
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/03.jpg></div>
</div>
<div class=user-avatar-progress>
<div class=hexagon-progress-40-44></div>
</div>
<div class=user-avatar-progress-border>
<div class=hexagon-border-40-44></div>
</div>
<div class=user-avatar-badge>
<div class=user-avatar-badge-border>
<div class=hexagon-22-24></div>
</div>
<div class=user-avatar-badge-content>
<div class=hexagon-dark-16-18></div>
</div>
<p class=user-avatar-badge-text>16</p>
</div>
</div>
</div>
<p class=user-status-title><span class=bold>Nick Grissom</span></p>
<p class="user-status-tag online">Online</p>
</div>
</div>
<div class=chat-widget-conversation data-simplebar>
<div class="chat-widget-speaker left">
<div class=chat-widget-speaker-avatar>
<div class="user-avatar tiny no-border">
<div class=user-avatar-content>
<div class=hexagon-image-24-26 data-src=img/avatar/03.jpg></div>
</div>
</div>
</div>
<p class=chat-widget-speaker-message>Hi Marina! It's been a long time!</p>
<p class=chat-widget-speaker-timestamp>Yesterday at 8:36PM</p>
</div>
<div class="chat-widget-speaker right">
<p class=chat-widget-speaker-message>Hey Nick!</p>
<p class=chat-widget-speaker-message>You're right, it's been a really long time! I think the last time we saw was at Neko's party</p>
<p class=chat-widget-speaker-timestamp>10:05AM</p>
</div>
<div class="chat-widget-speaker left">
<div class=chat-widget-speaker-avatar>
<div class="user-avatar tiny no-border">
<div class=user-avatar-content>
<div class=hexagon-image-24-26 data-src=img/avatar/03.jpg></div>
</div>
</div>
</div>
<p class=chat-widget-speaker-message>Yeah! I remember now! The stream launch party</p>
<p class=chat-widget-speaker-message>That reminds me that I wanted to ask you something</p>
<p class=chat-widget-speaker-message>Can you stream the new game?</p>
</div>
</div>
<form class=chat-widget-form>
<div class="interactive-input small">
<input type=text id=chat-widget-message-text name=chat_widget_message_text placeholder="Write a message...">
<div class=interactive-input-icon-wrap>
<svg class="interactive-input-icon icon-send-message">
<use xlink:href=#svg-send-message></use>
</svg>
</div>
<div class=interactive-input-action>
<svg class="interactive-input-action-icon icon-cross-thin">
<use xlink:href=#svg-cross-thin></use>
</svg>
</div>
</div>
</form>
</aside>
<?php include('header.php') ?>
<aside class=floaty-bar>
<div class=bar-actions>
<div class=progress-stat>
<div class=bar-progress-wrap>
<p class=bar-progress-info>Next: <span class=bar-progress-text></span></p>
</div>
<div id=logged-user-level-cp class=progress-stat-bar></div>
</div>
</div>
<div class=bar-actions>
<div class="action-list dark">
<a class=action-list-item href=#>
<svg class="action-list-item-icon icon-shopping-bag">
<use xlink:href=#svg-shopping-bag></use>
</svg>
</a>
<a class=action-list-item href=#>
<svg class="action-list-item-icon icon-friend">
<use xlink:href=#svg-friend></use>
</svg>
</a>
<a class=action-list-item href=#>
<svg class="action-list-item-icon icon-messages">
<use xlink:href=#svg-messages></use>
</svg>
</a>
<a class="action-list-item unread" href=#>
<svg class="action-list-item-icon icon-notification">
<use xlink:href=#svg-notification></use>
</svg>
</a>
</div>
<a class=action-item-wrap href=#>
<div class="action-item dark">
<svg class="action-item-icon icon-settings">
<use xlink:href=#svg-settings></use>
</svg>
</div>
</a>
</div>
</aside>
<div class=content-grid>
<div class=section-header>
<div class=section-header-info>
</div>
</div>
<div class=grid>
<div class="grid change-on-desktop">
<div class="widget-box no-padding">
<div class=d-flex style=justify-content:center;align-items:center;justify-content:space-around>
<h1 class=widget-box-title>Top Question's</h1>
<a href=ask class='navigation-widget-info-button button small secondary'>Ask Question</a>
</div>
<div class="widget-box-content padded-for-scroll medium" data-simplebar>
<section class=section>
<div class="section-filters-bar v5">
<div class=section-filters-bar-actions>
<div class=filter-tabs>
<div class="filter-tab active">
<p class=filter-tab-text>Topics Started</p>
</div>
<div class=filter-tab>
<p class=filter-tab-text>My Replies</p>
</div>
<div class=filter-tab>
<p class=filter-tab-text>Liked Topics</p>
</div>
</div>
<form class=form>
<div class=form-select>
<label for=forum-filter-category>Filter By</label>
<select id=forum-filter-category name=forum_filter_category>
<option value=0>Topics Started</option>
<option value=1>My Replies</option>
<option value=2>Liked Topics</option>
</select>
<svg class="form-select-icon icon-small-arrow">
<use xlink:href=#svg-small-arrow></use>
</svg>
</div>
</form>
</div>
<div class=section-filters-bar-actions>
<form class=form>
<div class="form-item split medium">
<div class="form-select small">
<label for=forum-filter-order>Order By</label>
<select id=forum-filter-order name=forum_filter_order>
<option value=0>Newest First</option>
<option value=1>Oldest First</option>
</select>
<svg class="form-select-icon icon-small-arrow">
<use xlink:href=#svg-small-arrow></use>
</svg>
</div>
<button class="button primary">Apply Filter</button>
</div>
</form>
</div>
</div>
<div class="table table-forum-discussion">
<div class=table-header>
<div class=table-header-column>
<p class=table-header-title>Discussion</p>
</div>
<div class="table-header-column centered padded-medium">
<p class=table-header-title>Voices</p>
</div>
<div class="table-header-column centered padded-medium">
<p class=table-header-title>Replies</p>
</div>
<div class="table-header-column padded-big-left">
<p class=table-header-title>Activity</p>
</div>
</div>
<div class=table-body>
<div class="table-row medium">
<div class=table-column>
<div class=discussion-preview>
<a class=discussion-preview-title href=#>The recent issue of "Darkman" features a new masked hero</a>
<div class=discussion-preview-meta>
<p class=discussion-preview-meta-text>Started by</p>
<a class="user-avatar micro no-border" href=#>
<div class=user-avatar-content>
<div class=hexagon-image-18-20 data-src=img/avatar/01.jpg></div>
</div>
</a>
<p class=discussion-preview-meta-text><a href=profile-timeline.html>Marina Valentine</a>
22 minutes ago<span class=separator>-</span><a class=highlighted href=forums-category.html>Comics</a></p>
</div>
<br>
<div class=tag-list>
<a class="tag-item secondary" href=#>React Js</a>
<a class="tag-item secondary" href=#>Django</a>
<a class="tag-item secondary" href=#>Python</a>
<a class="tag-item secondary" href=#>Perl</a>
</div>
</div>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>4</p>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>12</p>
</div>
<div class="table-column padded-big-left">
<div class=user-status>
<a class=user-status-avatar href=profile-timeline.html>
<div class="user-avatar small no-outline">
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/04.jpg></div>
</div>
<div class=user-avatar-progress>
<div class=hexagon-progress-40-44></div>
</div>
<div class=user-avatar-progress-border>
<div class=hexagon-border-40-44></div>
</div>
<div class=user-avatar-badge>
<div class=user-avatar-badge-border>
<div class=hexagon-22-24></div>
</div>
<div class=user-avatar-badge-content>
<div class=hexagon-dark-16-18></div>
</div>
<p class=user-avatar-badge-text>6</p>
</div>
</div>
</a>
<p class=user-status-title><a class=bold href=profile-timeline.html>Bearded Wonder</a></p>
<p class="user-status-text small">3 hours, 22 minutes ago</p>
</div>
</div>
</div>
<div class="table-row medium">
<div class=table-column>
<div class=discussion-preview>
<a class=discussion-preview-title href=forums-discussion.html>I played the new "Monstermon: Vibranium" and it's awesome!</a>
<div class=discussion-preview-meta>
<p class=discussion-preview-meta-text>Started by</p>
<a class="user-avatar micro no-border" href=profile-timeline.html>
<div class=user-avatar-content>
<div class=hexagon-image-18-20 data-src=img/avatar/01.jpg></div>
</div>
</a>
<p class=discussion-preview-meta-text><a href=profile-timeline.html>Marina Valentine</a> 6 hours ago<span class=separator>-</span><a class=highlighted href=forums-category.html>The Arcade</a></p>
</div>
</div>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>7</p>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>19</p>
</div>
<div class="table-column padded-big-left">
<div class=user-status>
<a class=user-status-avatar href=profile-timeline.html>
<div class="user-avatar small no-outline">
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/03.jpg></div>
</div>
<div class=user-avatar-progress>
<div class=hexagon-progress-40-44></div>
</div>
<div class=user-avatar-progress-border>
<div class=hexagon-border-40-44></div>
</div>
<div class=user-avatar-badge>
<div class=user-avatar-badge-border>
<div class=hexagon-22-24></div>
</div>
<div class=user-avatar-badge-content>
<div class=hexagon-dark-16-18></div>
</div>
<p class=user-avatar-badge-text>16</p>
</div>
</div>
</a>
<p class=user-status-title><a class=bold href=profile-timeline.html>Nick Grissom</a></p>
<p class="user-status-text small">23 minutes ago</p>
</div>
</div>
</div>
<div class="table-row medium">
<div class=table-column>
<div class=discussion-preview>
<a class=discussion-preview-title href=forums-discussion.html>What do you like and dislike about the new forum looks?</a>
<div class=discussion-preview-meta>
<p class=discussion-preview-meta-text>Started by</p>
<a class="user-avatar micro no-border" href=profile-timeline.html>
<div class=user-avatar-content>
<div class=hexagon-image-18-20 data-src=img/avatar/01.jpg></div>
</div>
</a>
<p class=discussion-preview-meta-text><a href=profile-timeline.html>Marina Valentine</a> 1 day ago<span class=separator>-</span><a class=highlighted href=forums-category.html>Community Hangout</a></p>
</div>
</div>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>36</p>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>57</p>
</div>
<div class="table-column padded-big-left">
<div class=user-status>
<a class=user-status-avatar href=profile-timeline.html>
<div class="user-avatar small no-outline">
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/01.jpg></div>
</div>
<div class=user-avatar-progress>
<div class=hexagon-progress-40-44></div>
</div>
<div class=user-avatar-progress-border>
<div class=hexagon-border-40-44></div>
</div>
<div class=user-avatar-badge>
<div class=user-avatar-badge-border>
<div class=hexagon-22-24></div>
</div>
<div class=user-avatar-badge-content>
<div class=hexagon-dark-16-18></div>
</div>
<p class=user-avatar-badge-text>24</p>
</div>
</div>
</a>
<p class=user-status-title><a class=bold href=profile-timeline.html>Marina Valentine</a></p>
<p class="user-status-text small">42 minutes ago</p>
</div>
</div>
</div>
<div class="table-row medium">
<div class=table-column>
<div class=discussion-preview>
<a class=discussion-preview-title href=forums-discussion.html>Let's post photos of our workspaces!</a>
<div class=discussion-preview-meta>
<p class=discussion-preview-meta-text>Started by</p>
<a class="user-avatar micro no-border" href=profile-timeline.html>
<div class=user-avatar-content>
<div class=hexagon-image-18-20 data-src=img/avatar/01.jpg></div>
</div>
</a>
<p class=discussion-preview-meta-text><a href=profile-timeline.html>Marina Valentine</a> 3 days ago<span class=separator>-</span><a class=highlighted href=forums-category.html>Community Hangout</a></p>
</div>
</div>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>22</p>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>31</p>
</div>
<div class="table-column padded-big-left">
<div class=user-status>
<a class=user-status-avatar href=profile-timeline.html>
<div class="user-avatar small no-outline">
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/05.jpg></div>
</div>
<div class=user-avatar-progress>
<div class=hexagon-progress-40-44></div>
</div>
<div class=user-avatar-progress-border>
<div class=hexagon-border-40-44></div>
</div>
<div class=user-avatar-badge>
<div class=user-avatar-badge-border>
<div class=hexagon-22-24></div>
</div>
<div class=user-avatar-badge-content>
<div class=hexagon-dark-16-18></div>
</div>
<p class=user-avatar-badge-text>12</p>
</div>
</div>
</a>
<p class=user-status-title><a class=bold href=profile-timeline.html>Neko Bebop</a></p>
<p class="user-status-text small">1 hour, 35 minutes ago</p>
</div>
</div>
</div>
<div class="table-row medium">
<div class=table-column>
<div class=discussion-preview>
<a class=discussion-preview-title href=forums-discussion.html>The new "Dragon Adventure" manga answers what happened with Spike</a>
<div class=discussion-preview-meta>
<p class=discussion-preview-meta-text>Started by</p>
<a class="user-avatar micro no-border" href=profile-timeline.html>
<div class=user-avatar-content>
<div class=hexagon-image-18-20 data-src=img/avatar/01.jpg></div>
</div>
</a>
<p class=discussion-preview-meta-text><a href=profile-timeline.html>Marina Valentine</a> 1 week ago<span class=separator>-</span><a class=highlighted href=forums-category.html>Anime &amp; Manga</a></p>
</div>
</div>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>40</p>
</div>
<div class="table-column centered padded-medium">
<p class=table-title>105</p>
</div>
<div class="table-column padded-big-left">
<div class=user-status>
<a class=user-status-avatar href=profile-timeline.html>
<div class="user-avatar small no-outline">
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/03.jpg></div>
</div>
<div class=user-avatar-progress>
<div class=hexagon-progress-40-44></div>
</div>
<div class=user-avatar-progress-border>
<div class=hexagon-border-40-44></div>
</div>
<div class=user-avatar-badge>
<div class=user-avatar-badge-border>
<div class=hexagon-22-24></div>
</div>
<div class=user-avatar-badge-content>
<div class=hexagon-dark-16-18></div>
</div>
<p class=user-avatar-badge-text>16</p>
</div>
</div>
</a>
<p class=user-status-title><a class=bold href=profile-timeline.html>Nick Grissom</a></p>
<p class="user-status-text small">6 days ago</p>
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
<div class=grid>
<div class="grid grid-9-3 stretched">
<div class=grid-column>
</div>
</div>
<div class="grid grid-3-9 stretched">
<div class=grid-column>
</div>
</div>
</div>
</div>
<script src=app.bundle.min.js></script>
</body>
</html>