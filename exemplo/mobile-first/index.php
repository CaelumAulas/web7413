<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="mobile.css">
</head>
<body>
    <?php include "include/header.php" ?>

    <style>
        
        ol li:nth-child(n+7){
            display:none;
        }

        ol li.mostra:nth-child(n+7) {
            display: list-item;
            color: red;
        }

    </style>

    <ol>        
        <li> Item 1</li>
        <li> Item 2</li>
        <li> Item 3</li>
        <li> Item 4</li>
        <li> Item 5</li>
        <li> Item 6</li>
        <li> Item 7</li>
        <li> Item 8</li>
        <li> Item 9</li>
        <li> Item 10</li>
        <li> Item 11</li>
        <li> Item 12</li>
        <button>+</button>
    </ol>
    <script src="scripts/jquery.js"></script>
    <script>
        var $button = $("button")

        $button.click(function() {
            $("ol li:nth-child(n+7)").addClass("mostra")
            $button.remove()
        })

    </script>
    
</body>
</html>