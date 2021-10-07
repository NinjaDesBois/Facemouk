<div class="">
    <div class=" instagram-card-header">
    <div class="d-block">
        <div class="d-flex">
            <img src="{{ $post->user->avatar }}" class="instagram-card-user-image" />
            <a class="instagram-card-user-name"
                href="{{ route('home', $post->user->pseudo) }}">{{ $post->user->pseudo }}
            </a>
        </div>
        
        <div>
            <small
                class="">{{ $post->created_at->diffForHumans() }}
            </small>
        </div>
 </div>

</div>

<div class="
                instagram-card-content">
                <div class="p-2 mt-4">
                    <img src="{{ $post->photo }}" style="max-width: 550px;min-width:550px" />

                    <p class="likes">{{ count($post->likes) }} Likes</p>


                    <div class="d-flex">

                        @if ($post->users_likes->contains(Auth::id()))
                            <h4 class="me-3"><i class="fas fa-heart" style="color: red" onclick="like(this)"
                                    value="{{ $post->id }}"></i>
                            </h4>
                        @else
                            <h4 class="me-3"><i class="far fa-heart" style="color: red" onclick="like(this)"
                                    value="{{ $post->id }}"></i>
                            </h4>
                        @endif


                        <h4><i class="far fa-comment"></i></h4>
                    </div>
                    <p><a class="instagram-card-content-user" href="">{{ $post->user->pseudo }}</a> 😱😜❄️
                        {{ $post->description }}
                        <a class="hashtag" href="">#visitkemi</a>
                    </p>
                    <p class="comments">ver los 48 comentarios</p>
                    <br><a class="user-comment" href="">sanguine.j@loaf_made</a> wowwwwww</br>
                    <br><a class="user-comment" href="">spainstakeoverWow</a> 😍</br>
                    <br><a class="user-comment" href="">LaFaFa/a> cool ❄️</br>
                        <hr>
                </div>
        </div>

        <div class="instagram-card-footer">
            <a class="footer-action-icons" href="#"><i class="fa fa-heart-o"></i></a>
            <input class="comments-input" type="text" placeholder="Add your mouk..." />
            <a class="footer-action-icons" href="#"><i class="fa fa-ellipsis-h"></i></a>
        </div>

    </div>
