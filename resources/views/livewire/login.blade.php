    <div class="row justify-content-center mt-4">
        <div class="col-md-6  col-sm-10 ">
            <div class="card mt-5 shadow">
                <div class="card-header "><strong>{{ config('app.name', 'Laravel') }}</strong></div>

                <div class="card-body">
                    <form wire:submit.prevent='{{$identifiantMode ? "loginIdentifiant":"login"}}'>
                        {{-- <form method="POST" action="{{ route('login') }}"> --}}
                        {{-- @csrf --}}

                        @if ($identifiantMode)
                            <div class="col-md-12 mt-3  mx-auto">
                                <strong class="fs-5">IDENTIFIANT</strong>

                                <div class="input-group ">
                                    <span class="input-group-text"> <i class="fas fa-user-check"></i> </span>
                                    <div class="form-floating ">
                                    <input type="tel" wire:model.live='identifiant' class="form-control @error('identifiant') is-invalid @enderror" name="identifiant" value="{{ old('identifiant') }}"  autocomplete="identifiant" autofocus id="floatingInputGroup2" placeholder="Identifiant" required>
                                    <label for="floatingInputGroup2"> Saisir votre identifiant a 11 chiffre </label>
                                    </div>
                                </div>
                                @error('identifiant')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        @else
                            <div class="col-md-12 mt-3  mx-auto">
                                <strong class="fs-5">Email</strong>

                                <div class="input-group ">
                                    <span class="input-group-text"> <i class="fas fa-user-check"></i> </span>
                                    <div class="form-floating ">
                                        {{-- <input type="tel" name="" id=""> --}}
                                    <input type="email" wire:model.live='email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus id="floatingInputGroup2" placeholder="Email" required>
                                    <label for="floatingInputGroup2"> Saisir votre adresse Email   </label>
                                    </div>
                                </div>
                                @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        @endif

                        <div  x-data="{ eye: false }" class="col-md-12 mt-3  mx-auto">
                            <strong class="fs-5">CODE PERSONNEL</strong>
                            <div class="input-group">
                                <button class="input-group-text" x-on:click=" eye =! eye "> <i x-bind:class=" eye ? 'fas fa-eye' : 'fas fa-eye-slash'"></i> </button>
                                <div class="form-floating ">
                                  <input x-bind:type=" eye ? 'text' : 'password'" wire:model.live='password' class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  autocomplete="password"  id="floatingInputGroup3" placeholder="password" required>
                                  <label for="floatingInputGroup3">Saisir votre code personnel</label>
                                </div>
                              </div>
                             @error('password')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        </div>

                        @if ($error)
                            <div class="row mb-3 text-danger">
                                <p class="text-center">
                                    Adresse Email ou mots de passe incorrect
                                </p>
                            </div>
                        @endif


                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 text-center justify-content-center">
                            {{-- <div class="col-md-8 offset-md-4"> --}}
                                <button type="submit" class="btn {{ $errors->all() ? 'btn-danger disabled': 'btn-primary'}} col-4">
                                    {{ __('Connexion') }}
                                </button>
                                {{-- <a href="/register">inscription</a> --}}
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            {{-- </div> --}}
                        </div>
                        <div class="row mb-3 text-center text-primary">
                            {{-- <div class="col-md-8 offset-md-4"> --}}
                                @if ($identifiantMode)
                                    <a  wire:click='changeMode' class="btn text-primary" style="text-decoration: underline;">compte creé mais pas encore verifié !</a>
                                @else
                                    <a wire:click='changeMode' class="btn text-primary "  style="text-decoration: underline;">compte creé deja verifié !</a>
                                @endif
                            {{-- </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

