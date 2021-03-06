@extends('layouts.app_admin')


@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
       
       <div id="admin_main_visual">
           <img src="./images_choice/choice_admin.jpg" alt="adminトップ画像">
       </div>
       
        
            <div class="text-center">
                
                <p>「choice」は新しい集客の方法をご提案します。</p>
                </br>
                <p>集客活動といえば、ポータルサイトへの掲載、不動産売却一括査定サイトへの掲載、チラシ公告、</P>
                <p>Web広告、現地販売会などが一般的では無いでしょうか？</p>
                </br>
                <p>不動産売買の場合、１件集客するための費用はおよそ５万円前後と言われおります。</P>
                <p>両手取り引きも難しくなり、費用対効果はどんどん悪くなっています。</p>
                </br>
                <p>『Choice』なら1件５００円で集客が可能です。</p>
                </br>
                <p>ポータルサイトで集客力を高めるためにはそのポータルサイトの枠を増やさなければなりません</P>
                <p>宣伝広告費ばかりが膨らみ社員教育などにコストを割くことが出来ない。非常に悪循環ですよね？？</p>
　　　　　　　　<p>『Choice』は不動産取引に関する悩みを抱えたお客さまが悩みを相談することのできるシステムです。</p>
　　　　　　　　<p>そのため、営業マンの知識力や対応力で勝負が出来ます。</p>
                <p>事前に悩みや不安を解決してあげる事で貴方を信頼した状態からスタートが出来ます</P>
                <p>企業も社員教育にコストを割けますので、業界全体のレベルアップにも繋がり、</P>
                <p>お客さま、営業マン、企業の『三方良し』を実現することが可能です。</P>
                <p>物件情報で勝負出来る時代は終わりました。</p>
                </br>
                <p>AIに取って代われれる職業の代表格ですが、不動産はお客様にとって一生を決める買い物です。</p>
                <p>だからこそ真の営業マンなら生き残れるはずです。『Choice』はそのプラットフォームなのです。</p>
                
                
                {!! link_to_route('admin::login', '  ビジネスパーソンログイン  ', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('admin::register', '  ビジネスパーソン新規登録  ', null, ['class' => 'btn btn-lg btn-primary']) !!}
                
            </div>
        </div>
    @endif
@endsection

