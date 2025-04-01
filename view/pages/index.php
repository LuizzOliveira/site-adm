<?php
require_once __DIR__ . '/../../config/config-componentes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once Config::$paths['header']; ?>

<body class="body">

    <!-- navegação -->
    <?php require_once Config::$paths['navbar']; ?>

    <!-- lateral -->
    <?php require_once Config::$paths['sidebar']; ?>

    <main class="content-grid">
        <?php
        $pages = [
            'home' => __DIR__ . '/../pages/Login/home.php',
            'produtos' => __DIR__ . '/../pages/Produtos/produtos.php',
            'pedidos'    => __DIR__ . '/../pages/Pedidos/pedidos.php',
            'clientes'   => __DIR__ . '/../pages/Clientes/clientes.php',
            'updateProduto'   => __DIR__ . '/../pages/Produtos/updateProduto.php',
            'updatePedido'   => __DIR__ . '/../pages/Pedidos/updatePedido.php',
            'updateCliente'   => __DIR__ . '/../pages/Clientes/updateCliente.php',
            'excluirCliente'   => __DIR__ . '/../pages/Clientes/excluirCliente.php',
            'excluirProduto'   => __DIR__ . '/../pages/Produtos/excluirProduto.php',
            'excluirPedido'   => __DIR__ . '/../pages/Pedidos/excluirPedido.php',
            'viewPedidos'   => __DIR__ . '/../pages/Pedidos/viewPedidos.php',
        ];

        $page = $_GET['page'] ?? 'home';
        if($page == false){
            echo $page;
            $page = 'home'; 
        }
        
        if (array_key_exists($page, $pages) && file_exists($pages[$page]) && $page != null) {
            require_once $pages[$page];
        } else {
            require_once __DIR__ . '/home.php';
        }
        ?>
    </main>

    <?php require_once Config::$paths['footer']; ?>

</body>
</html>
