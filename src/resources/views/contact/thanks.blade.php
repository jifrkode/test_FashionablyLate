@extends('layouts.common')
<style>
  .content__backmessage {
    position: absolute;
    /* 必要に応じて高さを調整 */
    background: rgba(139, 121, 105, 0.05);
    /* 背景色と透明度を設定 */
    color: white;
    /* 文字色を設定 */
    text-align: center;
    /* テキストを中央に配置 */
    z-index: 0;
    /* 重ね順序を設定、数字が大きいほど上に表示 */

    width: 100%;
    height: 100%;
    gap: 0px;
    opacity: 0px;

    font-family: Inika;
    font-size: calc(5em + 5vw);
    font-weight: 400;
    line-height: 364.84px;

  }

  .content__message{
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;

    width: 100%;
    height: 100%;

  }

  .content__message-text {
    position: relative;
    /* 位置を相対位置に設定 */
    /* margin-top: 120px; /* content__backmessageの高さに応じてマージンを調整 */
    color: #8A7677;
    text-align: center;
    /* テキストを中央に配置 */
    font-size: calc(0.7em + 0.7vw);
    
    z-index: 1;
    /* 重ね順序を設定、content__backmessageより上に表示 */
  }

  .content__message-button {
    width: 120px;
    height: 40px;
    font-family: Inika;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background: #82756A;
    text-align: center;

    z-index: 1;
  }

  .a {
    color: white;
    
  }
</style>

@section('content')
<div class="content__backmessage">
  <h2>Thank you</h2>
</div>
<div class="content__message">
  <div class="content__message-text">
    <h3>お問い合わせありがとうございました
    </h3>
  </div>
  <div class="content__message-button">
    <a href="/">HOME</a>
  </div>
</div>
@endsection