@extends('errors::minimal')

@section('title', __('Problème de permissions'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: ' Accès non autorisé'))
