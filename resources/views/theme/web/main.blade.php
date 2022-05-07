<!DOCTYPE html>
<html lang="en">
@include('theme.web.head')
<body>
    @include('theme.web.header')
    @include('theme.web.aside')
    
        {{ $slot }}
  
    @include('theme.web.footer')
    @include('theme.web.js')
</body>
</html>