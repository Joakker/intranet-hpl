<script lang="ts" setup>
import { onMounted, onUnmounted } from 'vue'
import { initFlowbite } from 'flowbite'
import { RouterLink } from 'vue-router'

onMounted(() => initFlowbite())

const documentos = [
  { path: '/documentos/sda', nombre: 'Subdirección Administrativa' },
  { path: '/documentos/sdm', nombre: 'Subdirección Médica' },
  { path: '/documentos/sdp', nombre: 'Subdirección de las Personas' },
  { path: '/documentos/cpr', nombre: 'Comité Paritario' },
  { path: '/documentos/upc', nombre: 'Unidad de Planificación y Control' },
  { path: '/documentos/ple', nombre: 'Planificación Estratégica' },
]

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
  <nav class="barra-superior border-gray-200 bg-gray-900" v-reveal-on-scroll>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="../images/logo.png" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white"
          >Hospital de Penco-Lirquén</span
        >
      </a>
      <button
        data-collapse-toggle="navbar-default"
        type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 17 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15"
          />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 bg-gray-800 md:bg-gray-900 border-gray-700"
        >
          <li>
            <RouterLink to="/" class="block py-2 px-3 text-white">Inicio</RouterLink>
          </li>
          <li>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
              <li>
                <button
                  id="dropdownNavbarLink"
                  class="block py-2 px-3 text-white"
                  data-dropdown-toggle="dropdownNavbar"
                >
                  Documentos
                  <svg
                    class="inline-block w-2.5 h-2.5 ms-2.5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 10 6"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 1 4 4 4-4"
                    />
                  </svg>
                </button>
                <div
                  id="dropdownNavbar"
                  class="py-2 hidden font-normal divide-y rounded-lg shadow-sm w-44 bg-gray-700 divide-gray-600"
                >
                  <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li v-for="documento in documentos" v-bind:key="documento.nombre">
                      <RouterLink :to="documento.path" class="block px-4 py-2 hover:bg-gray-900">{{
                        documento.nombre
                      }}</RouterLink>
                    </li>
                  </ul>
                </div>
              </li>
            </div>
          </li>
          <li>
            <RouterLink to="/anexos" class="block py-2 px-3 text-white">Anexos</RouterLink>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<style scoped>
.router-link-active {
  color: lightblue;
}

a:hover,
button:hover {
  text-decoration: underline;
}

nav.barra-superior {
  z-index: 9999;
  position: sticky;
  opacity: 0;
  transform: translateX(50px);
}

nav.revealed {
  opacity: 1;
  transform: translateX(0);
  transition:
    opacity 0.5s ease-out,
    transform 0.5s ease-out;
}
</style>
