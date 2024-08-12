<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle de Venta</h1>

    <p><strong>Producto:</strong> {{ $venta->nombre_producto }}</p>
    <p><strong>Cantidad:</strong> {{ $venta->cantidad }}</p>
    <p><strong>Precio:</strong> {{ $venta->precio }}</p>
    <p><strong>Cliente:</strong> {{ $venta->cliente }}</p>
    <p><strong>Fecha:</strong> {{ $venta->fecha_venta }}</p>

    <a href="{{ route('ventas.index') }}">Volver al listado</a>
</body>
</html>