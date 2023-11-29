<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 2</title>
    <style>
        * {
    padding: 0;
    margin: 0;
    color: #bebebe;
}
html {
    background-color: grey;
}
.form {
    height: 300px;
    width: 400px;
    background-color: #292c35;
    border: 2px black solid;
    margin-left: 700px;
    margin-top: 350px;
    border-radius: 5px;
}
form {
    margin-left: 26%;
    margin-top: 20%;
}
input {
    background: none;
    border: none;
    border-bottom: 2px red solid;
}
button {
    height: 20px;
    width: 170px;
    background-color: grey;
    transition: 0.5s;
}
button:hover {
    transition: 1s;
    background-color: #292c35;
}
p {
    margin-left: 810px;
    position: relative;
    bottom: 100px;
}
    </style>
</head>
<body>
<div class="form">
    <form method="post">
    <label>Proszę podać swój login</label><br>
    <input id="login" type="text" name="login"><br>
    <label>Proszę podać swoje hasło</label><br>
    <input id="haslo" type="password" name="haslo"><br><br>
    <button type="submit">Zaloguj się</button>
    </form>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST["login"] == "admin" && $_POST["haslo"] == "test")
        {
            echo "<p>Udało ci się pomyślnie zalogować na konto</p>";
        }
        else
        {
            echo "<p>Podałeś będne hasło</p>";
        }
    }
    ?>
</body>
</html>