 <!-- Users chart card -->
 <x-card class="transition-shadow border rounded-lg hover:shadow-lg">
     <div class="flex items-start">
         <div class="flex flex-col flex-shrink-0 space-y-2">
             <span class="text-gray-400">{{ $label }}</span>
             <span class="text-lg font-semibold">{{ $subLabel }}</span>
         </div>

         {{ $slot }}

     </div>
     @isset($footer)
         {{ $footer }}
     @endisset
 </x-card>
