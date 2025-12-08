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
            <a href="cart.php">
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

            <?php 
                include("dbConnect.php");

                $sql = "SELECT cart.id, name, imgURL, quantity, price FROM cart
                        JOIN product ON cart.product_id = product.id;
                ";
                $result = $conn->query($sql);
                
                if(mysqli_num_rows($result) == 0){
                    echo "Cart is empty";
                }
                else{
                    $count = 1;
                    while($row = $result->fetch_assoc()){
                        $name = $row['name'];
                        $imgURL = $row['imgURL'];
                        $quantity = $row['quantity'];
                        $price = $row['price'];
                        echo "
                            <section class=\"cartItemContainer\">
                            <div class=\"itemCount\">
                                <span>".$count."</span>
                            </div>
                            <div class=\"cartItemImg\">
                                <img src=\"".$imgURL."\" alt=\"\">
                            </div>
                            <div class=\"cartItemName\">
                                <span>".$name."</span>
                            </div>
                            <div class=\"quantity\">
                                <button>-</button>
                                <span>".$quantity."</span>
                                <button>+</button>
                            </div>
                            <div class=\"price\">
                                <span>".$price."</span>
                                <span>zł</span>
                            </div>
                            <div class=\"deleteButton\">
                                <button>X</button>
                            </div>
                        </section>
                        ";
                        $count++;
                    }
                }
                
            ?>
        </main>
    </div>
</body>
</html>