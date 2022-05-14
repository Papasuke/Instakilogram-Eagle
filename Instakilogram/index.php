<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>InstaKilogram - Educational society</title>
</head>
<body>
    <nav class="div-flex">
        <div class="left-nav div-flex">
            <img src="image/sandwich-menu.svg" alt="menu" class="menu-icon">
            <img src="image/insta-logo.png" alt="logo" class="logo">
        </div>
        <div class="middle-nav div-flex">
            <div class="search-box div-flex">
                <input type="text" placeholder="Search">
                <img src="image/search.png" alt="search-icon">
            </div>
        </div>
        <div class="right-nav div-flex">
        </div>
    </nav>
    <!-------------Sidebar-------------->
    <div class="left-sidebar">
        <div class="shortcut-sections">
            <a href="#"><img src="image/home-icon.svg" alt="home-icon"><p>Home</p></a>
            <a href="#"><img src="image/news-icon.svg" alt="news-icon"><p>News</p></a>
            <a href="#"><img src="image/videos-icon.svg" alt="videos-icon"><p> Playing </p></a>
            <a href="#"><img src="image/posts-icon.svg" alt="posts-icon"><p> Your posts </p></a>
            <hr>
            <div class="user-setting">
                <img src="image/profile-image.jpg" alt="profile-image" class="user-icon"><p>Anh Khoa</p>
            </div>
        </div>
    </div>
    <!-------------Middle-side-------------->
    <div class="middle-side container">
        <div class="upload-news-container">
            <div class="user-profile">
                <img src="image/profile-image.jpg" alt="profile-image">
                <div>
                    <p>Anh Khoa</p>
                    <small>Public</small>
                </div>
            </div>
            <div class="news-input-container">
                <textarea rows="3" placeholder="How are you doing ?"></textarea>
                <div class="upload-buttons">
                    <a href=""></a>
                </div>
            </div>
        </div>
        <div class="news-container" row>
            <div class="news-list">
                <div class="div-flex">
                    <img src="image/profile-image.jpg" alt="profile-image">
                    <div class="news-info">
                        <H2>Anh Khoa</H2>
                        <p>How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently !</p>
                    </div>
                </div>
                <a href=""><img src="image/beach-img.jpg" alt="beach" class="new-img"></a>
            </div>
            <div class="news-list">
                <div class="div-flex">
                    <img src="image/profile-image.jpg" alt="profile-image">
                    <div class="news-info">
                        <H2>Anh Khoa</H2>
                        <p>How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently !</p>
                    </div>
                </div>
                <a href=""><img src="image/beach-img.jpg" alt="beach" class="new-img"></a>
            </div>
            <div class="news-list">
                <div class="div-flex">
                    <img src="image/profile-image.jpg" alt="profile-image">
                    <div class="news-info">
                        <H2>Anh Khoa</H2>
                        <p>How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently !  How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently !</p>
                    </div>
                </div>
                <a href=""> <img src="image/beach-img.jpg" alt="beach" class="new-img"> </a>
            </div>
            <div class="news-list">
                <div class="div-flex">
                    <img src="image/profile-image.jpg" alt="profile-image">
                    <div class="news-info">
                        <H2>Anh Khoa</H2>
                        <p>How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently ! How to learn efficiently !</p>
                    </div>
                </div>
                <a href=""><img src="image/beach-img.jpg" alt="beach" class="new-img"></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>