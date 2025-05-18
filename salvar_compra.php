<?php
header('Content-Type: application/json');

// Simulação de banco de dados
$pedidosFile = 'pedidos.json';

// Recebe os dados
$data = json_decode(file_get_contents('php://input'), true);

if (empty($data['itens'])) {
    echo json_encode(['success' => false, 'message' => 'Carrinho vazio']);
    exit;
}

// Gera ID único
$pedidoId = uniqid();

// Monta o pedido
$pedido = [
    'id' => $pedidoId,
    'data' => date('d/m/Y H:i:s'),
    'itens' => $data['itens'],
    'total' => $data['total'],
    'status' => 'recebido'
];

// Salva em arquivo
$pedidos = [];
if (file_exists($pedidosFile)) {
    $pedidos = json_decode(file_get_contents($pedidosFile), true);
}

$pedidos[] = $pedido;
file_put_contents($pedidosFile, json_encode($pedidos));

// Resposta de sucesso
echo json_encode([
    'success' => true,
    'pedidoId' => $pedidoId,
    'message' => 'Pedido recebido com sucesso!'
]);
?>