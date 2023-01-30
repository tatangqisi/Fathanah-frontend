@extends('layout.index')

@section('container')

<div class="profiluser">
    <div class="backbutton">
        <a href="/"><img src="{{asset('icons/42.png')}}" alt="Back"></a>
    </div>
    <div class="profil-cont">
        <div class="profil-img">
            <img src="{{asset('items/16.png')}}" alt="Foto Profil">
            <a href="/pilih-foto-profil">Ubah Foto</a>
        </div>
        <div class="profil-content">
            <div class="profil-subject">
                <span>Username</span>
                <p>chujitsuna</p>
            </div>
            <div class="profil-subject">
                <span>Nama</span>
                <p>Chujitsuna Nekoyuri</p>
            </div>
            <div class="profil-subject">
                <span>Email</span>
                <p>chujitsuna_nekoyuri@gmail.com</p>
            </div>
            <div class="profil-button">
                <a href="/edit-userprofil">Edit Profil</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit"> Keluar <ion-icon name="log-out-outline"></ion-icon></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection