<x-app-layout>

    <style>
        .error-page {
            min-height: 91vh;
            background: linear-gradient(45deg, #4E39F7 0%, #7C86FF 100%);
        }

        .error-container {
            max-width: 600px;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 900;
            background: linear-gradient(to right, #fff, rgba(255, 255, 255, 0.5));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            /*animation: pulse 2s infinite;*/
        }

        .error-message {
            color: rgba(255, 255, 255, 0.9);
        }

        .btn-glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 0 84px -8px rgba(0, 0, 0, 0.5);
        }

        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.3);
            color: white;
        }
    </style>


    <div class="scrollbar-hidden">
        <div class="error-page d-flex align-items-center justify-content-center">
            <div class="error-container text-center p-4">
                <h1 class="error-code mb-0">500</h1>
                <h2 class="display-6 error-message mb-3">Server Error</h2>
                <p class="lead error-message mb-5">Internal Server Error, please ask a developer to check the issue.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ auth()->check() ? route('dashboard') : route('welcome') }}" class="btn btn-glass px-4 py-2">Return Home</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
