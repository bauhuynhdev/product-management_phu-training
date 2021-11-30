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
        <form class="form-login" action="{{route('auth.login')}}" method="post">
            @csrf
            <h1>@lang('messages.login')</h1>
            <div class="form-text">
                <input type="text" placeholder="@lang('messages.email')" name="email">
            </div>
            @if ($errors->has('email'))
                <strong>{{$errors->first('email')}}</strong>
            @endif
            <div class="form-text">
                <input type="password" placeholder="@lang('messages.password')" name="password">
            </div>
            @if ($errors->has('password'))
                <strong>{{$errors->first('password')}}</strong>
            @endif
            <button type="submit">@lang('messages.login')</button>
            <span>@lang('messages.you_dont_have_an_account_yet?')   <a href="{{route('auth.show')}}">@lang('messages.sign_up_here')</a></span>
        </form>
    </div>
</body>
</html>
