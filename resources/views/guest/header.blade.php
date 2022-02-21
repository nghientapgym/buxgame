<div class="container-fluid bg-pv-dark">
    <nav class="container navbar navbar-expand-lg navbar-dark bg-pv-dark" style=" padding: 36.5px;  ">
        <a class="navbar-brand" href="{{url('')}}">
            <img class="mr-2" src="{{url('')}}/storage/photos/22/logo.png" width="60" alt="" loading="lazy">
            BuxGame
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item d-xl-block">
                    <a class="nav-link text-light hvr-float loginBtn" style="font-size: 17px; color: #88a5cf !important;" role="button">
                        <i class="fas fa-coins pe-2"></i> Earn</a></li>
                <li class="nav-item d-xl-block">
                    <a class="nav-link text-light hvr-float loginBtn" style="font-size: 17px; color: #88a5cf !important;" role="button">
                        <i class="fas fa-tasks pe-2"></i> Tasks</a></li>
                <!--
                -->
            </ul>
            //if auth
            @if((Auth::check()))
                <div class="dropdown">
                    <button class="btn btn-light btn-sm ml-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user mx-2"></i>{{//username or email
                            Auth::user()->username
                        }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="">
                            <i class="fas fa-coins me-2"></i>Robux: {{$balance->balance}}</a>
                    </div>
                </div>


            @else
                <ul class="navbar-nav ms-auto">
                    <a class="nav-link ms-3 px-4 py-3 text-light btn-success loginBtn" role="button" style="font-weight: 500;border-radius: 10px;">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Earn Robux Now!
                    </a>
                </ul>
            @endif

        </div>
    </nav>
</div>
