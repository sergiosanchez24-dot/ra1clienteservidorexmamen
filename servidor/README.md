# 🧠 EXAMEN: Servidor - API REST en PHP

## 🗂️ Contexto
Esta parte del examen corresponde al **lado servidor (backend)** de la tienda online.  
El servidor se encargará de **proporcionar datos JSON** a las peticiones que lleguen desde el cliente (HTML + JS).

---

## 🎯 Objetivos
- Comprender el funcionamiento de una API REST sencilla.
- Devolver información en formato **JSON**.
- Simular una base de datos estática usando arrays en PHP.
- Implementar filtros y respuestas dinámicas mediante **parámetros GET**.

---

## 🧩 Estructura del servidor

servidor/
└── api.php


---

## 📄 Descripción de `api.php`
El archivo `api.php` actúa como punto central de la API REST.  
Su función es devolver un **listado de productos** o **un producto específico** si se envía un parámetro `id`.

### Ejemplo de uso
- `GET http://localhost/tienda-online/servidor/api.php` → devuelve todos los productos.
- `GET http://localhost/tienda-online/servidor/api.php?id=2` → devuelve el producto con ID 2.

---

## 🧪 Ejercicios propuestos

### 🔹 Ejercicio 1: Añadir un nuevo producto
- Agrega un nuevo producto al array `$productos`.
- Debe contener las claves: `id`, `nombre`, `descripcion`, `precio` e `imagen`.

---

### 🔹 Ejercicio 2: Crear un filtro por precio máximo
- Modifica el código para que, si el usuario pasa un parámetro `max` (por ejemplo `?max=30`), la API devuelva **solo los productos cuyo precio sea menor o igual a ese valor**.
- Ejemplo:  
  `GET http://localhost/tienda-online/servidor/api.php?max=30`

📍 *Pista:*  
Puedes usar `array_filter($productos, fn($p) => $p['precio'] <= $max)`.

---

### 🔹 Ejercicio 3: Añadir encabezado con código de estado HTTP
- Devuelve un código `404` si el producto no existe.  
- Devuelve un código `200` si la respuesta es correcta.

---

### 🔹 Ejercicio 4 (opcional): Permitir peticiones POST para añadir productos
- Usa `file_get_contents('php://input')` para leer los datos enviados en formato JSON.
- Añade el nuevo producto al array y devuélvelo como respuesta.

---

## 🧠 Puntuación orientativa (total 10 puntos)
| Apartado | Descripción | Puntos |
|-----------|--------------|--------|
| Estructura y comprensión del código PHP | Claridad y organización del script | 2 |
| JSON y encabezados HTTP | Correcta salida y codificación de datos | 3 |
| Filtros o parámetros GET | Implementación funcional y validación | 3 |
| Ampliación (POST u otros métodos) | Capacidad de mejora o extensión | 2 |

---

## 🧩 Recomendaciones
- No es necesario conectar a una base de datos real, solo trabajar con arrays.
- Prueba tus endpoints directamente en el navegador o con herramientas como **Postman** o **curl**.
- Comprueba que el archivo devuelva siempre un JSON válido (`jsonlint.com` puede ayudarte).
