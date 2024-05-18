<div>
    @auth
        <form action="{{ route('ideas.comments.store', $idea->id) }}" method="post">
            @csrf
            <div class="mb-2">
                <textarea name="commentContent" class="fs-6 form-control" rows="1"></textarea>
            </div>
            @error('commentContent')
                {{-- laravel directly inject the error message --}}
                <span class="d-block fs-6 text-danger mb-3">{{ $message }}</span>
            @enderror
            <div>
                <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
            </div>
        </form>
    @endauth
    <hr>
    @forelse ($idea->comments as $comment)
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle" src="{{ $comment->user->getImageURL() }}"
                alt="{{ $comment->user->name }}">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('users.show', $comment->user->id) }}">
                        <h6 class="">{{ $comment->user->name }}</h6>
                    </a>
                    <small class="fs-6 fw-light text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    {{ $comment->content }}
            </div>
        </div>
    @empty
        <p class="text-center my-2">No comments found.</p>
    @endforelse
</div>
