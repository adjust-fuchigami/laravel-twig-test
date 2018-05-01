@extends('layouts.blade.base')

@section('content')
    <div class="row">
        <div class="col-8">
            @section('main-content')
                <h3>メインコンテンツ</h3>
            @show
        </div>
        <div class="col-4">
            @section('side-content')
                <h4>サイドバーコンテンツ1</h4>
                <h4>サイドバーコンテンツ2</h4>
                <h4>サイドバーコンテンツ3</h4>
                <h4>サイドバーコンテンツ4</h4>
                <h4>サイドバーコンテンツ5</h4>
            @show
        </div>
    </div>
@endsection
