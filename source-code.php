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
                    <a class="btn btn-dark" href="index.php">❮ Home</a>
                    <a class="btn btn-dark" href="button-1.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">BUTTON 1</h2>
                    <!-- EXAMPLES BUTTON START  -->
                    <style>
                        .container1 {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            /* height: 100vh; */
                            /* background-color: #000; */
                            font-family: sans-serif;
                        }

                        #button1 {
                            text-decoration: none;
                            color: #fff;
                            border: 1px solid #fff;
                            padding: 2rem 5rem;
                            position: relative;
                            overflow: hidden;
                            transition: all 1s;
                            background-color: #000;

                        }

                        #button1:before {
                            content: "DOWNLOAD";
                            font-weight: 600;
                            color: #000;
                            position: absolute;
                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            background: antiquewhite;
                            transform: translateY(-100%);
                            transition: all 1s;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        #button1:hover:before {
                            transform: translateY(0);
                        }
                    </style>
                    <section class="container1">
                        <a href="#" id="button1">Button 1</a>
                    </section>

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
                            *{
                                margin: 0;
                                padding: 0;
                                box-sizing: border-box;
                            }
                    
                            .container{
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 100vh;
                                background-color: #000;
                                font-family: sans-serif;
                            }
                    
                            a{
                                text-decoration: none;
                                color: #fff;
                                border: 1px solid #fff;
                                padding: 2rem 5rem;
                                position: relative;
                                overflow: hidden;
                                transition: all 1s;
                    
                            }
                    
                            a:before{
                                content: "DOWNLOAD";
                                font-weight: 600;
                                color:#000;
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                background: antiquewhite;
                                transform: translateY(-100%);
                                transition: all 1s;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }
                    
                            a:hover:before{
                                transform: translateY(0);
                            }
                        &lt;/style&gt;
                        &lt;!-- CSS End  --&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        
                        &lt;!-- button html start  --&gt;

                        &lt;section class="container"&gt;
                            &lt;a href="#"&gt;;Button 1&lt;/a&gt;
                        &lt;/section&gt;

                        &lt;!-- button html start  --&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                        </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="index.php">❮ Home</a>
                <a class="btn btn-dark" href="button-1.php">Next ❯</a>
            </div>
            <?php
                include 'footer.php';
            ?>
        </div>
        <!-- footer php  -->
        
    </div>
    
</div>

