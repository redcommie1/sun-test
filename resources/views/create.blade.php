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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116656323-1">
    </script>


</HEAD>
<BODY>
<div class="container" style="padding: 50px;">

    <div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{route('save-recipe')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="formGroupExampleInput">Название рецепта</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Количество порций</label>
                <select name="number_servings"  class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Время приготовления</label>
                <input type="text" name="time" class="form-control">
            </div>
            <div class="form-group">
                <label>Уровень сложности</label>
                <select name="difficulty"  class="form-control">
                    <option value="Простий">Простий</option>
                    <option value="Середній">Середній</option>
                    <option value="Складний">Складний</option>
                </select>
            </div>
            <div class="form-group">
                <label>Ингридиенты</label>
                <textarea name="ingredients" class="form-control" id="editor1">
                    </textarea>
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea name="description" class="form-control" id="editor2">
                    </textarea>
            </div>
            <div class="form-group">
                <label>Совет</label>
                <textarea name="advise" class="form-control">
                    </textarea>
            </div>

            <div class="form-group">
                <label>Превью изображения</label>
                <input type="file" name="prev_img">
            </div>
            <div class="form-group">
                <label>Полное изображение</label>
                <input type="file" name="full_img">
            </div>
            <input type="submit" value="Добавить" class="btn btn-primary">
        </form>
    </div>

</div>
</footer>

<link rel="stylesheet" href="css/libs.min.css"/>
<link rel="stylesheet" href="css/main.css"/>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/libs.min.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>

    $(document).ready(function() {
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    });

</script>
</BODY>
</html>