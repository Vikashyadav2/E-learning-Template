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
                    <a class="btn btn-dark" href="image-effect-1.php">❮ Previous</a>
                    <a class="btn btn-dark" href="image-effect-3.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">Image Effect 2</h2>
                    <!-- EXAMPLES IMAGE EFFECT START  -->

                    <style>
                        /* body {
                            background: rgb(23, 23, 23);
                            height: 100vh;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: sans-serif;
                        } */

                        .card {
                            position: relative;
                            width: 30rem;
                            height: 35rem;
                            background-color: black;
                            box-shadow: 0px 30px 30px rgba(0, 0, 0, 0.5);
                        }

                        .content {
                            position: absolute;
                            bottom: 0px;
                            width: 80%;
                            height: 10px;
                            background: crimson;
                            left: 10%;
                            text-align: center;
                            transition: 0.5s;
                            overflow: hidden;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            border-radius: 10px;
                        }

                        .content h3 {
                            font-size: 30px;
                            text-transform: uppercase;
                            margin: 25px;
                            color: #fff;
                        }

                        .content p {
                            width: 80%;
                            margin: 10px auto;
                            font-size: 18px;
                            transition: 0.5s;
                            opacity: 0;
                            line-height: 25px;
                            color: #fff;
                        }

                        .content a {
                            text-decoration: none;
                            background-color: black;
                            color: #fff;
                            padding: 10px 15px;
                            display: inline-block;
                            margin-top: 10px;
                            transition: 0.5s;
                            opacity: 0;
                            line-height: 25px;
                            color: #fff;
                        }

                        .img-container img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            transition: 1s;
                        }

                        .card:hover .content {
                            height: 100%;
                            width: 100%;
                            left: 0;
                        }

                        .card:hover p,
                        .card:hover a {
                            opacity: 1;
                            transition-delay: 0.5s;
                        }

                        .img-container {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            transition: 1s;
                        }

                        .card:hover img {
                            opacity: 0;
                        }
                    </style>

                    <section class="card">
                        <div class="img-container">
                            <img src="img/effect/img.jpg" />
                        </div>

                        <section class="content">
                            <h3>Card Title</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut rem
                                nesciunt illo veniam mollitia harum ea.
                            </p>
                            <a href="">Learn More</a>
                        </section>
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
        &lt;title&gt;Image Hover Effect&lt;/title&gt;
    &lt;style&gt;
    body {
        background: rgb(23, 23, 23);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
    }

    .card {
        position: relative;
        width: 30rem;
        height: 35rem;
        background-color: black;
        box-shadow: 0px 30px 30px rgba(0, 0, 0, 0.5);
    }

    .content {
        position: absolute;
        bottom: 0px;
        width: 80%;
        height: 10px;
        background: crimson;
        left: 10%;
        text-align: center;
        transition: 0.5s;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h3 {
        font-size: 30px;
        text-transform: uppercase;
        margin: 25px;
        color: #fff;
    }

    p {
        width: 80%;
        margin: 10px auto;
        font-size: 18px;
        transition: 0.5s;
        opacity: 0;
        line-height: 25px;
        color: #fff;
    }

    a {
        text-decoration: none;
        background-color: black;
        color: #fff;
        padding: 10px 15px;
        display: inline-block;
        margin-top: 10px;
        transition: 0.5s;
        opacity: 0;
        line-height: 25px;
        color: #fff;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 1s;
    }

    .card:hover .content {
        height: 100%;
        width: 100%;
        left: 0;
    }

    .card:hover p,
    .card:hover a {
        opacity: 1;
        transition-delay: 0.5s;
    }

    .img-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: 1s;
    }

    .card:hover img {
        opacity: 0;
    }
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;
                    
    &lt;!-- image effect html start  --&gt;

    &lt;section class="card"&gt;
    &lt;div class="img-container"&gt;
          &lt;img src="image.jpg" /&gt;
        &lt;/div&gt;
  
        &lt;section class="content"&gt;
          &lt;h3&gt;Card Title&lt;/h3&gt;
          &lt;p&gt;
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut rem
            nesciunt illo veniam mollitia harum ea.
          &lt;/p&gt;
          &lt;a href="">Learn More&lt;/a&gt;
        &lt;/section&gt;
      &lt;/section&gt;

    &lt;/body &gt;
    &lt;/html &gt;                    
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="image-effect-1.php">❮ Previous</a>
                <a class="btn btn-dark" href="image-effect-3.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include "footer.php";
            ?>
        </div>
    </div>
</div>