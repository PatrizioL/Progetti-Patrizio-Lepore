@if (Route::currentRouteName()=='register')
<form method="POST" action="{{route('register')}}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" name="name" class="@error('name') is-invalid @enderror form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Cognome</label>
        <input type="text" name="surname" class="@error('surname') is-invalid @enderror form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="@error('email') is-invalid @enderror form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="@error('password') is-invalid @enderror form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Conferma password</label>
        <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @elseif(Route::currentRouteName()=='login')
  <form method="POST" action="{{route('login')}}">
    @csrf
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="@error('email') is-invalid @enderror form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="@error('password') is-invalid @enderror form-control">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endif