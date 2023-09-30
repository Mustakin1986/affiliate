<div class="container-fluid py-3">
    <div class="row px-xl-3">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach ($all_vendor as $vendor)
                    <div class="bg-light p-2">
                        <img src="{{ asset('backend/brand/' . $vendor->photo) }}" alt="" style="height:100px">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
