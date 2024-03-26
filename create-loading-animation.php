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
                <h1 class="text-center mt-5">Loading Animation<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;AutoText&lt;/title&gt;
    &lt;style&gt;
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: #000;
        }

        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .wrapper .loader{
            display: flex;
            justify-content: space-evenly;
            padding: 0 20px;
        }

        .loader .loading{
            background: blueviolet;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            margin: 0 10px;
            animation: load 0.8s ease infinite;
        }

        .loader .loading.one{
            animation-delay: 0.3s;
        }

        .loader .loading.two{
            animation-delay: 0.4s;

        }

        .loader .loading.three{
            animation-delay: 0.5s;
        }

        @keyframes load{
            0%{
                width: 50px;
                height: 50px;
            }

            50%{
                width: 40px;
                height: 40px;
            }
        }            
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;section class="wrapper"&gt;
        &lt;div class="loader"&gt;
            &lt;div class="loading one"&gt;&lt;/div&gt;
            &lt;div class="loading two"&gt;&lt;/div&gt;
            &lt;div class="loading three"&gt;&lt;/div&gt;
            &lt;div class="loading four"&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

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