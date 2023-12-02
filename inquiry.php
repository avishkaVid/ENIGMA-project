<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inquiry Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <div class="container-fluid bg-dark text-light py-3">
        <header class="text-center">
             <h1 class="display-6">Inquiry Menu</h1>
        </header>
    </div>

    <section class="container my-3 p-2 w-50">

    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputFname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname">
  </div>
  <div class="col-md-6">
    <label for="inputLname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname">
  </div>
  <div class="col-10">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="text-area" class="form-control" id="email" placeholder="Enter Valid email">
  </div>

  <div class="col-md-6">
    <label for="inquiry" class="form-label">Place your inquiry here</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

    </section>

  </body>
</html>