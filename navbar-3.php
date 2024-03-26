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
            display: flex;
        }

        li {
            list-style: none;
        }

        ul li a {
            color: #fff;
            font-size: 2rem;
            text-decoration: none;
            padding: 0.4rem 1rem;
            margin: 0 10px;
            position: relative;
            transition: all 0.5s;
            text-transform: uppercase;
        }

        .list-items:before {
            content: "";
            position: absolute;
            bottom: 12px;
            left: 12px;
            width: 12px;
            height: 12px;
            border: 3px solid white;
            border-width: 0 0 3px 3px;
            opacity: 0;
            transition: all 0.6s;
        }

        .list-items:hover:before {
            opacity: 1;
            bottom: -8px;
            left: -8px;
        }

        .list-items:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 12px;
            height: 12px;
            border: 3px solid white;
            border-width: 3px 3px 0 0;
            opacity: 0;
            transition: all 0.6s;
        }

        .list-items:hover:after {
            opacity: 1;
            top: -8px;
            right: -8px;
        }          
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;section class="container"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="" class="list-items" &gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="" class="list-items" &gt;About&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="" class="list-items" &gt;Services&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="" class="list-items" &gt;Team&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="" class="list-items" &gt;Contact&lt;/a&gt;&lt;/li&gt;
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