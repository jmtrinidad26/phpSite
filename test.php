<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/editor-styles.css">
    
    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
        h1{
            color: #bb9e01;
            font-weight:1000;
        }
        /* ADJUSTMENTS OF FOOTER */
        h4{
            margin-bottom:6rem !important;
            
        }
        .foot{
            margin:0 !important;
            margin-left:4rem !important;
            margin-top:5rem !important;
            max-width:500px !important;
        }
        .card-icon {
            position:absolute !important;
            bottom:75%;
            right:55%;
            max-width:5px !important;
            max-height:5px !important;
        }
        .card-info{
            max-width:240px;
            max-height:300px;
        }
        .card-title{
            color:#ebd255 !important;
            font-size:large !important;
        }
    </style>

</head>

<body>
    <div class="container mt-4">
        <h1>Practice your JavaScript skills!</h1>
        <div class="editor">
            <div class="editor__wrapper">
                <div class="editor__body">
                    <div class="title">JAVASCRIPT COMPILER</div>
                    <div id="editorCode" class="editor__code"></div>
                </div>
                <div class="editor__footer">
                    <div class="editor__footer--right">
                        
                    <div class="editor__footer--left"> 
                        
                        <div class="title">OUTPUT</div>
                        
                    </div>
                        <div class="editor__console">
                            
                            <ul class="editor__console-logs"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="editor__btns">
                            <button class="editor__btn editor__run">RUN <span class = "arrow"> &nbsp &nbsp &nbsp ></span></button>
                            <button class="editor__btn editor__reset">RESET <span class = "arrow"> &nbsp &nbsp &nbsp></span></button>
        </div>

    </div>
    
   <!-- REQ Ace Libraries -->
    <script src = "test/src-min/ace.js"></script>
    <script src = "test/src-min/mode-javascript.js"></script>
    <script src = "test/src-min/ext-language_tools.js"></script>


    <!-- CUSTOM -->
    <script src="js/editor.js"></script>
    <script src="js/editor-console.js"></script>

   
</body>

</html>