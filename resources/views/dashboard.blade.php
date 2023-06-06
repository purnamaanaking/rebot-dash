<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RB001-001 | Re-Bot Dashboard</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-light">
    @include('nav')

    <div class="mt-5">
        &nbsp;
    </div>

    <div class="container py-3 px-4 mt-3">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <div class="h4">RB001-001</div>
                <div>6 June 2023 10:02:00 - 6 June 2023 10:56:00</div>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2 mt-3">
                    <a href="{{ route('exercises') }}" class="btn btn-dark">
                        <i class="bi bi-chevron-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xl-6">
                <div class="bg-primary p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-white">Durasi Latihan</div>
                            <div class="fs-4 text-white blink-me">01 <small>jam</small> 54 <small>menit</small> 34 <small>detik</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-stopwatch fs-1 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Jumlah Langkah</div>
                            <div class="fs-4">60 <small>langkah</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-arrow-repeat fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary"><i class="bi bi-graph-up me-2 fs-4"></i> Posisi Ankle</div>
                            <div>
                                <canvas id="pChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary"><i class="bi bi-bar-chart me-2 fs-4"></i> Kecepatan Sudut Ankle</div>
                            <div>
                                <canvas id="voutChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Dorsifleksi Maksimum</div>
                            <div class="fs-4">0.36 <small>derajat</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-journal-medical fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Plantarfleksi Maksimum</div>
                            <div class="fs-4">-0.01 <small>derajat</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-clipboard2-pulse fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Range of Motion Angkle</div>
                            <div class="fs-4">0.37 <small>derajat</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-file-earmark-medical fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Persentase Urutan Gait Benar</div>
                            <div class="fs-4">95 <small>%</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-card-checklist fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Durasi Langkah Yang Benar</div>
                            <div class="fs-4">1.2 <small>detik</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-clock-history fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Langkah Per Detik</div>
                            <div class="fs-4">0.833 <small>langkah</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-repeat fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            &nbsp;
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const pChart = document.getElementById('pChart');
        new Chart(pChart, {
                type: 'line',
                data: {
                    labels: ['', '', '', '', '', ''],
                datasets: [{
                    label: 'Nilai P',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1,
                    backgroundColor: '#0E6EFD',
                    borderColor: '#0E6EFD',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const voutChart = document.getElementById('voutChart');
        new Chart(voutChart, {
                type: 'line',
                data: {
                    labels: ['', '', '', '', '', ''],
                datasets: [{
                    label: 'Nilai VOUT',
                    data: [5, 2, 3, 12, 19, 3],
                    borderWidth: 1,
                    backgroundColor: '#0E6EFD',
                    borderColor: '#0E6EFD',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
      </script>
</body>
</html>
