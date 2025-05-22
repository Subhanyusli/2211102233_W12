@extends('layouts.template')

@section('content')
<h2>Sign Up</h2>
<form>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
</form>
@endsection
