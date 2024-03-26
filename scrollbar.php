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
                <h1 class="text-center mt-5">Custom Scrollbar<span class="text-center"> Tutorial</span></h1>
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
        &lt;title&gt;custom scrollbar&lt;/title&gt;
    &lt;style&gt;
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body{
            background: rgb(218, 57, 89);
        }

        .card{
            width: 700px;
            background: #ccc;
            padding: 20px;
            margin: 20px;
            font-family: sans-serif;
            line-height: 28px;
        }

        /* SCROLLBAR CSS START  */

        ::-webkit-scrollbar{
            background-color: transparent;
            width: 20px;
        }

        ::-webkit-scrollbar-thumb{
            background: transparent;
        }         
    &lt;/style&gt;
    &lt;!-- CSS End  --&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;section&gt;
        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class="card"&gt;
            &lt;h2 class="card-title"&gt;Title-1&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum tenetur sit aliquid corrupti eius soluta reiciendis provident
            eaque possimus suscipit. Ipsum, similique itaque accusantium,
            cumque id quasi recusandae quod obcaecati nisi aliquid distinctio
            ipsa unde esse dicta dolorum repellat possimus labore optio error
            impedit placeat beatae tempora consequatur autem? Similique?&lt;/p&gt;
        &lt;/div&gt;
    &lt;/section&gt; 

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