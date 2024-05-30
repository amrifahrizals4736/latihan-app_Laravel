@extends('layouts.app') @section('title', 'Daftar Rak Buku') @section('content') <h2>{{ $store }} Data Rak Buku</h2>

<form method="POST" action="{{ $action }}"> @csrf @if (strtolower($store) == 'ubah')
        @method('PUT')
    @endif
    <input type="hidden" name="id" value="{{ $rak->id }}" />
    <table>
        <tr>
            <td>Nama Rak</td>
            <td>:</td>
            <td>
                <input type="text" class="mail_text" name="nama" placeholder="Nama Rak" value="{{ $rak->nama }}" />
                @error('nama')
                    <b>{{ $message }}</b>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td>:</td>
            <td>
                <input type="text" class="mail_text" name="lokasi" placeholder="Lo-kasi"
                    value="{{ $rak->lokasi }}" />
                @error('lokasi')
                    <b>{{ $message }}</b>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><input type="text" class="mail_text" name="keterangan" place-holder="keterangan"
                    value="{{ $rak->keterangan }}" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="{{ $store }}" /></td>
            <td>:</td>
            <td>
                <div class="send_bt"> <a href="{{ url('/rak_buku') }}">Kembali</a> </div>
            </td>
        </tr>
    </table>
</form>
@endsection
