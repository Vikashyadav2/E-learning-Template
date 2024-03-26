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
                    <a class="btn btn-dark" href="button-4.php">❮ Previous</a>
                    <a class="btn btn-dark" href="image-effect-2.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">Image Effect 1</h2>
                    <!-- EXAMPLES IMAGE EFFECT START  -->

                    <style>
                        .containerr {
                            width: 30rem;
                            height: 30rem;
                            position: relative;
                            overflow: hidden;
                        }

                        .containerr img {
                            width: 100%;
                            transition: all 1s;
                        }

                        .content {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 30rem;
                            height: 30rem;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            color: red;
                            transition: all 1s;
                            background: black;
                            transform: translateX(-100%);
                        }

                        .containerr:hover .content {
                            transform: translateX(0);
                        }

                        .containerr:hover img {
                            transform: translateX(100%);
                        }
                    </style>

                    <section class="containerr">
                        <img src="img/effect/image.jpg" alt="">
                        <article class="content text-center">
                            <h1>Welcome To We Are Coder</h1>
                            <h4>Write Your Content Here</h4>
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
        display: flex;
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
        transition: all 1s;
    }

    .content{
        position: absolute;
        top: 0;
        left: 0;
        width: 30rem;
        height: 30rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        transition: all 1s;
        background:black;
        transform: translateX(-100%);
    }

    .container:hover .content{
        transform: translateX(0);
    }

    .container:hover img{
        transform: translateX(100%);
    }
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;
                    
    &lt;!-- image effect html start  --&gt;

    &lt;section class="container"&gt;
    &lt;img src="image.jpg" alt=""&gt;
    &lt;article class="content"&gt;
        &lt;h1&gt;Welcome To We Are Coder &lt;/h1 &gt;
        &lt;h4&gt;Write Your Content Here &lt;/h4 &gt;
    &lt;/article &gt;
    &lt;/section &gt;

    &lt;!-- button html start  --&gt;
    &lt;/body &gt;
    &lt;/html &gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="button-4.php">❮ Previous</a>
                <a class="btn btn-dark" href="image-effect-2.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include "footer.php";
            ?>
        </div>
    </div>
</div>
</div>