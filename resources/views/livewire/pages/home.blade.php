<x-utilities.main>
    {{-- Hero --}}
    <x-utilities.section hasSpace={{ false }}>
        <div class="max-h-[800px] h-full">
            <img src="{{ asset('/assets/hero-homepage-prodotti.jpg') }}" class="h-auto object-cover">
        </div>
    </x-utilities.section>

    {{-- Sezione - facciamo un patto --}}
    <x-sections.text-inline-image />

    {{-- La nostra filosofia --}}
    <x-utilities.section hasSpace={{ false }}>
        <div class="bg-consider text-center flex flex-col items-center gap-4 py-9">
            <div class="mb-6">
                <p class="~sm/lg:~text-1xl/3xl">La nostra <span class="font-serif italic font-bold">filosofia</span></p>
            </div>
            <x-utilities.button href="/about">Scopri di più</x-utilities.button>
        </div>
    </x-utilities.section>

    {{-- Lista prodotti --}}
    <x-utilities.section>
        <x-utilities.container>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-11">
                {{-- Card 1 - Bilanciata --}}
                <a href="#" class="grid grid-rows-subgrid row-span-2 gap-y-0">
                    <div class="grid place-items-center bg-brown aspect-square">
                        <img src="{{ asset('/assets/products/bilanciata.png') }}" class="size-full object-cover">
                    </div>
                    <div class="py-5 px-2 border-y grid place-items-center">
                        <div class="text-center">
                            <p class="font-bold">Bilanciata</p>
                            <p class="font-light">Bruciagrassi</p>
                            <p class="font-light">€ 30.00</p>
                        </div>
                    </div>
                </a>

                {{-- Card 2 - Depurata --}}
                <a href="#" class="grid grid-rows-subgrid row-span-2 gap-y-0">
                    <div class="grid place-items-center bg-consider aspect-square">
                        <img src="{{ asset('/assets/products/depurata.png') }}" class="size-full object-cover">
                    </div>
                    <div class="py-5 px-2 border-y grid place-items-center">
                        <div class="text-center">
                            <p class="font-bold">Depurata</p>
                            <p class="font-light">Bruciagrassi</p>
                            <p class="font-light">€ 30.00</p>
                        </div>
                    </div>
                </a>

                {{-- Card 3 - Rinvigorita --}}
                <a href="#" class="grid grid-rows-subgrid row-span-2 gap-y-0">
                    <div class="grid place-items-center bg-reinvigorated aspect-square">
                        <img src="{{ asset('/assets/products/rinvigorita.png') }}" class="size-full object-cover">
                    </div>
                    <div class="py-5 px-2 border-y grid place-items-center">
                        <div class="text-center">
                            <p class="font-bold">Rinvigorita</p>
                            <p class="font-light">Bruciagrassi</p>
                            <p class="font-light">€ 30.00</p>
                        </div>
                    </div>
                </a>

                {{-- Box full --}}
                <div class="col-span-full max-h-[421px] overflow-hidden bg-consider">
                    <img src="{{ asset('/assets/product-grid-center-banner.jpg') }}" class="object-cover">
                </div>

                {{-- Card 4 - Raggiante --}}
                <a href="#" class="grid grid-rows-subgrid row-span-2 gap-y-0">
                    <div class="grid place-items-center bg-radiant aspect-square">
                        <img src="{{ asset('/assets/products/raggiante.png') }}" class="size-full object-cover">
                    </div>
                    <div class="py-5 px-2 border-y grid place-items-center" class="size-full object-cover">
                        <div class="text-center">
                            <p class="font-bold">Raggiante</p>
                            <p class="font-light">Bruciagrassi</p>
                            <p class="font-light">€ 30.00</p>
                        </div>
                    </div>
                </a>

                {{-- Box - Banner --}}
                <div class="grid row-span-2 bg-grey">
                    <div class="py-5 px-2 grid place-items-center">
                        <div class="text-center space-y-4">
                            <p class="~sm/lg:~text-xl/2xl leading-none">
                                <span class="font-serif italic font-bold">Banner</span> informazioni
                            </p>

                            <div class="max-w-[230px] mx-auto">
                                <p class="text-base">Se non sei una P.IVA contattaci per avere informazioni sui prodotti
                                </p>
                            </div>

                            <div class="mt-6">
                                <x-utilities.button border size="sm">Lascia la mail</x-utilities.button>
                            </div>


                        </div>
                    </div>
                </div>

                {{-- Card 3 - Energica --}}
                <a href="#" class="grid grid-rows-subgrid row-span-2 gap-y-0">
                    <div class="grid place-items-center bg-energetic aspect-square">
                        <img src="{{ asset('/assets/products/energica.png') }}" class="size-full object-cover">
                    </div>
                    <div class="py-5 px-2 border-y grid place-items-center">
                        <div class="text-center">
                            <p class="font-bold">Energica</p>
                            <p class="font-light">Bruciagrassi</p>
                            <p class="font-light">€ 30.00</p>
                        </div>
                    </div>
                </a>
            </div>
        </x-utilities.container>
    </x-utilities.section>

    {{-- Box - Focus ingredienti --}}
    <x-utilities.section class="bg-orange text-white">
        <x-utilities.container>
            <div class="flex flex-col md:flex-row md:items-center gap-x-20 gap-y-4">
                <div class="basis-1/2">
                    <img src="{{ asset('/assets/focus-ingredienti.jpg') }}" class="object-cover size-full">
                </div>
                <div class="basis-1/2">
                    <div class="~sm/lg:~mb-4/6">
                        <h4 class="~sm/lg:~text-1xl/3xl">Focus ingredienti di alta qualità</h4>
                    </div>
                    <div class="md:max-w-[446px]">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
        </x-utilities.container>
    </x-utilities.section>

    {{-- CTA --}}
    <x-sections.cta />
</x-utilities.main>
