<html>
<head>
  <title>UAsk</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/css/materialize.min.css" media="screen" />
   <link href="http://localhost/css/icon.css" rel="stylesheet">
    <link href="http://localhost/css/color.css" rel="stylesheet">
</head>

<body class = "teal darken-4">
 <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row center">
      <div class = "col s8 offset-s2">   
          <div class="card cyan darken-4">
            <div class="card-content white-text">
              <span class="card-title">Sign up now!</span>
             <form method = "POST" action = 'create'... onsubmit="return checkForm(this);">
             <?php echo form_open('http://localhost/uask/index.php/uask/create'); ?>
             
      <div class="row center">
        <div class="input-field col s6 white-text">
          <input  id="first_name" type="text" class="validate" name = "FirstName">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name = "LastName">
          <label for="last_name">Last Name</label>
        </div>
      </div>

      <div class="row center">
        <div class="input-field col s8 offset-s2">
          <input id="last_name" type="text" class="validate" name = "username">
          <label for="last_name">User Name</label>
        </div>
      </div>
      <div class="row center">
        <div class="input-field col s8 offset-s2">
          <input id="email" type="email" class="validate" name = "Email">
          <label for="email">Email</label>
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>
            <div class="row center">
        <div class="input-field col s8 offset-s2">
          <input id="password" type="password" class="validate" name = "pwd1">
          <label for="password">Password</label>
        </div>
       
      </div>
       <div class="row center">
        <div class="input-field col s8 offset-s2">
          <input id="password" type="password" class="validate" name = "pwd2">
          <label for="password"> Confirm Password</label>
        </div>
       
      </div>
      
      
        <div class="input-field col s8 offset-s2">
      <button type="submit" class="large waves-effect waves-light btn ">Register</button>
  </div>
<br><br><br>    </form>
    <?php echo form_close(); ?>   
    
         </div>
          </div>
          </div>
      </div>
            
      </div>
      
 
    </div>
  </div>
</div>
   </div>
   <script type="text/javascript">

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 8) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }

</script>
<script type="text/javascript" src="http://localhost/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="http://localhost/js/materialize.min.js"></script>

 <script type="text/javascript" src="http://localhost/js/init.js"></script>
</body>
</html>
