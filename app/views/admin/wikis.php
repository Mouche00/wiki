<?php require_once APPROOT . "/views/inc/header.php"; ?>

<body>

    <?php require_once APPROOT . "/views/inc/navbarAdmin.php"; ?>
    <?php require_once APPROOT . "/views/inc/sidebar.php"; ?>

    <div class="p-4 sm:ml-64">
        <div id="content-wrapper" class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class = 'relative overflow-x-auto sm:rounded-lg' id = 'subcontent-wrapper'>

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
                                Author
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
<script src="<?= URLROOT . '/js/wikiAdmin.js'?>"></script>
<script src="<?= URLROOT . '/js/main.js'?>"></script>
</body>
</html>