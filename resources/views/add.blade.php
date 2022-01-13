<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="them.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/add.css')}}">
    <title>@lang('messages.add_new_page')</title>
</head>

<body>
    <div class="container">
        <div>
            <section class="section clearfix">
                <div>
                    <div class="seccontactform">
                        <form action="{{route('post.addproducts')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="clearfix">
                                <input class="col2 first" type="text" name="name" placeholder="@lang('messages.product_name')">
                            </div>
                            <div class="clearfix">
                                <input class="col2 first" type="file" name="image" placeholder="@lang('messages.select_file')" accept="image/png, image/gif, image/jpeg" multiple>
                            </div>
                            <div class="clearfix">
                                <input class="col2 first" type="text" name="code" placeholder="@lang('messages.product_code')">
                            </div>
                            <div class="clearfix">
                                <input class="col2 first" type="text" name="price" placeholder="@lang('messages.price')">
                            </div>
                            <div class="clearfix">
                                <input type="submit" value="@lang('messages.add_new')">
                                <a href="#" class="buttons">@lang('messages.back_admin_page')</a>
                            </div>
                            @if($errors->any())
                            @foreach($errors->all() as $error)
                            <li style="color: red">{{$error}}</li>
                            @endforeach
                            @endif
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
</body>

</html>
