<!DOCTYPE html>
<html lang="en">
    @include('components.head')
    <body>
        @include('components.preloader')

        <div class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content">
                            <img src="{{ asset('assets/images/404.jpg') }}" alt="404">
                            <h3>Page Not Found</h3>
                            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                            <a href="{{ route('home') }}" class="default-btn btn-bg1 border-radius-5">Go To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.scripts')
    </body>
</html>
