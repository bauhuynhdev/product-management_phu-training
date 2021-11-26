<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/register.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.register')</title>
</head>
<body>
    <div class="container">
        <form class="form-login">
            <h1>@lang('messages.register')</h1>
            <div class="form-text">
                <input type="text" placeholder="@lang('messages.name')">
            </div>
            <div class="form-text">
                <input type="text" placeholder="@lang('messages.email')">
            </div>
            <div class="form-text">
                <input type="password" placeholder="@lang('messages.password')">
            </div>
            <div class="form-text">
                <input type="password" placeholder="@lang('messages.confirm_password')">
            </div>
            <button>@lang('messages.register')</button>
            <span>@lang('messages.you_already_have_an_account?')<a href="#">@lang('messages.sign_in_here')</a></span>
        </form>
    </div>
</body>
</html>
