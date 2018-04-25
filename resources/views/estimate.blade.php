@extends('master')
@section('content')
<body id="wrapper" class="layoutsp">
<header>
    <div class="main clearfix">
        <div class="flexrowbetween">
            <div class="logo"><a href="{{ url('') }}"><img src="{{url('')}}/images/estimate/logo.png" alt="スマオク ユーザ直取引プロ査定員査定"></a></div>
            <div class="txt_right lhnm">
                <p class="text_right">お電話での価格チェックを<span>ご希望の方</span></p>
                <p class="text_bold btntel"><a href="tel:06-7670-7744">06-7670-7744</a></p>
            </div>
        </div>
    </div>
</header>
<!-- End Top-->
<section>
    <article class="assessor estimate">
        <form id="RegisterEstimate">
            <meta name="csrf-token" content="{{ csrf_token() }}">
         {{ csrf_field() }}
        <ul class="crumb">
            <li class="home"><a href="{{ url('') }}">TOP</a></li>
            <li>想定価格</li>
        </ul>
        <div class="boxtop">
            <div class="txt">
                <p>メーカー：トヨタ</p>
                <p>年　　式：平成17年式</p>
                <p>グレード：GT</p>
            </div>
            <div class="txt">
                <p>車　　種：アリスト</p>
                <p>走行距離：90,000km/</p>
                <p>車検：平成30年3月17日</p>
            </div>
        </div>
        <div class="boxtxtinfo text_center">
            <h5 class="text_bold">お客様の愛車の想定価格は・・・</h5>
            <h6 class="price text_bold txt_red">￥1,200,000  ～ ￥1,500,000</h6>
            <p>※表示しております想定価格は、市場での実際の取引額に基づき、弊社が試算しております。<br>そのため、この価格での売却を保証するものではございません。</p>
            <p class="txt_red mt3per">実際の価格は想定価格より、高くなることも低くなることもございますので、各社の査定額をぜひお確かめください。</p>
        </div>
        
        <!-- Hiển thị khi chiếc xe tương ứng không tồn tại -->
        <div class="boxalert">
            <img src="{{ url('images/estimate/imgperson.png') }}" alt="">
            <p class="txt_red text_center">登録いただいた条件で一致する想定価格は見つかりませんでした。<br>想定価格につきましては、運営事務局からのご連絡をお待ちください。</p>
        </div>
        <!-- Hiển thị khi chiếc xe tương ứng không tồn tại -->
        
        <!-- <h3 class="mt8per"><img src="./images/estimate/imgtxt1.png" alt="ところで、スマオク！なら・・・"></h3>
        <div class="clearfix boxtxtinfo2">
            <img src="./images/estimate/img.png" alt="専門業者が”オークション”式で金額をつけるため、想定価格以上の金額がつく場合も！！" class="pull_left w40 mr3per">
            <div class="txt">
                <h4 class="text_bold txt_red">専門業者が”オークション”式で金額をつけるため、想定価格以上の金額がつく場合も！！</h4>
                <div class="dis_pc">
                    <p>●複数の専門業者がオークション形式でお客様の愛車に価格をつけます</p>
                    <p>●各業者からは営業電話はかかってきませんので安心ください</p>
                </div>
            </div>
        </div>
        <div class="dis_sp">
            <p>●複数の専門業者がオークション形式でお客様の愛車に価格をつけます</p>
            <p>●各業者からは営業電話はかかってきませんので安心ください</p>
        </div> -->
        
        
        <h3 class="mt8per w100per"><img src="{{ url('images/estimate/imgtxt3.png') }}" alt="だったら・・・登録簡単！！　完全無料！！スマオク！に出品して各社の買取金額を確認するしかない！" class="w100per"></h3>
        
        <div class="clearfix boxboder mt6per">
            <div class="clearfix">
                <div class="pull_left w48">
                    <h4 class="text_center"><img src="{{ url('images/estimate/txtbtn1.png') }}" alt="完全無料！！　3STEPで申込完了！！"></h4>
                    <p class="text_center w96"><a href="#"><img src="./images/estimate/btn1a.png" alt="登録代行サービスを利用して申し込む"></a></p>

                </div>
                <div class="pull_right w48">
                    <h4 class="text_center"><img src="{{ url('images/estimate/txtbtn2.png') }}" alt="簡単登録！！　5STEPで直ぐにオークション開始"></h4>
                    <p class="text_center w96"><a href="{{ url('assessor') }}"><img src="{{ url('images/estimate/btn2a.png') }}" alt="ご自身で車両情報を登録して申し込む"></a></p>
                </div>
            </div>
            <p class="mt2per">※地域や日程によっては登録代行サービスをお申込みいただけない場合がございます。予めご了承ください。</p>
        </div>
        
        <!-- <div class="txtlineyl"><h4 class="text_bold txt_red">完全無料！！　3STEPで申込完了！！</h4></div>
        <p class="text_center mt2per"><a href="#"><img src="./images/estimate/btn1.png" alt="登録代行サービスを利用して申し込む"></a></p>
        <p class="text_center">※地域や日程によっては登録代行サービスをお申込みい<br>ただけない場合がございます。予めご了承ください。</p>
        <div class="txtlinebl"><h4 class="text_bold">簡単登録！！　5STEPで直ぐにオークション開始</h4></div>
        <p class="text_center mt2per"><a href="../assessor/"><img src="./images/estimate/btn2.png" alt="ご自身で車両情報を登録して申し込む"></a></p> -->
        
        <div class="boxstep boxstep1 mt8per">
            <div class="titline1 titline2">
                <h3 class="fontyu"><span class="text_bold colop">STEP1</span> お車を置かれている場所を登録する</h3>
            </div>
            <p class="mb20">郵便番号または都道府県・市町村を登録して下さい</p>
            <table class="tbstep1">
                <tr>
                    <th class="pl00">郵便番号：</th>
                    <td><input type="text" value="" name="zip_code1" id="zip_code1" size="" tabindex="" accesskey="" placeholder="例）112-2222"></td>
                </tr>
                <tr>
                    <th class="pl00">都道府県：</th>
                    <td>
                        <select name="zone1" id="zone1">
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="pl00">市町村：</th>
                    <td>
                        <select name="erea1" id="erea1">
                            
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="boxstep">
            <div class="titline1 titline2">
                <h3 class="fontyu"><span class="text_bold colop">STEP2</span> 登録代行サービスの種類を選択する</h3>
            </div>
            <p><label><input type="radio" name="step2">出張登録代行サービスを申し込む（※お客様のご自宅まで担当者が伺います）</label></p>
            <p class="mt3per"><label><input type="radio" name="step2">持込登録代行サービスを申し込む（※お近くの加盟店までお客様自身でお車をお持ちこんでいただきます）</label></p>
        </div>
        
        <div class="boxstep boxstep3">
            <div class="titline1 titline2">
                <h3 class="fontyu"><span class="text_bold colop">STEP3</span> 希望日を登録する</h3>
            </div>
            <table class="tbstep1 tbsteptime">
                <tr>
                    <th class="pl00 vertitop">・第1希望日：[年月日]</th>
                    <td>
                        <ul class="flexrowbetween daytime">
                            <li>
                                <select name="year1" id="year1">
                                    
                                </select> 年
                            </li>
                            <li>
                                <select name="month1" id="month1">
                                    
                                </select> 月
                            </li>
                            <li>
                                <select name="date1" id="date1">
                                    
                                </select> 日
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="text_right vertitop">[時間帯]</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" id="" name="time1" tabindex="" accesskey=""><span>指定なし</span></label>
                        <label><input type="radio" value="" class="time1" tabindex="" accesskey="" name="time1"><span>9:00～12:00</span></label>
                        <label><input type="radio" value="" class="time1" tabindex="" accesskey="" name="time1"><span>12:00～15:00</span></label>
                        <label><input type="radio" value="" class="time1" tabindex="" accesskey="" name="time1"><span>15:00～18:00</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th class="pl00 vertitop">・第2希望日：[年月日]</th>
                    <td>
                        <ul class="flexrowbetween daytime">
                            <li>
                                <select name="year2" id="year2">
                                    
                                </select> 年
                            </li>
                            <li>
                                <select name="month2" id="month2">
                                    
                                </select> 月
                            </li>
                            <li>
                                <select name="date2" id="date2">
                                    
                                </select> 日
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="text_right vertitop">[時間帯]</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" id="" name="time2" tabindex="" accesskey=""><span>指定なし</span></label>
                        <label><input type="radio" value="" class="time2" tabindex="" accesskey="" name="time2"><span>9:00～12:00</span></label>
                        <label><input type="radio" value="" class="time2" tabindex="" accesskey="" name="time2"><span>12:00～15:00</span></label>
                        <label><input type="radio" value="" class="time2" tabindex="" accesskey="" name="time2"><span>15:00～18:00</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th class="pl00 vertitop">・第3希望日：[年月日]</th>
                    <td>
                        <ul class="flexrowbetween daytime">
                            <li>
                                <select name="year3" id="year3">
                                    
                                </select> 年
                            </li>
                            <li>
                                <select name="month3" id="month3">
                                    
                                </select> 月
                            </li>
                            <li>
                                <select name="date3" id="date3">
                                    
                                </select> 日
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="text_right vertitop">[時間帯]</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" id="" name="time3" tabindex="" accesskey=""><span>指定なし</span></label>
                        <label><input type="radio" value="" class="time3" tabindex="" accesskey="" name="time3"><span>9:00～12:00</span></label>
                        <label><input type="radio" value="" class="time3" tabindex="" accesskey="" name="time3"><span>12:00～15:00</span></label>
                        <label><input type="radio" value="" class="time3" tabindex="" accesskey="" name="time3"><span>15:00～18:00</span></label>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Hiển thị khi chiếc xe tương ứng không tồn tại -->
        <div class="boxalert">
            <img src="{{ url('images/estimate/imgperson.png') }}" alt="">
            <p class="txt_red text_center">登録いただいた条件で一致する想定価格は見つかりませんでした。<br>想定価格につきましては、運営事務局からのご連絡をお待ちください。</p>
        </div>
        <!-- Hiển thị khi chiếc xe tương ứng không tồn tại -->
        
        <div class="boxstep boxstep1 mt8per">
            <div class="titline1">
                <h3 class="fontyu"><span class="text_bold colop">STEP1</span> お車を置かれている場所を登録する</h3>
            </div>
            <p class="mb20">郵便番号または都道府県・市町村を登録して下さい</p>
            <table class="tbstep1">
                <tr>
                    <th class="pl00">郵便番号：</th>
                    <td><input type="text" value="" name="zip_code2" id="zip_code2" size="" tabindex="" accesskey="" placeholder="例）112-2222"></td>
                </tr>
                <tr>
                    <th class="pl00">都道府県：</th>
                    <td>
                        <select name="zone2" id="zone2">
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="pl00">市町村：</th>
                    <td>
                        <select name="erea2" id="erea2">
                            
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="boxstep">
            <div class="titline1">
                <h3 class="fontyu"><span class="text_bold colop">STEP2</span> お車の写真を撮影する</h3>
            </div>
            <table class="tbstep2">
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera" accept="image/*" capture="camera" class="a" data_name="pre1"/>
                            <label tabindex="0" for="camera" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre1"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera1" accept="image/*" capture="camera" class="a" data_name="pre2"/>
                            <label tabindex="0" for="camera1" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre2"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera2" accept="image/*" capture="camera" class="a" data_name="pre3"/>
                            <label tabindex="0" for="camera2" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre3"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera3" accept="image/*" capture="camera" class="a" data_name="pre4"/>
                            <label tabindex="0" for="camera3" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre4"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera4" accept="image/*" capture="camera" class="a" data_name="pre5"/>
                            <label tabindex="0" for="camera4" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre5"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera5" accept="image/*" capture="camera" class="a" data_name="pre6"/>
                            <label tabindex="0" for="camera5" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre6"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera6" accept="image/*" capture="camera" class="a" data_name="pre7"/>
                            <label tabindex="0" for="camera6" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre7"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera7" accept="image/*" capture="camera" class="a" data_name="pre8"/>
                            <label tabindex="0" for="camera7" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre8"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera8" accept="image/*" capture="camera" class="a" data_name="pre9"/>
                            <label tabindex="0" for="camera8" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre9"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera9" accept="image/*" capture="camera" class="a" data_name="pre10"/>
                            <label tabindex="0" for="camera9" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre10"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera10" accept="image/*" capture="camera" class="a" data_name="pre11"/>
                            <label tabindex="0" for="camera10" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre11"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera11" accept="image/*" capture="camera" class="a" data_name="pre12"/>
                            <label tabindex="0" for="camera11" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre12"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera12" accept="image/*" capture="camera" class="a" data_name="pre13"/>
                            <label tabindex="0" for="camera12" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre13"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera13" accept="image/*" capture="camera" class="a" data_name="pre14"/>
                            <label tabindex="0" for="camera13" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre14"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera14" accept="image/*" capture="camera" class="a" data_name="pre15"/>
                            <label tabindex="0" for="camera14" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre15"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera15" accept="image/*" capture="camera" class="a" data_name="pre16"/>
                            <label tabindex="0" for="camera15" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre16"></span>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="boxstep">
            <div class="titline1">
                <h3 class="fontyu"><span class="text_bold colop">STEP3</span> 車検証を撮影して登録する</h3>
            </div>
            <table class="tbstep2">
                <tr>
                    <th class="vertitop"><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera16" accept="image/*" capture="camera" name="license_drive" class="a" data_name="pre17"/>
                            <label tabindex="0" for="camera16" class="input-camera">クリックして撮影</label>
                        </p>
                        <span class="preview-pre17"></span>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="boxstep">
            <div class="titline1">
                <h3 class="fontyu"><span class="text_bold colop">STEP4</span> 車の状態を登録する</h3>
            </div>
            <table>
                <tr>
                    <th><span class="hinsu">必須</span> 走行距離</th>
                    <td><input class="w60per" type="text" value="" name="mileage" id="mileage" size="" tabindex="" accesskey="" placeholder=""> km</td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 保証書</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" class="issue" name="issue" tabindex="" accesskey=""><span>可</span></label>
                        <label><input type="radio" value="" class="issue" name="issue" tabindex="" accesskey=""><span>不可</span></label>
                        <label><input type="radio" value="" class="issue" name="issue" tabindex="" accesskey=""><span>未確認</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> メータ交換履歴</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" class="issue1" name="issue1" tabindex="" accesskey=""><span>有</span></label>
                        <label><input type="radio" class="issue1" id="" name="issue1" tabindex="" accesskey=""><span>無</span></label>
                        <label><input type="radio" class="issue1" id="" name="issue1" tabindex="" accesskey=""><span>不明</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 事故歴</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" class="issue2" name="issue2" tabindex="" accesskey=""><span>有</span></label>
                        <label><input type="radio" value="" class="issue2" name="issue2" tabindex="" accesskey=""><span>無</span></label>
                        <label><input type="radio" value="" class="issue2" name="issue2" tabindex="" accesskey=""><span>不明</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">外装の状態<br>（キズやヘコミ、塗装はげ、錆など）</span></th>
                    <td><input type="text" value="" name="status" id="status" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">内装の状態<br>（シミやシート破れ、エアコン、オーディオ故障な）</span></th>
                    <td><input type="text" value="" name="condition" id="condition" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th class="pos"><span class="ninni">任意</span> <span class="txtspan">セールスポイント／注意事項／その他情報</span></th>
                    <td><input type="text" value="" name="" id="info_diff" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <!-- <tr>
                    <th><span class="ninni">任意</span> <span class="txtspan">備考</span></th>
                    <td><input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr> -->
            </table>
        </div>
        
        <div class="boxstep boxstep5">
            <div class="titline1">
                <h3 class="fontyu"><span class="text_bold colop">STEP5</span> オークション情報を登録する</h3>
            </div>
            <table>
                <tr>
                    <th><span class="hinsu">必須</span> 最低希望価格</th>
                    <td>
                        <input type="text" value="" name="minimum_price" id="minimum_price" size="" tabindex="" accesskey="" placeholder="" class="w60per"> 円
                    </td>
                </tr>
                <tr>
                    <th class="pos"><span class="ninni">必須</span> <span class="txtspan">オークション終了希望日時</span></th>
                    <td>
                        <ul class="flexrowbetween daytime">
                            <li>
                                <select name="" id="yeartime">
                                    
                                </select> 年
                            </li>
                            <li>
                                <select name="" id="monthtime">
                                    
                                </select> 月
                            </li>
                            <li>
                                <select name="" id="datetime">
                                    
                                </select> 日
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="titpen"><h3 class="fontyu">利用規約</h3></div>
        <div class="boxtxt">
            <p class="text_justify">テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。</p>
        </div>
        
        <div class="titpen"><h3 class="fontyu">個人情報の取扱</h3></div>
        <div class="boxtxt">
            <p class="text_justify">テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。テキスチが入ります。</p>
        </div>
        
        <p class="text_center"><label><input type="checkbox" name="accept" id="accept">上記、利用規約および個人情報の取扱について確認しました。</label></p>
        <div class="btnbtom-estimate text_center"><button type="submit" id="submit" class="btnbtom-estimate" style="padding:0; border: none;  margin:1.5% 0; color: #fff; font-weight: bold">上記利用規約および個人情報の取扱に同意して<span>サービスを利用する</span></button></div>
        <!-- end clearfix -->
        </form>
    </article>
</section>
<script src="{{url('js/estimate/estimate.js')}}" type="text/javascript"></script>
@endsection
@section('script')
    <script src="{{url('js/common.js')}}" type="text/javascript"></script>
    <script src="{{url('js/tile.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function() {
        var viewportWidth = $(window).width();
        if (viewportWidth < 769) {
            $(".sidebar h3").addClass("ac_title");
            $(".sidebar .textbox").addClass("ac_con");
        } else {
            $(".sidebar h3").removeClass("ac_title");
            $(".sidebar .textbox").removeClass("ac_con");
        }
    });
</script>
    @endsection