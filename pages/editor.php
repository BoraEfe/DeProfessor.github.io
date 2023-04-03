<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="../menuToggle.js"></script>
</head>

<body>
    <div class="header-content">
        <div class="header-li">
            <ul>
                <li>Editor</li>
            </ul>
        </div>
    </div>

    <div class="editor-box">
        <form name="editor" action="inlog2.php" method="post">
            <p>voer productnaam in <input type="text" id="name" name="productname"></p>
            <p>voer productinfo in <input type="text" id="password" name="productinfo"></p>
            <p>voer prijs in <input type="float" id="password" name="prijs"></p>
            <p>voer image in <input type="varchar" id="password" name="image"></p>
            <p><input type="submit" id="verzend" name="verstuur" value="verzend"></p>
        </form>
    </div>
</body>

</html>