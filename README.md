# Laravel JSend Response

This package defines JSend macros for the response in Laravel.

## Installation

You can install the package via composer:

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
With the Http `Status Code: 201`

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
With the Http `Status Code: 422`

### Error
``` php
$data = [
    'first_name' => 'A first_name is required'
    'last_name' => 'A last_name is required'
];
return response()->error('Unable to communicate with database', 500);
```

Result

``` json
{
    "status": "error",
    "message": "Unable to communicate with database"
}
```
With the Http `Status Code: 500`
