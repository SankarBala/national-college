@extends("layouts.app")

@section('content')
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Faq</h2>
                    <ul class="bread-list">
                        <li><a href="index-2.html">Home<i class="far fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Faq</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="faq page section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Frequently Ask <span>Questions</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using orem psum is that it has a more-or-less
                            normal distribution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="faq-content">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">

                                <div class="faq-heading" id="FaqTitle1">
                                    <h4 class="faq-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                            href="#faq1">01. What are sit voluptatem accusantium doloremque laudantium
                                            ?</a>
                                    </h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle1">
                                    <div class="faq-body">At vero eos et accusamus et iusto odio dignissimos
                                        ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                                        libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus.</div>
                                </div>

                            </div>
                            <div class="panel panel-default active">

                                <div class="faq-heading" id="FaqTitle2">
                                    <h4 class="faq-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                            href="#faq2">02. How totam rem aperiam eaque ipsa quae ab illo inventore
                                            veritatis ?</a>
                                    </h4>
                                </div>
                                <div id="faq2" class="panel-collapse collapse show" role="tabpanel"
                                    aria-labelledby="FaqTitle2">
                                    <div class="faq-body">At vero eos et accusamus et iusto odio dignissimos
                                        ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                                        libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus.</div>
                                </div>

                            </div>
                            <div class="panel panel-default">

                                <div class="faq-heading" id="FaqTitle3">
                                    <h4 class="faq-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                            href="#faq3">03. Where quasi architecto beatae vitae dicta sunt explicabo
                                            ?</a>
                                    </h4>
                                </div>
                                <div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle3">
                                    <div class="faq-body">At vero eos et accusamus et iusto odio dignissimos
                                        ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                                        libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus.</div>
                                </div>

                            </div>
                            <div class="panel panel-default">

                                <div class="faq-heading" id="FaqTitle4">
                                    <h4 class="faq-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                            href="#faq4">04. How nim ipsam voluptatem quia voluptas sit aspernatur?</a>
                                    </h4>
                                </div>
                                <div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle4">
                                    <div class="faq-body">At vero eos et accusamus et iusto odio dignissimos
                                        ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                                        libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus.</div>
                                </div>

                            </div>
                            <div class="panel panel-default">

                                <div class="faq-heading" id="FaqTitle5">
                                    <h4 class="faq-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                            href="#faq5">05. What porro quisquam est qui dolorem ipsum quia dolor sit
                                            amet ?</a>
                                    </h4>
                                </div>
                                <div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle5">
                                    <div class="faq-body">At vero eos et accusamus et iusto odio dignissimos
                                        ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                                        libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus.</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
