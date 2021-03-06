<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    <div class="header">
        <div class="containerr">
            <div class="h-logo">
                <div class="logo">
                    <img src="{{asset('images/Group.svg')}}" alt="" class="group">
                </div>
                <div class="text">TTT <span style="color: rgb(99 179 237); font-weight: 500;">CMS</span></div>
            </div>
            <div class="btn-signin-header">
                <a href="{{url('/login')}}"><input type="button" value="Sign in"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <h2 class="txt">TTT &nbsp; <span style="color: rgb(99 179 237); font-weight: 500;">CMS</span></h2>
            <div class="form-login">
                <form action="">
                    @csrf
                    <label for="name" class="text-email">
                        <img class="icon icon-mail" src="{{asset('images/user.svg')}}" alt="">
                        Full name
                    </label>
                    <input id="name" class="input-email" type="text" placeholder="Full name">
                    <label for="email" class="text-password">
                        <img class="icon icon-mail" src="{{asset('images/mail.svg')}}" alt="">
                        Email address
                    </label>
                    <input id="email" class="input-email" type="text" placeholder="Email">
                    <label for="password" class="text-password">
                        <img class="icon icon-mail" src="{{asset('images/lock.svg')}}" alt="">
                        Password
                    </label>
                    <input id="password" class="input-email" type="password" placeholder="Password">
                    <div class="signin">
                        <div class="btn"><input class="btn-signin" type="button" value="Register" ></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>