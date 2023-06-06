<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Re-Bot Dashboard</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-light">
    <nav class="navbar fixed-top navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container py-2 px-4">
            <a href="#" class="navbar-brand mb-0">
                <i class="bi bi-display me-2"></i> Re-Bot Dashboard
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end bg-primary" id="offcanvasNavbar">
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Re-Bot Dashboard</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-lg-none text-white-50">

                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <li class="nav-item col-12 col-lg-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-whatsapp"></i><small class="ms-2">Our Contact: 0812-3456-7891</small>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item">
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle me-2"></i><span class="d-lg-none">Admin Menu</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small><i class="bi bi-person-badge me-2"></i>Profile</small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small><i class="bi bi-gear me-2"></i>Settings</small>
                                        </button>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a href="{{ route('login') }}" class="dropdown-item" type="button">
                                            <small><i class="bi bi-lock-fill me-2"></i></i>Log Out</small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="mt-5">
        &nbsp;
    </div>

    <div class="container py-3 px-4 mt-3">
        <div class="row">
            <div class="col-xl-6">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="fs-6 text-secondary">Durasi Latihan</div>
                            <div class="fs-4">01 <small>jam</small> 54 <small>menit</small> 34 <small>detik</small></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-stopwatch fs-1"></i>
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
    </div>
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const pChart = document.getElementById('pChart');
        new Chart(pChart, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Nilai p',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1,
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
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Nilai vout',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
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
