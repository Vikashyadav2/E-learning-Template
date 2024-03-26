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
                <h1 class="text-center mt-5">Navbar<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;Navbar&lt;/title&gt;
    &lt;style&gt;
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            background: #000;
        }

        ul {
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            text-align: center;
        }

        ul li {
            list-style: none;
        }

        ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 22px;
            padding: 1rem 2rem;
            position: relative;
        }

        a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            transform: scaleX(0);
            transition: all 1s;
            transform-origin: left;
        }

        ul li a:hover:before,
        ul li a:hover:after {
            transform: scaleX(1);
        }

        a:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            transform: scaleX(0);
            transition: all 1s;
            transform-origin: right;
        }         
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;section class="wrapper"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href=""&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=""&gt;About&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=""&gt;Services&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=""&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=""&gt;Contact&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
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