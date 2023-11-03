<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <title>manager</title>
</head>
<body>




<div class="crud">
    @include('manager.partials.header')
    @include('manager.partials.inputs')
    @include('manager.partials.outputs')
    @if ($count > 0)
        @include('manager.partials.tables')
    @else
        <p class="center-text">No product</p>
    @endif
</div>
@include('manager.partials.scripts')
</body>
</html>
