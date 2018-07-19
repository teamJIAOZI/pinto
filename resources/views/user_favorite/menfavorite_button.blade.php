@if (Auth::id() == $user->id)
    @if (Auth::user()->is_liking($item->id))
     {!! Form::open(['route' => ['user.menunlike', $item->id], 'method' => 'delete']) !!}
     <input type="hidden" name="pagenumber" value="{{Request::get('page')}}">
     <input type="hidden" name="pageurl" value="{{Request::path()}}">
     {!! Form::submit('unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
     {!! Form::close() !!}
    @else
     {!! Form::open(['route' => ['user.menlike', $item->id]]) !!}
     <input type="hidden" name="pagenumber" value="{{Request::get('page')}}">
     <input type="hidden" name="pageurl" value="{{Request::path()}}">
     
     {!! Form::submit('favorite', ['class' => "btn btn-default btn-xs "]) !!}
     {!! Form::close() !!}
    @endif
@endif