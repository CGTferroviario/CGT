<form action="" method="post" action="{{ route('contact.store') }}">
    @csrf
    <div class="form-group">
        <label>Nombre empresa</label>
        <input type="text" class="form-control {{ $errors->has('nombre') ? 'error' : '' }}" name="nombre" id="nombre">
        <!-- Error -->
        @if ($errors->has('nombre'))
        <div class="error">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" class="form-control {{ $errors->has('telefono') ? 'error' : '' }}" name="telefono" id="telefono">
        @if ($errors->has('telefono'))
        <div class="error">
            {{ $errors->first('telefono') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Asunto</label>
        <input type="text" class="form-control {{ $errors->has('asunto') ? 'error' : '' }}" name="asunto"
            id="asunto">
        @if ($errors->has('asunto'))
        <div class="error">
            {{ $errors->first('asunto') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Mensaje</label>
        <textarea class="form-control {{ $errors->has('mensaje') ? 'error' : '' }}" name="mensaje" id="mensaje"
            rows="4"></textarea>
        @if ($errors->has('mensaje'))
        <div class="error">
            {{ $errors->first('mensaje') }}
        </div>
        @endif
    </div>
    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>