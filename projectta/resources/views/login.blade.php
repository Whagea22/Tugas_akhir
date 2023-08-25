<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Project TA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action="{{ url('admin/front-and/dashboard') }}" method="get">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="#">Signup</a>
            </div>
        </form>
    </div>
    <link rel="stylesheet" href="{{ url('public/login2') }}/css/style.css">
</body>

</html>
