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
                    <a class="btn btn-dark" href="button-2.php">❮ Previous</a>
                    <a class="btn btn-dark" href="button-4.php">Next ❯</a>
                </div>

                <div class="mt-5">
                    <h2 class="fw-bold">BUTTON 4</h2>
                    <!-- EXAMPLES BUTTON START  -->
                    <style>
                        .container-5 {
                            /* height: 100vh; */
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-family: sans-serif;
                            /* background: crimson; */
                        }

                        .btn-5 {
                            border: none;
                            padding: 1rem 4rem;
                            background: rgba(17, 17, 137, 0.824);
                            color: #fff;
                            font-size: 22px;
                            text-transform: uppercase;
                            position: relative;
                            cursor: pointer;
                        }

                        .btn-5:before {
                            content: "";
                            position: absolute;
                            width: 24px;
                            height: 24px;
                            top: -10px;
                            left: -10px;
                            /* background: teal; */
                            border-top: 4px solid darkblue;
                            border-left: 4px solid darkblue;
                            transition: all 0.25s;
                        }

                        .btn-5:hover:before,
                        .btn-5:hover:after {
                            height: 100%;
                            width: 100%;
                        }

                        .btn-5:after {
                            content: "";
                            position: absolute;
                            width: 24px;
                            height: 24px;
                            bottom: -10px;
                            right: -10px;
                            border-bottom: 4px solid darkblue;
                            border-right: 4px solid darkblue;
                            transition: all 0.25s;
                        }
                    </style>

                    <section class="container-5">
                        <button class="btn-5">Button 4</button>
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
                        background: crimson;
                    }
            
                    .btn {
                        border: none;
                        padding: 1rem 4rem;
                        background: rgba(17, 17, 137, 0.824);
                        color: #fff;
                        font-size: 22px;
                        text-transform: uppercase;
                        position: relative;
                        cursor: pointer;
                    }
            
                    .btn:before {
                        content: "";
                        position: absolute;
                        width: 24px;
                        height: 24px;
                        top: -10px;
                        left: -10px;
                        /* background: teal; */
                        border-top: 4px solid darkblue;
                        border-left: 4px solid darkblue;
                        transition: all 0.25s;
                    }
            
                    .btn:hover:before,
                    .btn:hover:after {
                        height: 100%;
                        width: 100%;
                    }
            
                    .btn:after {
                        content: "";
                        position: absolute;
                        width: 24px;
                        height: 24px;
                        bottom: -10px;
                        right: -10px;
                        border-bottom: 4px solid darkblue;
                        border-right: 4px solid darkblue;
                        transition: all 0.25s;
                    }
                    &lt;/style&gt;
                    &lt;!-- CSS End  --&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    
                    &lt;!-- button html start  --&gt;

                    &lt;section class="container"&gt;
                    &lt;button class="btn"&gt;Button 5&lt;/button&gt;
                    &lt;/section&gt;

                    &lt;!-- button html start  --&gt;
                &lt;/body&gt;
                &lt;/html&gt;
                    </pre>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between mt-5">
                <a class="btn btn-dark" href="button-2.php">❮ Previous</a>
                <a class="btn btn-dark" href="button-4.php">Next ❯</a>
            </div>
            <!-- footer php  -->
            <?php
            include 'footer.php';
            ?>
        </div>
    </div>
</div>
</div>