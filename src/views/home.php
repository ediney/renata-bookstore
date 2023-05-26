<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renata Bookstore - A sua livraria perto de você</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"><i class="fas fa-book"> bookstore </i></a>
            <form action="" class="search-form">
                <input type="search" name="" placeholder="Faça sua pesquisa..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>
            
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>                
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#featured">Featured</a>
                <a href="#arrivals">Arrivals</a>
                <a href="#reviews">Reviews</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- custom js file link -->
    <script src="./src/js/scripts.js"></script>    
</body>
</html>