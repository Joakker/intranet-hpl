<script setup lang="ts">
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const devengo: Documento[] = [
  {
    nombre: 'Transformacion Devengo',
    ruta: 'http://10.4.49.60:8080/transformacion_archivos/devengo/inicio.php',
  },
]

const instrucciones: Documento[] = [
  {
    nombre: '1° Verificar formato',
  },
  {
    nombre: '2° Subir documento',
  },
  {
    nombre: '3° Descarga automática de documento transformado',
  },
]
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Unidad de Planificación y Control</h1>
    <div class="h-6" />
    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Devengo" :documentos="devengo" />
      <DocumentoSda nombre="Instrucciones" :documentos="instrucciones" />
    </div>
  </div>
</template>
