{{--{{dd($_COOKIE['cart'][$go->id])}}--}}
<section id="cart_items">
    <div class="container">

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Товар</td>
                    <td class="description"></td>
                    <td class="price">Ціна</td>
                    <td class="quantity">Кількість</td>

                    <td></td>
                </tr>
                </thead>
                @if(isset($go))
                    {{--@foreach($go as $v)--}}
                        <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{ asset($_SESSION['cart'][$go->id]['image']) }}" width="115" height="130" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{$_SESSION['cart'][$go->id]['name']}}</a></h4>

                            </td>
                            <td class="cart_price">
                                <p>{{$_SESSION['cart'][$go->id]['price']}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">

                                    <input class="cart_quantity_input" type="text" name="quantity" value="" autocomplete="off" size="2">

                                </div>
                            </td>

                            <td class="cart_delete">
                                <a class="cart_quantity_delete btn btn-danger" href="{{route('basket')}}"><i class="fa fa-times btn btn-danger"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td class="cart_description">
{{--                                <h4> Загальна сума:{{$_COOKIE['cart']['id']['sum']}}</h4>--}}
                                <h4> Загальна сума:</h4>
                            </td>
                            <td >
                                <h4>$524</h4>
                            </td>
                            <td>
                                <h4>Загальна кі-сть:{{$_SESSION['cart']['id']['qty']}}</h4>
                            </td>

                            <td>
                                <h4>
                                    <a href="зробити можливість переходу на товари" class="btn btn-success">Продовжити покупки</a>
                                    <a href="зробити можливість видалити весь товар з корзини" class="btn btn-danger">Очистити корзину</a>
                                    <a href="зробити форму замовлення" class="btn btn-success">Замовити</a>
                                </h4>
                            </td>
                        </tr>
                        </tbody>
                    {{--@endforeach--}}
                @endif

            </table>
        </div>
    </div>
</section>