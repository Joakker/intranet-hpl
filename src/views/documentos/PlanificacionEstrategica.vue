<script lang="ts" setup>
import { onUnmounted } from 'vue'

const vRevealOnScroll = {
  mounted: (el: HTMLElement) => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            el.classList.add('revealed')
            observer.unobserve(el)
          }
        })
      },
      { threshold: 0.1 },
    )
    observer.observe(el)

    onUnmounted(() => observer.disconnect())
  },
}
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="planificacion-estrategica text-center text-3xl font-semibold" v-reveal-on-scroll>
      Planificación Estratégica
    </h1>
    <div class="h-6" />
    <div class="flex w-full items-center justify-center">
      <video class="planificacion-estrategica" v-reveal-on-scroll controls>
        <source
          src="http://10.4.49.116/sist/videos/Planificaci%C3%B3n%20estrat%C3%A9gica/p_estrategica.mp4"
        />
      </video>
    </div>
  </div>
</template>

<style scoped>
h1.planificacion-estrategica,
video.planificacion-estrategica {
  opacity: 0;
  transform: translateX(50px);
}

h1.revealed,
video.revealed {
  opacity: 1;
  transform: translateX(0);
  transition:
    opacity 0.5s ease-out,
    transform 0.5s ease-out;
}
</style>
