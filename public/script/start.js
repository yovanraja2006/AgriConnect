/*Show Password Button*/

document.addEventListener('DOMContentLoaded', function() {
    var togglePasswordButton = document.querySelector('.show-password-btn');
    var passwordFields = document.querySelectorAll('input[type="password"]');

    togglePasswordButton.addEventListener('click', function() {
        var areAllPasswordsVisible = Array.from(passwordFields).every(field => field.type === 'text');

        passwordFields.forEach(function(passwordField) {
            if (areAllPasswordsVisible) {
                passwordField.type = 'password';
                togglePasswordButton.textContent = 'Show Password';
            } else {
                passwordField.type = 'text';
                togglePasswordButton.textContent = 'Hide Password';
            }
        });
    });
});

/*SideBar*/

const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.querySelector('.toggle-btn');
toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('inactive');
});

/* Search*/

const searchBox = document.getElementById('searchBox');
const searchBtn = document.getElementById('searchBtn');
const clearSearchIcon = document.querySelector('.clear-search');

searchBox.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        searchBtn.click();
    }
});

searchBtn.addEventListener('click', () => {
    const searchTerm = searchBox.value.trim().toLowerCase();
    if (searchTerm) {
        highlightText(document.body, searchTerm);
    }
});

clearSearchIcon.addEventListener('click', () => {
    searchBox.value = '';
    removeHighlights(document.body);
});

searchBox.addEventListener('input', () => {
    clearSearchIcon.style.display = searchBox.value ? 'inline' : 'none';
});

clearSearchIcon.style.display = 'none';

function highlightText(node, searchTerm) {
    if (node.nodeType === Node.TEXT_NODE) {
        const text = node.textContent;
        const index = text.toLowerCase().indexOf(searchTerm);
        if (index > -1) {
            const span = document.createElement('span');
            span.innerHTML = text.substring(0, index) +
                              '<span class="highlight">' + text.substring(index, index + searchTerm.length) + '</span>' + text.substring(index + searchTerm.length);
            node.parentNode.replaceChild(span, node);
        }
    } else if (node.nodeType === Node.ELEMENT_NODE && node.tagName.toLowerCase() !== 'script' && node.tagName.toLowerCase() !== 'style') {
        node.childNodes.forEach(child => highlightText(child, searchTerm));
    }
}

function removeHighlights(node) {
    if (node.nodeType === Node.ELEMENT_NODE) {
        if (node.classList.contains('highlight')) {
            const textNode = document.createTextNode(node.textContent);
            node.parentNode.replaceChild(textNode, node);
        } else {
            node.childNodes.forEach(child => removeHighlights(child));
        }
    }
}

/*Account Settings*/
document.addEventListener('DOMContentLoaded', function () {
    // Disable submit buttons initially
    const saveBtns = document.querySelectorAll('.btn-save');
    const deleteBtn = document.querySelector('.btn-delete');
    
    saveBtns.forEach(btn => btn.disabled = true);
    deleteBtn.disabled = true;
    
    // Enable save button when inputs are changed
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', function () {
            if (this.form.checkValidity()) {
                this.form.querySelector('.btn-save').disabled = false;
            } else {
                this.form.querySelector('.btn-save').disabled = true;
            }
        });
    });

    // Enable delete button only when DELETE is typed
    const deleteConfirmationInput = document.getElementById('deleteConfirmation');
    deleteConfirmationInput.addEventListener('input', function () {
        deleteBtn.disabled = this.value.toUpperCase() !== 'DELETE';
    });
});
