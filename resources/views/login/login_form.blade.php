<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>

<body>
    <form class="form-signin" method="post" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">ログイン</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="inputEmail" class="sr-only">メールアドレス</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="メールアドレス" required autofocus>
        <label for="inputPassword" class="sr-only">パスワード</label>
        <input type="password" name="password" id="inputPassword" class="form-control" required placeholder="パスワード" >
        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>
</body>

</html>
