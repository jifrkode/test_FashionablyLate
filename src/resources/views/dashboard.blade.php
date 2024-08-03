@extends('layouts.common')
<style>
    .modal {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        width: 40vw;
        max-width: 40%;
        height: 90vw;
        max-height: 90vh;
        gap: 0px;
        border: 1px 0px d0px 0px;
        opacity: 0px;

        border: 1px solid rgba(139, 121, 105, 1);
        box-shadow: 4px 4px 4px 0px rgba(139, 121, 105, 0.25);
        background-color: #FFFFFF;
    }

    .content {
        justify-content: center;
        margin: 0 auto;
        width: 1185px;
    }

    input,
    select {
        height: 50px;

        border: 1px 0px 0px 0px;
    }

    select {
        -webkit-appearance: none;
        appearance: none;
        padding: 5px;
    }


    .content__search--item-searchbox input {
        width: 347.47px;
        border: 1px solid rgba(227, 222, 217, 1);
        background: rgba(244, 244, 244, 1);
    }

    .content__search {
        display: flex;
        justify-content: space-between;
        height: 50px;

        border: 1px 0px 0px 0px;

        text-align: center;
    }

    .content__search--item-cal input {
        width: 148.87px;
        font-family: Inika;
        font-size: 17px;
        font-weight: 400;
        line-height: 22.15px;
        text-align: center;
        color: rgba(139, 121, 105, 1);

        border: 1px solid rgba(227, 222, 217, 1);
        background: rgba(244, 244, 244, 1);
    }

    .content__search--item-categories,
    .content__search--item-gender {
        position: relative;
    }

    .content__search--item-categories select {
        width: 223.04px;
        font-family: Inika;
        font-size: 17px;
        font-weight: 400;
        line-height: 22.15px;
        text-align: left;
        color: rgba(139, 121, 105, 1);

        border: 1px solid rgba(227, 222, 217, 1);
        background: rgba(244, 244, 244, 1);
    }

    .content__search--item-gender select {
        width: 102.48px;

        font-family: Inika;
        font-size: 17px;
        font-weight: 400;
        line-height: 22.15px;
        text-align: left;
        color: rgba(139, 121, 105, 1);

        border: 1px solid rgba(227, 222, 217, 1);
        background: rgba(244, 244, 244, 1);
    }

    .content__search--item-categories::after,
    .content__search--item-gender::after {
        content: "";
        position: absolute;
        top: 19px;
        right: 5px;
        border-right: 12px solid transparent;
        border-left: 12px solid transparent;
        border-top: 12px solid #E0DFDE;
        ;
        border-bottom: 0;
    }

    button.contact-form__button-search {
        width: 102.48px;
        height: 50px;
        border: 1px 0px 0px 0px;
        background: #82756A;
        border: 1px solid #8B7969;
        font-family: Inika;
        font-size: 18px;
        font-weight: 400;
        line-height: 23.45px;
        text-align: center;
        color: #FFFFFF;
    }

    button.contact-form__button-reset {
        width: 102.48px;
        height: 50px;
        border: 1px 0px 0px 0px;
        background: #D9C6B5;
        border: 1px solid #D9C6B5;
        font-family: Inika;
        font-size: 18px;
        font-weight: 400;
        line-height: 23.45px;
        text-align: center;
        color: #FFFFFF;

    }

    .content__func {
        display: flex;
        justify-content: space-between;
        height: 40px;
        width: 100%;

        margin: 10px auto;
    }

    .searchbox {
        border: 1px solid rgba(227, 222, 217, 1);
        width: 347.47px;
        height: 50px;
    }

    button.contact-func--export {
        width: 148px;
        height: 39px;

        padding: 8px 20px;
        color: rgba(139, 121, 105, 1);
        background: rgba(225, 219, 214, 0.6);
        border: none;
    }

    .content__func--pagenate {}


    table {
        table-layout: fixed;
        /* table要素に指定することで、幅を固定 */
        width: 100%;
        border-collapse: collapse;
        /* セル間のスペースを消す */
        border: none;
    }

    .content__table {
        display: flex;
        justify-content: center;

        margin: 0 auto;
        min-width: 1185px;
    }

    th {
        background: rgba(139, 121, 105, 1);
        color: white;
        padding: 5px 40px;

        height: 60px;

        font-family: Inika;
        font-size: 20px;
        font-weight: 700;
        line-height: 26.06px;
        text-align: left;

    }

    th:nth-child(1) {
        width: 200px;
        /* 各列の幅を調整 */
    }

    th:nth-child(2) {
        width: 200px;
    }

    th:nth-child(3) {
        width: 200px;
    }

    th:nth-child(4) {
        width: 385px;
    }

    th:nth-child(5) {
        width: 200px;
        /* 残りの幅をこの列に割り当て */
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        padding: 25px 40px;
        text-align: center;
    }
</style>
@section('page', 'admin')

@section('content')
<div class="content">
    <h2 class="content__title">Admin</h2>
    <form action="/contact" method="get">
        @csrf
        <div class="content__search">
            <div class="content__search--item-searchbox">
                <input type="text" placeholder="名前やメールアドレスを入力してください">
            </div>
            <div class="content__search--item-gender">
                <select name="gender">
                    <option value="" disabled selected>性別</option>
                    <option value="male" {{ old('detail') == '男性' ? 'selected' : '' }}>男性</option>
                    <option value="female" {{ old('detail') == '女性' ? 'selected' : '' }}>女性</option>
                    <option value="other" {{ old('detail') == 'その他' ? 'selected' : '' }}>その他</option>
                </select>
            </div>
            <div class="content__search--item-categories">
                <select name="detail">
                    <option value="" disabled selected>お問い合わせの種類</option>
                    <option value="商品のお届け" {{ old('detail') == '商品のお届け' ? 'selected' : '' }}>1. 商品のお届けについて</option>
                    <option value="商品の交換" {{ old('detail') == '商品の交換' ? 'selected' : '' }}>2. 商品の交換について</option>
                    <option value="商品トラブル" {{ old('detail') == '商品トラブル' ? 'selected' : '' }}>3. 商品トラブル</option>
                    <option value="ショップへのお問い合わせ" {{ old('detail') == 'ショップへのお問い合わせ' ? 'selected' : '' }}>4. ショップへのお問い合わせ</option>
                    <option value="その他" {{ old('detail') == 'その他' ? 'selected' : '' }}>5. その他</option>
                </select>
            </div>
            <div class="content__search--item-cal">
                <input type="date">
            </div>
            <button class="contact-form__button-search" type="submit">検索</button>
            <button class="contact-form__button-reset" type="button">リセット</button>
    </form>
</div>
<div class="content__func">
    <button class="contact-func--export" type="submit">エクスポート</button>
    <div class="content__func--pagenate">
        <p>
            pagenation
        </p>
    </div>
</div>
<table class="content__table">
    <tr>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>お問い合わせの種類</th>
        <th></th>
    </tr>
    <tr>
        <td>くろす</td>
        <td>男</td>
        <td>kurosu@email</td>
        <td>カテゴリ</td>
        <td>
            <x-guest-layout>
                @livewire('modal')
            </x-guest-layout>
        </td>
    </tr>
</table>
</div>
@endsection