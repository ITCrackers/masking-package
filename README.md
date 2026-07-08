# ITCrackers Helper

[![Latest Stable Version](https://img.shields.io/packagist/v/itcrackers/helper.svg)](https://packagist.org/packages/itcrackers/helper)
[![Total Downloads](https://img.shields.io/packagist/dt/itcrackers/helper.svg)](https://packagist.org/packages/itcrackers/helper)
[![License](https://img.shields.io/packagist/l/itcrackers/helper.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/PHP-%5E8.2-blue.svg)](https://www.php.net)

A lightweight, framework-independent PHP helper package that provides masking, validation, and formatting utilities for Core PHP and PHP frameworks such as Laravel.

---

## ✨ Features

- Supports Core PHP
- Supports Laravel
- PSR-4 Autoloading
- Lightweight & Fast
- Framework Independent
- Easy Integration
- Zero Configuration

---

## 📦 Installation

Install via Composer.

```bash
composer require itcrackers/helper
```

---

## ⚙️ Requirements

| Requirement | Version |
|------------|---------|
| PHP | >= 8.2 |
| Composer | Latest |

---

# Available Modules

## Masking

Hide sensitive information before displaying it.

| Method | Description |
|---------|-------------|
| email() | Mask Email Address |
| phone() | Mask Mobile Number |
| aadhaar() | Mask Aadhaar Number |
| pan() | Mask PAN Number |
| account() | Mask Bank Account Number |
| card() | Mask Credit/Debit Card |
| passport() | Mask Passport Number |

---

## Validation

Validate common data formats.

| Method | Description |
|---------|-------------|
| email() | Validate Email |
| phone() | Validate Mobile Number |
| aadhaar() | Validate Aadhaar |
| pan() | Validate PAN |
| ifsc() | Validate IFSC |
| gstin() | Validate GSTIN |
| passport() | Validate Passport |
| pincode() | Validate PIN Code |
| url() | Validate URL |
| ip() | Validate IP |
| ipv4() | Validate IPv4 |
| ipv6() | Validate IPv6 |
| uuid() | Validate UUID |
| macAddress() | Validate MAC Address |
| password() | Validate Password |
| creditCard() | Validate Credit Card |
| upi() | Validate UPI ID |
| vehicleNumber() | Validate Vehicle Number |

---

# Usage

## Core PHP

```php
<?php

require 'vendor/autoload.php';

use ITCrackers\Helper\Masking;
use ITCrackers\Helper\Validation;

echo Masking::email('john@example.com');

var_dump(
    Validation::email('john@example.com')
);
```

---

## Laravel

```php
use ITCrackers\Helper\Masking;
use ITCrackers\Helper\Validation;

Masking::phone('8619844326');

Validation::phone('8619844326');
```

---

# Examples

## Email

```php
Masking::email('john@example.com');
```

Output

```
jo***@example.com
```

---

## Phone

```php
Masking::phone('8619844326');
```

Output

```
86******26
```

---

## Aadhaar

```php
Masking::aadhaar('123412341234');
```

Output

```
XXXXXXXX1234
```

---

## PAN

```php
Masking::pan('ABCDE1234F');
```

Output

```
ABCXXXXXXF
```

---

## Validation

```php
Validation::email('john@example.com');

Validation::phone('8619844326');

Validation::aadhaar('123412341234');

Validation::pan('ABCDE1234F');
```

---

# Project Structure

```
itcrackers-helper/
│
├── src/
│   ├── Masking.php
│   ├── Validation.php
│   ├── Formatter.php
│   └── ...
│
├── tests/
├── composer.json
├── README.md
├── CHANGELOG.md
├── CONTRIBUTING.md
├── LICENSE
└── .gitignore
```

---

# Versioning

Semantic Versioning is followed.

| Version | Description |
|----------|-------------|
| v1.0.0 | Initial Release |
| v1.1.0 | New Features |
| v1.1.1 | Bug Fixes |

---

# Changelog

See the **CHANGELOG.md** file for release history.

---

# Contributing

Contributions are welcome.

1. Fork the repository
2. Create a new branch

```bash
git checkout -b feature/new-feature
```

3. Commit changes

```bash
git commit -m "Add new feature"
```

4. Push

```bash
git push origin feature/new-feature
```

5. Create a Pull Request

---

# Reporting Issues

If you find any issues or have feature requests, please create a GitHub Issue.

---

# Support

If you like this package, please consider giving it a ⭐ on GitHub.

---

# License

This project is licensed under the MIT License.

See the **LICENSE** file for details.

---

# Author

**ITCrackers**

GitHub: https://github.com/ITCrackers

Packagist: https://packagist.org/packages/itcrackers/helper

---

Made with ❤️ by **ITCrackers**
