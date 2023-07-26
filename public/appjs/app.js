function myFunction() {
    // Update the page without refreshing it
    var settings = {
        url: "{{ route('candidate.settingUpdate') }}",
        method: "POST",
        data: {
            received_job_alert: $("#received_job_alert").is(":checked") ? 1 : 0,
            role_id: $("#job_role").val(),
        },
    };

    $.ajax(settings).done(function (data) {
        // Update the page with the new settings
        // For example, you could update the page to show a success message or to redirect the user to a different page.
    });
}
