<div class="w-11 mx-auto py-1rem">
    <div class="w-full my-1rem">
        <div class="pyx-46 bx-shadow  text-left">
            <div class="py-5 w-11 mx-auto  border-b">
                <p class="fs-18 fw-600 py-5 text-gray-600">Tebing Koja</p>
            </div>
            <div class="w-11 mx-auto py-1rem">
                <div class="my-3">
                    <p class="fs-14 my-5 text-gray-400">Harga Tiket</p>
                    <h4 class="fs-17 fw-600 text-price">RP.{{$item->price}}</h4>
                </div>
                <div class="mt-1rem">
                    <a href="/order/{{$item->id}}">
                        <button class="btn-primary w-full text-center fs-14">
                            Pesan Tiket
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
