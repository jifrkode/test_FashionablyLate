@extends('layouts.common')
<style>
  table {
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    text-align: left;
  }

  .contact-form__items {
    align-items: center;
  }

  .contact-form__item--ttl {
    font-family: Inika;
    font-size: 20px;
    font-weight: 400;
    line-height: 26.06px;

    color: rgba(139, 121, 105, 1);

    text-align: left;
    display: inline-block;
  }

  span {
    color: red;
    font-family: Inika;
    font-size: 20px;
    font-weight: 400;
    line-height: 26.06px;
    text-align: left;

  }

  input,
  select,
  textarea {
    background-color: #F4F4F4;
    color: rgba(190, 177, 166, 1);

    font-family: Inika;
    font-size: 14px;
    font-weight: 400;
    line-height: 18.24px;
    text-align: left;

    border: none;
  }

  input::placeholder,
  textarea::placeholder {
    color: rgba(190, 177, 166, 1);
  }

  td {
    width: 620px;
    height: 70px;
  }

  th {
    width: 350px;
    vertical-align: top;
  }

  .contact-form__item-namebox {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .contact-form__item-name {
    width: 287.15px;
    height: 38px;

    padding: 0 0 0 20px;
  }

  .contact-form__item-tellbox {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .contact-form__item-tell {
    width: 178.12px;
    height: 38px;

    text-align: center;
  }

  .contact-form__item-email,
  .contact-form__item-address,
  .contact-form__item-building {
    width: 620px;
    height: 38px;
    margin-right: 50px;

    padding: 0 0 0 20px;
  }

  .contact-form__item-inquiry-kind {
    width: 331.68px;
    height: 38px;

    padding: 0 0 0 20px;
  }

  .contact-form__item-inquiry-content {
    width: 618.82px;
    height: 129px;
    resize: none;

    padding: 10px 0 0 20px;
  }


  .contact-form__item-gender:nth-of-type(2),
  .contact-form__item-gender:nth-of-type(3) {
    margin-left: 35px;
  }

  label {
    font-family: Inika;
    font-size: 18px;
    font-weight: 400;
    line-height: 23.45px;
    text-align: left;

    color: rgba(139, 121, 105, 1);
  }

  input[type="radio"] {
    position: relative;
    width: 20px;
    height: 20px;
    border: none;
    border-radius: 50%;
    vertical-align: -2px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;

    font-family: Inika;
    font-size: 18px;
    font-weight: 400;
    line-height: 23.45px;
    text-align: left;
  }

  input[type="radio"]:checked:before {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: rgba(139, 121, 105, 1);
    content: '';
  }

  .contact-form__button {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  button {
    width: 160px;
    height: 46px;
    padding: 10px 40px 10px 40px;
    gap: 10px;
    background: rgba(130, 117, 106, 1);

    font-family: Inika;
    font-size: 20px;
    font-weight: 400;
    line-height: 26.06px;
    text-align: left;

    border: none;

    color: rgba(255, 255, 255, 1);

    justify-content: center;
    align-items: center;

    margin-top: 50px;
  }
</style>

@section('content')
<div class="content">
  <h2 class="content__title">Contact</h2>
  <form class="contact-form" action="{{ url('/contact') }}" method="post">
    @csrf
    <table class="contact-form__items">
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">お名前 <span class="contact-form__item--ttl-red">※</span></h3>
        </th>
        <td class="contact-form__item-namebox">
          <input class="contact-form__item-name" type="text" placeholder="例:山田" name="last_name" value="{{ old('last_name') }}">
          <input class="contact-form__item-name" type="text" placeholder="例:太郎" name="first_name" value="{{ old('first_name') }}">
        </td>
      </tr>
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">性別 <span class="contact-form__item--ttl-red">※</h3>
        </th>
        <td>
          <input class="contact-form__item-gender" type="radio" name="gender" value="male" checked {{ old('gender') == 'male' ? 'checked' : '' }}>
          <label for="male">男性</label>
          <input class="contact-form__item-gender" type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
          <label for="female">女性</label>
          <input class="contact-form__item-gender" type="radio" name="gender" value="others" {{ old('gender') == 'others' ? 'checked' : '' }}>
          <label for="others">その他</label>
        </td>
      </tr>
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">メールアドレス <span class="contact-form__item--ttl-red">※</h3>
        </th>
        <td>
          <input class="contact-form__item-email" type="text" placeholder="例:test@example.com" name="email" value="{{ old('email') }}">
        </td>
      </tr>
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">電話番号 <span class="contact-form__item--ttl-red">※</h3>
        </th>
        <td class="contact-form__item-tellbox">
          <input class="contact-form__item-tell" type="text" placeholder="080" name="tell1" value="{{ old('tell1') }}">-
          <input class="contact-form__item-tell" type="text" placeholder="1234" name="tell2" value="{{ old('tell2') }}">-
          <input class="contact-form__item-tell" type="text" placeholder="5678" name="tell3" value="{{ old('tell3') }}">
        </td>
      </tr>
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">住所 <span class="contact-form__item--ttl-red">※</h3>
        </th>
        <td>
          <input class="contact-form__item-address" type="text" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" name="address" value="{{ old('address') }}">
        </td>
      </tr>
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">建物名</h3>
        </th>
        <td>
          <input class="contact-form__item-building" type="text" placeholder="例:千駄ヶ谷マンション101" name="building" value="{{ old('building') }}">
        </td>
      </tr>
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">お問い合わせの種類 <span class="contact-form__item--ttl-red">※</span></h3>
        </th>
        <td>
          <select class="contact-form__item-inquiry-kind" name="category_id">
            <option value="" disabled selected>選択してください</option>
            <option value="1" {{ old('detail') == '商品のお届け' ? 'selected' : '' }}>1. 商品のお届けについて</option>
            <option value="2" {{ old('detail') == '商品の交換' ? 'selected' : '' }}>2. 商品の交換について</option>
            <option value="3" {{ old('detail') == '商品トラブル' ? 'selected' : '' }}>3. 商品トラブル</option>
            <option value="4" {{ old('detail') == 'ショップへのお問い合わせ' ? 'selected' : '' }}>4. ショップへのお問い合わせ</option>
            <option value="5" {{ old('detail') == 'その他' ? 'selected' : '' }}>5. その他</option>
          </select>
        </td>
      </tr>
      <tr class="contact-form__item">
        <th>
          <h3 class="contact-form__item--ttl">お問い合わせ <span class="contact-form__item--ttl-red">※</h3>
        </th>
        <td>
          <textarea class="contact-form__item-inquiry-content" placeholder="お問い合わせ内容をご記載ください" name="detail">{{ old('detail') }}</textarea>
        </td>
      </tr>
    </table>
    <div class="contact-form__button">
      <button class="contact-form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
<table>
  @if($errors->has('last_name'))
  <tr>
    <th style="background-color: red">ERROR</th>
    <td>
      {{$errors->first('last_name')}}
    </td>
  </tr>
  @endif
  @if($errors->has('first_name'))
  <tr>
    <th style="background-color: red">ERROR</th>
    <td>
      {{$errors->first('first_name')}}
    </td>
  </tr>
  @endif
  @if($errors->has('gender'))
  <tr>
    <th style="background-color: red">ERROR</th>
    <td>
      {{$errors->first('gender')}}
    </td>
  </tr>
  @endif
  @if($errors->has('email'))
  <tr>
    <th style="background-color: red">ERROR</th>
    <td>
      {{$errors->first('email')}}
    </td>
  </tr>
  @endif
  @if($errors->has('tell'))
  <tr>
    <th style="background-color: red">ERROR</th>
    <td>
      {{$errors->first('tell')}}
    </td>
  </tr>
  @endif
  @if($errors->has('address'))
  <tr>
    <th style="background-color: red">ERROR</th>
    <td>
      {{$errors->first('address')}}
    </td>
  </tr>
  @endif
  @if($errors->has('detail'))
  <tr>
    <th style="background-color: red">ERROR</th>
    <td>
      {{$errors->first('detail')}}
    </td>
  </tr>
  @endif
</table>
@endsection