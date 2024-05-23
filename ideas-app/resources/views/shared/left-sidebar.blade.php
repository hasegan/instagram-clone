<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="{{ Route::is('dashboard') ? 'text-white bg-primary rounded' : '' }} nav-link"
                    href="{{ route('dashboard') }}">
                    <span>{{ trans('ideas.home') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::is('feed') ? 'text-white bg-primary rounded' : '' }} nav-link"
                    href="{{ route('feed') }}">
                    <span>{{ trans('ideas.feed') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::is('terms') ? 'text-white bg-primary rounded' : '' }} nav-link"
                    href="{{ route('terms') }}">
                    <span>{{ trans('ideas.terms') }}</span></a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class=" @if (app()->getLocale(session()->get('locale')) == 'en') text-white bg-primary rounded @endif btn btn-link btn-sm"
            href="{{ route('lang', 'en') }}">EN</a>
        <a class="@if (app()->getLocale(session()->get('locale')) == 'ro') text-white bg-primary rounded @endif btn btn-link btn-sm"
            href="{{ route('lang', 'ro') }}">RO</a>

    </div>
</div>
