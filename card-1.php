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
                <h1 class="text-center mt-5">Card Hover Effect<span class="text-center"> Tutorial</span></h1>
                <div class="text-center d-flex justify-content-between">
                    <a class="btn btn-dark" href="image-effect-3.php">❮ Previous</a>
                    <a class="btn btn-dark" href="card-2.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">Card Effect 1</h2>
                    <!-- EXAMPLES IMAGE EFFECT START  -->

                    <style>
                        /* body {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: sans-serif;
                            background: rgb(10, 10, 10);
                            height: 100vh;
                        } */

                        .card-container {
                            position: relative;
                            width: 320px;
                            padding: 40px;
                            background: white;
                            overflow: hidden;
                        }

                        .card-container:before {
                            content: "";
                            position: absolute;
                            left: 0;
                            bottom: calc(-100% + 5px);
                            width: 100%;
                            height: 100%;
                            background: blueviolet;
                            z-index: 1;
                            transition: 1s;
                        }

                        .card-container:hover:before {
                            bottom: 0;
                        }

                        .content {
                            position: relative;
                            color: #000;
                            z-index: 2;
                            transition: 1s;
                        }

                        .content h2 {
                            font-size: 30px;
                            z-index: -2;
                        }

                        .content p {
                            line-height: 25px;
                            padding: 20px 0;
                            margin: 20px 0;
                            z-index: -2;
                        }

                        .content a {
                            font-size: 12px;
                            color: #fff;
                            text-decoration: none;
                            background: rgb(22, 7, 35);
                            padding: 0.6rem 1rem;
                            z-index: -2;
                        }

                        .card-container:hover .content {
                            color: #fff;
                        }
                    </style>

                    <section class="card-container">
                        <article class="content">
                            <h2>Title</h2>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda est deserunt
                                voluptatum aspernatur
                                esse reiciendis accusamus laborum hic corrupti voluptate culpa eveniet cum nam nobis
                                amet fuga
                                laudantium, expedita temporibus.
                            </p>
                            <a href="">Read More</a>
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
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
        background: rgb(10, 10, 10);
        height: 100vh;
    }

    .card-container {
        position: relative;
        width: 320px;
        padding: 40px;
        background: white;
        overflow: hidden;
    }

    .card-container:before {
        content: "";
        position: absolute;
        left: 0;
        bottom: calc(-100% + 5px);
        width: 100%;
        height: 100%;
        background: blueviolet;
        z-index: 1;
        transition: 1s;
    }

    .card-container:hover:before {
        bottom: 0;
    }

    .content {
        position: relative;
        color: #000;
        z-index: 2;
        transition: 1s;
    }

    h2 {
        font-size: 30px;
    }

    p {
        line-height: 25px;
        padding: 20px 0;
        margin: 20px 0;
    }

    a {
        font-size: 12px;
        color: #fff;
        text-decoration: none;
        background: rgb(22, 7, 35);
        padding: 0.6rem 1rem;
    }

    .card-container:hover .content {
        color: #fff;
    }
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;
                    
    &lt;!-- card html start  --&gt;

    &lt;section class="card-container"&gt;
    &lt;article class="content"&gt;
        &lt;h2&gt;Title &lt;/h2 &gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit.
         Assumenda est deserunt voluptatum aspernaturesse reiciendis accusamus 
         laborum hic corrupti voluptate culpa eveniet cum nam nobis amet fuga laudantium,
          expedita temporibus. &lt;/p &gt;
        &lt;a href=""&gt;Read More&lt;/a&gt;
    &lt;/article &gt;
    &lt;/section &gt;

    &lt;!-- card html start  --&gt;
    &lt;/body &gt;
    &lt;/html &gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="image-effect-3.php">❮ Previous</a>
                <a class="btn btn-dark" href="card-2.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include "footer.php";
            ?>
        </div>
    </div>
</div>
</div>