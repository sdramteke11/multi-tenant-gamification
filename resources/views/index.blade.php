<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head content -->
</head>
<body>
    <div id="app"></div> <!-- Add this line -->
    <script src="{{ mix('js/app.js') }}"></script> <!-- Include the compiled JavaScript -->
</body>
</html>
