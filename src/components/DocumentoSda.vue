<script lang="ts" setup>
import { onUnmounted } from 'vue'

export type Documento = {
  nombre: string
  url?: string
}

const props = defineProps<{
  nombre: string
  documentos: Documento[]
}>()

const vRevealOnScroll = {
  mounted: (el: HTMLElement) => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            el.classList.add('revealed')
            console.log(el.classList)
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
  <div
    v-reveal-on-scroll
    class="documento-sda popup-hover w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8"
  >
    <div class="flex items-center justify-between mb-4">
      <h5 class="text-xl font-bold leading-none text-gray-900">{{ props.nombre }}</h5>
    </div>
    <div class="flow-root">
      <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
        <li
          v-for="documento in props.documentos"
          class="py-3 sm:py-4 flex items-center"
          v-bind:key="documento.nombre"
        >
          <a
            v-if="documento.url"
            class="popup-hover group rounded-lg flex items-center"
            :href="documento.url"
            target="_blank"
          >
            <span class="font-medium flex-1 ms-3 text-gray-900 hover:text-blue-500"
              >{{ documento.nombre }}
            </span>
          </a>
          <span v-else class="font-medium flex-1 ms-3 text-gray-900 hover:text-blue-500"
            >{{ documento.nombre }}
          </span>
        </li>
      </ul>
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
  transform: scale(1.04);
  background-color: lightblue;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

a.popup-hover {
  transition:
    transform 0.3s ease-in-out,
    color 0.3s ease-in-out;
}
a.popup-hover:hover {
  transform: translateX(20px);
  color: #111827;
}

div.documento-sda {
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
