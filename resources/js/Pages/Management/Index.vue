<script setup >
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

</script>
<template>
  <AppLayout>
    <div class="m-6 p-6 ">
      <Link :href="route('manangement.user.index')">
      <button class="text-center w-28 p-6 rounded-sm bg-white ">
        <v-icon size="50">mdi-account-group</v-icon>
        <p class="mt-2 font-bold ">Usuários</p>
      </button>
      </Link>
    </div>
  </AppLayout>

</template>


<style>
</style>
