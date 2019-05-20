<section id="form">
    <div class="container" >
        <div class="row">
            {{--<div class="col-sm-4 col-sm-offset-1">--}}
                {{--<div class="login-form"><!--login form-->--}}
                    {{--<h2>Увійдіть до свого облікового запису</h2>--}}
                    {{--<form action="#">--}}
                        {{--<input type="text" placeholder="Name" />--}}
                        {{--<input type="email" placeholder="Email Address" />--}}
                        {{--<span>--}}
								{{--<input type="checkbox" class="checkbox">--}}
								{{--Залишитись в системі--}}
							{{--</span>--}}
                        {{--<button type="submit" class="btn btn-default">Вхід</button>--}}
                    {{--</form>--}}
                {{--</div><!--/login form-->--}}
            {{--</div>--}}
            {{--<div class="col-sm-1">--}}
                {{--<h2 class="or">Або</h2>--}}
            {{--</div>--}}


            <div class="col-sm-4" >
                <div class="signup-form"><!--sign up form-->
                    <h2>Реєстрація</h2>
                    <form action="{{route('login')}}" method="post">
                        <input type="text" name="name" placeholder="name"/>
                        <input type="email" name="email" placeholder="email "/>
                        <input type="password" name="password" placeholder="password"/>
                        <button type="submit" class="btn btn-default">Реєстрація</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section>