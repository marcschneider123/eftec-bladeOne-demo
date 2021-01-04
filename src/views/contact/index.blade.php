@extends('layouts.base')
@section ('title', 'Anfrageformular - ' . $config['company']['name'])
@section('meta-description', 'Jetzt unverbindlich anfragen!')

@section('content')
    @include('layouts.top-nav-contact')
    <section class="contactForm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Kontakt&shy;formular</h2>
                    <p>
                        <strong>Jetzt unverbindlich anfragen</strong>
                        <br>
                        Unsere Dienstleistungen richten sich in erster Linie an Firmenkunden.
                        <br>
                        Erkundigen Sie sich nach unserem einmaligen <strong>Neukunden-Rabatt</strong>.
                    </p>

                    <form id="contact-form" method="post" action="contact-submit.php" role="form" enctype="multipart/form-data" data-parsley-validate="">
                        <div class="controls">
                            <div class="row">
                                {{--<div class="col-md-2">
                                    <label for="">Anrede</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-inline pt-4">
                                        <input class="form-check-input" type="radio" name="salutation" id="form_salutation_mrs" value="Frau" checked>
                                        <label class="form-check-label" for="form_salutation_mrs">
                                            Frau
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline pt-4">
                                        <input class="form-check-input" type="radio" name="salutation" id="form_salutation_mr" value="Herr">
                                        <label class="form-check-label" for="form_salutation_mr">
                                            Herr
                                        </label>
                                    </div>
                                </div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_firstname">Vorname</label>
                                        <input id="form_firstname" type="text" name="firstname" class="form-control" placeholder="Bitte Vornamen eingeben">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Nachname</label>
                                        <input id="form_lastname" type="text" name="lastname" class="form-control"
                                        placeholder="Bitte Nachnamen eingeben">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">E-Mail *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Bitte E-Mail eingeben *"
                                        required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Telefonnr.</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Bitte Telefonnr. eingeben">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_company">Firma</label>
                                        <input id="form_company" type="text" name="company" class="form-control" placeholder="Bitte Firma eingeben">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_volume">Ihr potentielles Auftragsvolumen</label>
                                        <input id="form_volume" type="number" min="30" name="volume" class="form-control" placeholder="Bitte Auftragsvolumen eingeben" >
                                    </div>
                                </div>
                                {{--<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_source">Wie sind sie auf uns aufmerksam geworden?</label>
                                        <select  id="form_source" name="source" class="form-control">
                                            <option value="---- Bitte auswählen ----">---- Bitte auswählen ----</option>
                                            <option value="Suchmaschine">Suchmaschine</option>
                                            <option value="Internet">Internet</option>
                                            <option value="E-Mail-Marketing">E-Mail-Marketing</option>
                                            <option value="Persönlicher Kontakt">Persönlicher Kontakt</option>
                                            <option value="Empfehlung">Empfehlung</option>
                                            <option value="Sonstiges">Sonstiges</option>
                                        </select>
                                    </div>
                                </div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="exampleFile1" lang="de"
												   data-parsley-max-file-size="4"
												   data-parsley-filemimetypes="image/jpeg, image/jpg, image/png, application/pdf, image/bmp,
                                               image/vnd.adobe.photoshop, image/psd, application/x-photoshop, application/photoshop, image/gif,
                                               image/tiff, image/tif">
                                            <label class="custom-file-label" for="exampleFile1">Testbild 1</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="exampleFile2" lang="de"
												   data-parsley-max-file-size="4"
												   data-parsley-filemimetypes="image/jpeg, image/jpg, image/png, application/pdf, image/bmp,
                                               image/vnd.adobe.photoshop, image/psd, application/x-photoshop, application/photoshop, image/gif,
                                               image/tiff, image/tif">
											<label class="custom-file-label" for="exampleFile2">Testbild 2</label>
										</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>Es können maximal <strong>2 Bilder je 4 MB</strong> hochgeladen werden. <br>
                                        Erlaubte Dateiformate: .jpg .png .gif .pdf .psd .tif .tiff .bmp</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Ihre Nachricht *</label>
                                        <textarea id="form_message" name="message" class="form-control"
                                                  placeholder="Bitte geben Sie Ihre Nachricht ein *" rows="4"
                                                  required="required" data-error="Bitte geben Sie Ihre Nachricht ein."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" required="required" id="privacy" name="privacy">
                                        <label class="form-check-label" for="privacy">
                                            Ja, ich habe die <a href="{{$config['company']['url']}}/datenschutz/" target="_blank">Datenschutzerklärung</a> gelesen und bin mit der darin beschriebenen Verarbeitung meiner
                                            personenbezogenen Daten einverstanden. *
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-muted mt-3"><strong>*</strong> Pflichtfelder</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="messages"></div>
                                    <div class="alert alert-danger d-none">
                                        <h4>Bitte überprüfen Sie ihre Eingaben!</h4>
                                        <span>Einige Formularfelder sind noch ungültig.</span>
                                    </div>
                                    <div class="alert alert-info d-none">
                                        <h4>Gültige Eingabe!</h4>
                                        <span>Formularfelder sind valide.</span>
                                    </div>

                                    {{-- spamfilter --}}
                                    <input class="required" type="checkbox" required="required" name="required" value="1">
                                    <input type="submit" class="btn btn-primary btn-send btn-lg mt-2" value="Abschicken">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop