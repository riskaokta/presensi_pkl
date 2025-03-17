@if ($histori->isEmpty())
    <div class="alert alert-outline-warning">
        <p>Data Belum Ada</p>
    </div>
@else


    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-primary">
                <tr>
                    <th>Tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Jam Pulang</th>
                    <th>Total Jam Kerja</th>
                    <th>Catatan Harian</th>
                </tr>
            </thead>

            <script>
                document.getElementById("cetakHistori").addEventListener("click", function () {
                    window.print();
                });
            </script>

            <tbody>
                @foreach ($histori as $d)
                        <!-- @php
                                                                                        // Hitung total jam kerja
                                                                                        $jamMasuk = \Carbon\Carbon::parse($d->jam_in);
                                                                                        $jamPulang = \Carbon\Carbon::parse($d->jam_out);
                                                                                        $totalJamKerja = $jamMasuk->diff($jamPulang)->format('%H:%I:%S');
                                                                                    @endphp -->

                        @php
                            $jamMasuk = \Carbon\Carbon::parse($d->jam_in);
                            $totalJamKerja = '-';

                            // Cek jika jam pulang tersedia, maka hitung total jam kerja
                            if (!empty($d->jam_out)) {
                                $jamPulang = \Carbon\Carbon::parse($d->jam_out);
                                $totalJamKerja = $jamMasuk->diff($jamPulang)->format('%H:%I:%S');
                            }
                        @endphp
                        <tr>
                            <td>{{ date("d-m-Y", strtotime($d->tgl_presensi)) }}</td>
                            <td>{{ $d->jam_in }}</td>
                            <td>{{ $d->jam_out }}</td>
                            <td>{{ $totalJamKerja }}</td>
                            <td>{{ $d->catat_harian ?? '-' }}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tombol Cetak Histori -->
    <div class="text-end mt-3">
        <button class="btn btn-primary" id="cetakhistorimhs">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-printer">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
            </svg>
            Cetak Histori
        </a>
    </div>
@endif


<!-- @foreach ($histori as $d) -->
<!-- <ul class="listview image-listview">
        <li>
            <div class="item">
                @php
                    $path = Storage::url('uploads/absensi/' . $d->foto_in);
                @endphp -->
<!-- <img src="{{ url($path)}}" alt="image" class="image"> -->
<!-- <div class="in">
                    <div>
                        <b>{{ date("d-m-Y", strtotime($d->tgl_presensi)) }}</b><br>
                        <small class="text-muted">{{ $d->prodi }}</small>
                    </div>
                    <span class="badge {{ $d->jam_in < "07.30" ? "bg-success" : "bg-danger" }}" style="color : aliceblue;">
                        {{ $d->jam_in }}
                    </span>
                    <span class="badge bg-primary" style="color : aliceblue;">{{ $d->jam_out }}</span>
                </div>
            </div>
        </li>
    </ul> -->

<!-- <table>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Pulang</th>
        <th>Total Jam Kerja</th>
        <tr>
            <td>{{ date("d-m-Y", strtotime($d->tgl_presensi)) }}</td>
            <td>{{ $d->jam_in }}</td>
            <td>{{ $d->jam_out }}</td>
            <td>{{ $total_waktu }}</td>

        </tr>
    </table>


@endforeach -->