<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="description" content="Introduction to this guy's website">
    <title>This goes into the titlebar</title>
    <link rel="css/style.css" type="text/css"/>
    <script type="text/javascript" src="js/main.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no"/><!-- Disable zoom on smartphone -->
  </head>
  <body>
    <header>
      Your shop name goes here
    </header>
    <nav>
      Navigation links go here
    </nav>
    <section>
      <ul>
  <?php
 
    $conn = new mysqli("localhost", "root", "", "lab");
    if($conn){echo 'true';}
    $results = $conn->query(
      "SELECT id,name,price FROM my_shop;");
 
    while ($row = $results->fetch_assoc()) {
      ?>
        <li>
          <a href="description.php?id=<?=$row['id']?>">
            <?=$row["name"]?></a>
            <?=$row["price"]?>EUR
        </li>
      <?php
    }
 
    $conn->close();
 
  ?>
</ul>
    </section>
    <article>
      The actual content goes here
      <?php echo "This, is hellõu from PHP!"; ?>
    </article>
    <aside>
      Context specific links go here
    </aside>
    <footer>
      Footer goes here
    </footer>
  </body>
  localhost.root
 
</html>