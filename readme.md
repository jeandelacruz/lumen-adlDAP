## Lumen - adLDAP

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Esto es un microservicio realizado en lumen con conexion a adLDAP (Active Directory)

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Configuration

Se debe ingresar al archivo .env y editar las siguientes lineas :

```sh
# Conexion al Active Directory
# Autenticacion
ADLDAP_CONTROLLERS          = sapia.pe
ADLDAP_BASEDN               = dc=sapia,dc=pe
ADLDAP_ADMIN_USERNAME       = jdelacruz
ADLDAP_ADMIN_PASSWORD       = test

# Opcional
ADLDAP_ACCOUNT_SUFFIX       = @sapia.pe
ADLDAP_ADMIN_ACCOUNT_SUFFIX = @sapia.pe
ADLDAP_SSL                  = false
ADLDAP_TLS                  = true
```

## Routes Created

El microservicio cuenta por el momento con 4 rutas para autogestionar nuestro Active Directory

```php
searchActiveDirectory -> Busca el usuario segun el campo que se desea
Ejemplo : http://laravel.dev/search/info/77777777
```

```php
updateActiveDirectory -> Busca el usuario segun el campo que se desea y se cambia el campo que se desea con el valor ingresado
Ejemplo : http://laravel.dev/update/info/77777777/theleponenumber/888888888
```

```php
changePassword -> Busca el usuario segun el campo que se desea y se cambia la contraseña de este mismo
Ejemplo : http://laravel.dev/changePassword/info/77777777/12345
```

```php
lockAccount -> Busca el usuario segun el campo que se desea y se bloquea este mismo
Ejemplo : http://laravel.dev/lockAccount/info/77777777
```


### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
