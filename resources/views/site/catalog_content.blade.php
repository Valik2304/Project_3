@if(isset($category) && isset($good) && isset($filters))

    {{--<div class="col-sm-3">--}}
        {{--<div class="left-sidebar">--}}
            {{--<h2>Каталог</h2>--}}
            {{--<div class="panel-group category-products">--}}

                {{--@foreach($filters as  $filter)--}}
                {{--<div id="filters" class="panel panel-default">--}}
                    {{--<div class="panel-heading">--}}
                        {{--<ul class="clearfix"><li>--}}
                                {{--<a href="#" data-filter=".{{$filters}}">--}}
                                    {{--<h4>--}}
                                        {{--{{$filters}}--}}
                                    {{--</h4>--}}
                                {{--</a>--}}
                            {{--</li></ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--@endforeach--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        @if($good)
            <h2 class="title text-center">Всі товари</h2>
            @foreach($good as $k => $go)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">

                                <a href="{{route('good', array('id'=>$go->id))}}"><img src="{{ asset($go->image) }}"width="375" height="375"></a>
                                <h2>{{$go->price}}</h2>
                                <a href="{{route('good', array('id'=>$go->id))}}">
                                    <p>{{$go->name}}</p>
                                </a>

                                <a href="{{route('basket', array('id'=>$go->id))}}" data-id="{{$go->id}}" methods="post" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div><!--features_items-->

</div>
@endif