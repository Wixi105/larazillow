<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>LaraZillow</title>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  {{-- dark:text-gray-300 --}}
  {{-- dark:bg-gray-900 --}}
  <body class="bg-white text-gray-800">
    @inertia
  </body>
</html>