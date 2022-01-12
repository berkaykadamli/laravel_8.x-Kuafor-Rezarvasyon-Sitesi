@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp
@extends('layouts.home')

@section('title',$setting->title)
@section('description'){{$setting->description}}@endsection

@section('author',$setting->company)
@section('content')
    <section class="faq">
        <div class="container" >
            <div class="row" style="color: white">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>Hakkımızda</h3>
                    <p class="blog-detail">Kolay Randevu, güzellik sektöründe faaliyet gösteren işletmeler ile müşterilerini
                        bir araya getiren ve hem işletmelerin randevularını daha kolay yönetmelerini, hem de müşterilerin
                        randevularını daha kolay almalarını sağlayan bir platformdur. Temelleri 2015 yılının Ocak ayında
                        Burhan Uğur Çivi ve Candaş Sual tarafından atılan Kolay Randevu, sonrasında Mehmet Kerem Tiryaki'nin
                        de katılımıyla 7 Aralık 2015 tarihinde Kolay Randevu İnternet Hizmetleri Anonim Şirketi adıyla
                        ticari faaliyetlerine başlamıştır.</p>
                    <div><br></div>
                    <div>Müşteri olarak her zaman gittiğiniz ve hizmet aldığınız kuaförden, berberden, güzellik merkezinden,
                        solaryum merkezinden veya spadan randevularınızı çok daha kolay bir şekilde, ister Kolay Randevu web
                        sitesinden, isterseniz de Kolay Randevu mobil uygulamalarını kullanarak alabilirsiniz.&nbsp;
                    </div>
                    <div><br></div>
                    <div>Alternatif olarak güzelliğiniz/kişisel bakımınız için hizmet almak üzere yeni bir işletme arayışına
                        girdiğinizde de, dilerseniz yakınlarınızda, dilerseniz de belirttiğiniz bir konumdaki işletmeleri
                        listeledikten sonra yorumlarına, fotoğraflarına, hizmetlerine, boş saatlerine ve fiyatlarına bakarak
                        size en uygun işletmeyi seçebilir ve randevunuzu zahmetsizce, saniyeler içerisinde
                        oluşturabilirsiniz.
                    </div>
                    <div><br></div>
                    <div>Kolay Randevu müşterilere ek olarak işletme sahiplerine de işlerini çok kolaylaştıracak hizmetler
                        ve araçlar sunar. Kolay Randevu üyesi iş yeri olarak randevularınızı defterden ve telefonla yönetme
                        karmaşasından hemen kurtulabilirsiniz.&nbsp;
                    </div>
                    <div><br></div>
                    <div>Kolay Randevu sistemi üzerinden yönettiğiniz randevular için müşterilerinize otomatik olarak
                        randevu öncesinde hatırlatma SMS'leri atılır. Bu sayede hem randevusunu unuttuğu için gelmeyen, hem
                        de randevusuna gelmeyecekse bile erkenden sizi bilgilendirmeyen müşteri sayısında hatrı sayılır bir
                        azalma, müşterilerinizin randevu sadakatinde ise önemli ölçüde bir artış sağlanmış olur.&nbsp;
                    </div>
                    <div><br></div>
                    <div>Kolay Randevu randevu öncesinde olduğu şekilde randevu sonrasında da müşteriler ile ilişkilerinizi
                        bir sonraki seviyeye taşır ve yeni çağa ayak uydurmanızı sağlar. Müşterileriniz dükkanınızdan
                        çıktıktan sonra Kolay Randevu sistemi tarafından kısa mesajla atılan memnuniyet anketi ile
                        müşterilerinizin aldıkları hizmete puan verip yorum yapmaları sağlanır. Bu sayede herhangi bir
                        memnuniyetsizliği olan müşterileriniz hakkında erkenden bilgi sahibi olarak memnuniyetsizliklerini
                        telafi etme şansı yakalarsınız.
                    </div>
                    <div><br></div>
                    <div>Güzellik sektöründe faaliyet gösteren işletmelere randevu yönetimi konusunda sunduğumuz faydalara
                        ek olarak, internet mecrasında tanıtımlarını yapabilecekleri ve işletmelerinin bilinirliklerini
                        artırabilecekleri benzersiz bir mecra sunuyoruz. Bu sayede müşteri portföylerini genişleten
                        işletmelere direk maddi kazanç sağlamış oluyoruz.
                    </div>
                    <div><br></div>
                    <div>Sunduğu hizmetler ve sağladığı faydalar ile Kolay Randevu güzellik sektörünün işleyişini yeni çağa
                        ayak uydurmayı kendine misyon edinmiştir. Siz de dilerseniz müşteri olarak, dilerseniz de işletme
                        sahibi olarak Kolay Randevu sistemini kullanmaya başlayın ve sunduğumuz hizmetlerin farkını yaşamaya
                        hemen başlayın!
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

{{--    <div class="col-md-9">--}}
{{--        <div class="box_style_1">--}}
{{--            <div class="post nopadding blog-post-class">--}}
{{--                <h1 style="font-size:22px;"></h1>--}}

{{--                <p></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
