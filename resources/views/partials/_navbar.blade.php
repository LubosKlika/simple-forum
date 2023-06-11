



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="/">Domů </a>
            </li>


            <li class="nav-item">
                @guest
                <a class="nav-link" href="/create-user">Registrace</a> 
                @endguest
                @auth
                <a class="nav-link" href="/create-user">Přidání uživatele</a> 
                @endauth
            </li>
            <li class="nav-item">
                @guest
                <a class="nav-link" href="/login">Přihlásit se</a>
                     
            </li>
                @endguest    
                @auth
            <li class="nav-item">
            <a class="nav-link" href="/users">Všichni uživatelé</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/create-question">Přidat otázku</a>
            </li>


                <li class="nav-item">
                    <form method="POST" action="/logout" >
                        @csrf
                        <button type="submit">
                        <a class="nav-link" >Odhlásit se</a>
                        </button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/{{ auth()->user()->id}}">{{ auth()->user()->name }}</a>
                </li>
                @endauth
            
      

        </ul>
        </div>
    </div>
  </nav>