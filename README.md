# ITCrackers Helper

[![Latest Stable Version](https://img.shields.io/packagist/v/itcrackers/helper.svg)](https://packagist.org/packages/itcrackers/helper)
[![Total Downloads](https://img.shields.io/packagist/dt/itcrackers/helper.svg)](https://packagist.org/packages/itcrackers/helper)
[![License](https://img.shields.io/packagist/l/itcrackers/helper.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://www.php.net)

A lightweight, framework-independent PHP utility package that provides **Masking**, **Validation**, and **Formatting** helpers for Core PHP and modern PHP frameworks such as Laravel.

---

## 📖 Table of Contents

- Features
- Requirements
- Compatibility
- Installation
- Available Modules
- Quick Start
- Usage
- Examples
- Testing
- Project Structure
- Versioning
- Changelog
- Contributing
- Security
- Support
- License
- Author

---

# ✨ Features

- Framework Independent
- Supports Core PHP
- Supports Laravel
- PSR-4 Autoloading
- Lightweight
- High Performance
- Easy Integration
- Zero Configuration
- Clean API
- Production Ready
- Composer Installable
- Fully Object-Oriented

---

# ⚙️ System Requirements

| Software | Minimum Version |
|----------|-----------------|
| PHP | 8.2+ |
| Composer | 2.5+ |

---

# 📋 Compatibility

| Platform | Support |
|----------|---------|
| Core PHP | ✅ |
| Laravel 11 | ✅ |
| Laravel 12 | ✅ |
| Symfony | ✅ |
| CodeIgniter | ✅ |
| CakePHP | ✅ |
| Slim Framework | ✅ |
| Yii Framework | ✅ |

---

# 📦 Installation

Install the package via Composer.

```bash
composer require itcrackers/helper
```

---

# 🚀 Quick Start

## Core PHP

```php
<?php

require 'vendor/autoload.php';

use ITCrackers\Helper\Masking;

echo Masking::email('john@example.com');
```

---

## Laravel

```php
use ITCrackers\Helper\Masking;

echo Masking::email('john@example.com');
```

---

# 📚 Available Modules

## 🔐 Masking

Hide sensitive information before displaying it.

| Method | Description |
|---------|-------------|
| email() | Mask Email Address |
| phone() | Mask Mobile Number |
| aadhaar() | Mask Aadhaar Number |
| pan() | Mask PAN Number |
| passport() | Mask Passport Number |
| account() | Mask Bank Account Number |
| card() | Mask Credit/Debit Card Number |

---

## ✅ Validation

Validate commonly used data formats.

| Method | Description |
|---------|-------------|
| email() | Validate Email Address |
| phone() | Validate Mobile Number |
| aadhaar() | Validate Aadhaar Number |
| pan() | Validate PAN Number |
| ifsc() | Validate IFSC Code |
| gstin() | Validate GSTIN |
| passport() | Validate Passport Number |
| pincode() | Validate PIN Code |
| url() | Validate URL |
| ip() | Validate IP Address |
| ipv4() | Validate IPv4 Address |
| ipv6() | Validate IPv6 Address |
| uuid() | Validate UUID |
| macAddress() | Validate MAC Address |
| password() | Validate Password Strength |
| creditCard() | Validate Credit Card |
| upi() | Validate UPI ID |
| vehicleNumber() | Validate Vehicle Registration Number |

---

# 💻 Usage

## Core PHP

```php
<?php

require 'vendor/autoload.php';

use ITCrackers\Helper\Masking;
use ITCrackers\Helper\Validation;

echo Masking::email('john@example.com');

echo Masking::phone('8619844326');

Validation::email('john@example.com');

Validation::phone('8619844326');
```

---

## Laravel

```php
<?php

use ITCrackers\Helper\Masking;
use ITCrackers\Helper\Validation;

Masking::aadhaar('123412341234');

Validation::aadhaar('123412341234');
```

---

# 📖 Examples

## Email Masking

```php
Masking::email('john@example.com');
```

Output

```
jo***@example.com
```

---

## Phone Masking

```php
Masking::phone('8619844326');
```

Output

```
86******26
```

---

## Aadhaar Masking

```php
Masking::aadhaar('123412341234');
```

Output

```
XXXXXXXX1234
```

---

## PAN Masking

```php
Masking::pan('ABCDE1234F');
```

Output

```
ABCXXXXXXF
```

---

## Email Validation

```php
Validation::email('john@example.com');
```

Output

```
true
```

---

## Phone Validation

```php
Validation::phone('8619844326');
```

Output

```
true
```

---

## Aadhaar Validation

```php
Validation::aadhaar('123412341234');
```

Output

```
true
```

---

## PAN Validation

```php
Validation::pan('ABCDE1234F');
```

Output

```
true
```

---

# 🧪 Running Tests

Run PHPUnit tests.

```bash
vendor/bin/phpunit
```

---

# 📁 Project Structure

```
itcrackers-helper/
│
├── src/
│   ├── Masking.php
│   ├── Validation.php
│   └── ...
│
├── tests/
│
├── composer.json
├── phpunit.xml
├── README.md
├── CHANGELOG.md
├── CONTRIBUTING.md
├── LICENSE
└── .gitignore
```

---

# 🔖 Versioning

This project follows **Semantic Versioning (SemVer)**.

| Version | Description |
|----------|-------------|
| Major (X.0.0) | Breaking Changes |
| Minor (1.X.0) | New Features |
| Patch (1.0.X) | Bug Fixes |

Example

```
v1.0.0
v1.1.0
v1.1.1
```

---

# 📜 Changelog

See the **CHANGELOG.md** file for complete release history.

---

# 🤝 Contributing

Contributions are always welcome.

### Development Workflow

```bash
git clone https://github.com/ITCrackers/helper.git

cd helper

composer install
```

Create a feature branch.

```bash
git checkout -b feature/new-feature
```

Commit your changes.

```bash
git commit -m "Add new feature"
```

Push your branch.

```bash
git push origin feature/new-feature
```

Finally, create a Pull Request.

---

# 🔒 Security

If you discover any security vulnerability, please create a private issue or contact the maintainer before publicly disclosing it.

---

# ⭐ Support

If you find this package useful, please consider:

- ⭐ Starring the repository on GitHub
- 🐞 Reporting bugs
- 💡 Suggesting new features
- 🤝 Contributing to the project

---

# 📄 License

This package is open-sourced software licensed under the **MIT License**.

See the **LICENSE** file for more information.

---

# 👨‍💻 Author

**ITCrackers**

GitHub

https://github.com/ITCrackers

Packagist

https://packagist.org/packages/itcrackers/helper

---

## ❤️ Made with PHP by ITCrackers
