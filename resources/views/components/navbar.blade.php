<span>
    <a class="" href="http://127.0.0.1:8000">Home</a>
    <a class="" href="http://127.0.0.1:8000/libraries">Titoli</a>
    <a class="" href="http://127.0.0.1:8000/libraries/create">Aggiungi</a>
    <a class="" href="">
    @auth
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn">Esci</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        @else
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
        </ul>
    @endauth
    </a>         
</span>
<hr>