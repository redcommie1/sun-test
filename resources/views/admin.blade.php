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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116656323-1">
    </script>

</HEAD>
<BODY>
<div class="container" style="padding: 50px;">

    <a href="{{route('create-recipe')}}" class="btn btn-primary" style="margin: 30px 0;">Добавить рецепт</a>

    <div>
        <table class="table">
            @foreach($recipes as $recipe)
            <tr>
                <td>
                    {{ $recipe->name }}
                </td>
                <td>
                    <a href="{{route('get-edit-recipe', ['id' => $recipe->id])}}"><i class="fa fa-edit" style="font-size:36px;color:green"></i></a>
                    <a href="{{route('delete-recipe', ['id' => $recipe->id])}}" class="remove-button"><i class="fa fa-trash" style="font-size:36px;color:red; margin-left: 30px"></i></a>
                </td>
            </tr>
                @endforeach
        </table>
    </div>

</div>
</footer>

<link rel="stylesheet" href="css/libs.min.css"/>
<link rel="stylesheet" href="css/main.css"/>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</div>
</BODY>
</html>