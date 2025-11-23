<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Productos</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body { font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; background:#f7f7f8; color:#222; padding:20px; }
    .card { background:white; border-radius:8px; padding:16px; box-shadow:0 2px 6px rgba(0,0,0,0.06); margin-bottom:12px; }
    .precio { font-weight:700; }
  </style>
</head>
<body>
  <h1>Lista de productos</h1>

  @if($productos->isEmpty())
    <p>No hay productos en la base de datos.</p>
  @else
    @foreach($productos as $p)
      <div class="card">
        <h2>{{ $p->nombre }}</h2>
        <p>{{ $p->descripcion }}</p>
        <p class="precio">$ {{ number_format($p->precio, 2) }}</p>
      </div>
    @endforeach
  @endif

</body>
</html>
