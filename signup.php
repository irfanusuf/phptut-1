<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php include('navbar.php'); ?>





  <h1 class="container mt-5"> Registration for Membership </h1>


  <form action="signup1.php" method="post" class="container mt-5 ">


    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username">
      <!-- <span class="error">
        <?php echo "$nameerr" ?>
      </span> -->
    </div>




    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>



    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>





    <button type="submit" class="btn btn-primary mb-5 ">Register </button>


  </form>

  <?php include('footer.php'); ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>