<script setup lang="ts">
import { RouterView } from 'vue-router'
import BarraSuperior from './components/BarraSuperior.vue'
import BarraLateral from './components/BarraLateral.vue'
</script>

<template>
  <Suspense>
    <BarraLateral />
  </Suspense>
  <div class="sm:ml-64">
    <BarraSuperior />
    <Suspense>
      <RouterView />
    </Suspense>
  </div>
</template>
