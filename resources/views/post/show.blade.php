@extends('templates.index')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">   
@endsection
@section('content')
<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">

            <div class="title-item">
                <div class="title-icon"></div>
                <div class="title-text">{{$post->title}} </div>
                <div class="title-text-2">{{$post->created_at}}</div>
            </div>


            <div class="work">
                <figure class="white">
                    <img src="{{ asset('storage/'. $post->image)}}" alt="" />

                </figure>

                <div class="wrapper-text-description">


                    <div class="wrapper-file">
                        <div class="icon-file"><img src="{{ asset('storage/'. $post->category->icone)}}" alt="" width="21" height="21" /></div>
                        <div class="text-file">Photoshop</div>
                    </div>

                    <div class="wrapper-weight">
                        <div class="icon-weight"><img src="{{ asset('assets/img/icon-weight.png')}}" alt="" width="20" height="23" /></div>
                        <div class="text-weight">23 Mo</div>
                    </div>

                    <div class="wrapper-desc">
                        <div class="icon-desc"><img src="{{ asset('assets/img/icon-desc.png')}}" alt="" width="24" height="24" /></div>
                        <div class="text-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </div>
                    </div>

                    <div class="wrapper-download">
                        <div class="icon-download"><img src="{{ asset('assets/img/icon-download.png')}}" alt="" width="19" height="26" /></div>
                        <div class="text-download"><a href="#"><b>Download</b></a></div>
                    </div>

                    <div class="wrapper-morefrom">
                        <div class="text-morefrom">More from .psd</div>
                        <div class="image-morefrom">
                        @include('post._index', ['posts' => \App\Models\Post::where('category_id',"=",$post->category_id)->inRandomOrder()->take(4)->get()])
                            
                        </div>
                    </div>

                </div>

                <div class="post-reply">
                    <div id="title-post-send">
                        <hr />
                        <h2>Your comments</h2>
                    </div>


                </div>
                <div id="commentsShow">
                    @include('comment._index', ['comments'=> $post->comments])
                </div>

                

                <div class="post-send">
                    <div id="main-post-send">
                        <div id="title-post-send">Add your comment</div>
                        <form id="contact" method="get" action="{{ route('ajax.addComment') }}">
                            <fieldset>
                                <p><textarea id="commentContent" name="content" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
                            </fieldset>
                            <div style="text-align:center;"><input type="submit" name="send" value="Envoyer" /></div>
                            <input type="hidden" name="postID" id="postID" value="{{$post->id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
        </div>
    </div>
    @endsection
    @section('script')
        <script src="{{ asset('assets/js/addComment.js')}}"></script>
    @stop