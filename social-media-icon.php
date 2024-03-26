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
                <h1 class="text-center mt-5">Social Media Icon<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;Social Media Icon&lt;/title&gt;
        &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;
    &lt;style&gt;
    *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            font-family: sans-serif;
        }

        #container{
            position: relative;
            padding: 7px;
            margin-left: 20px;
            font-size: 25px;
            font-weight: bold;
            cursor: pointer;
        }

        #title{
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            background-color: #000;
            color: #fff;
            white-space: nowrap;
            padding: 10px 15px;
            border-radius: 7px;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        #title::before{
            content: "";
            position: absolute;
            left: 50%;
            top: 100%;
            transform: translateX(-50%);
            border: 15px solid;
            border-color: #000 #0000 #0000 #0000;
        }

        #container:hover #title{
            top: -100%;
            visibility: visible;
            opacity: 1;
        }

        #container a{
            background-color: #fff;
            border-radius: 50%;
            font-size: 50px;
            padding: 10px 18px;
            color: #000;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        } 
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;div id="container"&gt;
        &lt;span id="title"&gt;Facebook&lt;/span&gt;
        &lt;a href=""&gt;&lt;i class="fa fa-facebook-official" aria-hidden="true"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="container"&gt;
        &lt;span id="title"&gt;Instagram&lt;/span&gt;
        &lt;a href=""&gt;&lt;i class="fa fa-instagram" aria-hidden="true"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="container"&gt;
        &lt;span id="title"&gt;Linkedin&lt;/span&gt;
        &lt;a href=""&gt;&lt;i class="fa fa-linkedin" aria-hidden="true"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div id="container"&gt;
        &lt;span id="title"&gt;Whatsapp&lt;/span&gt;
        &lt;a href=""&gt;&lt;i class="fa fa-whatsapp" aria-hidden="true"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;

    &lt;/body&gt;
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