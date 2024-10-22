


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        .foot{
            margin:4rem;
            margin-bottom:5rem !important;
            margin-top:5rem;
            font-family:Poppins,sans-serif;
            background-color:transparent;

        }
        h4{
            font-weight: bolder;
            
            color:#fffefe;
        }
        a{
            color:#212529;
            text-decoration: none;
        }
        .cards{
            display:flex;
            flex-direction: row;
            margin-top:1rem;
            min-width:min-content;
            gap:1rem;
        }
        .card{
            margin-left:2rem;
            border:none;
            background-color: transparent;
            transition:all ease 0.5s;
            display: none; /* Hide all cards by default */
        }
        .card-icon{
            width:90px;
            height:90px;
        }
        .card-icon .icon{
            cursor: pointer;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            background-color: #141417;
            position:absolute;
            bottom:65%;
            right: 64%;
            padding:10px;
            border: 3px solid #fffefe;
            border-radius: 10px;
            width: 80px;
            max-width: 100%;
            height: 80px;
        }
        .card-info{
            cursor: pointer;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            padding:1rem;
            background-color: transparent;
            border-radius: 10px;
<<<<<<< HEAD
            width:255px;
            height: 220px;
            border:3px solid #2d2c2c;
=======
            width:300px;
            height: 250px;
            border:3px solid #d2b72a;
>>>>>>> d7527bba5c5cbdb121c882b2cfeb68ee51cfa5cd
        }
        .card-button{
            margin-top:2rem;
        }
        .card-button .butt{
            border:3px solid;
            padding: 0.3rem 0.5rem ;
            text-decoration: none;
<<<<<<< HEAD
            font-size: 15px;
            font-weight: 700;
=======
            font-size: 18px;
>>>>>>> d7527bba5c5cbdb121c882b2cfeb68ee51cfa5cd
            border-radius: 15px;
            border-color: #fffefe;
            background-color: #141417;
            box-shadow: none;
            color:#fffefe;
        }
        .card:hover{
            transition:all ease 0.5s;
            scale:110%;
        }
        .card-title{
            padding-top:3rem;
            font-size: 1.6rem;
            font-weight: bold;
            color:#fffefe !important;
        }
        h4{
<<<<<<< HEAD
            color:#fffefe;
=======
            
            font-size: 1.6rem;
            color:white ;
        }
        .card-title{
            color:white ;
>>>>>>> d7527bba5c5cbdb121c882b2cfeb68ee51cfa5cd
        }
        .card-info{
            border-color: white ;
        }
        .icon{
            border-color: #fffefe ;
            background-color: #fbd624 ;
        }
    </style>
</head>
<body>
    <div class="foot">
        <h4>Learn more: </h4>
        <div class="cards">
            <!-- SAMPLE PROGRAMS -->
            <div class="card">
                <div class="card-icon"> 
                    <a href="index.php?page=sampleProg">
                            <img class="icon" src="assets/other/sampProg.png" alt="Programs Icon">
                    </a>
                </div>
                <div class="card-info">
                    <a href="index.php?page=sampleProg">
                        <div class="card-title">Sample Codes</div>
                        <div class="card-button">
                            <a class="butt" href="index.php?page=sampleProg">Go now</a>
                        </div>
                    </a>
                </div>
            </div>
            <!-- DOCUMENTATION -->
            <div class="card">
                <div class="card-icon">
                    <a href="index.php?page=documentation">
                            <img class="icon" src="assets/other/docu.png" alt="Programs Icon">
                    </a>
                </div>
                <div class="card-info">
                    <a href="index.php?page=documentation">
                        <div class="card-title">Documentation</div>
                        <div class="card-button">
                            <a class="butt" href="index.php?page=documentation">Go now</a>
                        </div>
                    </a>
                </div>
            </div>
            <!-- CONCLUSIOn -->
            <div class="card">
                <div class="card-icon">
                    <a href="index.php?page=conclusion">
                            <img class="icon" src="assets/other/Conclusion.png" alt="Programs Icon">
                    </a>
                </div>
                <div class="card-info">
                    <a href="index.php?page=conclusion">
                        <div class="card-title">Conclusion</div>
                        <div class="card-button">
                            <a class="butt" href="index.php?page=conclusion">Go now</a>
                        </div>
                    </a>
                </div>
            </div>
            <!-- REFERENCES -->
            <div class="card">
                <div class="card-icon">
                    <a href="index.php?page=reference">
                            <img class="icon" src="assets/other/res.png" alt="Programs Icon">
                    </a>
                </div>
                <div class="card-info">
                    <a href="index.php?page=reference">
                        <div class="card-title">References</div>
                        <div class="card-button">
                            <a class="butt" href="index.php?page=reference">Go now</a>
                        </div>
                    </a>
                </div>
            </div>
            <!-- PRACTICE -->
            <div class="card">
                <div class="card-icon">
                    <a href="index.php?page=test">
                        <img class="icon" src="assets/other/gear.png" alt="Programs Icon">
                    </a>
                </div>
                <div class="card-info">
                    <a href="index.php?page=test">
                        <div class="card-title">Practice Coding</div>
                        <div class="card-button">
                            <a class="butt" href="index.php?page=test">Go now</a>
                        </div>
                    </a>
                </div>
            </div>
            <!-- DESCRIPTION -->
            <div class="card">
                <div class="card-icon">
                    <a href="index.php?page=description">
                        <img class="icon" src="assets/other/About.png" alt="Programs Icon">
                    </a>
                </div>
                <div class="card-info">
                    <a href="index.php?page=description">
                        <div class="card-title">About</div>
                        <div class="card-button">
                            <a class="butt" href="index.php?page=description">Go now</a>
                        </div>
                    </a>
                </div>
            </div>
            <!-- CREATORS -->
            <div class="card">
                <div class="card-icon">
                    <a href="index.php?page=creators">
                        <img class="icon" src="assets/other/person.png" alt="Programs Icon">
                    </a>
                </div>
                <div class="card-info">
                    <a href="index.php?page=reference">
                        <div class="card-title">Creators</div>
                        <div class="card-button">
                            <a class="butt" href="index.php?page=creator">Go now</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
    const cards = document.querySelectorAll('.card');

    const currentPage = window.location.href;

    function getRandomCards(n) {
        const validCards = [];
        
        // filter out cards that are not related to the page
        cards.forEach((card) => {
            const cardLink = card.querySelector('a').href;
            if (cardLink !== currentPage) {
                validCards.push(card);
            }
        });

        // generates random cards per reload of page, making cards seem like suggestions
        const selectedCards = [];
        while (selectedCards.length < n && validCards.length > 0) {
            const randomIndex = Math.floor(Math.random() * validCards.length);
            const selectedCard = validCards.splice(randomIndex, 1)[0]; 
            selectedCards.push(selectedCard);
        }
        
        return selectedCards;
    }

    // showing of cards fromo none to block
    function showRandomCards() {
        cards.forEach(card => card.style.display = 'none');

        const randomCards = getRandomCards(4);

        randomCards.forEach(card => {
            card.style.display = 'block';
        });
    }

    //runninf of function
    showRandomCards();
</script>

</body>
</html>