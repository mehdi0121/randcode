# Random Code Generator For Laravel
![Packagist Downloads](https://img.shields.io/packagist/dt/mehdi0121/randcode?color=green)
![GitHub](https://img.shields.io/github/license/mehdi0121/randcode)
![Packagist Stars](https://img.shields.io/packagist/stars/mehdi0121/randcode)

**with this package you can make**

* Serial Numbers => `N9TT-9G0A-B7FQ-RANC`

* Strong passwords => `)8V)CC3[k6Hj`

* Giftcard / Voucher codes => `246-DFA-504`

* Length (8)=>`gYtpe4NB`

* CustomPatern => `"xxx-xxx-xx" => D4f-8r7-De`

# Security Policy

## Supported Versions

| Version | Supported          |
| ------- | ------------------ |
| 1.0   | :white_check_mark: |

# Instalition

```
composer require mehdi0121/randcode
```

# How to work!

**first use the namespace**

```php
use Mehdi0121/Randcode;
```

## Methods

> #### for make more than one code just add `count()` befor the methods and return <br> collections of code list


> ```php
>echo RandCode::Count($count)->SerialNumber();
>```


## Serial Numbers
___
```php
echo RandCode::SerialNumber();
```
### retun

```text
 0F7N-66HS-F989-QSBQ
```


## Strong passwords
___
Default Length is :8
```php
echo RandCode::Strong($Length=8);
```
### retun

```text
 K-QHYin&
```

## Giftcard / Voucher codes
___
Default Length is :8
```php
echo RandCode::Giftcard();
```
### retun

```text
 643-YKY-292
```

## Length
___
Letter and Digits
```php
echo RandCode::Length($Length=8);
```
### retun
```text
 kK7ZbH40
```


## CustomPatern
___
- Pattern:<br>
    `xxx-xxx-xxx =>XDF-DFE-DSD `<br>
    `yyy-yyy-yyy=>165-985-963`<br>
    `xxx-yyy-xxx=>DFE-658-FDF`<br>

```php
echo RandCode::CustomPatern($Pattern);
```
### retun

```text
 XDF-DFE-DSD
```
