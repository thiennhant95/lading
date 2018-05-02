@extends('master')
@section('content')
<body id="wrapper" class="layoutsp">
<header>
    <div class="w100per"><a href="../"><img src="{{url('')}}/images/assessor/logotop.png" alt="スマオク ユーザ直取引プロ査定員査定"></a></div>
</header>
<section>
    <form method="post" id="AssessorId" action="">
    <article class="assessor">
        <ul class="crumb">
            <li class="home"><a href="../">TOP</a></li>
            <li>査定員査定</li>
        </ul>
        <div class="boxstep boxstep1">
            <div class="titline1">
                <h3 class="fontyu"><span class="text_bold colop">STEP1</span> お客さま情報を登録する</h3>
            </div>
            <table class="tbstep1">
                <tr>
                    <th><span class="hinsu">必須</span> 名前</th>
                    <td><input class="w60per" type="text" value="" name="name" id="" size="" tabindex="" accesskey="" placeholder="阿部　薫" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 郵便番号</th>
                    <td><input class="w60per" type="text" value="<?php if (isset($transfer_data_list['step1']['zip_code'])) echo $transfer_data_list['step1']['zip_code']; ?>" name="zip_code" id="zip_code" size="" tabindex="" onblur="AjaxZip3.zip2addr(this, &#039;&#039;, &#039;area&#039;, &#039;address&#039;);" accesskey="" placeholder="例）112-2222" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 都道府県</th>
                    <td>
                        <select name="area" id="area" class="w60per" required>
                            @foreach($list_zone as $key_zone => $zone)
                                <optgroup label="{{ $zone->name }}">
                                    @foreach($list_erea as $key_ereas => $ereas)
                                        @if($zone->id == $ereas->zone_id)
                                            <option value="{{ $ereas->id }}" <?php if ($transfer_data_list['step1']['erea']== $ereas->id) echo 'selected'?>>{{ $ereas->name }}</option>
                                        @endif
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 市町村・番地</th>
                    <td><input type="text" name="address" id="address" size="address" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span> 建物・部屋番号</th>
                    <td><input type="text" value="" name="address_1" id="address_1" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> TEL</th>
                    <td><input class="w60per" type="text" value="" name="phone" id="phone" size="" tabindex="" accesskey="" placeholder="0333334444" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> メール</th>
                    <td><input class="w60per" type="text" value="" name="email" id="email" size="" tabindex="" accesskey="" placeholder="例）yamada@smart.com" required></td>
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
                            <input type="file" id="camera" data_name="pre" name="image_car[]" class="camera" accept="image/*" capture="camera" required/>
                            <label tabindex="0" for="camera" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera1" data_name="pre1" name="image_car[]" class="camera" accept="image/*" capture="camera" required/>
                            <label tabindex="0" for="camera1" class="input-camera" name="">クリックして撮影</label>
                            <input type="hidden" name="image_car1" id="preview_hidden1" value="0" >
                            <span class="preview-pre1"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera2" data_name="pre2" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera2" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre2"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera3" data_name="pre3" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera3" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre3"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera4" data_name="pre4" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera4" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre4"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera5" data_name="pre5" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera5" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre5"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera6" data_name="pre6" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera6" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre6"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera7" data_name="pre7" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera7" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre7"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera8" data_name="pre8" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera8" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre8"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera9" data_name="pre9" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera9" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre9"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera10" data_name="pre10" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera10" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre10"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera11" data_name="pre11" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera11" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre11"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera12" data_name="pre12" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera12" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre12"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera13" data_name="pre13" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera13" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre13"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera14" data_name="pre14" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera14" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre14"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span></th>
                    <td>
                        <p class="flexrowbetween">
                            <input type="file" id="camera15" data_name="pre15" name="image_car[]" class="camera" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera15" class="input-camera">クリックして撮影</label>
                            <span class="preview-pre15"></span>
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
                            <input type="file" id="camera16" data_name="pre16" class="verify_image" name="verify_image" accept="image/*" capture="camera" />
                            <label tabindex="0" for="camera16" class="input-camera">クリックして撮影</label>
                        </p>
                        <span class="preview-pre16"></span>
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
                    <th><span class="hinsu">必須</span> メーカー名</th>
                    <td>
                        <select name="maker" id="infor_maker_id" class="w60per" required>
                            <option value="">----------</option>
                        @foreach($list_maker as $item)
                                <option  value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車種名</th>
                    <td>
                        <select name="model_name" id="infor_car_id" class="w60per" required>
                            <option value="">----------</option>
                            @foreach($list_car as $item)
                                <option  value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 年式</th>
                    <td class="flexrowbetween flex_alignstart flex_aligncenter">

                        <div>
                            <select class="w135" id="infor_car_year_type" name="infor_car_year_type">
                                <option value="H" selected="selected">H</option>
                                <option value="S">S</option>
                            </select>
                        </div>
                        <div class="w20">
                            <input name="infor_car_year" id="infor_car_year" class="w50" type="text" value="" /> 年
                        </div>
                        <div class="w20">
                            <input name="infor_car_month" class="w50" id="infor_car_month" type="text" value="" /> 月
                        </div>
                        <div>
                            <div class="checkbox">
                                <input type="checkbox" name="infor_about_check" id="infor_about_check" value="1" /> くらい
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> グレード</th>
                    <td><input class="w60per" type="text" value="" name="grade" id="grade" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 走行距離</th>
                    <td><input class="w60per" type="text" value="" name="mileage" id="mileage" size="" tabindex="" accesskey="" placeholder="" required> km</td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 排気量</th>
                    <td><input class="w60per" type="text" value="" name="displacement" id="displacement" maxlength="20" size="" tabindex="" accesskey="" placeholder="" required> cc</td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車台番号</th>
                    <td><input class="w60per" type="text" value="" name="chassis_number" id="" maxlength="30" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 走行状態備考</th>
                    <td><textarea type="text" value="" name="driving_remark" id="driving_remark" size="" tabindex="" accesskey="" required></textarea></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 喫煙状況</th>
                    <td>
                        <p class="radio">
                            <label><input type="radio" value="0" id="smoking0" name="smoking" tabindex="" accesskey="" checked><span>有</span></label>
                            <label><input type="radio" value="1" id="smoking1" name="smoking" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="2" id="smoking2" name="smoking" tabindex="" accesskey=""><span>不明</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 駆動方式</th>
                    <td>
                        <select name="drive_system" id="" class="w60per" required>
                            <option value="0">2WD (FF / FR 等) </option>
                            <option value="1">4WD (AWD) </option>
                            <option value="2">不明</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> エンジン型式</th>
                    <td><input class="w60per" type="text" value="" name="engine_model" id="engine_model" size="" maxlength="10" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 型式指定番号</th>
                    <td><input class="w60per" type="text" value="" name="infor_model_number" id="infor_model_number" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 累計区分番号</th>
                    <td><input class="w60per" type="text" value="" name="classification_number" id="classification_number" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> <span>トランスミッション</span></th>
                    <td>
                        <select name="transmission" id="transmission" class="w60per" required>
                            <option value="0">AT (CVT) </option>
                            <option value="1">MT</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> ハンドル</th>
                    <td>
                        <select name="handle" id="handle" class="w60per" required>
                            <option value="1">右</option>
                            <option value="2">左 </option>
                            <option value="3">その他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 乗車定員数</th>
                    <td><input class="w60per" type="text" value="" name="infor_number_passenger" id="infor_number_passenger" size="" tabindex="" accesskey="" placeholder="" required></td>
                    {{--<select name="infor_number_passenger" id="" class="w60per" required>--}}
                            {{--<option value="1">ガソリン</option>--}}
                            {{--<option value="2">ディーゼル </option>--}}
                            {{--<option value="3">ハイブリッド</option>--}}
                            {{--<option value="4">電気自動車</option>--}}
                        {{--</select>--}}
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 燃料</th>
                    <td>
                        <select name="fuel" id="fuel" class="w60per" required>
                            <option value="1">ガソリン</option>
                            <option value="2">ディーゼル </option>
                            <option value="3">ハイブリッド</option>
                            <option value="4">電気自動車</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 事故歴</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" id="" name="infor_accident_repair" tabindex="" accesskey="" checked><span>有</span></label>
                            <label><input type="radio" value="" id="" name="infor_accident_repair" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="" id="" name="infor_accident_repair" tabindex="" accesskey=""><span>不明</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車両番号</th>
                    <td><input class="w60per" type="text" value="" name="infor_vehicle_number" maxlength="20" id="infor_vehicle_number" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> リサイクル料金</th>
                    <td><input class="w60per" type="text" value="" name="recycling_fee" id="recycling_fee"  maxlength="10" size="" tabindex="" accesskey="" placeholder="" required> 円</td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 保証書</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="0" id="" name="infor_written_guarantee" tabindex="" accesskey="" checked><span>有</span></label>
                            <label><input type="radio" value="1" id="" name="infor_written_guarantee" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="3" id="" name="infor_written_guarantee" tabindex="" accesskey=""><span>未確認</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 点検記録簿</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="0" id="" name="infor_record_book" tabindex="" accesskey="" checked><span>有</span></label>
                            <label><input type="radio" value="1" id="" name="infor_record_book" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="2" id="" name="infor_record_book" tabindex="" accesskey=""><span>未確認</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車歴</th>
                    <td>
                        <p class="radio">
                            <label><input type="radio" value="1" id="" name="infor_history" tabindex="" accesskey="" checked><span>自家用</span></label>
                            <label><input type="radio" value="2" id="" name="infor_history" tabindex="" accesskey=""><span>事業用</span></label>
                            <label><input type="radio" value="3" id="" name="infor_history" tabindex="" accesskey=""><span>レンタル</span></label>
                            <label><input type="radio" value="4" id="" name="infor_history" tabindex="" accesskey=""><span>未確認</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th class="vertitop pos"><span class="hinsu">必須</span> <span class="txtspan">装備品<br>（オプション等）</span></th>
                    <td>
                        <p class="radio">
                            <label><input type="radio" value="1" id="" name="equipment_infor" tabindex="" accesskey="" checked><span>エアコン</span></label>
                            <label><input type="radio" value="2" id="" name="equipment_infor" tabindex="" accesskey=""><span>パワステ</span></label>
                            <label><input type="radio" value="3" id="" name="equipment_infor" tabindex="" accesskey=""><span>パワーウィンドウ</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="4" id="" name="equipment_infor" tabindex="" accesskey=""><span>集中ドアロック</span></label>
                            <label><input type="radio" value="5" id="" name="equipment_infor" tabindex="" accesskey=""><span>ABS</span></label>
                            <label><input type="radio" value="6" id="" name="equipment_infor" tabindex="" accesskey=""><span>エアバッグ</span></label>
                            <label><input type="radio" value="7" id="" name="equipment_infor" tabindex="" accesskey=""><span>ETC</span></label>
                            <label><input type="radio" value="8" id="" name="equipment_infor" tabindex="" accesskey=""><span>キーレスエントリー</span></label>
                            <label><input type="radio" value="9" id="" name="equipment_infor" tabindex="" accesskey=""><span>スマートキー</span></label>
                            <label><input type="radio" value="10" id="" name="equipment_infor" tabindex="" accesskey=""><span>CD</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="11" id="" name="equipment_infor" tabindex="" accesskey=""><span>MD</span></label>
                            <label><input type="radio" value="12" id="" name="equipment_infor" tabindex="" accesskey=""><span>DVDビデオ</span></label>
                            <label><input type="radio" value="13" id="" name="equipment_infor" tabindex="" accesskey=""><span>テレビ</span></label>
                            <label><input type="radio" value="14" id="" name="equipment_infor" tabindex="" accesskey=""><span>ナビゲーション</span></label>
                            <label><input type="radio" value="15" id="" name="equipment_infor" tabindex="" accesskey=""><span>バックカメラ</span></label>
                            <label><input type="radio" value="16" id="" name="equipment_infor" tabindex="" accesskey=""><span>電動スライドドア</span></label>
                            <label><input type="radio" value="17" id="" name="equipment_infor" tabindex="" accesskey=""><span>サンルーフ</span></label>
                            <label><input type="radio" value="18" id="" name="equipment_infor" tabindex="" accesskey=""><span>本革シート</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="20" id="" name="equipment_infor" tabindex="" accesskey=""><span>純正エアロパーツ</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="21" id="" name="equipment_infor" tabindex="" accesskey=""><span>純正アルミホイール</span></label>
                            <label><input type="radio" value="22" id="" name="equipment_infor" tabindex="" accesskey=""><span>横滑り防止装置</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="23" id="" name="equipment_infor" tabindex="" accesskey=""><span>トラクションコントロール</span></label>
                            <label><input type="radio" value="24" id="" name="equipment_infor" tabindex="" accesskey=""><span>寒冷地仕様車</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="25" id="" name="equipment_infor" tabindex="" accesskey=""><span>福祉車両</span></label>
                            <label><input type="radio" value="26" id="" name="equipment_infor" tabindex="" accesskey=""><span>ローダウン</span></label>
                            <label><input type="radio" value="27" id="" name="equipment_infor" tabindex="" accesskey=""><span>禁煙車</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="28" id="" name="equipment_infor" tabindex="" accesskey=""><span>ペット同乗歴なし</span></label>
                            <label><input type="radio" value="29" id="" name="equipment_infor" tabindex="" accesskey=""><span>限定車</span></label>
                            <label><input type="radio" value="39" id="" name="equipment_infor" tabindex="" accesskey=""><span>取扱説明書</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="31" id="" name="equipment_infor" tabindex="" accesskey=""><span>新車時保証書</span></label>
                            <label><input type="radio" value="32" id="" name="equipment_infor" tabindex="" accesskey=""><span>スペアタイヤ</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> <span class="txtspan">エアコン</span></th>
                    <td>
                        <p class="radio">
                            <label><input type="radio" value="1" id="" name="infor_air_condition" tabindex="" accesskey="" checked><span>無</span></label>
                            <label><input type="radio" value="2" id="" name="infor_air_condition" tabindex="" accesskey=""><span>オート</span></label>
                            <label><input type="radio" value="3" id="" name="infor_air_condition" tabindex="" accesskey=""><span>マニュアル</span></label>
                            <label><input type="radio" value="4" id="" name="infor_air_condition" tabindex="" accesskey=""><span>故障</span></label>
                            <label><input type="radio" value="5" id="" name="infor_air_condition" tabindex="" accesskey=""><span>不明</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">装備品（オプション等）備考</span></th>
                    <td class="vertitop"><input type="text" value="" name="equipment_infor_remark" id="equipment_infor_remark" size="" tabindex="" accesskey="" placeholder="" maxlength="50" required></td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">外装の状態（キズやヘコミ、塗装はげ、錆など）</span></th>
                    <td class="vertitop"><input type="text" value="" name="infor_condition_exterior" id="infor_condition_exterior" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">内装の状態（シミやシート破れ、エアコン、オーディオ故障など）</span></th>
                    <td class="vertitop"><input type="text" value="" name="infor_state_interior" id="infor_state_interior" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th class="vertitop"><span class="hinsu">必須</span> 評価点</th>
                    <td>
                        <ul class="flexrowbetween">
                            <li>総合<input type="text" value="" name="assessment_synthetic" id="assessment_synthetic" size="" tabindex="" accesskey="" placeholder="" required>点</li>
                            <li>外装<input type="text" value="" name="assessment_exterior" id="assessment_exterior" size="" tabindex="" accesskey="" placeholder="" required>点</li>
                            <li>内装<input type="text" value="" name="assessment_interior" id="assessment_interior" size="" tabindex="" accesskey="" placeholder="" required>点</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 評価者コメント</th>
                    <td><input type="text" value="" name="assessment_comment" id="assessment_comment" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th class="vertitop"><span class="hinsu">必須</span> 査定表</th>
                    <td>
                        <ul class="flexrowbetween">
                            <li class="flexrowbetween posi w48">
                                <input type="file" id="camera17" data_name="pre17" class="evaluation_image" accept="image/*" capture="camera" />
                                <label tabindex="0" for="camera17" class="input-camera mr00">クリックして撮影</label>
                            </li>
                            <li class="flexrowbetween posi w48">
                                <input type="file" id="camera" accept="image/*" capture="camera" />
                                <label tabindex="0" for="camera" class="input-camera mr00">査定表をダウンロード</label>
                            </li>
                        </ul>
                        <span class="preview-pre17"></span>
                    </td>
                </tr>
            </table>
        </div>

        <div class="boxstep boxstep5">
            <div class="titline1">
                <h3 class="fontyu"><span class="text_bold colop">STEP5</span> オークション情報を登録する</h3>
            </div>
            <table>
                <tr>
                    <th class="vertitop"><span class="hinsu">必須</span> 最低希望価格</th>
                    <td>
                        <input type="text" value="" name="reception_minimum_recommend_price" id="reception_minimum_recommend_price" size="" tabindex="" accesskey="" placeholder="" class="w60per" required> 円
                    </td>
                </tr>
                <tr>
                    <?php
                    $year_curent=date("Y");
                    $year= array();
                    for ($i=0;$i<=50;$i++)
                    {
                        $year[]=$year_curent++;
                    }
                    $month= array();
                    for ($i=1;$i<=12;$i++)
                    {
                        $month[]=$i;
                    }
                    $day= array();
                    for ($i=1;$i<=31;$i++)
                    {
                        $day[]=$i;
                    }
                    ?>
                    <th class="vertitop pos"><span class="ninni">必須</span> <span class="txtspan">オークション終了希望日時</span></th>
                    <td>
                        <ul class="flexrowbetween daytime">
                            <li>
                                <select name="year_end" id="year_end" required>
                                    <?php
                                    foreach ($year as $row_year):
                                    ?>
                                    <option value="<?php echo $row_year ?>" <?php if ($row_year==date('Y'))echo "selected" ?>><?php echo $row_year?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select> 年
                            </li>
                            <li>
                                <select name="month_end" id="month_end" required>
                                    <?php
                                    foreach ($month as $row_month):
                                    ?>
                                    <option value="<?php echo $row_month ?>" <?php if ($row_month==date('m'))echo "selected" ?>><?php echo $row_month?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select> 月
                            </li>
                            <li>
                                <select name="day_end" id="day_end" required>
                                    <?php
                                    foreach ($day as $row_day):
                                    ?>
                                    <option value="<?php echo $row_day?>" <?php if ($row_day==date('d'))echo "selected" ?>><?php echo $row_day?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select> 日
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <div class="btnbtom">
        <button id="submit" class="btnbtom submit" >登録する</button>
        </div>
    </article>
    </form>
</section>
@endsection
@section('script')
    <script src="{{url('js/common.js')}}" type="text/javascript"></script>
    <script src="{{url('js/tile.js')}}" type="text/javascript"></script>
    <script src="{{url('js/assessor/assessor.js')}}" type="text/javascript"></script>
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