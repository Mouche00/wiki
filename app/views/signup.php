<?php require_once APPROOT . "/views/inc/header.php"; ?>

<body class="">

<!-- <div>gg</div> -->
<!-- <section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
          Flowbite    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Create and account
              </h1>
              <form class="space-y-4 md:space-y-6" action="<?php URLROOT . '/user/add' ?>" method="post" enctype="multipart/form-data">
                    <div>
                      <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="fname" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                      <label for="lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                      <input type="text" name="lname" id="lname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="logo"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profil</label>

                        <label
                            class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                            <div
                                class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">

                                <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                    <img class="has-mask h-36 object-center"
                                        src="#"
                                        alt="freepik image">
                                </div>
                                <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files
                                    here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a
                                        file</a> from your computer</p>
                            </div>
                            <input name="profil" id="profil" type="file" class="hidden">
                        </label>
                    </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                      <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                      </div>
                  </div>
                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Already have an account? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section> -->
<!-- <section class="bg-gray-200 dark:bg-gray-900 lg:w-full lg:flex lg:justify-center lg:items-center">
    <div class="lg:h-[80%] lg:w-[70%] md:flex">
        <div
            class="relative overflow-hidden lg:flex w-1/2 bg-[url('<?= URLROOT . "/images/login.jpg"?>')] bg-cover bg-right rounded-l-lg justify-around items-center hidden">
            
        </div>
        <div class="flex md:w-1/2 justify-center py-20 items-center bg-white rounded-r-lg">
            <form class="bg-white">
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Full name" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email Address" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
                </div>
                <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Register</button>
            </form>
        </div>
    </div>
</section> -->

<!-- component -->
<!-- Container -->
<div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
  
  <!-- Login component -->
  <div class="md:w-[80%] lg:h-[32rem] lg:w-[60%] flex shadow-md">
    <!-- Login form -->
    <div class="md:w-[50%] w-72 flex flex-wrap content-center justify-center rounded-md md:rounded-l-md bg-white">
      <div class="w-full px-8">

        <!-- Form -->
        <form action="" method="post" class="mt-4" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Full Name</label>
                <input name="fullname" id="fullname" type="text" placeholder="Enter your full name" class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
            </div>
            <div class="lg:flex lg:justify-between">
                <div class="mb-3">
                    <label class="mb-2 block text-xs font-semibold">Username</label>
                    <input name="username" id="username" type="text" placeholder="Enter your username" class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                </div>

                <div class="mb-3">
                    <label class="mb-2 block text-xs font-semibold">Email</label>
                    <input type="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                </div>
            </div>

            <div class="lg:flex lg:justify-between">
                <div class="mb-3">
                    <label class="mb-2 block text-xs font-semibold">Password</label>
                    <input type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                </div>

                <div class="mb-3">
                    <label class="mb-2 block text-xs font-semibold">Confirm Password</label>
                    <input type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                </div>
            </div>

            <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Picture</label>
                <div class="h-[8rem] border-2 border-dashed flex justify-center items-center relative">
                    <input type="file" name="picture" id="picture" class="absolute w-full h-full outline-none opacity-0">
                    <p class="text-xs">Click to upload your picture</p>
                </div>
            </div>

          <div class="mb-3">
            <button class="mb-1.5 block w-full text-center transition ease-in-out delay-75 bg-[242722] text-white hover:text-black hover:bg-[fcf3e4] px-2 py-1.5 rounded-md">Sign Up</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Login banner -->
    <div class="bg-[url('<?= URLROOT . "/images/login.jpg"?>')] bg-cover bg-right md:w-[50%] flex flex-wrap content-center justify-center rounded-r-md md:flex hidden">
    </div>

  </div>
</div>

</body>
</html>