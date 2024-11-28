@extends('layouts.home.app')

@section('title', 'Portofolio | Ayasya Tech Indonesia')

@section('content')
    <section class="section-py first-section-pt">
        <div class="container">
            <h2 class="mb-2 text-center">Portofolio</h2>
            <p class="mb-0 text-center">
                Berikut Beberapa Projek Yang Telah Kami Kerjakan
            </p>

            <div class="row row-cols-1 row-cols-md-3 g-6 mt-12">
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/1.png') }}" width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Topup Dan PPOB</h5>
                            <p class="card-text">
                                <strong>Aplikasi Topup dan PPOB</strong> adalah aplikasi yang memungkinkan pengguna
                                untuk membayar tagihan dan membeli produk digital secara online, seperti listrik,
                                air, pulsa, dan voucher game.
                            </p>
                            <a href="https://ayasyatech.com" target="_blank"
                                class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <div class="overflow-hidden" style="height: 400px; width: 100%">
                            <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/2.jpeg') }}"
                                width="100" height="100" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Integrasi PPOB ke Telegram</h5>
                            <p class="card-text">
                                <strong>Integrasi PPOB ke Telegram</strong> adalah aplikasi yang dapat memudahkan
                                saat transaksi PPOB atau Topup menggunakan API official dari Telegram, sehingga user
                                tidak harus membuka website dan login untuk melakukan transaksi.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/3.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Server Whatsapp Gateway</h5>
                            <p class="card-text">
                                <strong>Server Whatsapp Gateway</strong> adalah sistem yang menghubungkan aplikasi atau
                                layanan dengan WhatsApp untuk memungkinkan pengiriman dan penerimaan pesan secara otomatis.
                                Layanan ini umumnya digunakan untuk keperluan bisnis, seperti mengirim notifikasi, promosi,
                                atau layanan pelanggan melalui WhatsApp secara massal atau terotomatisasi.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/4.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Maubang</h5>
                            <p class="card-text">
                                <strong>Maubang</strong> adalah aplikasi yang memungkinkan pengguna
                                untuk membayar tagihan dan membeli produk digital secara online, seperti listrik,
                                air, pulsa, dan voucher game.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/5.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">API Check Username Game</h5>
                            <p class="card-text">
                                <strong>Check Username Game</strong> adalah aplikasi untuk validasi nickname/username pada
                                akun game, yang nantinya di aplikasikan ke website topup Game.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/6.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Presensi GPS</h5>
                            <p class="card-text">
                                <strong>Presensi GPS</strong> adalah aplikasi untuk memudahkan management absensi pada
                                sekolah menggunakan sistem swap foto dan GPS absen.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/7.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Home Automation</h5>
                            <p class="card-text">
                                <strong>Home Automation</strong> adalah aplikasi untuk mengontrol rumah dari jarak jauh
                                menggunakan jaringan internet yang ter-integrasi menggunakan protocol pada project IoT.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/8.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Company Profile DPRD Bekasi</h5>
                            <p class="card-text">
                                <strong>Company Profile Kemendikbud</strong> adalah platform atau sistem yang digunakan
                                untuk menampilkan profil resmi instansi atau organisasi di bawah Kementerian. Aplikasi ini
                                biasanya berfungsi untuk
                                memberikan informasi mengenai struktur organisasi, visi dan misi, program kerja, serta data
                                penting lainnya dengan lembaga terkait.
                            </p>
                            <a href="https://dprd.bekasikab.go.id/" target="_blank"
                                class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/9.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Monitoring Residual Oxygen Inspection System</h5>
                            <p class="card-text">
                                <strong>Residual Oxygen Inspection System</strong> adalah antarmuka digital yang dirancang
                                untuk memantau dan menampilkan metrik serta data terkait level oksigen sisa dalam kemasan
                                sachet, seperti dalam proses industri, lini pengisian, atau aplikasi medis.
                                Dashboard ini memungkinkan pengguna untuk melacak level oksigen, kinerja, dan status sistem
                                secara real-time.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-auto">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/10.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">Auto Setup Printer</h5>
                            <p class="card-text">
                                <strong>Auto Setup Printer</strong> adalah sebuah aplikasi yang di integrasikan untuk
                                mengirim perintah Start/Stop, Send Variable, Counting dll kepada printer, menggunakan bahasa
                                mesin, yang nanti nya data dari website dashboard akan di kirim kan kepada tiap tiap
                                printer.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/img/portofolio/7.png') }}"
                            width="100" />
                        <div class="card-body">
                            <h5 class="card-title">IoT Lampu Otomatis</h5>
                            <p class="card-text">
                                <strong>IoT Lampu Otomatis</strong> adalah program untuk penjadwalan kapan lampu akan
                                menyala dan kapan lampu akan mati, ini menggunakan micro controller ESP-32 serta MQTT untuk
                                protocol communitations agar bisa di kontrol jarak jauh.
                            </p>
                            <a href="#" class="btn btn-outline-primary waves-effect">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
