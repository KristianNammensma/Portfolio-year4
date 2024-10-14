<div class="d-flex flex-row justify-content-between w-50">
    @foreach($titles as $title)
        <div class="d-flex flex-row justify-content-center align-items-center">
            <p class="pe-3">
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