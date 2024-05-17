<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Innoraft Groceries</title>
  <!-- Bootstrap cdn for bootstrap CSS. -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <h1 class="alert alert-info text-center">Innoraft Groceries</h1>
    <div class="row">
      <!-- Left Column -->
      <div class="col-sm-6">
        <h3 class="alert alert-danger text-center">Unhealthy Snacks</h3>
        <!-- Display the Unhealthy Snacks Table-->
        <table id="unhealthySnacksTable" class="table text-center">
          <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody id="unhealthySnacksBody">

          </tbody>
        </table>
      </div>

      <!-- Right Column -->
      <div class="col-sm-6">
        <h3 class="alert alert-success text-center">Healthy Snacks</h3>
        <!-- Display the Healthy Snacks Table-->
        <table id="healthySnacksTable" class="table text-center">
          <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody id="healthySnacksBody">

          </tbody>
        </table>
      </div>
    </div>
    <div id="submitBtn" class="d-flex align-items-center justify-content-center">
      <button class="btn btn-info">Submit</button>
    </div>
    <!-- Form to send order details -->
    <div id="formSpace" class="d-flex align-items-center justify-content-center">
      <form id="submitForm" action="/mail" method="post" class="col-sm-6">
        <div>
          <label class="form-label">Name:</label>
          <input type="text" name="s-name" id="s-name" class="form-control" required minlength="1" maxlength="50">
        </div>
        <div>
          <label class="form-label">Email:</label>
          <input type="email" name="s-email" id="s-email" class="form-control" required maxlength="50">
        </div>
        <div>
          <label class="form-label">Phone:</label>
          <input type="text" name="s-phone" id="s-phone" class="form-control" pattern="[0-9]+" required minlength="10" maxlength="10">
        </div>
        <div>
          <label class="form-label">Total Payable Amount:</label>
          <input style="cursor:not-allowed" name="s-amount" type="number" id="s-amount" class="form-control" required disabled>
        </div>
        <div>
          <div class="d-grid">
            <button type="submit" id="submitOrder" class="btn btn-primary d-grid mt-3">Order</button>
          </div>
      </form>
    </div>

  </div>
  <!-- Linking the script files. -->
  <!-- Bootstrap cdn for bootstrap js. -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- jQuery cdn to use jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- My script file. -->
  <script src="JS/myAjax.js"></script>
</body>

</html>
