<script lang="ts" setup>
import { onMounted } from 'vue'

const getImagen = (i: number) => `/info/${i}.png`

onMounted(() => {
  const canvas = document.getElementById('canvas-cumple') as HTMLCanvasElement
  const ctx = canvas.getContext('2d') as CanvasRenderingContext2D
  const img = new Image()
  img.src = '/cumple/1.jpg'
  img.onload = () => ctx.drawImage(img, 0, 0, canvas.width, canvas.height)
})
</script>

<template>
  <div id="carrusel-informaciones" class="relative" data-carousel="slide">
    <canvas id="canvas-cumple" class="absolute w-full hidden duration-700" data-carousel-item>
      Tu navegador no soporta el elemento canvas, no puedes ver los cumpleaños
    </canvas>
    <div v-for="i in 6" :key="i" class="hidden duration-700 ease-in-out" data-carousel-item>
      <img :src="getImagen(i)" :alt="`Imagen ${i}`" class="absolute block w-full object-contain" />
    </div>
  </div>
</template>
