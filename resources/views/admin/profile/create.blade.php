{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
@section('title', 'My profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>自己紹介</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <body>
<form action="#" method="post">
	<p>お名前（必須）：<br>
	<input type="text" name="name"></p>
	<p>性別：<br>
	<input type="text" name="gender"></p>
    <p>趣味</p>
    <input type="text" name="hobby"/>
</form>
</body>
                    
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    
@endsection