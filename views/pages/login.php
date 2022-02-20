<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLS-Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #ebebeb !important;
        }

        .container {
            min-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background-color: #fff;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 4px 3px 5px -5px #000;
            margin-top: 10%;
        }

        .login-header {
            text-align: center;
            background-color: darkblue;
            padding: 2rem;
            font-size: 2rem;
            color: #fff;
            font-weight: bold;
            border-radius:.5rem;
        }

        .login-group {
            padding: 1rem;
            display: flex;
            justify-content: center;
            font-size: 1.4rem;
        }

        .login-group label {
            width: 8rem;
            display: flex;
            justify-content: start;
            align-items: center;
        }

        input {
            background-color: #ede9e9;
            padding: .5rem;
            padding-left: 1rem;
            border: none;
            border-radius: 5px;
        }

        input:focus {
            outline: none;
            border-bottom: 2px solid darkblue;
        }
        .login-btn{
            background-color: darkblue;
            color: #fff;
            padding: .5rem 1rem .5rem 1rem ;
            border: none;
            border-radius: 5px;
            font-size: 1.7rem;
        }
        .login-error{
            color: red;
            font-size: 1.2rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="{{function.routePath('/login')}}" method="post">
            {{ _csrf|raw }}
            <div class="login-card">
                <div class="login-header">
                    Shipping and Logistics System </div>
                <div class="login-content">
                    <div class="login-group">
                        {% if function.getError('password')  %}
                        <div class="login-error">
                            {{function.getError('password')}}
                        </div>
                        {% elseif function.getError('email')  %}
                        <div class="login-error">
                            {{function.getError('email')}}
                        </div>
                        {% endif %}
                    </div>
                    <div class="login-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="email@example.com" value="{{post.email}}" required >
                    </div>
                    <div class="login-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="password" required>
                    </div>
                    <div class="login-group">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary login-btn" id="login">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>