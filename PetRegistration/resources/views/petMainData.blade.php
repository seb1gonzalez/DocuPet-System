<h3>Tell us more about your Pet</h3>
<div class="mb-3">
    <label for="pet_name" class="form-label">What is your pet's name?</label>
    <input type="text" id="pet_name" class="form-control" >
</div>


<div class="mb-3">
    <label for="breed_select" class="form-label">What is your pet's breed?</label>
    <select id="breed_select" class="form-select">

        {{--The options could be dynamically changed depending on what type of Pet is selected--}}
        <option></option>
        <option>Chihuahua</option>
        <option>Great Dane</option>
        <option>Husky</option>
        <option>Siberian</option>
        <option>Normal Cat</option>
        <option>Tiger</option>
    </select>
</div>
