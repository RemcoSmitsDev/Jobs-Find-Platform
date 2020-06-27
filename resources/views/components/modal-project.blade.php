    <div class="bg-opacity-50 bg-black z-50 hidden w-screen h-screen fixed inset-0" id="yourModal{{$id}}" tabindex="-1"
        role="dialog" aria-labelledby="myModalLabel">
        <div class="h-full flex justify-center items-center" role="document">
            <div class="px-6 py-4 w-full max-w-lg modal-content rounded-lg bg-white shadow-lg">
                <div class="flex justify-between items-center modal-header">
                    <h4 class="text-xl font-semibold tracking-wider">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h-48 w-48">
                        <img class="h-full w-auto" src="{{ $image }}" alt="{{ $title }}">
                    </div>
                    <div>
                        <pre class="whitespace-pre-wrap">{{ $description }}</pre>
                    </div>

                </div>

            </div>
        </div>
    </div>
