
<?php

/**
 * The view. 
 * No functions needed to call the view... unless you want to put helper funtions.
 * Ideally though the 'view' should only render and shouldn't have any logic beyond
 * some basic frontend logic mainly just calling the 'echo' command.
 */
    

/**
 * Javascript pertaining to this view should be enqueded here.
 * Multipe js files can be enqueued.
 */

 
ob_start();

?>

<div class="container">
  <form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" value="<?php if(isset($mvc_user_email)) echo $mvc_user_email; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label value="<?php  if(isset($mvc_user_password)) echo $mvc_user_password;?>">
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
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
</div>



<!-- HTML ends here... -->
<?php

echo ob_get_clean();


?>

