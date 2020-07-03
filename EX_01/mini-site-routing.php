<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>mini-site-routing</title>
</head>

<body>
    <h2>NAVIGATION </h2>
    <nav class="menu">
        <li><a href="mini-site-routing.php?page=1">Accueil</a></li><br/>
        <li><a href="mini-site-routing.php?page=2">Page 1</a></li><br/>
        <li><a href="mini-site-routing.php?page=3">Page 2</a></li><br/>
    </nav>

    <?php
    if($_GET["page"]== "1")
    {
        echo "<h1>Accueil !</h1>";
    }
    if($_GET["page"]== "2")
    {
        echo "<h1>Page 2 !</h1>";
    }
    if($_GET["page"]== "3")
    {
        echo "<h1>Page 3 !</h1>";
    }

    ?>
</body>

</html>