$(document).ready(function(){

    function validateFields(input) {

        const field = document.querySelector(`#${input}`);
        let errorCheck = false;

        if (field.value.trim() == "") {

            setStatus(field, `${field.previousElementSibling.innerText} cannot be blank`, "error");
            errorCheck = true;

        } else {

            setStatus(field, null, "success");

        }

        if (field.type === "email") {

        const regex = /^\S+@\S+\.\S+$/;

            if(regex.test(field.value)) {
                setStatus(field, null, "success");
            } else {
                setStatus(field, 'Please enter a valid email address', "error");
                errorCheck = true;
            }
        }

        if (field.type === "password") {

            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if(regex.test(field.value)) {
                setStatus(field, null, "success");
            } else {
                setStatus(field, 'Please enter a valid password', "error");
                errorCheck = true;
            }

        }

        if (field.id === "fullname") {

            const regex = /^[a-z ]+$/;

            if(regex.test(field.value)) {
                setStatus(field, null, "success");
            } else {
                setStatus(field, 'Please enter a valid name', "error");
                errorCheck = true;
            }

        }

        if (field.id === "confirm-password") {

            const confirmField = document.querySelector(`#password`);
            
            if(field.value != confirmField.value) {
                setStatus(field, "Password does not match", "error");
                errorCheck = true;
            } else {
                setStatus(field, null, "success");
            }
        }

        return errorCheck;

    }

    function setStatus(field, message, status) {
        const errorMessage = field.parentElement.querySelector(".error-message");

        if (status === "success") {

            if (errorMessage) {
                errorMessage.innerText = "";
            }

            field.classList.remove("border-2");
            field.classList.remove("border-red-500");
            field.classList.remove("border-solid");

        }

        if (status === "error") {

            field.parentElement.querySelector(".error-message").innerText = message;
            field.classList.add("border-2");
            field.classList.add("border-red-500");
            field.classList.add("border-solid");

        }

    }
      

    $('form input:file').change(function () {
        $('form p').text(this.files.length + " file selected");
    });

    $(document).on('input', 'input', function(event){
        validateFields(event.target.id)
    });


    $(document).on('submit', 'form', function(event){

        event.preventDefault();
        let formData = new FormData(this);

        // let errorCheck = false;
        // for(const[key, value] of formData) {
        //     if(key != "picture"){
        //         if(validateFields(key)){
        //             errorCheck = true;
        //         }
        //     }
        // }

        // if(!errorCheck){
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response){
                    let data = JSON.parse(response);
                }
    
            });
        // }

    });

});