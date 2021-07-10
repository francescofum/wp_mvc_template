<?php
/**
 * Example of a user class, this will be used by the controller login.controller.php
 * to handle the logging in of the user. 
 * The model should interact with the database, the controller/view should never do that. 
 */

class User {
  // Properties
  public $email;
  public $password;

  function __construct($email,$password)
  {
      $this->email    = $email;
      $this->password = $password;
  }


  function is_allowed()
  {
    // Checks whether a user is allowed to log in. 
    if ( ($this->email == 'francesco.fum@gmail.com') & ($this->password == '1234') )
    {
        return True;
    }
    return False;

  }
}
?>

