<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Pizzas</title>
</head>

<body>
    <h1 class="main_title">Pizzas</h1>
    <section class="pizzas" id="pizzas-section">

    </section>
    <div class="loader" id="loader"></div>
    <button class="add-pizza-btn" id="add-pizza-btn">Add pizza</button>
    <div class="add-pizza-modal" id="add-pizza-modal">
        <div class="add-pizza-modal-content">
            <span class="add-pizza-modal-close" id="add-pizza-modal-close">&times;</span>
            <h2>Add </h2>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>