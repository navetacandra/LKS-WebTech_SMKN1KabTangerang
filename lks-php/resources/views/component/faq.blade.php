<div class="w-full py-1rem">
    <div class="w-full">
        <div class="my-1rem">
            <h1 class="fs-18 my-05rem fw-600 text-gray-700">Seputar Pertanyaan</h1>
            <div class="my-05rem">
                @foreach($item->faq  as $items)
                    <button onclick="toggleDropdown({{$items->id}})" class="w-full text-left btn-dw border-b py-6">
                        <div class="w-full">
                            <p class="fs-15 py-5 text-gray-600 fw-600">{{$items->question}}</p>
                            <div  id="{{$items->id}}" class="my-5 py-5 hidden ">
                                <p class="fs-15 text-gray-500">{{$items->answer}}</p>
                            </div>
                        </div>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</div>


<script>

    function toggleDropdown (faqId){

        const toggle = document.getElementById(faqId);

        if(toggle.style.display === "block"){
            toggle.style.display = "none"
        }else{
            toggle.style.display = "block"
        }

    }

</script>
