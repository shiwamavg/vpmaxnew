<!DOCTYPE html>
<html>
<head>
    <title>Custom Places Autocomplete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="p-5 bg-light">

<div class="container">
    <div class="form-group position-relative">
        <label>City *</label>
        <input type="text" id="city_input" class="form-control" placeholder="Enter city">

        <div id="suggestions"
             class="list-group position-absolute w-100"
             style="z-index:1000; display:none;"></div>

        <input type="hidden" id="city">
        <input type="hidden" id="state">
        <input type="hidden" id="full_address">
    </div>
</div>

<script>
let timer = null;

// input handler
$('#city_input').on('input', function () {
    const q = this.value.trim();
    clearTimeout(timer);

    if (q.length < 3) {
        $('#suggestions').hide();
        return;
    }

    timer = setTimeout(() => {
        $.post("<?= site_url('places/autocomplete') ?>", { q }, render, 'json');
    }, 300);
});

// render suggestions
function render(list) {
    const box = $('#suggestions').empty();
    if (!list.length) return box.hide();

    list.forEach(i => {
        box.append(`
            <button type="button"
                    class="list-group-item list-group-item-action"
                    data-id="${i.id}">
                ${i.text}
            </button>
        `);
    });

    box.show();
}

// click selection
$(document).on('click', '#suggestions button', function () {
    const id = $(this).data('id');
    $('#suggestions').hide();

    $.post("<?= site_url('places/details') ?>", { id }, assign, 'json');
});

// assign values
function assign(place) {
    let city = "", state = "";

    place.addressComponents.forEach(c => {
        if (
            c.types.includes("locality") ||
            c.types.includes("administrative_area_level_2")
        ) {
            if (!city) city = c.longText;
        }
        if (c.types.includes("administrative_area_level_1")) {
            state = c.longText;
        }
    });

    $('#city_input').val(place.formattedAddress);
    $('#city').val(city);
    $('#state').val(state);
    $('#full_address').val(place.formattedAddress);

    console.log({ city, state, address: place.formattedAddress });
}
</script>

</body>
</html>
