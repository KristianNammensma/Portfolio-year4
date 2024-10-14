<div class="d-flex flex-row justify-content-between col-lg-6 col-7">
    @foreach($titles as $title)
        <div class="d-flex flex-row justify-content-lg-center justify-content-between  align-items-center">
            <p class="pe-lg-3 pe-1">
                <i class="{{ $title['icon'] }} fs-6" aria-hidden="true"></i>
            </p>
            <p wire:navigate class="m-0 @if(Route::currentRouteName() === $title['name']) selected @endif"    
               wire:click="navigate('{{ $title['name'] }}')"
               style="cursor: pointer;">
               {{ $title['name'] }}
            </p>
        </div>
    @endforeach

</div>