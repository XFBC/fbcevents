<nav class="navbar navbar-light bg-light">

    <div class="" id="">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="/">
                <img src="/images/lipegraph.5.png" width="100" height="60" alt="">
            </a>

            <li class="nav-item active">
                <a class="nav-link" href="/">Eventos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/events/create">Criar Eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Entrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Cadastrar</a>
            </li>
        </ul>
    </div>
</nav>



<style lang="scss">
    /* .logo-img {
        width: 20%;
    } */

    .navbar {
        display: flex;
        flex-direction: row;



    }

    .navbar-nav {
        display: flex;
        flex-direction: row;
        gap: 36px;
        align-content: stretch;
        justify-content: center;
        align-items: center;

        @media screen and (max-width:575px) {
            flex-direction: column;

        }

    }
</style>


{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script> --}}
