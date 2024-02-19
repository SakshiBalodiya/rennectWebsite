<div class="header">
    @include('layouts.header')
</div>
<div class="top-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 blog_img_col">
                <h1 style="color:#000; font-size:28px;" class="mt-5 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 blog_img_col">
                <img src="{{ asset('images\blog-img.png') }}" alt="blog-img" class="blog-img">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8  mt-5">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the
                    1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                    recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <h2 class="mt-5 mb-5">Lorem Ipsum is simply dummy text ?</h2>
                <img src="{{ asset('images\blog-img2.png') }}" alt="blog-img2" class="blog-img2 mt-1">
                <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 
                    1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including versions of 
                    Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 
                    1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including versions 
                    of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting 
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 
                    1500s, when an unknown printer took a galley of type and scrambled it to make a 
                    type specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
                    with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-lg-4 border-left mt-5" style="background-size: 100%; background-repeat: no-repeat;">
                <div class="widget widget-post" style="background-size: 100%; background-repeat: no-repeat;margin-left:10px;">
                    <h4>Recent Posts</h4>
                    <div class="small-border" style="background-size: 100%; background-repeat: no-repeat;"></div>
                    <ul class="de-bloglist-type-1">
                        <li>
                            <div class="d-image" style="background-size: 100%; background-repeat: no-repeat;">
                                <img src="{{ asset('images\recent-blogimg1.png') }}" alt="">
                            </div>
                            <div class="d-content" style="background-size: 100%; background-repeat: no-repeat;">

                                <p>Lorem Ipsum is simply dummy text of the printing.</p>

                                <div class="d-date" style="background-size: 100%; background-repeat: no-repeat;">January 15, 2023</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-image" style="background-size: 100%; background-repeat: no-repeat;">
                                <img src="{{ asset('images\recent-blogimg2.png') }}" alt="">
                            </div>
                            <div class="d-content" style="background-size: 100%; background-repeat: no-repeat;">

                                <p>Lorem Ipsum is simply dummy text of the printing.</p>

                                <div class="d-date" style="background-size: 100%; background-repeat: no-repeat;">January 15, 2023</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-image" style="background-size: 100%; background-repeat: no-repeat;">
                                <img src="{{ asset('images\recent-blogimg3.png') }}" alt="">
                            </div>
                            <div class="d-content" style="background-size: 100%; background-repeat: no-repeat;">

                                <p>Lorem Ipsum is simply dummy text of the printing.</p>

                                <div class="d-date" style="background-size: 100%; background-repeat: no-repeat;">January 15, 2023</div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer>
    @include('layouts.footer')
</footer>
</div>
