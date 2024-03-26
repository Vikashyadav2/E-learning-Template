<?php
include 'header.php';
?>

<div class="code">
    <?php
    include 'side-nav.php';
    ?>
    <div class="container main-section">
        <div class="main-page-content px-5">
            <div style="height: 120px;">

            </div>
            <div class="mid-content">
                <h1 class="text-center mt-5">Navbar Toggle Button<span class="text-center"> Tutorial</span></h1>
                <div class="text-center d-flex justify-content-between">
                    <a class="btn btn-dark" href="button-3.php">❮ Previous</a>
                    <a class="btn btn-dark" href="image-effect-1.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <!-- <h2 class="fw-bold">Copy & Move Text</h2> -->
                    <!-- <div class="video-content" style="--aspect-ratio: 2 / 3;">
                    <iframe   src="https://www.youtube.com/embed/pxOoQXc2Lbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div> -->
                    <div>
                        <h2 class="fw-bold my-4">SOURCE CODE ...</h2>
                        <button onclick="copyToClipboard('#p1')" class="btn btn-success me-4">Copy</button>
                    </div>
                    <h5 style="background-color:#E7E9EB;  padding-top:20px; border-left: 2px solid black;" class="my-4">
                        <pre id="p1">
    &lt;!DOCTYPE htm&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Navbar Toggle Button&lt;/title&gt;
    &lt;style&gt;
    *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        nav{
            background-color: #fff;
            padding: 20px;
            width: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: width 0.6s linear;
        }

        nav.active{
            width: 350px;
        }

        ul{
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            width: 0;
            transition: width 0.6s linear;
        }

        nav.active ul{
            width: 100%;
        }

        nav ul li{
            transform: rotate(0deg);
            opacity: 0;
            transition: transfrom 0.6s linear, opacity 0.6s linear;

        }

        nav.active ul li{
            opacity: 1;
            transform: rotateY(360deg);
        }

        nav ul a{
            position: relative;
            color: blue;
            text-decoration: none;
            margin: 0 10px;
        }

        .icon{
            background: #fff;
            border: 0;
            padding: 0;
            position: relative;
            height:30px;
            width: 30px;
            outline: none;
            cursor: pointer;
        }

        .icon .line{
            background: blue;
            height: 2px ;
            width: 20px;
            position: absolute;
            top: 10px;
            left: 5px;
            transition: transform 0.6s linear;
        }

        .icon .line2{
            top: auto;
            bottom: 10px;
        }

        nav.active .iucon .line1{
            transform: rotate(-765deg) translateY(5.5px);
        }

        nav .active .icon .line2{
            transform:  rotate(765px) translate(-5.5px);
        }   
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;nav id="nav"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="">Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="">About&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="">Team&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="">Contact&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;

        &lt;button class="icon" id="toggle"&gt;
            &lt;div class="line line1"&gt;&lt;/div&gt;
            &lt;div class="line line2"&gt;&lt;/div&gt;
        &lt;/button&gt;
    &lt;/nav&gt;

     &lt;/body&gt;
     &lt;script&gt;
        const toggle = document.getElementById("toggle");
        const nav = document.getElementById("nav");

        toggle.addEventListener("click", () => nav.classList.toggle("active"));
    &lt;/script&gt;
    &lt;/html&gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="button-3.php">❮ Previous</a>
                <a class="btn btn-dark" href="image-effect-1.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include "footer.php";
            ?>
        </div>
    </div>
</div>
</div>