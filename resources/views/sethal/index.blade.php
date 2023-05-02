@extends('home')

@section('konten')
    <form action="{{ route('sethal.update') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2" for="">About</label>
            <div class="com-sm-6">
                <select class="form-control form-control-sm" name="_halaman_about">
                    <option value="">-pilih-</option>
                    @foreach ($data_halaman as $dt)
                        <option value="{{ $dt->id }}" {{ get_meta_value('_halaman_about') == $dt->id ? 'selected': '' }}>{{ $dt->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="">Interest</label>
            <div class="com-sm-6">
                <select class="form-control form-control-sm" name="_halaman_interest">
                    <option value="">-pilih-</option>
                    @foreach ($data_halaman as $dt)
                        <option value="{{ $dt->id }}" {{ get_meta_value('_halaman_interest') == $dt->id ? 'selected': '' }}>{{ $dt->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="">Award</label>
            <div class="com-sm-6">
                <select class="form-control form-control-sm" name="_halaman_award">
                    <option value="">-pilih-</option>
                    @foreach ($data_halaman as $dt)
                        <option value="{{ $dt->id }}" {{ get_meta_value('_halaman_award') == $dt->id ? 'selected': '' }}>{{ $dt->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
    </form>
@endsection
