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
                    <h1>Welcome to DocuPet</h1>
                    <hr>
                    {{--Form--}}
                    <div id="form_row" class="row container">
                        <form id="pet_form" method="post">
                            @csrf
                            {{--Pet Type btn radio--}}
                            <div id="pet_select_row">
                                <h3>I have a ...</h3>
                                    <input type="radio" value="1" class="btn-check btn-lg" name="type_radio" id="dog_radio" autocomplete="off">
                                    <label class="btn  btn-lg btn-outline-primary" for="dog_radio">Dog</label>

                                    <input type="radio"  value="2" class="btn-check btn-lg" name="type_radio" id="cat_radio" autocomplete="off">
                                    <label class="btn btn-lg btn-outline-primary" for="cat_radio">Cat</label>
                            </div>

                            {{--Pet Data--}}
                            <fieldset>

                                <h3>Tell us more about your Pet</h3>
                                <div class="mb-3">
                                    <label for="pet_name" class="form-label">What is your pet's name?</label>
                                    <input type="text" id="pet_name" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="breed_select" class="form-label">What is your pet's breed?</label>
                                    <select id="breed_select" class="form-select">
                                        <option></option>
                                    </select>
                                </div>

                                {{--Radio check--}}
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="breed_radio" id="idk_radio">
                                        <label class="form-check-label" for="idk_radio">
                                            I don't know
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="breed_radio" id="mix_radio">
                                        <label class="form-check-label" for="mix_radio">
                                            It's a mix
                                        </label>
                                    </div>
                                </div>

                                {{--Pet Gender btn radio--}}
                                <div id="gender_select_row">
                                    <h3>Gender</h3>
                                    <input type="radio" value="1" class="btn-check btn-lg" name="gender_radio" id="male_radio" autocomplete="off">
                                    <label class="btn  btn-lg btn-outline-primary" for="male_radio">Male</label>

                                    <input type="radio"  value="2" class="btn-check btn-lg" name="gender_radio" id="female_radio" autocomplete="off">
                                    <label class="btn btn-lg btn-outline-primary" for="female_radio">Female</label>
                                </div>


                                <hr>
                                <button id="register_pet" type="submit" class="btn btn-lg btn-success">Register</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $('#register_pet').prop('disabled', true);
        $(document).ready(function () {
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
