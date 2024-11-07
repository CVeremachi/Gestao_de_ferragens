<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Ferragem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/style3.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Ferragens Benjamim</h1>
        </header>
        <div class="operacoes">

            <div class="userss">
                <span id="users"><i class="fa-solid fa-user"></i></span>
                <h5>{{$totalUsuarios}}</h5>
            </div>

            <div class="material">
                <span id="materials"><i class="fas fa-tools"></i></span>
                <h5>{{$totalMateriais}}</h5>
            </div>

            <div class="dinheiro">
                <span id="tako"><i class="fas fa-coins"></i></span>
                <h5>40000</h5>
            </div>

            <div class="pedidos">
            <span id="pedido"><i class="fas fa-shopping-cart"></i></span>
            <h5>4</h5>
            </div>
        </div>

        <div class="botoes">
        <button id="add-material-button">Adicionar Material</button>
        <a href="Php/relatorio.php"><button>Gerar Relatorio</button></a>

        
       
        <form method="POST" action="{{ route('logout') }}">
             @csrf 
        <button type="submit" id="botao">Sair</button>
        </form>

        </div>

        <section class="materials-list">
            <h2>Lista de Materiais</h2>
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
                <tbody id="materials-table-body">
    @forelse ($materiais as $material)
        <tr>
            <td>{{ $material->nome }}</td>
            <td>{{ number_format($material->preco, 2, ',', '.') }} MT</td>
            <td>{{ number_format($material->preco_aluguer, 2, ',', '.') }} MT</td>
            <td>{{ $material->status }}</td>
            <td>
                <!-- Link para Editar -->
                <a href="">
                    <button class="edit-btn">Editar</button>
                </a>
                
                <!-- Link para Remover -->
                <a href="">
                    <button class="delete-btn">Remover</button>
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Nenhum material encontrado.</td>
        </tr>
    @endforelse
</tbody>

            </table>
        </section>

        
    </div>

    <div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-modal">&times;</span>
        <h2>Adicionar Material</h2>
        <form method="POST" id="add-material-form">
    <label for="material-name">Nome do Material:</label>
    <input type="text" name="material_name" id="material-name" placeholder="Nome do material" required>

    <label for="material-price">Preço de Venda:</label>
    <input type="number" name="material_price" id="material-price" placeholder="Preço de venda" required>

    <label for="rental-price">Preço de Aluguer:</label>
    <input type="number" name="rental_price" id="rental-price" placeholder="Preço de aluguer">

    <label for="material-status">Status:</label>
    <select name="material_status" id="material-status" required>
        <option value="venda">Venda</option>
        <option value="aluguer">Aluguer</option>
        <option value="venda e aluguer">Venda e Aluguer</option>
    </select>

    <button type="submit">Adicionar Material</button>
</form>

    </div>
</div>



    <script src="Js/scripts.js"></script>
</body>
</html>
