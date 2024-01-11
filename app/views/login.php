<?php require_once APPROOT . "/views/inc/header.php"; ?>

<body class="">

<div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
  

  <div class="md:w-[80%] lg:h-[32rem] lg:w-[50%] flex shadow-md">
    <div class="md:w-[50%] w-72 flex flex-wrap content-center justify-center rounded-md md:rounded-l-md bg-white">
      <div class="w-full px-8">

        <!-- Form -->
        <form action="<?= URLROOT . '/users/login'?>" method="post" class="mt-4" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Email</label>
                <input name="email" id="email" type="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                <span class="error-message text-xs text-red-500"></span>
            </div>

            <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Password</label>
                <input name="password" id="password" type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                <span class="error-message text-xs text-red-500"></span>
            </div>

          <div class="mb-3">
            <button class="mb-1.5 block w-full text-center transition ease-in-out delay-75 bg-[242722] text-white hover:text-black hover:bg-[fcf3e4] px-2 py-1.5 rounded-md">Login</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Login banner -->
    <div class="bg-[url('<?= URLROOT . "/images/login.jpg"?>')] bg-cover bg-center md:w-[50%] flex flex-wrap content-center justify-center rounded-r-md md:flex hidden">
    </div>

  </div>
</div>

<script src="<?= URLROOT . '/js/config.js'?>"></script>
<script src="<?= URLROOT . '/js/main.js'?>"></script>
</body>
</html>