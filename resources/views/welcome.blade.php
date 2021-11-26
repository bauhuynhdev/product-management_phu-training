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
        <li> <input type="text" placeholder="Tìm kiếm" id="inputsearch"> <i class="fa fa-search"></i></li>
        <li> <a href="#">@lang('messages.login')</a></li>
        <li> <a href="#">@lang('messages.register')</a></li>
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
                        <img src="{{asset('frontend/Images/honda-africa-twin-adventure-sport-nhap-khau-chinh-hang296l.jpg')}}" alt="">
                        <h2>Honda Africa Twin Adventure</h2>
                        <p>680,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-cb350-hness753d.jpg')}}" alt="">
                        <h2>Honda CB350 Hness753</h2>
                        <p>378,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-cb500f-2022-moi-hang-nhap-khau-tu-thai-lan744n.jpg')}}" alt="">
                        <h2>Honda CB500F 2022</h2>
                        <p>177,500,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-cb500x-chinh-hang-san-xuat-thai-lan-cao-cap899g.jpg')}}" alt="">
                        <h2>Honda CB500X</h2>
                        <p>186,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-cb1100ex-2022-final-edition-ban-gioi-han-cuoi-cung261n.png')}}" alt="">
                        <h2>Honda CB1100EX 2022 Final</h2>
                        <p>230,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-cbr500r-abs-hang-chinh-hang-nhap-khau-tu-thai-lan184n.jpg')}}" alt="">
                        <h2>Honda CBR500R ABS</h2>
                        <p>185,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-cbr600rr-abs-xe-dua-the-thao-nhap-khau-tu-nhat334r.jpg')}}" alt="">
                        <h2>Honda CBR600RR ABS</h2>
                        <p>720,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-shadow-aero-abs-750-20226512.jpg')}}" alt="">
                        <h2>Honda Shadow Aero ABS</h2>
                        <p>270,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/honda-shadow-phantom-750-20229042.jpg')}}" alt="">
                        <h2>Honda Shadow Phantom 750</h2>
                        <p>190,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/jawa-42-classic-legend-2021812d.jpg')}}" alt="">
                        <h2>Jawa 42 Classic Legend</h2>
                        <p>320,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/jawa-300-forty-two-42-20219972.jpg')}}" alt="">
                        <h2>Jawa 300 Forty Two 42</h2>
                        <p>142,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/jawa-classic-300-2021-bs6789c.jpg')}}" alt="">
                        <h2>Jawa Classic 300 2021</h2>
                        <p>328,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/jawa-perak-400290b.jpg')}}" alt="">
                        <h2>Jawa Perak 400290B</h2>
                        <p>275,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-ninja-400-abs-chinh-hang-nhap-khau-thai-lan-gia-re2482.jpg')}}" alt="">
                        <h2>Kawasaki Ninja 400 ABS</h2></h2>
                        <p>162,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-ninja-650-abs-krt-chinh-hang-san-xuat-thai-lan340r.jpg')}}" alt="">
                        <h2>Kawasaki Ninja 650 ABS</h2>
                        <p>197,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-ninja-zx-10r-abs-krt-edition-chinh-hang-sieu-xe-the-thao920r.jpg')}}" alt="">
                        <h2>Kawasaki Ninja ZX 10R ABS</h2>
                        <p>350,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-versys-x-300-abs-toure-chinh-hang-nhap-khau-thai-lan428r.jpg')}}" alt="">
                        <h2>Kawasaki Versys X 300 ABS</h2>
                        <p>400,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-versys-x-300-abs397x.jpg')}}" alt="">
                        <h2>Kawasaki Versys X ABS397X</h2>
                        <p>450,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-vulcan-s-650-chinh-hang416r.jpg')}}" alt="">
                        <h2>Kawasaki Vulcan S 650</h2>
                        <p>580,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-zh2-chinh-hang-nhap-khau-tu-nhat-supercharger457r.jpg')}}" alt="">
                        <h2>Kawasaki ZH2</h2>
                        <p>690,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/kawasaki-zx10r-abs-chinh-hang-nhap-khau-tu-nhat523n.jpg')}}" alt="">
                        <h2>Kawasaki ZX10R ABS</h2>
                        <p>729,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/yamaha-bolt-r950-nhap-khau-nhat339r.jpg')}}" alt="">
                        <h2>Yamaha Bolt R950</h2>
                        <p>420,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/yamaha-r7-chinh-hang-nhat431a (1).jpg')}}" alt="">
                        <h2>Yamaha R7</h2>
                        <p>480,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/yamaha-v-star-250-hang-my8330.jpg')}}" alt="">
                        <h2>Yamaha V Star 250</h2>
                        <p>380,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/yzf-r1374b.jpg')}}" alt="">
                        <h2>Yamaha R1374B</h2>
                        <p>430,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/yzf-r6839b.jpg')}}" alt="">
                        <h2>Yamaha R6839B</h2>
                        <p>290,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/bmw-k1600-grand-america-full-option278d.jpg')}}" alt="">
                        <h2>BMW K1600 Grand America</h2>
                        <p>1,380,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/bmw-k1600b-tieu-chuan-chau-au527b.jpg')}}" alt="">
                        <h2>BMW K1600B Châu Âu</h2>
                        <p>1,250,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/bmw-r18-chinh-hang-dong-co-boxer-sieu-doc7908.jpg')}}" alt="">
                        <h2>BMW R18</h2>
                        <p>928,000,000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="{{asset('frontend/Images/bmw-r18-classic-ban-dac-biet-fist-edition9571.jpg')}}" alt="">
                        <h2>BMW R18 Classic</h2>
                        <p>950,000,000<sup>đ</sup></p>
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
