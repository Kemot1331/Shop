<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop - cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2><a href="index.php">MyShop</a></h2>
        <div class="cart">
            <a href="cart.html">
                <span>Koszyk</span>
                <span>(1)</span>
                <span>0 zł</span>
            </a>
        </div>
    </header>
    <div class="mainContainer">
        <main style="display:block;">
            <section class="cartItemContainer">
                <div class="itemCount">
                    <span>1</span>
                </div>
                <div class="cartItemImg">
                    <img src="https://cdn.pixabay.com/photo/2016/04/01/12/00/pencil-1300460_1280.png" alt="ołówek">
                </div>
                <div class="cartItemName">
                    <span>Ołówek</span>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </div>
                <div class="price">
                    <span>1.50</span>
                    <span>zł</span>
                </div>
                <div class="deleteButton">
                    <button>X</button>
                </div>
            </section>
        </main>
    </div>
</body>
</html>