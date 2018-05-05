<?php
define('SEO_TITLE','CAR AUCTION');
define('SEO_DESCRIPTION','CAR');
define('SEO_KEYWORDS','CAR');
?>
        <!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8" />
    <title><?php echo SEO_TITLE;?></title>
    <meta name="description" content="<?php echo SEO_DESCRIPTION;?>" />
    <meta name="keywords" content="<?php echo SEO_KEYWORDS;?>" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="format-detection" content="telephone=no" />
    <!-- CSS -->
    <link href="{{url('css/reset.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('css/base.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('css/top.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('css/content.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery-ui-1.10.3.custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/colorbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/teisei.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/body.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/addstyle.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/autocomplete.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/prefSelectExtension.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/mileageSelectExtension.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/hint.css/2.4.1/hint.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/darktooltip.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/lightbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    <!-- JS -->
    <script type="text/javascript">window.jQuery || document.write('<script src="{{ url("js/jquery.min.js") }}"><\/script>')</script><!-- 上記CDNダウン時のフォールバック -->
    <script type="text/javascript" src="{{ url('js/jquery-1.10.2.min.js') }}"></script><!-- jQueryの読み込み -->
</head>
@yield('content')
<footer>
    <div class="main">
        <div class="infoft flexrowbetween">
            <div class="logoft"><a href="{{ url('') }}"><img src="{{url('images/common_img/logoft.png')}}" alt="RAXUS CREATE INC."></a></div>
            <div class="navft">
                <h3 class="fontyu clpage text_bold">株式会社ラグザス・クリエイト</h3>
                <ul>
                    <li><a href="http://raxus-create.co.jp/index.html" target="_blank">コーポレートサイト<span>|</span></a></li>
                    <li><a href="{{ url('') }}">お問い合わせ<span>|</span></a></li>
                    <li><a href="{{url('public/images/kiyaku.pdf')}}" target="_blank">利用規約<span>|</span></a></li>
                    <li><a href="https://www.carnext-auction.com/about/" target="_blank">スマオク！とは</a></li>
                    <li><a href="https://www.carnext-auction.com/About/anti_social" target="_blank">反社会的勢力排除宣言<span>|</span></a></li>
                    <li><a href="https://www.carnext-auction.com/About/law" target="_blank">特定商取引法の表示</a></li>
                </ul>
            </div>
        </div>
        <div class="page_top_cont noselect">
            <div class="page_top">
                <div class="to_top">
                    <a href="#wrapper"><img src="{{ url('images/common_img/pagetop.png') }}" alt="PAGE UP"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p class="text_center fontyu">Copyright(C) RAXUS CREATE INC.</p>
    </div>
</footer>
@yield('script')
<script type="text/javascript" src="{{ url('js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.ui.datepicker-ja.js') }}"></script>
<script type="text/javascript" src="{{ url('js/HolidayChk.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ url('js/jquery.colorbox-min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/prefSelectExtension.js') }}"></script>
<script type="text/javascript" src="{{ url('js/clicktocall.js') }}"></script>
<script type="text/javascript" src="{{ url('js/valueconvertor.js') }}"></script>
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="{{ url('js/jquery.disableOnSubmit.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ url('js/prefSelectExtension.js') }}"></script>
<script type="text/javascript" src="{{ url('js/mileageSelectExtension.js')}}"></script>
<script type="text/javascript" src="{{ url('js/lightbox.js')}}"></script>
<script type="text/javascript" src="{{ url('js/jquery.validate-1.14.0.min.js')}}"></script>
<script type="text/javascript" src="{{ url('js/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{ url('js/jquery-validate.bootstrap-tooltip.js')}}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap-notify.min.js')}}"></script>
</body>
</html>
