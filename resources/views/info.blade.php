@extends('layout.htmldoc')

@section('header')
    <header class="page-header">
        <h1>{{ $title }}</h1>
    </header>
@endsection

@section('main')
    <main class="page-main">
        <ul class="list-inline">
            <li class="list-item"><a href="/">HOME</a></li>
            <li class="list-item"><a href="/cosa-sto-facendo">COSA STO FACENDO</a></li>
            <li class="list-item"><a href="/che-figata">CHE FIGATA</a></li>
        </ul>
    </main>
@endsection

@section('footer')
    <footer class="page-footer">
        <h4>Laravel Testing</h4>
    </footer>
@endsection