<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="color: var(--bs-dark);background: rgb(0,0,0);height: 50px;">
        <div class="container"><button onclick="window.location.href='{{ route('accueil') }}'" class="btn btn-primary" type="button" style="background: url(&quot;/img/outline_home_white_24dp.png&quot;) center / contain no-repeat;width: 35px;height: 35px;margin: 0px;border-style: none;padding: 0px;"></button><a class="navbar-brand" href="{{ route('accueil') }}" style="color: var(--bs-white);text-align: center;height: 40px;margin: 30px;">Sparcoon</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav"></ul>
                <form class="me-auto search-form" target="_self">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"></label></div>
                </form><a class="btn btn-light action-button" role="button" href="{{ route('profil') }}" style="background: url(&quot;/img/outline_person_white_24dp.png&quot;) center / contain no-repeat;height: 35px;width: 35px;margin: 0px;padding: 0px;"></a>
            </div>
        </div>
</nav>