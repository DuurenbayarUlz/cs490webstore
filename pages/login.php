<?php
  session_start();
  include("connection.php");

  if(isset($_POST["login"])) {
    if ($_POST["pass_word"] == "" or $_POST["email"] == "") {
      echo "<center><h1>Email and Password cannot be empty</h1></center>";
    } else {
      $email = trim($_POST["email"]);
      $pass_word = strip_tags(trim($_POST["pass_word"]));
      
      $query=$conn->prepare("SELECT * FROM User WHERE email=? and pass_word=?");
      $query->execute(array($email, $pass_word));
      $control=$query->fetch(PDO::FETCH_OBJ);
      if($control > 0) {
        $_SESSION["email"] = $email;
        header("Location: index.php");
      }
      echo "<center><p>Incorrect Password or Email</p></center>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <title>Log in</title>
  </head>
  <body>
    <div id="root">
      <header>
        <div class="header">
          <div class="header-logo"><h2>Webstore</h2></div>
          <div class="header-input">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
          </div>
          <div class="header-navigation">
            <div class="header-navigation-account">
              <img
                src="../images/profile.png"
                alt="heart-icon"
                height="18"
                width="18"
              />
              <p>My account</p>
            </div>
            <div class="header-navigation-wishlist">
              <img
                src="../images/HeartIcon2.png"
                alt="heart-icon"
                height="18"
                width="18"
              />
              <p>Wishlist</p>
            </div>
            <div class="header-navigation-cart">
              <img
                src="../images/shopping-cart.png"
                alt="heart-icon"
                height="18"
                width="18"
              />
              <p>My Cart</p>
            </div>
          </div>
        </div>
      </header>
      <div class="menu">
        <button>Home Goods</button>
        <button>Office Supplies</button>
        <button>Books & Media</button>
        <button>Electronics</button>
        <button>Appliances</button>
        <button>Toys</button>
        <button>Clothing</button>
      </div>
      <div class="catalog">
        <div class="login-section">
          <div class="login-window">
            <div
              class="d-flex flex-column justify-content-center align-items-center mt-4"
            >
              <div style="text-align: center">
                <h3>Login to your account to start shopping</h3>
              </div>

              <div class="icon" style="margin-top: 10px; margin-bottom: 10px">
                <img src="../images/Log-in.png" alt="login" />
              </div>

              <div
                style="display: flex; flex-direction: column; margin-top: 20px"
              >
                <form method="POST">
                  <input
                    type="text"
                    name="email"
                    class="form-control"
                    placeholder="Email"
                  />

                  <input
                    type="text"
                    name="pass_word"
                    class="form-control"
                    placeholder="Password"
                  />
                  <button name="login">Log In</button>
                  <a href="signup.php">Sign up</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="footer-category">
          <h6>Shop by Category</h6>
          <div class="footer-category-line"></div>
          <p>Office Supplies</p>
          <p>Books</p>
          <p>Electronics</p>
          <p>Home Goods</p>
          <a href="about.php">About</a>
        </div>
        <div class="footer-about">
          <h6>About</h6>
          <div class="footer-about-line"></div>
          <p>About Us</p>
          <p>Refill Webcoins</p>
        </div>
        <div class="footer-social">
          <div class="footer-social-logos">
            <div class="footer-social-logo-item">
              <img src="../images/fb.png" alt="fb-icon" />
            </div>
            <div class="footer-social-logo-item">
              <img src="../images/insta-logo.png" alt="insta-icon" />
            </div>
            <div class="footer-social-logo-item">
              <img src="../images/youtube.png" alt="youtube" />
            </div>
            <div class="footer-social-logo-item">
              <img src="../images/twitter.png" alt="twitter" />
            </div>
          </div>
          <div class="footer-social-copyright">
            © 2022 | Web development | Group 2
          </div>
        </div>
      </div>
    </div>
  </body>
</html>