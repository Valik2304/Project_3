<section id="cart_items">
    <div class="container">


        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <th class="image">Товар</th>
                    <th class="description">Назва</th>
                    <th class="price">Вартість за од.</th>
                    <th class="quantity">Кількість</th>
                    <th class="price">Заг. сума</th>
                    {{--<th >Видалити</th>--}}


                </tr>
                </thead>

                <div class="body3">
                    @if(isset($_SESSION['cart']) )

                        <tbody>
                        @foreach($_SESSION['cart'] as $key => $value)

                            @if($key == 'qs')
                                @continue
                            @endif


                            <tr>
                                <td class="cart_product">
                                    <a href="{{route('good', ['id' => $value['id']])}}"><img src="{{ asset($value['image']) }}" width="115" height="130" alt=""></a>
                                </td>

                                <td class="cart_description">
                                    <a href="{{route('good', ['id' => $value['id']])}}"><h4><p>{{$value['name']}}</p></h4></a>
                                </td>

                                <td class="cart_price">
                                    <p>${{$value['price']}}</p>
                                </td>

                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">

                                        {{--<input class="cart_quantity_input" type="text" name="quantity" value="" autocomplete="off" size="2">--}}
                                        <p>{{$value['qty']}}</p>
                                    </div>
                                </td>

                                <td class="cart_price">
                                    <p>${{$value['sum']}}</p>
                                </td>

                            </tr>
                        @endforeach


                        <tr>

                            <td>
                                <h4 style="color: #2ca02c">Загальна кі-сть:</h4>
                            </td>

                            <td style="color: #2ca02c"><h4>{{$_SESSION['cart']['qs']['qty']}}</h4></td>

                            <td class="cart_description">
                                <h4 style="color: #2ca02c"> Загальна сума:</h4>
                            </td>
                            <td >
                                <h4 style="color:#2ca02c">${{$_SESSION['cart']['qs']['sum']}}</h4>
                            </td>

                        </tr>
                        </tbody>
                </div>


                @endif

            </table>
        </div>
        <hr/>

    <div class="col-sm">
        <div class="signup-form">

            <form action="{{route('orders')}}" class="" method="post">
                <p>
                    <b><h3 style="color: #880000">Заповніть форму</h3></b></p>
                    <input type="text" name="name" placeholder="Name" style="background-color: palegreen">
                    <input type="email" name="email" placeholder="Email Address" style="background-color: palegreen">
                    <input type="tel" name="phone" placeholder="Phone" style="background-color: palegreen">
                    <input type="text" name="address" placeholder="Address" style="background-color: palegreen">
                    {{--<a href="Дописати код" class="btn btn-success">Підтвердити</a>--}}
                    <button type="submit" class="btn btn-success">Підтвердити</button>
                </p>
            </form>

        </div>
    </div>
</section>