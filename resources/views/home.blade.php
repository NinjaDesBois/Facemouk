@extends('layouts.app')

@section('content')
<div class="container">
    <header>

        <div class="container">
    
            <div class="profile">
    
                <div class="profile-image" >
    
                    {{-- <img src="{{asset($user->avatar)}}" alt=""> --}}
                    <img src="{{asset('image/ninja.jpg')}}" alt="" style="max-width: 60%">
    
                </div>
    
                <div class="profile-user-settings">
    
                    <h1 class="profile-user-name">{{$user->pseudo}}</h1>
    
                    <a type="button" href="{{route('profile.edit', $user->pseudo)}}" class="btn profile-edit-btn btn">Edit Profile</a>
                    
                    <button class="btn profile-edit-btn btn-primary">Follow</button>
    
                    <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
    
                </div>
    
                <div class="profile-stats d-flex">
    
                    
                      <div href="" class="me-2"><span class="profile-stat-count">164</span> posts</div> 
                      <div href="" class="me-2"><span class="profile-stat-count">188</span> followers</div> 
                      <div href="" class="me-2"><span class="profile-stat-count">206</span> following</div> 
                    
    
                </div>
    
                <div class="profile-bio">
    
                    <p><span class="profile-real-name">{{$user->pseudo}}</span> {{$user->biography}}📷✈️🏕️</p>
    
                </div>
    
            </div>
            <!-- End of profile section -->
    
        </div>
        <!-- End of container -->
    
    </header>
    
    <main>
    
        <div class="container">
    
            <div class="gallery">
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/cosmos.jpg.crdownload')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/nft-artjpg.jpg')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/bull.jpg')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-type">
    
                        <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
    
                    </div>
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 42</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/bit.jpg_large')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-type">
    
                        <span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>
    
                    </div>
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 38</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/artbit.jpg')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-type">
    
                        <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
    
                    </div>
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 47</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/beeple.jpg')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 94</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 3</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/nft-artjpg.jpg')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-type">
    
                        <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
    
                    </div>
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 52</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 4</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/desdev.gif')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 66</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="gallery-item" tabindex="0">
    
                    <img src="{{asset('image/pig.jpg')}}" class="gallery-image" alt="">
    
                    <div class="gallery-item-type">
    
                        <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
    
                    </div>
    
                    <div class="gallery-item-info">
    
                        <ul>
                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 45</li>
                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
                        </ul>
    
                    </div>
    
                </div>
    
    
            
    
            </div>
            <!-- End of gallery -->
    
            <div class="loader"></div>
    
        </div>
        <!-- End of container -->
    
    </main>
</div>
@endsection
{{-- Full-page view:

https://codepen.io/GeorgePark/full/VXrwOP/

*/

// const posts = document.querySelectorAll('.gallery-item');

// posts.forEach(post => {
// 	post.addEventListener('click', () => {
// 		//Get original image URL
// 		const imgUrl = post.firstElementChild.src.split("?")[0];
// 		//Open image in new tab
// 		window.open(imgUrl, '_blank');
// 	});
// }); --}}
