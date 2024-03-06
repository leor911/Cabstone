<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Validation Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h2>Price Validation Form</h2>

    <form id="priceForm">
        {{-- <label for="price">Price:</label>
        <input type="text" id="price" name="price">
        <span id="priceError" class="error"></span>
        <br> --}}

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">
        <span id="priceError" class="error"></span>
        <br>

        <label for="listingType">Listing Type:</label>
        <select id="listingType" name="listingType">
            <option selected disabled value="">Listing Type</option>
            <option value="sale">For Sale</option>
            <option value="rent">For Rent</option>
        </select>
        <span id="listingTypeError" class="error"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        // Function to validate price
        function validatePrice(priceInput, errorSpan) {
            // Reset error message
            errorSpan.textContent = '';

            //  // Validate price without decimals
            //  var enteredPrice = priceInput.value;
            // if (!/^\d+$/.test(enteredPrice)) {
            //     errorSpan.textContent = 'Price must be a whole number';
            // }
        }

        // Function to validate listing type
        function validateListingType(listingTypeSelect, errorSpan) {
            // Reset error message
            errorSpan.textContent = '';

            // Validate listing type
            if (listingTypeSelect.value === '') {
                errorSpan.textContent = 'Please select a listing type';
            }
        }

        // Validate price and listing type, and prevent form submission on errors
        var priceInput = document.getElementById('price');
        var priceErrorSpan = document.getElementById('priceError');
        var listingTypeSelect = document.getElementById('listingType');
        var listingTypeErrorSpan = document.getElementById('listingTypeError');

        priceInput.addEventListener('blur', function() {
            validatePrice(priceInput, priceErrorSpan);
        });

        listingTypeSelect.addEventListener('change', function() {
            validateListingType(listingTypeSelect, listingTypeErrorSpan);
        });

        document.getElementById('priceForm').addEventListener('submit', function(event) {
            validatePrice(priceInput, priceErrorSpan);
            validateListingType(listingTypeSelect, listingTypeErrorSpan);

            // Check if there are any errors
            if (priceErrorSpan.textContent !== '' || listingTypeErrorSpan.textContent !== '') {
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>

</body>
</html>