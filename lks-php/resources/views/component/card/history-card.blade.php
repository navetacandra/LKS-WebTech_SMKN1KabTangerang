<a class="w-full">
    <div class="pxy-59 border-b">
        <div class="w-full relative flex justify-between">
            <div class=" flex">
                <div class="h-img-history">
                    <img class=" w-full h-full cover radius-8 " src="{{asset($item->place->image)}}" />
                </div>
            </div>
            <div class="w-80 mx-auto flex justify-between">
                <div class="w-11 mx-auto">
                    <h6 class="fs-24 fw-500 text-gray-600">{{$item->place->name}}</h6>
                    <p class="fs-18 fw-400 text-gray-500">Quantity : {{$item->quantity}}</p>
                </div>
                <div class="w-11 mx-auto text-right">
                    <h6 class="fs-24 fw-500 text-price">Rp.{{$item->total}}</h6>
                    <h6 class="fs-18 fw-500 text-gray-500">Rp.{{$item->place->price}}</h6>
                </div>

            </div>
        </div>
        <div class="w-full flex-block-sm my-1rem justify-between">
            <div class="bx-order-card-1 flex">
                <p class="fs-15 text-gray-500">{{$item->date}},  </p>
                <p class="fs-15 text-gray-500"> {{$item->place->location}}</p>
            </div>
            <div class="bx-order-card-1">
                <p class="fs-15 text-gray-500">{{$item->status}}</p>
            </div>
        </div>
    </div>
</a>
