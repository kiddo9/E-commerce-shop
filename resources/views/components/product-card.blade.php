

<x-card>
    @if ($products['brand'] == 'brand new')
    <span class="p-2 mt-4 text-white bg-yellow-400 rounded-md">{{ $products['brand'] }}</span>
    @endif
    @if ($products['brand'] == 'Premium sale')
    <span class="p-2 mt-4 text-white bg-blue-400 rounded-md">{{ $products['brand'] }}</span>
    @endif
   <a href="/welcome/{{ $products['id'] }}"><img src="{{ asset('storage/'. $products->Pimg) }}" alt="{{ $products['Pname'] }}" class="mx-auto"></a>
    <p class="text-md">{{ $products['fame'] }}</p>
    <h2 class="text-2xl font-bold">{{ $products['Pname'] }}</h2>
    <div class="">
        <h4></h4>
        <span></span>
    </div>
    <h5 class="text-xl font-bold ">${{ $products['price'] }}</h5>
</x-card>

