<?php
require_once("controller/controller.php");
$call->checkUserLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook - Instagram Style</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
      }

      body {
        background-color: #fafafa;
        color: #262626;
      }

      /* Header Styles */
      header {
        background-color: #ffffff;
        border-bottom: 1px solid #dbdbdb;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100;
      }

      .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 16px;
        max-width: 935px;
        margin: 0 auto;
      }

      .logo-section {
        display: flex;
        align-items: center;
      }

      .logo {
        color: #385898;
        font-size: 28px;
        font-weight: bold;
        margin-right: 10px;
      }

      .search-bar {
        background-color: #f0f2f5;
        border-radius: 20px;
        padding: 8px 12px;
        display: flex;
        align-items: center;
      }

      .search-bar input {
        background: transparent;
        border: none;
        outline: none;
        padding: 0 8px;
        width: 220px;
      }

      .nav-icons {
        display: flex;
        gap: 16px;
      }

      .nav-icon {
        width: 24px;
        height: 24px;
        cursor: pointer;
        font-size: 20px;
      }

      .profile-section {
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
      }

      .profile-pic {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: #1877f2;
          background-image: url("upload/<?php $call->getUserData('profileimage') ? print $call->getUserData('profileimage') : print 'userAvater.jpg' ?>");
       background-size: contain;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 12px;
      }

      /* Main Content */
      .main-container {
        display: flex;
        max-width: 935px;
        margin: 60px auto 20px;
        gap: 28px;
      }

      /* Posts Section */
      .posts-section {
        width: 65%;
      }

      .story-container {
        background-color: #ffffff;
        border: 1px solid #dbdbdb;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 24px;
        display: flex;
        overflow-x: auto;
        gap: 16px;
      }

      .story {
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
      }

      .story-avatar {
        width: 66px;
        height: 66px;
        border-radius: 50%;
        background: linear-gradient(
          45deg,
          #f09433,
          #e6683c,
          #dc2743,
          #cc2366,
          #bc1888
        );
        padding: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .story-avatar-inner {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }

      .story-avatar-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .story-username {
        font-size: 12px;
        margin-top: 4px;
        max-width: 66px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }

      .post {
        background-color: #ffffff;
        border: 1px solid #dbdbdb;
        border-radius: 8px;
        margin-bottom: 24px;
      }

      .post-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 16px;
      }

      .post-user-info {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .user-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #1877f2;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 14px;
      }

      .post-user {
        font-weight: 600;
      }

      .post-options {
        cursor: pointer;
      }

      .post-image {
        width: 100%;
        height: 400px;
        background-color: #e4e6e9;
      }

      .post-actions {
        display: flex;
        justify-content: space-between;
        padding: 12px 16px;
      }

      .post-action-left {
        display: flex;
        gap: 16px;
      }

      .post-action {
        cursor: pointer;
        font-size: 24px;
      }

      .post-likes {
        padding: 0 16px;
        font-weight: 600;
        margin-bottom: 8px;
      }

      .post-caption {
        padding: 0 16px;
        margin-bottom: 8px;
      }

      .post-caption-user {
        font-weight: 600;
        margin-right: 4px;
      }

      .post-comments {
        padding: 0 16px;
        color: #8e8e8e;
        margin-bottom: 8px;
      }

      .post-time {
        padding: 0 16px 12px;
        color: #8e8e8e;
        font-size: 10px;
        text-transform: uppercase;
        margin-bottom: 8px;
      }

      .add-comment {
        display: flex;
        align-items: center;
        padding: 12px 16px;
        border-top: 1px solid #efefef;
      }

      .comment-input {
        flex: 1;
        border: none;
        outline: none;
        padding: 8px;
      }

      .post-button {
        color: #0095f6;
        font-weight: 600;
        cursor: pointer;
      }

      /* User Info Sidebar */
      .user-info-sidebar {
        width: 35%;
        position: sticky;
        top: 80px;
        height: fit-content;
      }

      .user-profile {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 20px;
      }

      .user-profile-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: #1877f2;
     background-image: url("upload/<?php $call->getUserData('profileimage') ? print $call->getUserData('profileimage') : print 'userAvater.jpg' ?>");
      
       background-size: contain;
     display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 20px;
      }

      .user-profile-info {
        flex: 1;
      }

      .user-profile-username {
        font-weight: 600;
        margin-bottom: 4px;
      }

      .user-profile-name {
        color: #8e8e8e;
        font-size: 14px;
      }

      .switch-button {
        color: #0095f6;
        font-weight: 600;
        font-size: 12px;
        cursor: pointer;
      }

      .suggestions-section {
        margin-top: 20px;
      }

      .suggestions-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 16px;
      }

      .suggestions-title {
        color: #8e8e8e;
        font-weight: 600;
        font-size: 14px;
      }

      .see-all {
        color: #262626;
        font-weight: 600;
        font-size: 12px;
        cursor: pointer;
      }

      .suggestion {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
      }

      .suggestion-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #42b883;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 14px;
      }

      .suggestion-info {
        flex: 1;
      }

      .suggestion-username {
        font-weight: 600;
        font-size: 14px;
      }

      .suggestion-text {
        color: #8e8e8e;
        font-size: 12px;
      }

      .follow-button {
        color: #0095f6;
        font-weight: 600;
        font-size: 12px;
        cursor: pointer;
      }

      .footer-links {
        margin-top: 30px;
        color: #c7c7c7;
        font-size: 11px;
        line-height: 1.4;
      }

      .footer-links a {
        color: #c7c7c7;
        text-decoration: none;
        margin-right: 4px;
      }

      .copyright {
        margin-top: 16px;
        color: #c7c7c7;
        font-size: 11px;
      }

      /* Responsive */
      @media (max-width: 900px) {
        .user-info-sidebar {
          display: none;
        }

        .posts-section {
          width: 100%;
        }
      }

      @media (max-width: 600px) {
        .search-bar {
          display: none;
        }

        .header-container {
          padding: 12px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="header-container">
        <div class="logo-section">
          <div class="logo">facebook</div>
        </div>

        <div class="search-bar">
          <span>🔍</span>
          <input type="text" placeholder="Search" />
        </div>

        <div class="nav-icons">
          <div class="nav-icon">🏠</div>
          <div class="nav-icon">✉️</div>
          <div class="nav-icon">➕</div>
          <div class="nav-icon">🌎</div>
          <div class="nav-icon">💬</div>
        </div>

        <div class="profile-section">
          <div class="profile-pic"></div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="main-container">
      <!-- Posts Section -->
      <div class="posts-section">
        <!-- sidebar -->
         <?php
require_once("sidebar.php");
         ?>
        <!-- Stories -->
        <div class="story-container">
          <div class="story">
            <div class="story-avatar">
              <div class="story-avatar-inner">
                <div class="user-avatar">JD</div>
              </div>
            </div>
            <div class="story-username">Your Story</div>
          </div>
          <div class="story">
            <div class="story-avatar">
              <div class="story-avatar-inner">
                <div class="user-avatar" style="background-color: #e4405f">
                  JS
                </div>
              </div>
            </div>
            <div class="story-username">jane_smith</div>
          </div>
          <div class="story">
            <div class="story-avatar">
              <div class="story-avatar-inner">
                <div class="user-avatar" style="background-color: #3b5998">
                  MJ
                </div>
              </div>
            </div>
            <div class="story-username">mikejohnson</div>
          </div>
          <div class="story">
            <div class="story-avatar">
              <div class="story-avatar-inner">
                <div class="user-avatar" style="background-color: #00aced">
                  SW
                </div>
              </div>
            </div>
            <div class="story-username">sarahwilson</div>
          </div>
          <div class="story">
            <div class="story-avatar">
              <div class="story-avatar-inner">
                <div class="user-avatar" style="background-color: #dd4b39">
                  RJ
                </div>
              </div>
            </div>
            <div class="story-username">robertjones</div>
          </div>
        </div>

        <!-- Post 1 -->
        <div class="post">
          <div class="post-header">
            <div class="post-user-info">
              <div class="user-avatar" style="background-color: #e4405f">
                JS
              </div>
              <div class="post-user">jane_smith</div>
            </div>
            <div class="post-options">⋯</div>
          </div>
          <div class="post-image"></div>
          <div class="post-actions">
            <div class="post-action-left">
              <div class="post-action">🤍</div>
              <div class="post-action">💬</div>
              <div class="post-action">📤</div>
            </div>
            <div class="post-action">🔖</div>
          </div>
          <div class="post-likes">1,245 likes</div>
          <div class="post-caption">
            <span class="post-caption-user">jane_smith</span>
            Just returned from an amazing hiking trip! The views were absolutely
            breathtaking. #nature #hiking #adventure
          </div>
          <div class="post-comments">View all 42 comments</div>
          <div class="post-time">1 day ago</div>
          <div class="add-comment">
            <input
              type="text"
              class="comment-input"
              placeholder="Add a comment..."
            />
            <div class="post-button">Post</div>
          </div>
        </div>

        <!-- Post 2 -->
        <div class="post">
          <div class="post-header">
            <div class="post-user-info">
              <div class="user-avatar" style="background-color: #3b5998">
                MJ
              </div>
              <div class="post-user">mikejohnson</div>
            </div>
            <div class="post-options">⋯</div>
          </div>
          <div class="post-image"></div>
          <div class="post-actions">
            <div class="post-action-left">
              <div class="post-action">🤍</div>
              <div class="post-action">💬</div>
              <div class="post-action">📤</div>
            </div>
            <div class="post-action">🔖</div>
          </div>
          <div class="post-likes">842 likes</div>
          <div class="post-caption">
            <span class="post-caption-user">mikejohnson</span>
            Check out this amazing recipe I tried today! Perfect for a cozy
            weekend dinner. #cooking #foodie #recipe
          </div>
          <div class="post-comments">View all 18 comments</div>
          <div class="post-time">3 hours ago</div>
          <div class="add-comment">
            <input
              type="text"
              class="comment-input"
              placeholder="Add a comment..."
            />
            <div class="post-button">Post</div>
          </div>
        </div>
      </div>

      <!-- User Info Sidebar -->
      <div class="user-info-sidebar">
        <div class="user-profile">
          <div class="user-profile-avatar"></div>
          <div class="user-profile-info">
            <div class="user-profile-username"><?php print $call->getUserData('firstname') . " ". $call->getUserData('middlename')." ". $call->getUserData('lastname') ; ?></div>
           <div class="user-profile-name"><?php print $call->getUserData('username') ?></div>
          </div>
          <div class="switch-button">Switch</div>
        </div>

        <div class="suggestions-section">
          <div class="suggestions-header">
            <div class="suggestions-title">Suggestions For You</div>
            <div class="see-all">See All</div>
          </div>

          <div class="suggestion">
            <div class="suggestion-avatar" style="background-color: #e4405f">
              AS
            </div>
            <div class="suggestion-info">
              <div class="suggestion-username">alexsmith</div>
              <div class="suggestion-text">Suggested for you</div>
            </div>
            <div class="follow-button">Follow</div>
          </div>

          <div class="suggestion">
            <div class="suggestion-avatar" style="background-color: #00aced">
              SW
            </div>
            <div class="suggestion-info">
              <div class="suggestion-username">sarahwilson</div>
              <div class="suggestion-text">Followed by jane_smith</div>
            </div>
            <div class="follow-button">Follow</div>
          </div>

          <div class="suggestion">
            <div class="suggestion-avatar" style="background-color: #dd4b39">
              RJ
            </div>
            <div class="suggestion-info">
              <div class="suggestion-username">robertjones</div>
              <div class="suggestion-text">Followed by mikejohnson</div>
            </div>
            <div class="follow-button">Follow</div>
          </div>

          <div class="suggestion">
            <div class="suggestion-avatar" style="background-color: #3b5998">
              ED
            </div>
            <div class="suggestion-info">
              <div class="suggestion-username">emilydavis</div>
              <div class="suggestion-text">Suggested for you</div>
            </div>
            <div class="follow-button">Follow</div>
          </div>

          <div class="suggestion">
            <div class="suggestion-avatar" style="background-color: #00bf8f">
              TB
            </div>
            <div class="suggestion-info">
              <div class="suggestion-username">thomasbrown</div>
              <div class="suggestion-text">Followed by alexsmith</div>
            </div>
            <div class="follow-button">Follow</div>
          </div>
        </div>

        <div class="footer-links">
          <a href="#">About</a> • <a href="#">Help</a> • <a href="#">Press</a> •
          <a href="#">API</a> • <a href="#">Jobs</a> • <a href="#">Privacy</a> •
          <a href="#">Terms</a> • <a href="#">Locations</a> •
          <a href="#">Language</a>
        </div>

        <div class="copyright">© 2023 FACEBOOK</div>
      </div>
    </div>
    <!-- bottom bar -->
     <?php 
require_once("bottombar.php");
     ?>
  </body>
</html>
