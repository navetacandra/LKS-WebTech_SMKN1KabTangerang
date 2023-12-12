<div class="w-full py-1rem">
    <div class="w-full">
        <div class="my-1rem border-b">
            <h1 class="fs-16 my-05rem fw-600 text-gray-600">Infromasi</h1>
            <div class="my-05rem">
                <div class="my-05rem">
                    <p class="fs-14 text-gray-500">{{$item->address}}a</p>
                </div>
            </div>
        </div>
        <div class="my-1rem border-b">
            <h1 class="fs-16 my-05rem fw-600 text-gray-600">Jam Operasional</h1>
            <div class="my-05rem">
                <div class="my-05rem">
                    <p class="fs-14 text-gray-500">{{$item->open_hour}}</p>
                </div>
            </div>
        </div>
        <div class="my-1rem border-b">
            <h1 class="fs-16 my-05rem fw-600 text-gray-600">Hari Operasional</h1>
            <div class="my-05rem">
                <div class="my-05rem">
                    <p class="fs-14 text-gray-500">{{$item->open_day}}</p>
                </div>
            </div>
        </div>
        <div class="my-1rem border-b">
            <h1 class="fs-16 my-05rem fw-600 text-gray-600">Harga Tiket</h1>
            <div class="my-05rem">
                <div class="my-05rem">
                    <p class="fs-14 text-gray-500">RP.{{$item->price}}</p>
                </div>
            </div>
        </div>
        <div class="my-1rem border-b">
            <h1 class="fs-16 my-05rem fw-600 text-gray-600">Stock Tiket</h1>
            <div class="my-05rem">
                <div class="my-05rem">
                    <p class="fs-14 text-gray-500">{{$item->stock}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
