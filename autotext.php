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
                <h1 class="text-center mt-5">AutoText<span class="text-center"> Tutorial</span></h1>
                <div class="text-center d-flex justify-content-between">
                    <a class="btn btn-dark" href="button-3.php">❮ Previous</a>
                    <a class="btn btn-dark" href="image-effect-1.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">AutoText</h2>
                    <!-- EXAMPLES BUTTON START  -->
                    <style>
                        .textt {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 40vh;
                            font-family: sans-serif;
                            background: #000;
                            color: #fff;
                        }

                        #auto {
                            font-size: 40px;
                        }

                        .js3 {
                            color: yellow;
                            font-size: 40px;
                        }

                        .typed-text3 {
                            color: #20c20e;
                            font-size: 40px;
                        }

                        .cursor3 {
                            background: #20c20e;
                            font-size: 40px;
                        }
                    </style>

                    <div class="textt">
                        <p id="auto">
                            <span class="content" style="color:yellow">Want to</span> learn <span class="autotext" style="color:#20c20e;"></span>
                            <span class="cursor3" style="color:green;">&nbsp;</span>
                        </p>
                    </div>
                    <!-- EXAMPLES BUTTON START  -->


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
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .textt {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: sans-serif;
            background: #000;
            color: #fff;
        }

        .auto {
            font-size: 3rem;
        }

        .js3 {
            color: yellow;
        }

        .typed-text3 {
            color: #20c20e;
        }

        .cursor3 {
            background: #20c20e;
        }                
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;
                    
    &lt;!-- autotext html start  --&gt;

    &lt;div class="textt"&gt;
        &lt;p id="auto"&gt;
            &lt;span class="js3">JavaScript&lt;/span&gt; Is &lt;span class="typed-text3"&gt;&lt;/span&gt;
            &lt;span class="cursor3">&nbsp;&lt;/span&gt;
        &lt;/p&gt;
    &lt;/div&gt;

    &lt;!-- button html start  --&gt;
    &lt;/body&gt;
    &lt;script&gt;
        const typedTextSpan3 = document.querySelector(".typed-text3");
        const cursor3 = document.querySelector(".cursor3");
    
        const words3 = ["Awesome", "Fun", "Cool", "Life", "Famous", "Weird"];
        const typingDelay3 = 200;
        const erasingDelay3 = 200;
        const newLetterDelay3 = 2000;
        let index3 = 0;
        let charIndex3 = 0;
    
        document.addEventListener("DOMContentLoaded", () => {
            if (words3.length) {
                setTimeout(type, newLetterDelay3);
            }
        });
    
        function type() {
            if (charIndex3 < words3[index3].length) {
                typedTextSpan3.textContent += words3[index3].charAt(charIndex3);
                charIndex3++;
                setTimeout(type, typingDelay3);
            } else {
                setTimeout(erase, newLetterDelay3);
            }
        }
    
        function erase() {
            if (charIndex3 > 0) {
                typedTextSpan3.textContent = words3[index3].substring(0, charIndex3 - 1);
                charIndex3--;
                setTimeout(erase, erasingDelay3);
            } else {
                index3++;
                if (index3 >= words3.length) {
                    index3 = 0;
                }
                setTimeout(type, typingDelay3 + 1100);
            }
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