<x-guest-layout>
    @include('shared.navbar')
    @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    {{ $posts->links() }}

    <section class="position-relative">
        <div class="container" data-sticky-container>
            <div class="row">
                <!-- Main Post START -->
                <div class="col-lg-9">
                    <!-- Title -->
                    <div class="mb-4">
                        <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>最新文章</h2>
                        <p>最新的精选文章</p>
                    </div>
                    <div class="row gy-4">
                        <!-- Card item START -->
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="assets/images/blog/4by3/01.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-warning mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <!-- Sponsored Post -->
                                    <a href="#!" class="mb-0 text-body small" tabindex="0" role="button"
                                        data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus"
                                        data-bs-placement="top"
                                        data-bs-content="You're seeing this ad because your activity meets the intended audience of our site.">
                                        <i class="bi bi-info-circle ps-1"></i> Sponsored
                                    </a>
                                    <h4 class="card-title mt-2"><a href="post-single.html"
                                            class="btn-link text-reset fw-bold">12 worst types of business accounts you
                                            follow on Twitter</a></h4>
                                    <p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has
                                        all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment
                                        alteration to</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/01.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                            class="stretched-link text-reset btn-link">Samuel</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jan 22, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="assets/images/blog/4by3/06.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay Top -->
                                        <div class="w-100 mb-auto d-flex justify-content-end">
                                            <div class="text-end ms-auto">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle"
                                                    title="This post has video"><i class="fas fa-video"></i></div>
                                            </div>
                                        </div>
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html"
                                            class="btn-link text-reset fw-bold">Dirty little secrets about the business
                                            industry</a></h4>
                                    <p class="card-text">Place voice no arises along to. Parlors waiting so against me
                                        no. Wishing calling is warrant settled was lucky. Express besides it present if
                                        at an opinion visitor.</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/02.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                            class="stretched-link text-reset btn-link">Dennis</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Mar 07, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="assets/images/blog/4by3/03.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-success mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Gadgets</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html"
                                            class="btn-link text-reset fw-bold">Bad habits that people in the industry
                                            need to quit</a></h4>
                                    <p class="card-text">For who thoroughly her boy estimating conviction. Removed
                                        demands expense account in outward tedious do. Particular way thoroughly
                                        unaffected</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/03.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                            class="stretched-link text-reset btn-link">Bryan</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jun 17, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="assets/images/blog/4by3/04.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-primary mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html"
                                            class="btn-link text-reset fw-bold">Around the web: 20 fabulous
                                            infographics about business</a></h4>
                                    <p class="card-text">Projection favorable Mrs can be projecting own. Thirty it
                                        matter enable become admire in giving. See resolved goodness felicity shy
                                        civility domestic had but.</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <div class="avatar-img rounded-circle bg-success">
                                                            <span
                                                                class="text-white position-absolute top-50 start-50 translate-middle fw-bold small">SL</span>
                                                        </div>
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                            class="stretched-link text-reset btn-link">Billy</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Dec 29, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <!-- <img class="card-img" src="assets/images/blog/4by3/05.jpg" alt="Card image"> -->
                                    <div class="card-image position-relative">
                                        <img class="card-img" src="assets/images/blog/4by3/05.jpg" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay -->
                                            <div class="w-100 my-auto">
                                                <!-- Audio START -->
                                                <div class="player-wrapper bg-light rounded">
                                                    <audio class="player-audio" crossorigin>
                                                        <source src="https://postimg.aliavv.com/mbp16/ekdxn.mp3" type="audio/mp3">
                                                    </audio>
                                                </div>
                                                <!-- Audio END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html"
                                            class="btn-link text-reset fw-bold">7 common mistakes everyone makes while
                                            traveling</a></h4>
                                    <p class="card-text">Drawings offended yet answered Jennings perceive laughing six
                                        did far. Rooms oh fully taken by worse do. Points afraid but may end law lasted.
                                    </p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/05.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                            class="stretched-link text-reset btn-link">Jacqueline</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Nov 11, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="assets/images/blog/4by3/12.jpg" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="post-single.html"
                                            class="btn-link text-reset fw-bold">5 investment doubts you should
                                            clarify</a></h4>
                                    <p class="card-text">Was out laughter raptures returned outweigh. Luckily cheered
                                        colonel I do we attack highest enabled. Tried law yet style child. The bore of
                                        true of no be deal.</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/06.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                            class="stretched-link text-reset btn-link">Carolyn</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Sep 01, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Load more START -->
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="btn btn-primary-soft">Load more post <i
                                    class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                        </div>
                        <!-- Load more END -->
                    </div>
                </div>
                <!-- Main Post END -->
                <!-- Sidebar START -->
                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">

                        <!-- Social widget START -->
                        <div class="row g-2">
                            <div class="col-4">
                                <a href="#"
                                    class="bg-facebook rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-facebook-square fs-5 mb-2"></i>
                                    <h6 class="m-0">1.5K</h6>
                                    <span class="small">Fans</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#"
                                    class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-instagram fs-5 mb-2"></i>
                                    <h6 class="m-0">1.8M</h6>
                                    <span class="small">Followers</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-youtube-square fs-5 mb-2"></i>
                                    <h6 class="m-0">22K</h6>
                                    <span class="small">Subs</span>
                                </a>
                            </div>
                        </div>
                        <!-- Social widget END -->

                        <!-- Trending topics widget START -->
                        <div>
                            <h4 class="mt-4 mb-3">Trending topics</h4>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 "
                                style="background-image:url(assets/images/blog/4by3/01.jpg); background-position: center left; background-size: cover;">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                style="background-image:url(assets/images/blog/4by3/02.jpg); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#"
                                        class="stretched-link btn-link fw-bold text-white h5">Business</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                style="background-image:url(assets/images/blog/4by3/03.jpg); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#"
                                        class="stretched-link btn-link fw-bold text-white h5">Marketing</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                style="background-image:url(assets/images/blog/4by3/04.jpg); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#"
                                        class="stretched-link btn-link fw-bold text-white h5">Photography</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                style="background-image:url(assets/images/blog/4by3/05.jpg); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">Sports</a>
                                </div>
                            </div>
                            <!-- View All Category button -->
                            <div class="text-center mt-3">
                                <a href="#" class="fw-bold text-body text-primary-hover"><u>View all
                                        categories</u></a>
                            </div>
                        </div>
                        <!-- Trending topics widget END -->

                        <div class="row">
                            <!-- Recent post widget START -->
                            <div class="col-12 col-sm-6 col-lg-12">
                                <h4 class="mt-4 mb-3">Recent post</h4>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="assets/images/blog/4by3/thumb/01.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6><a href="post-single-2.html"
                                                    class="btn-link stretched-link text-reset fw-bold">The pros and
                                                    cons of business agency</a></h6>
                                            <div class="small mt-1">May 17, 2022</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="assets/images/blog/4by3/thumb/02.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6><a href="post-single-2.html"
                                                    class="btn-link stretched-link text-reset fw-bold">5 reasons why
                                                    you shouldn't startup</a></h6>
                                            <div class="small mt-1">Apr 04, 2022</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="assets/images/blog/4by3/thumb/03.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6><a href="post-single-2.html"
                                                    class="btn-link stretched-link text-reset fw-bold">Ten questions
                                                    you should answer truthfully.</a></h6>
                                            <div class="small mt-1">Jun 30, 2022</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent post item -->
                                <div class="card mb-3">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <img class="rounded" src="assets/images/blog/4by3/thumb/04.jpg"
                                                alt="">
                                        </div>
                                        <div class="col-8">
                                            <h6><a href="post-single-2.html"
                                                    class="btn-link stretched-link text-reset fw-bold">Five
                                                    unbelievable facts about money.</a></h6>
                                            <div class="small mt-1">Nov 29, 2022</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent post widget END -->

                            <!-- ADV widget START -->
                            <div class="col-12 col-sm-6 col-lg-12 my-4">
                                <a href="#" class="d-block card-img-flash">
                                    <img src="https://blogzine.webestica.com/assets/images/adv.png" alt="">
                                </a>
                                <div class="smaller text-end mt-2">ads via <a href="#"
                                        class="text-body"><u>Bootstrap</u></a></div>
                            </div>
                            <!-- ADV widget END -->
                        </div>
                    </div>
                </div>
                <!-- Sidebar END -->
            </div> <!-- Row end -->
        </div>
    </section>

    <div class="container">
        <div class="border-bottom border-primary border-2 opacity-1"></div>
    </div>

    @include('shared.footer')
</x-guest-layout>
