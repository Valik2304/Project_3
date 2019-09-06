<h2 align="center">Вхід в акаунт або створення нового</h2>
<section id="form">
    <div class="container" align="center">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Увійдіть до свого облікового запису</h2>
                    <form action="{{route('login2')}}" method="post">
                        <input type="text" name="Name" placeholder="Name" />
                        <input type="password" name="Password" placeholder="Password " />
                        {{--<span>--}}
								{{--<input type="checkbox" class="checkbox">--}}
								{{--Залишитись в системі--}}
							{{--</span>--}}
                        <button type="submit" class="btn btn-default">Вхід</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Або</h2>
            </div>


            <div class="col-sm-4" >
                <div class="signup-form"><!--sign up form-->
                    <h2>Реєстрація</h2>
                    <form action="{{route('login')}}" method="post">
                        <input type="text" name="name" placeholder="Name"/>
                        <input type="email" name="email" placeholder="Email Address"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <button type="submit" class="btn btn-default">Реєстрація</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section>