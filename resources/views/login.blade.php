<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('/images/desktop-wallpaper-clothing-store-on-dog-merchandise.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: rgb(255, 255,255,0.082);
            backdrop-filter: blur(4px);
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 250px;
            text-align: center;
            
        }
        .login-container h2 {
            color: white;
            font-size: 30px;
            margin-bottom: 20px;
        }
        .login-container input {
            background-color: white;
            width: 100%;
            color: black;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border-radius: 10px;
            border: none;
        }
        
        .login-container button {
            background-color: rgb(48, 108, 204);
            color:white;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .animated-button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ url('/login') }}" method="post">
            @csrf
            
            <input type="email" name="email" placeholder="email" style="color: white:" required>
        
            <input type="password" name="password" placeholder="password" required>
        
            <button type="submit" class="animated-button">Login</button>
        </form>
        
        @if(session('error'))
            <div>{{ session('error') }}</div>
        @endif
    </div>
    
</body>
</html>







