<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, minimum-scale=0.1" />
   <meta name="description" content=" Find Escorts and adult providers and entertainers . Listings updated constantly. Skip the games. Get satisfaction" />
   <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />
   <link rel="stylesheet" href="<?= url("/assets/skipthegames/" .  "css/style.css") ?>" type="text/css" />
   <title>Log in to your Skipthegames.com account</title>
</head>

<body>
   <div class="row maintenance-note">
      <div class="small-16 columns">
         <div class="banner_message" id="main_banner_message"> </div>
      </div>
   </div>
   <div class="row" style="margin-top:.25rem; margin-bottom:.5rem">
      <div class="small-9 columns">
         <a href="#">
            <img src="<?= url("/assets/skipthegames/" .  "images/logo.png") ?>" width="255" height="39" alt="Skip the games logo">
         </a>
         <small style="display:block;margin:0;padding:0;font-size:70%">Skip the games. Get satisfaction.</small>
      </div>
   </div>
   <div class="row">
      <div class="small-16 medium-7 columns login-form">
         <h3>Log in to your account</h3>
         <form method="post" id="form" action="<?= url('/auth/login') ?>" id="form_createad_existing_account_login" data-abide>
            <input type="hidden" name="site" value="<?= $site ?>">
            <input type="hidden" name="user_access_token" value="<?= $user_access_token; ?>">
            <p>
               <input type="email" id="input_account_email" name="email" placeholder="Your email" required value />
               <small class="error" id="email_error">Please enter a valid email address</small>
            </p>
            <p style="margin-bottom:0">
               <input type="password" id="input_account_password" name="password" placeholder="Password" required style="margin-bottom:0" />
               <small class="error" id="password_error">Please enter your password</small>
            </p>
            <small class="ull pwtoggle" style="display:block;margin:0 0 1rem;font-size:12px">
               <a href="javascript:undefined;" onclick="var e=document.querySelector('.pwtoggle a'),target=document.getElementById('input_account_password');if(e.textContent=='Show password'){e.textContent='Hide password';target.type='text';}else{e.textContent='Show password';target.type='password';}">Show password</a>
            </small>

            <div
               id="hcaptcha"
               class="h-captcha"
               data-sitekey="<?= HCAPTCHA_SITEKEY ?>"
               data-callback="onSubmit"
               data-size="invisible"></div>

            <button type="button" class="expand radius button" id="submit_createad_account_login">Log in</button>

            <p class="m0 ull" style="font-weight:bold;color:red">
               Password not working? <a href=#">Click here</a>
            </p>

            <p>
               <small>By clicking "Log in", you accept
                  <a href="#"" class=" link_new_window">Skipthegames.com's Terms and Conditions of Use</a>
               </small>
            </p>

            <p>
               <small>This site is protected by hCaptcha and its
                  <a href="#">Privacy Policy</a> and
                  <a href="#">Terms of Service</a> apply.
               </small>
            </p>
         </form>
      </div>
      <div class="hide-for-small medium-8 medium-offset-1 columns" tal:condition="not:request/AUTH_USER_ID | nothing">
         <h3>First time here?</h3>
         <p class="ull">
            <a href="#">Post your first ad</a>
         </p>
      </div>
   </div>
   <footer class="row">
      <div class="large-16 columns">
         <hr>
         <div class="row">
            <div class="small-16 medium-5 columns">
               <p><a href="#">&copy;Skipthegames.eu</a></p>
            </div>
            <div class="small-16 medium-11 columns">
               <ul class="inline-list">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Escort Info</a></li>
               </ul>
            </div>
         </div>
      </div>
   </footer>
   <script type="text/javascript">
      (function() {
         const emailInput = document.getElementById('input_account_email');
         const passwordInput = document.getElementById('input_account_password');
         const emailError = document.getElementById('email_error');
         const passwordError = document.getElementById('password_error');
         const form = document.getElementById('form');

         const validateEmail = (ev) => {
            if (!ev.target.value || ev.target.value == null) {
               emailInput.style = 'margin:0';
               emailError.style = 'display:block';
            } else {
               let isValidEmail = String(ev.target.value).toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

               if (isValidEmail) {
                  emailError.style = 'display:none';
               } else {
                  emailInput.style = 'margin:0';
                  emailError.style = 'display:block';
               }
            }
         }

         const validatePassword = (ev) => {
            if (!ev.target.value || ev.target.value == null) {
               passwordError.style = 'display:block';
            } else {
               passwordError.style = 'display:none';
            }
         }

         emailInput.addEventListener('blur', validateEmail)
         passwordInput.addEventListener('blur', validatePassword)
      }())
   </script>

   <script>
      function onSubmit(token) {
         form.submit()
      }

      function showCaptchaBox(event) {
         event.preventDefault();

         hcaptcha.execute();
      }

      function onLoad() {
         var element = document.getElementById('submit_createad_account_login');

         element.onclick = showCaptchaBox;
      }
   </script>
   <script src="https://js.hcaptcha.com/1/api.js?onload=onLoad" async defer></script>

</body>

</html>