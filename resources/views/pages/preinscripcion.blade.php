@extends('template.plantilla')
@section('titulo', 'Pre-inscripción')

@section('contenido')
    <section class="section_preinscripcion">
        <h2 class="title_inscripcion">Pre-Inscripción</h2>
        <div>
            <button class="btn_interesado">Interesado</button>
            <form class="form_inscripcion" action="">
                <h5 class="interesado">Hijos</h5>
                <div class="container_form">
                    <label>Documentos
                        <select>
                            <option value="dni">DNI</option>
                        </select>
                    </label>
                    <label>
                        Numero de documento
                        <input type="text">
                    </label>
                    <label>
                        Nomnbres
                        <input type="text">
                    </label>
                    <label>
                        Apellido paterno
                        <input type="text">
                    </label>
                    <label>
                        Apellido materno
                        <input type="text">
                    </label>
                    <label>
                        Fecha de nacimiento
                        <input type="date" name="" id="">
                    </label>
                    <label>
                        Genero
                        <select name="" id="">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </label>
                    <label>
                        Número de telefono
                        <input type="number" name="" id="">
                    </label>
                    <label>
                        Nivel
                        <select name="" id="">
                            <option value="primaria">Primaria</option>
                            <option value="secundaria">Secundaria</option>
                        </select>
                    </label>
                    <label>
                        Grado
                        <select name="" id="">
                            <option value="">1ro</option>
                            <option value="">2do</option>
                            <option value="">3ro</option>
                            <option value="">4to</option>
                            <option value="">5to</option>
                            <option value="">6to</option>
                        </select>
                    </label>
                </div>
                <button class="btn_agregar">Agregar interesado</button>
            </form>
        </div>
    </section>
@endsection
