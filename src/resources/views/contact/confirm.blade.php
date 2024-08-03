@extends('layouts.common')
<style>
  .content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-flow: column;
  }

  table {
  }
  
  th {
    border: 1px solid;
    border-color: #E0DFDE;
    background: rgba(186, 168, 153, 1);
    color: white;
    padding: 5px 40px;

    width: 305px;
    height: 28.86px;
    top: 21.44px;

    font-family: Inika;
    font-size: 20px;
    font-weight: 400;
    line-height: 26.06px;
    text-align: left;

  }

  td {
    width: 665px;
    padding: 25px 40px;
    background-color: #FFFFFF;
    border: 1px solid rgba(224, 223, 222, 1);
    text-align: center;
  }

  .contact-form__button {
    display: flex;
    justify-content: center;
    /* 水平方向の中央揃え */
    align-items: center;
    /* 垂直方向の中央揃え */
    padding: 10px 40px;
    /* 正しくスペースで区切る */

    font-family: Inika;
    font-size: 20px;
    font-weight: 400;
    line-height: 26.06px;
  }

  .contact-form__button-send {
    width: 120px;
    height: 42px;
    background: rgba(130, 117, 106, 1);
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;

    font-family: Inika;
    font-size: 20px;
    font-weight: 400;
  }

  .contact-form__button-send:hover {
    cursor: pointer;
  }

  .contact-form__button-revise {
    width: 120px;
    height: 42px;
    text-align: center;
    color: rgba(139, 121, 105, 1);
    text-decoration: underline;
    line-height: 42px;
  }
</style>

@section('content')
<div class="content">
  <h2 class="content__title">Contact</h2>
  <div class="content__table">
    <table>
      <tr>
        <th>お名前</th>
        <td>{{ $input['last_name'] }} {{ $input['first_name'] }}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>男性</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{ $input['email'] }}</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>{{ $input['tell'] }}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{ $input['address'] }}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{ $input['building'] }}</td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th>
        <td>{{ $input['category_id'] }}</td>
      </tr>
      <tr>
        <th>お問い合わせの内容</th>
        <td>{{ $input['detail'] }}</td>
      </tr>
    </table>
  </div>
  <form class="contact-form" action="thanks" method="post">
    @csrf
    <div class="contact-form__button">
      <input class="contact-form__button-send" type="submit"></input>
      <a class="contact-form__button-revise" href="/contact">修正</a>
    </div>
  </form>
</div>
@endsection