@if (!empty($seo))
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{$seo->title}}</title>
    <meta content="{{$seo->description}}" name="description">
    <meta content="{{$seo->keywords}}" name="keywords">
    <meta name="author" content="{{$seo->author}}">
    <meta content="index,follow" name="robots">
    <meta property="og:title" content="{{$seo->title}}"/>
    <meta property="og:site_name" content="{{$seo->title}}"/>
    <meta property="og:description" content="{{$seo->description}}"/>
    <meta property="og:keywords" content="{{$seo->keywords}}"/>
    <meta property="og:image" content=""/>

@else
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>eBusiness Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="author" content="">
    <meta content="index,follow" name="robots">
    <meta property="og:title" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:keywords" content=""/>
    <meta property="og:image" content=""/>
@endif
