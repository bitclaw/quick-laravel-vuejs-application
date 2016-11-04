<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ config('website.icon') }}">

</head>
<body class="">

<script>
    @if(Auth::user())
    const User = {!! Fractal::includes(['role'])->item(Auth::user(), new \App\Transformers\UserTransformer)->getJson() !!};
    User.isAdmin = {{ Auth::user()->isAdmin() }};
            @else
                const User = {isAdmin: false}
    @endif
</script>

</body>
</html>

