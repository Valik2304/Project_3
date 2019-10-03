<h1 align="center">Вхід в акаунт</h1>
<section id="form">
    <div class="container" align="center">
        <div class="align-content-center">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h1 style="color: #4c110f">Увійдіть до свого облікового запису</h1>
                    <form action="{{route('account')}}" method="post">
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

        </div>
    </div>
</section>