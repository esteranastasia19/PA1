<!DOCTYPE html>
<html lang="en">
@include('theme.admin.web.head')
<body>
    @include('theme.admin.web.header')
    @include('theme..admin.web.aside')
    {{-- <div class="container-fluit"> --}}
        {{ $slot }}
    {{-- </div> --}}
    @include('theme..admin.web.footer')
    @include('theme.admin.web.js')
</body>
</html>