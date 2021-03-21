@extends('layouts.user')
@section('title', 'Contact App | Add new contact')
@section('content')

    <div class="bg_k2 text_houm_tu center">
        <p>Update pharmacy</p>
    </div>
    <div><br>
        <form action="{{ route('users.pharmacies.update', $pharmacy->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('users.pharmacies._form')
        </form>
    </div>

@endsection
