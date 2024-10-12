<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- image slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Updock&display=swap" rel="stylesheet">
    <style>
        /* SWIPE */
        .swiper {
            position:absolute;
            left:-4rem;

            overflow: hidden;
            width: 80.2rem;
            height: 37.3rem;
            margin:6rem;
            margin-top:0;
            margin-bottom:0;
            background-color:white;
            border-radius:30px;
        }
        .slider-wrapper{
            transition: transform 0.8s ease;
        }
        .swiper-slide{
            transition: opacity 0.4s ease;
        }
        .swiper-button-prev,.swiper-button-next{
            color: black;
        }
        /* FONT */
        .updock-regular {
            font-family: "Updock", cursive;
            font-weight: 400;
            font-style: normal;
        }
        /* MAIN */
        .profile{
            margin-left: 5rem;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            border-radius:100%;
            width:30rem;
            height:30rem;
            
            box-shadow: 0px 0px 9px rgba(0, 0, 0);
        }
        .creator{
            display:flex;
            grid-template-columns: 50% 50%;
            column-gap:5rem;
            margin:1rem;
        }
        .creatorText{
            margin-right: 5rem;
            margin-left: 5rem;
            display:flex;
            flex-direction: column;
            justify-content:center;
            text-align: center;
            
        }
        .rTitle{
            font-size: 1.3rem;
            font-weight: bolder;
        }
        .name{
            font-size: 3rem;
        }
        .quote{
            margin-top:1rem;
            font-family: sans-serif;
            font-size: 1.5rem;
            font-style: italic;
            font-weight:300;
        }
        blockquote {
            font-size: 28px;
            line-height: 1.6;
            color: #333;
            position: relative;
            margin: 0;
        }

        blockquote:before {
            content: open-quote;
            font-size: 50px;
            color: black;
            position: absolute;
            left: -10px;
            top: -20px;
        }
        .quote {
            font-size: 22px;
            color: #555;
            margin-bottom: 30px;
            font-style: italic;
        }
        .small{
            margin-left:8rem;
        }
    </style>
</head>
<body>
        <div class="swiper">
            
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="creator">
                        <img class = "profile"src="assets/creator-image/pogi.png" alt="mico">
                        <div class="creatorText">
                            <h2 class = "rTitle">DOCUMENTATION</h2>
                            <h2 class = "name">Mico Jhay Flores</h2>
                            <p class = "course">Computer Science</p>
                            <div class="quote"><blockquote>Wala lang, pogi lang</blockquote> </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="creator">
                            <img class = "profile"src="assets/creator-image/lope.png" alt="mico">
                                <div class="creatorText">
                                <h2 class = "rTitle">DOCUMENTATION</h2>
                                <h2 class = "name">Jester G. Lope</h2>
                                <p class = "course">Computer Science</p>
                                <div class="quote"><blockquote>99% of gamblers quit before they win big</blockquote> </div>
                                    
                            </div>

                        </div>
                </div>
                <div class="swiper-slide">
                    <div class="creator">
                            <img class = "profile"src="assets/creator-image/banua.png" alt="mico">
                                <div class="creatorText">
                                <h2 class = "rTitle">DOCUMENTATION</h2>
                                <h2 class = "name">Keane Banua</h2>
                                <p class = "course">Computer Science</p>
                                <div class="quote"><blockquote>Whenever you’re making a hard choice, flip a coin. And when it’s in the air, you’ll know which side you’re hoping for.</blockquote> </div>
                                    
                            </div>

                        </div>
                </div>
                <div class="swiper-slide">
                    <div class="creator">
                            <img class = "profile"src="assets/creator-image/julia.png" alt="mico">
                                <div class="creatorText">
                                <h2 class = "rTitle">UI Design</h2>
                                <h2 class = "name">Julia Bacli</h2>
                                <p class = "course">Computer Science</p>
                                <div class="quote"><blockquote>Have #HABAmazing Possibilities with Sunsilk!</blockquote> </div>
                                    `
                            </div>

                        </div>
                </div>
                <div class="swiper-slide">
                    <div class="creator">
                            <img class = "profile"src="assets/creator-image/yoshi.png" alt="mico">
                                <div class="creatorText">
                                <h2 class = "rTitle">User Design</h2>
                                <h2 class = "name">Yoshi Dela Cerna</h2>
                                <p class = "course">Computer Science</p><br >
                                <div class="quote"><blockquote>我是中国人</blockquote> </div>
                                    
                            </div>

                        </div>
                </div>
                <div class="swiper-slide">
                    <div class="creator ">
                            <img class = "profile"src="assets/creator-image/jm.png" alt="mico">
                                <div class="creatorText small">
                                    <h2 class = "rTitle">DEVELOPMENT</h2>
                                    <h2 class = "name">JM Trinidad</h2>
                                    <p class = "course">Computer Science</p>
                                    <div class="quote"><blockquote>If it works, it works.</blockquote> </div>
                                    
                            </div>

                        </div>
                </div>
                
                
            
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            
            <div class="swiper-scrollbar"></div>
        </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
  autoplay: {
            delay:3000, // Delay between transitions (in milliseconds)
            disableOnInteraction: false, // Continue autoplay after user interaction
        },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  effect: 'slide', 
  keyboard: {
    enabled: true, 
    onlyInViewport: false, 
  },
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>
</html>