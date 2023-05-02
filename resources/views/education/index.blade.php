@extends('home')

@section('konten')
    <p class="card-title">Experience</p>
    <div class="pb-3"><a href="{{ route('education.create') }}" class="btn btn-primary">+ Tambah Education</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Universitas</th>
                    <th>Nama Fakultas</th>
                    <th>Prodi</th>
                    <th>IPK</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Akhir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $dt->judul }}</td>
                        <td>{{ $dt->info1 }}</td>
                        <td>{{ $dt->info2 }}</td>
                        <td>{{ $dt->info3 }}</td>
                        <td>{{ $dt->tgl_mulai }}</td>
                        <td>{{ $dt->tgl_akhir }}</td>
                        <td>
                            <a href="{{ route('education.edit', $dt->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                                action="{{ route('education.destroy', $dt->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
