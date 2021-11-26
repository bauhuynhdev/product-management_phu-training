<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.login')</title>
</head>
<body>
    <div class="container">
        <form class="form-login">
            <h1>@lang('messages.login')</h1>
            <div class="form-text">
                <input type="text" placeholder="@lang('messages.email')">
            </div>
            <div class="form-text">
                <input type="password" placeholder="@lang('messages.password')">
            </div>
            <button>@lang('messages.login')</button>
            <span>@lang('messages.you_don't_have_an_account_yet?')<a href="#">@lang('messages.sign_up_here')</a></span>
        </form>
    </div>
</body>
</html>
