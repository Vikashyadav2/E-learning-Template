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
                    <a class="btn btn-dark" href="button-3.php">❮ Previous</a>
                    <a class="btn btn-dark" href="image-effect-1.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">BUTTON 5</h2>
                    <!-- EXAMPLES BUTTON START  -->
                    <style>
                        .container-4 {
                            height: 15vh;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: sans-serif;
                            background: #000;
                        }

                        #button-4 {
                            position: absolute;
                            text-decoration: none;
                            text-transform: uppercase;
                            padding: 1rem 4rem;
                            background: #fff;
                            color: #000;
                            border-radius: 100px;
                            font-size: 1.5rem;
                            transition: all 0.2s;
                        }

                        #button-4:before {
                            content: "";
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: #fff;
                            border-radius: 100px;
                            transition: all 1s;
                            z-index: -1;
                        }

                        #button-4:hover:before {
                            transform: scaleX(1.4) scaleY(1.6);
                            opacity: 0;
                        }

                        #button-4:hover {
                            transform: translateY(-3px);
                            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                        }

                        #button-4:active {
                            transform: translateY(-1px);
                            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                        }
                    </style>

                    <section class="container-4">
                        <a href="" id="button-4">Button 5</a>
                    </section>

                    <!-- EXAMPLES BUTTON START  -->


                    <div>
                        <h2 class="fw-bold my-4">SOURCE CODE ...</h2>
                        <button onclick="copyToClipboard('#p1')" class="btn btn-success me-4">Copy</button>
                    </div>
                    <h5 style="background-color:#E7E9EB;  padding-top:20px; border-left: 2px solid black;"
                        class="my-4">
                        <pre id="p1">
                    &lt;!DOCTYPE htm&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;title&gt;Button&lt;/title&gt;
                    &lt;style&gt;
                    * {
                        padding: 0;
                        margin: 0;
                        box-sizing: border-box;
                    }
            
                    .container {
                        height: 100vh;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-family: sans-serif;
                        background: #000;
                    }
            
                    a {
                        position: absolute;
                        text-decoration: none;
                        text-transform: uppercase;
                        padding: 1rem 4rem;
                        background: #fff;
                        color: #000;
                        border-radius: 100px;
                        font-size: 1.5rem;
                        transition: all 0.2s;
                    }
            
                    a:before {
                        content: "";
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: #fff;
                        border-radius: 100px;
                        transition: all 1s;
                        z-index: -1;
                    }
            
                    a:hover:before {
                        transform: scaleX(1.4) scaleY(1.6);
                        opacity: 0;
                    }
            
                    a:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                    }
            
                    a:active {
                        transform: translateY(-1px);
                        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                    }
                    &lt;/style&gt;
                    &lt;!-- CSS End  --&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    
                    &lt;!-- button html start  --&gt;

                    &lt;section class="container"&gt;
                        &lt;a href="#"&gt;;Click Me&lt;/a&gt;
                    &lt;/section&gt;

                    &lt;!-- button html start  --&gt;
                &lt;/body&gt;
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