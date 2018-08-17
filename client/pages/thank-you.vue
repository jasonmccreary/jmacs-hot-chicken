<template>
  <main-layout>
  <div class="max-w-md bg-white shadow-lg text-grey-darkest rounded-lg mx-auto p-8 mb-12">
    <h2 class="text-3xl font-bold text-center mb-6">Thank you!</h2>
    <p class="text-xl font-normal leading-normal text-center mb-6">We're pluckin' that mothercluckin' bird right now…<br><br><strong>Bring your credit card</strong> to pick up your order. Kind of like Redbox. But you won't get a DVD.</p>
  </div>
  </main-layout>
</template>

<script>
  import MainLayout from '../layouts/Main.vue'

  export default {
    components: {
      MainLayout
    }
  }
</script>

<style>
#tagline {
  display: none;
}
</style>
