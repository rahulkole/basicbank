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

</head>

<body>
  <!----NAVBAR------->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar sticky-top" style="height: 85px" s>
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
    <h2>Transaction History</h2>

    <br>
    <div>
      <table class="table table-hover table-striped table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th> Transferred Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'config.php';


          $sql = "select * from transaction";

          $query = mysqli_query($conn, $sql);

          while ($rows = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $rows['id']; ?></td>
              <td><?php echo $rows['sender']; ?></td>
              <td><?php echo $rows['receiver']; ?></td>
              <td><?php echo $rows['credits']; ?> </td>

            <?php
          }

            ?>
        </tbody>
      </table>

    </div>
  </div>


  <!-----FOOTER-->
  <div class="footer" style="             
        
        background-color: #212529;
        color: white;
        font-family: Cambria, Cochin, Georgia, Times, serif;
      ">
    <p>© ANUSHKA KOKATE</p>
  </div>
</body>

</html>