@extends('layouts.blade.app')

@section('title', '継承')

@section('main-content')
    <h3>メインコンテンツ上書き</h3>
@endsection

@section('side-content')
    @parent
    <h4>サイドバーコンテンツ追加</h4>
@endsection
