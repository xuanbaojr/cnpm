@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/profile.css'])

<!-- resources/views/example.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <div id="test">
        <test></test>
    </div>

    <script>
        window.vueData = {
            prop1: '1',
            prop2: '2'
        };
    </script>

   
</body>
</html>

