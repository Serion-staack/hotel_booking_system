@extends('dashboard.layouts.app')

@section('content')
    <div class="container max-w-3xl mx-auto">
        <div class="bg-white shadow rounded-2xl p-6">
            <h1 class="text-2xl font-bold mb-2">Terms & Conditions ({{ $version }})</h1>
            <p class="text-sm text-gray-600 mb-6">You must accept to continue.</p>

            <div id="terms-content" class="prose max-h-[50vh] overflow-y-auto select-none">
                <p>
                    Welcome to System Book Hotel. By proceeding, you agree not to share confidential
                    information. Unauthorized capture or distribution is prohibited.
                </p>
            </div>

            <form method="POST" action="{{ route('terms.accept') }}" class="mt-6">
                @csrf
                <button type="submit" class="px-4 py-2 rounded-xl bg-black text-white">
                    I Agree & Continue
                </button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('keydown', function (e) {
            if (e.ctrlKey && e.key.toLowerCase() === 'p') {
                e.preventDefault();
                alert('Printing is disabled until you accept the Terms.');
            }
            if (e.key === 'PrintScreen') {
                alert('Screenshots are discouraged until you accept the Terms.');
                navigator.clipboard?.writeText?.('');
            }
        });
        document.addEventListener('contextmenu', e => e.preventDefault());
        document.addEventListener('copy', e => {
            e.preventDefault();
            alert('Copy is disabled until you accept the Terms.');
        });
    </script>
@endpush

@push('styles')
    <style>
        @media print { body { display: none !important; } }
        #terms-content, #terms-content * { user-select: none; }
    </style>
@endpush
