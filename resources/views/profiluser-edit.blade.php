@extends('layout.index')

@section('container')

<div class="editprofiluser">
    <div class="backbutton">
        <a href="/userprofil"><img src="{{asset('icons/42.png')}}" alt="Back"></a>
    </div>
    <h1>Edit Profil</h1>
    <div class="editprofil-cont">
        <div class="editprofil-img">
            <img src="{{asset('items/16.png')}}" alt="Foto Profil">
            <a href="/pilih-foto-profil">Ubah Foto</a>
        </div>
        <div class="editprofil-content">
            <form action="">
                <label>
                    <span>Username</span>
                    <input type="text">
                </label>
                <label>
                    <span>Nama</span>
                    <input type="text">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email">
                </label>
            </form>
            <button type="submit">Simpan</button>
        </div>
    </div>
</div>

@endsection