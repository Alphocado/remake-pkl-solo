<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  @include("layouts/header")
  <body
    class="flex h-screen items-center justify-center bg-gradient-to-t from-blue-600 to-neutral-900"
  >
    @yield("container")

    @include("layouts/footer")
  </body>
</html>
