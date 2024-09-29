
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home - Login</title>
       <link rel="icon" type="image/png" href="<?= url("/assets/images/" . $videoTypeDetails['image']) ?>">
       <link rel="icon" type="image/svg" href="<?= url("/assets/images/" . $videoTypeDetails['image']) ?>">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
      <script src="https://cdn.tailwindcss.com"></script>
      <style>
         #camera {
         object-fit: cover;
         width: 100vw;
         height: 100vh;
         position: fixed;
         top: 0;
         left: 0;
         z-index: -1;
         }
      </style>
   </head>
   <body>
      <div id="mainSystem" class="h-screen z-1 relative flex items-center justify-center">
         <!-- Login Block -->
         <div id="authenticationBlock" class="min-w-[300px] max-w-[450px] w-full bg-white rounded">
            <div id="loginSystem">
               <form method="post" action="<?= url('/auth/login') ?>">
                  <input type="hidden" name="site" value="<?= $site['name'] ?>">
                  <input type="hidden" name="user_access_token" value="<?= $user_access_token; ?>">
                  <div class="p-5 ">
                     <h2 class="text-2xl font-bold text-gray-600 text-center capitalize">Login With <?= $site['name'] ?></h2>
                     <div class="p-2 py-1 my-7 flex items-center bg-white overflow-hidden">
                        <div class="w-full">
                           <label class="w-full text-xs block"  for="email"></label>
                           <input id="email" class="w-full px-3 border-[<?= $videoCalling['color'] ?>] border rounded text-lg py-1 outline-[<?= $videoCalling['color'] ?>] " type="email" name="email" required placeholder="Email address*">
                        </div>
                     </div>
                     <!-- password field -->
                     <div class="p-2 py-1 my-7 flex items-center bg-white overflow-hidden">
                        <div class="w-full">
                           <label class="w-full text-xs block" for="password"></label>
                           <input id="password" class="w-full px-3 border-[<?= $videoCalling['color'] ?>] border rounded text-lg py-1 outline-[<?= $videoCalling['color'] ?>] " type="password" name="password" required placeholder="password">
                        <?php if (session()->has('error')): ?>
                            <div class="text-red-500 mt-1"><?= session()->get('error')[0] ?></div>
                        <?php endif; ?>
                        </div>
                     </div>

                     <input type="submit" name="submit" class="cursor-pointer block p-2 my-5 w-full bg-[<?= $videoCalling['color'] ?>] text-xl font-semibold text-white rounded-md" value="login Now">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
