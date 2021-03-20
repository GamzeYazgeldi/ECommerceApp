<?php
    if(
        $_SERVER["REQUEST_METHOD"] === "POST"
        && !empty($_POST["username"])
        && !empty($_POST["password"])
        && $_POST["username"]==="gamze"
        && $_POST["password"]==="asd"
    )
    {
        $_SESSION["isLogged"]=true;
        $_SESSION["user"]=[
            "id"=>1,
            "name"=>"gamze",
            "lastname"=>"yazgeldi"
        ];
        // For redirection: //
        header("Location:/");
    }
    else {
        echo '<script> alert("Invalid Username and Password") </script>';
    }
?>

<form action="index.php" method="post">
    <input type="text" name="username" placeholder="namesurname@gmail.com" /> <br />
    <input type="password" name="password" placeholder="*******" /> <br/>
    <input type="submit" value="Sign In" />

</form>


