function populate(){

        $.ajax({
            url: URLROOT + '/' + pageName + '/wikisOfAuthor',
            type: "GET",
            success: function (response) {
            // console.log(response);
            let data = JSON.parse(response);

            $("tbody").html("");
            let row = "";
            let element = "";
            data.forEach((e) => {
                row = $("<tr>", { class: "bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" });
                for (const [key, value] of Object.entries(e)) {
                    console.log(value);
                
                    element = `<td class="px-6 py-4 border-black border-2 rounded-sm">
                                    ${value}
                                </td>`;
                    row.append(element);
        
                }


            $.ajax({
                url: URLROOT + '/tags/getByWiki/'+ e.id,
                type: "GET",
                async: false,
                success: function (response) {
                // console.log(response);
                let data = JSON.parse(response);

                element = $("<td>", { class: "px-6 py-4 border-black border-2 rounded-sm" });
                data.forEach((e) => {
                    element.append(`#${e.name} `);
                    
                });
                row.append(element);
                },
            });


            element = $("<td>", {
            class:
                "px-6 py-4 border-black border-2 rounded-sm flex flex-col justify-between items-center h-full",
            });
            button = $("<button>", { class: "delete-button", type: "button" });
            button.attr("data-id", `${e.id}`);
            value = `<button class="bg-[#3E3232] m-1 py-2 px-8 text-white rounded-md">DELETE</button>`;
            button.html(value);
            element.append(button);
            
            button = $("<button>", { class: "edit-button", type: "button" });
            button.attr("data-id", `${e.id}`);
            value = `<button class="bg-[#3E3232] m-1 py-2 px-8 text-white rounded-md">EDIT</button>`;
            button.html(value);
            element.append(button);

            row.append(element);
            $("tbody").append(row);
            });
        },
    });
}

populate();

$(document).on('click', '#show-form', function(){

    if(pageName == 'wikis'){
        $.ajax({
            url: URLROOT + '/categories/display/',
            type: 'GET',
            success: function(response){
                let data = JSON.parse(response);
                console.log(data);
                $('#category').html('');
                data.forEach((e) => {
                    let html = `<option value="${e.id}">${e.name}</option>`;
                    $('#category').append(html);
                })
            }
        })

        $.ajax({
            url: URLROOT + '/tags/display/',
            type: 'GET',
            success: function(response){
                let data = JSON.parse(response);
                console.log(data);
                $('#tags').html('');
                data.forEach((e) => {
                    let html = `<option value="${e.id}">${e.name}</option>`;
                    $('#tags').append(html);
                })
            }
        })
    }

});

$(document).on('click', '.edit-button', function(){
    let id = $(this).data('id');

    $.ajax({
        url: URLROOT + '/' + pageName + '/edit/' + id,
        type: 'GET',
        success: function(response){
            let data = JSON.parse(response);
            for (const [key, value] of Object.entries(data)){
                if(key == 'category_id'){
                    $.ajax({
                        url: URLROOT + '/categories/display/',
                        type: 'GET',
                        success: function(response){
                            let subdata = JSON.parse(response);
                            // console.log(data);
                            $('#category').html('');
                            subdata.forEach((e) => {
                                if(value == e.id){
                                    let html = `<option value="${e.id}" selected>${e.name}</option>`;
                                    $('#category').append(html);
                                } else {
                                    let html = `<option value="${e.id}">${e.name}</option>`;
                                    $('#category').append(html);
                                }
                                
                            })
                        }
                    })
                }
            }

        }
    });

    $.ajax({
        url: URLROOT + '/tags/display/',
        type: 'GET',
        success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#tags').html('');
            data.forEach((e) => {
                let html = `<option value="${e.id}">${e.name}</option>`;
                $('#tags').append(html);
            })
        }
    })
});
