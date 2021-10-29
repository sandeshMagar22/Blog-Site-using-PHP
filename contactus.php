<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script>
    function validate()
{
  var phoneNumber = document.getElementById('mobile').value;
  var email = document.getElementById('email').value;
  var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
  var emaileRGEX= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var phoneResult = phoneRGEX.test(phoneNumber);
  var emailResult = emailRGEX.test(email);
  if(phoneResult == false)
 {
   alert('Please enter a valid phone number');
   return false;
 }
 if(emailResult == false)
{
  alert('Please enter a valid email address');
  return false;
}

return true;
}

    </script>

    <section class="my-5">
      <div class ="py-5">
        <h3 class = "text-center">Contact Us</h3>
      </div>
      <div class="w-50 m-auto">
        <form class="" action="userinfo.php" method="post" onsubmit="validate()">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" >
          </div>
          <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email" id="email" class="form-control" >
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" name="mobile" id="mobile" class="form-control" >
          </div>
          <div class="form-group">
            <label>Comment</label>
            <textarea class="form-control" name="comment"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>    <!--btn-primary for blue -->
        </form>
      </div>
    </section>
    <?php include('footer.php'); ?>

  </body>
</html>
