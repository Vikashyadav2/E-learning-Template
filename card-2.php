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
                    <a class="btn btn-dark" href="card-1.php">❮ Previous</a>
                    <a class="btn btn-dark" href="image-effect-2.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">Image Effect 2</h2>
                    <!-- EXAMPLES IMAGE EFFECT START  -->

                    <style>
                        .c2 {
                            margin: 0;
                            height: 50vh;
                            background: linear-gradient(#0093e9, #80d0c7);
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: sans-serif;
                            z-index: -1;
                        }

                        .card {
                            position: relative;
                            width: 15rem;
                            height: 15rem;
                            background: #fff;
                            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
                            margin-top: 50px;
                        }

                        .card:before,
                        .card:after {
                            content: "";
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: #fff;
                            transition: 1s;
                            z-index: 1;
                        }

                        .card:hover:before {
                            transform: rotate(20deg);
                            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
                        }

                        .card:hover:after {
                            transform: rotate(10deg);
                            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
                        }

                        .imgbox {
                            position: absolute;
                            top: 10px;
                            left: 10px;
                            bottom: 10px;
                            right: 10px;
                            background: #222;
                            transition: 1s;
                            z-index: 2;
                        }

                        .imgbox img {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }

                        .card:hover .imgbox {
                            bottom: 80px;
                        }

                        .details {
                            position: absolute;
                            left: 10px;
                            right: 10px;
                            bottom: 10px;
                            height: 60px;
                            text-align: center;
                        }

                        .cardh2{
                            color:black;
                            z-index: 2000;
                        }
                    </style>

                    <div class="c2">
                        <section class="card">
                            <div class="imgbox">
                                <img src="img/cards.jpg" alt="">
                            </div>
                            <article class="details">
                                <h2 class="cardh2">Title</h2>
                            </article>
                        </section>
                    </div>

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
        margin: 0;
        height: 100vh;
        background: linear-gradient(#0093e9, #80d0c7);
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
    }

    .card{
        position: relative;
        width: 30rem;
        height: 30rem;
        background: #fff;
        box-shadow: 0 1px 5px rgba(0, 0, 0,0.5);
    }

    .card:before,
    .card:after{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        transition: 1s;
        z-index: -1;
    }

    .card:hover:before{
        transform: rotate(20deg);
        box-shadow: 0 2px 20px rgba(0,0,0,0.2);
    }

    .card:hover:after{
        transform: rotate(10deg);
        box-shadow: 0 2px 20px rgba(0,0,0,0.2);
    }

    .imgbox{
        position: absolute;
        top: 10px;
        left: 10px;
        bottom: 10px;
        right: 10px;
        background: #222;
        transition: 1s;
        z-index: 2;
    }

    img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card:hover .imgbox{
        bottom: 80px;
    }

    .details{
        position: absolute;
        left: 10px;
        right: 10px;
        bottom: 10px;
        height: 60px;
        text-align: center;
    }
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;
                    
    &lt;!-- image effect html start  --&gt;

    &lt;section class="card"&gt;
        &lt;div class="imgbox"&gt;
            &lt;img src="img1.jpg" alt=""&gt;
        &lt;/div&gt;
        &lt;/article class="details" &gt;
            &lt;h2&gt;Title&lt;/h2&gt;
        &lt;/article &gt;
    &lt;/section &gt;

    &lt;!-- button html start  --&gt;
    &lt;/body &gt;
    &lt;/html &gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="card-1.php">❮ Previous</a>
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