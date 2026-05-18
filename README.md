![Logo](https://raw.githubusercontent.com/Supabase-PHP/.github/refs/heads/main/profile/art/logo.png)

![PHP](https://img.shields.io/badge/PHP-8.3%2B-656BB4?style=for-the-badge&logo=php")
![Supabase](https://img.shields.io/badge/Supabase-PHP-3ECF8E?style=for-the-badge&logo=supabase)
![Latest Version](https://img.shields.io/packagist/v/supabase-php/supabase.svg?style=for-the-badge&logo=packagist)
![Total Downloads](https://img.shields.io/packagist/dt/supabase-php/supabase.svg?style=for-the-badge&logo=composer)
[![License](https://img.shields.io/packagist/l/supabase-php/supabase.svg?style=for-the-badge&logo=github)](LICENSE)

Modern, Fluent, Lightweight and modular Supabase SDK for PHP ecosystem. Powered by independent packages.

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
