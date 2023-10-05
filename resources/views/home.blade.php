@extends('layouts.app')
@section('content')
    <div class="col-md-10 mx-auto">
        <div class="row  fs-4">
            <p class="text-center mt-3">
                Compte crée avec success veuillez passer a l'une de nos agence pour completer votre inscription afin davoir un accès complet
            </p>

            <div class="row my-5">
                <div class="col-3  top mx-auto mt-3" >   </div>
                <div class="col-4 ">C'est facile , Securiser et rapide</div>
                <div class="col-3 top mt-3"></div>
            </div>

            <div class="row ">
                <div class="col-md-3 text-center justify-content-center ">
                    <div class="a mx-auto">
                       1
                    </div>
                    <div class="">
                        Dépôt de dossier
                    </div>
                </div>
                <div class="col-md-3 text-center justify-content-center ">
                    <div class="a mx-auto" >
                        2
                    </div>
                    <div class="">
                        Verification
                    </div>
                </div>
                <div class="col-md-3 text-center justify-content-center ">
                    <div class="a mx-auto">
                        3
                    </div>
                    <div class="">
                        Dépôt de fonds
                    </div>
                </div>
                <div class="col-md-3 text-center justify-content-center ">
                    <div class="a mx-auto">
                        4
                    </div>
                    <div class="">
                        Accès complet
                    </div>
                </div>

            </div>

            <p class="text-center my-5">
                MERCI POUR VOTRE COMPREHENSION
            </p>
        </div>
    </div>
    <style>
        .top{
            border: solid black;
            height: 1px;
        }
        .a{
            color: red;
            border: solid black;
            border-radius: 50px;
            height: 100px;
            width: 100px;
            font-size: 60px;
        }
        /* .a a{
            text-decoration: none;
            font-size: 60px;
        } */
    </style>
@endsection
