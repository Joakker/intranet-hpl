<script lang="ts" setup>
const getImagen = (i: number) => new URL(`../images/info/${i}.png`, import.meta.url).href
</script>

<template>
  <div id="carrusel-informaciones" class="relative" data-carousel="slide">
    <div v-for="i in 6" :key="i" class="hidden duration-700 ease-in-out" data-carousel-item>
      <img :src="getImagen(i)" :alt="`Imagen ${i}`" class="absolute block w-full object-contain" />
    </div>
  </div>
</template>
