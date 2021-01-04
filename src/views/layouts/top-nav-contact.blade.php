<section class="contactForm-header bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-3 mb-3 mb-sm-0 d-flex justify-content-center justify-content-sm-start">
                <a href="/" title="zurück zur Homepage"><img src="/img/logo/logo.png" class="img-fluid logo" alt="Logo {{$config['company']['name']}}"></a>
            </div>
            <div class="col-sm-10 col-md-9 d-flex align-items-center justify-content-center justify-content-sm-start">
                <div class="">
                    <a href="tel:{{$config['company']['phone']}}" title="{{$config['company']['name']}} per Telefon kontaktieren">
                        <div class="d-sm-inline pr-3"><i class="fas fa-fw fa-phone mr-1"></i>{{$config['company']['phone']}}</div>
                    </a>
                    <a href="mailto:{{$config['company']['email']}}" title="{{$config['company']['name']}} per E-Mail kontaktieren">
                        <div class="d-sm-inline"><i class="fas fa-fw fa-envelope mr-1"></i>{{$config['company']['email']}}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>