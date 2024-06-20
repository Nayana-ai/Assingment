$(document).ready(function() {
    // Function to add a new profile field
    $('#addProfile').click(function() {
        var profileHTML = '<div class="profile">';
        profileHTML += '<input type="text" name="name[]" placeholder="Name">';
        profileHTML += '<input type="email" name="email[]" placeholder="Email">';
        profileHTML += '<input type="tel" name="phone[]" placeholder="Phone">';
        profileHTML += '<button class="deleteProfile">Delete</button>';
        profileHTML += '</div>';
        
        $('#profiles').append(profileHTML);
    });

    // Function to remove a profile field
    $('#profiles').on('click', '.deleteProfile', function() {
        $(this).closest('.profile').remove();
    });
});