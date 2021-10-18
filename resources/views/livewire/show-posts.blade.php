<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-table>

            <div class="px-6 py-4">
               {{--<input type="text" wire:model="search"> --}} 
               <x-jet-input class="w-full" placeholder="Escriba lo quiera buscar" type="text" wire:model="search"/>
            </div>
            @if ($posts->count())
            <table class="w-full divide-y divide-gray-200">

                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('id')">
                            ID
                        </th>
                        <th scope="col"
                            class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('title')">
                            Title
                        </th>
                        <th scope="col"
                            class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('content')">
                            Content
                        </th>

                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($posts as $posts)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $posts->id }}
                                </div>

                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $posts->title }}
                                </div>

                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $posts->content }}
                                </div>

                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">

                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
            @else
                <div class="px-6 py-4">
                    <p> No se encuentran coicidencias </p>
                </div>
            @endif

        </x-table>
    </div>
</div>
