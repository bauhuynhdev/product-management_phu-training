<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/add.css')}}">
    <title>@lang('messages.add_new_page')</title>
</head>
<body>
<div class="container">
    <div>
        <section class="section clearfix">
            <div>
                <div class="seccontactform">
                    <form action="" method="">
                        <div class="clearfix">
                        <input class="col2 first" type="text" name="" placeholder="@lang('messages.product_name')" value="">
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" type="file" name="" placeholder="@lang('messages.select_file')" value="">
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" type="text" name="" placeholder="@lang('messages.product_code')" value="">
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" type="text" name="" placeholder="@lang('messages.price')" value="">
                        </div>
                        <div class="clearfix">
                            <input type="submit" value="@lang('messages.add_new')">
                            <a href="#" class="buttons">@lang('messages.back_admin_page')</a>
                        </div>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
</body>
</html>
