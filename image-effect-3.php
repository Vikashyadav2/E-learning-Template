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
                    <a class="btn btn-dark" href="image-effect-2">❮ Previous</a>
                    <a class="btn btn-dark" href="image-effect-4.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">Image Effect 3</h2>
                    <!-- EXAMPLES IMAGE EFFECT START  -->

                    <style>
                        .containerv {
                            width: 30rem;
                            height: 30rem;
                            position: relative;
                            overflow: hidden;
                        }

                        .containerv img {
                            width: 100%;
                            transition: all 0.5s;
                        }

                        .content {
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            height: 25%;
                            width: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            color: #000;
                            transition: all 0.5s;
                            background-color: #fff;
                            transform: translateX(100%);
                        }

                        .containerv:hover .content {
                            transform: translateY(0);
                        }

                        .containerv:hover img {
                            transform: translateY(-30%);
                        }
                    </style>

                    <section class="containerv">
                        <img src="img/effect/image3.jpg" alt="">
                        <article class="content">
                            <h1>Card Title</h1>
                            <h4>Content Goes Here</h4>
                        </article>
                    </section>

                    <!-- EXAMPLES IMAGE EFFECT START  -->


                    <div>
                        <h2 class="fw-bold my-4">SOURCE CODE ...</h2>
                        <button onclick="copyToClipboard('#p1')" class="btn btn-success me-4">Copy</button>
                    </div>
                    <h5 style="background-color:#E7E9EB;  padding-top:20px; border-left: 2px solid black;" class="my-4">
                        <pre id="p1">
        &lt;!DOCTYPE htm&gt;
        &lt;html lang="en"&gt;
        &lt;head&gt;
            &lt;title&gt;Image Effect&lt;/title&gt;
        &lt;style&gt;
        body{
            height: 100vh;
            display: fl
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }

        .container{
            width: 30rem;
            height: 30rem;
            position: relative;
            overflow: hidden;
        }

        .container img{
            width: 100%;
            transition: all 0.5s;
        }

        .content{
            position: absolute;
            bottom: 0;
            left: 0;
            height: 25%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #000;
            transition: all 0.5s;
            background-color: #fff;
            transform: translateX(100%);
        }

        .container:hover .content{
            transform: translateY(0);
        }

        .container:hover img{
            transform: translateY(-30%);
        }
        &lt;/style&gt;
        &lt;!-- CSS End  --&gt;
        &lt;/head&gt;
        &lt;body&gt;
                    
        &lt;!-- image effect html start  --&gt;

        &lt;section class="container"&gt;
        &lt;img src="image3.jpg" alt=""&gt;
        &lt;article class="content"&gt;
            &lt;h1&gt;Card Title &lt; /h1 &gt;
            &lt;h4&gt;Content Goes Here &lt; /h4 &gt;
        &lt;/article &gt;
        &lt;/section &gt;

        &lt;!-- button html start  --&gt;
        &lt;/body &gt;
        &lt;/html &gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="image-effect-2.php">❮ Previous</a>
                <a class="btn btn-dark" href="image-effect-4.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include "footer.php";
            ?>
        </div>
    </div>
</div>
</div>