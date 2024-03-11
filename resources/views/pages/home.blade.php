@extends('template.plantilla')

@section('titulo', 'Crayons')

@section('contenido')
    <section class="section_home">
        <section>
            <section class="name">

                <h1>COLEGIO CRAYONS</h1>

            </section>
            <section class="section_home_info">
                <div>
                    <div>
                        <h3>Admisión 2024</h3>
                        <p>Crece con nosotros</p>
                    </div>
                    <div class="link_more_info">
                        <a href="{{ route('pages.preinscripcion') }}">Más información</a>
                    </div>
                </div>

            </section>
        </section>
    </section>
@endsection
