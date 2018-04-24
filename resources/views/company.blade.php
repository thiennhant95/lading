@extends('master')
@section('content')
<body id="wrapper" class="ld_page_com">
<header>
    <div class="flexrowbetween hdtop main">
        <div class="logo"><a href="{{url('')}}/"><img src="{{url('')}}/images/common_img/logoLPcom.png" alt="スマオク！ ユーザ直取引 プロ査定員査定 業界初!？ 中古車オークションのビッグバンサイト！"></a></div>
        <div class="txt_right clearfix dis_pc">
            <p class="text_right">営業時間：9:00～18:00（月～金）</p>
            <p class="mr10 mt10 teltop"><a href="tel:06-7670-7744"><img src="{{url('')}}/images/company/txttelhd.png" alt="tel:06-7670-7744"></a></p>
        </div>
        <div class="icontel">
            <p class="dis_sp"><a href="tel:06-7670-7744"><img src="{{url('')}}/images/company/icontel_hd.png" alt="tel:06-7670-7744"></a></p>
        </div>
    </div>
</header>
<!-- End Top-->
<section>
    <div class="banner">
        <h2 class="dis_sp"><img src="{{url('')}}/images/company/banner_sp.png" alt="ユーザ直取引&プロ査定員査定だから安心＆どこよりも安く落札できる！仕入れ費削減！"></h2>
        <h2 class="dis_pc text_center"><img src="{{url('')}}/images/company/txtbanner.png" alt="ユーザ直取引&プロ査定員査定だから安心＆どこよりも安く落札できる！仕入れ費削減！"></h2>
    </div>
    <article>
        <form method="post" id="IdCompany_1">
            <div class="boxtop2">
                <div class="inbox">
                    <table class="tbstyle">
                        <tr>
                            <th>会社名 <span class="hinsu">必須</span></th>
                            <td><input type="text" value="" name="company_name" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                        </tr>
                        <tr>
                            <th>ご担当者 <span class="hinsu">必須</span></th>
                            <td><input type="text" value="" name="contact_name" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                        </tr>
                        <tr>
                            <th>電話番号 <span class="hinsu">必須</span></th>
                            <td><input type="text" value="" name="phone" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                        </tr>
                        <tr>
                            <th>メールアドレス <span class="hinsu">必須</span></th>
                            <td><input type="text" value="" name="email" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                        </tr>
                    </table>
                </div>
                <div class="text_center"><p class="btndk"><button type="submit" style="padding:0; border: none;cursor: pointer;"><img src="{{url('images/company/btn1.png')}}" alt="無料登録をする"></button></p></div>
            </div>
        </form>
        <div class="boxtel">
            <h3 class="text_bold fontyu text_center">サービス内容に関してご不明点がございましたら、<span>お電話またはメールにてお問合わせください。</span></h3>
            <div class="flexrowbetween">
                <h4><img src="{{url('')}}/images/common_img/logobox.jpg" alt="スマオク"></h4>
                <div class="tel">
                    <p class="dis_pc lh00"><img src="{{url('')}}/images/common_img/txttel.jpg" alt="tel:06-7670-7744"></p>
                    <p class="dis_sp lh00"><a href="tel:06-7670-7744"><img src="{{url('')}}/images/common_img/txttel.jpg" alt="tel:06-7670-7744"></a></p>
                    <p class="txt">営業時間：9：00～18：00(月～金)</p>
                </div>
            </div>
        </div>
    </article>
</section>
<!-- end content_secon -->
<h2 class="text_center bgtit1"><img src="{{url('')}}/images/company/tit1.png" alt="スマオク！のメリットって？"></h2>
<p class="dis_sp lh00"><img src="{{url('')}}/images/company/bgline1_sp.png" alt=""></p>
<section class="section1">
    <article class="flexrowbetween">
        <div class="medal">
            <img src="{{url('')}}/images/company/medal1.png" alt="出品者は全て一般ユーザ">
            <p>出品者は全て一般ユーザのみ。つまり中古車取引の際に時折見られる悪質な業社のメータ改ざん、部品抜き取り等のリスクが相当に激減されます！</p>
        </div>
        <div class="medal">
            <img src="{{url('')}}/images/company/medal2.png" alt="直取引で中間マージンゼロだから安い">
            <p>通常「ユーザ」→「買取業者」→「オークション」→「中古車販売業社」の流れですが、スマオク！はユーザ直出品。だから買取業者の中間マージンがゼロなため、安く落札できるのです。</p>
        </div>
        <div class="medal">
            <img src="{{url('')}}/images/company/medal3.png" alt="プロ査定員が査定だから安心">
            <p>当オークションへの出品車はプロの査定員が査定、もしくは最終チェックした上で出品していますから品質に対する安心感が違います！</p>
        </div>
    </article>
</section>
<!-- end content_secon -->
<h2 class="text_center bgtit2"><img src="{{url('')}}/images/company/tit2.png" alt="スマオク！ご利用の流れ"></h2>
<p class="dis_sp lh00"><img src="{{url('')}}/images/company/bgline2_sp.jpg" alt=""></p>
<section class="section2">
    <article class="flexrowbetween">
        <div class="boxinfo">
            <img src="{{url('')}}/images/company/txtlable1.png" alt="お問い合わせ" class="lableimg">
            <p class="lh00"><img src="{{url('')}}/images/company/1.jpg" alt="お問い合わせ" class="lh00"></p>
        </div>
        <div class="boxinfo">
            <img src="{{url('')}}/images/company/txtlable2.png" alt="必要書類をFAXorPDFで提出（印鑑登録書、古物商許可書、入会申込書）" class="lableimg">
            <p class="lh00"><img src="{{url('')}}/images/company/2.jpg" alt="必要書類をFAXorPDFで提出（印鑑登録書、古物商許可書、入会申込書）" class="lh00"></p>
        </div>
        <div class="boxinfo">
            <img src="{{url('')}}/images/company/txtlable3.png" alt="入会審査" class="lableimg">
            <p class="lh00"><img src="{{url('')}}/images/company/3.jpg" alt="入会審査" class="lh00"></p>
        </div>
        <div class="boxinfo">
            <img src="{{url('')}}/images/company/txtlable4.png" alt="ID・パスワード発行" class="lableimg">
            <p class="lh00"><img src="{{url('')}}/images/company/4.jpg" alt="ID・パスワード発行" class="lh00"></p>
        </div>
        <div class="boxinfo">
            <img src="{{url('')}}/images/company/txtlable5.png" alt="郵送にて、入会申込書の原本を送付" class="lableimg">
            <p class="lh00"><img src="{{url('')}}/images/company/5.jpg" alt="郵送にて、入会申込書の原本を送付" class="lh00"></p>
        </div>
        <div class="boxinfo">
            <img src="{{url('')}}/images/company/txtlable6.png" alt="入会申込書の原本に必要事項を記入して提出" class="lableimg">
            <p class="lh00"><img src="{{url('')}}/images/company/6.jpg" alt="入会申込書の原本に必要事項を記入して提出" class="lh00"></p>
        </div>
    </article>
</section>
<!-- end content_secon -->
<h2 class="text_center bgtit3 dis_pc lh00"><img src="{{url('')}}/images/company/tit3.png" alt="スマオク！ご利用の流れ"></h2>
<h2 class="text_center bgtit3 dis_sp lh00"><img src="{{url('')}}/images/company/tit3_sp.png" alt="スマオク！ご利用の流れ"></h2>
<p class="dis_sp lh00"><img src="{{url('')}}/images/company/bgline3_sp.png" alt=""></p>
<section class="section3">
    <article class="flexrowbetween">
        <div class="boxcar">
            <div class="img">
                <img src="{{url('')}}/images/company/imdemo.png" alt="通常相場：120万円">
                <div class="price">
                    <p class="pricecar">164万円</p><span>で買取！</span>
                </div>
            </div>
            <p class="text_bold text_right txt_red fontshin">通常相場：120万円</p>
            <h4 class="fontshin">ホンダ インテグラ タイプS</h4>
            <p>年式：平成17年/型式tDC5/<br>走行距離：90,000km/<br>車検：平成30年3月17日</p>
        </div>
        <div class="boxcar">
            <div class="img">
                <img src="{{url('')}}/images/company/imdemo.png" alt="通常相場：120万円">
                <div class="price">
                    <p class="pricecar">164万円</p><span>で買取！</span>
                </div>
            </div>
            <p class="text_bold text_right txt_red fontshin">通常相場：120万円</p>
            <h4 class="fontshin">ホンダ インテグラ タイプS</h4>
            <p>年式：平成17年/型式tDC5/<br>走行距離：90,000km/<br>車検：平成30年3月17日</p>
        </div>
        <div class="boxcar">
            <div class="img">
                <img src="{{url('')}}/images/company/imdemo.png" alt="通常相場：120万円">
                <div class="price">
                    <p class="pricecar">164万円</p><span>で買取！</span>
                </div>
            </div>
            <p class="text_bold text_right txt_red fontshin">通常相場：120万円</p>
            <h4 class="fontshin">ホンダ インテグラ タイプS</h4>
            <p>年式：平成17年/型式tDC5/<br>走行距離：90,000km/<br>車検：平成30年3月17日</p>
        </div>
        <div class="boxcar">
            <div class="img">
                <img src="{{url('')}}/images/company/imdemo.png" alt="通常相場：120万円">
                <div class="price">
                    <p class="pricecar">164万円</p><span>で買取！</span>
                </div>
            </div>
            <p class="text_bold text_right txt_red fontshin">通常相場：120万円</p>
            <h4 class="fontshin">ホンダ インテグラ タイプS</h4>
            <p>年式：平成17年/型式tDC5/<br>走行距離：90,000km/<br>車検：平成30年3月17日</p>
        </div>
        <div class="boxcar">
            <div class="img">
                <img src="{{url('')}}/images/company/imdemo.png" alt="通常相場：120万円">
                <div class="price">
                    <p class="pricecar">164万円</p><span>で買取！</span>
                </div>
            </div>
            <p class="text_bold text_right txt_red fontshin">通常相場：120万円</p>
            <h4 class="fontshin">ホンダ インテグラ タイプS</h4>
            <p>年式：平成17年/型式tDC5/<br>走行距離：90,000km/<br>車検：平成30年3月17日</p>
        </div>
        <div class="boxcar">
            <div class="img">
                <img src="{{url('')}}/images/company/imdemo.png" alt="通常相場：120万円">
                <div class="price">
                    <p class="pricecar">164万円</p><span>で買取！</span>
                </div>
            </div>
            <p class="text_bold text_right txt_red fontshin">通常相場：120万円</p>
            <h4 class="fontshin">ホンダ インテグラ タイプS</h4>
            <p>年式：平成17年/型式tDC5/<br>走行距離：90,000km/<br>車検：平成30年3月17日</p>
        </div>
    </article>
</section>
<p class="text_center arrbg"><img src="{{url('')}}/images/company/arr_sp.png" alt="arrow"></p>
<!-- end content_secon -->
<article>
    <form method="post" id="IdCompany_2">
    <div class="boxtop2">
        <div class="inbox">
            <table class="tbstyle">
                <tr>
                    <th>会社名 <span class="hinsu">必須</span></th>
                    <td><input type="text" value="" name="company_name" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th>ご担当者 <span class="hinsu">必須</span></th>
                    <td><input type="text" value="" name="contact_name" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th>電話番号 <span class="hinsu">必須</span></th>
                    <td><input type="text" value="" name="phone" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th>メールアドレス <span class="hinsu">必須</span></th>
                    <td><input type="text" value="" name="email" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
            </table>
        </div>
        <div class="text_center"><p class="btndk"><button type="submit" style="padding:0; border: none;cursor: pointer;"><img src="{{url('images/company/btn1.png')}}" alt="無料登録をする"></button></p></div>
    </div>
    </form>
    <div class="boxtel">
        <h3 class="text_bold fontyu text_center">サービス内容に関してご不明点がございましたら、<span>お電話またはメールにてお問合わせください。</span></h3>
        <div class="flexrowbetween">
            <h4><img src="{{url('')}}/images/common_img/logobox.jpg" alt="スマオク"></h4>
            <div class="tel">
                <p class="dis_pc lh00"><img src="{{url('')}}/images/common_img/txttel.jpg" alt="tel:06-7670-7744"></p>
                <p class="dis_sp lh00"><a href="tel:06-7670-7744"><img src="{{url('')}}/images/common_img/txttel.jpg" alt="tel:06-7670-7744"></a></p>
                <p class="txt">営業時間：9：00～18：00(月～金)</p>
            </div>
        </div>
    </div>
</article>
<!-- end content_secon -->
<h2 class="text_center bgtit4 dis_pc lh00"><img src="{{url('')}}/images/company/tit4.png" alt="スマオク！プレオープン時お客様の声"></h2>
<h2 class="text_center bgtit4 dis_sp lh00"><img src="{{url('')}}/images/company/tit4_sp.png" alt="スマオク！プレオープン時お客様の声"></h2>
<p class="dis_sp lh00"><img src="{{url('')}}/images/company/bgline4_sp.png" alt=""></p>
<section class="section4">
    <article class="flexrowbetween">
        <div class="boxperson">
            <img src="{{url('')}}/images/company/per1.png" alt="">
            <h4 class="fontshin">大阪市　30代　女性 </h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="boxperson">
            <img src="{{url('')}}/images/company/per2.png" alt="">
            <h4 class="fontshin">大阪市　20代　女性 </h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="boxperson">
            <img src="{{url('')}}/images/company/per3.png" alt="">
            <h4 class="fontshin">大阪市　30代　女性 </h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="boxperson">
            <img src="{{url('')}}/images/company/per4.png" alt="">
            <h4 class="fontshin">大阪市　20代　女性 </h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
    </article>
</section>
<!-- end content_secon -->
<h2 class="text_center bgtit5 lh00"><img src="{{url('')}}/images/company/tit5.png" alt="よくあるご質問"></h2>
<p class="dis_sp lh00"><img src="{{url('')}}/images/company/bgline5_sp.png" alt=""></p>
<section class="section5">
    <article class="flexrowbetween">
        <dl class="boxfaq">
            <dt class="ac_title">質門が入ります？</dt>
            <dd class="ac_con">テキストが入ります。が入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl class="boxfaq">
            <dt class="ac_title">質門が入ります？</dt>
            <dd class="ac_con">テキストが入ります。が入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl class="boxfaq">
            <dt class="ac_title">質門が入ります？</dt>
            <dd class="ac_con">テキストが入ります。が入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl class="boxfaq">
            <dt class="ac_title">質門が入ります？</dt>
            <dd class="ac_con">テキストが入ります。が入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl class="boxfaq">
            <dt class="ac_title">質門が入ります？</dt>
            <dd class="ac_con">テキストが入ります。が入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
    </article>
</section>
<p class="text_center arrbg"><img src="{{url('')}}/images/company/arr2_sp.png" alt="arrow"></p>
<!-- end content_secon -->
<article>
    <form method="post" id="IdCompany_3">
        <div class="boxtop2">
            <div class="inbox">
                <table class="tbstyle">
                    <tr>
                        <th>会社名 <span class="hinsu">必須</span></th>
                        <td><input type="text" value="" name="company_name" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                    </tr>
                    <tr>
                        <th>ご担当者 <span class="hinsu">必須</span></th>
                        <td><input type="text" value="" name="contact_name" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                    </tr>
                    <tr>
                        <th>電話番号 <span class="hinsu">必須</span></th>
                        <td><input type="text" value="" name="phone" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                    </tr>
                    <tr>
                        <th>メールアドレス <span class="hinsu">必須</span></th>
                        <td><input type="text" value="" name="email" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                    </tr>
                </table>
            </div>
            <div class="text_center"><p class="btndk"><button type="submit" style="padding:0; border: none;cursor: pointer;"><img src="{{url('images/company/btn1.png')}}" alt="無料登録をする"></button></p></div>
        </div>
    </form>
    <div class="boxtel">
        <h3 class="text_bold fontyu text_center">サービス内容に関してご不明点がございましたら、<span>お電話またはメールにてお問合わせください。</span></h3>
        <div class="flexrowbetween">
            <h4><img src="{{url('')}}/images/common_img/logobox.jpg" alt="スマオク"></h4>
            <div class="tel">
                <p class="dis_pc lh00"><img src="{{url('')}}/images/common_img/txttel.jpg" alt="tel:06-7670-7744"></p>
                <p class="dis_sp lh00"><a href="tel:06-7670-7744"><img src="{{url('')}}/images/common_img/txttel.jpg" alt="tel:06-7670-7744"></a></p>
                <p class="txt">営業時間：9：00～18：00(月～金)</p>
            </div>
        </div>
    </div>
</article>
@endsection
@section('script')
<script src="{{url('js/common.js')}}" type="text/javascript"></script>
<script src="{{url('js/company/company.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function() {
        var viewportWidth = $(window).width();
        if (viewportWidth < 769) {
            $(".boxfaq dt").addClass("ac_title");
            $(".boxfaq dd").addClass("ac_con");
        } else {
            $(".boxfaq dt").removeClass("ac_title");
            $(".boxfaq dd").removeClass("ac_con");
        }
    });
</script>
@endsection