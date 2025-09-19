document.addEventListener('DOMContentLoaded', function () {
    const editAccountLink = document.getElementById('edit-account-link');
    const editPasswordLink = document.getElementById('edit-password-link');
    const deleteAccountLink = document.querySelector('.delete-account');

    const editAccountForm = document.getElementById('editAccountForm');
    const changePasswordForm = document.getElementById('changePasswordForm');
    const deleteAccountForm = document.getElementById('deleteAccountForm');

    // Function to hide all forms
    function hideAllForms() {
        editAccountForm.style.display = 'none';
        changePasswordForm.style.display = 'none';
        deleteAccountForm.style.display = 'none';

        editAccountLink.classList.remove('active');
        editPasswordLink.classList.remove('active');
        deleteAccountLink.classList.remove('active');
    }

    // Show Edit Account Form
    editAccountLink.addEventListener('click', function (e) {
        e.preventDefault();
        hideAllForms();
        editAccountForm.style.display = 'block';
        editAccountLink.classList.add('active');
    });

    // Show Change Password Form
    editPasswordLink.addEventListener('click', function (e) {
        e.preventDefault();
        hideAllForms();
        changePasswordForm.style.display = 'block';
        editPasswordLink.classList.add('active');
    });

    // Show Delete Account Form
    deleteAccountLink.addEventListener('click', function (e) {
        e.preventDefault();
        hideAllForms();
        deleteAccountForm.style.display = 'block';
        deleteAccountLink.classList.add('active');
    });

    // By default, show the Edit Account Form
    editAccountLink.click();
});