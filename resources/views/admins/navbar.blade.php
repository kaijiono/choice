<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Choice</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guard('admin')->check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::guard('admin')->user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('admin::admins.admin', 'マイプロフィール') !!}</li>
                                <li>{!! link_to_route('message.userindex', 'お客様の相談を見る', ['id' =>auth::id()]) !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                            </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('admin::register', '新規登録') !!}</li>
                        <li>{!! link_to_route('admin::login', 'ログイン') !!}</li>
                        <li>{!! link_to_route('welcome', 'プロに相談したい方はこちら') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
