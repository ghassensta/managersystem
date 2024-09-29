<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <title>Manager</title>
    @livewireStyles
</head>
<body>

<div class="crud">
    <!-- Livewire Components -->
    <livewire:header-component />
    
    <livewire:inputs-component />
    <livewire:outputs-component />

{{--     @if ($count > 0)
 --}}        <livewire:tables-component />
   {{--  @else
        <p style="margin-top: 13%;" class="center-text">No product</p>
    @endif --}}
</div>

@livewireScripts
<script src="{{ asset('build/assets/script.js') }}"></script>
</body>
</html>
