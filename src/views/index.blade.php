@extends('layouts.base')
@section ('title', 'EFTEC/BladeOne Landingpage Demo')
@section('meta-description', 'EFTEC/BladeOne Landingpage Demo Meta description')

@section('content')
    @include('sections.header')
    @include('sections.service')
    @include('sections.benefits')
    @include('sections.reference')
    @include('sections.seo')
@stop