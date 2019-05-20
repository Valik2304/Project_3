


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
                            <span>
                                    <span>{{$go->price}}</span>
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        В корзину
                                    </button>
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
