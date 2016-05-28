<?php
use App\Cms;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
<meta name="description" content="Официальный сайт детского сада № 42 Сказка(ГДОУ № 42 МО РФ), г. Улан-Удэ" />
<meta name="keywords" content="г. Улан-Удэ, детский сад, для детей, детям, дошкольное образование" />

<title>Детский сад № 42 "Сказка", г. Улан-Удэ, ст. Дивизионная</title>

<link rel="stylesheet" href="/jquery-ui/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" href="/css/style.css?version=1" type="text/css" />

<script type="text/javascript" src="/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/main.js?version=1"></script>

@yield('js')
</head>
<body>
<div id="main" class="fixpng">
<div id="topfon">
<div id="header" class="fixpng">
<div id="menu" style="height:600px">
<p class="fixpng"><a href="/">Главная</a></p>
<p class="fixpng"><a href="/news">Новости</a></p>
<?php foreach(Cms::getNav() as $_item): ?>
<p class="fixpng"><a href="/{{ $_item->path }}">{{ $_item->title }}</a></p>
<?php endforeach; ?>
@can('admin-content')
<p class="fixpng">= = = = = = = = = =</p>
<p class="fixpng"><a href="/admin">Админ</a></p>
<p class="fixpng"><a href="/logout">Выйти</a></p>
@endcan
</div>

<div id="content">

<!--
<div id="mult" class="fixpng">
</div>
-->

<div id="midd_content">
<h6>Министерство обороны Российской Федерации</h6>
<h6>Государственное дошкольное образовательное учреждение</h6>
<h1>Детский сад № 42</h1>
<h1>"Сказка"</h1>
<h6>г. Улан-Удэ</h6>
<br /><br /><br />
@yield('h2')
@yield('content')
</div>
</div>
</div>
<div id="bears">
    <img src="/i/bears.gif" alt=""/>
</div>
</div>
<p style="clear:both; text-align:center;font-size:80%">
    Gleb Starkov&nbsp;|&nbsp;2009&nbsp;-&nbsp;<?php echo date('Y'); ?>
</p>
</div>
</body>
</html>

