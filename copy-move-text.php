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
                <h1 class="text-center mt-5">Copy & Move Text<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;AutoText&lt;/title&gt;
    &lt;style&gt;
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body{
            height: 100vh;
            background: linear-gradient(to bottom right, #ff66cc 0%, #3399ff 100%);
            font-family: sans-serif;
            display: grid;
            grid-template-columns: 2fr 2fr;
        }

        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-right: 2px solid #fff;
        }

        .btn-container{
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .btn{
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            background-color: #000;
            color: #fff;
        }

        .btn:hover{
            background-color: #fff;
            color: #000;
        }

        textarea{
            margin: 10px;
            outline: none;
        }

        /* MOVE TEXT SECTION CSS  */

        .output-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            transition: 1s all ease;
        }

        /* javascript css  */

        .added{
            position: absolute;
            bottom: 35px;
            right: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: #000;
            color: #fff;
            width: 200px;
            height: 50px;
        }               
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;div class="container"&gt;
        &lt;div class="btns-container"&gt;
            &lt;button class="copybtn btn"&gt;COPY TEXT&lt;/button&gt;
        &lt;/div&gt;
        &lt;textarea name="copytext" id="" cols="50" rows="5"&gt;Welcome to we are coder&lt;/textarea&gt;
    <&lt;div class="output-container"&gt;
        &lt;div class="output"&gt;&lt;/div&gt;
            &lt;button class="moverbtn btn">MOVE TEXT&lt;/button&gt;
            &lt;textarea name="finaltext" id="" cols="50" rows="5"&gt;Welcome to we are coder&lt;/textarea&gt;
        &lt;/div>&gt;

    &lt;/body&gt;
    &lt;script&gt;
        const copyText = document.querySelector("textarea[name=copytext");
        const finalText = document.querySelector("textarea[name=finaltext");
        const movebtn = document.querySelector(".moverbtn");
        const copybtn = document.querySelector(".copybtn");
        const output = document.querySelector(".output");

        copybtn.addEventListener("click", () => {
            let temp = copyText.value;
            copyToClipBoard(temp)
        })

        movebtn.addEventListener("click", () => {
            let temp = copyText.value;
            finalText.value = temp;
        });

        copyText.addEventListener("click",() => this.select());
        finalText.addEventListener("click",() => this.select());

        function copyToClipBoard(str){
            const outputcontainer = document.querySelector(".output-container");
            const textarea =document.createElement("textarea");
            textarea.value = str;
            outputcontainer.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");
            outputcontainer.removeChild(textarea);
            output.innerHTML = '<h3> Content copied </h3>';
            output.classList.add("added");
            
            setTimeout(() =>{
                output.classList.toggle("added");
                output.textContent = "";}, 2000);
        }
    
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