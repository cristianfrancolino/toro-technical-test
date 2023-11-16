## Endpoints

Endpoint: '/pizzas'. Method: GET
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
Endpoint: '/pizzas/{id}'. Method: GET
Endpoint: '/pizzas'. Method: POST
Endpoint: '/pizzas/{id}'. Method: PUT
Endpoint: '/pizzas/{id}'. Method: DELETE

Endpoint: '/ingredients'. Method: GET
Response example:
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

Endpoint: '/ingredients'. Method: POST
Endpoint: '/ingredients/{id}'. Method: DELETE