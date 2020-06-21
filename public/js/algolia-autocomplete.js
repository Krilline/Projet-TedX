$(document).ready(function() {
    $('.js-search-autocomplete').each(function() {
        let autocompleteUrl = $(this).data('autocomplete-url');
        $(this).autocomplete({hint: false}, [
            {
                source: function(query, cb) {
                    $.ajax({
                        url: autocompleteUrl+'?query='+query
                    }).then(function(data) {
                        cb(data.tags);
                    });
                },
                displayKey: 'name',
                debounce: 500 // only request every 1/2 second
            }
        ])
    });
});