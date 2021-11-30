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
                                <a href="">@lang('messages.add_new')</a>
                            </div>
                            <div class="listing-search">
                                <form>
                                    <fieldset>
                                        <legend>@lang('messages.search')</legend><input type="text">
                                        <input type="submit" value="@lang('messages.search')" />
                                    </fieldset>
                                </form>
                            </div>
                            <table>
                                <tr>
                                    <th>@lang('messages.product_name')</th>
                                    <th>@lang('messages.product_image')</th>
                                    <th>@lang('messages.product_code')</th>
                                    <th>@lang('messages.price')</th>
                                    <th>Copy</th>
                                    <th>@lang('messages.edit')</th>
                                    <th>@lang('messages.delete')</th>
                                </tr>
                                <tr>
                                    <td>YZF</td>
                                    <td><img height="70px" src="{{asset('frontend/Images/yzf-r1374b (1).jpg')}}" /></td>
                                    <td>14141242</td>
                                    <td>100,000,000VND</td>
                                    <td><a href="#">Copy</a></td>
                                    <td><a href="#">@lang('messages.edit')</a></td>
                                    <td><a href="#">@lang('messages.delete')</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
    </body>
</html>

