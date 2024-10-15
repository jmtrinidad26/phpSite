<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            font-family: "Poppins", sans-serif;
            background-color: #d3b62a;
            color:  #ffffff;
            
        }
        /* NAV ADJUSTMENTS */
        .navbar{
            padding-top:1rem;
            background-color: #f6f2e6 !important;
            font-family:'Roboto','sans-serif';
            font-weight: bolder;
        }

        .nav-link{
            
            color: #bb9e01;
        }.nav-link:hover{
            text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.3) !important;
            color: #bb9e01;
        }

        /* DESCRIPTION */
        p{
            text-align: justify;
            
            line-height: 2;
        }
        .dec-content{
            margin:4rem;
            margin-top:3rem;
            margin-bottom:9rem;
        }
        .video-reference {
            margin-left: 4rem;
            width:31rem;
            font-size: 0.8rem;
            color: white;
            margin-top: 10px;
            font-style: italic;
        }

        .video-reference a {
            color: #524EA5;
            text-decoration: none;
            font-weight: bold;
        }

        .video-reference a:hover {
            text-decoration: underline;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
            background-color: white;
            border-radius:30px;
        }
        
        .theater-container {
            width: 100%;  
            max-width: 75%;
            min-width: 500px;
            background-color: white;
            height: 60vh;
            max-height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            border:25px solid white;
            border-radius:30px;
            margin-left:4rem;
            margin-top:7rem;
           
        }
        .abt{
            max-width:100%;
            display:grid;
            grid-template-columns: 50% 50%;
        }
        .abt-para{
            text-indent: 30px;
            align-self:flex-end;
            text-align: justify;
            margin-bottom:0;
        }
        h1{
            max-width:100%;
            margin-bottom:3rem;
            text-align: right;
            font-size: 2.7rem;
            font-weight: 800;
            color: #ffffff;
        }
        .abt-img{
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .abt-img div {
            text-align: center;
        }
        .abt-content{
            margin-bottom:0;
        }
        p{
            
            margin-bottom:0;
        }
        .redirect{
            color:#524EA5;
            font-weight:bold;
            font-style: italic;
        }
        .para{
            
            text-indent: 30px;
            max-width:100%;
        }
        /* FOOTER ADJUSTMENTS */
        .icon{
            background-color: #d3b62a !important;
            border-color:white !important;
        }
        .big-img{
            margin-bottom:2rem;
        }
        .butt{
            background-color:#d3b62a !important;
            
        }
    </style>
</head>
<body>
    <div class="dec-content">
        
    <
        <div class="abt">
            <div class="big-img">
                <div class="theater-container">
                    <iframe src="https://www.youtube.com/embed/CBWnBi-awSA" 
                        title="JavaScript YT Video" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        alt = "JavaScript YT Video" 
                        allowfullscreen>
                    </iframe>
                    
                </div>
                <p class="video-reference">
                    Smith, J. [TechExplainer]. (2023, April 12). 
                    <em>How to build a website in 5 minutes</em> [Video]. 
                    YouTube. <a href="https://www.youtube.com/watch?v=CBWnBi-awSA" target="_blank">https://www.youtube.com/watch?v=CBWnBi-awSA</a>.
                </p>
            </div>
            <div class="abt-content">
                <h1>Comprehensive Introduction to JavaScript Programming </h1>
                <div class="abt-text">
                    <br />
                    <div class = "abt-para">
                        <p>JavaScript is a flexible, high-level programming language that is commonly used to create interactive elements on websites. Originally developed to bring dynamic behavior to static web pages, JavaScript has expanded far beyond its initial purpose, becoming a robust, general-purpose programming language (Flanagan, 2020). It now plays a critical role in both front-end and back-end development. On the client side, JavaScript is responsible for creating interactive, engaging user experiences within web browsers (Resig & Bear, 2018). On the server side, platforms like Node.js allow JavaScript to handle backend tasks, including managing databases, building APIs, and supporting real-time applications (Tilkov & Vinoski, 2010). This transformation has solidified JavaScript's position as a key tool in full-stack development, enabling the creation of fast, scalable, and highly interactive web and server applications across various industries. </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="para">
            <p>In addition to its widespread use in web development, JavaScript has found its place in a variety of other domains, showcasing its flexibility and adaptability. It is now a key language for mobile app development, with frameworks like React Native enabling the creation of cross-platform mobile applications for iOS and Android using JavaScript (Facebook, 2015). Moreover, JavaScript is used in desktop application development with tools like Electron, allowing developers to build desktop apps that run on multiple operating systems (GitHub, 2019). Even in fields like game development, JavaScript is utilized for creating browser-based games and interactive experiences (Lazarov, 2021). Its growing ecosystem of libraries, frameworks, and tools has allowed it to transcend its original web-based roots, making it a go-to language for developers across a broad spectrum of projects. </p>
             <br>
            <p>JavaScript's role in the development world extends well beyond its use as a programming language; it has significantly shaped the methodologies and workflows employed by developers (Johnson, 2022). Frameworks such as React, Angular, and Vue.js encourage a component-based architecture, where UIs are broken down into reusable, independent components. This approach promotes cleaner, modular code, making it easier to maintain and scale over time (Haverbeke, 2018). By dividing complex interfaces into smaller, manageable parts, development becomes more efficient, and the codebase is more structured. </p>
            <br>
            <p>In addition to these architectural improvements, JavaScript has driven innovations in development tools. Build tools like Webpack, Babel, and Gulp have simplified tasks such as bundling code, transpiling newer JavaScript features, and optimizing assets for production environments (Michaels, 2020). Tools like npm and Yarn make it easier for developers to manage and update third-party libraries and frameworks automatically. This saves time, reduces repetitive tasks, and speeds up the development process (Lee, 2019). </p>
            <br>
            <p>As a result, JavaScript has transformed from a simple client-side scripting language into a fundamental part of a robust development ecosystem. It enables the development of complex, large-scale applications that are not only responsive but also easy to maintain and adapt as business requirements change (W3Techs, 2023). With its extensive ecosystem of powerful tools and best practices, JavaScript has changed the way software is created and maintained, solidifying its importance in today's development landscape. </p>
            <br><br>
        </div>
       
        <a class="redirect" href="index.php?page=reference">See References here.</a>
        
    </div>
</body>

<?php include './inc/footer.php'; ?>
</html>