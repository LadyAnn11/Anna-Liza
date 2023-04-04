<?php require_once 'includes/header.php' ?>
    <h1 class="text-center"> Registration For IT Conference</h1>


    <form>
  <div class="form-group">
    <label for="exampleInputfirstname">First name</label>
    <input type="firstname" class="form-control" id="exampleInputfirstname">
  </div>
  <div class="form-group">
    <label for="exampleInputlastname">Last name</label>
    <input type="lastname" class="form-control" id="exampleInputlastname">
  </div>
</form>

<form action="/action_page.php">
<p>Date of Birth: <input type="text" id="datepicker"></p>
</form>

  <form action="/action_page.php">
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
</form>
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
  <button type="submit" class="btn btn-primary" style="height: 50px; width: 2000px">Submit</button>
</form>
<?php require_once 'includes/footer.php' ?>
   