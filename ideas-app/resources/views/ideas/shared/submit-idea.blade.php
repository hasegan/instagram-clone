@auth
    <h4> {{ trans('ideas.share_your_ideas') }}</h4>
    <div class="row">
        <form action="{{ route('ideas.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea name="ideaContent" class="form-control" id="content" rows="3"></textarea>
                @error('ideaContent')
                    {{-- laravel directly inject the error message --}}
                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="btn btn-dark">{{ trans('ideas.share_idea') }}</button>
            </div>
        </form>
    </div>
@endauth

@guest
    <h4> {{ trans('ideas.login_to_share') }}</h4>
    {{-- <h4> {{ __('ideas.login_to_share') }}</h4> --}}
    {{-- <h4> @lang('ideas.login_to_share')</h4> --}}
@endguest
