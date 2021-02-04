<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Basic Banking System</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
  <?php
  require 'config.php';
  $query = "SELECT * FROM users";
  $result = mysqli_query($conn, $query);
  ?>
  <!----NAVBAR------->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar sticky-top" style="height: 85px">
    <div class="container-fluid">
      <a class="navbar-brand">
        <p class="logo-text">
          <img src="bank-logo.jpg" alt="LOGO" width="15%" height="15%" />
          Bank System
        </p>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewusers.php">Customer Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transactionDetails.php">Transaction History</a>
          </li>
  </nav>



  <div class="container">
    <h2>Customer Details</h2>
    <br>
    <div class="row">
      <div class="col">
        <div>
          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Customer Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email Id</th>
                <th scope="col">Account Balance</th>
                <th scope="col">Operation</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $rows['id'] ?></td>
                  <td><?php echo $rows['name'] ?></td>
                  <td><?php echo $rows['email'] ?></td>
                  <td><?php echo $rows['credits'] ?></td>
                  <td><a href="selectedUserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="button2">Transfer</button></a></td>
                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  </div>




  <!-----FOOTER-->
  <div class="footer" style="
      
        background-color: #212529;
        color: white;
        text-align: right;
        font-family: Cambria, Cochin, Georgia, Times, serif;
      ">
    <p>© ANUSHKA KOKATE</p>
  </div>
</body>

</html>