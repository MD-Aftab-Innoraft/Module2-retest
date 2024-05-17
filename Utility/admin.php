<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Innoraft Groceries - Admin</title>
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
        <table id="healthySnacksTable" class="table text-center">
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

        <form class="mt-3" id="addUnhealthyForm" method="post">
          <h3 class="alert alert-danger text-center">Add Unhealthy Snack</h3>
          <div>
            <input type="hidden" id="stid" class="form-control">
            <label class="form-label">Name:</label>
            <input type="text" name="" id="nameid" class="form-control" minlength="1" maxlength="50" required>
          </div>
          <div>
            <label class="form-label">Code:</label>
            <input type="text" name="" id="codeid" class="form-control" required minlength="1" maxlength="50">
          </div>
          <div>
            <label class="form-label">Price:</label>
            <input type="text" name="" id="priceid" class="form-control" minlength="1" maxlength="20" required>
          </div>
          <div>
            <label class="form-label">Quantity:</label>
            <input type="number" name="" id="quantityid" class="form-control" min="1" max="2000" required>
          </div>
          <div class="d-grid">
            <button type="submit" id="btnaddUnhealthy" class="btn btn-primary d-grid mt-3">Submit</button>
          </div>

          <div id="unhealthy-msg" class="alert alert-danger mt-3"></div>
        </form>
      </div>

      <!-- Right Column -->
      <div class="col-sm-6">
        <h3 class="alert alert-success text-center">Add Healthy Snacks</h3>
        <table id="tasksTable" class="table text-center">
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

        <form class="mt-3" id="addHealthyForm" method="post">
          <h3 class="alert alert-success text-center">Add Healthy Snack</h3>
          <div>
            <input type="hidden" id="h-stid" class="form-control">
            <label class="form-label">Name:</label>
            <input type="text" name="" id="h-nameid" class="form-control" minlength="1" maxlength="50" required>
          </div>
          <div>
            <label class="form-label">Code:</label>
            <input type="text" name="" id="h-codeid" class="form-control" required minlength="1" maxlength="50">
          </div>
          <div>
            <label class="form-label">Price:</label>
            <input type="text" name="" id="h-priceid" class="form-control" minlength="1" maxlength="20" required>
          </div>
          <div>
            <label class="form-label">Quantity:</label>
            <input type="number" name="" id="h-quantityid" class="form-control" min="1" max="2000" required>
          </div>
          <div class="d-grid">
            <button type="submit" id="btnaddHealthy" class="btn btn-primary d-grid mt-3">Submit</button>
          </div>

          <div id="healthy-msg" class="alert alert-danger mt-3"></div>
        </form>
      </div>
    </div>
  </div>
  <!-- Linking the script files. -->
  <!-- Bootstrap cdn for bootstrap js. -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- jQuery cdn to use jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- My script file. -->
  <script src="JS/adminAjax.js"></script>
</body>

</html>
