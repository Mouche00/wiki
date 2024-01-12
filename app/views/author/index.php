<?php require_once APPROOT . "/views/inc/header.php"; ?>

<body>

    <?php require_once APPROOT . "/views/inc/navbarAdmin.php"; ?>
    <?php require_once APPROOT . "/views/inc/sidebarAuthor.php"; ?>

    <div class="p-4 sm:ml-64">
        <div id="content-wrapper" class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class = 'relative overflow-x-auto sm:rounded-lg' id = 'subcontent-wrapper'>
                <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                    <div>
                        <button id="show-form" class="inline-flex items-center text-gray-500 bg-[#3E3232] text-white border border-green-500 focus:outline-none hover:bg-white hover:border-green-500 hover:text-green-500 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                            Add wikis
                        </button>
                    </div>
                </div>
                <div id="overlay" class="hidden bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div>

                <div id="form-wrapper" class="fixed top-0 left-0 right-0 z-50 items-center hidden justify-center w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full flex">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <form action="" method="post" class="relative bg-white rounded-lg shadow dark:bg-gray-700" enctype="multipart/form-data">
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Add wiki
                                </h3>
                                <button id="close-form" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="p-6 space-y-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                        <input type="text" name="title" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="History" >
                                        <span class="error-message text-xs text-red-500"></span>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                                        <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quantum mechanics are..."></textarea>
                                        <span class="error-message text-xs text-red-500"></span>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">         
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <!-- Options fetched by AJAX -->
                                        </select>
                                        <span class="error-message text-xs text-red-500"></span>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">         
                                        <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                                        <select id="tags" name="tags[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple>
                                            <!-- Options fetched by AJAX -->
                                        </select>
                                        <span class="error-message text-xs text-red-500"></span>

                                    </div>
                                    <div id="selected-tags" class="col-span-6 sm:col-span-3">         
                                        

                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="mb-2 block text-xs">Picture</label>
                                        <div class="h-[8rem] border-2 border-dashed flex justify-center items-center relative">
                                            <input name="picture" id="picture" type="file" class="absolute w-full h-full outline-none opacity-0">
                                            <p class="text-xs">Click to upload your picture</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button id="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="w-full text-sm text-center rounded border border-separate border-tools-table-outline border-black border-2 rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="bg-black text-white">
                            <th scope="col" class="px-6 py-3 rounded-sm">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-sm">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-sm">
                                Modification Date
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-sm">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-sm">
                                Tags
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-sm">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Neil Sims</div>
                                    <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4">
                                React Developer
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script src="<?= URLROOT . '/js/config.js'?>"></script>
<script src="<?= URLROOT . '/js/wiki.js'?>"></script>
<script src="<?= URLROOT . '/js/main.js'?>"></script>
</body>
</html>