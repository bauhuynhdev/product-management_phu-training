<!DOCTYPE html>
<html>
    <head>
        <title>@lang('messages.admin_page')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('frontend/css/admin.css')}}">
    </head>
    <body>
            <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        @if (Auth::check())
                        @lang('messages.hi') : {{Auth::user()->email}}
                        @endif
                    </div>
                    <div class="right-panel">
                        <img height="24" src="{{asset('frontend/Images/home icon (1).jpg')}}"/>
                        <a href="#">@lang('messages.home')</a>
                        <img height="24" src="{{asset('frontend/Images/500_F_33527214_1ySp8kyGMZEAgk5MGELVAFxHxXRPNVEE.jpg')}}"/>
                        <a href="{{ route('logout') }}">@lang('messages.logout')</a>
                    </div>
                </div>
            </div>
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">@lang('messages.admin_menu')</div>
                        <div class="menu-items">
                            <ul>
                                <li><a href="product_listing.php">@lang('messages.product')</a></li>
                                <li><a href="order_listing.php">@lang('messages.the_order')</a></li>
                                <li><a href="member_listing.php">@lang('messages.manage_member')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-content">
                        <h1>@lang('messages.list_of_products')</h1>
                        <div class="listing-items">
                            <div class="buttons">
                                <a href="{{ route('get.add') }}/">@lang('messages.add_new')</a>
                            </div>
                            <div class="listing-search">
                                <form type="get" action="">
                                    <fieldset>
                                        <input type="search" placeholder="@lang('messages.search')" name="search" value="{{$search}}"/>
                                        <button>@lang('messages.search')</button>
                                    </fieldset>
                                </form>
                            </div>
                            <table>
                                <thead>
                                <tr>
                                    <th>@lang('messages.product_name')</th>
                                    <th>@lang('messages.product_image')</th>
                                    <th>@lang('messages.product_code')</th>
                                    <th>@lang('messages.price')</th>
                                    <th>@lang('messages.edit')</th>
                                    <th>@lang('messages.delete')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pro as $value)
                                <tr>
                                    <td>{{ $value['name'] }}</td>
                                    <td><img src="{{ $value['image'] }}" width="100px">
                                    <td>{{ $value['code'] }}</td>
                                    <td>{{ $value['price'] }}</td>
                                    <td><a href="{{ url('edit/'.$value['id']) }}">@lang('messages.edit')</a></td>
                                    <td><a href="{{ url('delete/'.$value['id']) }}">@lang('messages.delete')</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    </body>
</html>

