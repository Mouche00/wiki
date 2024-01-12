$(document).ready(function(){

    $('form input:file').change(function () {
        $('form p').text(this.files.length + " file selected");
    });

    $(document).on('input', 'input', function(event){
        validateFields(event.target.id)
    });


    $(document).on('submit', 'form', function(event){

        event.preventDefault();
        let formData = new FormData(this);

        let errorCheck = false;
        for(const[key, value] of formData) {
            if(key != "picture"){
                if(validateFields(key)){
                    errorCheck = true;
                }
            }
        }

        if(!errorCheck){
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response){
                    let data = JSON.parse(response);
                    populate();
                    $('#overlay').addClass('hidden');
                    $('#form-wrapper').addClass('hidden');
                    $('textarea').val('');
                    $('input').val('');
                }
    
            });
        }

    });

    $(document).on('click', '#show-form', function(){
        $('#overlay').removeClass('hidden');
        $('#form-wrapper').removeClass('hidden');
        $('#submit').text('SUBMIT');
        $('form').attr('action', URLROOT + '/' + pageName + '/add');

    });

    $(document).on('click', '#close-form', function(){
        $('#overlay').addClass('hidden');
        $('#form-wrapper').addClass('hidden');
        $('input').val('');
        $('textarea').val('');
    });

    $(document).on('click', '.edit-button', function(){
        let id = $(this).data('id');
        $.ajax({
            url: URLROOT + '/' + pageName + '/edit/' + id,
            type: 'GET',
            success: function(response){
                let data = JSON.parse(response);
                $('#overlay').removeClass('hidden');
                $('#form-wrapper').removeClass('hidden');
                $('form').attr('action', URLROOT + '/' + pageName + '/edit/' + id);
                $('#submit').text('EDIT');

                for (const [key, value] of Object.entries(data)){
                    $(`#${key}`).val(value);
                }

            }
        });
    });

    $(document).on('click', '.delete-button', function(){
        let id = $(this).data('id');
        $.ajax({
            url: URLROOT + '/' + pageName + '/remove/' + id,
            type: 'POST',
            success: function(response){
                populate();
            }
        });
    });

    $(document).on('click', '#logo-sidebar-button', function(){
        $('#logo-sidebar').toggleClass('-translate-x-full');
    });
})