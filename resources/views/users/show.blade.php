@extends('layouts.default', [
    'title' => 'Detail data user'
])

@section('content')

<div class="level">
    <div class="level-left">
        <div class="level-item">
            <h1 class="title is-4">Detail data user</h1>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a href="{{ route('users.edit', $user->id) }}" class="button is-light">Edit</a>
        </div>
        <div class="level-item">
            <a href="{{ route('users.index') }}" class="button is-light">Kembali</a>
        </div>
    </div>
</div>

<hr>

<div class="field">
    <label class="label">Nama Lengkap</label>
    <pre>{{ $user->name }}</pre>
</div>

<div class="field">
    <label class="label">Alamat E-Mail</label>
    <pre>{{ $user->email }}</pre>
</div>

<div class="field">
    <label class="label">CreatedAt</label>
    <pre>{{ $user->created_at }}</pre>
</div>

<div class="field">
    <label class="label">UpdatedAt</label>
    <pre>{{ $user->updated_at }}</pre>
</div>
@endsection