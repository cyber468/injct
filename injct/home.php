<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","newuser","password","aeh");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>localhost</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
   body {
  background-color: #006d5b;
  color: white;
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.container {
  margin: 0 auto;
  padding: 0;
}
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: black;
  color: white;
  padding: 1rem;
}

.site-title {
  font-size: 50px;
  font-weight: bold;
  }

.navbar {
  display: flex;
}

.navbar ul {
  list-style: none;
  display: flex;
  margin: 0;
  padding: 0;
}

.navbar li {
  margin: 0 1rem;
}

.navbar a {
  display: block;
  padding: 1rem;
  text-decoration: none;
  color: white;
  transition: all 0.2s ease;
  font-size:30px;
  font-weight:bold;
}

.navbar a:hover {
  background-color: transparent;
  color: white;
  border-radius: 3px;
}


form {
  display: flex;
  flex-direction: column;
  max-width: 400px;
  margin: 0 auto;
  padding: 2rem;
  background-color: black;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  border-radius: 5px;
}

input {
  margin-bottom: 1rem;
  padding: 0.5rem;
  border: 3px solid black;
  border-radius: 7px;
  font-size: 1rem;
  background-color: white;
  color: black;
}

label {
  margin-bottom: 0.5rem;
  font-size: 17px;
  font-weight:normal ;
  margin-right: 150px;
  color: white;
}

input[type="submit"] {
  background-color: black;
  color: white;
  padding: 0.5rem;
  border: none;
  border-radius: 3px;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.2s ease;
}

input[type="submit"]:hover {
  background-color: #eee;
  color: black;
}

  </style>
</head>
<body>
 <header>
    <h1 class="site-title">I N J E C T O</h1>
    <nav class="navbar">
      <ul>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
    ?>
    <div>
      <h1>Welcome , <?php echo $_SESSION['username']; ?></h1>
      
      <h2> <?php echo $_SESSION['password']; ?></h2>
    </div>
    </div>
</body>
</html>

