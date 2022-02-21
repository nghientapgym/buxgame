@extends('layouts.index')
@section('content')
    <div class="p-3 pt-0 text-center text-light landing-hero mb-4">
        <h1 class="display-4 fw-bold text-uppercase">
            <span id="earning-method">
                <span class="ti-cursor"style="display:inline;position:relative;font:inherit;color:inherit;line-height:inherit;">|</span>
            </span>
        </h1>
        <button type="button" class="btn btn-lg btn-success px-5 loginBtn"><span class="fa fa-lg fa-coins me-4"></span>Login Today!</button>
    </div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card card-body bg-pv-dark hvr-grow shadow-sm text-center h-100">
                    <span class="fa fa-4x fa-user-plus fw-pv-dark my-3"></span>
                    <h1 class="font-weight-light fw-pv-dark mb-3">Sign Up</h1>
                    <p class="font-weight-light text-muted mb-2 mx-md-3">Join our community and start earning R$ today with very little effort!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body bg-pv-dark hvr-grow shadow-sm text-center h-100">
                    <span class="fa fa-4x fa-coins fw-pv-dark my-3"></span>
                    <h1 class="font-weight-light fw-pv-dark mb-3">Earn</h1>
                    <p class="font-weight-light text-muted mb-2">Download mobile apps and watch short videos to earn points or enter our daily giveaways and promocodes!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body bg-pv-dark hvr-grow shadow-sm text-center h-100">
                    <span class="fa fa-4x fa-credit-card fw-pv-dark my-3"></span>
                    <h1 class="font-weight-light fw-pv-dark mb-3">Withdraw</h1>
                    <p class="font-weight-light text-muted mb-2">Cash out your earning directly to your RBLX account and spend it on your favorite items and games!</p>
                </div>
            </div>
        </div>xx
    </div>
    <div class="container bg-pv-dark">
        <div class="" style="padding: 30px;">
            <h4 class="text-white fs-3 text-center">About Us</h4>
            <div class="rounded p-2 fw-pv-dark fs-4">
                Welcome to BuxGame.net, BuxGame.net is a website focused on awarding free Robux, we pay out higher rates than all of our competitors which is guaranteed to satisfy you. We are a community of gamers who love to earn free Robux and we are always looking for new ways to earn more.
            </div>
            <br>
            <h4 class="text-white fs-3 text-center">How Does It Work?</h4>
            <div class="rounded p-2 fw-pv-dark fs-4">
                We do not ask for or need any personal information. You complete offers on the website and earn Robux for each offer you complete. You can withdraw your Robux to your Roblox account at any time.
            </div>
            <br>

        </div>
    </div>

    <div class="modal fade" id="auth-roblox-username-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h3 class="text-center text-muted font-weight-light mb-0">Login with your Rblx username!</h3>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('login')}}" id="login-form">
                        <div class="mb-1">
                            <input type="text" class="form-control form-control-lg" name="username" id="auth-roblox-username" placeholder="Rblx Username" value="" required="" autofocus="">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-lg btn-success col-12"><span class="fa fa-lg fa-sign-in-alt"></span> Login</button>

                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
