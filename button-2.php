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
                <h1 class="text-center mt-5">Button<span class="text-center"> Tutorial</span></h1>
                <div class="text-center d-flex justify-content-between">
                    <a class="btn btn-dark" href="button-1.php">❮ Previous</a>
                    <a class="btn btn-dark" href="button-3.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">BUTTON 3</h2>
                    <!-- EXAMPLES BUTTON START  -->
                    <style>
                        .button-3 {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: sans-serif;
                        }

                        #button-3 {
                            padding: 2rem 3rem;
                            text-transform: uppercase;
                            background-color: blueviolet;
                            color: #fff;
                            font-size: 1.5rem;
                            position: relative;
                            text-decoration: none;
                        }

                        #button-3::before {
                            content: "Button";
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: crimson;

                            display: flex;
                            justify-content: center;
                            align-items: center;
                            transform: rotateX(270deg);
                            transform-origin: top;
                            transition: all 0.5s;
                        }

                        #button-3::after {
                            content: "button";
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-color: chartreuse;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            transform: rotateX(270deg);
                            transform-origin: top;
                            transition: all 0.5s;
                            transition-delay: 0.25s;

                        }

                        #button-3:hover:before,
                        #button-3:hover:after {
                            transform: rotateX(0);
                        }
                    </style>

                    <div class="button-3">
                        <a href="#" id="button-3">Button 3</a>
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
                        &lt;title&gt;Button&lt;/title&gt;
                    &lt;style&gt;
                    body{
                        height: 100vh;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-family: sans-serif;
                    }
            
                    a{
                        padding: 2rem 3rem;
                        text-transform: uppercase;
                        background-color: blueviolet;
                        color: #fff;
                        font-size: 1.5rem;
                        position: relative;
                        text-decoration: none;
                    }
            
                    a::before{
                        content: "Button";
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: crimson;
            
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        transform: rotateX(270deg);
                        transform-origin: top;
                        transition: all 0.5s;
                    }
            
                    a::after{
                        content: "button";
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color:chartreuse;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        transform: rotateX(270deg);
                        transform-origin: top;
                        transition: all 0.5s;
                        transition-delay: 0.25s;
            
                    }
            
                    a:hover:before,
                    a:hover:after{
                        transform: rotateX(0);
                    }
                    &lt;/style&gt;
                    &lt;!-- CSS End  --&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    
                    &lt;!-- button html start  --&gt;

                    &lt;body&gt;
                        &lt;a href="#"&gt;;Button 3&lt;/a&gt;
                    &lt;body&gt;

                    &lt;!-- button html start  --&gt;
                &lt;/body&gt;
                &lt;/html&gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="button-1.php">❮ Previous</a>
                <a class="btn btn-dark" href="button-3.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include 'footer.php';
            ?>
        </div>
    </div>
</div>
</div>