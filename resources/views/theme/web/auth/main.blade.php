<!DOCTYPE html>
<html lang="en">
@include('theme.web.auth.head')
<body>
    <div class="main">
        <div class="container">
            <div class="sign-up-content">
                {{ $slot }}
            </div>
        </div>
</body>
</html>