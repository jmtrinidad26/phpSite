<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#f6f2e6;
            height:90vh;
            margin:0;
            
        }
        .home-content{
            display:grid;
            grid-template-columns: 50% 50%;
            column-gap:1rem;
            justify-content: center;
            align-items: center;
        }
        .contentA{
            height:70vh;
            display:flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        .contentB{
            margin-left:5rem;
            margin-top:5rem;
            width:30rem;
            display:flex;
            flex-direction: column;
            justify-content: center;
            background-color:#ebd255;
            
            padding:1rem;
            padding-top:0rem;
            padding-bottom:0rem;
            border-radius:20px;
            

        }
        h1{
            color:#ebd255;
            margin-top:3rem;
            font-weight:700;
            font-size:5rem;
        }
        .title{
            color:#ebd255;
            margin-bottom: 2rem;
        }
        .home-buttons{
            display:flex;
            flex-direction: row;
            justify-content:center;
            align-items: center;

        }
        .button-home {
            margin-right:1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0.5rem;
            height: 42px;
            border: 2px solid transparent;
            text-decoration: none;
            font-weight:900;
            background-color:#ebd255;
            color: #f6f2e6;
            transition: all ease 0.5s;
            border-radius:20px;
            width:10rem;
            
            transition:all ease 500ms;
        }
        .button-home:hover{
            color:#ebd255;
            background-color:#f6f2e6 ;
            border-color: #ebd255;
            transition: all ease 0.5s;
            scale: 103%;
            border:5px solid ;
            text-shadow: none !important;
            transition:all ease 500ms;
            
        }
        .sampProgImg{
            
            opacity: 0.9;
            width:400px;
            max-width: 500px;
            height: 200px;
            border: 1px solid transparent;
            border-radius: 20px;
        }
        .home-text{
            color:#f6f2e6;

        }
        .contentB .home-text{
            width:30rem;
            max-width:100%;
        }
        .home-text .txt{
            color:#f6f2e6;
            font-size: 1.3rem;
            font-weight: bolder;
            align-self:flex-start;
            margin-left:1.5rem;
            margin-top:1rem;
        }
        .refBut{
            margin-top:1.3rem;
            margin-bottom:0rem;
            width:200px;
            max-width:100%;
            align-self: flex-start;
            background-color:#f6f2b6;
            color:#ebd255;
            font-weight:900;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
        }
        .refBut:hover{
            color:#f6f2e6;
            background-color:#ebd255;
            border-color: #f6f2e6;
            transition: all ease 0.5s;
            scale: 103%;
            border:5px solid ;
            
            text-shadow: none;
            transition:all ease 500ms;
            
        }
        .home-text{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .sampProgDiv {
            margin:1rem;
            margin-top:0;
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-bottom: 1rem;
            display:flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="home-content" >
        <div class="contentA">
            <div class="home-text">
                <h1>JavaScript</h1>
                <h4 class = "title">The language that brings web pages to life</h4>
            </div>
            <div class="home-buttons">
                <a class=" button-home nav-link active" href="index.php?page=description">ABOUT</a>
                <a class=" button-home nav-link active" href="index.php?page=reference">REFERENCES</a>
            </div>
        </div>
        <div class="contentB">
            <div class="home-text">
                <h4 class = "txt">JavaScript Examples</h4>
                <div class = "sampProgDiv">
                    <img class = "sampProgImg"src="assets/other/home-image.png" alt="programmingImage" class="sample">
                    <div>
                        <a class="refBut button-home nav-link active" href="index.php?page=sampleProg">LEARN MORE</a>
                    </div>
                </div>
            </div>
    
</body>
</html>