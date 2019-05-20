@if(isset($category))
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Каталог</h2>
        <div class="panel-group category-products">

            @foreach($category as $k => $cat)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="{{route('category',array('id'=>$cat->id))}}" data-filter="">

                                {{$cat->name.' -'}}
                                {{$cat->number}}<br/></br>


                            </a></h4>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endif