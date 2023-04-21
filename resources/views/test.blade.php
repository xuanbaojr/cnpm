<!-- resources/views/example.blade.php -->
<script>
    window.vueData = {
        prop1: '1',
        prop2: '2'
    };
</script>

<!-- resources/views/example.blade.php -->
<div id="test">
  <example-component></example-component>
</div>

@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/profile.css'])
