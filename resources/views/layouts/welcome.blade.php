<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portaafolio - Martires Alberto Orozco</title>
   
    @vite('resources/css/app.css')

</head>

<body>

{{--Navbar--}}

@include('partials.nav')


  @yield('content')


{{-- Footer --}}
@include('partials.footer')

{{-- Script para la barra del menu --}}
<script>
    function openMenu() {
      let menu = document.getElementById('menu');

      if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden')
      }else {
        menu.classList.add('hidden');
      }
    }
</script>

</body>
</html>