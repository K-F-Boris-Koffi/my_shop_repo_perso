<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Shop | Acceuil</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <!-- Icon CDN -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    </head>
    <body>
        </div>
        <header>
            <button id="nav_btn"></button>
            <div id="block1" class=" h-1/2 w-full">
                <h1 class="logo">My <span>Shop</span>.</h1>
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
            <section id="banniere">
                    <img src="images/img2.jpeg" alt="">
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <a href="#">Lorem</a>
                    </div>
            </section>
            <section  id="view">
                <div>
                    <img src="images/img4.jpeg" alt="">
                </div>
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </section>
            <section id="new" class="section_articles">
                <p>Dernière Sortie</p>
                <div class="grid-container">
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                </div>
                <button>Voir Plus</button>
            </section>
            <section id="top" class="section_articles">
                <p>Meilleur Classements</p>
                <div class="grid-container">
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                </div>
                <button>Voir Plus</button>
            </section>
            <section id="solde" class="section_articles">
                <p>Articles En Solde</p>
                <div class="grid-container">
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                    <div class="grid-items"></div>
                </div>
                <button>Voir Plus</button>
            </section>
        </main>
        <footer>

        </footer>


        <script src="script.js"></script>
    </body>
</html>