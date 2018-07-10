@if (count($favorites) > 0)

<ul class="media-list">

    <li class="media">

        <div class="media-body">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>アイテム</th>
                    <th>相場</th>
                    <th>ストーリー</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favorites as $items)
            <tr>
                <td>{!! nl2br(e($items->items)) !!}</td>
                <td>￥{!! nl2br(e($items->price)) !!}</td>
                <td>{!! nl2br(e($items->story)) !!}</td>
                <td> @if (Auth::user()->is_liking($items->id))
                        {!! Form::open(['route' => ['user.unlike', $items->id], 'method' => 'delete']) !!}
                            {!! Form::submit('unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['route' => ['user.like', $items->id]]) !!}
                            {!! Form::submit('favorite', ['class' => "btn btn-default btn-xs "]) !!}
                        {!! Form::close() !!}
                    @endif</td>
            </tr>
            @endforeach   
            </tbody>
            </table>
            
            

        </div>
    </li>

</ul>
{!! $favorites->render() !!}
@endif