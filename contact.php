<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Mail CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.jpg">

    <title>Contact Us - Pair Working</title>
  </head>
  <body>

<!-- Top Bar -->
<section class="top">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <h2>Pair Working</h2>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <a href="index.php">home</a>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form -->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <h2>contact us</h2>
        <form action="contact-submit.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name*</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            <?php if(isset($_SESSION['error']['name'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['error']['name']; ?>
              </div>
            <?php } unset($_SESSION['error']['name']); ?>

            <?php if(isset($_SESSION['name_err'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['name_err']; ?>
              </div>
            <?php } unset($_SESSION['name_err']); ?>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address*</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email">
            <?php if(isset($_SESSION['error']['email'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['error']['email']; ?>
              </div>
            <?php } unset($_SESSION['error']['email']); ?>

            <?php if(isset($_SESSION['invalid_email'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['invalid_email']; ?>
              </div>
            <?php } unset($_SESSION['invalid_email']); ?>

            <?php if(isset($_SESSION['email_err'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['email_err']; ?>
              </div>
            <?php } unset($_SESSION['email_err']); ?>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject*</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
            <?php if(isset($_SESSION['error']['subject'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['error']['subject']; ?>
              </div>
            <?php } unset($_SESSION['error']['subject']); ?>

            <?php if(isset($_SESSION['subject_err'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['subject_err']; ?>
              </div>
            <?php } unset($_SESSION['subject_err']); ?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" placeholder="Message"></textarea>
            <?php if(isset($_SESSION['error']['message'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['error']['message']; ?>
              </div>
            <?php } unset($_SESSION['error']['message']); ?>

            <?php if(isset($_SESSION['message_err'])){ ?>
              <div class="alert alert-danger mt-2">
                <?= $_SESSION['message_err']; ?>
              </div>
            <?php } unset($_SESSION['message_err']); ?>
          </div>
          <button type="submit" class="btn btn-primary btn-block">SEND MESSAGE 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
            </svg>
          </button>
        </form>

      </div>
      <div class="col-md-4">
        
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="row">
    <div class="col-md-12">
      <p>Copyright © Pair Working. All Rights Reserved.</p>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(isset($_SESSION['success'])){ ?>
      <script type="text/javascript">
        swal({
        title: "Congratulations!",
        text: "Your mail has been sent successfully!",
        icon: "success",
        button: "Okay",
      });
      </script>
    <?php } unset($_SESSION['success']); ?>
  </body>
</html>