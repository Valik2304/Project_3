


<div class="container">
    <div class="row">
        <div class="col-sm-9 padding-right">
            @foreach($good as $k=>$go)
            <div class="product-details"><!--product-details-->
                <div class="row">
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{ asset($go->image) }}"width="350" height="375" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <h2>{{$go->name}}</h2>
                            <p>Web ID: 1089772</p>
                            <img src="images/product-details/rating.png" alt="" />

                            <br>
                            <span>
                                   <span>{{$go->price}}</span>
                                   <a href="{{route('basket',array('id'=>$go->id))}}" data-id="{{$go->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart" style="color: #4c110f"><h7> В корзину</h7></i></a>
                            </span>

                        </div><!--/product-information-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Опис товару</h5>
                        <p>{{$go->text}}</p>

                    </div>
                </div>
            </div><!--/product-details-->
            @endforeach
        </div>
    </div>
</div>
