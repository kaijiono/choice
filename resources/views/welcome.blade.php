@extends('layouts.app')


@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
       
       
        <!-- Top image-->
            <div id="main_visual">
                <img src="images_choice/choice_top.jpg" alt="本当に信頼できる不動産ビジネスパーソンと出会う">
            </div>
       
        
            <div class="text-center">
                
                <p>「choice」なら不動産ビジネスパーソンへ匿名で気軽に相談が出来ます。</p>
                </br>
                <p>現在の住まいさがしは、スーモ、アットホーム、yahoo不動産などのポータルサイトを見て物件の問い合わせをしたり、</P>
                <p>店頭に出向き、物件を紹介してもらったり、現地販売会、オープンルームなどで出会った担当者から物件を紹介してもらったり、
                   していると思います。</p>
                </br>
                <p>また、売却の場合であれば、一括査定サイトなどで無料査定などを行って、現在の住まいの価値を判断しているかと思います。</P>
                <p>しかし、皆さんは担当されているその不動産ビジネスパーソンの事をどこまで、ご存知でしょうか？</p>
                </br>
                <p>本当にその担当者の事を信頼されていますか？？</p>
                </br>
                <p>従来の方法で、本当に信頼できる担当者と知り合う為には、まず、お客様の個人情報を複数の会社へ提供することになります。</P>
                <p>不動産会社は担当者を数か月おきに変えひたすら営業連絡をしてきます。</p>
　　　　　　　　<p>そのために、携帯番号を変えなければいけなくなった、メールアドレスを変えなければいけなくなった。</p>
　　　　　　　　<p>断っても家に訪問してくる。など、非常に不都合が多いのです。</p>
                <p>「Choice」ならまずは「匿名」で現在抱えている悩みや不安点などを相談ができ、さらに登録されたビジネスパーソンの評価や詳細な情報を閲覧することが可能な為、</P>
                <p>本当に信頼した、担当者を見つける事が可能です。以前の不動産業界は物件情報が一般顧客には全く分からないブラックボックスの状態でした。</P>
                <p>しかし、ネット社会の今、大多数の物件はどこの不動産会社でも扱えており、物件情報力の差別化はできなくなりました。</P>
                <p>だからこそ、本当に信頼できるビジネスパーソンを見つける事が大切なのです。</p>
                </br>
                <p>さあ、一生涯お付き合いの出来る不動産ビジネスパーソンを見つけましょう。</p>
            <div id="buy_visual">
                <a href="*"><img src="images_choice/choice_buy.jpg" alt="買う相談"></a>
            </div>
            
            <div id="sell_visual">
                <a href="*"><img src="images_choice/choice_sell.jpg" alt="売る相談"><br></a>
            </div>
            
            <div id="rent_visual">
                <a href="*"><img src="images_choice/choice_rent.jpg" alt="賃貸相談" class="rent_img"><br></a>
            </div>
                
                {!! link_to_route('signup.get', '  新規登録  ', null, ['class' => 'btn btn-lg btn-default']) !!}
                {!! link_to_route('login', '  ログイン  ', null, ['class' => 'btn btn-lg btn-default']) !!}
            
                
                {!! link_to_route('admin::welcome', '  ビジネスパーソンはこちら！ ', null, ['class' => 'btn btn-lg btn-primary']) !!}</br>
                
                
            </div>
        </div>
    @endif
@endsection

