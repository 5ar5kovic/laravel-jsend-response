# Laravel JSend Response

[![Laravel Package](https://img.shields.io/badge/laravel-package-red)](https://packagist.org/packages/petarpetkovic996/laravel-jsend-response)
[![Latest Version on Packagist](https://img.shields.io/badge/packagist-v1.0.0-blue?link=https://packagist.org/packages/petarpetkovic996/laravel-jsend-response)](https://packagist.org/packages/petarpetkovic996/laravel-jsend-response)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](#)

This package defines JSend macros for the response in Laravel.

## Installation

You can install the package via Composer:

``` bash
composer require petarpetkovic996/laravel-jsend-response
```

## Usage

### Success
``` php
$data = [
    "first_name" => "Petar",
    "last_name" => "Petkovic"
];
return response()->success($data, 201);
```

Result

``` json
{
    "status": "success",
    "data": {
        "first_name": "Petar",
        "last_name": "Petkovic"
    }
}
```
With the HTTP `Status Code: 201`

### Fail
``` php
$data = [
    'first_name' => 'A first_name is required'
    'last_name' => 'A last_name is required'
];
return response()->fail($data, 422);
```

Result

``` json
{
    "status": "fail",
    "data": {
        "first_name": "A first_name is required"
        "last_name": "A last_name is required"
    }
}
```
With the HTTP `Status Code: 422`

### Error
``` php
return response()->error('Unable to communicate with database', 500);
```

Result

``` json
{
    "status": "error",
    "message": "Unable to communicate with database"
}
```
With the HTTP `Status Code: 500`
