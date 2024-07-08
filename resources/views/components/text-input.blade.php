@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-gray-800 font-Geologica sm:text-sm rounded-2xl focus:ring-red-700 focus:border-red-700 block w-full p-2.5 dark:bg-white dark:placeholder-gray-400 dark:red-700 dark:focus:ring-red-700 dark:focus:border-red-700']) !!}>
