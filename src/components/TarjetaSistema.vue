<script lang="ts" setup>
import { vRevealOnScroll } from '@/utils/fade'

const props = defineProps(['id', 'nombre', 'descripcion', 'url', 'icono'])
</script>

<template>
  <div class="relative tarjeta-sistema" v-reveal-on-scroll>
    <div
      :id="`card-` + props.id"
      :data-tooltip-target="'tooltip-card' + props.id"
      class="max-w-sm h-full p-6 bg-tarjetaback border rounded-lg shadow-sm border-tarjetaborde popup-hover"
    >
      <a :href="props.url" target="_blank" class="w-full h-full">
        <img class="mx-auto" :src="props.icono" :alt="props.icono" width="50" />
        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-tarjetatexto">
          {{ props.nombre }}
        </h5>
      </a>
    </div>
    <div
      :id="'tooltip-card' + props.id"
      role="tooltip"
      class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-tarjetadesc transition-opacity duration-300 bg-tarjetahdesc rounded-lg opacity-0 tooltip"
    >
      {{ props.descripcion }}
    </div>
  </div>
</template>

<style scoped>
div.popup-hover {
  transition:
    transform 0.3s ease-in-out,
    background-color 0.3s ease-in-out;
}

div.popup-hover:hover {
  transform: scale(1.05);
  background-color: var(--color-tarjetahback);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

div.tarjeta-sistema {
  opacity: 0;
  transform: translateX(50px);
}

div.revealed {
  opacity: 1;
  transform: translateX(0);
  transition:
    opacity 0.5s ease-out,
    transform 0.5s ease-out;
}
</style>
