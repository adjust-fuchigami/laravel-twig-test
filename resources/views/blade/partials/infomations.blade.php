@forelse ($infomations as $infomation)
    @if ($loop->first) <ul class="list-group list-group-flush"> @endif
    @include('blade.partials.infomations_row', compact('infomation'))    
    @if ($loop->last) </ul> @endif
@empty
    <p>お知らせはありません</p>
@endforelse
