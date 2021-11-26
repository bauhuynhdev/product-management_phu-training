<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng nhập</title>
</head>
<body>
    <div class="container">
        <form class="form-login">
            <h1>Đăng nhập</h1>
            <div class="form-text">
                <input type="text" placeholder="Email">
            </div>
            <div class="form-text">
                <input type="password" placeholder="Password">
            </div>
            <button>Đăng nhập</button>
            <span>Bạn chưa có tài khoản? <a href="#">Đăng ký tại đây</a></span>
        </form>
    </div>
</body>
</html>
