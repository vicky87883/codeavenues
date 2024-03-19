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
<title>ChatBot</title>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel=stylesheet>
<link rel=preconnect href=https://fonts.googleapis.com>
<link rel=preconnect href=https://fonts.gstatic.com crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel=stylesheet>
<style><style>body{margin:0;font-family:'Open Sans',sans-serif}.container-box{max-width:700px;position:relative;margin:0 auto;padding:20px;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);overflow:hidden}.chat-container{border-radius:10px;overflow:hidden;box-shadow:0 4px 6px rgba(0,0,0,0.1)}.messages{padding:10px;max-height:400px;overflow-y:auto}.message{display:flex;align-items:flex-start;margin-bottom:10px}.message-content{padding:12px;border-radius:10px;max-width:70%;box-shadow:0 2px 4px rgba(0,0,0,0.1)}.chatbot-avatar{width:40px;height:40px;border-radius:50%;display:flex;justify-content:center;align-items:center;font-weight:bold;margin-right:10px}.user-message{margin-left:auto;align-items:flex-end}.user-input{display:flex;align-items:center;border-top:1px solid #ccc;padding:10px;box-shadow:0 -2px 4px rgba(0,0,0,0.1)}.user-input input{flex-grow:1;border:0;padding:8px;border-radius:4px;font-size:14px}.send-button{border:0;padding:8px 16px;border-radius:4px;cursor:pointer;display:flex;align-items:center;font-size:14px}#send-button{width:35%}#send-button:focus{outline:0}.message-icon{margin-right:5px}.loading-icon{margin-right:5px;animation:spin 1s linear infinite}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}h1{font-size:24px;margin-bottom:20px}.light-theme .chat-container{background-color:#f7f8fb}.light-theme .message-content{background-color:#fff;color:#333}.light-theme .user-input{background-color:#fff}.dark-theme{background-color:#333;color:#f7f8fb}.dark-theme .chat-container{background-color:#444}.dark-theme .message-content{background-color:#555;color:#f7f8fb}.dark-theme .user-input{background-color:#444}.theme-toggle{position:absolute;top:20px;right:20px;display:flex;gap:10px;z-index:1}.theme-button{background-color:#f7f8fb;color:#333;border:0;border-radius:50%;padding:10px;cursor:pointer;transition:background-color .3s,color .3s}.theme-button:hover{background-color:#333;color:#f7f8fb}.user-input input:focus{outline:0}</style>
</style>
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
<p class="navigation-widget-info-button button small secondary">Logout</p>
</div>
<p class=navigation-widget-section-title>Sections</p>
<ul class=menu>
<li class="menu-item active">
<a class=menu-item-link href=#>
<svg class="menu-item-link-icon icon-newsfeed">
<use xlink:href=#svg-newsfeed></use>
</svg>
Newsfeed
</a>
</li>
<li class=menu-item>
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
<a class=navigation-widget-section-link href>Downloads</a>
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
<p class=chat-widget-speaker-message>You're right, it's been a really long time! I think the last time
we saw was at Neko's party</p>
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
<div class=light-theme>
<div class=container-box>
<h1>ChatGPT Chatbot</h1>
<div class=chat-container>
<div class=messages id=chat-messages>
<div class=message>
<div class=chatbot-avatar>C</div>
<div class=message-content>
Welcome! How can I assist you today?
</div>
</div>
</div>
<div class=user-input>
<input type=text class=input id=message-input placeholder="Type your message...">
<button class=send-button id=send-button>
<i class="fas fa-paper-plane message-icon"></i>
<i class="fas fa-spinner fa-spin loading-icon" style=display:none></i> Send
</button>
</div>
<div class=theme-toggle>
<button class=theme-button id=light-theme-button onclick="toggleTheme('light')">
<i class="fas fa-sun theme-icon"></i>
</button>
<button class=theme-button id=dark-theme-button onclick="toggleTheme('dark')">
<i class="fas fa-moon theme-icon"></i>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=popup-picture>
<div class="popup-close-button popup-picture-trigger">
<svg class="popup-close-button-icon icon-cross">
<use xlink:href=#svg-cross></use>
</svg>
</div>
<div class="widget-box no-padding">
<div class=widget-box-scrollable data-simplebar>
<div class=widget-box-settings>
<div class=post-settings-wrap>
<div class="post-settings widget-box-post-settings-dropdown-trigger">
<svg class="post-settings-icon icon-more-dots">
<use xlink:href=#svg-more-dots></use>
</svg>
</div>
<div class="simple-dropdown widget-box-post-settings-dropdown">
<p class=simple-dropdown-link>Edit Post</p>
<p class=simple-dropdown-link>Delete Post</p>
<p class=simple-dropdown-link>Make it Featured</p>
<p class=simple-dropdown-link>Report Post</p>
<p class=simple-dropdown-link>Report Author</p>
</div>
</div>
</div>
<div class=widget-box-status>
<div class=widget-box-status-content>
<div class=user-status>
<a class=user-status-avatar href=#>
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
<p class="user-status-title medium"><a class=bold href=#>Marina Valentine</a></p>
<p class="user-status-text small">29 minutes ago</p>
</div>
<p class=widget-box-status-text>Here's a sneak peek of the official box cover art for <a href=#>Machine Wasteland II</a>! Remember that I'll be having a stream showing a
preview tommorrow at 9PM PCT!</p>
<div class=tag-list>
<a class="tag-item secondary" href=#>Cover</a>
<a class="tag-item secondary" href=#>Preview</a>
<a class="tag-item secondary" href=#>Art</a>
<a class="tag-item secondary" href=#>Machine</a>
<a class="tag-item secondary" href=#>Wasteland</a>
</div>
<div class=content-actions>
<div class=content-action>
<div class=meta-line>
<div class="meta-line-list reaction-item-list">
<div class=reaction-item>
<img class="reaction-image reaction-item-dropdown-trigger" src=img/reaction/love.png alt=reaction-love>
<div class="simple-dropdown padded reaction-item-dropdown">
<p class=simple-dropdown-text><img class=reaction src=img/reaction/love.png alt=reaction-love> <span class=bold>Love</span></p>
<p class=simple-dropdown-text>Destroy Dex</p>
<p class=simple-dropdown-text>The Green Goo</p>
<p class=simple-dropdown-text>Bearded Wonder</p>
<p class=simple-dropdown-text>Sandra Strange</p>
<p class=simple-dropdown-text>Matt Parker</p>
<p class=simple-dropdown-text>James Murdock</p>
<p class=simple-dropdown-text><span class=bold>and 14 more...</span>
</p>
</div>
</div>
<div class=reaction-item>
<img class="reaction-image reaction-item-dropdown-trigger" src=img/reaction/wow.png alt=reaction-wow>
<div class="simple-dropdown padded reaction-item-dropdown">
<p class=simple-dropdown-text><img class=reaction src=img/reaction/wow.png alt=reaction-wow> <span class=bold>Wow</span></p>
<p class=simple-dropdown-text>Jett Spiegel</p>
</div>
</div>
<div class=reaction-item>
<img class="reaction-image reaction-item-dropdown-trigger" src=img/reaction/like.png alt=reaction-like>
<div class="simple-dropdown padded reaction-item-dropdown">
<p class=simple-dropdown-text><img class=reaction src=img/reaction/like.png alt=reaction-like> <span class=bold>Like</span></p>
<p class=simple-dropdown-text>Neko Bebop</p>
<p class=simple-dropdown-text>Nick Grissom</p>
<p class=simple-dropdown-text>Sarah Diamond</p>
</div>
</div>
</div>
<p class=meta-line-text>24</p>
</div>
</div>
<div class=content-action>
<div class=meta-line>
<p class=meta-line-link>13 Comments</p>
</div>
<div class=meta-line>
<p class=meta-line-text>0 Shares</p>
</div>
</div>
</div>
</div>
</div>
<div class=post-options>
<div class=post-option-wrap>
<div class="post-option no-text reaction-options-dropdown-trigger">
<svg class="post-option-icon icon-thumbs-up">
<use xlink:href=#svg-thumbs-up></use>
</svg>
</div>
<div class="reaction-options small reaction-options-dropdown">
<div class="reaction-option text-tooltip-tft" data-title=Like>
<img class=reaction-option-image src=img/reaction/like.png alt=reaction-like>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Love>
<img class=reaction-option-image src=img/reaction/love.png alt=reaction-love>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Dislike>
<img class=reaction-option-image src=img/reaction/dislike.png alt=reaction-dislike>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Happy>
<img class=reaction-option-image src=img/reaction/happy.png alt=reaction-happy>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Funny>
<img class=reaction-option-image src=img/reaction/funny.png alt=reaction-funny>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Wow>
<img class=reaction-option-image src=img/reaction/wow.png alt=reaction-wow>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Angry>
<img class=reaction-option-image src=img/reaction/angry.png alt=reaction-angry>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Sad>
<img class=reaction-option-image src=img/reaction/sad.png alt=reaction-sad>
</div>
</div>
</div>
<div class="post-option no-text active">
<svg class="post-option-icon icon-comment">
<use xlink:href=#svg-comment></use>
</svg>
</div>
<div class="post-option no-text">
<svg class="post-option-icon icon-share">
<use xlink:href=#svg-share></use>
</svg>
</div>
</div>
<div class=post-comment-list>
<div class=post-comment>
<a class="user-avatar small no-outline" href=#>
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
</a>
<p class=post-comment-text><a class=post-comment-text-author href=#>Neko Bebop</a>It's
always a pleasure to do this streams with you! If we have at least half the fun than last
time it will be an incredible success!</p>
<div class=content-actions>
<div class=content-action>
<div class=meta-line>
<div class="meta-line-list reaction-item-list small">
<div class=reaction-item>
<img class="reaction-image reaction-item-dropdown-trigger" src=img/reaction/happy.png alt=reaction-happy>
<div class="simple-dropdown padded reaction-item-dropdown">
<p class=simple-dropdown-text><img class=reaction src=img/reaction/happy.png alt=reaction-happy> <span class=bold>Happy</span></p>
<p class=simple-dropdown-text>Marcus Jhonson</p>
</div>
</div>
<div class=reaction-item>
<img class="reaction-image reaction-item-dropdown-trigger" src=img/reaction/like.png alt=reaction-like>
<div class="simple-dropdown padded reaction-item-dropdown">
<p class=simple-dropdown-text><img class=reaction src=img/reaction/like.png alt=reaction-like> <span class=bold>Like</span></p>
<p class=simple-dropdown-text>Neko Bebop</p>
<p class=simple-dropdown-text>Nick Grissom</p>
<p class=simple-dropdown-text>Sarah Diamond</p>
</div>
</div>
</div>
<p class=meta-line-text>4</p>
</div>
<div class=meta-line>
<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
<div class="reaction-options small reaction-options-small-dropdown">
<div class="reaction-option text-tooltip-tft" data-title=Like>
<img class=reaction-option-image src=img/reaction/like.png alt=reaction-like>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Love>
<img class=reaction-option-image src=img/reaction/love.png alt=reaction-love>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Dislike>
<img class=reaction-option-image src=img/reaction/dislike.png alt=reaction-dislike>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Happy>
<img class=reaction-option-image src=img/reaction/happy.png alt=reaction-happy>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Funny>
<img class=reaction-option-image src=img/reaction/funny.png alt=reaction-funny>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Wow>
<img class=reaction-option-image src=img/reaction/wow.png alt=reaction-wow>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Angry>
<img class=reaction-option-image src=img/reaction/angry.png alt=reaction-angry>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Sad>
<img class=reaction-option-image src=img/reaction/sad.png alt=reaction-sad>
</div>
</div>
</div>
<div class=meta-line>
<p class="meta-line-link light">Reply</p>
</div>
<div class=meta-line>
<p class=meta-line-timestamp>15 min ago</p>
</div>
<div class="meta-line settings">
<div class=post-settings-wrap>
<div class="post-settings post-settings-dropdown-trigger">
<svg class="post-settings-icon icon-more-dots">
<use xlink:href=#svg-more-dots></use>
</svg>
</div>
<div class="simple-dropdown post-settings-dropdown">
<p class=simple-dropdown-link>Report Post</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="post-comment unread reply-2">
<a class="user-avatar small no-outline" href=#>
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
</a>
<p class=post-comment-text><a class=post-comment-text-author href=#>Nick Grissom</a>I
wouldn't miss it for anything!! Love both streams!</p>
<div class=content-actions>
<div class=content-action>
<div class=meta-line>
<div class="meta-line-list reaction-item-list small">
<div class=reaction-item>
<img class="reaction-image reaction-item-dropdown-trigger" src=img/reaction/like.png alt=reaction-like>
<div class="simple-dropdown padded reaction-item-dropdown">
<p class=simple-dropdown-text><img class=reaction src=img/reaction/like.png alt=reaction-like> <span class=bold>Like</span></p>
<p class=simple-dropdown-text>Neko Bebop</p>
</div>
</div>
</div>
<p class=meta-line-text>1</p>
</div>
<div class=meta-line>
<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
<div class="reaction-options small reaction-options-small-dropdown">
<div class="reaction-option text-tooltip-tft" data-title=Like>
<img class=reaction-option-image src=img/reaction/like.png alt=reaction-like>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Love>
<img class=reaction-option-image src=img/reaction/love.png alt=reaction-love>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Dislike>
<img class=reaction-option-image src=img/reaction/dislike.png alt=reaction-dislike>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Happy>
<img class=reaction-option-image src=img/reaction/happy.png alt=reaction-happy>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Funny>
<img class=reaction-option-image src=img/reaction/funny.png alt=reaction-funny>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Wow>
<img class=reaction-option-image src=img/reaction/wow.png alt=reaction-wow>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Angry>
<img class=reaction-option-image src=img/reaction/angry.png alt=reaction-angry>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Sad>
<img class=reaction-option-image src=img/reaction/sad.png alt=reaction-sad>
</div>
</div>
</div>
<div class=meta-line>
<p class="meta-line-link light">Reply</p>
</div>
<div class=meta-line>
<p class=meta-line-timestamp>2 min ago</p>
</div>
<div class="meta-line settings">
<div class=post-settings-wrap>
<div class="post-settings post-settings-dropdown-trigger">
<svg class="post-settings-icon icon-more-dots">
<use xlink:href=#svg-more-dots></use>
</svg>
</div>
<div class="simple-dropdown post-settings-dropdown">
<p class=simple-dropdown-link>Report Post</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=post-comment>
<a class="user-avatar small no-outline" href=#>
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/02.jpg></div>
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
<p class=user-avatar-badge-text>19</p>
</div>
</a>
<p class=post-comment-text><a class=post-comment-text-author href=#>Destroy
Dex</a>YEAHHH!! <a href=#>@MarinaValentine</a> I really enjoyed your last stream and
it also was really funny! Can't wait!</p>
<div class=content-actions>
<div class=content-action>
<div class=meta-line>
<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
<div class="reaction-options small reaction-options-small-dropdown">
<div class="reaction-option text-tooltip-tft" data-title=Like>
<img class=reaction-option-image src=img/reaction/like.png alt=reaction-like>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Love>
<img class=reaction-option-image src=img/reaction/love.png alt=reaction-love>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Dislike>
<img class=reaction-option-image src=img/reaction/dislike.png alt=reaction-dislike>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Happy>
<img class=reaction-option-image src=img/reaction/happy.png alt=reaction-happy>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Funny>
<img class=reaction-option-image src=img/reaction/funny.png alt=reaction-funny>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Wow>
<img class=reaction-option-image src=img/reaction/wow.png alt=reaction-wow>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Angry>
<img class=reaction-option-image src=img/reaction/angry.png alt=reaction-angry>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Sad>
<img class=reaction-option-image src=img/reaction/sad.png alt=reaction-sad>
</div>
</div>
</div>
<div class=meta-line>
<p class="meta-line-link light">Reply</p>
</div>
<div class=meta-line>
<p class=meta-line-timestamp>27 min ago</p>
</div>
<div class="meta-line settings">
<div class=post-settings-wrap>
<div class="post-settings post-settings-dropdown-trigger">
<svg class="post-settings-icon icon-more-dots">
<use xlink:href=#svg-more-dots></use>
</svg>
</div>
<div class="simple-dropdown post-settings-dropdown">
<p class=simple-dropdown-link>Report Post</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=post-comment>
<a class="user-avatar small no-outline" href=#>
<div class=user-avatar-content>
<div class=hexagon-image-30-32 data-src=img/avatar/07.jpg></div>
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
<p class=user-avatar-badge-text>26</p>
</div>
</a>
<div class=content-actions>
<div class=content-action>
<div class=meta-line>
<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
<div class="reaction-options small reaction-options-small-dropdown">
<div class="reaction-option text-tooltip-tft" data-title=Like>
<img class=reaction-option-image src=img/reaction/like.png alt=reaction-like>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Love>
<img class=reaction-option-image src=img/reaction/love.png alt=reaction-love>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Dislike>
<img class=reaction-option-image src=img/reaction/dislike.png alt=reaction-dislike>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Happy>
<img class=reaction-option-image src=img/reaction/happy.png alt=reaction-happy>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Funny>
<img class=reaction-option-image src=img/reaction/funny.png alt=reaction-funny>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Wow>
<img class=reaction-option-image src=img/reaction/wow.png alt=reaction-wow>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Angry>
<img class=reaction-option-image src=img/reaction/angry.png alt=reaction-angry>
</div>
<div class="reaction-option text-tooltip-tft" data-title=Sad>
<img class=reaction-option-image src=img/reaction/sad.png alt=reaction-sad>
</div>
</div>
</div>
<div class=meta-line>
<p class="meta-line-link light">Reply</p>
</div>
<div class=meta-line>
<p class=meta-line-timestamp>39 min ago</p>
</div>
<div class="meta-line settings">
<div class=post-settings-wrap>
<div class="post-settings post-settings-dropdown-trigger">
<svg class="post-settings-icon icon-more-dots">
<use xlink:href=#svg-more-dots></use>
</svg>
</div>
<div class="simple-dropdown post-settings-dropdown">
<p class=simple-dropdown-link>Report Post</p>
</div>
</div>
</div>
</div>
</div>
</div>
<p class=post-comment-heading>Load More Comments <span class=highlighted>9+</span></p>
</div>
</div>
<div class="post-comment-form bordered-top">
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
<form class=form>
<div class=form-row>
<div class=form-item>
<div class="form-input small">
<label for=popup-post-reply>Your Reply</label>
<input type=text id=popup-post-reply name=popup_post_reply>
</div>
</div>
</div>
</form>
</div>
</div>
<div class=popup-picture-image-wrap>
<figure class=popup-picture-image>
<img src=img/cover/04.jpg alt=cover-04>
</figure>
</div>
</div>
<script src=app.bundle.min.js></script>
<script>const chatMessages=document.getElementById('chat-messages');const messageInput=document.getElementById('message-input');const sendButton=document.getElementById('send-button');const lightThemeButton=document.getElementById('light-theme-button');const darkThemeButton=document.getElementById('dark-theme-button');sendButton.addEventListener('click',sendMessage);messageInput.addEventListener('keydown',handleKeyDown);function appendMessage(sender,message,isUser=false){const messageDiv=document.createElement('div');messageDiv.className='message';if(isUser){messageDiv.classList.add('user-message');}
const senderAvatar=isUser?'<div class="chatbot-avatar">Y</div>':'<div class="chatbot-avatar">C</div>';messageDiv.innerHTML=`${senderAvatar}<div class="message-content">${message}</div>`;chatMessages.appendChild(messageDiv);chatMessages.scrollTop=chatMessages.scrollHeight;}
function toggleLoadingIcon(show){const loadingIcon=document.querySelector('.loading-icon');if(show){loadingIcon.style.display='inline-block';}else{loadingIcon.style.display='none';}}
function sendMessage(){const userMessage=messageInput.value.trim();if(!userMessage)return;appendMessage('You',userMessage,true);messageInput.value='';toggleLoadingIcon(true);const apiKey='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';const apiUrl='https://api.openai.com/v1/chat/completions';const requestOptions={method:'POST',headers:{'Content-Type':'application/json','Authorization':`Bearer ${apiKey}`},body:JSON.stringify({model:'gpt-3.5-turbo',messages:[{role:'system',content:'You are a chatbot.'},{role:'user',content:userMessage}]})};fetch(apiUrl,requestOptions).then(response=>response.json()).then(data=>{const chatbotMessage=data.choices[0].message.content;appendMessage('ChatGPT',chatbotMessage);toggleLoadingIcon(false);}).catch(error=>{console.error('Error:',error);toggleLoadingIcon(false);});}
function handleKeyDown(event){if(event.key==='Enter'){event.preventDefault();sendMessage();}}
function toggleTheme(theme){const body=document.body;if(theme==='dark'){body.classList.add('dark-theme');body.classList.remove('light-theme');}else{body.classList.add('light-theme');body.classList.remove('dark-theme');}}</script>
</body>
</html>