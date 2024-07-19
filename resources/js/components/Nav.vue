<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="flex justify-between w-full bg-zinc-50 text-[#1e1e1e] p-4 border-b-2 border-gray-400">
        <Link href="#"><span class="font-semibold text-xl tracking-tight">Title</span></Link>
          <div class="md:items-center md:w-auto flex">
            <div class="md:flex hidden">
              <a class="block md:text-[#1e1e1e] mr-4" href="https://www.ipn.mx/normatividad/">Normatividad</a>
              <Link class="block md:text-[#1e1e1e] mr-4" href="#">Link 2</Link>
              <Link class="block md:text-[#1e1e1e] mr-4" href="#">Link 3</Link>
              <Link class="block md:text-[#1e1e1e] mr-4" href="#">Link 4</Link>
            </div>
            <!-- <div class="flex text-sm">
                <a class="p-2 ml-2 bg-white text-teal-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-gray-100" href="#">Login</a>
              <a class="p-2 ml-2 bg-teal-500 text-gray-100 font-semibold leading-none border border-teal-600 rounded hover:border-transparent hover:bg-teal-600" href="#">Sign up</a>
            </div> -->
          </div>
      </nav>
</template>