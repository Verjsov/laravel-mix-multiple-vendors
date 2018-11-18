<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Backoffice</title>
    </head>
    <body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1 class="title m-b-md">
                Backoffice
            </h1>
            <div class="hello-world-container-jquery">
                Page is loading...
            </div>
        </div>
    </div>
    <script src="{{ mix('js/backoffice/manifest.js') }}"></script>
    <script src="{{ mix('js/backoffice/vendor.js') }}"></script>
    <script src="{{ mix('js/backoffice/backoffice.js') }}"></script>
    </body>
</html>
