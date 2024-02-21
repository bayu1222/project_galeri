<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>SILAHKAN LOGIN</h>
<div>
  <form action="proses_login.php" method=post>
    <label for="fname">Username</label>
    <input type="text" id="fname" name="Username" placeholder="Your name..">

    <label for="lname">Password</label>
    <input type="text" id="lname" name="Password" placeholder="Your last name..">
    <input type="submit" value="Submit">
    belum punya akun?silahkan registrasi!
    <a href="registrasi.php">registrasi</a>
    
  </form>
</div>

</body>
</html>
