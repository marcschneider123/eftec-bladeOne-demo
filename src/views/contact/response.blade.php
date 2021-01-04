@extends('layouts.base')
@section ('title', $config['company']['name'] . " Kontaktformular")

@section('content')
    @include('layouts.top-nav-contact')
    <section class="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    @if($status == 'success')
                            <h2 class="mb-3"><i class="fal fa-comment-alt-smile mr-3"></i>Vielen Dank für Ihre Anfrage<i class="fal fa-comment-alt-smile ml-3"></i></h2>
                            <p>
                                Ihre Anfrage wurde erfolgreich an uns übermittelt!<br>
                                Wir danken Ihnen recht herzlich und freuen uns über Ihr Interesse. <br>
                                Ihre Anfrage wird in Kürze bearbeitet und wir werden uns mit Ihnen in Verbindung setzen.
                            </p>

                    @else
                        <h2 class="text-danger mb-3"><i class="fal fa-exclamation-triangle mr-3"></i>Fehler bei der Übermittlung<i class="fal fa-exclamation-triangle ml-3"></i></h2>
                        <p>
                            Es trat ein Fehler auf. Bitte versuchen Sie es später noch einmal!<br>
                            Sollte der Fehler bestehen bleiben wenden Sie sich bitte direkt an
                            <a href="mailto:{{$config['company']['email']}}">{{$config['company']['email']}}</a>
                        </p>
                    @endif

                    <p>
                        Ihr Team von {{$config['company']['name']}}</p>
                    <a href="/"><img src="/img/logo/logo.png" class="logo" alt="Logo {{$config['company']['name']}}"></a>
                    <p class="pt-5"><a href="/">zurück zur Homepage</a></p>
                </div>
            </div>
        </div>
    </section>
@stop