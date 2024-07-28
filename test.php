<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Example</title>
    <style>
        body {
    font-family: Arial, sans-serif;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-toggle {
    background-color: #3498db;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.dropdown-toggle:focus {
    outline: none;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    width: 100%;
}

.dropdown-menu a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-menu a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}

    </style>
</head>
<body>
    <div class="dropdown">
        <button class="dropdown-toggle">Dropdown</button>
        <div class="dropdown-menu">
            <a href="#item1">Item 1</a>
            <a href="#item2">Item 2</a>
            <a href="#item3">Item 3</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
    const toggleButton = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    toggleButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('show');
    });

    document.addEventListener('click', (event) => {
        if (!toggleButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});

    </script>
</body>
</html>
