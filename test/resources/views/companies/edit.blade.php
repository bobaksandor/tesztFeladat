<x-app-layout class="bg-gray-200">
    <h1>A {{$company->name}} szerkesztése</h1>
    <form class="mt-4 bg-white rounded-lg shadow p-4" action="{{route('companies.update', ['company' => $company->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="block text-gray-700">Cég neve:</label>
                <input type="text" id="name" name="name" value="{{$company->name}}" class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="tax" class="block text-gray-700">Adószám:</label>
                <input type="text" id="tax" name="tax" value="{{$company->tax_number}}" class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('tax')
                    <p class="text-red-500">{{ $essage }}</p>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="text" id="email" name="email" value="{{ $company->email }}" class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="phone" class="block text-gray-700">Telefon:</label>
                <input type="text" id="phone" name="phone" value="{{ $company->phone_number }}" class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('phone')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button  type="submit" class="w-20 mt-4 inline-block p-2 bg-sky-700 hover:bg-sky-900 text-white">Mentés</button>
        </div>
    </form>
    
</x-app-layout>