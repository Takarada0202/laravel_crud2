@extends('layouts.app')

@section('content')
@if (Auth::check() == false)
    로그인하셈
@else
<form action="{{ route('createPost',Auth::user()->id) }}" method="POST">
    @csrf
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit">
</form>
<a href="{{ route('myPage',Auth::user()->id) }}">MYpage</a>
@endif


</body>
</html>
@endsection
