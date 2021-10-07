@extends('layouts.app')

@section('content')
    <div class="container">

        <header>

            <div class="container">

                <div class="profile">

                    <div class="profile-image">

                        {{-- <img src="{{asset($user->avatar)}}" alt=""> --}}
                        <img src="{{ asset($user->avatar) }}" alt="" style="max-width: 60%">

                    </div>

                    <div class="profile-user-settings">

                        <h1 class="profile-user-name">{{ $user->pseudo }}</h1>
                           
                        @if (Auth::user()->id === $user->id)
                        <a type="button" href="{{ route('profile.edit', $user->pseudo) }}"
                            class="btn profile-edit-btn btn">Edit Profile</a>
                        @endif
                        

                        <button class="btn profile-edit-btn btn-primary mb-4">Follow</button>

                        <button class="btn profile-settings-btn mb-4" aria-label="profile settings"><i class="fas fa-cog"
                                aria-hidden="true"></i></button>

                    </div>

                    <div class="profile-stats d-flex">


                        <div href="" class="me-2"><span
                                class="profile-stat-count">{{ count($user->posts) }}</span>
                            post{{ count($user->posts) > 1 ? 's' : '' }}</div>
                        <div href="" class="me-2"><span class="profile-stat-count">188</span> followers</div>
                        <div href="" class="me-2"><span class="profile-stat-count">206</span> following</div>


                    </div>

                    <div class="profile-bio">

                        <p><span class="profile-real-name">{{ $user->pseudo }}</span> {{ $user->biography }}📷✈️🏕️</p>

                    </div>

                </div>
                <!-- End of profile section -->

            </div>
            <!-- End of container -->

        </header>
        @foreach ($user->posts as $post)
            <main>

                <div class="container">

                    <div class="gallery">

                        <div class="gallery-item d-flex flex-wrap" style="max-width: 30%" tabindex="0">

                            <img src="{{ asset($post->photo) }}" class="gallery-image" alt="">

                            <div class="gallery-item-info">

                                <ul>
                                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i
                                            class="fas fa-heart" aria-hidden="true"></i> 56</li>
                                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i
                                            class="fas fa-comment" aria-hidden="true"></i> 2</li>
                                </ul>

                            </div>

                        </div>




                    </div>
                    <!-- End of gallery -->


                </div>
                <!-- End of container -->

            </main>
            @endforeach
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
