<x-app-layout class="bg-gray-200">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Cégek</h1>
        <a href="{{ route('companies.create') }}" class="text-blue-500 hover:underline mb-4 text-2xl">Cég hozzáadása</a>
        @foreach ($companies as $c)
            <div class="bg-white rounded-lg shadow p-4 mb-4">
                <a href="#" class="text-blue-500 hover:underline">
                    <ul class="list-disc pl-4">
                        <li class="text-lg">{{$c->name}}</li>
                        <li class="text-sm text-gray-600">{{$c->tax_number}}</li>
                    </ul>
                </a>
            </div>            
        @endforeach
    </div>
</x-app-layout>
