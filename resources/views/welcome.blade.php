@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <section>
    <div class="container-fluid mt-2">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="uploads/images/welcome3.jpg" style="max-height: 500px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="uploads/images/welcome4.jpg" style="max-height: 500px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="uploads/images/acceuil3.jpg" style="max-height: 500px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        {{-- end carousel --}}

    </div>
  </section>
   <div class="col-md-10 mx-auto my-3">
    <div class="row">
        <div class="col-md-3 mt-2 mt-2">
            <div class="col-md-11 mx-auto border shadow px-4 py-2 head">
                <p  class="fs-4" style="font-weight: bold;">
                    Paiement en ligne
                </P>
                <p  class="fs-5">
                    Nous disposons de services de paiement en ligne comme PayPal, Stripe, Paystack, Skrill, Flutterwave, Mollie, Payeer, RazorPay, etc.
                </p>
            </div>
        </div>
        <div class="col-md-3 mt-2 ">
            <div class="col-md-11 mx-auto border shadow px-4 py-2 head">
                <p  class="fs-4" style="font-weight: bold;">
                    Prendre un prêt
                </P>
           <p class="fs-5">
                Nous avons plusieurs projets pour demander un prêt. Vous pouvez postuler à nos plans de prêt en soumettant certaines de vos informations valides.
             </p>
            </div>
        </div>
        <div class="col-md-3 mt-2 ">
            <div class="col-md-11 mx-auto border shadow px-4 py-2 head">
                <p  class="fs-4" style="font-weight: bold;">
                    Systèmes de dépôt
                </P>
           <p class="fs-5">
                Nous avons deux systèmes de dépôt pour vous, l'un est le système de dépôt de pension et l'autre est le reçu de dépôt fixe.
            </p>
            </div>
        </div>
        <div class="col-md-3 mt-2 ">
            <div class="col-md-11 mx-auto border shadow px-4 py-2 head">
                <p  class="fs-4" style="font-weight: bold;">
                    Transférer d'argent
                </P>
            <p class="fs-5">
                Vous pouvez transférer vos fonds au sein de la Livo-Bank ou d'autres banques que nous soutenons en ajoutant vos bénéficiaires
            </p>
            </div>
        </div>
      </div>
   </div>
   <div class="row" style="background-color: rgb(250, 130, 130);">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-6 pt-5">
                    <img src="uploads/images/acceuil.jpg"  class="d-block w-100" alt="...">
                </div>
                <div class="col-6">
                    <div class="row my-3 ">
                        <div class="col-3  mt-3 border" >   </div>
                        <div class="col-6 text-center  mx-auto ">À propos de nous</div>
                        <div class="col-3  mt-3 border"></div>
                    </div>
                    <p class="fs-4" style="font-weight: bold;">
                        Nous nous soucions de votre argent et de votre sécurité.
                    </p>
                    <div class="row">
                        <div class="col-md-3 mt-2 text-center">
                            <h1 class="py-2 px-2" ><i class="bi bi-credit-card-2-front text-light px-3" style="background-color: red;border-radius:10px;"></i></h1>
                        </div>
                        <div class="col">
                            <div class="fs-4" style="font-weight: bold;">
                                Notre mission
                            </div>
                            <div >
                                Nous nous concentrons sur la construction et le maintien de relations générationnelles à long terme avec nos clients
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3 mt-2 text-center">
                            <h1 class="py-2 px-2" ><i class="bi bi-eye-fill text-light px-3" style="background-color: red;border-radius:10px;"></i></h1>
                        </div>
                        <div class="col">
                            <div class="fs-4" style="font-weight: bold;">
                                Notre vision
                            </div>
                            <div >
                                Livo-Bank servira partout dans le monde et deviendra la banque la plus populaire de cet univers.
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3 mt-2 text-center">
                            <h1 class="py-2 px-2" ><i class="bi bi-hand-thumbs-up text-light px-3" style="background-color: red;border-radius:10px;"></i></h1>
                        </div>
                        <div class="col">
                            <div class="fs-4" style="font-weight: bold;">
                                Notre objectif
                            </div>
                            <div >
                                Livo-Bank servira ses clients du monde entier et deviendra la banque populaire dans cet univers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <div class="col-8 my-3 mx-auto">
       <div class="row">
            <div class="col-3 bg-danger border my-3 "></div>
            <div class="col-9 fs-3 fw-bold">C'est facile de nous rejoindre</div>
       </div>
   </div>
   <div class="col-11 mx-auto">
    <div class="row ">
        <div class="col-md-2 text-center justify-content-center ">
            <div class="a mx-auto">
            1
            </div>
        </div>
        <div class="col-1 pt-4">
            <i class="bi bi-arrow-right fs-1"></i>
        </div>
        <div class="col-md-2 text-center justify-content-center ">
            <div class="a mx-auto" >
                2
            </div>
        </div>
        <div class="col-1 pt-4">
            <i class="bi bi-arrow-right fs-1"></i>
        </div>
        <div class="col-md-2 text-center justify-content-center ">
            <div class="a mx-auto">
                3
            </div>
        </div>
        <div class="col-1 pt-4">
            <i class="bi bi-arrow-right fs-1"></i>
        </div>
        <div class="col-md-2 text-center justify-content-center ">
            <div class="a mx-auto">
                4
            </div>
        </div>

    </div>
   </div>
   <div class="col-md-11 mx-auto mt-1 mb-4">
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="fs-4 fw-bold">
                Ouvrir un compte
            </div>
            <div>
                Pour être titulaire d'un compte, vous devez d'abord ouvrir un compte
            </div>
        </div>
        <div class="col-3">
            <div class="fs-4 fw-bold">
                Verification
            </div>
            <div>
                Après votre inscription vous devez vérifiez votre email et numéro de téléphone
            </div>
        </div>
        <div class="col-3">
            <div class="fs-4 fw-bold">
                Dépôser
            </div>
            <div>
                Dépôser des fonds avant de postuler sur des plans FDR ou DPS
            </div>
        </div>
        <div class="col-3">
            <div class="fs-4 fw-bold">
                Obtenir services
            </div>
            <div>
                Vous pouvez désormais l'un de nos services en tant que titulaire de compte enregistré
            </div>
        </div>
   </div>
   </div>
   <div class="col-md-10 mx-auto my-3">
        <div class="row shadow px-4 py-4  text-center     ">
            <div class="col-md-3 text-center justify-centent-center">
                <div class="row mx-auto text-center">
                    <div class="col-md-3">
                        <i class="bi bi-person fs-1 text-danger"></i>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-bold">24 M</div>
                        compte
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row mx-auto text-center">
                    <div class="col-md-3">
                        <i class="bi bi-database fs-1 text-danger"></i>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-bold">3B</div>
                        Transactions total
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row mx-auto text-center">
                    <div class="col-md-3">
                        <i class="bi bi-share fs-1 text-danger"></i>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-bold">120</div>
                        Branches Total
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row mx-auto text-center">
                    <div class="col-md-3">
                        <i class="bi bi-globe-europe-africa fs-1 text-danger"></i>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-bold">40</div>
                        Pays présent
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

<style>
    .head:hover{
        color: white;
        background-color: red;
        cursor: pointer;
    }
    .a{
            color: red;
            border: solid black;
            border-radius: 50px;
            height: 100px;
            width: 100px;
            font-size: 60px;
        }
</style>
@endsection
