<template>
  <div class="antialiased text-gray-600">
    <div class="bg-gray-100">
      <div class="max-w-screen-lg mx-auto px-3 py-6">
        <div class="flex flex-wrap justify-between items-center">
          <div class="">
            <a class="" href="/demo/nextjs-landing-page/">
              <span class="text-gray-900 inline-flex items-center font-semibold text-3xl">
                <svg class="text-emerald-500 stroke-current mr-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M0 0h24v24H0z" stroke="none"></path>
                  <rect x="3" y="12" width="6" height="8" rx="1"></rect>
                  <rect x="9" y="8" width="6" height="12" rx="1"></rect>
                  <rect x="15" y="4" width="6" height="16" rx="1"></rect>
                  <path d="M4 20h14"></path>
                </svg>Technical Test </span>
            </a>
          </div>
          <span class="text-2xl text-gray-900">Muhammad Nasrulloh</span>
        </div>
      </div>
      <div class="max-w-screen-lg mx-auto px-3 pt-20 pb-32">
        <header class="text-center">
          <h1 class="text-5xl text-gray-900 font-bold whitespace-pre-line leading-hero">Welcome To Product Management <span class="text-emerald-500">PT. Toko Ritel Rumah Tangga</span>
          </h1>
          <div class="text-2xl mt-4 mb-16">Technical Test PT Toko Ritel Rumah Tangga By: Muhammad Nasrulloh.</div>
          <router-link to="/login" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">
            <div class="btn btn-xl bg-emerald-500 p-6 inline-block text-white rounded-lg font-bold">Login To Dashboard Access</div>
          </router-link>
        </header>
      </div>
    </div>
  </div>
</template>

<script>


import {defineComponent} from "vue";
import {trans} from "@/helpers/i18n";

export default defineComponent( {
    name: "LandingPage",
    setup() {
        return {
            trans
        }
    }
});
</script>
