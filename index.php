<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            border-radius: 15px;
            background-image: url('https://asset-a.grid.id/crop/0x0:0x0/x/photo/2020/03/20/117449582.jpg');
        }

        .custom-label {
            color: purple;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            margin-top: 7px;
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: purple;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: purple;
            color: black;
        }

        #message {
            color: #f00;
        }

        img {
            width: 100%;
            border-radius: 4px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h2>Form Login</h2>
    <form id="loginForm">
        <img src="https://static.gatra.com/foldershared/images/2021/roh/08-Aug/Nebula.png" alt="">
        <label for="username" class="custom-label">Username:</label>
        <input type="text" id="username" name="username" placeholder="user name" required><br><br>
        
        <label for="password" class="custom-label">Password:</label>
        <input type="password" id="password" name="password" placeholder="password"required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <p id="message"></p>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // Mengganti dengan username dan password yang benar
            const validUsername = "desy";
            const validPassword = "1107";

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === validUsername && password === validPassword) {
                // Redirect ke halaman lain (ganti URL sesuai kebutuhan)
                window.location.href = "menu.php";
            } else {
                document.getElementById("message").innerHTML = "Username atau password salah. Silakan coba lagi.";
            }
        });
    </script>
</body>
</html>