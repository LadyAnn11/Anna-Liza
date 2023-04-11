<?php require_once 'includes/header.php' ?>
    <h1 class="text-center"> Registration For IT Conference</h1>


    <form method="get" action="success.php">
  <div class="form-group">
    <label for="firstname">First name</label>
    <input required type="firstname" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last name</label>
    <input required type="lastname" class="form-control" id="lastname" name="lastname" >
  </div>

<div class="form-group">
<label for="birthday">Date of Birth:</label>
<input required type="datepicker" class="form-control" id="datepicker" name="datepicker">
</div>

    <label for="Specialty">Specialty:</label>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> DATABASE ADMIN</label>
</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> SOFTWARE DEVELOPER</label>
</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> WEB ADMINISTRATOR</label>
</div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputContactnumber">Contact Number</label>
    <input type="contact" class="form-control" id="Contactnumber">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" style="height: 50px; width: 2000px">Submit</button></label>
  </form>

<?php require_once 'includes/footer.php' ?>
   