@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>不動産取引の新しいかたち。</h1>
                <h1>Choice</h1>
                「choice」なら不動産ビジネスパーソンへ匿名で気軽に相談が出来ます。
現在の住まいさがしは、スーモ、アットホーム、yahoo不動産などのポータルサイトを見て物件の問い合わせをしたり、
店頭に出向き、物件を紹介してもらったり、現地販売会、オープンルームなどで出会った担当者から物件を紹介してもらったり、
していると思います。

また、売却の場合であれば、一括査定サイトなどで無料査定などを行って、現在の住まいの価値を判断しているかと思います。

しかし、皆さんは担当されているその不動産ビジネスパーソンの事をどこまで、ご存知でしょうか？
本当にその担当者の事を信頼されていますか？？

従来の方法で、本当に信頼できる担当者と知り合う為には、まず、お客様の個人情報を複数の会社へ提供することになります。
不動産会社は担当者を数か月おきに変えひたすら営業連絡をしてきます。
そのために、携帯番号を変えなければいけなくなった、メールアドレスを変えなければいけなくなった。断っても家に訪問してくる。
など、非常に不都合が多いのです。

「Choice」ならまずは「匿名」で現在抱えている悩みや不安点などを相談ができ、さらに登録されたビジネスパーソンの評価や詳細な情報を閲覧することが可能な為、本当に信頼した、担当者を見つける事が可能です。

以前の不動産業界は物件情報が一般顧客には全く分からないブラックボックスの状態でした。

しかし、ネット社会の今、大多数の物件はどこの不動産会社でも扱えており、物件情報力の差別化はできなくなりました。

だからこそ、本当に信頼できるビジネスパーソンを見つける事が大切なのです。

さあ、一生涯お付き合いの出来る不動産ビジネスパーソンを見つけましょう。
                
                {!! link_to_route('signup.get', '新規登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('signup.get', '買う', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('signup.get', '売る', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('signup.get', '賃貸', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection

