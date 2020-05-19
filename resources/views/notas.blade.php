@if (session('mensaje'))
    <p>{{ session('mensaje') }}</p>
@endif
<form action="{{ route('notas.crear') }}" method="POST">
    @csrf
    <input type="text" name="nombre" id="nombre">
    <input type="text" name="descripcion" id="descripcion">
    <button type="submit" >Agregar</button>
</form>
@foreach ($notas as $item)    
    <p> {{$item->nombre}}  {{$item->descripcion}} </p>
@endforeach