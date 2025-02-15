<style>
  /* .container {
      max-width: 500px;
      margin: 50px auto;
      text-align: left;
      font-family: sans-serif;
  } */
  form {
      border: 1px solid #1A33FF;
      background: #ecf5fc;
      padding: 40px 50px 45px;
  }
  .form-control:focus {
      border-color: #000;
      box-shadow: none;
  }
  label {
      font-weight: 600;
  }
  .error {
      color: red;
      font-weight: 400;
      display: block;
      padding: 6px 0;
      font-size: 14px;
  }
  .form-control.error {
      border-color: red;
      padding: .375rem .75rem;
  }
</style>
<div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
        <form action="" method="post" action="{{ route('contact.store') }}">
        @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control {{ $errors->has('nombre') ? 'error' : '' }}" name="nombre" id="nombre">
                <!-- Error -->
                @if ($errors->has('nombre'))
                <div class="error">{{ $errors->first('nombre') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control {{ $errors->has('telefono') ? 'error' : '' }}" name="telefono" id="telefono">
                @if ($errors->has('telefono'))
                <div class="error">{{ $errors->first('telefono') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label>Asunto</label>
                <input type="text" class="form-control {{ $errors->has('asunto') ? 'error' : '' }}" name="asunto" id="asunto">
                @if ($errors->has('asunto'))
                <div class="error">{{ $errors->first('asunto') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label>Mensaje</label>
                <textarea class="form-control {{ $errors->has('mensaje') ? 'error' : '' }}" name="mensaje" id="mensaje" rows="4"></textarea>
                @if ($errors->has('mensaje'))
                <div class="error">{{ $errors->first('mensaje') }}</div>
                @endif
            </div>
        <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
    </form>
</div>