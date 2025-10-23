<script setup lang="ts">
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const documentos: Documento[] = [
  {
    nombre: 'Accidente Cortopunzante',
    url: 'http://10.4.49.116/sist/documentos/comite_paritario/2024/Accidente%20cortopunzante.pdf',
  },
  {
    nombre: 'Accidente de trabajo flujograma',
    url: 'http://10.4.49.116/sist/documentos/comite_paritario/2024/Accidente%20de%20trabajo%20flujograma.pdf',
  },
  {
    nombre: 'Accidente de trayecto',
    url: 'http://10.4.49.116/sist/documentos/comite_paritario/2024/Accidente%20de%20trayecto.pdf',
  },
  {
    nombre: 'Manual Organizacional Comite Paritario Higuiene y Seguridad',
    url: 'http://10.4.49.116/sist/documentos/comite_paritario/2024/Manual+Organizacional+Comite+Paritario+de+Higiene+y+Seguridad+V2%20(1).pdf',
  },
  {
    nombre:
      'Protocolo de Manejo de la Exposición laboral a sangre y fluidos corporales potencialmente infectantes',
    url: 'http://10.4.49.116/sist/documentos/comite_paritario/2024/Protocolo+de+Manejo+de+Exposici%C3%B3n+Laboral+a+Sangre+y+Fluidos+Corporales+RH+4.2%20(1).pdf',
  },
  {
    nombre: 'Rex 2255 - Manual Organizacional Comité Paritario de Higiene y Seguridad.',
    url: 'http://10.4.49.116/sist/documentos/comite_paritario/REHP2255.pdf',
  },
  {
    nombre: 'Correo: comiteparitario.hpl@redsalud.gob.cl',
    url: 'http://10.4.49.116/sist/comiteparitario.hpl@redsalud.gob.cl',
  },
  {
    nombre: 'Protocolo de acciones a seguir frente a accidentes laborales para funcionarios HPL.',
    url: 'https://www.google.cl/',
  },
]
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Comité Paritario</h1>
    <div class="h-6" />
    <div class="grid w-full grid-cols-1 gap-4">
      <DocumentoSda nombre="Documentos" :documentos="documentos" />
    </div>
  </div>
</template>
