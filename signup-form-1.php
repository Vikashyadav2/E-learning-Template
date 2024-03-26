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
                <h1 class="text-center mt-5">SignUp Form<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;SignUp form&lt;/title&gt;
    &lt;style&gt;
        body{
            background:url(image.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin-top: 70px;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            width: 600px;
            height: 400px;
            /* background-color: ; */
            border-radius: 25px;
            box-shadow: rgba(0, 0, 0,0.35) 0px 5px 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 10px;
        }

        .form{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-content label{
            display: block;
            font-size: 30px;
            margin: 10px 0;
        }

        .form-content input{
            padding: 8px;
            width: 400px;
            font-size: 20px;
            border: none;
            padding-left: 20px;
            box-shadow: rgba(0, 0, 0,0.35) 0px 5px 15px;
        }

        #btn{
            background-color: #ff00cc;
            border: none;
            border-radius: 56px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 20px;
            font-weight: 600;
            outline: 0;
            padding: 16px 21px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: all .3s;
            margin: 20px 0px;
        }

        #btn:before{
            background-color: initial;
            background-image: linear-gradient(#fff 0, rgba(255, 255, 255,0)100%);
            border-radius: 125px;
            content: "";
            height: 50%;
            left: 4%;
            opacity: .5;
            position: absolute;
            top: 0;
            transition:  all .3s;
            width: 92%;
        }

        #btn:hover{
            box-shadow: rgba(255, 255, 255,.2) 0 3px 15px inset, rgba(0, 0, 0,0.1)0 3px 5px rgba(0, 0, 0,0.1) 0 10px 13px;
            transform: scale(1.05);
        }

        @media (min-width:766px){
            #btn{
                padding: 16px 48px;
            }
        }

        h1{
            text-align: center;
            font-size: 70px;
            letter-spacing: 3px;
        }     
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;div class="container1"&gt;
        &lt;div class="form"&gt;
            &lt;form action=""&gt;
                &lt;h1&gt;Sign Up&lt;/h1&gt;

            &lt;div class="form-content"&gt;
                    &lt;label for=""&gt;Name&lt;/label&gt;
                    &lt;input type="text" name="name" placeholder="Name" id=""&gt;
                &lt;/div&gt;

                &lt;div class="form-content"&gt;
                    &lt;label for=""&gt;Email&lt;/label&gt;
                    &lt;input type="text" name="name" placeholder="example@gmail.com" id=""&gt;
                &lt;/div&gt;

                &lt;div class="form-content"&gt;
                    &lt;label for=""&gt;Password&lt;/label&gt;
                    &lt;input type="password" name="name" placeholder="Password" id=""&gt;
                &lt;/div&gt;
                &lt;button id="btn"&gt;Submit&lt;/button&gt;
            &lt;/form&gt;
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