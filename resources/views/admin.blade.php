<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('public/frontend/css/admin.css')}}">
    </head>
    <body>
            <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        Xin chào <span>Admin</span>
                    </div>
                    <div class="right-panel">
                        <img height="24" src="{{asset('public/frontend/Images/home icon (1).jpg')}}"/>
                        <a href="#">Trang chủ</a>
                        <img height="24" src="{{asset('public/frontend/Images/500_F_33527214_1ySp8kyGMZEAgk5MGELVAFxHxXRPNVEE.jpg')}}"/>
                        <a href="#">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">Admin Menu</div>
                        <div class="menu-items">
                            <ul>
                                <li><a href="product_listing.php">Sản phẩm</a></li>
                                <li><a href="order_listing.php">Đơn hàng</a></li>
                                <li><a href="member_listing.php">Quản lý thành viên</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-content">
                        <h1>Danh sách sản phẩm</h1>
                        <div class="listing-items">
                            <div class="buttons">
                                <a href="#">Thêm mới</a>
                            </div>
                            <div class="listing-search">
                                <form>
                                    <fieldset>
                                        <legend>Tìm kiếm</legend><input type="text">
                                        <input type="submit" value="Tìm" />
                                    </fieldset>
                                </form>
                            </div>
                            <table>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Copy</th>
                                    <th>Sửa</th>
                                    <th>Xoá</th>
                                </tr>
                                <tr>
                                    <td>YZF</td>
                                    <td><img height="70px" src="{{asset('public/frontend/Images/yzf-r1374b (1).jpg')}}" /></td>
                                    <td>14141242</td>
                                    <td>100,000,000VND</td>
                                    <td><a href="#">Copy</a></td>
                                    <td><a href="#">Sửa</a></td>
                                    <td><a href="#">Xoá</a></td>
                                </tr>
                                <tr>
                                    <td>YZF</td>
                                    <td><img height="70px" src="{{asset('public/frontend/Images/yzf-r1374b (1).jpg')}}" /></td>
                                    <td>14141242</td>
                                    <td>100,000,000VND</td>
                                    <td><a href="#">Copy</a></td>
                                    <td><a href="#">Sửa</a></td>
                                    <td><a href="#">Xoá</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
    </body>
</html>

