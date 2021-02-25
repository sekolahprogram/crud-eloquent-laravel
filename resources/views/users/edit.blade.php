@extends('layouts.default', [
    'title' => 'Edit user'
])

@section('content')
<div class="level">
    <div class="level-left">
        <div class="level-item">
            <h1 class="title is-4">Edit user</h1>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a href="{{ route('users.show', $user->id) }}" class="button is-light">Detail</a>
        </div>
        <div class="level-item">
            <a href="{{ route('users.index') }}" class="button is-light">Kembali</a>
        </div>
    </div>
</div>

<hr>


<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')
    
    <div class="field">
        <label for="name" class="label">Nama Lengkap</label>
        <div class="control">
            <input type="text" name="name" id="name" class="input @error('name') is-danger @enderror" value="{{ old('name', $user->name) }}">
        </div>
        @error('name')
            <p class="help is-danger">{{ $message }}</p>   
        @enderror
    </div>

    <div class="field">
        <label for="email" class="label">Alamat E-Mail</label>
        <div class="control">
            <input type="email" name="email" id="email" class="input @error('email') is-danger @enderror" value="{{ old('email', $user->email) }}">
        </div>
        @error('email')
            <p class="help is-danger">{{ $message }}</p>   
        @enderror
    </div>

    <div class="field">
        <label class="checkbox">
            <input type="checkbox" id="onCheckbox" onclick="clickPassword()">
            Tidak ganti kata sandi
        </label>
    </div>

    <div class="field" id="hiddenpassword">
        <div class="field">
            <label for="password" class="label">Kata Sandi</label>
            <div class="control">
                <input type="password" name="password" id="password" class="input @error('password') is-danger @enderror">
            </div>
            @error('password')
                <p class="help is-danger">{{ $message }}</p>   
            @enderror
        </div>
    
        <div class="field">
            <label for="password_confirmation" class="label">Konfirgurasi Kata Sandi</label>
            <div class="control">
                <input type="password" name="password_confirmation" id="password_confirmation" class="input @error('password_confirmation') is-danger @enderror">
            </div>
            @error('password_confirmation')
                <p class="help is-danger">{{ $message }}</p>   
            @enderror
        </div>
    </div>

    <div class="field">
        <button type="submit" class="button is-success">Simpan Perubahan</button>
    </div>

</form>
@endsection

@section('script')
<script>

    function clickPassword() {

        var checkBox = document.getElementById("onCheckbox");

        var hidden = document.getElementById("hiddenpassword");

        if (!checkBox.checked){
            hidden.style.display = "block";
        } else {
            hidden.style.display = "none";
        }
    }
</script>
@endsection