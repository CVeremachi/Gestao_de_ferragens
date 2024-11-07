<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ferragens Benjamim</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="/CSS/estilo.css">
    </head>
    <body>
    
    <header>
        <input class="search-bar" type="text" placeholder="Pesquisar...">
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Logout</button>
    </form>
    
    </header>

    
    <div class="container">
        <h1>Bem-vindo a Ferragens Benjamim</h1>
        <p>Compre e/ou alugue aqui connosco o material desejado para sua construção</p>

        <div class="material-boxes">
            <div class="material-box" data-aos="flip-down" onclick="window.location.href='buy.php'">
                <span id="comprar"><i class="fas fa-shopping-cart"></i></span>
                 <h5>Comprar Material</h5>    
            </div>
            <div class="material-box" data-aos="flip-up" onclick="window.location.href='rent.php'">
                <span id="aluguer"><i class="fas fa-tools"></i></span>
                <h5>Alugar Material</h5>
            </div>
            <div class="material-box" data-aos="flip-down">
                <span id="orcamento"><i class="fas fa-file-invoice-dollar"></i></span>
                <h5>Fazer Orçamento</h5>
            </div>
        </div>
    </div>

    
    <footer>
        <p>&copy; 2024 Ferragens Benjamim - Todos os direitos reservados</p>
    </footer>
</body>
<script>
    AOS.init();
  </script>
</html>
