<?php

$contenu=[];
$contenu2=[];
try{
        $pdo = new PDO ("mysql:host=localhost;dbname=my_shop;port=3306" ,"root","07746118");
        $select = "SELECT * FROM products ";
        $categorie ="SELECT * FROM categories";
        $value = $pdo->query($select);
        $value2 =$pdo->query($categorie);
       
        while($rows=$value->fetch()){
            $contenu[]=$rows;
        }
       while($rows2=$value2->fetch()){
          $contenu2[]=$rows2;
        }
        $contenu2;
        $contenu;
    
}
catch(PDOException $Exception){
    echo "<h3>Verifiez </h3>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>E-commerce</title>
    <!-- Lien CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
<header>
            <div id="block1" class="">
                <h1 class="logo">My <span>Shop</span></h1>
                <div id="search_box">
                    <input type="search" name="search" id="search">
                    <button></button>
                </div>
                <div id="login">
                    <div>
                        <button class="inscription">Inscription</button>
                        <button class="connexion bg-blue-700">Connexion</button>
                    </div>
                    <div>
                        <button class="fav"> 
                            <span></span>
                            <p>Favoris</p>
                        </button>
                        <button class="panier">
                            <span></span>
                            <p>Panier</p>                        
                        </button>
                    </div>
                </div>
            </div>
            <div id="block2">
            <button id="nav_btn"></button>
                <nav>
                    <ul id="nav_box" class="nav_btn_active">
                        <li> <a href="#">Electroniques & Accessoire</a></li>
                        <li> <a href="">Beautés & Soins</a></li>
                        <li> <a href="#">Sports & Divertissemnts</a><v/li>
                        <li> <a href="#">Fashon & Mode</a></li>
                        <li> <a href="#">Maison</a></li>
                        <li><a href="#">Bijoux</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Ipsum</a></li>
                    </ul>
                    <ul  class="ul2">
                        <li><a href="#">Nouveautés</a></li>
                        <li><a href="#">Top Articles</a></li>
                        <li><a href="#">Soldes</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    <main>
        <section id="grid-container">
            <div class="grid-items" id="filter">
                <div>
                    <p>FILTER BY</p>
                    <ul>
                        <li>
                            <div>
                                <a href="#">Category</a>
                                <span></span>
                            </div>
                            
                            <ul class="filter_li_box">
                            <?php
                            foreach($contenu2 as $value2){
                            echo '<li>'.$value2['name'].'</li>';
                            }
                            ?>
                            </ul>
                            
                        </li>
                    </ul>
                </div>
                <div>
                    <p>Price Range</p>
                    <div class="box_price_range">
                        <div class="range_container">
                            <div class="sliders_control">
                                <input id="fromSlider" type="range" value="0" min="0" max="10000" />
                                <input id="toSlider" type="range" value="10000" min="0" max="10000" />
                            </div>
                        </div>
                    </div>
                    <div class="box_price">
                        <p class="min">0 FCFA</p>
                        <p class="max">300.000 FCFA+</p>
                    </div>
                </div>
            </div>
             
            <?php 
                    foreach($contenu as $value){
                        
                    echo'<div class="grid-items">
                            <div>'.
                                '<img src="data:image/jpeg;base64, '.base64_encode($value ['image']).' " />'.
                            '</div>
                            <div>
                                <p class="title">'.$value ['name'].'</p>
                                <p class="description">'.$value ['description'].'</p>
                                <div class="star-push">
                                    <div class="star">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="star_off"></span>
                                    </div>
                                    <div class="push">
                                        <button class="fav"></button>
                                        <button class="panier_push"></button>
                                    </div>
                                </div>
                                <div class="price">
                                    <p>'.$value ['price'].' FCFA'.'</p>
                                    <span>25000 FCFA</span>
                                </div>
                            </div>
                        </div>';
                    }
                        
                    ?>
            
        </section>
        <section id="pagination">
            
        </section>
    </main>
    <footer>
            <p>Nous Contacter</p>
            <hr>
            <p>
            <a href="mailto:josue.kouassi@epitech.eu">josue.kouassi@epitech.eu</a> <br>
            <a href="mailto:franck.koffi@epitech.eu">franck.koffi@epitech.eu</a> <br> 
            <a href="mailto:salimata.ouattara@epitech.eu">salimata.ouattara@epitech.eu</a> <br>
            </p>
            <h2>&copy; copyright My Shop 2024, tout droits réserver</h2>
            <h3>MyShop</h3>

        </footer>



    <script src="script.js"></script>
</body>

</html>