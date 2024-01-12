$(document).ready(function(){

    $('#content-wrapper').html('');

    $.ajax({
        url: URLROOT + '/wikis/displayTruncated',
        type: 'GET',
        success: function(response){
            let data = JSON.parse(response); 
            let element = '';
            // console.log(data);
            data.forEach((e) => {
                element = $('<article>', {class: 'p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700'});
                let content = `<div class="flex justify-between items-center mb-5 text-gray-500">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                        ${e.category_name}
                                    </span>
                                    <span class="text-sm">${e.dateModified}</span>
                                </div>
                                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">${e.title}</a></h2>
                                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">${e.content}</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-4">
                                        <img class="w-7 h-7 rounded-full" src="${URLROOT}/uploads/${e.user_picture}" alt="Jese Leos avatar" />
                                        <span class="font-medium dark:text-white">
                                            ${e.author}
                                        </span>
                                    </div>
                                    <a href="${URLROOT}/wikis/single/${e.id}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Read more
                                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>`;
                element.append(content);
                $('#content-wrapper').append(element);
            });
        }
    })


})