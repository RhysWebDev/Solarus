<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden flex items-center justify-center w-full h-full">
    <div class="absolute top-0 left-0 right-0 bottom-0 bg-transparent-color"></div>
    <div class="relative bg-white rounded-lg shadow max-w-[1357px] overflow-scroll h-full md:h-auto ">
        <button type="button"
            class="float-right text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="defaultModal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
        <!-- Modal header -->
        <div class="flex flex-col items-center justify-center p-4 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-black ">
                Book a FREE no obligation survey
            </h3>
            <p class="text-center text-black">Fill in your details below and we will visit your home or workplace to
                give
                you a fully comprehensive quote.</p>

        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6 popup_form">
            @php echo do_shortcode('[fluentform id="3"]') @endphp
        </div>
    </div>
</div>
