<x-guest-layout>
    @include('shared.navbar')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border p-4 text-center rounded-3">
                            <h1>{{ $category->title }}</h1>
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots m-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i>
                                            Home</a></li>
                                    <li class="breadcrumb-item active">All post</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative pt-0">
            <div class="container" data-sticky-container>
                <div class="row">
                    <!-- Main Post START -->
                    <div class="col-lg-9">

                        @foreach ($posts as $post)
                            <div class="card mb-4">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img class="rounded-3" src="{{$post->thumbnail}}" alt="">
                                    </div>
                                    <div class="col-md-7 mt-3 mt-md-0">
                                        <a href="" class="badge text-bg-danger mb-2"><i
                                                class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                        <h3><a href="{{$post->link}}" class="btn-link stretched-link text-reset">{{$post->title}}</a></h3>
                                        <p>{{$post->excerpt}}</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="{{$post->author->profile_photo_url}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                class="stretched-link text-reset btn-link">{{$post->author->name}}</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Jan 22, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{$posts->links()}}

                    </div>
                    <!-- Main Post END -->

                    <!-- Sidebar START -->
                    <div class="col-lg-3 mt-5 mt-lg-0">
                        <div data-sticky data-margin-top="80" data-sticky-for="767">
                            <!-- Trending topics widget START -->
                            <div>
                                <h4 class="mb-3">Trending topics</h4>
                                <!-- Category item -->
                                <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                    style="background-image:url(assets/images/blog/4by3/01.jpg); background-position: center left; background-size: cover;">
                                    <div class="bg-dark-overlay-4 p-3">
                                        <a href="#"
                                            class="stretched-link btn-link fw-bold text-white h5">Travel</a>
                                    </div>
                                </div>
                                <!-- Category item -->

                                <!-- View All Category button -->
                                <div class="text-center mt-3">
                                    <a href="#" class="fw-bold text-muted text-primary-hover"><u>View all
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
                                        <img src="assets/images/adv.png" alt="">
                                    </a>
                                    <div class="smaller text-end mt-2">ads via <a href="#"
                                            class="text-muted"><u>Bootstrap</u></a></div>
                                </div>
                                <!-- ADV widget END -->
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar END -->
                </div> <!-- Row end -->
            </div>
        </section>
        <!-- =======================
Main content END -->



    </main>
    <!-- **************** MAIN CONTENT END **************** -->


    @include('shared.footer')
</x-guest-layout>
