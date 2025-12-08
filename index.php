<?php 
    include "includes/header.php";
?>
    <section class="mainContainer">
        <main>
            <?php 
                include("dbConnect.php");

                $sql = "SELECT name, imgURL, price, stock FROM product";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $name = htmlspecialchars($row['name']);
                    $price = number_format($row['price'], 2, '.', '');
		    $imgURL = htmlspecialchars($row['imgURL']);
		    $stock = htmlspecialchars($row['stock']);
                    echo "
                        <div class=\"item\">
                            <div class=\"name\">
                                <span>{$name}</span>
                            </div>
                            <div class=\"img\">
                                <img src=\"{$imgURL}\" alt=\"{$name}\">
                            </div>
                            <div class=\"price\">
                                <span>Price: </span>
                                <span>{$price}</span>
                                <span>zł</span>
                            </div>
                            <div class=\"stock\">
                                <span>On stock: </span>
                                <span>{$stock}</stock>
                            </div>
                            <div class=\"addButton\">
                                <button>Add to cart</button>
                            </div>
                        </div>
                    ";
                }
            ?>
            <div class="item">
                <div class="name">
                    <span>Ołówek</span>
                </div>
                <div class="img">
                    <img src="https://cdn.pixabay.com/photo/2016/04/01/12/00/pencil-1300460_1280.png" alt="ołówek">
                </div>
                <div class="price">
                    <span>Price: </span>
                    <span>1.50</span>
                    <span>zł</span>
                </div>
                <div class="addButton">
                    <button>Add to cart</button>
                </div>
            </div>
        </main>
    </section>
    <footer></footer>
</body>
</html>
