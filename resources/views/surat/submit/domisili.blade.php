<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot>

    <form
        id="domisiliForm"
        action="{{ route("surat.domisili.update", $data->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method("PUT")
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div
                    class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                >
                    <div class="col-span-full">
                        <label
                            for="nik"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            NIK
                        </label>
                        <div class="mt-2">
                            <input
                                type="text"
                                name="nik"
                                id="nik"
                                readonly
                                value="{{ $data->nik }}"
                                placeholder="Masukkan NIK"
                                autocomplete="off"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="nama"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Nama Lengkap
                        </label>
                        <div class="mt-2">
                            <input
                                type="text"
                                placeholder="Nama Lengkap"
                                readonly
                                value="{{ $data->nama }}"
                                name="nama"
                                id="nama"
                                autocomplete="off"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="tempatlahir"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Tempat Lahir
                        </label>
                        <div class="mt-2">
                            <input
                                type="text"
                                name="tempatlahir"
                                id="tempatlahir"
                                readonly
                                value="{{ $data->tempatlahir }}"
                                placeholder="Tempat Lahir"
                                autocomplete="off"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="tgl"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Tanggal Lahir
                        </label>
                        <div class="mt-2">
                            <input
                                type="date"
                                name="tgl"
                                id="tgl"
                                readonly
                                value="{{ $data->tgl }}"
                                autocomplete="off"
                                class="block w-1/6 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="kelamin"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Jenis Kelamin
                        </label>
                        <div class="mt-2">
                            <select
                                name="kelamin"
                                id="kelamin"
                                readonly
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
                                <option
                                    value="L"
                                    {{ $data->kelamin == "L" ? "selected" : "" }}
                                >
                                    Laki Laki
                                </option>
                                <option
                                    value="P"
                                    {{ $data->kelamin == "P" ? "selected" : "" }}
                                >
                                    Perempuan
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="agama"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Agama
                        </label>
                        <div class="mt-2">
                            <select
                                name="agama"
                                id="agama"
                                readonly
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
                                <option
                                    value="Islam"
                                    {{ $data->agama == "Islam" ? "selected" : "" }}
                                >
                                    Islam
                                </option>
                                <option
                                    value="Kristen Protestan"
                                    {{ $data->agama == "Kristen Protestan" ? "selected" : "" }}
                                >
                                    Kristen Protestan
                                </option>
                                <option
                                    value="Kristen Katolik"
                                    {{ $data->agama == "Kristen Katolik" ? "selected" : "" }}
                                >
                                    Kristen Katolik
                                </option>
                                <option
                                    value="Buddha"
                                    {{ $data->agama == "Buddha" ? "selected" : "" }}
                                >
                                    Buddha
                                </option>
                                <option
                                    value="Hindu"
                                    {{ $data->agama == "Hindu" ? "selected" : "" }}
                                >
                                    Hindu
                                </option>
                                <option
                                    value="Konghucu"
                                    {{ $data->agama == "Konghucu" ? "selected" : "" }}
                                >
                                    Konghucu
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="pekerjaan"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Pekerjaan
                        </label>
                        <div class="mt-2">
                            <input
                                type="text"
                                name="pekerjaan"
                                id="pekerjaan"
                                readonly
                                value="{{ $data->pekerjaan }}"
                                placeholder="Pekerjaan"
                                autocomplete="off"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="alamat"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Alamat Lengkap
                        </label>
                        <div class="mt-2">
                            <textarea
                                id="alamat"
                                name="alamat"
                                readonly
                                rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
{{ $data->alamat }}</textarea
                            >
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="keperluan"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Keperluan
                        </label>
                        <div class="mt-2">
                            <input
                                type="text"
                                name="keperluan"
                                id="keperluan"
                                readonly
                                value="{{ $data->keperluan }}"
                                placeholder="Keperluan"
                                autocomplete="off"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="ktp"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Foto Scan KTP
                        </label>
                        <div class="mt-2">
                            @if (pathinfo($data->ktp, PATHINFO_EXTENSION) == "pdf")
                                <a
                                    href="{{ asset($data->ktp) }}"
                                    download
                                    class="bg-blue-500 text-white px-3 py-2 rounded"
                                >
                                    Download PDF
                                </a>
                            @else
                                <img
                                    src="{{ asset($data->ktp) }}"
                                    alt="Foto KTP"
                                    class="h-40 w-auto object-cover cursor-pointer"
                                    onclick="openFullScreen('{{ asset($data->ktp) }}')"
                                />
                            @endif
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="no"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            No yang bisa dihubungi
                        </label>
                        <div class="mt-2">
                            <input
                                type="number"
                                name="no"
                                id="no"
                                readonly
                                value="{{ $data->no }}"
                                placeholder="Masukkan Nomor"
                                autocomplete="off"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full mt-6">
                        <label
                            for="file"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            File Surat (PDF)
                        </label>
                        <div class="mt-2">
                            @if ($data->file)
                                <a
                                    href="{{ asset($data->file) }}"
                                    target="_blank"
                                    class="text-indigo-600 hover:underline"
                                >
                                    Lihat file yang diunggah sebelumnya
                                </a>
                            @endif

                            <input
                                type="file"
                                name="file"
                                id="file"
                                autocomplete="off"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                        </div>
                    </div>

                    <div class="col-span-full mt-6">
                        <label
                            for="note"
                            class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Catatan
                        </label>
                        <div class="mt-2">
                            <textarea
                                id="note"
                                name="note"
                                rows="3"
                                class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
{{ $data->note }}</textarea
                            >
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route("admin.surat") }}" class="inline-block">
                    <button
                        type="button"
                        class="text-sm font-semibold leading-6 text-gray-900 border border-transparent p-2 rounded hover:border-gray-500"
                    >
                        Cancel
                    </button>
                </a>

                <button
                    type="button"
                    onclick="submitForm('ditolak')"
                    class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                >
                    Tolak
                </button>

                <button
                    type="button"
                    onclick="submitForm('selesai')"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Submit
                </button>
            </div>
        </div>
    </form>

    <div
        id="fullScreenModal"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-75 z-50 overflow-auto hidden"
    >
        <div
            class="absolute top-0 left-0 w-full h-full flex items-center justify-center"
        >
            <div
                class="relative p-4 bg-white shadow-lg rounded-lg max-w-screen-lg w-full"
            >
                <img
                    id="fullScreenImage"
                    src="#"
                    alt="Full Screen Image"
                    class="max-h-screen max-w-full object-contain"
                />
                <button
                    onclick="closeFullScreen()"
                    class="absolute top-0 right-0 mt-4 mr-4 bg-gray-200 text-gray-800 rounded-full p-2"
                >
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        function submitForm(status) {
                const form = document.getElementById('domisiliForm');
                const statusInput = document.createElement('input');
                statusInput.type = 'hidden';
                statusInput.name = 'status';
                statusInput.value = status;
                form.appendChild(statusInput);
                form.submit();
            }

            document.addEventListener('DOMContentLoaded', function () {

                @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                });
                @endif

                @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                });
                @endif
            });
    </script>
</x-layout-admin>
