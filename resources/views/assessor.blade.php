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
                    <td><input class="w60per" type="text" value="" name="zip_code" id="" size="" tabindex="" accesskey="" placeholder="例）112-2222" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 都道府県</th>
                    <td>
                        <select name="area" id="" class="w60per" required>
                            <option disabled="" selected="" value=""> 都道府県を選択してください </option>
                            <optgroup label="北海道・東北地方">
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                            </optgroup>
                            <optgroup label="関東地方">
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                            </optgroup>
                            <optgroup label="甲信越地方">
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="新潟県">新潟県</option>
                            </optgroup>
                            <optgroup label="東海地方">
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="三重県">三重県</option>
                            </optgroup>
                            <optgroup label="北陸地方">
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                            </optgroup>
                            <optgroup label="近畿地方">
                                <option value="大阪府">大阪府</option>
                                <option value="京都府">京都府</option>
                                <option value="奈良県">奈良県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="兵庫県">兵庫県</option>
                            </optgroup>
                            <optgroup label="中国地方">
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="山口県">山口県</option>
                            </optgroup>
                            <optgroup label="四国地方">
                                <option value="香川県">香川県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                            </optgroup>
                            <optgroup label="九州・沖縄地方">
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="大分県">大分県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 市町村・番地</th>
                    <td><input type="text" value="" name="address" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="ninni">任意</span> 建物・部屋番号</th>
                    <td><input type="text" value="" name="address_1" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> TEL</th>
                    <td><input class="w60per" type="text" value="" name="phone" id="" size="" tabindex="" accesskey="" placeholder="0333334444" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> メール</th>
                    <td><input class="w60per" type="text" value="" name="email" id="" size="" tabindex="" accesskey="" placeholder="例）yamada@smart.com" required></td>
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
                            <label tabindex="0" for="camera1" class="input-camera">クリックして撮影</label>
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
                        <select name="maker" id="" class="w60per" required>
                            <option>Honda</option>
                            <option>Yamaha</option>
                            <option>Huynhdai</option>
                            <option>BMW</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車種名</th>
                    <td>
                        <select name="model_name" id="" class="w60per" required>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 年式</th>
                    <td>
                        <select name="model_year" id="" class="w60per" required>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> グレード</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 走行距離</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="" required> km</td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 排気量</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="" required> cc</td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車台番号</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="" required></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 走行状態備考</th>
                    <td><textarea type="text" value="" name="" id="" size="" tabindex="" accesskey="" required></textarea></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 喫煙状況</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" id="" name="issue" tabindex="" accesskey="" checked><span>有</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>不明</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 駆動方式</th>
                    <td>
                        <select name="drive_system" id="" class="w60per">
                            <option value="0">2WD (FF / FR 等) </option>
                            <option value="1">4WD (AWD) </option>
                            <option value="2">不明</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> エンジン型式</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 型式指定番号</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 累計区分番号</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> <span>トランスミッション</span></th>
                    <td>
                        <select name="transmission" id="" class="w60per">
                            <option value="0">AT (CVT) </option>
                            <option value="1">MT</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> ハンドル</th>
                    <td>
                        <select name="handle" id="" class="w60per">

                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 乗車定員数</th>
                    <td>
                        <select name="drive_system" id="" class="w60per">
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 燃料</th>
                    <td>
                        <select name="fuel" id="" class="w60per" required>
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
                        <p class="radio"><label><input type="radio" value="" id="" name="issue" tabindex="" accesskey="" checked><span>有</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>不明</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車両番号</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> リサイクル料金</th>
                    <td><input class="w60per" type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""> 円</td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 保証書</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>有</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>未確認</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 点検記録簿</th>
                    <td>
                        <p class="radio"><label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>有</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>未確認</span></label></p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 車歴</th>
                    <td>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>自家用</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>事業用</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>レンタル</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>未確認</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th class="vertitop pos"><span class="hinsu">必須</span> <span class="txtspan">装備品<br>（オプション等）</span></th>
                    <td>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>エアコン</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>パワステ</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>パワーウィンドウ</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>集中ドアロック</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>ABS</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>エアバッグ</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>ETC</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>キーレスエントリー</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>スマートキー</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>CD</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>MD</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>DVDビデオ</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>テレビ</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>ナビゲーション</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>バックカメラ</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>電動スライドドア</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>サンルーフ</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>本革シート</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>純正エアロパーツ</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>純正アルミホイール</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>横滑り防止装置</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>トラクションコントロール</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>寒冷地仕様車</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>福祉車両</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>ローダウン</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>禁煙車</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>ペット同乗歴なし</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>限定車</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>取扱説明書</span></label>
                        </p>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>新車時保証書</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>スペアタイヤ</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> <span class="txtspan">エアコン</span></th>
                    <td>
                        <p class="radio">
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>無</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>オート</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>マニュアル</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>故障</span></label>
                            <label><input type="radio" value="" id="" name="issue" tabindex="" accesskey=""><span>不明</span></label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">装備品（オプション等）備考</span></th>
                    <td class="vertitop"><input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">外装の状態（キズやヘコミ、塗装はげ、錆など）</span></th>
                    <td class="vertitop"><input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th class="pos"><span class="hinsu">必須</span> <span class="txtspan">内装の状態（シミやシート破れ、エアコン、オーディオ故障など）</span></th>
                    <td class="vertitop"><input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
                </tr>
                <tr>
                    <th class="vertitop"><span class="hinsu">必須</span> 評価点</th>
                    <td>
                        <ul class="flexrowbetween">
                            <li>総合<input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="">点</li>
                            <li>外装<input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="">点</li>
                            <li>内装<input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="">点</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th><span class="hinsu">必須</span> 評価者コメント</th>
                    <td><input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder=""></td>
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
                        <input type="text" value="" name="" id="" size="" tabindex="" accesskey="" placeholder="" class="w60per"> 円
                    </td>
                </tr>
                <tr>
                    <th class="vertitop pos"><span class="ninni">必須</span> <span class="txtspan">オークション終了希望日時</span></th>
                    <td>
                        <ul class="flexrowbetween daytime">
                            <li>
                                <select name="year_end" id="year_end">

                                </select> 年
                            </li>
                            <li>
                                <select name="month_end" id="month_end">

                                </select> 月
                            </li>
                            <li>
                                <select name="date_end" id="date_end">

                                </select> 日
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <div class="btnbtom">
        <button id="submit" class="btnbtom" >登録する</button>
        </div>
        <!-- end clearfix -->
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