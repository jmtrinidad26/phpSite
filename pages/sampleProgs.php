<!-- FOR EASE OF LOOPING -->
<?php require 'inc/snippets.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            
            background-color:#141417;
            color:#fffefe ;
        }
        .samp{
            display: flex;
            flex-direction: column;
            margin-left:20rem;
            margin-right:4rem;
        }
        /* VERT NAV */
        h3 {
            font-size: 18px;
<<<<<<< HEAD
            font-weight: bolder;
            color: #fffefe;
            margin-bottom: 1rem;
=======
            font-weight:bolder;
            color:#bb9e01;
            margin-bottom:1rem;
            cursor:pointer;
>>>>>>> d7527bba5c5cbdb121c882b2cfeb68ee51cfa5cd
        }

        .vertical-nav {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
<<<<<<< HEAD
            width: 200px;
            background-color: #141417 !important;
=======
            width: 15%;
            background-color: white !important;
>>>>>>> d7527bba5c5cbdb121c882b2cfeb68ee51cfa5cd
            overflow-y: auto;
            padding: 20px;
            padding-bottom:40px;
            border-right:1px solid #e7d675;
        }
        .vertical-nav::-webkit-scrollbar {
            width: 8px;
        }

        .vertical-nav::-webkit-scrollbar-track {
            background-color: #141417;
        }

        .vertical-nav::-webkit-scrollbar-thumb {
            background-color: #2d2c2c;
            border-radius: 5px;
        }
        .vertical-nav {
            scrollbar-width: thin;
            scrollbar-color: #2d2c2c #141417; 
        }

        .vertical-nav a {
            margin-bottom: 1rem;
            padding: 10px 15px;
            color: #fffefe;
            padding-left: 2rem;
            display: block;
            text-decoration: none;
            border-radius: 5px;
        }

        .vertical-nav a:hover {
<<<<<<< HEAD
            background-color: #2d2c2c;
        }

        .vertical-nav a.active {
            background-color: #2d2c2c;
=======
            background-color: #e7d675;
        }

        .vertical-nav a.active {
            background-color: #e7d675;
>>>>>>> d7527bba5c5cbdb121c882b2cfeb68ee51cfa5cd
        }

        .container .mt-4 {
            margin: none !important;
        }

        
        /* Sample Progs */
        .cont{
            margin-top: 6rem;
        }
        .intro-content{
            margin-bottom: 15rem;
            text-align:left;
        }
        .pImg{
            margin-left: 2rem;
        }
        .prog-content{
            margin:1rem;
        }
        .exContent{
            margin-bottom: 10rem;
        }
        .h1Title{
            font-weight: bolder;
        }
        .codeTitle{
            color:#fffefe;
            margin-bottom: 2rem;
        }
        .codeContentA{
            margin-bottom: 4rem;
        }
        .codeContentB {
            margin-bottom: 6rem;
        }
        .sampName{
            font-size: 2rem;
            margin-bottom:5rem;
        }
        .in,.out{
            border-radius: 15px;
        }
        .exP{
            margin-left: 2rem;
            font-style: italic;
            font-weight: 400;
            text-align: left;
            color:#e7d675;
        }
        .redirect{
            color:blue;
            font-weight:bold;
        }
        .codeContent{
            margin-left:3rem;
        }
        .active{
            color:#bb9e01;
        }
    </style>
</head>
<body>
    <div class="samp">
        <div class = "vNav">
            <div class="vertical-nav">
                <br /><br /><br />
                <h3 onclick = "scrollToTop()">JavaScript Snips</h3>
                <?php
                    $index = 0;
                    foreach ($snippets as $index => $snippet) {
                        $activeClass = $index === 0 ? 'class="active"' : '';
                        echo "<a href='#snip{$index}' $activeClass>{$snippet->title}</a>";
                    }
                ?>
            </div>
        </div>
        <div class="cont">
            <div class="intro-content">
                <h1 class = "h1Ttitle">JavaScript Code Examples</h1>
                <p class = "pIntro">These are JavaScript Examples for you to try. Feel free to try them here!
                <a class="redirect" href="index.php?page=test">Practice Area</a></p>
            </div>
            <div class="prog-content">
                <?php
                    $index = 0;
                    $x = 1;
                    foreach ($snippets as $snippet) {
                        echo "<div id='snip{$index}'>";
                            echo "<h2 class = 'sampName'>{$x}. {$snippet->title}</h2>"; //sampName
                            echo "<div class = 'codeContent'>";
                                echo "<div class = 'codeContentA'>"; //inputContent
                                    echo "<h3 class = 'codeTitle'>Input:</h3>"; //codeTitle
                                    echo "<p class = 'pImg'><img class = 'in'src='{$snippet->inputImage}' alt='Input Image for {$snippet->title}'></p>"; //in
                                echo "</div>";
                                echo "<div class = 'codeContentB'>"; //codeContentB
                                    echo "<h3 class = 'codeTitle'>Output:</h3>"; //codeTitle
                                    echo "<p class = 'pImg'><img class = 'out' src='{$snippet->outputImage}' alt='Output Image for {$snippet->title}'></p>"; //out
                                        echo " <p class = 'exP'>{$snippet->explanation}</p>"; //exP
                                echo "</div>";
                            echo '</div>';
                        echo "</div>";
                        $index++;
                        $x++;
                    }
                ?>
            </div>
        </div>
    </div>

</body>
<script>
    const links = document.querySelectorAll('.vertical-nav a');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            const scrollOffset = 100;

            window.scrollTo({
                top: targetElement.offsetTop - scrollOffset,
                behavior: 'smooth'
            });

            links.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
    function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
</script>
</html>