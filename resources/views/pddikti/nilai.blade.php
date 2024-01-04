@extends('pddikti.home')

@section('content')
    <div class="mx-4 font-bold text-4xl">Nilai</div>
@endsection

@section('table')
    <table border="1">
        <thead>
            <tr>
                <th class="border">Mata Kuliah</th>
                <th class="border">Nama Mahasiswa</th>
                <th class="border">Nilai UTS</th>
                <th class="border">Nilai UAS</th>
                <th class="border">Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($nilai as $item)
                <tr>
                    <td class="border">{{ $item->kode_matkul }}</td>
                    <td class="border">{{ $item->nama_lengkap }}</td>
                    <td class="border">{{ $item->nilai_uts }}</td>
                    <td class="border">{{ $item->nilai_uas }}</td>
                    <td class="border">{{ $item->nilai_akhir }}</td>
                </tr>
            @empty
                <tr>
                    <td>data kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
