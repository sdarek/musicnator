<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sklep - Blitz</title>
    <meta name="description" content="Sklep z produktami Blitz - Chemia Profesjonalna"/>
    <link rel="stylesheet" type="text/css" href="public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="public/css/shop-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/effects.css">
    <script src="public/javascript/menu.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
    <section id="shop">
        <div class="main-container">
            <div class="menu-bar">
                <div class="menu-left">
                    <div class="logo-container" id="shop-logo">
                        <img class="logo" src="public/img/logo.png" alt="Logo">
                        <div class="logo-text">
                            <h1 class="logo-title">BLITZ</h1>
                            <p class="logo-subtitle">CHEMIA PROFESJONALNA</p>
                        </div>
                    </div>
                </div>
                <div class="menu-center">
                    <div class="search-bar">
                        <input type="text" placeholder="Wyszukaj...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="menu-right">
                    <div class="user-cart-icons">
                        <img class="user-icon" src="public/img/user.svg" alt="User Icon">
                        <img class="cart-icon" src="public/img/cart.svg" alt="Cart Icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section id="product-categories">
            <div class="category">
                <h2>Kategorie</h2>
                <ul>
                    <li><a href="#">Środki czystości</a>
                        <ul>
                            <li><a href="#">Detergenty</a></li>
                            <li><a href="#">Środki do dezynfekcji</a></li>
                            <li><a href="#">Płyny do mycia naczyń</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Kosmetyki</a>
                        <ul>
                            <li><a href="#">Kosmetyki do rąk</a></li>
                            <li><a href="#">Kosmetyki do ciała</a></li>
                            <li><a href="#">Perfumy</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Akcesoria</a>
                        <ul>
                            <li><a href="#">Mopy i szczotki</a></li>
                            <li><a href="#">Rękawiczki ochronne</a></li>
                            <li><a href="#">Worki na śmieci</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        
    
        <section id="product-sections">
            <div class="product-section">
                <h2>Promocje</h2>
                <div class="product-carousel">
                    <!-- Przykładowe produkty -->
                    <div class="product">
                        <h3>Nazwa Produktu 1</h3>
                        <p>Opis produktu 1.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 1">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 1</h3>
                        <p>Opis produktu 1.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 1">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 1</h3>
                        <p>Opis produktu 1.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 1">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 2</h3>
                        <p>Opis produktu 2.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 2">
                    </div>
                    <!-- Dodaj więcej produktów w tej sekcji -->
                </div>
                <div class="carousel-arrows">
                    <button class="prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
    
            <div class="product-section">
                <h2>Bestsellery</h2>
                <div class="product-carousel">
                    <!-- Przykładowe produkty -->
                    <div class="product">
                        <h3>Nazwa Produktu 3</h3>
                        <p>Opis produktu 3.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 3">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 3</h3>
                        <p>Opis produktu 3.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 3">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 3</h3>
                        <p>Opis produktu 3.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 3">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 4</h3>
                        <p>Opis produktu 4.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 4">
                    </div>
                    <!-- Dodaj więcej produktów w tej sekcji -->
                </div>
                <div class="carousel-arrows">
                    <button class="prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
    
            <div class="product-section">
                <h2>Nowości</h2>
                <div class="product-carousel">
                    <!-- Przykładowe produkty -->
                    <div class="product">
                        <h3>Nazwa Produktu 5</h3>
                        <p>Opis produktu 5.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 5">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 6</h3>
                        <p>Opis produktu 6.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 6">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 6</h3>
                        <p>Opis produktu 6.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 6">
                    </div>
                    <div class="product">
                        <h3>Nazwa Produktu 6</h3>
                        <p>Opis produktu 6.</p>
                        <img src="public/img/placeholder-image1.jpg" alt="Produkt 6">
                    </div>
                    <!-- Dodaj więcej produktów w tej sekcji -->
                </div>
                <div class="carousel-arrows">
                    <button class="prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </section>
    </main>
    

    <footer>
        <!-- Stopka strony sklepu -->
    </footer>

    <script>
        // Pobranie elementu i dodanie obsługi zdarzenia
        const logoContainer = document.getElementById('shop-logo');

        logoContainer.addEventListener('click', () => {
            document.querySelector('#shop').classList.add('page-leave-active');
            setTimeout(() => {
                window.location.href = 'home';
            }, 300);
        });
    </script>
</body>
</html>
