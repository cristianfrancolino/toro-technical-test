# toro-technical-test

## Project setup
```
composer install
copy .env.example to .env (then configure database connection)
php artisan key:generate
php artisan migrate
php artisan db:seed
```

### Compiles and hot-reloads for development
```
php artisan serve
```

### Default user
A default user is created when using php artisan db:seed.
email: test@test.com
password: test1234

## Endpoints

Endpoint: '/pizzas'. Method: GET<br>
Response example:
```json
[
    {
        "id": 1,
        "name": "Fun Pizza",
        "selling_price": 7.5,
        "ingredients": [
            {
                "id": 1,
                "name": "Tomato",
                "cost_price": "0.50"
            },
            {
                "id": 2,
                "name": "sliced mushrooms",
                "cost_price": "0.50"
            },
            {
                "id": 3,
                "name": "feta cheese",
                "cost_price": "1.00"
            },
            {
                "id": 4,
                "name": "sausages",
                "cost_price": "1.00"
            },
            {
                "id": 5,
                "name": "sliced onion",
                "cost_price": "0.50"
            },
            {
                "id": 6,
                "name": "mozzarella cheese",
                "cost_price": "0.50"
            },
            {
                "id": 7,
                "name": "oregano",
                "cost_price": "1.00"
            }
        ],
        "created_at": "2023-11-15T23:04:02.000000Z",
        "updated_at": "2023-11-15T23:04:02.000000Z"
    }
]
```
Endpoint: '/pizzas/{id}'. Method: GET<br>
Endpoint: '/pizzas'. Method: POST<br>
Endpoint: '/pizzas/{id}'. Method: PUT<br>
Endpoint: '/pizzas/{id}'. Method: DELETE<br>

Endpoint: '/ingredients'. Method: GET<br>
Response example:
```json
[
    {
        "id": 1,
        "name": "Tomato",
        "cost_price": "0.50",
        "created_at": "2023-11-15T23:04:02.000000Z",
        "updated_at": "2023-11-15T23:04:02.000000Z"
    },
    {
        "id": 2,
        "name": "sliced mushrooms",
        "cost_price": "0.50",
        "created_at": "2023-11-15T23:04:02.000000Z",
        "updated_at": "2023-11-15T23:04:02.000000Z"
    }
]
```

Endpoint: '/ingredients'. Method: POST<br>
Endpoint: '/ingredients/{id}'. Method: DELETE<br>