@extends('layouts.common')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
<!-- registerが入るとタイトルがうごいてしまう・・・ -->
@section('page', 'register')

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
</table>
@endsection

