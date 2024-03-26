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
                <h1 class="text-center mt-5">Image Hover Effect<span class="text-center"> Tutorial</span></h1>
                <div class="text-center d-flex justify-content-between">
                    <a class="btn btn-dark" href="image-effect-3.php">❮ Previous</a>
                    <a class="btn btn-dark" href="card-1.php">Next ❯</a>
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
        &lt;title&gt;AutoText&lt;/title&gt;
    &lt;style&gt;
    body{
            margin: 0;
            padding: 0;
            background: #555;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            position: relative;
            width: 800px;
            height: 600px;
            background: #222;
        }

        .clip{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: all 0.5s;
        }

        .clip1{
            background: url(image1.jpg);
            background-size: cover;
            background-position: center;
            clip-path: polygon(0 0, 46% 0, 39% 100%, 0 100%);
        }

        .clip2{
            background: url(image2.jpg);
            background-size: cover;
            background-position: center;
            clip-path: polygon(19% 0, 87% 0, 64% 100%, 33% 100%);
        }

        .clip3{
            background: url(image3.jpg);
            background-size: cover;
            background-position: center;
            clip-path: polygon(82% 0, 100% 0, 100% 100%, 63% 100%);
        }

        .container:hover .clip{
            clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
        }

        .container .clip:hover{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }          
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;section class="container"&gt;
        &lt;div class="clip clip1"&gt;&lt;/div&gt;
        &lt;div class="clip clip2"&gt;&lt;/div&gt;
        &lt;div class="clip clip3"&gt;&lt;/div&gt;
    &lt;/section&gt;

    &lt;/body&gt;
    &lt;/html&gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="image-effect-3.php">❮ Previous</a>
                <a class="btn btn-dark" href="card-1.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include "footer.php";
            ?>
        </div>
    </div>
</div>
</div>