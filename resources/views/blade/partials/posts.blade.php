<table class="table">
    <thead>
        <tr>
            <th scope="col">投稿日</th>
            <th scope="col">投稿者</th>
            <th scope="col">タイトル</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
            @include('blade.partials.posts_row', compact('post'))
        @empty
            <tr>
                <td clospan="3">最近の投稿がありません</td>
            </tr>
        @endforelse
    </tbody>
</table>
