<x-app-layout class="bg-gray-200">
    <div class="bg-white rounded-lg shadow p-4 mb-4">
        <ul class="list-disc pl-4">
            <li class="text-lg">{{$company->name}}</li>
            <li class="text-sm text-gray-600">{{$company->tax_number}}</li>
            <li class="text-sm text-gray-600">{{$company->phone_number}}</li>
            <li class="text-sm text-gray-600">{{$company->email}}</li>
            <div class="flex space-x-2">
                <a href="{{ route('companies.edit', ['company' => $company->id]) }}" class="inline-block p-2 bg-gray-200 hover:bg-gray-300 rounded-full">
                    <img class="h-8 w-8" src="https://cdn-icons-png.flaticon.com/512/84/84380.png" alt="szerkeszt" />
                </a>
                
                <form action="{{ route('companies.destroy', ['company' => $company->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-block p-2 bg-gray-200 hover:bg-gray-300 rounded-full">
                        <img class="h-8 w-8" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Delete-button.svg/862px-Delete-button.svg.png" alt="szerkeszt" />
                    </button>
                </form>
            </div>
            
        </ul>
    </div>  
</x-app-layout>
