@extends('layouts.app')

@section('content')
@inject('menuflotante','App\Http\Controllers\menuflotante')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Nombre(s)') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="a_paterno">{{ __('Apellido Paterno') }}</label>
                                <input id="a_paterno" type="text" class="form-control @error('a_paterno') is-invalid @enderror" name="a_paterno" value="{{ old('a_paterno') }}" required autocomplete="a_paterno" autofocus>
                                @error('a_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="a_materno">{{ __('Apellido Materno') }}</label>
                                <input id="a_materno" type="text" class="form-control @error('a_materno') is-invalid @enderror" name="a_materno" value="{{ old('a_materno') }}" required autocomplete="a_materno" autofocus>
                                @error('a_materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="genero">{{ __('Genero') }}</label>
                                <select id="genero" type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('genero') }}" required autocomplete="genero" autofocus>
                                <option selected>{{ __('Selecciona una opcion') }}</option>
                                @foreach($menuflotante->genero() as $gen)
                                    <option>{{$gen->genero}}</option>
                                @endforeach
                                </select> 
                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="edad">{{ __('Edad') }}</label>
                                <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}" required autocomplete="edad" autofocus>
                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="e_civil">{{ __('Estado civil') }}</label>
                                <select id="e_civil" type="text" class="form-control @error('e_civil') is-invalid @enderror" name="e_civil" value="{{ old('e_civil') }}" required autocomplete="e_civil" autofocus>
                                <option selected>{{__('Selecciona una opcion')}}</option>
                                @foreach($menuflotante->estado() as $ec)
                                    <option>{{$ec->estado}}
                                @endforeach
                                </select>
                                @error('e_civil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="n_interesaux">{{ __('Nivel de interes') }}</label>
                                <select id="n_interesaux" type="text" class="form-control @error('n_interesaux') is-invalid @enderror" name="n_interesaux" value="{{ old('n_interesaux') }}" required autocomplete="n_interesaux" autofocus>
                                <option selected>{{ __('Selecciona una opcion') }}</option>
                                @foreach($menuflotante->interes() as $inte)
                                    <option value="{{$inte->id}}">{{$inte->interes}}</option>
                                @endforeach
                                </select> 
                                @error('n_interesaux')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="n_interes">{{ __('Especifica tu interés') }}</label>
                                <select id="n_interes" type="text" class="form-control @error('n_interes') is-invalid @enderror" name="n_interes" value="{{ old('n_interes') }}" required autocomplete="n_interes" autofocus disabled>
                                </select>
                                @error('n_interes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email">{{ __('E-mail') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password-confirm">{{ __('Confirmar Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
            $(document).ready(function(){
                $('#n_interesaux').on('change',function(){
                    var inte = $(this).val();
                    $.ajax({
                        url: 'submenu',
                        type: 'get',
                        data: { id : inte },
                    }).done(function(data) {
                        $('#n_interes').empty();
                        
                        $('#n_interes').prop("disabled", false);
                        $.each(data,function(index,value){
                            $('#n_interes').append("<option>"+value.sinteres+"</option>");
                        });
                    }).fail(function() {
                        //$theBut.removeClass('disabled')
                    });                    
                })                                
            });
    </script>
@endsection