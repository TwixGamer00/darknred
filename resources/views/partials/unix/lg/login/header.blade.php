@section('unix::lg.login.header')
<header>
    <!-- MENU -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/themes/unix/css/login/interchanging.css"/>
    <meta name="theme-color" content="@isset($setting_data['metacolor']){{$setting_data['metacolor']}}@else #0045ff @endisset">
    <meta property="og:title" content="@isset($setting_data['metatitle']){{$setting_data['metatitle']}}@else {{ config('app.name', 'Pterodactyl') }}  @endisset">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/">
    <meta property="og:image" content="@isset($setting_data['metaimg']){{$setting_data['metaimg']}}@else https://cdn.resourcemc.net/zAsa7/rIBOyeRU58.png/raw @endisset">
    <meta property="og:description" content="@isset($setting_data['metadesc']){{$setting_data['metadesc']}}@else Manage your server with an easy-to-use Panel @endisset">

    @isset($setting_data['loginbgtype']) @if($setting_data['loginbgtype'] == 2) 
    @yield('unix::background.image')
    @endif @endisset
    
    @isset($setting_data['loginbgtype']) @if($setting_data['loginbgtype'] == 3) 
    @yield('unix::background.video')
    @endif @endisset

    <div id="{{ config('unix.author', 'n/a') }} {{ config('unix.version', 'unset') }}" class="menu">
      <div class="logo"><a href="/auth/login">{{ config('app.name', 'Pterodactyl') }}</a></div>
      <div class="btn"><a href="@isset($setting_data['mainbtnurl']){{$setting_data['mainbtnurl']}}@else Our Website @endisset" target="_blank" style="color:white;">@isset($setting_data['mainbtnname']){{$setting_data['mainbtnname']}}@else Our Website @endisset </a></div>
    </div>
  </header>
@endsection