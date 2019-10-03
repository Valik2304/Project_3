
    <div class="container">

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">

                    <th class="description">Назва</th>
                    <th class="price">Вартість за од.</th>
                    <th class="quantity">Кількість</th>
                    <th class="price">Заг. сума</th>

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

                                <td class="cart_description">
{{--                                    <a href="{{route('good', ['id' => $value['id']])}}"><h4><p>{{$value['name']}}</p></h4></a>--}}
                                    <h4><p>{{$value['name']}}</p></h4>
                                </td>

                                <td class="cart_price">
                                    <p>${{$value['price']}}</p>
                                </td>

                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">

                                        {{--<input class="cart_quantity_input" type="text" name="quantity" value="{{$value['qty']}}" autocomplete="off" size="2">--}}
                                        <p>{{$value['qty']}}</p>
                                    </div>
                                </td>

                                <td class="cart_price">
                                    <p>${{$value['sum']}}</p>
                                </td>

                            </tr>
                        @endforeach


                        <tr>

                            <td colspan="3">Кількість:</td>
                            <td>{{$_SESSION['cart']['qs']['qty']}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">Сума:</td>
                            <td>{{$_SESSION['cart']['qs']['sum']}}</td>
                        </tr>
                        </tbody>
                </div>


                @endif

            </table>
        </div>
        
    </div>
