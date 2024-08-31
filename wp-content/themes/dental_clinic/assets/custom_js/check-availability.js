jQuery(document).ready(function ($) {
    $('#your-form-id').on('submit', function (event) {
        event.preventDefault();

        var dateAndTime = $('input[name="DateandTime"]').val();
        
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'check_time_slot_availability',
                date_and_time: dateAndTime
            },
            success: function (response) {
                if (response === 'unavailable') {
                    alert('This time slot is already booked. Please choose another time slot.');
                } else {
                    $('#your-form-id')[0].submit();
                }
            }
        });
    });
});
