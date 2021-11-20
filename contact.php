<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>A New Chapter</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <script src="https://kit.fontawesome.com/2e5e6705c4.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <!--  <script> 
    $(function(){
      $(".header").load("navigation.html"); 
    });
    </script> -->
  </head>
  <body id="contactpage" class="d-flex flex-column min-vh-100">
    <!-- <div class="header"></div> -->
    <div class="header">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.html">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>    
    <div class="mobileHeader">
      <nav role="navigation">
        <div id="mobileMenuToggle">
          <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
              <li><a href="home.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
      </nav>
    </div>
    <div id="contactPage">
      <div class="container pb-2">
        <h1>Let's Connect</h1>
        <p class="mt-3">Want to get in touch with me in regards to a project? Go ahead and fill out this contact form and I will get back with you as soon as I can!</p>
        <div id="contactForm">
          <form action="ContactLogic.php" method="post">
            <div class="row mb-3 mt-4">
              <div class="col">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name" required>
              </div>
              <div class="col">
                <label for="emailInput" class="form-label">Email address</label>
                <input type="email" name="mail" class="form-control" id="emailInput" placeholder="name@example.com" required>
              </div>
            </div>
            <div class="row">
              <div class="my-3">
                <label for="messageInput" class="form-label">Message</label>
                <textarea name="message" class="form-control pb-4" id="messageInput" rows="3" placeholder="Type message here" required></textarea>
              </div>
            </div>
              <button type="submit" name="submit" class="btn btn-primary px-3 py-2 mt-3" id="submitBTN">Submit</button>
          </form>
        </div>
        <div id="contactFormMobile">
          <form action="ContactLogic.php" method="post">
              <div class="row">
                <div class="my-3">
                  <label for="nameInput" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name" required>
                </div>
              </div>
              <div class="row">
                <div class="my-3">
                  <label for="emailInput" class="form-label">Email address</label>
                  <input type="email" name="mail" class="form-control" id="emailInput" placeholder="name@example.com" required>
                </div>
              </div>
            <div class="row">
              <div class="my-3">
                <label for="messageInput" class="form-label">Message</label>
                <textarea name="message" class="form-control pb-4" id="messageInput" rows="3" placeholder="Type message here" required></textarea>
              </div>
            </div>
              <button type="submit" name="submit" class="btn btn-primary px-3 py-2 mt-3" id="submitBTN">Submit</button>
          </form>
        </div>
    </div>
  </div>


    <footer class="footer mt-auto py-2 bg-dark">
  <div class="col-md-11 justify-content-end" id="footer">
    <span class="text-muted ml-auto">Social Media:</span>
    <a href="https://www.linkedin.com/in/andrew-simpson-93592180/"><i class="fab fa-linkedin fa-2x" style="color: #0982c0"></i></a>
  </div>
</footer>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
