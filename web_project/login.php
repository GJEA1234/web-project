<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('login.jpg');
      display: flex;
      height: 500px;
      justify-content: center;
      align-items: center;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .login-container {
      padding: 80px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      width: 300px;
      background: rgba(0, 0, 0, 0.5); 
    }
    .login-container h1 {
      margin-bottom: 20px;
      text-align: center;
      color: white;
    }
    .login-container input {
      width: 100%;
      padding: 10px;
      margin: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .login-container button {
      width: 100%;
      padding: 10px;
      background: #0077cc;
      border: none;
      color: white;
      font-weight: bold;
      cursor: pointer;
      border-radius: 30px;
      margin-top: 30px;
      margin-left: 30px;
    }
    .login-container button:hover {
      background: #005fa3;
    }
  </style>
  <script>
    function login() {
      const email = document.getElementById("email").value.trim();
      const password = document.getElementById("password").value.trim();

      if (email === "" || password === "") {
        alert("Please enter both Email and Password.");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <div class="login-container">
    <h1>STUDENT LOGIN</h1>
    <form class="loginform" method="post" onsubmit="return login()" action="loginphp.php">
      <input type="email" id="email" name="email" placeholder="Email" />
      <input type="password" id="password" name="password" placeholder="Password" />
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>