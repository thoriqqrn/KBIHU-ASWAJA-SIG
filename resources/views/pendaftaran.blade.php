@extends('layouts.main')

@section('title', 'Pendaftaran Online | KBIHU Aswaja')

@push('styles')
    {{-- Stack 'styles' ini bisa dihapus jika tidak ada style lain di halaman lain --}}
@endpush

@section('content')

    <!-- 1. Page Header -->
    <div class="py-5 text-center" style="background-color: #f0f4f2;">
        <div class="container">
            <h1 class="display-4 fw-bold">Formulir Pendaftaran Haji</h1>
            <p class="lead text-muted col-lg-8 mx-auto">Silakan lengkapi data diri dan unggah dokumen persyaratan Anda.
                Tim kami akan segera menghubungi Anda untuk proses selanjutnya.</p>
        </div>
    </div>

    <!-- 2. Formulir Pendaftaran Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Kotak Arahan / Peringatan -->
                    <div class="alert alert-warning d-flex align-items-center p-4 rounded-custom mb-5">
                        <i class="fas fa-exclamation-triangle fa-2x me-4"></i>
                        <div>
                            <h4 class="alert-heading fw-bold">Perhatian Sebelum Mengisi!</h4>
                            <ul>
                                <li>Pastikan nama yang Anda masukkan sama persis dengan yang tertera pada KTP/KK/Akte
                                    Kelahiran/Ijazah/Buku Nikah.</li>
                                <li>Pastikan Porsi Haji Anda masuk dalam Keberangkatan Tahun Depan.</li>
                                <li>Semua dokumen yang diunggah harus dapat dibaca dengan jelas (tidak buram).</li>
                                <li>Ukuran maksimal untuk setiap file adalah 2MB. Format yang diterima: JPG, PNG, PDF.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card Formulir Utama -->
                    <div class="card border-0 shadow-sm rounded-custom">
                        <div class="card-body p-4 p-md-5">

                            <!-- Stepper (Navigasi Langkah) -->
                            <ul class="nav nav-pills justify-content-center mb-4 stepper" id="stepper" role="tablist">
                                <li class="nav-item mx-2" role="presentation"><a class="nav-link active" id="tab-data"
                                        data-bs-toggle="tab" href="#step1" role="tab" aria-controls="step1"
                                        aria-selected="true"><span class="step-index">1</span> Data Diri</a></li>
                                <li class="nav-item mx-2" role="presentation"><a class="nav-link" id="tab-doc"
                                        data-bs-toggle="tab" href="#step2" role="tab" aria-controls="step2"
                                        aria-selected="false"><span class="step-index">2</span> Dokumen</a></li>
                                <li class="nav-item mx-2" role="presentation"><a class="nav-link" id="tab-review"
                                        data-bs-toggle="tab" href="#step3" role="tab" aria-controls="step3"
                                        aria-selected="false"><span class="step-index">3</span> Review & Kirim</a></li>
                            </ul>

                            <!-- Progress Bar -->
                            <div class="progress mb-5" style="height: 10px; border-radius: 20px;">
                                <div id="stepProgress" class="progress-bar bg-success" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <!-- FORMULIR -->
                            <form id="formPendaftaran" action="{{ route('pendaftaran.store') }}" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                <div class="tab-content">
                                    <!-- STEP 1: Data Diri -->
                                    <div class="tab-pane fade show active" id="step1" role="tabpanel"
                                        aria-labelledby="tab-data">
                                        <!-- ==== PERUBAHAN: Menambahkan div pembungkus dengan background ==== -->
                                        <div class="p-4 rounded-custom" style="background-color: #f8f9fa;">
                                            <h3 class="fw-bold border-bottom pb-3 mb-4">Data Diri Calon Jamaah</h3>
                                            <div class="row g-4">
                                                <div class="col-12"><label for="nama_lengkap" class="form-label fw-bold">1.
                                                        Nama Lengkap (Sesuai KTP)</label><input type="text"
                                                        id="nama_lengkap" name="nama_lengkap" class="form-control" required>
                                                    <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
                                                </div>
                                                <div class="col-md-6"><label for="tempat_lahir"
                                                        class="form-label fw-bold">2. Tempat Lahir</label><input type="text"
                                                        id="tempat_lahir" name="tempat_lahir" class="form-control" required>
                                                    <div class="invalid-feedback">Tempat lahir wajib diisi.</div>
                                                </div>
                                                <div class="col-md-6"><label for="tanggal_lahir"
                                                        class="form-label fw-bold">Tanggal Lahir</label><input type="date"
                                                        id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                                                        required>
                                                    <div class="invalid-feedback">Tanggal lahir wajib diisi.</div>
                                                </div>
                                                <div class="col-12"><label for="alamat" class="form-label fw-bold">3. Alamat
                                                        Lengkap (Sesuai KTP)</label><textarea id="alamat" name="alamat"
                                                        rows="4" class="form-control" required></textarea>
                                                    <div class="invalid-feedback">Alamat wajib diisi.</div>
                                                </div>
                                                <div class="col-md-6"><label for="telepon" class="form-label fw-bold">4.
                                                        Telepon / HP (Aktif WhatsApp)</label><input type="tel" id="telepon"
                                                        name="telepon" class="form-control" required
                                                        placeholder="08xxxxxxxxxx">
                                                    <div class="invalid-feedback">Nomor HP wajib diisi.</div>
                                                </div>
                                                <div class="col-md-6"><label for="nomor_porsi" class="form-label fw-bold">5.
                                                        Nomor Porsi Haji</label><input type="text" id="nomor_porsi"
                                                        name="nomor_porsi" class="form-control" required>
                                                    <div class="invalid-feedback">Nomor porsi wajib diisi.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="button" class="btn btn-success btn-lg px-4 next-step">Lanjut ke
                                                Dokumen <i class="fas fa-arrow-right ms-2"></i></button>
                                        </div>
                                    </div>

                                    <!-- STEP 2: Dokumen -->
                                    <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="tab-doc">
                                        <!-- ==== PERUBAHAN: Menambahkan div pembungkus dengan background ==== -->
                                        <div class="p-4 rounded-custom" style="background-color: #f8f9fa;">
                                            <h3 class="fw-bold border-bottom pb-3 mb-4">Lampiran Dokumen Persyaratan</h3>
                                            <div class="row g-4">
                                                <div class="col-md-6"><label class="form-label fw-bold">1. KTP</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_ktp" class="position-absolute w-100 h-100 opacity-0"
                                                            required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">KTP wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">2. Kartu Keluarga
                                                        (KK)</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_kk" class="position-absolute w-100 h-100 opacity-0"
                                                            required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">KK wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">3. Akta
                                                        Kelahiran</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_akta" class="position-absolute w-100 h-100 opacity-0"
                                                            required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">Akta kelahiran wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">4. Surat
                                                        Nikah</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_nikah"
                                                            class="position-absolute w-100 h-100 opacity-0">
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">5. Ijazah</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_ijazah"
                                                            class="position-absolute w-100 h-100 opacity-0" required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">Ijazah wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">6. Bukti Setoran
                                                        Awal (BPIH)</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_bpih" class="position-absolute w-100 h-100 opacity-0"
                                                            required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">Bukti setoran awal wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">7. Surat Pendaftaran Pergi Haji (SPPH)</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_spph" class="position-absolute w-100 h-100 opacity-0"
                                                            required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">SPPH wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">8. Pas Foto</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_foto" class="position-absolute w-100 h-100 opacity-0"
                                                            required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">Pas foto wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">9. Paspor</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_paspor"
                                                            class="position-absolute w-100 h-100 opacity-0" required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">Paspor wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">10. Vaksin Booster
                                                        1</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_booster1"
                                                            class="position-absolute w-100 h-100 opacity-0" required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">Sertifikat booster 1 wajib diunggah.</div>
                                                </div>
                                                <div class="col-md-6"><label class="form-label fw-bold">11. Vaksin Booster
                                                        2</label>
                                                    <div class="dropzone position-relative"><input type="file"
                                                            name="file_booster2"
                                                            class="position-absolute w-100 h-100 opacity-0" required>
                                                        <div class="text-center"><i
                                                                class="fas fa-cloud-upload-alt d-block mb-2"></i> Klik atau
                                                            seret file ke sini</div>
                                                    </div>
                                                    <div class="invalid-feedback">Sertifikat booster 2 wajib diunggah.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-4">
                                            <button type="button" class="btn btn-outline-secondary btn-lg prev-step"><i
                                                    class="fas fa-arrow-left me-2"></i> Kembali</button>
                                            <button type="button" class="btn btn-success btn-lg px-4 next-step">Lanjut ke
                                                Review <i class="fas fa-arrow-right ms-2"></i></button>
                                        </div>
                                    </div>

                                    <!-- STEP 3: Review & Kirim -->
                                    <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="tab-review">
                                        <!-- ==== PERUBAHAN: Menambahkan div pembungkus dengan background ==== -->
                                        <div class="p-4 rounded-custom" style="background-color: #f8f9fa;">
                                            <h3 class="fw-bold border-bottom pb-3 mb-4">Review Data & Pendaftaran</h3>
                                            <p class="text-muted">Mohon periksa kembali semua data yang telah Anda masukkan.
                                                Pastikan tidak ada kesalahan sebelum mengirimkan formulir.</p>
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" value="1" id="persetujuan"
                                                    required>
                                                <label class="form-check-label" for="persetujuan">Saya menyatakan bahwa data
                                                    yang diisikan adalah benar dan dokumen yang diunggah sesuai
                                                    aslinya.</label>
                                                <div class="invalid-feedback">Anda harus menyetujui pernyataan ini.</div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-4">
                                            <button type="button" class="btn btn-outline-secondary btn-lg prev-step"><i
                                                    class="fas fa-arrow-left me-2"></i> Kembali</button>
                                            <button type="submit" class="btn btn-success btn-lg px-5"><i
                                                    class="fas fa-paper-plane me-2"></i> Kirim Pendaftaran</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('formPendaftaran');
            const nextButtons = document.querySelectorAll('.next-step');
            const prevButtons = document.querySelectorAll('.prev-step');
            const progress = document.getElementById('stepProgress');
            const stepLinks = document.querySelectorAll('#stepper a');

            const tabInstances = Array.from(stepLinks).map(link => new bootstrap.Tab(link));

            function updateUI(activeIndex) {
                const pct = (activeIndex / (stepLinks.length - 1)) * 100;
                progress.style.width = pct + '%';

                stepLinks.forEach((link, index) => {
                    const stepIndex = link.querySelector('.step-index');
                    if (index <= activeIndex) {
                        stepIndex.style.backgroundColor = 'var(--primary-color)';
                        stepIndex.style.color = '#fff';
                    } else {
                        stepIndex.style.backgroundColor = '#e9ecef';
                        stepIndex.style.color = 'var(--dark-color)';
                    }
                });
            }

            function getActiveIndex() {
                return Array.from(document.querySelectorAll('.tab-pane')).findIndex(pane => pane.classList.contains('active'));
            }

            nextButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const activeIndex = getActiveIndex();
                    const activePane = document.querySelectorAll('.tab-pane')[activeIndex];
                    const controls = activePane.querySelectorAll('input[required], textarea[required], select[required]');
                    let allValid = true;

                    form.classList.add('was-validated');

                    controls.forEach(input => {
                        if (!input.checkValidity()) {
                            allValid = false;
                        }
                    });

                    if (allValid) {
                        if (activeIndex < tabInstances.length - 1) {
                            tabInstances[activeIndex + 1].show();
                        }
                    }
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const activeIndex = getActiveIndex();
                    if (activeIndex > 0) {
                        tabInstances[activeIndex - 1].show();
                    }
                });
            });

            stepLinks.forEach((link) => {
                link.addEventListener('shown.bs.tab', function () {
                    updateUI(getActiveIndex());
                });
            });

            updateUI(0);
        });
    </script>
@endpush