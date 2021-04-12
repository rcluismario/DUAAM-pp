@extends('layout.layout')
@section('title')
Donaciones
@endsection
@section('custom-css')
<style>
    /*
        !important was added to elements where boostrap was not correclty used,
        avoid using !important unless is your last resort
    */
    .container-center {
        padding-top: 0px;
        padding-bottom: 130px;
        text-align: center;
    }

    .img-300 {
        width: auto;
        height: 300px;
    }

    .img {
        width: auto;
        height: auto;
    }

    .img-2 {
        width: auto;
        height: 40%;
        align: center;
    }

    .title {
        width: 100%;
        margin-top: 0px;
        margin-bottom: 0px;
        font-family: Poppins, sans-serif;
        font-size: 42px;
        line-height: 60px;
        text-align: center;
    }

    .secondary-text {
        width: 100%;
        margin-top: 0px;
        margin-bottom: 5px;
        margin-left: 0px;
        padding-right: 100px;
        padding-left: 70px;
        font-family: Poppins, sans-serif;
        line-height: 32px;
        font-weight: 600;
        text-align: center;
    }

    .secondary-text-2 {
        width: 100%;
        margin-top: 0px;
        margin-bottom: 20px;
        margin-left: 0px;
        padding-right: 100px;
        padding-left: 70px;
        font-family: Poppins, sans-serif;
        line-height: 32px;
        font-weight: 800;
        text-align: center;
    }

    .secondary-text-blue {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 0px;
        padding-right: 100px;
        padding-left: 70px;
        font-family: Poppins, sans-serif;
        line-height: 32px;
        font-weight: 600;
        text-align: center;
        color: blue;
    }

    .secondary-text-gray {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 0px;
        padding-right: 100px;
        padding-left: 70px;
        font-family: Poppins, sans-serif;
        line-height: 32px;
        font-weight: 600;
        text-align: center;
        color: gray;
    }

    .card {
        width: 290px;
        height: 391px;
        margin: 0px 0px 20px;
        margin-right: 0px;

        padding-top: 260px;
        padding-bottom: 0px;
        padding-left: 30px;
        border-radius: 10px;
        background-position: 50% 50%;
        background-size: cover;
        box-shadow: 8px 8px 20px 2px rgba(166, 181, 208, 0.75);
        text-align: left;
        text-decoration: none;
        cursor: pointer;
    }

    .bar {
        height: 100px;
        background-color: #a0c539;
        margin-bottom: 0;
        margin:0;
    }

    .donate-slide-button{
        margin-top: 4rem !important;
    }

    .donation-single-container p{
        font-size: 1.2rem;
    }

    .single-donation-single-info{
        height: 18rem;
    }

    .add-donation-type-buttons .donate-slide-button{
        margin-top: 1rem !important;
        display:none;
        padding-top: .8rem !important;
        padding-bottom: .8rem !important;
        width: 50%;
    }

    .add-donation-type-buttons{
        display:flex;
        flex-direction: row;
        width:100%;
    }

    .donate-custom-h{
        line-height: 3rem;
    }

    .donate-custom-subhg{
        margin-top: .5rem;
        margin-bottom: .5rem;
    }

    @media screen and (max-width: 767px) {
        /* Mobile style for donation page */
        .donation-single-container {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .secondary-text{
            padding-left:5%;
            padding-right:5%;
        }

        .pr-5, .px-5{
            padding-left:8% !important;
            padding-right:8% !important;
        }

        .text-block-68-copy{
            display:block;
        }

        ._45{
            width:100%;
        }

        .donate-slide-button{
            margin-bottom:0 !important;
        }

        .donate-custom-h{
            width: 100%;
            font-size: 2rem;
        }
        
        .donate-custom-subh{
            width: 100%;
            font-size: 2rem;
        }

        .donate-custom-subhg{
            width: 100%;
            font-size: 2rem;
        }

        .donate-custom-subt{
            width: 100%;
            line-height: 1.8rem;
        }

        .add-donation-type-buttons{
            flex-direction: column;
        }

        .add-donation-type-buttons .donate-slide-button{
            margin: 0 !important;
            margin-bottom: 1rem !important;
            width: 100%;
        }

        .donation-form-container{
            width: 100%;
        }

    }
</style>
@endsection


@section('content')
<section class="container">
    <div class="row">
        <div class="col-lg-12 container-center">
            <img src="{{ asset('web_assets/images/capa_3.png') }}" loading="lazy" alt="" class="img-300">
            <h1 class="title">¡Estás decidiendo el mundo que quieres tener!</h1>
            <h1 class="title">Ayúdanos a plantar más árboles</h1>
            <a id="donate_button" class="nav boxshadow w-inline-block">
                <div class="text-block-68-copy1214 noshadow">Donar ahora</div><img
                    src="{{ asset('web_assets/images/Icon-simple-gumtree.png') }}" loading="lazy" alt="" class="image">
            </a>
        </div>
    </div>
</section>
<section class="container donation-container" id="choose_donation"
    style="display: none; width:100%; padding-top: 5rem; padding-bottom:5rem;">
    <h2 class="secondary-text">¡El tiempo se nos acaba!</h2>
    <h4 class="secondary-text">Juntos podemos combatir el cambio climático plantando muchos árboles</h4>
    <h4 class="secondary-text">Ayúdanos a cumplir nuestra meta de plantar</h4>
    <h3 class="secondary-text">100 mil árboles para el 2030</h3>
    <br>
    <div class="row" style="background-color: none; width:95%; margin:auto; margin-top:1rem;">
        <div class="col-lg-4 p-4 donation-single-container">
            <div class="slides-dona1 pt-3 pb-5 pr-5 pl-5">
                <div style="margin:auto; width:fit-content;">
                    <img src="{{ asset('web_assets/images/Recurso 3_2x.png') }}" loading="lazy" alt="" class="img"
                        style="height: 15rem;">
                </div>
                <h2 class="donate-slide-h">Planta un <br/> árbol</h2>
                <h1 class="donate-slide-subh mt-0">$35.00 MXN </h1>
                <h5 class="donate-slide-small">por cada árbol</h5>
                <br>
                <div class="single-donation-single-info">
                    <p><strong>Se parte del cambio</strong></p>
                    <p>15 mil millones de árboles se pierden en el mundo cada año.</p>
                    <p>Puedes ayudarnos a reforestar el planeta, plantando <strong>uno o más árboles</strong></p>
                    <p>Plantemos un árbol por ti y recibirás un Certificado de Donación</p>
                </div> 
                <a onclick="openDonForm(1)"
                    class="donate-slide-button nav-copy1212 boxshadow noshadow w-inline-block">
                    <div class="text-block-68-copy" style="font-size: 1.1rem;">Donar árbol</div><img
                        src="{{ asset('web_assets/images/Icon-simple-gumtree.png') }}" loading="lazy" alt=""
                        class="image">
                </a>
            </div>
        </div>
        <div class="col-lg-4 p-4 donation-single-container">
            <div class="slides-dona1 pt-3 pb-5 pr-5 pl-5">
                <div style="margin:auto; width:fit-content;">
                    <img src="{{ asset('web_assets/images/Recurso 2_2x.png') }}" loading="lazy" alt="" class="img"
                        style="height: 15rem;">
                </div>
                <h2 class="donate-slide-h">Planta un árbol con nombre y foto</h2>
                <h1 class="donate-slide-subh mt-0">$65.00 MXN</h1>
                <h5 class="donate-slide-small">por cada árbol</h5>
                <br>
                <div class="single-donation-single-info">
                    <p><strong>Tú eres parte del cambio</strong></p>
                    <p>50% de todas las especies terrestres podrían perderse este siglo</p>
                    <p>Puedes ayudarnos a reforestar el planeta, plantando <strong>uno o más árboles</strong></p>
                    <p>Plantaremos un árbol por ti, podrás ponerle nombre y luego de unos días podrás recibir una foto de
                        ese
                        árbol en tu correo electrónico</p>
                </div>
                <a onclick="openDonForm(2)"
                    class="donate-slide-button nav-copy-copy-copy boxshadow noshadow w-inline-block">
                    <div class="text-block-68-copy" style="font-size: 1.1rem;">Árbol con Foto</div><img
                        src="{{ asset('web_assets/images/Icon-awesome-camera.png') }}" loading="lazy" alt=""
                        class="image-copy">
                </a>
            </div>
        </div>
        <div class="col-lg-4 p-4 donation-single-container">
            <div class="slides-dona1 pt-3 pb-5 pr-5 pl-5">
                <div style="margin:auto; width:fit-content;">
                    <img src="{{ asset('web_assets/images/Recurso 4_2x.png') }}" loading="lazy" alt="" class="img"
                        style="height: 15rem;">
                </div>
                <h2 class="donate-slide-h">Donación a la organización</h2>
                <h1 class="donate-slide-subh mt-0">$_ _ MXN </h1>
                <h5 class="donate-slide-small">aportación voluntaria</h5>
                <br>
                <div class="single-donation-single-info">
                    <p><strong>Contamos contigo</strong></p>
                    <p>500 000 mil hectáreas de bosques y selvas se pierden en México cada año</p>
                    <p><strong>Dona un Árbol al Mundo</strong> es una campaña de restauración ambiental y empoderamiento
                        social
                        que busca recuperar
                        nuestros bosques y ayudar a comunidades con rezago social.</p>
                </div>
                <a onclick="openDonForm(3)"
                    class="donate-slide-button nav-copy-copy-copy-copy boxshadow noshadow w-inline-block">
                    <div class="text-block-68-copy" style="font-size: 1.1rem;">Donar a Organización</div><img
                        src="{{ asset('web_assets/images/Icon-awesome-heart.png') }}" loading="lazy" alt=""
                        class="image-copy">
                </a>
            </div>
        </div>
    </div>
</section>
<hr class="bar">
<section class="container" style="display: none" id="donation_section">
    <div class="row">
        <div class="col-lg-12 pt-5">
            <div style="display: none" id="tree_don_text">
                <div style="margin:auto; width:fit-content;">
                    <img src="{{ asset('web_assets/images/Recurso-1.png') }}" loading="lazy" alt="" class="img-2">
                </div>
                <h2 class="donate-custom-h">¡Gracias! Estas ayudando a salvar el planeta</h2>
                <br>
                <h3 class="donate-custom-subh">Plantar un árbol tiene un costo de</h3>
                <br>
                <h3 class="donate-custom-subhg">$35 MXN</h3>
                <br>
                <p class="donate-custom-subt">Plantaremos un árbol por ti y recibirás un Certificado de Donación</p>
                <br>
                <p class="donate-custom-subt">¿Cuántos árboles quieres regalarle al mundo? (+$30 MXN por cada árbol)</p>
            </div>
            <div style="display: none" id="tree_don_photo_text">
                <div class="centralized" style="width:fit-content !important;">
                    <img src="{{ asset('web_assets/images/Recurso-1.png') }}" alt="">
                </div>
                <h2 class="donate-custom-h">¡Gracias! Estas ayudando a salvar el planeta</h2>
                <br>
                <h3 class="donate-custom-subh">Plantar un árbol con foto tiene un costo de</h3>
                <br>
                <h3 class="donate-custom-subhg">$65 MXN</h3>
                <br>
                <p class="donate-custom-subt">Plantaremos un árbol por ti y recibirás un Certificado de Donación</p>
                <br>
                <p class="donate-custom-subt">¿Cuántos árboles quieres regalarle al mundo? (+$65 MXN por cada árbol)</p>
            </div>
            <div style="display: none" id="org_don_text">
                <div style="margin:auto; width:fit-content;">
                    <img src="{{ asset('web_assets/images/Recurso 4_2x.png') }}" alt="">
                </div>
                <h1 class="donate-custom-h">¡Gracias! Estas ayudando a salvar el planeta</h1>
                <br>
                <h3 class="donate-custom-subh">Donación a la organización, es voluntario</h3>
                <br>
                <h3 class="donate-custom-subhg">$_ _MXN</h3>
                </br>
                </br>
                <p class="donate-custom-subt">Ingresa tu donación a la organización (cantidad voluntaria)</p>
            </div>
            <div class="container">
                <div class="centralized donation-form-container">
                    <form action="{{ route('admin.donation.store') }}" method="POST" class="mt-5 mb-5" id="paymentForm">
                        @csrf
                        <div class="form-row mb-2">

                            <div class="form-group col-md-12" id="num_trees_photo_input">
                                <h3>Cantidad de árbolitos con foto</h3>
                                <hr>
                                <input class="form-control donate-input" type="number" name="trees_num_photo" id="trees_num_photo"
                                    value=1 style="max-width:100%">
                            </div>


                            <div class="form-group col-md-12" id="num_trees_input">
                                <h3>Cantidad de árbolitos</h3>
                                <hr>
                                <input class="form-control donate-input" type="number" name="trees_num" id="trees_num"
                                    value=1 style="max-width:100%">
                            </div>

                            <div class="add-donation-type-buttons">

                                <a onclick="addNewDonationType(1)"
                                    class="donate-slide-button nav-copy1212 boxshadow noshadow w-inline-block" id="first-donation-button">
                                    <div class="text-block-68-copy" style="font-size: 1.1rem;">Agregar árbol</div><img
                                        src="{{ asset('web_assets/images/Icon-simple-gumtree.png') }}" loading="lazy" alt=""
                                        class="image">
                                </a>

                                <a onclick="addNewDonationType(2)"
                                    class="donate-slide-button nav-copy-copy-copy boxshadow noshadow w-inline-block" id="second-donation-button">
                                    <div class="text-block-68-copy" style="font-size: 1.1rem;">Agregar árbol con Foto</div><img
                                        src="{{ asset('web_assets/images/Icon-awesome-camera.png') }}" loading="lazy" alt=""
                                        class="image-copy">
                                </a>

                                <a onclick="addNewDonationType(3)"
                                    class="donate-slide-button nav-copy-copy-copy-copy boxshadow noshadow w-inline-block" id="third-donation-button">
                                    <div class="text-block-68-copy" style="font-size: 1.1rem;">Donar a Organización</div><img
                                        src="{{ asset('web_assets/images/Icon-awesome-heart.png') }}" loading="lazy" alt=""
                                        class="image-copy">
                                </a>
                                
                            </div>
                          
                          
                            <div class="form-group col-md-12" id="org_don_total_input">
                                <h3>Cantidad de la donación</h3>
                                <hr>
                                <input class="form-control donate-input" type="number" name="donation_total"
                                    id="donation_total" value=50>
                            </div>
                        </div>

                        <div id="name_trees_input">
                            <h3>Nombres de árbolitos con foto</h3>
                            <hr>
                            <div class="form-row mb-2" id="trees-form">
                                <div class="form-group col-md-3" style="padding-left: 2%;">
                                    <label>Árbol 1</label>
                                    <input type="text" name="trees[]" class="form-control donate-input">
                                </div>
                            </div>
                        </div>

                        <h3>Datos Adicionales</h3>
                        <hr>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label>Nombre *</label>
                                <input type="text" class="form-control donate-input" name="name" required
                                    id="name_input">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Correo electrónico *</label>
                                <input type="email" class="form-control donate-input" name="email" required
                                    id="email_input">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label>País *</label>
                                @include('components.country-select')
                            </div>
                        </div>

                        <h5>Selecciona forma de pago</h5>
                        <hr>
                        <div class="form-group" id="toggler" style="margin-bottom: 100px">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                @if ($accept_paypal)
                                <label for="pp" class="btn btn-outline-secondary rounded mt-0" style="height:fit-content;" data-target="#paypalCollapse"
                                    data-toggle="collapse">
                                    <input id="pp" style="display:none;" type="radio" name="payment_platform"  value="paypal"  required>
                                    
                                    <img onclick="toggleChecked('pp');" src="{{ asset('platforms/paypal.png') }}">
                                    
                                </label>
                                @endif
                                @if ($accept_stripe)
                                <label for="str"class="btn btn-outline-secondary rounded mt-0 px-2 ml-3" data-target="#stripeCollapse"
                                    data-toggle="collapse" style="height:fit-content;">
                                    <input id="str" type="radio" name="payment_platform" value="stripe" onclick="toggleChecked('str');" required>
                                    <div class="paypal-button-label-container" style="height: 100%">
                                        <img src="{{ asset('platforms/stripe.png') }}">
                                    </div>
                                </label>
                                @endif
                            </div>
                            @if ($accept_paypal)
                            <div id="paypalCollapse" class="collapse" data-parent="#toggler">
                                @includeIf('components.paypal-collapse')
                            </div>
                            @endif
                            @if ($accept_stripe)
                            <div id="stripeCollapse" class="collapse col-lg-6 col-md-6 col-sm-12"
                                data-parent="#toggler">
                                @includeIf('components.stripe-collapse')
                            </div>
                            @endif
                        </div>
                        <input type="hidden" name="donation_type" id="donation_type">
                        <h3>Árbolitos: $<span id="total_price_tree">0</span> MXN</h3>
                        <h3>Árbolitos con foto: $<span id="total_price_tree_photo">0</span> MXN</h3>
                        <h3>Donación a organización: $<span id="total_price_organization">0</span> MXN</h3>
                        <h3>Total: $<span id="total_price">0</span> MXN</h3>
                        <br>
                        <div style="width:80%;">
                            <button type="submit" class="btn btn-primary donate-input" id="payButton"
                                style="width:100%; height:3.5rem; font-size:1.5rem; background-color:#a0c539; border-none; color:white;">Proceder
                                al pago</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection


@section('custom-js')
<script>
    var s_tree_price = 35;
    var p_tree_price = 65;
    var d_type = null;
    var openedTree = false;
    var openedPhotoTree = false;
    var openedDonation = false;

    var chooseDonationDiv = document.querySelector("#choose_donation")
    chooseDonationDiv.style.display = "block";

    setTimeout(()=>{    
        chooseDonationDiv.scrollIntoView(true)
    }, 1000);

    //Scroll to donation section on click of donate button
    document.querySelector("#donate_button").addEventListener("click", scrollToSelection);
   
    function toggleChecked(id){
        if(id === "pp"){
            
            var check = document.getElementById("pp").checked;
            console.log(!check);
            document.getElementById("pp").checked = !check;
            document.getElementById("str").checked = false;
        }else{
            var check = document.getElementById("str").checked;
            document.getElementById("str").checked = !check;
            document.getElementById("pp").checked = false;
        }

    }
    
    function openDonForm(id) {
        var donation_section = document.querySelector("#donation_section");
        donation_section.style.display = "block";
        donation_section.scrollIntoView({ behavior: "smooth" })
        switch (id) {
            case 1:
                openedTree = true;
                openedPhotoTree = false;
                openedDonation = false;

                document.querySelector("#tree_don_text").style.display = "block";
                document.querySelector("#tree_don_photo_text").style.display = "none";
                document.querySelector("#org_don_text").style.display = "none";

                //New donation types buttons, hide and show buttons depending on option
                document.querySelector("#second-donation-button").style.marginRight = "4%";

                document.querySelector("#first-donation-button").style.display = "none";
                document.querySelector("#second-donation-button").style.display = "none";
                document.querySelector("#third-donation-button").style.display = "none";

                document.querySelector("#second-donation-button").style.display = "block";
                document.querySelector("#third-donation-button").style.display = "block";
                //New donation types buttons
              
                document.querySelector("#num_trees_input").style.display = "block";
                document.querySelector("#num_trees_photo_input").style.display = "none";
                document.querySelector("#org_don_total_input").style.display = "none";
                document.querySelector("#name_trees_input").style.display = "none";

                d_type = "simple_don"
                document.querySelector("#donation_type").value = "simple_don";
                break;
            case 2:
                openedTree = false;
                openedPhotoTree = true;
                openedDonation = false;

                document.querySelector("#tree_don_text").style.display = "none";
                document.querySelector("#tree_don_photo_text").style.display = "block";
                document.querySelector("#org_don_text").style.display = "none";
                
                //New donation types buttons, hide and show buttons depending on option
                document.querySelector("#first-donation-button").style.marginRight = "4%";

                document.querySelector("#first-donation-button").style.display = "none";
                document.querySelector("#second-donation-button").style.display = "none";
                document.querySelector("#third-donation-button").style.display = "none";

                document.querySelector("#first-donation-button").style.display = "block";
                document.querySelector("#third-donation-button").style.display = "block";
                //New donation types buttons
                
                document.querySelector("#num_trees_input").style.display = "none";
                document.querySelector("#num_trees_photo_input").style.display = "block";
                document.querySelector("#org_don_total_input").style.display = "none";
                document.querySelector("#name_trees_input").style.display = "block";

                d_type = "photo_don"
                document.querySelector("#donation_type").value = "photo_don";
                break;
            case 3:
                openedTree = false;
                openedPhotoTree = false;
                openedDonation = true;

                document.querySelector("#tree_don_text").style.display = "none";
                document.querySelector("#tree_don_photo_text").style.display = "none";
                document.querySelector("#org_don_text").style.display = "block";

                //New donation types buttons, hide and show buttons depending on option
                document.querySelector("#third-donation-button").style.marginRight = "4%";

                document.querySelector("#first-donation-button").style.display = "none";
                document.querySelector("#second-donation-button").style.display = "none";
                document.querySelector("#third-donation-button").style.display = "none";

                document.querySelector("#first-donation-button").style.display = "block";
                document.querySelector("#second-donation-button").style.display = "block";
                //New donation types buttons
                
                document.querySelector("#num_trees_input").style.display = "none";
                document.querySelector("#num_trees_photo_input").style.display = "none";
                document.querySelector("#org_don_total_input").style.display = "block";
                document.querySelector("#name_trees_input").style.display = "none";

                d_type = "org_don"
                document.querySelector("#donation_type").value = "org_don";
                break;
            default:
                break;
        }
        updatePrice()
    }

    /**
    * @desc Add new donation type to the form
    * @param {number} type - the new type to add to the view
    */
    function addNewDonationType(type){
        switch (type) {
            case 1:
                openedTree = true;
                document.querySelector("#first-donation-button").style.display = "none";
                document.querySelector("#num_trees_input").style.display = "block";

                //Show input depending on tree type
                document.querySelector("#num_trees_input").style.display = "block";
                break;
            case 2:
                openedPhotoTree = true;
                document.querySelector("#second-donation-button").style.display = "none";
                document.querySelector("#name_trees_input").style.display = "block";

                //Show input depending on tree type
                document.querySelector("#num_trees_photo_input").style.display = "block";
                break;
            case 3:
                openedDonation = true;
                document.querySelector("#third-donation-button").style.display = "none";
                document.querySelector("#org_don_total_input").style.display = "block";
                break;
            default:
                break;
        }
        updatePrice()
    }

    /**
    * @desc Update price according to the current donation types active and the values of these donations
    */
    function updatePrice() {
        var price_el = document.querySelector("#total_price")
        var trees_num = document.querySelector("#trees_num")
        var trees_num_photo = document.querySelector("#trees_num_photo")
        var org_don_in = document.querySelector("#donation_total")

        //H3 with all the subtotal for each category
        var trees_total = document.querySelector("#total_price_tree")
        var trees_total_photo = document.querySelector("#total_price_tree_photo")
        var trees_total_organization = document.querySelector("#total_price_organization")


        /** 
        * Check if donation type is valid, if its valid 
        * it adds the new value to the total 
        */
        price_el.innerText = 0;
        trees_total.innerText.innerText  = 0;
        trees_total_photo.innerText  = 0;
        trees_total_organization.innerText  = 0;

        if(openedTree){

            if(trees_num.value == 0){
                trees_num.value = 1
            }

            trees_total.innerHTML = trees_num.value * 35;
            price_el.innerHTML =  parseInt(price_el.innerText) + (trees_num.value * 35);
        }

        if(openedPhotoTree){

            if(trees_num_photo.value == 0){
                trees_num_photo.value = 1
            }

            trees_total_photo.innerHTML = trees_num_photo.value * 65;
            price_el.innerHTML = parseInt(price_el.innerText) + (trees_num_photo.value * 65);
        }

        if(openedDonation){

            if(org_don_in.value == 0){
                org_don_in.value = 1
            }

            trees_total_organization.innerHTML = parseInt(org_don_in.value);
            price_el.innerHTML = parseInt(price_el.innerText) +  parseInt(org_don_in.value);
        } 
              
    }

    //Change total when inputs change
    document.querySelector("#trees_num").addEventListener("change", updatePrice);
    document.querySelector("#donation_total").addEventListener("change", updatePrice);
    document.getElementById("trees_num_photo").addEventListener("change", updateTreesInputs);


    /**
    * @desc Scroll to donation section
    */
    function scrollToSelection() {
        var el = document.querySelector("#choose_donation")
        el.style.display = "block";
        el.scrollIntoView({ behavior: "smooth" })
    }

    /**
    * @desc Update price according to number of trees, add the same number of trees with photo to the array
    */
    function updateTreesInputs() {
        var n_trees = document.getElementById("trees_num_photo").value;
        var new_html = '';
        for (let i = 0; i < n_trees; i++) {
            new_html = new_html + '<div class="form-group col-md-3" style="padding-left: 2%;"><label>Árbol ' + (i+1) + '</label><input type="text" name="trees[]" class="form-control donate-input"></div>';
        }
        document.getElementById("trees-form").innerHTML = new_html;
        updatePrice()
    }

</script>

@stack('scripts')

@endsection