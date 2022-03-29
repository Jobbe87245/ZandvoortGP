<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merch</title>
    <link rel="stylesheet" href="/styles/merch.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<body>
    <style>
        body{
	background-color: #2a2a3f;
	color: white;
	font-family: Arial, Helvetica, sans-serif;
	margin: 0px;
}
/* NAVBAR */
    /* UL */
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #14141e;
        padding: 20px;
        position: sticky;
        top: 0;
    }
    /* UL */

        /* LI */
        li {
            float: right;
            margin-right: 50px;
        }

        #liNaarLinks{
            margin-right: 10%;
        }
        
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 18px;
            text-decoration: none;
            font-size: 25px;
            font-family: "Audiowide", sans-serif;
            opacity: 0.6;
            transition: 0.5s;
            border-radius: 5px;
        }

        li a:hover {
            background-color: rgba(253, 8, 8, 0.432);
            border-radius: 5px;
            box-shadow: 5px 10px 8px #000000;
            opacity: 1
        }
        /* LI */
/* NAVBAR */

/* H1 text */
#merchH1{
    font-family: "Audiowide", sans-serif;
    margin: 10px;
}
/* H1 text */
/* GRID MERCH */
    .gridContainer{
        display: grid;
        padding: 10px;
    }
    .grid-item{
        text-align: center;
        padding: 20px;
        background-color: rgba(255, 0, 0, 0.39);
    }
        /* GRID ITEM */
        .item1{
            grid-column: 1 / span 1;
            grid-row: 1;
            border-radius: 5px;
            margin: 5px;
            box-shadow: 5px 5px 5px #0000008c;
        }
        .item2{
            grid-column: 2 / span 1;
            grid-row: 1;
            border-radius: 5px;
            margin: 5px;
            box-shadow: 5px 5px 5px #0000008c;
        }
        .item3{
            grid-column: 3 / span 1;
            grid-row: 1;
            border-radius: 5px;
            margin: 5px;
            box-shadow: 5px 5px 5px #0000008c;
        }
        .item4{
            grid-column: 1 / span 1;
            grid-row: 2;
            border-radius: 5px;
            margin: 5px;
            box-shadow: 5px 5px 5px #0000008c;
        }
        .item5{
            grid-column: 2 / span 1;
            grid-row: 2;
            border-radius: 5px;
            margin: 5px;
            box-shadow: 5px 5px 5px #0000008c;
        }
        .item6{
            grid-column: 3 / span 1;
            grid-row: 2;
            border-radius: 5px;
            margin: 5px;
            box-shadow: 5px 5px 5px #0000008c;
        }
            /* BUTTON MATEN*/
            #btnSelecteerMaat{
                height: 40px;
                width: 40px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: #fff;
                background-color: #04AA6D;
                border: none;
                border-radius: 15px;
                box-shadow: 0 5px #999;
            }
            #btnSelecteerMaat:hover {
                background-color: #3e8e41
            }
            #btnSelecteerMaat:active {
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            #bestel{
                height: 50px;
                width: 100px;
                cursor: pointer;
                outline: none;
                color: #fff;
                background-color: #04AA6D;
                border: none;
                border-radius: 15px;
                box-shadow: 0 5px #999;
            }
            #bestel:hover{
                background-color: #3e8e41
            }
            #bestel:active{
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }

            /* BUTTON MATEN*/
        /* GRID ITEM */
/* GRID MERCH */
    </style>
    <!-- NAVBAR -->
    <ul>
        <div id="liNaarLinks">
            <img src="https://dutchgp.com/c/ui/dgp/dist/img/dgp-2022.svg" alt="" width="5%" height="5%" style="margin: auto;">
            <li><a href="#merch">Merch</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#ticket">Ticket</a></li>
            <li><a href="#Home">Home</a></li>           
        </div>
      </ul>
    <!-- NAVBAR -->
    <h1 id="merchH1">Welkom op onze<br>
        merch pagina.</h1>
    <h3 id="merchH1">Hier kunt u de nieuwste merchandise vinden.</h3>
        <!-- GRID MERCH -->
        <div class="gridContainer">
            <div class="grid-item item1">
                <img src="https://schulte.xcdn.nl/RM2000,2000/race-polo-portofino-gp2022-oranje/00131028_1.jpg" alt="" id="imgMerchGrid" height="370px" width="250px">
            </div>
            <div class="grid-item item2">
                <img src="https://ih1.redbubble.net/image.2818167777.5085/ssrco,slim_fit_t_shirt,flatlay,101010:01c5ca27c6,front,wide_portrait,750x1000-bg,f8f8f8.jpg" alt="" id="imgMerchGrid" height="370px" width="250px">
            </div>
            <div class="grid-item item3">
                <img src="https://ih1.redbubble.net/image.2278435277.8394/ssrco,slim_fit_t_shirt,flatlay,101010:01c5ca27c6,front,wide_portrait,750x1000-bg,f8f8f8.jpg" alt="" id="imgMerchGrid" height="370px" width="250px">
            </div>
                <!-- SELECTEER MAAT EN BESTEL -->
                <form action="./index_verwerk.php" method="post">
                    <div class="grid-item item4">
                        <h2 id="h2MaatEnBestel">Selecteer hier uw maat:</h2>
                        <p>Prijs: €59,95</p>
                        <button onclick="btnMaat()" name="btnSelecteerMaatGrid1-1" id="btnSelecteerMaat">S</button>
                            <button onclick="btnMaat()" name="btnSelecteerMaatGrid1-2" id="btnSelecteerMaat">L</button>
                        <button onclick="btnMaat()" name="btnSelecteerMaatGrid1-3" id="btnSelecteerMaat">XL</button>
                        <input style="width: 40px;" type="number" name="merchInput1" id="aantalMerch">
                    </div>
                    <div class="grid-item item5">
                        <h2 id="h2MaatEnBestel">Selecteer hier uw maat:</h2>
                        <p>Prijs: €22,95</p>
                        <button onclick="btnMaat()" name="btnSelecteerMaatGrid2-1" id="btnSelecteerMaat">S</button>
                            <button onclick="btnMaat()" name="btnSelecteerMaatGrid2-2" id="btnSelecteerMaat">L</button>
                        <button onclick="btnMaat()" name="btnSelecteerMaatGrid2-3" id="btnSelecteerMaat">XL</button>
                        <input style="width: 40px;" type="number" name="merchInput2" id="aantalMerch">
                    </div>
                    <div class="grid-item item6">
                        <h2 id="h2MaatEnBestel">Selecteer hier uw maat:</h2>
                        <p>Prijs: €19,95</p>
                        <button onclick="btnMaat()" name="btnSelecteerMaatGrid3-1" id="btnSelecteerMaat">S</button>
                            <button onclick="btnMaat()" name="btnSelecteerMaatGrid3-2" id="btnSelecteerMaat">L</button>
                        <button onclick="btnMaat()" name="btnSelecteerMaatGrid3-3" id="btnSelecteerMaat">XL</button>
                        <input style="width: 40px;" type="number" name="merchInput3" id="aantalMerch">
                    </div>
                    <p><input type="submit" name="submit" id="bestel" value="Verstuur formulier"></p>
                    
                </form>
                <!-- SELECTEER MAAT EN BESTEL -->
        </div>
      <!-- GRID MERCH -->
      
      <script src="/scripts/merch.js"></script>
</body>
</html>

