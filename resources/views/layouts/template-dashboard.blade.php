<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  @include("layouts/header")
  <body>
    @include("layouts/navbar")
    @yield("container")
    @include("layouts/footer")
  </body>
</html>
