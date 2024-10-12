<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        
        .navbar{
            padding-top:1rem;
            background-color: #ebd255 !important;
            font-family:'Roboto','sans-serif';
            font-weight: bolder;
        }
        .logo{
            width:132px;
            height:50px;
            margin:0;
            display:flex;
            justify-content: center;
            padding-left:5rem;
            align-items: center;
            margin-right:10px;
        }
        
        .nav-link{
            
            transition: all ease 500ms;
            color: #ffffff;
        }
        
        .nav-link:hover{
            transition: all ease 500ms;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            color: #ffffff;
        }
        .dropdown-toggle {
        color: #ffffff;
        }
        .dropdown-menu{
            border-color:#ebd255;
        }
        .dropdown-item{
            color:#ebd255;
            font-weight:900;
        }
        .dropdown-item:hover{
            color:#ebd255;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <div>
                <img class = "logo "src="https://static.vecteezy.com/system/resources/previews/027/127/463/original/javascript-logo-javascript-icon-transparent-free-png.png" class="me-2" height="40" role="button"
                alt="JavaScript Logo" loading="lazy" onclick="window.location.href='index.php?page=home'">
            </div> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class=" home nav-link " href="index.php?page=home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=description">ABOUT</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=test">PRACTICE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CONTENT
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?page=documentation">DOCUMENTATION</a></li>
                            <li><a class="dropdown-item" href="index.php?page=sampleProg">SAMPLE CODES</a></li>
                            <li><a class="dropdown-item" href="index.php?page=conclusion">CONCLUSION</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="index.php?page=creator">CREATORS</a></li>
                            <li><a class="dropdown-item" href="index.php?page=reference">REFERENCES</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>