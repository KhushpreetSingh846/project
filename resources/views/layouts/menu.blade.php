<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu </title>
        <link rel="stylesheet" href="{{ URL::asset('css/menu.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <input type="checkbox" id="check">
        <header>
            <label for="check">
                <i class="fa fa-bars" id="toggle"></i>
            </label>
            <div class="area-left">
                <h3>Smart <span>Lab</span></h3>
            </div>
            <div class="area-right">
                <a href="#" class="logout-btn">Logout</a>
            </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="{{ URL::asset('images\pubg.jpg') }}" class="profile-image" alt="">
                <h3>Jessica</h3>
            </center>
            <input type="checkbox" id="drop">

            @foreach($packs as $pack)
            <h4>{{$pack->pack_title}}</h4>
                @foreach($pack['menus'] as $menu)
                    <a href=""><i class="fa fa-{{$menu->icon}}"></i><span>{{$menu->menu_title}}</span>

                        @if($menu['subs']->isNotEmpty())
                            <label for="drop">
                                <i class="fa fa-caret-down" id="down"></i>
                            </label>
                        @endif
                        @foreach($menu['subs'] as $sub)
                            <ul class="dropdown">
                                <li><a href=""><span>{{$sub->sub_menu_title}}</span></a></li>
                            </ul>

                        @endforeach
                    </a>
                    @endforeach
            @endforeach
        </div>

    </body>
</html>
