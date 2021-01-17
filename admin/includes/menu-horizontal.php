<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="./menu-horizontal.css">
  <title>CSS Dropdown Menu</title>
</head>
<body>
  <nav id="navbar">
    <div style="background-color: black">
    <ul>
      <li><a style="color:white" href="dashboard.php"><i style="color: white" class="fas fa-asterisk" aria-hidden="true"></i>
     Panel Central</a>
      </li>
      <li><a href="#">About</a></li>
      <li><i class="fa fa-list" aria-hidden="true"></i>
        Categorías <i class="fas fa-angle-down"></i>
        <ul>
          <?php if($_SESSION['Type_Id']==1) { ?>
            <li><a href="add-category.php">Añadir categoría</a></li>
          <?php } ?>
          <li><a href="#">Website Design</a></li>
          <li><a href="#">Mobile Development</a></li>
          <li><a href="#">SEO</a></li>
        </ul>
      </li>
      <li>Blog <i class="fas fa-angle-down"></i>
        <ul>
          <li><a href="#">HTML</a> <span>22 Posts</span></li>
          <li><a href="#">CSS</a> <span>16 Posts</span></li>
          <li><a href="#">JavaScript</a> <span>10 Posts</span></li>
          <li><a href="#">Python</a> <span>13 Posts</span></li>
          <li><a href="#">PHP</a> <span>10 Posts</span></li>
          <li><a href="#">Design</a> <span>21 Posts</span></li>
        </ul>
      </li>
      <li><a href="#">Contact</a></li>
    </ul>
    </div>
  </nav>

</body>
</html>
