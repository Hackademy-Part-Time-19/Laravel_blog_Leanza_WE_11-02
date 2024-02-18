<x-main-layout>
    <x-navbar />




    <form class="form" action="/register" method="POST" style="justify-content: start;padding-top:40px">
        @csrf
        <div class="containerForm">

            <div class="mb-3">
                <h1 style="margin-bottom:20px">Registrati</h1>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="exampleInputText"
                        value="{{ old('name') }}">
                </div>
                @error('name')
                    <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
                @enderror
                <div>
                    <label for="email" class="form-label">Inserisci la tua email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputText"
                        value="{{ old('email') }}">
                </div>

                @error('email')
                    <div id="alertError" style="margin-top:20px"><span class="alert-danger">{{ $message }}</span></div>
                @enderror
                <div class="mb-3 mt-2">
                    <label for="password" class="form-label">Inserisci la tua password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputText"
                        value="{{ old('password') }}">
                </div>
                @error('password')
                    <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
                @enderror
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Ripeti la tua password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputText"
                        value="{{ old('password') }}">
                </div>
                @error('password_confirmation')
                    <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
                @enderror
                <div class="containerButtonForm">
                    <form action="" method="POST">
                        @csrf
                        <button class="btn btn-secondary" type="submit">Verifica email</button>
                    <button style="margin-bottom: 10px" id="submit" type="submit" class="btn btn-secondary">Registrati</button>
                
                    </form>
                </div>

            </div>
    </form>

</x-main-layout>
