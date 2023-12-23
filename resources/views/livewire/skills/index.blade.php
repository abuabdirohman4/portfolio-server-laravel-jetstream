<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-between items-center">
                    <x-button href="#" color="blue" type="submit">Tambah Data</x-button>
                    <div class="relative flex">
                        <input type="text" wire:model="search"
                            class="block ps-4 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none"
                            placeholder="Search...">
                    </div>
                </div>
                <div class="my-5 overflow-auto">
                    <table class="w-full text-sm border border-gray-200 text-left text-gray-500">
                        <thead class="sticky top-[-1px] z-10 text-xs text-gray-700 uppercase bg-gray-50 text-center">
                            <tr>
                                @foreach ($columns as $column)
                                    <th scope="col" class={{ $loop->index === '0' ? 'py-3 px-2' : 'py-3 px-6' }}>
                                        {{ $column }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b hover:shadow-lg hover:border-b-4 hover:border-t-2 text-center">
                                <td class="py-4 px-2">
                                    No
                                </td>
                                <td class="py-4 px-6">
                                    category
                                </td>
                                <td class="py-4 px-6">
                                    name
                                </td>
                                <td class="py-4 px-6">
                                    image
                                </td>
                                <td class="py-4 flex justify-center">
                                    <div class="tooltip static z-20 hover:relative" data-tip="Ubah">
                                        <a href="" class="mr-1 text-blue-600 hover:bg-blue-300 hover:rounded-md">
                                            <i
                                                class="fa-solid fa-pen-to-square rounded-md border border-blue-400 p-1"></i>
                                        </a>
                                    </div>
                                    <div class="tooltip static z-20 hover:relative" data-tip="Hapus">
                                        <label for="delete"
                                            class="mr-1 text-red-600 hover:bg-red-300 hover:rounded-md cursor-pointer">
                                            <i class="fa-solid fa-trash-can rounded-md border border-red-400 p-1"></i>
                                        </label>
                                        {{-- <input type="checkbox" id="delete{{ $surat->id }}" class="modal-toggle" />
                                        <div class="modal" id="popup-modal" tabindex="-1"
                                            class="fixed hidden top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full h-full max-w-md md:h-auto">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <label for="delete{{ $surat->id }}"
                                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-hide="popup-modal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </label>
                                                    <div class="p-6 text-center">
                                                        <form action="{{ route('surat.masuk.belum.destroy', $surat->id) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <svg aria-hidden="true"
                                                                class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
                                                            </svg>
                                                            <h3
                                                                class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                Apakah anda yakin akan menghapus surat ini ?</h3>
                                                            <button data-modal-hide="popup-modal" type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                Ya, Saya Yakin
                                                            </button>
                                                            <label for="delete{{ $surat->id }}"
                                                                data-modal-hide="popup-modal" type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak,
                                                                Batalkan</label>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
