@extends('main')

@section('page')
page="blog"
@endsection

@section('title')
<title>HOMEPAGE | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<section class="header not-full">
        @include('common.header-nav')
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="m-145">EhG Catering - hotel school of geneva</h1>
                </div>
            </div>

        </div>
        @include('common.social')
    </section>

    <section class="post-section">

        <div class="container">
            <a href="#" class="btn-back"> Back</a>
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-10">
                    <img class="right-img" src="/images/p1.jpg" alt="">
                    <p>
                        Lorem ipsum dolor sit amet, insolens scriptorem ut his, animal periculis id has, ad error
                        aliquam molestie per. Vel iudico iracundia ei. Mel quando bonorum eu, wisi probo et has. Pri ad
                        facete aliquam, ea his suscipit reprimique. Ius in erroribus sententiae consequuntur, eum ut
                        suavitate voluptatum referrentur. Ut euripidis percipitur est, mel labitur officiis in, iudico
                        doming propriae et eum.
                    </p>
                    <p>
                        Duo bonorum dolorum ocurreret et, suas legimus ad pro, cum at vide tempor pertinacia. Senserit
                        imperdiet sit ex, id agam ignota mediocritatem vis. At per laboramus eloquentiam, an vel aliquid
                        ocurreret laboramus. Vix fugit libris nominati no, eu rebum malorum postulant pro. Regione
                        prompta verterem ut sea.
                    </p>
                    <p>
                        Usu consul eirmod civibus et. Ei mutat aperiri cum, sed et nobis quando tollit, vidit melius
                        accumsan est an. Dicant offendit gubergren nam in, ea nemore explicari pro. Diceret nonumes
                        accusamus sea ea, nam inciderint scriptorem an. Sed novum cetero labitur ut, mel meis homero et.
                    </p>
                    <p>
                        Discere suscipiantur ex sit. At vix assum graeci definiebas, id solum nihil equidem eos, mel
                        alia suscipit ea. Est nibh admodum recteque ut. Ad sit harum vitae efficiendi, ius te movet
                        quaestio, clita assueverit philosophia ut pri. Meis definitionem ea pro, cu usu legimus
                        disputationi reprehendunt. Nostrum vituperata pro at. Nec et scaevola reformidans, nonumy
                        officiis ea ius. Vel ea principes hendrerit, vis eu augue scripserit. Te unum mutat efficiantur
                        duo, sed ad causae ullamcorper, libris inimicus eum id. No persius mediocritatem his.
                    </p>
                    <img class="left-img" src="/images/p1.jpg" alt="">

                    <p>
                        Lorem ipsum dolor sit amet, insolens scriptorem ut his, animal periculis id has, ad error
                        aliquam molestie per. Vel iudico iracundia ei. Mel quando bonorum eu, wisi probo et has. Pri ad
                        facete aliquam, ea his suscipit reprimique. Ius in erroribus sententiae consequuntur, eum ut
                        suavitate voluptatum referrentur. Ut euripidis percipitur est, mel labitur officiis in, iudico
                        doming propriae et eum.
                    </p>
                    <p>
                        Duo bonorum dolorum ocurreret et, suas legimus ad pro, cum at vide tempor pertinacia. Senserit
                        imperdiet sit ex, id agam ignota mediocritatem vis.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection