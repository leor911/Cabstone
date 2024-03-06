
  $(document).ready(function() {
    $('#search').submit(function(e) {
        e.preventDefault();
        var searchText = $('input[name="search"]').val().toLowerCase();

        $('table tr:gt(0)').each(function() {
            var found = false;
            $(this).find('th').each(function() {
                var cellText = $(this).text().toLowerCase();
                if (cellText.indexOf(searchText) !== -1) {
                    found = true;
                    return false; // Break the loop if match found
                }
            });
            if (found) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});