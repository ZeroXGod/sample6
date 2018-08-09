@extends('layouts.default')
@section('title', '主页')
@section('content')
<div class="jumbotron">
    <h1>欢迎来到我的世界</h1>
    <p>To Do</p>
    <a href="{{ route('signup') }}" class="btn btn-primary btn-lg" role="button">现在注册</a>
</div>
@stop