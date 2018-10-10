<!DOCTYPE html>
<html lang="uk">
<HEAD>
    <title>Сайт ТМ «Премія»—якість за розумною ціною! (Сільпо, Фора, Фоззі)</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Продукція ВТМ «Премія» – це наш погляд на те, якими смачними та чудовими мають бути продукти. Це товари високого ґатунку від надійних вітчизняних та іноземних виробників, що виготовляються і постачаються на наше пряме замовлення – без посередників та зайвих витрат, але з обов’язковим контролем якості з нашого боку."/>
    <meta property="og:title" content="Сайт ТМ «Премія» — якість за розумною ціною! (Сільпо, Фора, Фоззі)"/>
    <meta property="og:description" content="Продукція ВТМ «Премія» – це наш погляд на те, якими смачними та чудовими мають бути продукти. Це товари високого ґатунку від надійних вітчизняних та іноземних виробників, що виготовляються і постачаються на наше пряме замовлення – без посередників та зайвих витрат, але з обов’язковим контролем якості з нашого боку."/>
    <meta property="og:image" content="http://premiya.ua/img/rizhki_premia.png"/>
    <meta property="og:url" content="http://premiya.ua/"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/><link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="canonical" href="http://premiya.ua/">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <!--<meta name="msapplication-TileColor" content="#da532c">--><meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/start.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116656323-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(

            arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-116656323-1');
    </script>
</HEAD>
<BODY>
<div class="wrapper">
    <div class="preloader" id="preloader">
        <div class="loaderSpin"></div>
    </div>
    <div class="recipe"><a class="close" href="/"></a><a class="arr-prev arr" href="recipe16.html"></a><a class="arr-next arr" href="recipe2.html"></a>
        <div class="recipe__content">
            <h1 class="recipe__title">{{ $recipe->name }}
            </h1>
            <div class="recipe__text">
                <div class="details">
                    <div class="details__item portion"><img class="icon" src="/img/recipes/tarelka.svg">
                        <h4 class="tit">Порцій:</h4>
                        <p>{{ $recipe->number_servings }}</p>
                    </div>
                    <div class="details__item time"><img class="icon" src="/img/recipes/clock.svg">
                        <h4 class="tit">Час приготування:</h4>
                        <p>{{ $recipe->time }}</p>
                    </div>
                    <div class="details__item level"><img class="icon" src="/img/recipes/chart.svg">
                        <h4 class="tit">Рівень складності:</h4>
                        <p>{{ $recipe->difficulty }}</p>
                    </div>
                </div>
                <div class="ingredients">
                    <h4 class="tit">Інгредієнти:</h4>
                    {!!  html_entity_decode($recipe->ingredients ) !!}

                 </div>
                 <div class="cooking">
                     {!!  html_entity_decode($recipe->description ) !!}
                 </div>
                 <div class="hint">
                     <h4 class="tit">Порада:</h4>
                     <p>{{$recipe->advise }}</p>
                 </div>
             </div>
             <div class="recipe__img">
                 <div class="recipe-photo" style="background-image:url({{ asset('img/recipes/' . $recipe->full_img) }})"></div>
                 <div class="product-slider-wrap">
                     <div class="product-slider productSlider">
                         <div class="swiper-wrapper">
                             <div class="product-slider__item swiper-slide"><img src="img/products/Olivki_GreenBK.png" alt="">
                                 <h3 class="tit">зелені оливки без кісточки "Премія"</h3>
                             </div>
                             <div class="product-slider__item swiper-slide"><img src="img/products/Holland.png" alt="">
                                 <h3 class="tit">сир твердий "Голландський брусковий" "Премія"</h3>
                             </div>
                             <div class="product-slider__item swiper-slide"><img src="img/products/Oil_Extra500.png" alt="">
                                 <h3 class="tit">оливкова олія прямого віджиму "Премія"</h3>
                             </div>
                         </div>
                     </div>
                     <div class="product-arr-prev product-arr"></div>
                     <div class="product-arr-next product-arr"></div>
                 </div>
             </div>
         </div>
     </div>
     <link rel="stylesheet" href="{{asset('css/libs.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <script src="{{asset('js/libs.min.js')}}"></script>
    <script src="{{asset('js/common.js')}}"></script>
</div>
</BODY>
</html>