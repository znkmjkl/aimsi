@extends('templates.layout')

@section('support')

<p>Books languages:</p>
<hr>
@foreach ($books_languages as $book)
    <p>ISBN: {{ $book->bok_isbn }}</p>
    <p>Tytul: <a href="/book/{{ $book->bok_id}} ">{{ $book->bok_title }}</a></p>
    <p>Autor: {{ $book->bok_lng_id }}</p>
    <p>Jezyk: {{ $book->bok_atr_id }}</p>
    <p>Rodzaj: {{ $book->bok_knd_id }}</p>
    <hr>
@endforeach

@stop
