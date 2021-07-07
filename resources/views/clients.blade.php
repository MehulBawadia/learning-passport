<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-4 p-6 bg-white border-b border-gray-200">
                    <form action="/oauth/clients" method="POST">
                        @csrf

                        <div>
                            <x-label for="name">Client Name:</x-label>
                            <x-input type="text" name="name" id="name" placeholder="Client Name"></x-input>
                        </div>

                        <div class="mt-2">
                            <x-label for="redirect">Redirect URL</x-label>
                            <x-input type="text" name="redirect" id="redirect" placeholder="https://myurl.com/callback"></x-input>
                        </div>

                        <div class="mt-3">
                            <x-button type="submit">Create Client</x-button>
                        </div>
                    </form>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    Here are the list of your clients:

                    @foreach ($clients as $client)
                        <div class="flex justify-between items-center mt-3">
                            <div>
                                <div class="text-gray-500">Client Id</div>
                                <div class="font-semibold text-gray-700">{{ $client->id }}</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Client Name</div>
                                <div class="font-semibold text-gray-700">{{ $client->name }}</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Client Secret</div>
                                <div class="font-semibold text-gray-700">{{ $client->secret }}</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Redirect URL</div>
                                <div class="font-semibold text-gray-700">{{ $client->redirect }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
