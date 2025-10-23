import AnexosTelefonicos from '@/views/AnexosTelefonicos.vue'
import ComiteParitario from '@/views/documentos/ComiteParitario.vue'
import PlanificacionEstrategica from '@/views/documentos/PlanificacionEstrategica.vue'
import SubdireccionAdministrativa from '@/views/documentos/SubdireccionAdministrativa.vue'
import SubdireccionMedica from '@/views/documentos/SubdireccionMedica.vue'
import SubdireccionPersonas from '@/views/documentos/SubdireccionPersonas.vue'
import UnidadPlanificacionControl from '@/views/documentos/UnidadPlanificacionControl.vue'
import PaginaPrincipal from '@/views/PaginaPrincipal.vue'
import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { path: '/', component: PaginaPrincipal },
    { path: '/documentos/sda', component: SubdireccionAdministrativa },
    { path: '/documentos/sdm', component: SubdireccionMedica },
    { path: '/documentos/sdp', component: SubdireccionPersonas },
    { path: '/documentos/cpr', component: ComiteParitario },
    { path: '/documentos/upc', component: UnidadPlanificacionControl },
    { path: '/documentos/ple', component: PlanificacionEstrategica },
    { path: '/anexos', component: AnexosTelefonicos },
  ],
})

export default router
