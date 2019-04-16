<nav class="navbar is-link" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
          </a>
      
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Home
            </a>
      
            <a class="navbar-item">
              Documentation
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  Jobs
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
      
          <div class="navbar-end">
              @guest
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="{{ route('register') }}">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="{{ route('login') }}">
                            Log in
                        </a>
                    </div>
                </div>
                @else
                <a class="navbar-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
          </div>
        </div>
    </div>
</nav>