@extends('layouts.common')
<style>
  body {
    height: 100%;
    background-color: #F1ECE6;
  }

  .content {
    margin: 0 auto;
    justify-content: center;
    align-items: center;

  }

  .create-form__items {
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;

    width: 740px;
    background-color: #FFFFFF;
    border: 1px solid rgba(197, 185, 176, 1);
    border-radius: 10px 0px 0px 0px;

    margin: 0 auto;
    padding: auto 150px;
    color: rgba(139, 121, 105, 1);
    font-family: Inika;
    font-size: 25px;
    font-weight: 400;
    line-height: 32.57px;
    text-align: left;
  }

  input {
    background: rgba(244, 244, 244, 1);
    width: 445px;
    height: 55px;

    border: none;
  }

  .create-form__button {
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;

    height: 100px;
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
  }

  input::placeholder {
    font-family: Inika;
    font-size: 14px;
    font-weight: 400;
    line-height: 18.24px;
    text-align: left;

    color: rgba(190, 177, 166, 1);
  }
</style>
@section('page', 'login')

@section('content')
<div class="content">
  <h2 class="content__title">Login</h2>

  <div class="create-form__items">
    <form class="create-form" action="/admin" method="post">
      @csrf
      <div class="create-form__items-name">
        <h3 class="create-form__items-ttl">メールアドレス</h3>
        <input class="create-form__items-input" type="text" placeholder="例:test@example.com" name="name" value="{{ old('name') }}">
      </div>
      <div class="create-form__items-email">
        <h3 class="create-form__items-ttl">パスワード</h3>
        <input class="create-form__items-input" type="text" placeholder="例:coatchtech1106" name="password" value="{{ old('passward') }}">
      </div>
      <div class="create-form__button">
        <button class="create-form__button-submit" type="submit">ログイン</button>
      </div>
  </div>
  </form>
</div>
@endsection