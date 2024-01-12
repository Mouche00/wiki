

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-white sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 md:flex flex-col justify-between overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="<?= URLROOT .'/admin' ?>" class="flex items-center p-2 text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-black  transition duration-75 dark:text-gray-400 group-hover:text-black  dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="<?= URLROOT .'/admin/categories' ?>" class="flex items-center p-2 text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black  transition duration-75 dark:text-gray-400 group-hover:text-black  dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Categories</span>
            </a>
         </li>
         <li>
            <a href="<?= URLROOT .'/admin/tags' ?>" class="flex items-center p-2 text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black  transition duration-75 dark:text-gray-400 group-hover:text-black  dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13 21L17 3" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M7 21L11 3" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20 9L4 9" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 15L20 15" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Tags</span>
            </a>
         </li>
         <li>
            <a href="<?= URLROOT .'/admin/users' ?>" class="flex items-center p-2 text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black  transition duration-75 dark:text-gray-400 group-hover:text-black  dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
            </a>
         </li>
         <li>
            <a href="<?= URLROOT .'/admin/wikis' ?>" class="flex items-center p-2 text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black  transition duration-75 dark:text-gray-400 group-hover:text-black  dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M12.081 12.932c-.78 1.611-1.849 3.792-2.379 4.776-.513.896-.94.776-1.278.024-1.172-2.77-3.58-7.625-4.712-10.347-.209-.502-.367-.823-.516-.95-.151-.125-.462-.2-.936-.227-.174-.019-.26-.061-.26-.131v-.379l.043-.038c.771-.004 4.503 0 4.503 0l.042.038v.362c0 .1-.063.147-.188.147l-.47.024c-.403.026-.605.137-.605.365 0 .112.044.275.139.501.902 2.206 4.017 8.772 4.017 8.772l.114.039 2.01-4.012-.402-.89L9.82 8.285s-.265-.545-.357-.727c-.607-1.203-.593-1.265-1.206-1.347-.173-.02-.261-.042-.261-.125v-.39l.05-.037h3.578l.095.03v.376c0 .088-.063.125-.189.125l-.257.039c-.66.051-.551.318-.113 1.186l1.319 2.712 1.465-2.922c.244-.533.194-.668.093-.789-.058-.07-.255-.185-.677-.2l-.168-.018a.191.191 0 0 1-.121-.043.125.125 0 0 1-.056-.107v-.357l.051-.037c1.04-.007 3.371 0 3.371 0l.05.037v.364c0 .101-.05.148-.161.148-.539.024-.652.079-.854.366-.1.154-.313.49-.538.865l-1.919 3.563-.054.112 2.328 4.763.142.041 3.665-8.704c.129-.352.107-.602-.053-.746-.165-.144-.289-.228-.716-.246l-.35-.014a.211.211 0 0 1-.127-.037.128.128 0 0 1-.06-.1v-.361l.049-.038h4.137l.034.038v.364c0 .1-.062.15-.174.15-.541.024-.94.15-1.203.351-.263.213-.465.514-.614.89 0 0-3.371 7.72-4.524 10.289-.438.84-.878.765-1.253-.026-.477-.977-1.478-3.156-2.206-4.761l.045-.03z"></path>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Wikis</span>
            </a>
         </li>
         <li>
            <a href="<?= URLROOT .'/admin/archive' ?>" class="flex items-center p-2 text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black  transition duration-75 dark:text-gray-400 group-hover:text-black  dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M12.081 12.932c-.78 1.611-1.849 3.792-2.379 4.776-.513.896-.94.776-1.278.024-1.172-2.77-3.58-7.625-4.712-10.347-.209-.502-.367-.823-.516-.95-.151-.125-.462-.2-.936-.227-.174-.019-.26-.061-.26-.131v-.379l.043-.038c.771-.004 4.503 0 4.503 0l.042.038v.362c0 .1-.063.147-.188.147l-.47.024c-.403.026-.605.137-.605.365 0 .112.044.275.139.501.902 2.206 4.017 8.772 4.017 8.772l.114.039 2.01-4.012-.402-.89L9.82 8.285s-.265-.545-.357-.727c-.607-1.203-.593-1.265-1.206-1.347-.173-.02-.261-.042-.261-.125v-.39l.05-.037h3.578l.095.03v.376c0 .088-.063.125-.189.125l-.257.039c-.66.051-.551.318-.113 1.186l1.319 2.712 1.465-2.922c.244-.533.194-.668.093-.789-.058-.07-.255-.185-.677-.2l-.168-.018a.191.191 0 0 1-.121-.043.125.125 0 0 1-.056-.107v-.357l.051-.037c1.04-.007 3.371 0 3.371 0l.05.037v.364c0 .101-.05.148-.161.148-.539.024-.652.079-.854.366-.1.154-.313.49-.538.865l-1.919 3.563-.054.112 2.328 4.763.142.041 3.665-8.704c.129-.352.107-.602-.053-.746-.165-.144-.289-.228-.716-.246l-.35-.014a.211.211 0 0 1-.127-.037.128.128 0 0 1-.06-.1v-.361l.049-.038h4.137l.034.038v.364c0 .1-.062.15-.174.15-.541.024-.94.15-1.203.351-.263.213-.465.514-.614.89 0 0-3.371 7.72-4.524 10.289-.438.84-.878.765-1.253-.026-.477-.977-1.478-3.156-2.206-4.761l.045-.03z"></path>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Archive</span>
            </a>
         </li>
         </ul>
      <ul>
         <li>
            <a href="<?= URLROOT .'/users/logout' ?>" class="flex items-center p-2 text-black  rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black  transition duration-75 dark:text-gray-400 group-hover:text-black  dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
      </ul>
   </div>
</aside>
