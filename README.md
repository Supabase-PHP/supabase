![Logo](https://raw.githubusercontent.com/Supabase-PHP/.github/refs/heads/main/profile/art/logo.png)
![Packagist Version](https://img.shields.io/packagist/v/supabase-php/laravel?style=flat&logo=composer&logoColor=%23fff)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/supabase-php/laravel/php?style=flat&logo=php&logoColor=blue&label=PHP&color=blue)
![Packagist License](https://img.shields.io/packagist/l/supabase-php/laravel?style=flat&label=License&color=blue)
![Packagist Downloads](https://img.shields.io/packagist/dt/supabase-php/laravel?style=flat&logo=packagist&label=Downloads&color=blue)
![Packagist Stars](https://img.shields.io/packagist/stars/supabase-php/laravel?style=flat&logo=github&logoColor=%23ffffff&label=%F0%9F%8C%9F%20Stars)

Modern modular Supabase SDK for PHP powered by independent packages.

---

## ✨ Features

- Modular architecture
- Fluent query builder
- Authentication & JWT
- Storage management
- Realtime subscriptions
- Edge Functions
- AI vector search
- Laravel integration
- Async support
- DTOs & typed responses
- PSR compliant
- Modern PHP 8.3+

---

## 📦 Installation

Install full ecosystem:

```bash
composer require supabase-php/supabase
```

---

## 🚀 Quick Start

```php
<?php

require 'vendor/autoload.php';

use Supabase\Supabase;

$supabase = new Supabase(
    url: 'https://your-project.supabase.co',
    apiKey: 'your-anon-key'
);

$users = $supabase
    ->db()
    ->table('users')
    ->select('*')
    ->execute();
```

---

## 🤝 Contributing

1. Fork repository
2. Create feature branch
3. Commit changes
4. Push branch
5. Open PR to `develop`

---

## 📜 License

MIT License

---

## ❤️ Philosophy

Built for developers who want:

- Clean APIs
- Modern architecture
- Scalable applications
- AI-ready infrastructure
- Enterprise-grade reliability
- Exceptional PHP developer experience

---

## 🌐 Links

- Packagist: https://packagist.org/packages/supabase-php/supabase
- Supabase: https://supabase.com

---

## ⭐ Support

If this project helps you, consider giving it a GitHub star.
