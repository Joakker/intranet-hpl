<script setup lang="ts">
import { computed, onUnmounted, ref, type Ref } from 'vue'
import TarjetaSistema from '@/components/TarjetaSistema.vue'

type Sistema = {
  id_sistema: string
  nombre: string
  descripcion: string
  icono: string
  url: string
  id_tipo: number
}

let data: Sistema[]

try {
  const response = await fetch('/api/sistemas')
  const k = await response.json()
  data = Array.isArray(k) ? k : []
} catch (e: unknown) {
  console.error(e)
  data = []
}

const sistemas: Ref<Sistema[]> = ref(data)
const query = ref('')
const categoria = ref('3')

const filteredSistemas = computed(() => filtrarSistemas(query.value.toLowerCase()))

console.table(sistemas.value)

const filtrarSistemas = (query: string) =>
  sistemas.value.filter(({ id_tipo, nombre, descripcion }) => {
    const k = parseInt(categoria.value)
    if (k === 3)
      return nombre.toLowerCase().includes(query) || descripcion.toLowerCase().includes(query)
    else
      return (
        k === id_tipo &&
        (nombre.toLowerCase().includes(query) || descripcion.toLowerCase().includes(query))
      )
  })

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
    <h1 class="titulo text-center text-4xl font-bold" v-reveal-on-scroll>Hospital Penco Lirquén</h1>
    <div class="h-6" />
    <h1 class="titulo text-center text-3xl font-semibold" v-reveal-on-scroll>
      Plataforma de Sistemas
    </h1>
    <div class="h-6" />
    <div class="grid gap-6 mb-12 grid-cols-2">
      <input
        type="text"
        v-model="query"
        placeholder="Buscar sistema..."
        class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        v-reveal-on-scroll
      />
      <select
        id="countries"
        v-model="categoria"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 width-1/2"
        v-reveal-on-scroll
      >
        <option value="3" selected>Todos</option>
        <option value="2">Médico</option>
        <option value="1">Administrativo</option>
      </select>
    </div>
    <TransitionGroup
      id="sistemas-list"
      name="fade"
      tag="div"
      class="grid lg:grid-cols-5 md:grid-cols-2 sm:grid-cols-1 gap-4"
    >
      <TarjetaSistema
        v-for="sistema in filteredSistemas"
        :key="sistema.id_sistema"
        :id="sistema.id_sistema"
        :nombre="sistema.nombre"
        :url="sistema.url"
        :descripcion="sistema.descripcion"
        :icono="sistema.icono"
      />
    </TransitionGroup>
  </div>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition:
    opacity 0.4s ease,
    transform 0.4s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
  transform: scale(0.95);
}
.fade-move {
  will-change: transform;
  transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}

h1.titulo,
input,
select {
  opacity: 0;
  transform: translateX(50px);
}

h1.revealed,
input.revealed,
select.revealed {
  opacity: 1;
  transform: translateX(0);
  transition:
    opacity 0.5s ease-out,
    transform 0.5s ease-out;
}
</style>
