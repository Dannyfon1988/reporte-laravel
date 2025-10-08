<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ $title }}</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background: #f5f5f5; }
    nav a { margin-right: 10px; text-decoration: none; color: #0066cc; }
    nav a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <h1>{{ $title }}</h1>

  <nav>
    <a href="/report/ventas-por-producto">Ventas por producto</a>
    <a href="/report/televisores">Compras de televisores</a>
    <a href="/report/clientes-mayores-10m">Clientes > 10M</a>
    <a href="/report/total-productos">Total productos</a>
  </nav>

  <table>
    <thead>
      <tr>
        @foreach ($columns as $col)
          <th>{{ $col }}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      @forelse ($rows as $r)
        <tr>
          @foreach ($columns as $col)
            @php $v = $r->$col ?? ''; @endphp
            <td>
              @if (is_numeric($v))
                {{ number_format($v, 0, ',', '.') }}
              @else
                {{ $v }}
              @endif
            </td>
          @endforeach
        </tr>
      @empty
        <tr><td colspan="{{ count($columns) }}">Sin datos</td></tr>
      @endforelse
    </tbody>
  </table>
</body>
</html>
