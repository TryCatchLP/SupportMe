<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# SupportMe
Servidor para aplicacion movil.

## Ejecutar:
1. "composer install"
2. crear la base de datos "supportme"
3. modificar el .env para la conexion con la base de datos (ver .env.example)
4. "php artisan migrate"

#### Database:
DB_CONNECTION=mysql<br/>
DB_HOST=remotemysql.com<br/>
DB_PORT=3306<br/>
DB_DATABASE=RZCypH8UH2<br/>

### Correr el server
php artisan serve


#### Endpoints:
<table>
    <thead>
        <tr>
            <th>Path</th>
            <th>Método<th>
            <th>Descripción<th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="3"><a href="/api/profile">/api/profile</a></td>
            <td>GET</td>
            <td></td>
            <td>Steven</td>
        </tr>
        <tr>
            <td>POST</td>
            <td></td>
            <td>Steven</td>
        </tr>
        <tr>
            <td>PUT</td>
            <td></td>
            <td>Yuleixi</td>
        </tr>
        <tr>
            <td><a href="/login">/login</a></>
            <td>POST</td>
            <td></td>
            <td>Steven</td>
        </tr>
        <tr>
            <td rowspan="2"><a href="/api/huecas">/api/huecas</a></td>
            <td>GET</td>
            <td></td>
            <td>Kenny</td>
        </tr>
        <tr>
            <td>POST</td>
            <td></td>
            <td>Kenny</td>
        </tr>
        <tr>
            <td><a href="/api/huecas/{id}">/api/huecas/{id}</a></td>
            <td>GET</td>
            <td></td>
            <td>Kenny</td>
        </tr>
        <tr>
            <td rowspan="4"><a href="/api/rating">/api/rating</a></td>
            <td>GET</td>
            <td></td>
            <td>Steven</td>
        </tr>
        <tr>
            <td>POST</td>
            <td></td>
            <td>Steven</td>
        </tr>
        <tr>
            <td>PUT</td>
            <td></td>
            <td>Steven</td>
        </tr>
        <tr>
            <td>DELETE</td>
            <td></td>
            <td>Steven</td>
        </tr>
        <tr>
            <td rowspan="2"><a href="/api/menu/{id_hueca}">/api/menu/{id_hueca}</a></td>
            <td>GET</td>
            <td></td>
            <td>Kenny</td>
        </tr>
        <tr>
            <td>PUT</td>
            <td></td>
            <td>Kenny</td>
        </tr>
        <tr>
            <td rowspan="4"><a href="/api/menu">/api/menu</a></td>
            <td>GET</td>
            <td></td>
            <td>Yuleixi</td>
        </tr>
        <tr>
            <td>POST</td>
            <td></td>
            <td>Yuleixi</td>
        </tr>
        <tr>
            <td>PUT</td>
            <td></td>
            <td>Yuleixi</td>
        </tr>
        <tr>
            <td>DELETE</td>
            <td></td>
            <td>Yuleixi</td>
        </tr>
    </tbody>
</table>


## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
