<script lang="ts" setup>
import { onMounted, onUnmounted, ref } from 'vue'
import { initFlowbite, Modal } from 'flowbite'
import ModalInformaciones from './ModalInformaciones.vue'

onMounted(() => {
  const modalElement = document.querySelector('#modal-lavado-manos')
  if (modalElement) {
    lavadoManos.value = new Modal(modalElement as HTMLElement, {
      backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
      onShow: () => {
        const video = document.getElementById('video-lavado-manos') as HTMLVideoElement
        video.play()
      },
      onHide: () => {
        const video = document.getElementById('video-lavado-manos') as HTMLVideoElement
        video.pause()
        video.currentTime = 0
      },
    })
  }
  initFlowbite()
})

const direccion_ip = ref('')

try {
  const response = await fetch('https://api.ipify.org?format=json')
  const { ip } = (await response.json()) as { ip: string }
  direccion_ip.value = ip
} catch (error: unknown) {
  console.error(error)
  direccion_ip.value = 'Error tratando de obtener la Dirección IP. Vea la consola'
}

const lavadoManos = ref<Modal | null>(null)

const showModalManos = () => lavadoManos.value?.show()

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
  <ModalInformaciones />
  <button
    data-drawer-target="default-sidebar"
    data-drawer-toggle="default-sidebar"
    aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
  >
    <span class="sr-only">Open sidebar</span>
    <svg
      class="w-6 h-6"
      aria-hidden="true"
      fill="currentColor"
      viewBox="0 0 20 20"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        clip-rule="evenodd"
        fill-rule="evenodd"
        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
      ></path>
    </svg>
  </button>

  <aside
    id="default-sidebar"
    class="barra-lateral fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar"
    v-reveal-on-scroll
  >
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li>
          <a
            href="#"
            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group popup-hover"
            data-modal-target="modal-informaciones"
            data-modal-toggle="modal-informaciones"
          >
            <img class="w-6 h-6" src="/src/images/sidebar/informaciones.png" />
            <span class="ms-3">Informaciones</span>
          </a>
        </li>
        <li>
          <a
            href="#"
            @click="showModalManos"
            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group popup-hover"
          >
            <img class="w-6 h-6" src="/src/images/sidebar/lavado_de_manos.png" />
            <span class="flex-1 ms-3 whitespace-nowrap">Lavado de Manos</span>
          </a>
        </li>
        <li>
          <a
            href="http://10.4.49.60:8080/gestionTic/login.php"
            target="_blank"
            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group popup-hover"
          >
            <img class="w-6 h-6" src="/src/images/sidebar/incidencias_tic.png" />
            <span class="flex-1 ms-3 whitespace-nowrap">Incidencias TIC</span>
          </a>
        </li>
        <li>
          <a
            href="http://10.4.49.60:8080/PlataformaIncidencias/login.php"
            target="_blank"
            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group popup-hover"
          >
            <img class="w-6 h-6" src="/src/images/sidebar/recursos_fisicos.png" />
            <span class="flex-1 ms-3 whitespace-nowrap">Recursos Físicos</span>
          </a>
        </li>
        <li>
          <a
            href="http://172.30.30.2/portal_salud_funcionaria/web/"
            target="_blank"
            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group popup-hover"
          >
            <img class="w-6 h-6" src="/src/images/sidebar/salud_funcionaria.png" />
            <span class="flex-1 ms-3 whitespace-nowrap">Salud Funcionaria</span>
          </a>
        </li>
        <li>
          <a
            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group popup-hover"
          >
            <img class="w-6 h-6" src="/src/images/sidebar/ip.png" />
            <span class="flex-1 ms-3 whitespace-nowrap">{{ direccion_ip }}</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <!-- Modal Lavado de manos -->
  <div
    id="modal-lavado-manos"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
  >
    <!-- Contenido -->
    <div class="relative h-full w-1/3 bg-white rounded-lg shadow-sm">
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
        <h3 class="text-xl font-semibold text-gray-900">Protocolo Lavado de Manos</h3>
        <button
          type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="modal-lavado-manos"
        >
          <svg
            class="w-3 h-3"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 14 14"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
            />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Cuerpo del modal  -->
      <div class="m-3 flex items-center justify-center">
        <video width="70%" id="video-lavado-manos">
          <source src="/src/embeds/lavado_de_manos.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
  </div>
</template>

<style scoped>
a.popup-hover {
  transition:
    transform 0.3s ease-in-out,
    background-color 0.3s ease-in-out,
    color 0.3s ease-in-out;
}

a.popup-hover:hover {
  transform: translateX(10px);
  background-color: white;
  color: #111827;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

aside.barra-lateral {
  opacity: 0;
  transform: translateX(50px);
}

aside.revealed {
  opacity: 1;
  transform: translateX(0);
  transition:
    opacity 0.5s ease-out,
    transform 0.5s ease-out;
}
</style>
