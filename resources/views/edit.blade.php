<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/edit.css')}}">
    <title>@lang('messages.edit')</title>
</head>
<body>
<div class="container">
    <div>
        <section class="section clearfix">
            <div>
                <div class="seccontactform">
                    <form action="{{ url('update/'.$pro['id']) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="clearfix">
                            <input class="col2 first" type="text" name="name" placeholder="@lang('messages.product_name')" value="{{$pro['name']}}">
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" type="file" name="image" placeholder="@lang('messages.select_file')">
                            <img src="{{  $pro['image']  }}" width="100px" alt="Image">
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" type="text" name="code" placeholder="@lang('messages.product_code')" value="{{$pro['code']}}">
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" type="text" name="price" placeholder="@lang('messages.price')" value="{{$pro['price']}}">
                        </div>
                        <div class="clearfix">
                            <input type="submit" value="@lang('messages.update')">
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
