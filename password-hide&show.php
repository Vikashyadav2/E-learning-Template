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
                <h1 class="text-center mt-5">Password Hide & Show<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;Password Hide & Show&lt;/title&gt;
        &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;
    &lt;style&gt;
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body{
            position: relative;
            min-height: 100vh;
            background-color: rgb(189, 164, 213);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container1{
            position: relative;
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            border-radius: 5px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        input{
            outline: none;
            background-color: none;
            border: none;
            width: 90%;
            padding: 10px 20px;
            font-size: 16px;
        }

        .icon{
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #eye-icon{
            font-size: 20px;
            color: blueviolet;
            transition: 0.2s ease;
        }

        #eye-icon:hover{
            color: blueviolet;
            cursor: pointer;
            opacity: 0.8;
        }     
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;div class="container1"&gt;
        &lt;input type="password" name="" placeholder="Enter Your Password" id=""&gt;
        &lt;div class="icon"&gt;
            &lt;i class="fa fa-eye" aria-hidden="true" id="eye-icon"&gt;&lt;/i&gt;
        &lt;/div&gt;
    &lt;/div&gt;

     &lt;/body&gt;
     &lt;script&gt;
        const input = document.querySelector("input");
        const icon = document.querySelector("#eye-icon");

        icon.addEventListener("click", () => {
            input.type === "password" ? (input.type = "text") : (input.type = "password");
        });
     &lt;/script&gt;
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