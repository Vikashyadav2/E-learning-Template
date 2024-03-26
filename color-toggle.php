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
                <h1 class="text-center mt-5">Color Toggle<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;Dark And light Mode&lt;/title&gt;
    &lt;style&gt;
    :root{
            --primary-color:white;
            --primary-label:black;
            --secondary-label:white;
            --white-ball:white;
            --black-ball:black;
        }

        body{
            background: var(--primary-color);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #switch{
            width: 0;
            height: 0;
            visibility: hidden;
        }

        label{
            display: block;
            width: 100px;
            height: 50px;
            background: var(--primary-label);
            border-radius: 100px;
            position: relative;
            cursor: pointer;
            transition: 0.5s;
        }

        Label:after{
            content: "";
            width: 40px;
            height: 40px;
            border-radius: 70px;
            background-color: var(--white-ball);
            position: absolute;
            top: 5px;
            left: 5px;
            transition: 0.5s;
        }

        #switch:checked + label:after{
            background-color: var(--black-ball);
            left: calc(100% - 5px);
            transform: translateX(-100%);
        }

        #switch:checked + label{
            background-color: var(--secondary-label);
        }

        label:active:after{
            width: 60x;
        }     
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

     &lt;input type="checkbox" name="" id="switch"&gt;
     &lt;label for="switch"&gt; &lt;/label&gt;
     &lt;h1&gt;Welcome To We Are Coder &lt;/h1&gt;

     &lt;/body&gt;
     &lt;script&gt;
        let toggler = document.getElementById("switch");

        toggler.addEventListener("click",() => {
            if(toggler.checked === true){
                document.body.style.backgroundColor= "black";
                document.body.style.color= "white";
            }else{
                document.body.style.backgroundColor = "white";
                document.body.style.color= "black";
            }

            toggler.checked === true 
            ? (document.body.style.backgroundColor = "black")
            :(document.body.style.backgroundColor = "white");
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