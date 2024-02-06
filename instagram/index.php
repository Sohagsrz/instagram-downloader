<?php include 'header.php'; ?>

<main>
    <article>
        <section>
            <div class="text-center insta-download">
                <div class="banner-area text-light mt-5 mb-5 text-default">
                    <div class="container">
                        <div class="double-items">
                            <div class="row align-center pb-3">
                                <div class="col-12">
                                    <div class="banner-context text-center">
                                        <h2>Online Instagram Photo Download</h2>
                                    </div>

                                    <div class="pt-3 text-light">
                                        <ul class="nav nav-pills items-download" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link m-2 tap active-item" id="photo-tab" data-bs-toggle="pill" href="#photo" role="tab" aria-selected="false">
                                                    <i class="bi bi-card-image"></i>
                                                    <div class="d-sm-none d-block">Photo</div>
                                                    <span class="d-none d-md-inline-block">Photo</span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link m-2 tap" id="video-tab" data-bs-toggle="pill" href="#reel" role="video" aria-selected="false">
                                                    <i class="bi bi-camera-video-fill"></i>
                                                    <div class="d-sm-none d-block">Video</div>
                                                    <span class="d-none d-md-inline-block">Video</span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link m-2 tap" id="video-tab" data-bs-toggle="pill" href="#reel" role="video" aria-selected="false">
                                                    <i class="bi bi-camera-video-fill"></i>
                                                    <div class="d-sm-none d-block">Profile</div>
                                                    <span class="d-none d-md-inline-block">Profile</span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link m-2 tap" id="story-tab" data-bs-toggle="pill" href="#story" role="tab" aria-selected="false">
                                                    <i class="bi bi-clock-history"></i>
                                                    <span class="d-sm-none d-block">Story</span>
                                                    <span class="d-none d-md-inline-block">Story</span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link m-2 tap" id="reel-tab" data-bs-toggle="pill" href="#reel" role="tab" aria-selected="false">
                                                    <i class="bi bi-play"></i>
                                                    <span class="d-sm-none d-block">Reel</span>
                                                    <span class="d-none d-md-inline-block">Reels</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <!-- Photo Tab -->
                                        <div class="tab-pane fade show active" id="photo">
                                            <div class="play-ins text-start">
                                                <div class="play-inshead"><p>Instructions :</p></div>
                                                <ul class="text-start">
                                                    <li><span class="red"></span>Copy the link of the Instagram photo you want to download</li>
                                                    <li><span class="yellow"></span>Visit a trusted Instagram photo downloader website.</li>
                                                    <li><span class="green"></span>Paste the copied URL, and click on the download button.</li>
                                                    <li><span class="blue"></span>Save the downloaded photo to your computer or mobile device.</li>
                                                </ul>
                                            </div>
                                            <form id="photo-download" action="#">
                                                <div class="form-group mt-4">
                                                    <div class="input-group" title="Enter anything url from Instagram">
                                                        <input type="text" class="form-control" placeholder="https://www.instagram.com/p/CQeKRFsrAh1/" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                        <span class="input-group-text" id="basic-addon2">
                                                            <button class="paste-btn"><i class="bi bi-file-earmark"></i> Link Paste</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button id="btn-validate" class="btn btn-download mt-4 action ml-3" title="Click to download">
                                                            <span class="d-sm-inline">Download <i class="bi bi-download"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Video Tab -->
                                        <div class="tab-pane fade" id="video">
                                            <div class="play-ins text-start">
                                                <div class="play-inshead"><p>Instructions :</p></div>
                                                <ul class="text-start">
                                                    <li><span class="red"></span>Copy the link of the Instagram video you want to download</li>
                                                    <li><span class="yellow"></span>Visit a trusted Instagram Video downloader website.</li>
                                                    <li><span class="green"></span>Paste the copied URL, and click on the download button.</li>
                                                    <li><span class="blue"></span>Save the downloaded video to your computer or mobile device.</li>
                                                </ul>
                                            </div>
                                            <form id="video-download" action="#">
                                                <div class="form-group mt-4">
                                                    <div class="input-group" title="Enter anything url from Instagram">
                                                        <input type="text" class="form-control" placeholder="https://www.instagram.com/p/CQeKRFsrAh1/" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                        <span class="input-group-text" id="basic-addon2">
                                                            <button class="paste-btn"><i class="bi bi-file-earmark"></i> Link Paste</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button id="btn-validate" class="btn btn-download mt-4 action ml-3" title="Click to download">
                                                            <span class="d-sm-inline">Download <i class="bi bi-download"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Story Tab -->
                                        <div class="tab-pane fade" id="story">
                                            <div class="play-ins text-start">
                                                <div class="play-inshead"><p>Instructions :</p></div>
                                                <ul class="text-start">
                                                    <li><span class="red"></span>Copy the link of the Instagram story you want to download</li>
                                                    <li><span class="yellow"></span>Visit a trusted Instagram story downloader website.</li>
                                                    <li><span class="green"></span>Paste the copied URL, and click on the download button.</li>
                                                    <li><span class="blue"></span>Save the downloaded story to your computer or mobile device.</li>
                                                </ul>
                                            </div>
                                            <form id="story-download" action="#">
                                                <div class="form-group mt-4">
                                                    <div class="input-group" title="Enter anything url from Instagram">
                                                        <input type="text" class="form-control" placeholder="https://www.instagram.com/p/CQeKRFsrAh1/" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                        <span class="input-group-text" id="basic-addon2">
                                                            <button class="paste-btn"><i class="bi bi-file-earmark"></i> Link Paste</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button id="btn-validate" class="btn btn-download mt-4 action ml-3" title="Click to download">
                                                            <span class="d-sm-inline">Download <i class="bi bi-download"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Reel Tab -->
                                        <div class="tab-pane fade" id="reel">
                                            <div class="play-ins text-start">
                                                <div class="play-inshead"><p>Instructions :</p></div>
                                                <ul class="text-start">
                                                    <li><span class="red"></span>Copy the link of the Instagram reel you want to download</li>
                                                    <li><span class="yellow"></span>Visit a trusted Instagram reel downloader website.</li>
                                                    <li><span class="green"></span>Paste the copied URL, and click on the download button.</li>
                                                    <li><span class="blue"></span>Save the downloaded reel to your computer or mobile device.</li>
                                                </ul>
                                            </div>
                                            <form id="reel-download" action="#">
                                                <div class="form-group mt-4">
                                                    <div class="input-group" title="Enter anything url from Instagram">
                                                        <input type="text" class="form-control" placeholder="https://www.instagram.com/p/CQeKRFsrAh1/" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                                        <span class="input-group-text" id="basic-addon2">
                                                            <button class="paste-btn"><i class="bi bi-file-earmark"></i> Link Paste</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button id="btn-validate" class="btn btn-download mt-4 action ml-3" title="Click to download">
                                                            <span class="d-sm-inline">Download <i class="bi bi-download"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="results" class="d-flex flex-wrap basis-1/3 justify-content-center">
                            <div class="position-relative d-none overflow~~-wrap break-word bg-secondary w-100 mb-6 shadow-lg rounded mt-16">
                                <div class="px-2">
                                    <div class="mb-5 p-2">
                                        <div class="w-full flex justify-center">
                                            <div class="relative">
                                                <img src="download.jpeg" class="shadow-lg rounded-circle d-inline-block align-middle border-0 m-0 ms-0 lg-ms-0 ms-md-0 lg-ms-md-0 max-w-150" />
                                            </div>
                                        </div>

                                        <div class="w-full text-center mt-20">
                                            <div class="text-center mt-2">
                                                <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">sohagsrz</h3>
                                            </div>
                                            <div class="d-flex justify-content-center lg:pt-4 pt-8 pb-0">
                                                <div class="p-3 text-center">
                                                    <span class="text-md font-bold block uppercase tracking-wide text-slate-700">149</span>
                                                    <span class="text-sm text-slate-400">Posts</span>
                                                </div>
                                                <div class="p-3 text-center">
                                                    <span class="text-md font-bold block uppercase tracking-wide text-slate-700">365</span>
                                                    <span class="text-sm text-slate-400">Followers</span>
                                                </div>

                                                <div class="p-3 text-center">
                                                    <span class="text-md font-bold block uppercase tracking-wide text-slate-700">942</span>
                                                    <span class="text-sm text-slate-400">Following</span>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap justify-center">
                                                <div class="w-full px-4 mb-5">
                                                    <div class="hover-bg-yellow-500 w-100 mb-5 user-select-none border-start-4 border-danger bg-warning p-4 font-bold">No Stories!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="py-2 md-p-2 d-none">
                                <div class="max-w-xs rounded-md bg-white-transparent">
                                    <div class="card" style="width: 18rem;">
                                        <img src="download.jpeg" class="card-img-top" alt="Download Photo" />
                                        <div class="card-body">
                                            <a href="#" class="btn btn-primary">Download Photo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="my-12 overflow-hidden rounded-xl bg-white md-flex lg-h-80">
                    <div class="d-flex flex-column justify-content-center p-6 lead-normal md-w-50">
                        <h3 class="mb-6 text-3xl text-4xl font-extrabold tracking-tight text-black text-gray-900 md-text-4xl lg-text-6xl">What Is Instagram Downloader ?</h3>
                        <p class="text-base text-gray-700 sm-mx-auto sm-mt-5 sm-max-w-xl sm-text-lg md-mt-5 md-text-xl lg-mx-0">
                            is the best Instagram Downloader online, that can be used to download Instagram videos in high quality mp4, download Instagram stories and highlights <a href="/" class="text-blue-600">Story Saver</a> with the
                            help of FastDl. Our Instagram Reels downloader can help you to save your favorite Reels videos.
                        </p>
                    </div>
                </div>

                <div class="my-12 overflow-hidden rounded-xl bg-white md-flex lg-h-80">
                    <div class="d-flex flex-column justify-content-center p-6 lead-normal md-w-50">
                        <h3 class="mb-6 text-3xl text-4xl font-extrabold tracking-tight text-black text-gray-900 md-text-4xl lg-text-6xl">How to Save Instagram Stories Anonymously Online?</h3>
                        <p class="text-base text-gray-700 sm-mx-auto sm-mt-5 sm-max-w-xl sm-text-lg md-mt-5 md-text-xl lg-mx-0">
                            is the best Instagram Downloader online, that can be used to download Instagram videos in high quality mp4, download Instagram stories and highlights <a href="/" class="text-blue-600">Story Saver</a> with the
                            help of FastDl. Our Instagram Reels downloader can help you to save your favorite Reels videos.
                        </p>
                        <ol>
                            <li><strong>Copy the link </strong>of the story OR<strong> copy the username </strong>of the person you want to save their stories.<br /></li>

                            <li>click on <strong>Story </strong>tab, and paste the link of the story OR if you want to download Instagram story with username write the username on the box to save the story.</li>

                            <li>
                                choose the story you want to download and click on the download button. All the stories and highlights will show up
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <h2 style="margin: 10px;">FAQ</h2>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Do you have to log in to your Instagram account?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">No you don’t need to log in to your account, the website doesn’t ask for any information from you, so you can download any thing from Instagram anonymously.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Can I copy Instagram bio?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Yes, you can copy Instagram bio by copying the profile link and paste it on the website, then copy the bio.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Does the website support downloading from Insta for pc?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Yes, you can download videos, photos, stories, and reels from the computer, by copying the post link and paste it into the box above and save it, for more information:
                                <a href="#">How to download from Insta on PC</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php include 'footer.php'; ?>
