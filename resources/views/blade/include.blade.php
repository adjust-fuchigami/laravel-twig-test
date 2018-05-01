@extends('layouts.blade.app')

@section('title', '継承')

@section('main-content')
    <h3>メインコンテンツ上書き</h3>
    <div class="row">
        <div class="col-12 mt-3">
          <h5>最近のお知らせ</h5>
          @include ('blade.partials.infomations', compact('infomations'))
        </div>
        <div class="col-12 mt-3">
          <h5>最近の投稿</h5>
          @include ('blade.partials.posts', compact('posts'))
        </div>
        <div class="col-12 mt-3">
          @include ('blade.partials.banner_area_1')
        </div>
    </div>
@endsection

@section('side-content')
    @parent
    <h4>サイドバーコンテンツ追加</h4>
    @include ('blade.partials.banner_area_2')
    @include ('blade.partials.banner_area_3')
    @include ('blade.partials.banner_area_4')
    @include ('blade.partials.banner_area_5')
@endsection
