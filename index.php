<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 3</title>
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


    $conn = new mysqli("127.0.0.1","admin","test","baze");

    if ($conn->connect_error) 
    {
        die("Błąd lekko " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $query = "SELECT * FROM users WHERE username='". $conn->real_escape_string($_POST["login"]) ."'AND password='". $conn->real_escape_string($_POST["haslo"]) ."'";

        $result = $conn->query($query);
    
        if ($result->num_rows > 0) 
        {
            echo "<p>Zalogowano</p>";
        } 
        else 
        {
            echo "<p>złe dane logowania</p>";
        }
    }
    ?>
</body>
</html>