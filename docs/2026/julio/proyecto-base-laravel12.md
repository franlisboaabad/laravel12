# Proyecto base Laravel 12 — Julio 2026

Documento de avance del scaffold reutilizable para futuros proyectos.

## Stack

| Pieza | Detalle |
|-------|---------|
| Framework | Laravel 12 |
| PHP | ^8.2 |
| Roles / permisos | `spatie/laravel-permission` |
| Admin UI | [Sneat Bootstrap Free](https://github.com/themeselection/sneat-bootstrap-html-admin-template-free) |
| Frontend build | Vite 6 + Tailwind 4 (stock Laravel; el admin usa assets estáticos de Sneat) |

## Qué se hizo

### 1. Integración del tema Sneat

- Assets del tema copiados a `public/assets/` (CSS, JS, imágenes, vendor).
- Layouts Blade del panel y autenticación.
- Partials reutilizables: menú, navbar, footer, styles, scripts, logo.
- Dashboard de prueba y pantalla de login (UI; auth real pendiente).

### 2. Separación de vistas Admin / Web

```
resources/views/
├── Admin/
│   ├── auth/login.blade.php
│   ├── dashboard/index.blade.php
│   └── layouts/
│       ├── app.blade.php
│       ├── auth.blade.php
│       └── sections/
└── Web/
    ├── home.blade.php
    └── layouts/app.blade.php
```

- **Admin**: panel con Sneat (`Admin.layouts.app`, `Admin.layouts.auth`).
- **Web**: área pública (layout mínimo por ahora).

### 3. Rutas

| URL | Nombre | Vista |
|-----|--------|--------|
| `/` | `home` | `Web.home` |
| `/admin` | `dashboard` | `Admin.dashboard.index` |
| `/admin/login` | `login` | `Admin.auth.login` |

### 4. AdminSeeder

Archivo: `database/seeders/AdminSeeder.php`  
Registrado en `DatabaseSeeder`.

| Campo | Valor |
|-------|--------|
| Email | `admin@admin.com` |
| Clave | `admin123@` |
| Rol | `Admin` |

Comportamiento: crea el rol `Admin` si no existe (`firstOrCreate`), crea/actualiza el usuario (`updateOrCreate`) y asigna el rol (`syncRoles`).

```bash
php artisan migrate --seed
# o
php artisan db:seed --class=AdminSeeder
```

## Uso rápido de layouts

```blade
{{-- Panel admin --}}
@extends('Admin.layouts.app')

{{-- Auth admin --}}
@extends('Admin.layouts.auth')

{{-- Web pública --}}
@extends('Web.layouts.app')
```

## Pendiente (próximos pasos sugeridos)

- [ ] Autenticación real (login/logout) cableada al usuario admin
- [ ] Middleware de roles Spatie en rutas `/admin`
- [ ] Logout funcional en navbar
- [ ] Ampliar menú Admin según módulos de cada proyecto
- [ ] Layout Web más completo cuando se defina el frente público

## Notas

- El CLI de Laragon puede estar en una versión de PHP inferior a la requerida por Laravel 12; usar PHP ≥ 8.2/8.3 para `artisan`.
- La carpeta temporal del clone de Sneat (`tmp-sneat`) no forma parte del proyecto; los assets viven en `public/assets`.
