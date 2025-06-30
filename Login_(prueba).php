<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {

        margin: 0;
        padding: 0;
        height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: linear-gradient(-45deg,rgb(58, 255, 212),rgb(30, 232, 250), #1e90ff, #9b59b6);
        background-size: 400% 400%;
        animation: gradientBG 10s ease infinite;
    }

    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
        
    }

        /* ANIMACIONES */
        @keyframes slideInTop {
            from {
                opacity: 0;
                transform: translateY(-80px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(100px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: 250px;
            margin-bottom: 15px;
            align-self: center;
            animation: slideInTop 0.8s ease-out forwards;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            animation: slideInUp 1s ease-out forwards;
            animation-delay: 0.2s;
        }

        .login-container h2 {
            margin-bottom: 10px;
            font-size: 35px;
            font-weight: bold;
            text-align: left;
        }

        input[type="email"],
        input[type="password"] {
            width: 94%;
            padding: 10px;
            margin: 12px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .login-button {
            width: 70%;
            padding: 10px;
            background-color: #4f6ef7;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-weight: bold;
            margin: 15px;
        }

        .login-button:hover {
            background-color: #3c58d4;
        }

        .forgot {
            margin-top: 15px;
            display: block;
            font-size: 14px;
            color: #000;
            text-decoration: none;
        }

        .forgot:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <!-- Imagen del logo fuera del contenedor del login -->

    <img src="bossy_logo.png" alt="Logo Bossy" class="logo">

    <div class="login-container">
        <h2>Login</h2>
        <form>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button class="login-button" type="submit">Log in</button>
        </form>
        <a class="forgot" href="#">Forgot Password?</a>
    </div>

</body>
</html>
