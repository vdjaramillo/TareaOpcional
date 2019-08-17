<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                </div>
                <form method="POST" action="{{ route('regveh') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="nombred" class="col-md-4 col-form-label text-md-right">Nombre del Dueño</label>

                        <div class="col-md-6">
                            <input id="nombred" type="text" class="form-control @error('nombred') is-invalid @enderror" name="nombred" value="{{ old('nombred') }}" required autocomplete="nombred" autofocus>

                            @error('nombred')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cedula" class="col-md-4 col-form-label text-md-right">Cédula</label>

                        <div class="col-md-6">
                            <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula">

                            @error('cedula')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="placa" class="col-md-4 col-form-label text-md-right">Placa</label>

                        <div class="col-md-6">
                            <input id="placaveh" type="text" class="form-control @error('placa') is-invalid @enderror" name="placa" required autocomplete="placa">

                            @error('placa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>

                        <div class="col-md-6">
                            <select id="marca" class="form-control @error('marca') is-invalid @enderror" name="marca" required autocomplete="marca">
                             @foreach($marcas as $m)
                             <option value="{{$m->nombre}}">{{$m->nombre}}</option>
                             @endforeach                               
                            </select>
                            @error('marca')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Registrar
                            </button>
                        </div>
                    </div>
                </form>
                <div class="links">
                    <a href="/A765/registrar">Registrar</a>
                    <a href="/A765/estadisticas">Estadisticas</a>
                    <a href="/A765/listar">Listar</a>
                </div>
            </div>
        </div>
    </body>
</html>
