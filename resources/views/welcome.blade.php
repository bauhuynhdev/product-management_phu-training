<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>@lang('messages.motorbike_sale_website')</title>
</head>
<body>
<header>
        <div class="logo">
            <a href=""><img class="imglogo" src="{{asset('frontend/Images/32b7fffc205e5935723bc28af761d2f2.jpg')}}"></a>
        </div>
    <div class="menu">
        <li><a href="">Honda</a></li>
        <li><a href="">Kawasaki</a></li>
        <li><a href="">Yamaha</a></li>
        <li><a href="">Jawa</a></li>
        <li><a href="">BMW Motorad</a></li>
        <li><a href="">@lang('messages.contact')</a></li>
    </div>
    <div class="others">
        <li> <input type="text" placeholder="@lang('messages.search')" id="inputsearch"> <i class="fa fa-search"></i></li>
        <li> <a href="{{route('get.login')}}">@lang('messages.login')</a></li>
        <li> <a href="{{route('get.register')}}">@lang('messages.register')</a></li>
        <li> <a class="fa fa-user" href="#"></a></li>
        <li> <a class="fa fa-shopping-cart" href=""></a></li>
    </div>
</header>
<section id="Slider">
    <div class="aspect-ratio-169">
        <a href="#"><img src="{{asset('frontend/Images/2019-honda-cbr1000rr-fireblade-front-quarter-b3af-1-1024x557.jpg')}}"></a>
        <a href="#"><img src="{{asset('frontend/Images/maxresdefault.jpg')}}"></a>
        <a href="#"><img src="{{asset('frontend/Images/133-90444_CH_Moto banners 377X212px v150dpi3.jpg')}}"></a>
        <a href="#"><img src="{{asset('frontend/Images/20160429074440-bike-banner-Xtreme-Sports-54.jpg')}}"></a>
        <a href="#"><img src="{{asset('frontend/Images/Banner-20Seguro-20Moto-201150x350.jpg')}}"></a>
    </div>
    <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
                <ul>
                    <li class="cartegory-left-li"><a href="#">Honda</a></li>
                    <li class="cartegory-left-li"><a href="#">Kawasaki</a></li>
                    <li class="cartegory-left-li"><a href="#">Yamaha</a></li>
                    <li class="cartegory-left-li"><a href="#">Jawa</a></li>
                    <li class="cartegory-left-li"><a href="#">BMW Motorad</a></li>
                </ul>
            </div>
            <div class="cartegory-right row">
                <div class="cartegory-right-top-item">
                    <p>@lang('messages.product_portfolio')</p>
                </div>
                <div class="cartegory-right-top-item">
                    <select name="" id="">
                        <option value="">@lang('messages.arrangement')</option>
                        <option value="">@lang('messages.price_from_high_to_low')</option>
                        <option value="">@lang('messages.price_from_low_to_high')</option>
                    </select>
                </div>
                <div class="cartogory-right-content row">
                    <div class="cartegory-right-content-item">
                        @foreach($pro as $value)
                        <img src="{{ $value['image'] }}" alt="">
                        <h2>{{ $value['name'] }}</h2>
                        <p>{{ $value['price'] }}<sup>đ</sup></p>
                        @endforeach
                    </div>
                </div>
                <div class="cartegory-right-bottom row">
                    <div class="cartegory-right-bottom-items">
                        <p>@lang('messages.display') 2 <span> | </span> 4 @lang('messages.product')</p>
                    </div>
                    <div class="cartegory-right-bottom-items">
                        <p><span>&#171; </span>1 2 3 4 5 <span>&#187;</span>@lang('messages.last_page')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script>
    const header = document.querySelectorAll("header")
    window.addEventListener("scroll",function(){
        x = window.pageXOffset
        if(x>0){
            header.classList.add("sticky")
        }
        else {
            header.classList.remove("sticky")
        }
    })
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNuber = imgPosition.length
    let index = 0
    //console.log(imgPosition)
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
        dotItem[index].addEventListener("click",function(){
        slider (index)
        })
    })
    function imgSlide (){
        index++;
        console.log(index)
        if(index>=imgNuber) {index=0}
        slider (index)
    }
    function slider (index) {
        imgContainer.style.left = "-" +index*100+ "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,5000)
</script>
</html>
