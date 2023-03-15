<!DOCTYPE html>

<style>
        body {  
            margin: auto;
            max-width: 600px;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
        }

        article+article {
            margin-top: 2em;
            border-top: 1px solid #ccc;
        }
</style>

<body>
    {{ $slot }}
</body>