<!DOCTYPE html>
<html lang="en">
@include('theme.admin.auth.head')
<body>
    <div class="main">
        <div class="container">
            <div class="sign-up-content">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>