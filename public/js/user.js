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
            if(key != 'picture'){
                element = `<td class="px-6 py-4 border-black border-2 rounded-sm">
                                ${value}
                            </td>`;
                row.append(element);
            } else {
                element = `<td class="px-6 py-4 border-black border-2 rounded-sm">
                                <img class="m-auto w-16 h-16 rounded-full border-2 border-black" src="${URLROOT}/uploads/${value}">
                            </td>`;
                row.append(element);
            }

        }

        $("tbody").append(row);
        });
    },
});
}

populate();

