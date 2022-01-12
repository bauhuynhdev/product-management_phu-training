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
    @if (session('message'))
    <span>
        <strong>{{session('message')}}</strong>
    </span>
    @endif
    <div class="container">
        <form class="form-login" action="{{route('post.register')}}" method="post">
            @csrf
            <h1>@lang('messages.register')</h1>
            <div class="form-text">
                <input type="text" placeholder="@lang('messages.name')" name="name">
                @if ($errors->has('name'))
                    {{ $errors->first('name') }}
                @endif
            </div>
            <div class="form-text">
                <input type="text" placeholder="@lang('messages.email')" name="email">
                @if ($errors->has('email'))
                    {{ $errors->first('email') }}
                @endif
            </div>
            <div class="form-text">
                <input type="password" placeholder="@lang('messages.password')" name="password">
                @if ($errors->has('password'))
                    {{ $errors->first('password') }}
                @endif
            </div>
            <div class="form-text">
                <input type="password" placeholder="@lang('messages.password_confirm')" name="password_confirmation"/>
                @if ($errors->has('password_confirmation'))
                    {{ $errors->first('password_confirmation') }}
                @endif
            </div>
            <input type="hidden" value="1" name="role">
            <button type="submit">@lang('messages.register')</button>
            <span>@lang('messages.you_already_have_an_account?')<a href="{{route('get.login')}}"> @lang('messages.sign_in_here')</a></span>
        </form>
    </div>
</body>
</html>
