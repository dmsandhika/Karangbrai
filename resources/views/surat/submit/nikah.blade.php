<x-layout-admin>
  <x-slot:title>{{ $title }}</x-slot>

  <form id="nikahForm" action="{{ route('surat.nikah.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="space-y-12 ">
      <div class="border-b border-gray-900/10 pb-12 ">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="col-span-full">
            <label for="nik" class="block text-sm font-medium leading-6 text-gray-900">NIK Pemohon</label>
            <div class="mt-2">
              <input type="text" name="nik" id="nik" value="{{ $data->nik }}" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="col-span-full">
            <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
            <div class="mt-2">
              <input type="text" name="nama" id="nama" value="{{ $data->nama }}" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="col-span-full">
            <label for="ktp_pemohon" class="block text-sm font-medium leading-6 text-gray-900">Foto Scan KTP Pemohon</label>
            <div class="mt-2">
              @if(pathinfo($data->ktp_pemohon, PATHINFO_EXTENSION) == 'pdf')
                <a href="{{ asset($data->ktp_pemohon) }}" download class="bg-blue-500 text-white px-3 py-2 rounded">Download PDF</a>
              @else
                <img src="{{ asset($data->ktp_pemohon) }}" alt="Foto KTP Pemohon" class="h-40 w-auto object-cover cursor-pointer" onclick="openFullScreen('{{ asset($data->ktp_pemohon) }}')">
              @endif
            </div>
          </div>

          <div class="col-span-full">
            <label for="ktp_ayah" class="block text-sm font-medium leading-6 text-gray-900">Foto Scan KTP Ayah Pemohon</label>
            <div class="mt-2">
              @if(pathinfo($data->ktp_ayah, PATHINFO_EXTENSION) == 'pdf')
                <a href="{{ asset($data->ktp_ayah) }}" download class="bg-blue-500 text-white px-3 py-2 rounded">Download PDF</a>
              @else
                <img src="{{ asset($data->ktp_ayah) }}" alt="Foto KTP Ayah" class="h-40 w-auto object-cover cursor-pointer" onclick="openFullScreen('{{ asset($data->ktp_ayah) }}')">
              @endif
            </div>
          </div>

          <div class="col-span-full">
            <label for="ktp_ibu" class="block text-sm font-medium leading-6 text-gray-900">Foto Scan KTP Ibu Pemohon</label>
            <div class="mt-2">
              @if(pathinfo($data->ktp_ibu, PATHINFO_EXTENSION) == 'pdf')
                <a href="{{ asset($data->ktp_ibu) }}" download class="bg-blue-500 text-white px-3 py-2 rounded">Download PDF</a>
              @else
                <img src="{{ asset($data->ktp_ibu) }}" alt="Foto KTP Ibu" class="h-40 w-auto object-cover cursor-pointer" onclick="openFullScreen('{{ asset($data->ktp_ibu) }}')">
              @endif
            </div>
          </div>

          <div class="col-span-full">
            <label for="ktp_calon" class="block text-sm font-medium leading-6 text-gray-900">Foto Scan KTP Calon</label>
            <div class="mt-2">
              @if(pathinfo($data->ktp_calon, PATHINFO_EXTENSION) == 'pdf')
                <a href="{{ asset($data->ktp_calon) }}" download class="bg-blue-500 text-white px-3 py-2 rounded">Download PDF</a>
              @else
                <img src="{{ asset($data->ktp_calon) }}" alt="Foto KTP Calon" class="h-40 w-auto object-cover cursor-pointer" onclick="openFullScreen('{{ asset($data->ktp_calon) }}')">
              @endif
            </div>
          </div>

          <div class="col-span-full">
            <label for="kk_pemohon" class="block text-sm font-medium leading-6 text-gray-900">Foto Scan KK Pemohon</label>
            <div class="mt-2">
              @if(pathinfo($data->kk_pemohon, PATHINFO_EXTENSION) == 'pdf')
                <a href="{{ asset($data->kk_pemohon) }}" download class="bg-blue-500 text-white px-3 py-2 rounded">Download PDF</a>
              @else
                <img src="{{ asset($data->kk_pemohon) }}" alt="Foto KK Pemohon" class="h-40 w-auto object-cover cursor-pointer" onclick="openFullScreen('{{ asset($data->kk_pemohon) }}')">
              @endif
            </div>
          </div>

          <div class="col-span-full">
            <label for="kk_calon" class="block text-sm font-medium leading-6 text-gray-900">Foto Scan KK Calon</label>
            <div class="mt-2">
              @if(pathinfo($data->kk_calon, PATHINFO_EXTENSION) == 'pdf')
                <a href="{{ asset($data->kk_calon) }}" download class="bg-blue-500 text-white px-3 py-2 rounded">Download PDF</a>
              @else
                <img src="{{ asset($data->kk_calon) }}" alt="Foto KK Calon" class="h-40 w-auto object-cover cursor-pointer" onclick="openFullScreen('{{ asset($data->kk_calon) }}')">
              @endif
            </div>
          </div>

          <div class="col-span-full">
            <label for="tgl" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Nikah</label>
            <div class="mt-2">
              <input type="date" name="tgl" id="tgl" value="{{ $data->tgl }}" readonly class="block w-1/6 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="col-span-full">
            <label for="ktp_wali" class="block text-sm font-medium leading-6 text-gray-900">Foto Scan KTP Wali</label>
            <div class="mt-2">
              @if(pathinfo($data->ktp_wali, PATHINFO_EXTENSION) == 'pdf')
                <a href="{{ asset($data->ktp_wali) }}" download class="bg-blue-500 text-white px-3 py-2 rounded">Download PDF</a>
              @else
                <img src="{{ asset($data->ktp_wali) }}" alt="Foto KTP Wali" class="h-40 w-auto object-cover cursor-pointer" onclick="openFullScreen('{{ asset($data->ktp_wali) }}')">
              @endif
            </div>
          </div>

          <div class="col-span-full mt-6">
            <label for="status_wali" class="block text-sm font-medium leading-6 text-gray-900">Status Wali di Keluarga</label>
            <div class="mt-2">
              <input type="text" name="status_wali" id="status_wali" value="{{ $data->status_wali }}" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="col-span-full mt-6">
            <label for="no" class="block text-sm font-medium leading-6 text-gray-900">No yang bisa dihubungi</label>
            <div class="mt-2">
              <input type="number" name="no" id="no" value="{{ $data->no }}" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-full  mt-6">
            <label for="file" class="block text-sm font-medium leading-6 text-gray-900">File Surat (PDF)</label>
            <div class="mt-2">
              @if($data->file)
                <a href="{{ asset($data->file) }}" target="_blank" class="text-indigo-600 hover:underline">Lihat file yang diunggah sebelumnya</a>
              @endif
              <input type="file" name="file" id="file" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="col-span-full  mt-6">
            <label for="note" class="block text-sm font-medium leading-6 text-gray-900">Catatan</label>
            <div class="mt-2">
              <textarea id="note" name="note" rows="3" class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $data->note }}</textarea>
            </div>
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="{{ route('admin.surat')}}" class="inline-block">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900 border border-transparent p-2 rounded hover:border-gray-500">
              Cancel
            </button>
          </a>
  
          <button type="button" onclick="submitForm('ditolak')" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Tolak</button>
  
          <button type="button" onclick="submitForm('selesai')" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </div>
      </div>
    </div>
  </form>

  <div id="fullScreenModal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-75 z-50 overflow-auto hidden">
    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
        <div class="relative p-4 bg-white shadow-lg rounded-lg max-w-screen-lg w-full">
            <img id="fullScreenImage" src="#" alt="Full Screen Image" class="max-h-screen max-w-full object-contain">
            <button onclick="closeFullScreen()" class="absolute top-0 right-0 mt-4 mr-4 bg-gray-200 text-gray-800 rounded-full p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
  </div>

  <script>
    function submitForm(status) {
        const form = document.getElementById('nikahForm');
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
