
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
</head>

<body>
<style>
     * {
  margin: 40px;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

:root {
  --primary-color: #c6c3c3;
  --second-color: #ffffff;
  --black-color: #000000;
}

body {
  background-image: url("https://drive.google.com/uc?export=view&id=1uCohtd5e8ZjrZrhykzct1o1DAE9JNVfS");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
p{
  color: red;
}
.name{
  font: 1em sans-serif;
}
.register {
  text-align: center;
}

.register a {
  font-weight: 500;
}

@media only screen and (max-width: 564px) {
  .wrapper {
    padding: 20px;
  }

}
#submit{
  color: green;
}
</style>  
<h1><u>Sign Up</h1>
<p id="one" align="center"><b>fill in the details given
  below
</P>

<div class="signup-box">
  <h2>Create an Account</h2>
  
  <form>
    <label for="name">Name</label>
    <input type="text" id="name" name="name"><br>

    <label for="last">Last Name</label>
    <input type="text" id="last name" name="last name"><br>
    
    

    <label for="username">Username</label>
    <input type="text" id="username" name="username" required><br>
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required><br>
    
    <label for="submit">v</label>
    <button type="submit">Sign Up</button><br>
  </form>
  <p>Already a member? <a href="login.php"> Switch to Login</a></p>
</div>

</body>
</html>
