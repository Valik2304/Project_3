<section id="cart_items">
    <div class="container">

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <th class="image">Товар</th>
                    <th class="description">Назва</th>
                    <th class="price">Вартість за од.</th>
                    <th class="quantity">Кількість</th>
                    <th class="price">Заг. сума</th>
                    <th >Видалити</th>


                </tr>
                </thead>

                <div class="body3">
                @if(isset($_SESSION['cart']) )
                    {{--@foreach($go as $id)--}}
                    {{--@foreach($_SESSION['cart'][$go->id] as $v)--}}
                {{--ЩОБ ВИВОДИЛИСЬ ВСІ ТОВАРИ І ТОЧНА K-СТЬ КОЖНОГО , ТРЕБА ТYТ ПРОЙТИ В ЦИКЛІ ЗМІННУ ТОВАРУ, ЯКЩО БЕЗ ЦИКЛУ ТО ВИВЕДЕ 1 РАЗ
                 ЦЕЙ ТОВАР--}}


                    <tbody>
                    @foreach($_SESSION['cart'] as $key => $value)

                        @if($key == 'qs')
                            @continue
                        @endif


                        <tr>
                            <td class="cart_product">
                               <img src="{{ asset($value['image']) }}" width="115" height="130" alt="">
                            </td>

                            <td class="cart_description">
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

                            <td class="cart_delete">
                                {{--<h3><span data-id="{{$value['id']}}" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></h3>--}}
                                <a class="cart_quantity_delete btn btn-danger" href="{{route('basketdeleteone', array('id' => $value['id']))}}"><i class="fa fa-times btn btn-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach

                        {{--@endforeach--}}
                        {{--@endforeach--}}
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

                        {{--</tr>--}}
                        {{--<tr>--}}

                            <td>
                                <h5>
                                    <a href="{{route('home')}}" class="btn btn-success">До покупок</a>
                                    <a href="{{route('basketdelete')}}" class="btn btn-danger">Очистити</a>
                                    {{--<button type="button" class="btn btn-danger" >Очистити</button>--}}
                                    <a href="{{url('/orders')}}" class="btn btn-success">Замовити</a>
                                </h5>
                            </td>
                        </tr>
                        </tbody>
                </div>


                @endif

            </table>
        </div>
    </div>
</section>
