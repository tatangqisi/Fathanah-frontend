<nav>
    <div class="brand">
        <a href="/beranda">
            @foreach ($Logo['Logo'] as $logo)
            <img src="http://192.168.138.139:5000/{{ $logo['path']}}/{{ $logo['img']}}" alt="Fathanah">
            @endforeach
        </a>
    </div>

    <ul id="nav">
        <li class="navli ">
            <a href="/beranda">Beranda</a>
        </li>
        <li class="navli nyalaya">
            <a href="/artikel">Artikel</a>
        </li>
        <li class="navli">
            <div class="drop">
                <a role="link" aria-disabled="true" style="cursor: pointer;" id="turun">Layanan Kami &nbsp; <ion-icon name="chevron-down-outline" id="arrow"></ion-icon>
                </a>
            </div>
            <div class="dropdown-ul">
                <ul>
                    <li>
                        <a href="">Al-Qur'an</a>
                    </li>
                    <li>
                        <a href="/asmaulhusna">Asmaul Husna</a>
                    </li>
                    <li>
                        <a href="/doaharian">Doa Harian</a>
                    </li>
                    <li>
                        <a href="/muslimkidz">Mozaik Islam</a>
                    </li>
                    <li>
                        <a href="/mydiary">MyDiary</a>
                    </li>
                </ul>
            </div>
        </li>
        </li>
        <li class="navli">
            <a href="/tentang-kami">Tentang</a>
        </li>

        <li class="navli">
            @auth
            <ul>
                <li>
                    <a href="/userprofil">
                        <p>Profil</p>
                    </a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"> Keluar &nbsp; <ion-icon name="log-out-outline"></ion-icon></button>
                    </form>
                </li>
            </ul>
            @else
            <a href="/login" class="nav-l">
                <p>Masuk &nbsp; <ion-icon name="log-in-outline"></ion-icon>
                </p>
            </a>
            @endauth
        </li>
    </ul>

</nav>