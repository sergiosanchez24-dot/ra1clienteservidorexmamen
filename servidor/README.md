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

### 🔹 Ejercicio 1: Añadir nuevos campos al JSON, img y categoria
- Agrega un nuevo campo JSON llamado `img` y `categoria`
- Para el campo img busca imagenes de prueba en Google.

---

### 🔹 Ejercicio 2: Añade nuevos productos al JSON, en total 6 nuevos productos
- Añade nuevos productos.

---

### 🔹 Ejercicio 3: Recorrer un JSON y mostrarlo por terminal


- Comprobar que sabes leer y recorrer datos JSON en PHP utilizando foreach.

- Instrucciones:

Moidifica la  función llamada mostrarProductosJSON() en el archivo api.php.

Dentro de la función:

Carga el JSON del array $productos con json_encode().

Convierte ese JSON de nuevo a un array asociativo con json_decode().

Recorre el array resultante con foreach y muestra los nombres y precios de cada producto por pantalla (solo en modo texto, no en JSON).

Para probarlo llamaramos a la API: `http://localhost/ra1clienteservidorexmamen/servidor/api.php?modo=texto
---

### 🔹 Ejercicio 4: Filtrado de productos por GET
- Modifica el código para que, si el usuario pasa un parámetro `max` (por ejemplo `?max=30`), la API devuelva **solo los productos cuyo precio sea menor o igual a ese valor**.
- Ejemplo:  
  `GET http://localhost/ra1clienteservidorexmamen/servidor/api.php?max=30`

📍 *Pista:*  
Puedes usar `array_filter($productos, fn($p) => $p['precio'] <= $max)`. 
Ejemplo:  $productosFiltrados = array_filter($productos, fn($p) => $p['precio'] <= $max);

---


## 🧩 Recomendaciones
- No es necesario conectar a una base de datos real, solo trabajar con arrays.
- Comprueba que el archivo devuelva siempre un JSON válido (`jsonlint.com` puede ayudarte).
