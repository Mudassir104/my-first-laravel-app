<!DOCTYPE html>
<html lang="us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    <ul>
        <li>
            <a href="/">home</a>
        </li>
        <li>
            <a href="/gallery">gallery</a>
        </li>
        <li>
            <a href="/contact">contact</a>
        </li>
    </ul>
    @include("include.navbar")
</body>

</html>
use include instead of write code again and again
What things are used again and again in code of every page?
This is the bouiler page. Every page has html tag, head tag, and body tag. we can use this in separate page like site.blade.php.