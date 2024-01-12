function populate(){

        $.ajax({
            url: URLROOT + '/' + pageName + '/display',
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
            value = `<button class="bg-red-500 m-1 py-2 px-8 text-white rounded-md">DELETE</button>`;
            button.html(value);
            element.append(button);
            
            button = $("<button>", { class: "archive-button", type: "button" });
            button.attr("data-id", `${e.id}`);
            value = `<button class="bg-blue-500 m-1 py-2 px-8 text-white rounded-md">ARCHIVE</button>`;
            button.html(value);
            element.append(button);

            row.append(element);
            $("tbody").append(row);
            });
        },
    });
}

populate();

$(document).on('click', '.archive-button', function(){
    let id = $(this).data('id');
    $.ajax({
        url: URLROOT + '/' + pageName + '/archive/' + id,
        type: 'POST',
        success: function(response){
            populate();
        }
    });
});
