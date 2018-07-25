@if (Auth::id() == $user->id)
    @if (Auth::user()->is_liking($item->id))
     {!! Form::open(['route' => ['user.favoriteunlike', $item->id], 'method' => 'delete']) !!}
     <input type="hidden" name="pagenumber" value="{{Request::get('page')}}">
     <input type="hidden" name="pageurl" value="{{Request::path()}}">
     <div class="button_wrapper">
     <button type="submit" class="favoritebutton2">いらない</button></div>
     {!! Form::close() !!}
    @else
     {!! Form::open(['route' => ['user.favoritelike', $item->id]]) !!}
     <input type="hidden" name="pagenumber" value="{{Request::get('page')}}">
     <input type="hidden" name="pageurl" value="{{Request::path()}}">
     
     {!! Form::submit('お気に入り', ['class' => "btn btn-default btn-xs "]) !!}
     {!! Form::close() !!}
    @endif
@endif