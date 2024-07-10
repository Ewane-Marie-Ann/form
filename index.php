<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="style.css">
   <title>register & login</title>
</head>
<body >
    <div class="container"  id="signup" style="display: none;">
    <h1 class="form-title" >Register</h1>
    <form method="POST" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="Fname" id="Fname" placeholder="First Name" required>
            <label for="Fname"> First name</label>
            
        </div> 
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="Lname" id="Lname" placeholder="Last Name" required>
            <label for="Lname"> Last name</label>
            
        </div> 
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" id="email" placeholder="email" required>
            <label for="email"> Email</label>
            
        </div> 
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="text" name="Password" id="Password" placeholder="Password" required>
            <label for="Password"> Password</label>
            
        </div> 
        <input type="submit" class="btn" value="SignUp" name="signUp">

    </form>
    <p class="or">
        -----------or---------
    </p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
    </div>
    <div class="link">
        <p>Already have an account?</p>
        <button id="signUpButton">Sign In</button>
    </div>
    </div>





    <div class="container"  id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="">
           
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="email" required>
                <label for="email"> Email</label>
                
            </div> 
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="text" name="Password" id="Password" placeholder="Password" required>
                <label for="Password"> Password</label>
                
            </div> 
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="sign In" name="signIn">
    
        </form>
        <p class="or">
            -----------or-------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <div class="link">
            <p> Don't have account? </p>
            <button id="signUpButton" >Sign Up</button>
        </div>
        </div>
   <script src="script.js"></script>
</body>
</html>