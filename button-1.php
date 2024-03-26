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
                    <a class="btn btn-dark" href="source-code.php">❮ Previous</a>
                    <a class="btn btn-dark" href="button-2.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">BUTTON 1</h2>
                    <!-- EXAMPLES BUTTON START  -->

                    <style>
                        .button-2 {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: sans-serif;
                        }

                        #button-2 {
                            width: 300px;
                            height: 60px;
                            text-decoration: none;
                            text-transform: uppercase;
                            background: transparent;
                            text-align: center;
                            line-height: 60px;
                            font-weight: bold;
                            letter-spacing: 2px;
                            position: relative;
                            transition: all 0.2s;
                            color: #fff;
                        }

                        #button-2:before {
                            content: "";
                            position: absolute;
                            top: -3px;
                            left: -3px;
                            width: 100%;
                            height: 100%;
                            background: #06c988a4;
                            z-index: -1;
                            mix-blend-mode: multiply;
                            transition: all 0.2s;
                            transform-origin: top;
                        }

                        #button-2:after {
                            content: "";
                            position: absolute;
                            top: 3px;
                            left: 3px;
                            width: 100%;
                            height: 100%;
                            background: #ffff00a6;
                            z-index: -1;
                            mix-blend-mode: multiply;
                            transition: all 0.2s;
                            transform-origin: bottom;
                        }

                        #button-2:hover:before {
                            top: -6px;
                            left: 0;
                            transform: perspective(1000px) rotateX(75deg);
                        }

                        #button-2:hover:after {
                            top: 6px;
                            left: 0;
                            transform: perspective(1000px) rotateX(-75deg);
                        }

                        #button-2:hover {
                            color: #000;
                        }
                    </style>

                    <div class="button-2">
                        <a href="#" id="button-2">Button 2</a>
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
                    body {
                        height: 100vh;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-family: sans-serif;
                    }
            
                    a {
                        width: 300px;
                        height: 60px;
                        text-decoration: none;
                        text-transform: uppercase;
                        background: transparent;
                        text-align: center;
                        line-height: 60px;
                        font-weight: bold;
                        letter-spacing: 2px;
                        position: relative;
                        transition: all 0.2s;
                        color: #fff;
                    }
            
                    a:before {
                        content: "";
                        position: absolute;
                        top: -3px;
                        left: -3px;
                        width: 100%;
                        height: 100%;
                        background: #06c988a4;
                        z-index: -1;
                        mix-blend-mode: multiply;
                        transition: all 0.2s;
                        transform-origin: top;
                    }
            
                    a:after {
                        content: "";
                        position: absolute;
                        top: 3px;
                        left: 3px;
                        width: 100%;
                        height: 100%;
                        background: #ffff00a6;
                        z-index: -1;
                        mix-blend-mode: multiply;
                        transition: all 0.2s;
                        transform-origin: bottom;
                    }
            
                    a:hover:before {
                        top: -6px;
                        left: 0;
                        transform: perspective(1000px) rotateX(75deg);
                    }
            
                    a:hover:after {
                        top: 6px;
                        left: 0;
                        transform: perspective(1000px) rotateX(-75deg);
                    }
            
                    a:hover {
                        color: #000;
                    }
                    &lt;/style&gt;
                    &lt;!-- CSS End  --&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    
                    &lt;!-- button html start  --&gt;

                    &lt;body&gt;
                        &lt;a href="#"&gt;;Button 2&lt;/a&gt;
                    &lt;body&gt;

                    &lt;!-- button html start  --&gt;
                &lt;/body&gt;
                &lt;/html&gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="source-code.php">❮ Previous</a>
                <a class="btn btn-dark" href="button2.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include 'footer.php';
            ?>
        </div>

    </div>
</div>
</div>