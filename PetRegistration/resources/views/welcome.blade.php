<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        {{-- Bootstrap CSS--}}
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>


        {{--Nav heading--}}
        <nav class="navbar navbar-light bg-light ">
            <div id="docupet_header" class="container-fluid">
                <span class="mb-1 h1" >DocuPet</span>
            </div>
        </nav>

        {{--Pet Registration--}}
        <div class="container">
            <div id="registration_card" class="card">

                {{--Paws IMG--}}
                <div>
                   <img id="paws_img" src="{{asset('img/paws.png')}}" alt="paws"/>
                </div>

                <div class="card-body">
                    <h1>Pet Registration</h1>

                    {{--Form--}}
                    <div id="form_row" class="row container">
                        <form id="pet_form" method="post" action="{{route('savePet')}}">
                            @csrf
                            {{--Pet Type btn radio--}}
                            @include('petTypeRadio')

                            {{--Pet Data--}}
                            @include('petMainData')

                            {{-- Breed Extra options Radio check--}}
                            @include('petBreedExtra')

                            {{--Pet Gender btn radio--}}
                            @include('petGenderRadio')

                            <hr>
                            <button id="register_pet" type="submit" class="btn btn-lg btn-success">Register</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        // cant submit without all required fields
        $('#register_pet').prop('disabled', true);


        $(document).ready(function () {

            // enable submit when enough fields are fill
            $("#pet_form").change(function () {

                if ($('#pet_name').val() !== '' &&
                    (
                        $('#breed_select').val() !== '' ||
                        $('#idk_radio').is(':checked') ||
                        $('#mix_radio').is(':checked')
                    )&&
                    (
                        $('#cat_radio').is(':checked')  ||
                        $('#dog_radio').is(':checked')
            )&&
                    (
                        $('#male_radio').is(':checked')   ||
                        $('#female_radio').is(':checked')
                    )
                ){
                    $('#register_pet').prop('disabled', false);
                } else {
                    $('#register_pet').prop('disabled', true);
                }
            });

        });

    </script>
</html>
