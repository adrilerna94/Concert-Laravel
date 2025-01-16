
# Ejercicio 01: Gestión de Conciertos y Bandas

## 1. Crear Tablas

### Conciertos:
- Nombre
- Día y hora de inicio
- Día y hora de fin
- Número máximo de personas
- Número de entradas vendidas

### Bandas:
- Nombre
- Tipo de música
- Cantidad de miembros

## 2. Relaciones

- **Una banda puede tocar en varios conciertos** (relación muchos a muchos).
- **Un concierto puede tener varias bandas**.

## 3. Controladores y Rutas

Implementa rutas y controladores para las operaciones CRUD sobre conciertos y bandas.

### Ejemplo de rutas:
- `GET /conciertos`
- `GET /conciertos/{id}`
- `POST /conciertos`
- `PUT /conciertos/{id}`
- `DELETE /conciertos/{id}`

## 4. Factories y Seeders

- Crea un `Factory` para los modelos `Concert` y `Band`.
- Genera al menos 20 conciertos con 10 bandas diferentes por concierto.

## 💻 Comandos 💻

# Crear model amb TOT (factory, seeder, etc)
``` php artisan make:model Flight -a ```

# Crear les taules
```php artisan migrate```

# Regenerar les taules
```php artisan migrate:fresh```

# Correr seeders
```php artisan db:seed```

# Correr migrations de nou am seeders
```php artisan migrate:fresh --seed```
