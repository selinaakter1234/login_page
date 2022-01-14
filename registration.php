<?php
require_once('header.php');
?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card mt-3">
        <div class="card-header bg-success text-white text-center">
          <b>Registration page</b>
        </div>
        <div class="card-body">
          <form action="register_post.php" method="POST">

            <div class="row">
              <div class="col">
                <label for="inputname">First name</label>
                <input type="text" class="form-control" placeholder="First name" name="first_name">
              </div>
              <div class="col">
                <label for="inputname">Last name</label>
                <input type="text" class="form-control" placeholder="Last name" name="last_name">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">

              </div>
              <div class="col">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
              </div>
            </div>
            <div>
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
            </div>
            
          </form>
    </div>
  </div>

</div>
</div>

<div>
</div>

<?php
require_once('footer.php');
?>