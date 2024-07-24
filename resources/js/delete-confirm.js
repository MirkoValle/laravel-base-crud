const deleteEl = document.querySelectorAll('form.delete');

deleteEl.forEach((deleteFormElement) =>{

    deleteFormElement.addEventListener('submit', function(event){
        event.preventDefault();

        if (window.confirm('Sei sicuro?') == true){
            this.submit();
        }

    });

});

