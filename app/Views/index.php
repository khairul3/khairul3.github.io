<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Header -->
<header>
    <div class="container" data-aos="fade-down" data-aos-offset="200" data-aos-delay="400" data-aos-duration="1000">
        <div class="intro-text">
            <div class="intro-heading">KING OF SHRIMP</div>
            <div class="intro-lead-in">Produk Olahan Udang</div>
            <a href="#product" class="page-scroll btn btn-xl">Lihat produk</a>
        </div>
    </div>
</header>

<!-- product -->
<section id="product">
    <div class="container" style="margin-top: -100px;">
        <div class="row">
            <div class="col-12">
                <div class="heading" style="margin-bottom: 50px; text-align: center;" data-aos="fade-up" data-aos-offset="50" data-aos-delay="50" data-aos-duration="1000">
                    <img src="img/image/logo-max.png" alt="logo Udang" class="shrimplogo">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6"><img src="img/image/logo udang lengkap 1.jpeg" alt="sambal udang" class="shrimp"></div>
            <div class="col-md-4 box-shadow">
                <div>
                    <h3 class="headlines">Sambal Udang <img src="img/image/shrimp.png" alt="" class="small-icon"></h3>
                </div>
                <hr>
                <p class="sintony">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quo ullam iste rerum voluptas. Earum, doloremque. Nulla consectetur ab non soluta voluptatem nemo, quam pariatur doloribus nesciunt, consequuntur quidem, harum repudiandae nostrum corrupti eveniet porro recusandae cumque ullam itaque officiis minus sint earum.</p>
            </div>
        </div>
    </div>


    <div class="row" style="margin-top: 170px;">
        <div class="col-md-2"></div>
        <div class="col-md-4 box-shadow">
            <div class="mb-40 text-center text-md-left align-right" data-aos="fade-left" data-aos-duration="1500">
                <i class="d-inlin-block h2 mb-10 tf-ion-ios-alarm-outline"></i>
                <h4 class="font-weight-bold mb-2 headlines">Smooth Touch</h4>
                <p class="intro-heading">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptatem, inventore? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore?
                </p>
            </div>
            <br>
            <div class="mb-40 text-center text-md-left align-right" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1500">
                <i class="d-inlin-block h2 mb-10 tf-ion-ios-bell-outline"></i>
                <h4 class="font-weight-bold mb-2 headlines">Elegant Design</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptatem, inventore?
                </p>
            </div>
            <br>
        </div>
        <div class="col-md-4 text-center align-self-center mb-4 mb-md-0" data-aos="zoom-in" data-aos-duration="1500">
            <img class="big-image" src="img/image/sambalUdangWhite - Copy.jpg" alt="" />
        </div>
        <div class="col-md-2"></div>

    </div>



    </div>
    <!-- .container close -->
</section>

<!-- Services Section -->
<section id="services">
    <div class="container" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque reprehenderit eius molestias laborum omnis repellendus quidem eum, consectetur aut, veritatis dolor, sed consequatur optio dolores? Quaerat cupiditate ea dolorum nemo.</h3>
            </div>
        </div>
        <!-- <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Architecture</h4>
                    <p class="text-muted">Design and implementation of modern cloud native Architecture</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check-square fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Assessment</h4>
                    <p class="text-muted">You encounter punctual difficulties, issues on your scalability or security
                        for your product, we can setup an AWS assessment with a detailed remediation plan</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Advisory</h4>
                    <p class="text-muted">Personalized support in all the strategic stages of your Cloud projects and
                        on-going reflections</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-dollar fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">FinOps</h4>
                    <p class="text-muted">Optimizing your AWS spending. Help in controlling costs, and waste detection.
                        FinOps Reporting</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Security</h4>
                    <p class="text-muted">Security Assessment, review of best practices for securing your AWS workloads
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-group fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Training</h4>
                    <p class="text-muted">On-site and remote workshops for your teams, individual training, mentoring
                    </p>
                </div>
            </div> -->
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">zoph.io is a Simplified Unipersonal Joint Stock Company,
                    registered in the "Versailles, France" Trade and Companies Register under number 880003322
                    R.C.S.</h3>

                <!-- <h3 class="section-subheading text-muted"><a
                            href="https://www.certmetrics.com/amazon/public/badge.aspx?i=4&t=c&d=2019-01-10&ci=AWS00230915"
                            target="_blank"><img src="img/AWS-Badges.png" /></a></h3> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <!-- <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/zophio.jpg" alt="zoph.io">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2020</h4>
                                    <h4 class="subheading">Creation of zoph.io</h4>
                                </div> -->
                    <!-- <div class="timeline-body">
                                    <p class="text-muted">Supporting clients in the design of robust, scalable, and
                                        cost-effective cloud native architectures. We also work with customers for
                                        security reviews of AWS workloads, as well as for training sessions for Ops
                                        teams.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/engie.png" alt="ENGIE">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2018 - Today</h4>
                                    <h4 class="subheading">ENGIE</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">AWS Cloud Architect within the Data@ENGIE program.
                                        Architecture design for the DataLake Groupe product team, the CommonDataHub.
                                        Cloud native architecture, and fully Serverless.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/mm.jpg" alt="Mediametrie">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2017 - 2018</h4>
                                    <h4 class="subheading">Mediametrie</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">AWS Cloud Architect, responsible for high traffic Internet
                                        audience measurement products. I also led a FinOps program to optimize AWS
                                        spending, evaluation of FinOps tooling, and the use of Spot instances in
                                        production.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/stva.jpg" alt="STVA">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2014 - 2017</h4>
                                    <h4 class="subheading">SNCF Logistics</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Responsible for an Ops team of 4 people, then Cloud Architect
                                        with projects like the implementation of infrastructure solutions on AWS: EC2,
                                        and DRP on using S3 and Glacier.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/msft.jpg" alt="Microsoft">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2012 - 2014</h4>
                                    <h4 class="subheading">Microsoft</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">At the Microsoft France Campus, in the Support Premier
                                        division, I've worked as a Service Delivery Manager (SDM) for major accounts in
                                        the public sector with large-scale deployment projects of Microsoft solutions:
                                        Cloud and On-Premise.
                                    </p>
                                </div>
                            </div>
                        </li class="timeline-inverted">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/stg.jpg" alt="Saint-Gobain">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2005 - 2011</h4>
                                    <h4 class="subheading">Saint-Gobain Desjonquères</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">World leader in the production of glass bottles for the
                                        perfume and pharmacy industry. I was responsible for projects to integrate and
                                        operate Microsoft Cloud solutions as well as the implementation of security
                                        solutions, security policy, Pentest, Audits, Hardening of infrastructures.</p>
                                </div>
                            </div> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<!-- <aside class="clients">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.saint-gobain.com/" target="_blank">
                        <img src="img/logos/sg.jpg" class="img-responsive img-centered" alt="Saint-Gobain">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.microsoft.com" target="_blank">
                        <img src="img/logos/microsoft.jpg" class="img-responsive img-centered" alt="Microsoft">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.engie.com" target="_blank">
                        <img src="img/logos/engie.png" class="img-responsive img-centered" alt="ENGIE">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://www.mediametrie.fr" target="_blank">
                        <img src="img/logos/media.png" class="img-responsive img-centered" alt="Mediametrie">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->


<?= $this->endSection(); ?>