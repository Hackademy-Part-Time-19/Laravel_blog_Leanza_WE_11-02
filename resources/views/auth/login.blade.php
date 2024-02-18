<x-main-layout>
    <x-navbar />

    <form class="form" action="/login" method="POST" style="justify-content: start;padding-top:100px">
      @csrf
    <div class="containerForm" style="min-height:200px; height:400px;">
 
      <div class="mb-3">
          <h1 style="margin-bottom:20px">Login</h1>
          <label for="email" class="form-label">Inserisci la tua email</label>
          <input type="email" name="email" class="form-control" id="exampleInputText" value="{{old('email')}}" >
      </div>
      @error('email') <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>@enderror
      <div class="mb-3">
          <label for="password" class="form-label">Inserisci la tua password</label>
          <input type="password" name="password" class="form-control" id="exampleInputText" value="{{old('password')}}" >
      </div> 
      @error('password')  <div id="alertError"><span class="alert-danger">{{ $message }}</span></div> @enderror
     
      <div class="containerSubmitForm">
          <button id="submit" type="submit" class="btn btn-secondary">Login</button>
      </div>
  </div>

</form>


</x-main-layout>
