<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Poppins',sans-serif;
            background-color: #141417;
        }
        .docu-content{
            margin-left:6rem;
            margin-right:6rem;
            margin-bottom:6rem;
        }
        .head{
            position:absolute;
            top:3.5rem;
            right:0;
            left:0;
            width:auto;
            height:15rem;
            background-image: url("assets/docu_pics/pic_6.jpg");
            background-position: 0px -450px;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

        }.text{
            
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8), 4px 4px 6px rgba(0, 0, 0, 0.6);
        }
        .gallery{
            margin-top:19.5rem;
            
            display:grid;
            grid-template-columns: 300px 300px 300px;
            grid-template-rows: 300px 300px 300px;
            grid-row-gap: 50px;
            grid-column-gap: 50px;
            align-content: center;
            justify-content: center;
            align-items: center;
            
        }
        .image{
            width:300px;
            height:300px;
            
            max-width: auto;
            max-height: auto;
            text-align: center;
            align-items: center;
            font-style: italic;
            
            transition: all ease 500ms;
        }
        p{  
            color:#fffefe;
            margin-top:7px;
        }
        img{
            width:300px;
            height:260px;
            
        }
        .image:hover{
            transition: all ease 500ms;
            transform: scale(1.3);
        }
        /* FOOTER */
        .foot{
            margin-top:15rem !important;
        }
    </style>
</head>
<body>
    <div class="docu-content">
        <div class="head">
            <div class="text">
                <h1>Documentation</h1>
                <h2>Gallery</h2>
            </div>
        </div>
        <div class="gallery">
            
        <div class="image">
                <img src="assets/docu_pics/solo_6.jpg" alt="image" />
                <p>"hmm"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/solo_7.jpg" alt="image" />
                <p>"turo."</p>
            </div>
            
            <div class="image">
                <img src="assets/docu_pics/solo_2.jpg" alt="image" />
                <p>"dzulia"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/solo_1.jpg" alt="image" />
                <p>"hala, sarap"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_1.jpg" alt="image" />
                <p>"deeejaayyyyyyyy!"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_2.jpg" alt="image" />
                <p>"silpi"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_3.jpg" alt="image" />
                <p>"silpi w/ 'di kagroup"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_4.jpg" alt="image" />
                <p>"ambaaiiiiit"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_5.jpg" alt="image" />
                <p>"pag tumingin ka, akin ka"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_7.jpg" alt="image" />
                <p>"ge"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_8.jpg" alt="image" />
                <p>"POV ni ser"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/solo_3.jpg" alt="image" />
                <p>"posture check"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/solo_4.jpg" alt="image" />
                <p>"uuuuyyyyyyyy... si Fritz"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/solo_5.jpg" alt="image" />
                <p>"#habamazing"</p>
            </div>
            <div class="image">
                <img src="assets/docu_pics/pic_9.jpg" alt="image" />
                <p>"Certified call center agents"</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include './inc/footer.php'; ?>
</body>
</html>