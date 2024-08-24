<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('auth/img/favicon.png') }}" type="image/png" sizes="16x16">
    <title>NCLE™ Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('auth/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('auth/css/custom.css') }}">
</head>
<body>
<div class="main-wrapper">
    <section class="sign-up-in-section bg-dark ptb-60" style="background: url('{{ asset('auth/img/page-header-bg.svg') }}') no-repeat right bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-8 col-12">
                    <a href="https://nclesolutions.nl" class="mb-4 d-block text-center"><img src="{{ asset('auth/img/logo-white.png') }}" width="200" alt="logo" class="img-fluid"></a>
                    <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                        <h1 class="h3">Je e-mailadres is nog niet bevestigd.</h1>
                        <p class="text-muted">Je e-mailadres is nog niet bevestigd. Voltooi de e-mailverificatie om toegang te krijgen tot alle functies en mogelijkheden van ons platform. Controleer je inbox voor een bevestigingsmail en klik op de link om je registratie te voltooien.</p>

                        <form action="{{ route('verification.resend') }}" method="post" class="mt-4 register-form">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-3 d-block w-100">Opnieuw Versturen</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('auth/js/vendors/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('auth/js/vendors/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('auth/js/vendors/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('auth/js/vendors/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('auth/js/vendors/parallax.min.js') }}"></script>
<script src="{{ asset('auth/js/vendors/aos.js') }}"></script>
<script src="{{ asset('auth/js/vendors/massonry.min.js') }}"></script>
<script src="{{ asset('auth/js/app.js') }}"></script>
</body>
</html>