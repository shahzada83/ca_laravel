{{-- Tool Tip Code: Start --}}
<div class="ml-2 -my-2 z-30 flex-col md:flex-row flex items-center md:justify-center">
    <!--Code Block for white tooltip starts-->
    <a x-data="{ tooltip: false }" 
        class=" focus:outline-none 
                focus:ring-gray-300 
                rounded-full 
                focus:ring-offset-2 
                focus:ring-2 
                focus:bg-gray-200 
                absolute ml-4 mt-20 md:mt-0">

        <div class="cursor-pointer" 
            x-on:mouseover="tooltip = !tooltip" 
            x-on:mouseout="tooltip = !tooltip">
            
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
            </svg>
        </div>

        <div x-show="tooltip" 
             class="z-20 -mt-20 w-48 
                    absolute transition 
                    overflow-hidden 
                    duration-150 
                    ease-in-out 
                    left-5 ml-5 
                    shadow-lg 
                    bg-brand-mlsblue_light
                    text-white 
                    p-2 rounded-lg">
                    
            <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                        <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                            <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
      
            {!!$slot!!}
            
        </div>
    </a>
</div>
{{-- Tool tip end --}}