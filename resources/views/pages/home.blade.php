@extends('template.app')

@section('content')

<style>
    h2{
        color: black
    }

    .aboutus{
        display: flex;
        justify-content: center;
    }
    .kolor{
        display: flex;
        align-items: center;
    }
    .kolor img{
        height: 60vh;
        box-shadow: 5px 5px #141619
    }
    .kolor2{
        width: 50%;
        margin-left: 123px;
    }
    .sect-contact1 {
	display: flex;
	justify-content: center;
    }
    .wrap-info1 {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: baseline;
        border: solid 3px #141619;
        box-shadow: 8px 7px #141619;
        background-color: #ffc107;
        margin-top: 25px;
    }
    .cont-info1 {
        display: flex;
        justify-content: center;
        margin: 30px;
    }
    .info-text1 {
        font-size: 15px;
        text-decoration: none;
        margin-top: 12px;
        transition: transform .2s;
    }
    .info-text1:hover{
	transform: scale(1.2);
    }
    .img-footer1 {
        width: 40px;
        margin-right: 9px;
    }
    a.githublink {
        text-decoration: none;
        color: black;
    }

</style>


<section class="container-fluid">
    <div class="row justify-content-center align-items-center p-0" style="height: 80vh; background-image: url('{{ asset('img/backgroundvespa.jpg') }}'); background-size:34%">
        <div class="col-xl-4 d-flex flex-column">
            <h1 class="text-center" style="font-weight: bold; color:orange;">
                BOYZSCOOT
            </h1>
            <button onclick="document.location.href='/show_product'" class="btn btn-light">Show Product</button>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <h1 class="text-center"style="margin-top: 40px" >ABOUT US</h1>

        <div class="col-10 col-xl-10 p-4 mt-3" style="border: 5px solid #ffc107; box-shadow: 4px 3px 18px #141619;">
            <div class="aboutus">
                    <div class="kolor">
                        <img src="https://images-ext-1.discordapp.net/external/8E99vbucUeSO4rxFO4pMJzuvhrE9cwNlcAOsiq3fhRA/https/ci3.googleusercontent.com/mail-img-att/AFCqZUS59-VZ1poWqNODRI6gDgxpbEOZf5ACEMr-_deLE4O1WP-9MptB1Vx-Dqb6Vq0g6SMzlfcKfBubMcgN5RmPLO3vkwORrsd_fzdWjFWtNApRvqOhD3vQh8vkSzvMWr9DVS1oGM5iWcpfLJvNAVhrSD74I-so7dq9qukhRxvDsUcpm-pY8aVrjQ7nuA_inm50QQasyvmjoehq2SwSF8l2Am66I5qM6kXswiVeE9Cnhd6sks588vgMBs44iP2ZFnehH5eefJJcjNPXoyjNuFnS2iKIMb5oaELmThdX8L5FsLv4Sgy8lugDW7KXpIff8C236_kjeNti8x4vVAobvrB0DwDijm1vIebXmzWirpKm_qDeaEK4lfAUKxBywGXFXQGNRbKJzbftxW5Zm1rwQkNee9yy-ilGJL324cCi7RVsM_3iLduzq-KIv1Zco16R1l6FYUutrJ7xn-mAFbTfihg7COJ7HJwVno5E77gLBHpqYi1wP_D6o3OiMAV1e3KHvepvcthHTxGtNrvv26vBnwdVz8CMnPF3lXTeUGautmMT6YD-XrqO_Ewxqqlbe1MClBc1JUV5n6-M47Saof_pE0rD8RNB9CaxFqgnCNJ95lJf2WyJnrVg71FaMiF_dmHO3s3BxcYvwLDjndISL84xiuCkK6bSfMdjYGWgHKq8VDuWqUtbOCbu9BQhnRPPxdvg0fbP1wKxw5x8jJTGYUcUxa22mnfct9rhe650oTuLLVBTrqFoPBnJKOuvHslXXloJnz6eO2GZeBE7stbHhLBMJxboHnw7U85b0FptgnFSCYkBBYb4s0tywfjNptdj2EV6Lc9k5m-sotR6ErhvQSURPg5TkhdS2QYT1_jn0OWhmvWIIAVxQxvqLfFqrXvbM6WX7URmdQ3--0JsrFL-Jc6_0II-MM-xNB4W_sCrbGvMHtBnVrKjQWr9DrCvT_t-2sDG_FDt%3Ds0-l75-ft?width=545&height=655" alt="">
                    <div class="kolor2">
                        <h2 class="text-center" style="margin-bottom: 50px">Story of Boyzscoot</h2>
                        <p class="text-center mb-0" style="box-shadow: 5px 5px #141619">
                            Boyzscoot is a company engaged in buying and selling Vespa matic which has been established since 2018. In about 4 years Boyzscoot has sold more than 100 units of Vespa matic, be it sprint, primavera, lx, s and various other types. So there's no need to hesitate to buy a Vespa at Boyzscoot because we have quite a long experience in this field and of course the existing Vespa has gone through quality control from our team.
                        </p>
                    </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <h1 class="text-center"style="margin-top: 50px" >CONTACT US</h1>

        <div class="sect-contact1">

            <div class="wrap-info1">
                <div class="cont-info1">
                    <img src="img/email1.png" alt="" class="img-footer1">
                    <h2 class="info-text1">harsyaharahap@gmail.com</h2>
                </div>
                <div class="cont-info1">
                    <img src="img/phone1.png" alt="" class="img-footer1">
					<h2 class="info-text1"><a href="https://wa.me/6282146514071" target="_blank" class="githublink">085691050768</a></h2>
                </div>
                <div class="cont-info1">
                    <img src="img/instagram1.png" alt="" class="img-footer1">
                    <h2 class="info-text1"><a href="https://www.instagram.com/hanifraa" target="_blank" class="githublink">@boyzscoot</a></h2>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

