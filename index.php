<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #661a7fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-container {
            background: white;
            padding: 25px;
            border-radius: 24px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #c68c35ff;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input {
            width: 94%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        input:focus {
            border-color: #a2ff00ee;
            outline: none;
        }
        .btn {
            background: #81ad43ff;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Sinup to become a CMANs</h2>
    <form action="submit.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" >

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Create a password" >

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" >

        <button type="submit" class="btn">Sign Up</button>
    </form>
</div>

</body>
</html>
