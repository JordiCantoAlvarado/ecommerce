@extends('layouts.admin')


@section('content')
<div class="page-heading">
    <h3>Ajustes del sistema</h3>
</div> 
<div class="page-content">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Configuraciones del sistema</h4>
                </div>
                <div class="card-body">

                    <form action="">
                        <div class="row">
                            <div class="col-md-10">

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre" class="form-label">* Nombre</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-building"></i></span>
                                                <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror"
                                                placeholder="Nombre de la empresa"
                                                value="{{ old('nombre') }}" required>
                                                @error('nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="descripcion" class="form-label">* Descripción</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-tag"></i></span>
                                                <input type="text" name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror"
                                                placeholder="Breve descripción de la actividad o sector"
                                                value="{{ old('descripcion') }}" required>
                                                @error('descripcion')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sucursal" class="form-label">* Sucursal</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-shop"></i></span>
                                                <input type="text" name="sucursal" id="sucursal" class="form-control @error('sucursal') is-invalid @enderror"
                                                placeholder="Ej: Casa matriz"
                                                value="{{ old('sucursal') }}" required>
                                                @error('sucursal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="direccion" class="form-label">* Dirección</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-geo-alt"></i></span>
                                                <textarea type="direccion" name="direccion" id="direccion" class="form-control @error('direccion') is-invalid @enderror"
                                                placeholder="Calle, número, ciudad y país"
                                                rows="1" required>{{ old('direccion') }}</textarea>
                                                @error('direccion')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="telefonos" class="form-label">* Teléfono</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-telephone"></i></span>
                                                <input type="text" name="telefonos" id="telefonos" class="form-control @error('telefonos') is-invalid @enderror"
                                                placeholder="Ej: +34 123456789, 123456789"
                                                value="{{ old('telefonos') }}" required>
                                                @error('telefonos')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="email" class="form-label">* Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-envelope"></i></span>
                                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Ej: info@miempresa.com"
                                                value="{{ old('email') }}" required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="divisa" class="form-label">* Divisa</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-currency-dollar"></i></span>
                                                <select id="divisa" name="divisa" class="form-control">
                                                    <option value="">-- Seleccione una divisa --</option>
                                                    @foreach ($divisas as $divisa)
                                                        <option value="{{ $divisa['code'] }}">
                                                            {{ $divisa['name'] }} ({{ $divisa['symbol'] }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('divisa')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="pagina_web" class="form-label">Página web (opcional)</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-globe"></i></span>
                                                <input type="text" name="pagina_web" id="pagina_web" class="form-control @error('pagina_web') is-invalid @enderror"
                                                placeholder="Ej: https://www.miempresa.com"
                                                value="{{ old('pagina_web') }}">
                                                @error('pagina_web')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-2">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="logo" class="form-label">* Logo</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-image"></i></span>
                                                <input type="file" name="logo" id="logo" class="form-control @error('logo') is-invalid @enderror"
                                                accept="image/*" onchange="mostrarImagenLogo(event)" required>
                                                @error('logo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <img id="preview_logo" style="max-width: 100%; margin-bottom: 10px;" src="">
                                        <script>
                                            const mostrarImagenLogo = (e)=>{
                                                document.getElementById('preview_logo').src = URL.createObjectURL(e.target.files[0]);
                                            }
                                        </script>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="imagen_login" class="form-label">* Imagen de Login</label>
                                            <div class="input-group">
                                                <span class="input-group-text align-items-start"><i class="bi bi-camera"></i></span>
                                                <input type="file" name="imagen_login" id="imagen_login" class="form-control @error('imagen_login') is-invalid @enderror"
                                                accept="image/*" onchange="mostrarImagenLogin(event)" required>
                                                @error('imagen_login')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <img id="preview_login" style="max-width: 100%; margin-bottom: 10px;" src="">
                                        <script>
                                            const mostrarImagenLogin = (e)=>{
                                                document.getElementById('preview_login').src = URL.createObjectURL(e.target.files[0]);
                                            }
                                        </script>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <hr>

                        <div class="row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save pe-2"></i>Guardar cambios</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection