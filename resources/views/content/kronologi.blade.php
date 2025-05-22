@extends('layouts.template')
@section('title', 'Kronologi')

@section('content')
<div class="w-full px-4 py-6 mx-auto space-y-6">

  <!-- Header & Modal Trigger -->
  <div class="bg-white rounded-xl shadow-md p-6 flex flex-col lg:flex-row items-start lg:items-center justify-between">
    <div class="mb-4 lg:mb-0">
      <h2 class="text-lg font-semibold text-slate-700">Data Kronologi</h2>
      <p class="text-sm text-slate-500">Tools System</p>
    </div>
    <button
      class="inline-flex items-center bg-sky-400 hover:bg-sky-700 text-white text-sm px-4 py-2 rounded-lg shadow-sm transition-all"
      data-modal-toggle="createKronologiModal"
    >
      (+) Tambah Kronologi
    </button>
  </div>

  <!-- Modal -->
  <div
    id="createKronologiModal"
    class="hidden fixed inset-0 z-[9999] overflow-y-auto bg-black bg-opacity-40 p-4"
  >
    <div class="min-h-screen flex items-center justify-center">
      <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl">
        <!-- Modal Header -->
        <div class="flex justify-between items-center px-6 py-4 border-b">
          <h3 class="text-lg font-semibold text-gray-700">Tambah Kronologi</h3>
          <button data-modal-hide="createKronologiModal" class="text-gray-400 hover:text-gray-600 text-2xl leading-none">&times;</button>
        </div>
        <!-- Modal Body -->
        <div class="px-6 py-4">
          <form method="POST" action="#">
            @csrf
            <!-- Grid 3 kolom -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
              <div>
                <label class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal"
                       class="mt-1 block w-full border rounded px-3 py-2 focus:ring focus:border-blue-300"
                       required>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700">WIP</label>
                <select name="wip"
                        class="mt-1 block w-full border rounded px-3 py-2 focus:ring focus:border-blue-300"
                        required>
                  <option value="">Pilih WIP</option>
                </select>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="kategori"
                        class="mt-1 block w-full border rounded px-3 py-2 focus:ring focus:border-blue-300"
                        required>
                  <option value="">Pilih Kategori</option>
                  <option value="1">Kategori 1</option>
                  <option value="2">Kategori 2</option>
                </select>
              </div>
            </div>

            <!-- Tabel Perbandingan -->
            <div class="mb-6">
              <h4 class="text-center font-semibold mb-3">Input Kronologi</h4>
              <div class="overflow-x-auto">
                <table class="min-w-full border text-sm">
                  <thead class="bg-gray-100 text-center text-blue-500 font-medium">
                    <tr>
                      <th class="border px-2 py-1">Salah</th>
                      <th class="border px-2 py-1">Input</th>
                      <th class="border px-2 py-1">Benar</th>
                      <th class="border px-2 py-1">Input</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-700">
                    @php
                      $fields = ['No Model','Inisial','JC','Area','Label','No Mc','No Box','Qty'];
                    @endphp
                    @foreach($fields as $f)
                      <tr>
                        <td class="border px-2 py-1 whitespace-nowrap">{{ $f }}</td>
                        <td class="border px-2 py-1">
                          <input type="text" name="salah[{{ Str::slug($f,'_') }}]"
                                 class="w-full border rounded px-2 py-1">
                        </td>
                        <td class="border px-2 py-1 whitespace-nowrap">{{ $f }}</td>
                        <td class="border px-2 py-1">
                          <input type="text" name="benar[{{ Str::slug($f,'_') }}]"
                                 class="w-full border rounded px-2 py-1">
                        </td>
                      </tr>
                    @endforeach
                    <tr>
                      <td colspan="2"></td>
                      <td class="border px-2 py-1">Keterangan</td>
                      <td class="border px-2 py-1">
                        <textarea name="keterangan" rows="2"
                                  class="w-full border rounded px-2 py-1"></textarea>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Modal Actions -->
            <div class="flex justify-end space-x-2">
              <button type="button"
                      data-modal-hide="createKronologiModal"
                      class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">
                Batal
              </button>
              <button type="submit"
                      class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                Simpan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Card + DataTable -->
  <div class="border-black/12.5 shadow-soft-xl relative flex flex-col break-words rounded-2xl bg-white">
    <div class="p-6 pb-0">
      <div class="overflow-x-auto">
        <table id="kronologiTable" class="min-w-full text-slate-500">
          <thead class="bg-gray-300 text-slate-600">
            <tr>
              <th class="px-6 py-3 text-left font-bold uppercase text-xxs opacity-70">NO</th>
              <th class="px-6 py-3 text-left font-bold uppercase text-xxs opacity-70">TANGGAL INPUT</th>
              <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">PDK FAIL</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">STYLE FAIL</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">WIP</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">KATEGORI</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">KETERANGAN USER</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">USER</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">STATUS</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">USER MT</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">ADMIN INPUT</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">MAINTENANCE</th>
                <th class="px-6 py-3 text-center font-bold uppercase text-xxs opacity-70">AKSI</th>
            </tr>
          </thead>
          <tbody>
            @php
              $data = [
                (object)['tanggal'=>'2023-10-01','pdkfail'=>'L25067','jc'=>'JC1','wip'=>'WIP1','kategori'=>'Kategori 1','ketuser'=>'Keterangan 1','user'=>'User 1','status'=>'Aktif', 'usermt'=>'User MT 1', 'admininput'=>'Admin Input 1','maintenance'=>'Maintenance 1'],
                (object)['tanggal'=>'2023-10-02','pdkfail'=>'L25068','jc'=>'JC2','wip'=>'WIP2','kategori'=>'Kategori 2','ketuser'=>'Keterangan 2','user'=>'User 2','status'=>'Aktif', 'usermt'=>'User MT 2', 'admininput'=>'Admin Input 2','maintenance'=>'Maintenance 2'],
              ];
            @endphp
            @foreach($data as $row)
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-2 text-sm">{{ $loop->iteration }}</td>
                <td class="px-6 py-2 text-sm">{{ $row->tanggal }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->pdkfail }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->jc }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->wip }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->kategori }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->ketuser }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->user }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->status }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->usermt }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->admininput }}</td>
                <td class="px-6 py-2 text-sm text-center">{{ $row->maintenance }}</td>
                <td class="px-6 py-2 text-sm text-center">
                    <button class="text-blue-500 hover:text-blue-700" data-modal-toggle="editKronologiModal">
                        Edit
                    </button>
                    <button class="text-red-500 hover:text-red-700" onclick="confirm('Are you sure?') ? this.closest('form').submit() : ''">
                        Delete
                    </button>
                </td>

              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @include('layouts.footer')
</div>
@endsection

@push('scripts')
<script>
  $(function() {
    $('#kronologiTable').DataTable({
      responsive: true,
      autoWidth: false,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search..."
      }
    });
  });

  // Modal toggle
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-modal-toggle]').forEach(btn => {
      btn.addEventListener('click', () => {
        document.getElementById(btn.getAttribute('data-modal-toggle')).classList.toggle('hidden');
      });
    });
    document.querySelectorAll('[data-modal-hide]').forEach(btn => {
      btn.addEventListener('click', () => {
        document.getElementById(btn.getAttribute('data-modal-hide')).classList.add('hidden');
      });
    });
  });
</script>
@endpush
