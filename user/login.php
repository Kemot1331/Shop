<?php 
    include("dbConnect.php");

    $loginOrMail = trim($_POST['login']);
    $password = trim($_POST["password"]);

    //checking if user exists
    $stmt = $conn->prepare("SELECT id FROM user WHERE login = ? OR mail = ?");
    $stmt->bind_param("ss", $loginOrMail, $loginOrMail);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows == 0){
        
    }
?>
<?php 
    include "includes/header.php";
?>
    <section class="mainContainer">
        <main>
            <form action="" method="post">
                <label for="login">Login or E-mail</label>
                <input type="text" name="login" id="login">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <br>
                <input type="submit" value="Log In">
                <a href="register.html">Click here to register</a>
            </form>
        </main>
    </section>
    <footer></footer>
</body>
</html>