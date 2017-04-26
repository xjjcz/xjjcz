<!-- 存放在 resources/views/child.blade.php -->

@extends('layouts.a')

@section('title', 'bbbbbb Title')

@section('sidebar')
    @parent
    <p class="abc">This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
