@extends('layouts.app')

@section('content')
    <div class="container" >       
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2">

            <div class="col mb-4 floatingElement">
                <a href="#" style="color: black;">
                    <div class="card">
                        <img src="{{ asset('/images/tarot.jpg') }}"  class="card-img-top" alt="mazo-tarot">        
                        <div class="card-body">
                            <h5 class="card-title">¿Qué es el tarot?</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </a>
            </div>
                
            <div class="col mb-4 floatingElement">
                <div class="card">
                <img src="{{ asset('/images/lectura.jpg') }}"  class="card-img-top" alt="lectura-tarot">
                <div class="card-body">
                    <h5 class="card-title">Hacer una tirada</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>

            <div class="col mb-4 floatingElement">
                <div class="card">
                <img src="{{ asset('/images/major_arcanas.jpg') }}" class="card-img-top" alt="major_arcanas">
                <div class="card-body">
                    <h5 class="card-title">Arcanos Mayores</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>

            <div class="col mb-4 floatingElement">
                <div class="card">
                <img src="{{ asset('/images/minor_arcanas.jpg') }}" class="card-img-top" alt="minor_arcanas">
                <div class="card-body">
                    <h5 class="card-title">Arcanos Menores</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>

        </div>
    </div>
@endsection