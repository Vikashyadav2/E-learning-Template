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
                <h1 class="text-center mt-5">PopUp Form<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;PopUp Form&lt;/title&gt;
    &lt;style&gt;
    :root{
            --modal-duration:1s;
        }

        *{
            box-sizing: border-box;
        }
        body{
            font-family: sans-serif;
            margin: 0;
            transition:transform 0.3s ease;
        }

        header{
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(green-park-view.jpg);
            background-size: cover;
            background-repeat:no-repeat;
            background-position: center;
        }

        .content-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content-container h1{
            font-size: 4rem;
            color: #fff;
        }

        .content-container p{
            width: 600px;
            text-align: center;
            margin-bottom: 40px;
            color: #fff;
            line-height: 25px;
        }

        .cta-btn{
            padding: 12px 30px;
            font-size: 1.2rem;
            outline: none;
            border: none;
            background-color: crimson;
            color: #fff;
            cursor: pointer;
        }

        .form-container{
            background-color: rgba(0,0,0,0.6);
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .form{
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3) ;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            max-width: 100%;
            width: 400px;
        }

        .form-content{
            padding: 20px;
        }

        .form-content h1{
            text-align: center;
            font-size: 2rem;
        }

        .modal-form div{
            margin: 20px 0
        }

        .modal-form label{
            display: block;
            margin-bottom: 6px;
        }

        .modal-form input{
            padding: 10px;
            width: 100%;
            border: 1px solid #000;
            background-color: #fff;
        }

        .close-btn{
            background: transparent;
            border: none;
            font-size: 25px;
            position: absolute;
            top: 5px;
            right: 12px;
            cursor: pointer;
        }

        .form-container .submit-btn{
            padding: 10px 30px;
            font-weight: bold;
            background-color: crimson;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        /* javascript  */

        .form-container.show-model{
            display: block;
        }
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;header&gt;
        &lt;div class="content-container"&gt;
            &lt;h1&gt;Welcome to We Are Coder&lt;/h1&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Provident, iusto? Cupiditate labore ex magnam id ab minima 
                 repellendus soluta asperiores!&lt;/p&gt;
            &lt;button class="cta-btn" id="open"&gt;Sign Up&lt;/button&gt;
        &lt;/div&gt;
    &lt;/header&gt;
    &lt;section class="form-container" id="form"&gt;
        &lt;section class="form"&gt;
            &lt;button class="close-btn" id="close"&gt;x&lt;/button&gt;
            &lt;div class="form-content"&gt;
                &lt;h1&gt;Sign Up&lt;/h1&gt;
                &lt;form action="" class="modal-form"&gt;
                    &lt;div&gt;
                        &lt;label for="name"&gt;Name&lt;/label&gt;
                        &lt;input type="text" name="name" placeholder="Enter your Name" id=""&gt;
                    &lt;/div&gt;

                    &lt;div&gt;
                        &lt;label for="email"&gt;Email&lt;/label&gt;
                        &lt;input type="text" name="name" placeholder="Enter your Email" id=""&gt;
                    &lt;/div&gt;

                    &lt;div&gt;
                        &lt;label for="name"&gt;Password&lt;/label&gt;
                        &lt;input type="password" name="name" placeholder="Enter your Password" id=""&gt;
                    &lt;/div&gt;

                    &lt;input type="submit" value="Submit" class="submit-btn"&gt;
                &lt;/form&gt;
            &lt;/div&gt;
        &lt;/section&gt;
    &lt;/section&gt;

     &lt;/body&gt;
     &lt;script&gt;
        const close = document.getElementById("close");
        const open = document.getElementById("open");
        const form = document.getElementById("form");

        open.addEventListener("click", () => form.classList.add("show-model"));

        close.addEventListener("click", () => form.classList.remove("show-model"));

        window.addEventListener("click", (e) =>{
            e.target === form ? form.classList.remove("show-model") : false;
        })
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