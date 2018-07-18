<!DOCTYPE html>
<html>
<head>
	<style>

/* Base */

body, body *:not(html):not(style):not(br):not(tr):not(code) {
    font-family: Roboto, 'Helvetica Neue', Helvetica, sans-serif;
    box-sizing: border-box;
}

body {
    background-color: #f5f5f5;
    color: #74787E;
    height: 100%;
    hyphens: auto;
    line-height: 1.4;
    margin: 0;
    -moz-hyphens: auto;
    -ms-word-break: break-all;
    width: 100% !important;
    -webkit-hyphens: auto;
    -webkit-text-size-adjust: none;
    word-break: break-all;
    word-break: break-word;
}

p,
ul,
ol,
blockquote {
    line-height: 1.4;
    text-align: left;
}

a {
    color: #3869D4;
}

a img {
    border: none;
}

/* Typography */

h1 {
    color: #2F3133;
    font-size: 25px;
    font-weight: bold;
    margin-top: 0;
    text-align: left;
}

h2 {
    color: #2F3133;
    font-size: 19px;
    font-weight: bold;
    margin-top: 0;
    text-align: left;
}

h3 {
    color: #2F3133;
    font-size: 14px;
    font-weight: bold;
    margin-top: 0;
    text-align: left;
}

p {
    color: #74787E;
    font-size: 16px;
    line-height: 1.5em;
    margin-top: 0;
    text-align: left;
}

p.sub {
    font-size: 12px;
}

img {
    max-width: 100%;
}

/* Layout */

.wrapper {
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.content {
    margin: 0;
    padding: 0;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

/* Header */

.header {
    padding: 25px 0;
    text-align: center;
}

.header a {
    color: #bbbfc3;
    font-size: 19px;
    font-weight: bold;
    text-decoration: none;
    text-shadow: 0 1px 0 white;
}

/* Body */

.body {
    background-color: #FFFFFF;
    border: 1px solid #EDEFF2;
    margin: 0;
    padding: 0;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.inner-body {
    background-color: #FFFFFF;
    margin: 0 auto;
    padding: 0;
    width: 600px;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 600px;
}

.color-gray {
    color: #999999;
}

.color-purple {
    color: #725BC2;
}

/* Subcopy */

.subcopy {
    border-top: 1px solid #EDEFF2;
    margin-top: 25px;
    padding-top: 25px;
}

.subcopy p {
    font-size: 12px;
}

/* Footer */

.footer {
    margin: 0 auto;
    padding: 0;
    text-align: center;
    width: 600px;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 600px;
}

.footer p {
    color: #AEAEAE;
    font-size: 12px;
    text-align: center;
}

/* Tables */

.table table {
    margin: 30px auto;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.table th {
    border-bottom: 1px solid #EDEFF2;
    padding-bottom: 8px;
    margin: 0;
}

.table td {
    color: #74787E;
    font-size: 15px;
    line-height: 18px;
    padding: 10px 0;
    margin: 0;
}

.content-cell {
    padding: 35px;
}

/* Buttons */

.action {
    margin: 30px auto;
    padding: 0;
    text-align: center;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.button {
    border-radius: 3px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
    color: #FFF;
    display: inline-block;
    text-decoration: none;
    -webkit-text-size-adjust: none;
}

.button-blue {
    background-color: #3097D1;
    border-top: 10px solid #3097D1;
    border-right: 18px solid #3097D1;
    border-bottom: 10px solid #3097D1;
    border-left: 18px solid #3097D1;
}

.button-green {
    background-color: #4CD286;
    border-top: 10px solid #4CD286;
    border-right: 18px solid #4CD286;
    border-bottom: 10px solid #4CD286;
    border-left: 18px solid #4CD286;
}

.color-green {
    color: #4CD286
}

.color-red {
    color: #FF0020
}

.button-red {
    background-color: #bf5329;
    border-top: 10px solid #bf5329;
    border-right: 18px solid #bf5329;
    border-bottom: 10px solid #bf5329;
    border-left: 18px solid #bf5329;
}

/* Panels */

.panel {
    margin: 0 0 21px;
}

.panel-content {
    background-color: #EDEFF2;
    padding: 16px;
}

.panel-item {
    padding: 0;
}

.panel-item p:last-of-type {
    margin-bottom: 0;
    padding-bottom: 0;
}

/* Promotions */

.promotion {
    background-color: #FFFFFF;
    border: 2px dashed #9BA2AB;
    margin: 0;
    margin-bottom: 25px;
    margin-top: 25px;
    padding: 24px;
    width: 100%;
    -premailer-cellpadding: 0;
    -premailer-cellspacing: 0;
    -premailer-width: 100%;
}

.promotion h1 {
    text-align: center;
}

.promotion p {
    font-size: 15px;
    text-align: center;
}

hr {
    border: 0;
    border-bottom: 1px solid #eee;
    margin-top: 10px;
    margin-bottom: 10px;
}

.small-font {
    font-size: 11px;
}

.regular-font {
    font-size: 13px;
}
</style>
</head>
<body>
<header class="header">
	<h1 class="button-blue">
		Email do Resumo da compra
	</h1>
</header>
</br>
<table class="wrapper">
<div class="wrapper">
<tr>
    <td >
      	<h2> Oi, {{Auth::user()->name}}. Estamos confirmando o pedido no seguinte endereço: </h2>
    </td>
 </tr>
 </table>
 <table class="table">
 
 <div class="panel-content">
<th class="table">
	<td class="table">
		<h2>Endereço:</h2>
	 </td>
</th>
	<td class="table">
	 <h2>{{$user->address[0]->street_name}}, {{$user->address[0]->number}} - {{$user->address[0]->neighbourhood}} {{$user->address[0]->public_place}}.   </h2>
	</td>
	<td class="table">
		<h2>   {{$user->address[0]->town}}, {{$user->address[0]->state}} - {{$user->address[0]->country}}.   </h2>
	</td>
	<td class="table">
		<h2>   CEP: {{$user->address[0]->CEP}} </h2> 
	</td>
</div>
 </table>
<table class="table" cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr>
            <th><h2>PRODUTO</h2></th>
            <th><h2>QTD.</h2></th>
            <th><h2>PREÇO</h2></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td><h3>{{ $item->product->name }}</h3></td>
                <br/>
                <td><h3>{{ $item->quantity }}</h3></td>
                <br/>
                <td><h3>{{ $item->product->price }}</h3></td>
                <br/>
            </tr>
        @endforeach
    </tbody>
</table>
<footer class="button-blue">
	<h1 class="footer">BubbStore</h1>
</footer>
</body>
</html>
