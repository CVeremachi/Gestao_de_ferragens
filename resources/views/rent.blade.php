<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Materiais - Ferragens Benjamim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/buy.css">
</head>
<body>

<section class="materials-list">
    <h2>Lista de Materiais Disponíveis para Aluguer</h2>
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
            <?php if ($materiais->num_rows > 0): ?>
                <?php while ($row = $materiais->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['nome']); ?></td>
                        <td><?php echo number_format(htmlspecialchars($row['preco']), 2, ',', '.'); ?> MT</td>
                        <td><?php echo number_format(htmlspecialchars($row['preco_aluguer']), 2, ',', '.'); ?> MT</td>
                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                        <td>
                            <form action="" method="POST" style="display: inline-block;">
                                <input type="hidden" name="material_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="rent-btn">Alugar</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Nenhum material encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

<h2>Materiais Selecionados para Aluguer</h2>
<table id="orcamento-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço de Aluguer</th>
        </tr>
    </thead>
    <tbody id="orcamento-body">
        <?php if (!empty($_SESSION['orcamento'])): ?>
            <?php foreach ($_SESSION['orcamento'] as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['nome']); ?></td>
                    <td><?php echo number_format(htmlspecialchars($item['preco_aluguer']), 2, ',', '.'); ?> MT</td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="2">Nenhum material selecionado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php if (!empty($_SESSION['orcamento'])): ?>
    <form action="" method="POST">
        <button type="submit" name="finalizar_aluguel" class="finalize-btn">Finalizar Aluguel</button>
    </form>
<?php endif; ?>

</body>
</html>
