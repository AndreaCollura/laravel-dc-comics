<div class="jumbo-box">
    <div class="container h-100 label-fix py-4 px-0 ">
        @if (Route::currentRouteName() == 'home')
            <div class="current-label text-center text-white ">
                <h5 class="text-uppercase pt-2">current series</h5>
            </div>
        @elseif (Route::currentRouteName() == 'comics.index')
            <div class="current-label text-center text-white ">
                <h5 class="text-uppercase pt-2">Full Collection</h5>
            </div>
        @elseif (Route::currentRouteName() == 'comics.show')
            <div class="current-label text-center text-white ">
                <h5 class="text-uppercase pt-2">Comic details</h5>
            </div>
        @elseif (Route::currentRouteName() == 'comics.create')
            <div class="current-label text-center text-white ">
                <h5 class="text-uppercase pt-2">comic creation</h5>
            </div>
        @elseif (Route::currentRouteName() == 'comics.edit')
            <div class="current-label text-center text-white ">
                <h5 class="text-uppercase pt-2">Comic editor</h5>
            </div>
        @endif
    </div>
</div>
