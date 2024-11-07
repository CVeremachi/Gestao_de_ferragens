
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Materiais - Ferragens Benjamim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/buy.css') }}">
</head>
<body>

<section class="materials-list">
    <h2>Lista de Materiais Disponíveis</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Preço de Aluguer</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materiais as $material)
            <tr>
                <td>{{ $material->nome }}</td>
                <td>{{ number_format($material->preco, 2, ',', '.') }} MT</td>
                <td>{{ number_format($material->preco_aluguer, 2, ',', '.') }} MT</td>
                <td>{{ $material->status }}</td>
                <td>
                    <form action="" method="POST" style="display: inline-block;">
                        @csrf
                        <input type="hidden" name="material_id" value="{{ $material->id }}">
                        <button type="submit" class="buy-btn"><i class="fas fa-shopping-cart"></i> Comprar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

<h2>Cesta de Compras</h2>
<table id="cesta-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        @if(session('cesta'))
            @foreach(session('cesta') as $item)
                <tr>
                    <td>{{ $item['nome'] }}</td>
                    <td>{{ number_format($item['preco'], 2, ',', '.') }} MT</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2">Nenhum material selecionado.</td>
            </tr>
        @endif
    </tbody>
</table>

@if(session('cesta'))
    <form action="" method="POST">
        @csrf
        <button type="submit" class="finalize-btn">Finalizar Compra</button>
    </form>
@endif

</body>
</html>
