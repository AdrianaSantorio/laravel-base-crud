
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const accept = confirm('Do you want to delete this comic?');
            if (accept) e.target.submit();
            });
    });