@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp
@extends('layouts.home')

@section('title',$setting->title)
@section('description'){{$setting->description}}@endsection

@section('author',$setting->company)
@section('content')
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                                                       data-bs-target="#faq-list-1">Kolay Randevu Nedir
                            ?

                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Güzellik merkezi, kuaför, berber, makyaj stüdyoları, spa ve solaryum için randevu takip
                                ve yönetim yazılımıdır.


                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-2" class="collapsed">İşletme
                            sahibiyim kolay randevuya nasıl kayıt olabilirim?

                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Güzellik işletmeniz var ise Kolay Randevuya kolayrandevu.com adresinden giriş yaparak
                                kayıt oluşturabilirsiniz.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-3" class="collapsed">Salonlardan
                            nasıl randevu alırım?

                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Yaptırmak istediğiniz işlemi seçerek, fiyat ve lokasyon filtrelemesi yaparak salonları
                                listeleyebilirsiniz. Randevu almak istediğiniz salonun konumunu haritada
                                görüntüleyebilir, işletmenin uygun olduğu saatlere göre işlem yaptıracak kişinin
                                bilgillerini randevunuzu oluşturabilirsiniz.


                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-4" class="collapsed">Randevumu
                            nasıl iptal edebilirim?

                            <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Cep telefonunuza gelen randevu linkinden dilerseniz randevu iptalini kolayca
                                yapabilirsiniz.


                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-5" class="collapsed">Randevu
                            takibimi nasıl yapabilirim?

                            <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Cep telefonunuza gelen sms sayesinde randevu takibinizi yapabilir, ilgili randevu
                                linkine tıklayarak randevunuz hakkında detaylı bilgilere ulaşabilirsiniz.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection


