@extends('layouts.default', [
    'title' => 'Semua data users'
])

@section('content')
<div class="level">
    <div class="level-left">
        <div class="level-item">
            <h1 class="title is-4">Semua data users</h1>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a href="{{ route('users.create') }}" class="button is-light">Tambah</a>
        </div>
    </div>
</div>

<hr>

<div class="table-container">
    <table class="table is-fullwidth is-striped is-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>E-Mail</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d F Y') }}</td>
                    <td>{{ $user->updated_at->format('d F Y') }}</td>
                    <td class="buttons">
                        <a href="{{ route('users.show', $user->id) }}" class="button is-small is-success">Detail</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="button is-small is-info">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onclick="return confirm('Apakah Anda yakin ingin menghapus user tersebut?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-small is-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $users->links() }}
@endsection