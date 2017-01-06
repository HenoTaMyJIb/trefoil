<nav class="nav">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item is-brand" href="http://trefoil.ee"><h3 class="subtitle">Trefoil Spordikool<h3></a>
        </div>
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <div class="nav-right nav-menu">
            <a class="nav-item " href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fa fa-lock"></i> Logi välja
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
            <span class="nav-item">
                <a class="button is-primary is-inverted" href="http://www.trefoil.ee">
                    <span class="icon">
                        <i class="fa fa-arrow-circle-o-right"></i>
                    </span>
                    <span>Trefoil veebilehele</span>
                </a>
            </span>

        </div>
    </div>
</nav>
