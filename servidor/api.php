<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$productos = [
    [
        "id" => 1,
        "nombre" => "Camiseta básica",
        "descripcion" => "Camiseta de algodón 100% en varios colores.",
        "precio" => 12.99,
        "imagen" => "https://via.placeholder.com/400x300?text=Camiseta"
    ],
    [
        "id" => 2,
        "nombre" => "Pantalón vaquero",
        "descripcion" => "Pantalón de mezclilla azul clásico.",
        "precio" => 29.95,
        "imagen" => "https://via.placeholder.com/400x300?text=Pantalon"
    ],
    [
        "id" => 3,
        "nombre" => "Zapatillas deportivas",
        "descripcion" => "Zapatillas ligeras y cómodas para el día a día.",
        "precio" => 45.50,
        "imagen" => "https://via.placeholder.com/400x300?text=Zapatillas"
    ],
];

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    foreach ($productos as $p) {
        if ($p['id'] === $id) {
            echo json_encode($p);
            exit;
        }
    }
    echo json_encode(["error" => "Producto no encontrado"]);
} else {
    echo json_encode($productos);
}
