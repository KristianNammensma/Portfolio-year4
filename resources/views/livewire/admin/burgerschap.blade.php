<div class="m-0 p-0 overflow-hidden">
    
    <section class="w-100 h-100 position-relative p-5 d-flex flex-column justify-content-between">

            <section class=" d-flex justify-content-center align-items-center">
                <section class="col-12 col-lg-2 card d-flex justify-content-center align-items-center m-5 p-3 flex-row">
                    @foreach($documents as $document)
                        <button wire:click="selectDocument('{{ $document['name'] }}')" class="btn w-100">{{ $document['name'] }}</button>
                    @endforeach
                </section>
            </section>

            <section class="d-flex flex-column flex-lg-row justify-content-center mt-5">

                <div class="w-100 d-flex flex-column align-items-lg-end align-items-center justify-content-end mb-5 w-50 scroll-fade scroll-left">
                    <div class="aboutMe-info w-75 p-3 ps-4 position-relative">
                        <h1 class="ps-1 fw-bold fs-2 pt-3">Kristian Nammensma</h1>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center ">
                    <embed  src="{{ asset( $selectedDocument['pdf']) }}" width="600" height="820" type="application/pdf">
                </div>

                <div class="w-100 d-flex flex-column align-items-lg-start align-items-center justify-content-start mt-5 scroll-fade scroll-right">
                    <div class="aboutMe-info col-lg-8 col-10 p-3 pe-4 position-relative flex-wrap">
                        <h1 class="pe-1 fs-4 fw-bold text-end">{{ $selectedDocument['text']['left']}}</h1>
                        <p class="w-100 fs-5 text-end">
                            {{ $selectedDocument['text']['right']}}
                        </p>
                    </div>
                </div>

            </section>  
    </section>

</div>  
