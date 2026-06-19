@extends('layouts.app')

@section('content')

<section class="py-5 mt-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-body p-5">

                        <div class="text-center mb-5">

                            <img

                                src="https://ui-avatars.com/api/?background=0D6EFD&color=fff&size=150&name={{ urlencode(Auth::user()->name) }}"

                                class="rounded-circle shadow mb-3"

                                width="120">

                            <h3 class="fw-bold">

                                {{ Auth::user()->name }}

                            </h3>

                            <p class="text-muted">

                                {{ Auth::user()->email }}

                            </p>

                        </div>


                        @if(session('success'))

                        <div class="alert alert-success">

                            {{ session('success') }}

                        </div>

                        @endif


                        <form method="POST"

                            action="{{ route('perfil.update') }}">

                            @csrf

                            @method('PUT')


                            <h5 class="mb-4">

                                Datos Personales

                            </h5>

                            <div class="mb-3">

                                <label>

                                    Nombre Completo

                                </label>

                                <input

                                    class="form-control form-control-lg"

                                    name="name"

                                    value="{{ old('name',Auth::user()->name) }}">

                            </div>


                            <div class="mb-4">

                                <label>

                                    Correo Electrónico

                                </label>

                                <input

                                    class="form-control form-control-lg"

                                    value="{{ Auth::user()->email }}"

                                    readonly>

                            </div>


                            <hr class="my-5">


                            <h5 class="mb-4">

                                Cambiar Contraseña

                            </h5>


                            <div class="mb-3">

                                <input

                                    type="password"

                                    class="form-control form-control-lg"

                                    name="current_password"

                                    placeholder="Contraseña actual">

                            </div>


                            <div class="mb-3">

                                <input

                                    type="password"

                                    class="form-control form-control-lg"

                                    name="password"

                                    placeholder="Nueva contraseña">

                            </div>


                            <div class="mb-4">

                                <input

                                    type="password"

                                    class="form-control form-control-lg"

                                    name="password_confirmation"

                                    placeholder="Confirmar nueva contraseña">

                            </div>


                            <button

                                class="btn btn-primary btn-lg w-100 rounded-3">

                                Guardar Cambios

                            </button>


                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection