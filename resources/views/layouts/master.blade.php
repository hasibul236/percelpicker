@if (Auth::check() && Auth::user()->role === 'admin')
    @extends('layouts.admin')
@elseif (Auth::check() && Auth::user()->role === 'user')
    @extends('layouts.user')
@else
    @extends('layouts.app')
@endif


